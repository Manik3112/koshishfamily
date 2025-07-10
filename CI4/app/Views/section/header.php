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
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/departments.css">
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
            <a href="https://www.instagram.com/koshish_family" target="_blank" aria-label="Instagram">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="width:24px; height:24px; fill:currentColor;">
                <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 
             114.9S339 319.5 339 255.9 287.7 141 224.1 
             141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 
             74.7-74.7 74.7 33.5 74.7 74.7-33.6 
             74.7-74.7 74.7zm146.4-194.3c0 14.9-12 
             26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 
             26.8-26.8 26.8 12 26.8 26.8zm76.1 
             27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 
             0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 
             58-36.2 93.9c-2.1 37-2.1 147.9 
             0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 
             34.4 93.9 36.2c37 2.1 147.9 
             2.1 184.9 0 35.9-1.7 67.7-9.9 
             93.9-36.2 26.2-26.2 34.4-58 
             36.2-93.9 2.1-37 2.1-147.8 
             0-184.8zM398.8 388c-7.8 19.6-22.9 
             34.7-42.6 42.6-29.5 11.7-99.5 
             9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 
             9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 
             29.5-11.7 99.5-9 132.1-9s102.7-2.6 
             132.1 9c19.6 7.8 34.7 22.9 42.6 
             42.6 11.7 29.5 9 99.5 9 132.1s2.7 
             102.7-9 132.1z" />
              </svg>
            </a>

            <a href="https://www.youtube.com/@KoshishFamily" target="_blank" aria-label="YouTube">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="width:24px; height:24px; fill:currentColor;">
                <path d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 
             64 288 64S117.2 64 74.6 
             75.5c-23.5 6.3-42 24.9-48.3 
             48.6-11.4 42.9-11.4 132.3-11.4 
             132.3s0 89.4 11.4 132.3c6.3 
             23.7 24.8 41.5 48.3 
             47.8C117.2 448 288 448 288 
             448s170.8 0 213.4-11.5c23.5-6.3 
             42-24.2 48.3-47.8 11.4-42.9 
             11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 
             213.5V175.2l142.7 81.2-142.7 81.2z" />
              </svg>
            </a>

            <a href="https://www.linkedin.com/company/koshishfamily/" target="_blank" aria-label="LinkedIn">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="width:24px; height:24px; fill:currentColor;">
                <path d="M416 32H31.9C14.3 32 0 46.5 0 
             64.3v383.4C0 465.5 14.3 480 
             31.9 480H416c17.6 0 32-14.5 
             32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 
             416H69V202.2h66.5V416zm-33.2-243c-21.3 
             0-38.5-17.3-38.5-38.5S80.9 
             96 102.2 96c21.2 0 38.5 17.3 
             38.5 38.5 0 21.3-17.2 38.5-38.5 
             38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 
             0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 
             30.6-34.5 62.9-34.5 67.2 0 79.7 
             44.3 79.7 101.9V416z" />
              </svg>
            </a>


          <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="departmentsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Departments
            </a>
            <ul class="dropdown-menu" aria-labelledby="departmentsDropdown">
              <li><a class="dropdown-item" href="/pathshala">Pathshala</a></li>
              <li><a class="dropdown-item" href="/collectdkure">Collection & Distribution</a></li>
              <li><a class="dropdown-item" href="/art-and-craft">Art & Craft</a></li>
            </ul>
          </li>
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