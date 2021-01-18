<?php

include "connection.php";
$query = mysqli_query($kon, "SELECT * FROM tabel_visit ORDER BY idVisitor DESC LIMIT 1");

// Include the main TCPDF library (search for installation path).
require_once('tcpdf/tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetTitle('Tiket Berkunjung');

$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

$pdf->AddPage();

$pdf->SetFont('helvetica', '', 25);

$pdf->Write(0, 'KARTU PENGUNJUNG', '', 0, 'C', true, 0, false, false, 0);

$pdf->SetFont('helvetica', 'B', 35);

$pdf->Write(0, 'PT. GLOBALINDO INTIMATES', '', 0, 'C', true, 0, false, false, 0);

$pdf->SetFont('helvetica', '', 20);

$pdf->Write(0, 'Tiket terkirim ke email anda', '', 0, 'C', true, 0, false, false, 0);
$pdf->Write(0, 'atau dapat menyimpan tiket ini', '', 0, 'C', true, 0, false, false, 0);
$pdf->Write(0, 'Tunjukan di gerbang Pos Security utama ketika berkunjung', '', 0, 'C', true, 0, false, false, 0);

if (mysqli_num_rows($query) > 0) {

    while ($data = mysqli_fetch_array($query)) {

        $tujuan = $data["tujuan"];
        $idTamu = $data["idVisitor"];
        $email = $data["email"];

        $jumlah = $data["test1"] + $data["test2"] + $data["test3"] + $data["test4"] + $data["test5"] + $data["test6"] + $data["test7"] + $data["test8"];
        $name = $data["fullname"];
        $visit = date("d F Y", strtotime($data["visitDate"]));
        if ($jumlah < 5) {
            $risk = "Resiko Covid 19 : Rendah";
        } else {
            $risk ="Resiko Covid 19 : Tinggi";
        }
    }
}
$pdf->Ln();
$pdf->Ln();

$pdf->SetFont('helvetica', 'B', 25);
$pdf->Write(0, $tujuan, '', 0, 'C', true, 0, false, false, 0);

$style = array(

    'fgcolor' => array(0,0,0),
    'bgcolor' => false, //array(255,255,255)
    
);

$pdf->write2DBarcode($idTamu, 'QRCODE,Q', 68, 120, 75, 75, $style, 'C');

$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();

$pdf->Write(0, $name, '', 0, 'C', true, 0, false, false, 0);
$pdf->Write(0, $visit, '', 0, 'C', true, 0, false, false, 0);
$pdf->Write(0, $risk, '', 0, 'C', true, 0, false, false, 0);





// reset pointer to the last page
$pdf->lastPage();

//Close and output PDF document
$pdf->Output('tiketbartamu.pdf', 'I');
$attch = $pdf->Output('TIKET_BERTAMU.pdf', 'S');

//============================================================+
// END OF FILE
//============================================================+


//============================================================+

/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

//require 'vendor/Autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "GIsender.2021@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "GI123456";

//Set who the message is to be sent from
$mail->setFrom('gi.sender.2021@gmail.com', 'Globalindo Intimates');

//Set who the message is to be sent to
$mail->addAddress($email, $name);

//Set the subject line
$mail->Subject = 'Tiket Berkunjung PT Globalindo Intimates';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('tunjukan'));
$mail->addStringAttachment($attch,"TIKET_BERTAMU.pdf");

//Replace the plain text body with one created manually
$mail->Body = 'Tunjukan ke security Tiket dibawah ini saat anda berkunjung ke PT Globalindo Intimates';


//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
?>