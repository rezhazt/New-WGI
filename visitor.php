<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <link rel="stylesheet" href="css/style.css">

    <title>Form Visitor</title>
</head>
<body>

    <!-- navbar -->
    <div class="navbar-fixed">
            <nav>
              <!-- <div class="container"> -->
                <div class="nav-wrapper">
                  <a style="padding-left: 30px;" href="index.php" class="brand-logo">PT. Globalindo Intimates</a>
                  <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                  <ul class="right hide-on-med-and-down">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php?page=#about">About Us</a></li>
                    <li><a href="index.php?page=#product">Product</a></li>
                    <li><a href="#">Achievement</a></li>
                    <li><a href="event.php">Event</a></li>
                    <li><a href="index.php?page=#contact">Contact</a></li>
                    <li><a href="visitor.php">Visitor</a></li>
                    <li><a href="login.php">Login</a></li>
                  </ul>
                </div>
              <!-- </div> -->
            </nav>
        </div>
        <!-- akhir navbar -->

        <!-- side-nav -->
        <ul class="sidenav" id="mobile">
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Product</a></li>
            <li><a href="#">Achievement</a></li>
            <li><a href="#">Event</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Visitor</a></li>
            <li><a href="#">Login</a></li>
        </ul>
        <!-- akhir side-nav -->

    <!-- 
    <section class="ketentuan scrollspy" id="ketentuan">
          <div class="container">
            <div class="row">
              <h3 class="light grey-text text-darken-3 center">Ketentuan</h3>
              <hr class="center" style="width: 300px; margin-bottom: 30px; border-top: 5px solid black">
              <div class="row">
                <div class="col m12 12">
                  <p style="text-align: justify;">Selamat datang di PT Globalindo Intimates Klaten, silahkan mengisi formulir ini sebelum memasuki area perusahaan. Mohon menggunakan HURUF KAPITAL/BESAR. Setelah submit formulir ini, calon kandidat masing-masing akan mendapatkan QR CODE gambar yang diemail sesuai email yang diisi. silahkan cek email H-1 sebelum kedatangan di PT Globalindo Intimates (cek email di kotak masuk atau kotak spam pesan). QR CODE tersebut wajib ditunjukkan saat datang ke PT Globalindo Intimates di Gerbang Security Utama (menggunakan HP tidak perlu di cetak).</p>
                </div>
              </div>
              <div class="row">
                <div class="col m12 12">
                <p style="text-align: justify;">Sesuai Keputusan Menteri Kesehatan Nomor HK.01.07/MENKES/328/2020 tentang pengendalian COVID-19 di tempat kerja. Serta demi kesehatan dan keselamatan bersama di area PT Globalindo Intimates, kejujuran anda kami harapkan dalam menjawab pertanyaan dibawah ini, isi dengan pilihan yang sesuai pada kolom jawaban bila sesuai dengan pernyataan yang ada.									</p>
                </div>
              </div>  
            </div>
          </div>
        </section>
     -->

    <!-- form-formulir -->
    <section class="form_formulir" id="form_formulir">
        <div class="container">
            <div class="row">
                <div class="col m12 12">
                    <form action="adapter_form_visitor.php" method="post">
                        <div class="card-panel">
                            <h5 class="center" style="margin-bottom: 50px;">FORMULIR TAMU & PELAMAR</h5>
                            <p style="text-align: justify;">Selamat datang di PT Globalindo Intimates Klaten, silahkan mengisi formulir ini sebelum memasuki area perusahaan. Mohon menggunakan HURUF KAPITAL/BESAR. Setelah submit formulir ini, calon kandidat masing-masing akan mendapatkan QR CODE gambar yang diemail sesuai email yang diisi. silahkan cek email H-1 sebelum kedatangan di PT Globalindo Intimates (cek email di kotak masuk atau kotak spam pesan). QR CODE tersebut wajib ditunjukkan saat datang ke PT Globalindo Intimates di Gerbang Security Utama (menggunakan HP tidak perlu di cetak). Terima kasih.</p>
                            <div class="input-field">
                                <input style="height: 60px;" type="text" name="idCard" require>
                                <label for="idCard">No. KTP/KITAS/PASSPORT</label>
                            </div>
                            <div class="input-field">
                                <input style="height: 60px;" type="text" name="fullname" require>
                                <label for="fullname">Nama sesuai KTP (Huruf Besar)</label>
                            </div>
                            <div class="input-field">
                                <input style="height: 60px;" type="text" name="wa"  require>
                                <label for="wa">No. Telepon aktif whatsapp</label>
                            </div>
                            <div class="input-field">
                                <input style="height: 60px;" type="email" name="email" require class="validate">
                                <label for="email">Email pribadi & aktif</label>
                            </div>
                            <div class="input-field">
                                <input style="height: 60px;" type="date" name="visitDate" require>
                                <label for="visitDate">Tanggal kedatangan</label>
                            </div>
                            <div><p>
                                Keperluan </p>
                                <label>
                                    <input type="radio" class="filled-in" name="tujuan" value="Tamu"/>
                                    <span>Tamu</span>
                                </label>
                                <label>
                                    <input type="radio" class="filled-in" name="tujuan" value="Pelamar Pekerjaan"/>
                                    <span>Pelamar Pekerjaan</span>
                                    <br></label>
                            </div>
                        </div>

                        <div class="card-panel">
                        <h5 class="center" style="margin-bottom: 50px;">FORMULIR PENILAIAN RESIKO COVID 19</h5>
                        <p style="text-align: justify;">Sesuai Keputusan Menteri Kesehatan Nomor HK.01.07/MENKES/328/2020 tentang pengendalian COVID-19 di tempat kerja. Serta demi kesehatan dan keselamatan bersama di area PT Globalindo Intimates, kejujuran anda kami harapkan dalam menjawab pertanyaan dibawah ini, isi dengan pilihan yang sesuai pada kolom jawaban bila sesuai dengan pernyataan yang ada.</p>
                            
                        <div>
                            <p>1. Apakah anda sedang/pernah mengalami demam/batuk/pilek/sakit tenggorokan/sesak nafas dalam 14 hari terakhir ?</p>
                                <label>
                                    <input type="radio" class="filled-in" name="test1" value="1"/>
                                    <span>Iya</span>
                                </label>
                                <label>
                                    <input type="radio" class="filled-in" name="test1" value="0"/>
                                    <span>No</span>
                                </label>
                        </div>
                        <div>
                            <p>2. Apakah anda sedang / pernah mengalami sakit kepala/nyeri otot/gatal-gatal/infeksi mata/hilang penciuman/sakit perut dalam 14 hari terakhir ?</p>
                                <label>
                                    <input type="radio" class="filled-in" name="test2" value="1"/>
                                    <span>Iya</span>
                                </label>
                                <label>
                                    <input type="radio" class="filled-in" name="test2" value="0"/>
                                    <span>No</span>
                                </label>
                        </div>
                        <div >
                            <p>3. Dalam 14 hari terakhir, apakah anda pernah menggunakan transportasi umum? (Bus, Pesawat, Kereta, Kapal dan Moda Transportasi lainnya)</p>
                                <label>
                                    <input type="radio" class="filled-in" name="test3" value="1"/>
                                    <span>Iya</span>
                                </label>
                                <label>
                                    <input type="radio" class="filled-in" name="test3" value="0"/>
                                    <span>No</span>
                                </label>
                        </div>
                        <div >
                            <p>4. Dalam 14 hari terakhir, apakah anda pernah mengikuti kegiatan yang dihadiri oleh orang banyak ?</p>
                                <label>
                                    <input type="radio" class="filled-in" name="test4" value="1"/>
                                    <span>Iya</span>
                                </label>
                                <label>
                                    <input type="radio" class="filled-in" name="test4" value="0"/>
                                    <span>No</span>
                                </label>
                        </div>
                        <div >
                            <p>5. Dalam 14 hari terakhir, apakah anda pernah melakukan perjalanan keluar kota/negara lain ?</p>
                                <label>
                                    <input type="radio" class="filled-in" name="test5" value="1"/>
                                    <span>Iya</span>
                                </label>
                                <label>
                                    <input type="radio" class="filled-in" name="test5" value="0"/>
                                    <span>No</span>
                                </label>
                        </div>
                        <div >
                            <p>6. Dalam 14 hari terakhir, apakah anda pernah keluar rumah / tempat umum ? (pasar, fasilitas kesehatan, kerumunan dan kegiatan lainnya)</p>
                                <label>
                                    <input type="radio" class="filled-in" name="test6" value="1"/>
                                    <span>Iya</span>
                                </label>
                                <label>
                                    <input type="radio" class="filled-in" name="test6" value="0"/>
                                    <span>No</span>
                                </label>
                        </div>
                        <div >
                            <p>7. Dalam 14 hari terakhir, apakah anda pernah memiliki riwayat kontak dengan kasus konfirmasi, probable atau suspek COVID-19? <br> - Kontak erat adalah orang yang memiliki riwayat kontak dengan kasus probable atau konfirmasi COVID-19 <br> - Konfirmasi adalah Pasien yang terinfeksi COVID-19 dengan hasil pemeriksaan tes positif melalui pemeriksaan Swab-PCR <br> - Kasus Probable (PDP) adalah kasus suspek dengan ISPA Berat/ARDS***/ meninggal dengan gambaran klinis yang meyakinkan COVID-19 dan belum ada hasil pemeriksaan laboratorium RT-PCR</p>
                                <label>
                                    <input type="radio" class="filled-in" name="test7" value="1"/>
                                    <span>Iya</span>
                                </label>
                                <label>
                                    <input type="radio" class="filled-in" name="test7" value="0"/>
                                    <span>No</span>
                                </label>
                        </div>
                        <div >
                            <p>8. Menyatakan bahwa saya memberikan pernyataan dengan sejujur-jujurnya. Apabila dikemudian hari pernyataan saya tdak benar/jujur, saya bersedia untuk bertanggung jawab atas apa yang saya nyatakan. Pastikan data yang anda masukkan sudah benar sebelum menyelesaikan form penilaian online ini.</p>
                                <label>
                                    <input type="radio" class="filled-in" name="test8" value="1"/>
                                    <span>Iya</span>
                                </label>
                                <label>
                                    <input type="radio" class="filled-in" name="test8" value="0"/>
                                    <span>No</span>
                                </label>
                        </div>
                        </div>
                        
                        <button type="submit" class="btn" name="submit">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end formulir -->

    <!-- footer -->
    <footer class="red darken-1 white-text center" style="padding: 10px 0;">
        <p>Copyright ©2021 All rights reserved | Made PT. Globalindo Intimates</p>
    </footer>
    <!-- end-footer -->
    



    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <!-- script-side-nav -->
    <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);
      </script>
      <!-- akhir script-nav -->

    <!-- datepicker -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var date = document.querySelectorAll('.datepicker');
            var tgl = M.Datepicker.init(date, {
                format: 'dd-mm-yyyy'
            });
        });
    </script>
    <!-- end-datepicker -->

    <!-- scrollspy -->
    <script>
        const scroll = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll, {
          scrollOffset: 65
        });
      </script>
      <!-- end-scrollspy -->
</body>
</html>