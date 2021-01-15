<?php
/**
 * @title            QR Code
 * @desc             Compatible to vCard 4.0 or higher.
 *
 * @author           Pierre-Henry Soria <ph7software@gmail.com>
 * @copyright        (c) 2012-2018, Pierre-Henry Soria. All Rights Reserved.
 * @license          GNU General Public License <http://www.gnu.org/licenses/gpl.html>
 * @version          1.2
 */

class QRCode
{
    const API_URL = 'https://chart.googleapis.com/chart?chs=';

    private $sData;

    /**
     * The name of the idDB.
     *
     * @param string $sName
     *
     * @return self
     */
    public function idDB($sidDB)
    {
        $this->sData .= $sidDB;
        return $this;
    }

    /**
     * Generate the QR code.
     *
     * @return self
     */
    public function finish()
    {
        $this->sData .= 'END:VCARD';
        $this->sData = urlencode($this->sData);
        return $this;
    }

    /**
     * Get the URL of QR Code.
     *
     * @param integer $iSize Default 150
     * @param string $sECLevel Default L
     * @param integer $iMargin Default 1
     *
     * @return string The API URL configure.
     */
    public function get($iSize = 500, $sECLevel = 'L', $iMargin = 1)
    {
        return self::API_URL . $iSize . 'x' . $iSize . '&cht=qr&chld=' . $sECLevel . '|' . $iMargin . '&chl=' . $this->sData;
    }

    /**
     * The HTML code for displaying the QR Code.
     *
     * @return void
     */
    public function display()
    {
        echo '<p class="center"><img src="' . $this->_cleanUrl($this->get()) . '" alt="QR Code" /></p>';
    }

    /**
     * Clean URL.
     *
     * @param string $sUrl
     *
     * @return string
     */
    private function _cleanUrl($sUrl)
    {
        return str_replace('&', '&amp;', $sUrl);
    }
}
