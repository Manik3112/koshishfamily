<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($title) ?></title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/art.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/fontawesome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
<!-- ////////////////////////////////////////////////////////////////////////////////////////
                               START SECTION 1 - THE NAVBAR SECTION  
/////////////////////////////////////////////////////////////////////////////////////////////-->
<nav class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?= esc($backLink) ?>">
        <img src="<?= base_url() ?>images/arts/logo.png" height="50px" alt="logo image"><b>Koshish Family</b>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item inline-flex">
          <a href="https://www.instagram.com/koshish_family" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="https://www.youtube.com/@KoshishFamily" target="_blank"><i class="fab fa-youtube"></i></a>
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#services">Kids</a></li>
          <li class="nav-item"><a class="nav-link" href="#timeline">Timeline</a></li>
          <!-- <li class="nav-item"><a class="nav-link" href="#faq">faq</a></li> -->
          <li class="nav-item"><a class="nav-link" href="#portfolio">Events</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">contact</a>
          <li class="nav-item"><a class="nav-link" target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSd091F7yX0SJMDXT_eLybLfdX69u54_kKmCAwFaqCqXjuo-Dw/viewform?usp=send_form">Join Us</a>
          </li>
        </ul>
        <!-- <button type="button" class="rounded-pill btn-rounded">
          +1 728365413
          <span>
            <i class="fas fa-phone-alt"></i>
          </span>
        </button> -->
      </div>
    </div>
  </nav>