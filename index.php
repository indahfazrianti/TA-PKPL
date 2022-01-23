<!DOCTYPE html>
<html lang="en">
  <head>
    <title>LAUNDRY POINT</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Navigasi Menu -->
    <link href="css/stylehome.css" rel="stylesheet">
    <!-- Galeri Foto -->
    <link href="css/gallery.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <!-- Intro Home Gambar -->
    <link href="css/gambar.css" rel="stylesheet" type="text/css">
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript">
      {
        $(".togel.tblmenu").click(function () {
        $(".menu").toggleClass("sh");
        });
    </script>
  </head>
  <body>
    <nav>
      <div class="wrap">
        <div class="title">
          <a href="index.php"><font face="jokerman">~~LAUNDRY POINT~~</font></a>
        </div>
        <div class="tblmenubox">
          <div class="togel tblmenu">
          </div>
        </div>
        <div class="MenuNavigasi">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#informasijasa">Informasi Jasa Laundry</a></li>
            <li><a href="#tentangkami">Tentang Kami</a></li>
            <li><a href="login.php">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div id="index.php">
      <div class="slider">
        <figure>
          <div class="slide"><img src="image/1.jpg"></div>
          <div class="slide"><img src="image/2.jpg"></div>
          <div class="slide"><img src="image/3.jpg"></div>
          <div class="slide"><img src="image/4.jpg"></div>
          <div class="slide"><img src="image/6.jpg"></div>
        </figure>
      </div>
    </div>
    <div id="informasijasa">
      <div class="gallery-section">
        <div class="inner-width">
          <br>
          <br>
          <h1>Apa Saja Jasa yang disediakan di Laundry Point ini ?</h1>
          <h3>
            <center>Tentunya di Laundry ini menyediakan 2 Jenis Paket, lalu apa saja itu ?
              <br>Yang Pertama ada Paket Reguler dan yang Kedua One Day Service ataupun bisa disebut juga dengan Paket Kilat.
            </center>
          </h3>
          <p>Paket Reguler umumnya biasa dikerjakan atau diproses selama 3-4 hari tergantung dengan kondisi cuaca jika sedang bersahabat, namun jika
            kondisi tidak cukup baik saat siang hari ketika turun hujan, maka proses pengerjaan laundry bisa semakin lama sampai 5 hari, dan 
            Paket One Day Service atau Kilat pasti sudah tahu kan artinya One Day Service ? bisa dibilang Paket dengan proses paling cepat dalam 1 hari selesai 
            dalam mencuci, menjemur, lalu disetrika, dan proses packing akan tetapi biaya untuk paket ini agak sedikit mahal bisa 2x harga dari paket reguler.
            Oke langsung saja kita tampilkan daftar jenis dan paket laundry yang sudah disediakan.
          </p>
          <div class="gallery">
            <a align="center" a href="image/PaketReguler.jpg" class="image">
            <img src="image/PaketReguler.jpg" alt="" border="2">
            </a>
            <div class="garisvertikal"></div>
            <a align="center" a href="image/PaketKilat.jpg" class="image">
            <img src="image/PaketKilat.jpg" alt="" border="2">
            </a>
          </div>
        </div>
      </div>
      <script>
        $(".gallery").magnificPopup({
          delegate: 'a',
          type: 'image',
          gallery:{
          enabled: true
          }
        });
      </script>
    </div>
    <div id="tentangkami">
    <br>
    <br>
    <h1>
      <center>Tentang Kami</center>
    </h1>
    <div class="baris">
      <div class="kolom">
        <center>
          <h3>Profil Laundry Point</h3>
        </center>
        <center><img alt="" src="image/6.jpg" width="520" height="250"></center>
        <p>Laundry point didirikan pada tahun 2016 yang terletak di Jl. Dr. Setia Budi No.38, Kel Panggung, Kec Tegal Timur, 
          Kota Tegal.
        </p>
        <p>Laundry merupakan layanan jasa yang dapat membantu diantaranya adalah pegawai, mahasiswa, dan masyarakat. Jasa laundry point dapat 
          berupa cuci, kering, dan setrika, atau setrika saja, itu pun mengikuti keinginan dari pelanggan. Jasa laundry point dalam pelayanannya 
          selain cuci dan setrika, menerima jasa cuci bed cover ukuran kecil maupun besar.
        </p>
      </div>
      <div class="kolom">
        <center>
          <h3>Profil Pemilik Laundry</h3>
        </center>
        <center><img alt="" src="image/7.jpg" width="520" height="350"></center>
        Perkenalkan Nama Saya Aditya Selaku Pemilik Usaha Laundry Point
        </br>
        Nama : Aditya
        </br>
        Tempat Tinggal : Kota Tegal
        </br>
        No. Telp : 0818-0431-5000
        </br>
        </br>
        Perkenalkan Juga Istri saya selaku Admin dari Laundry Point
        </br>
        Nama : Dwi
        </br>
        Tempat Tinggal : Kota Tegal
      </div>
    </div>
    <h3>
        <center>Waktu Buka Laundry</center>
      </h3>
      <table border="2" style="width: 20%" height="10%" align="center">
        <tr>
          <td>Senin</td>
          <th>Jam 08.00 - 17.00</th>
        </tr>
        <tr>
          <td>Selasa</td>
          <th>Jam 08.00 - 17.00</th>
        </tr>
        <tr>
          <td>Rabu</td>
          <th>Jam 08.00 - 17.00</th>
          </tr>
        <tr>
          <td>Kamis</td>
          <th>Jam 08.00 - 17.00</th>
        </tr>
        <tr>
          <td>Jumat</td>
          <th>Jam 08.00 - 17.00</th>
        </tr>
        <tr>
          <td>Sabtu</td>
          <th>Jam 08.00 - 17.00</th>
        </tr>
        <tr>
          <td>Minggu</td>
          <th>Jam 08.00 - 16.00</th>
        </tr>
      </table>
      <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.903617243368!2d109.13626074777434!3d-6.863508841281359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb7286b71059b%3A0xc349c270f06f01fd!2sLaundry%20Point!5e0!3m2!1sid!2sid!4v1623640258764!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>
    <div class="footer">
      <h2>Terima Kasih Sudah Mengunjungi Website Kami</h2>
      <h3>@ 2021 Copyright by LAUNDRY_POINT </h3>
      <h4>Template Simple Copyright</h4>
    </div>
  </body>
</html>