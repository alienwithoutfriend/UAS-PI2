<!DOCTYPE html>
<html>
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>ABOUT</p>
  </a>
  <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-book w3-xxlarge"></i>
    <p>EDUCATION</p>
  </a>
  <a href="#ex" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-desktop w3-xxlarge"></i>
    <p>EXPERIENCE</p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTACT</p>
  </a>
  <a href="<?= base_url('welcome/Tologin')?>" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-sign-in w3-xxlarge"></i>
    <p>LOGIN</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
    <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
    <a href="<?= base_url('welcome/Tologin')?>" class="w3-bar-item w3-button" style="width:25% !important">LOGIN</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
      <?php
         foreach ($allprofil as $no => $ap) {
      ?>
    <h1 class="w3-jumbo"><span class="w3-hide-small">I'm</span> <?= $ap['nama']; ?></h1>
    <p><?= $ap['profesi']; ?></p>
      <?php } ?>
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-light-grey">About Me</h2>
    <hr style="width:200px" class="w3-opacity">
    <?php
         foreach ($allprofil as $no => $ap) {
      ?>
    <p>Hello my name's <?= $ap['nama']; ?>. I'm as a <?= $ap['profesi']; ?> from <?= $ap['alamat']; ?>
    </p>
    <?php } ?>
  <!-- End About Section -->
  </div>
  
  <!-- Portfolio Section -->
  <div class="w3-content w3-justify w3-text-white w3-padding-64" id="photos">
    <h2 class="w3-text-light-grey">My Education</h2>
    <hr style="width:200px" class="w3-opacity">
    <table>
      <thead>
            <th>No</th>
            <th>Nama Instansi</th>
            <th>Tahun Lulus</th>
      </thead>
      <tbody>
          <?php
          foreach ($allpendidikan as $no => $ap) {
          ?>
            <tr>
              <th scope="row"><?= $no + 1 ?></th>
              <td><?= $ap['instansi']; ?></td>
              <td><?= $ap['lulus']; ?></td>
            </tr>
          <?php } ?>
        </tbody>
    </table>
  <!-- End Portfolio Section -->
  </div>

  <!-- Portfolio Section -->
  <div class="w3-content w3-justify w3-text-white w3-padding-64" id="ex">
    <h2 class="w3-text-light-grey">My Experience</h2>
    <hr style="width:200px" class="w3-opacity">
    <table>
    <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Perusahaan</th>
            <th scope="col">Jabatan</th>
            <th scope="col">Tahun Mulai</th>
            <th scope="col">Tahun Berakhir</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($allpengalaman as $no => $ap) {
          ?>
            <tr>
              <th scope="row"><?= $no + 1 ?></th>
              <td><?= $ap['perusahaan']; ?></td>
              <td><?= $ap['jabatan']; ?></td>
              <td><?= $ap['tahun_mulai']; ?></td>
              <td><?= $ap['tahun_akhir']; ?></td>
            </tr>
          <?php } ?>
        </tbody>
    </table>
  <!-- End Portfolio Section -->
  </div>

  <!-- Contact Section -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Contact Me</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Chicago, US</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: +00 151515</p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: mail@mail.com</p>
    </div><br>
    <p>Let's get in touch. Send me a message:</p>

    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-light-grey w3-padding-large" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
  <!-- End Contact Section -->
  </div>
  
    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">w3.css</a></p>
  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>
