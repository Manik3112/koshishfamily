<?php
  $myfile = fopen("progressBar.txt", "r") or die("Unable to open file!");
  $savedValue = fread($myfile,filesize("progressBar.txt"));
  fclose($myfile);
  $savedValue = (float) $savedValue;
  $barValue = ($savedValue / 20)*100;
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>KOSHISH</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css" />
    <script src="assets/js/banner.js"></script>
    <style>
      .wrapper {
        background-color: #fff;
        border-radius: 5px;
      }
    </style>
</head>

<body>
  <!-- ======================header started====================== -->
  <header>
    <div class="my-nav">
      <div class="container">
        <div class="row">
          <div class="nav-items">
            <div class="logo">
              <a href="index.html"><img height="65px" width="70px" src="assets/images/logo.png"></a>
            </div>
            <div class="menu-toggle">
              <div class="menu-hamburger"></div>
            </div>
            <div class="menu-items">
              <div class="menu">
                <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about-us.html">About Us</a></li>
                  <li><a href="services.html">Preamble</a></li>
                  <li><a href="contact-us.html">Contact Us</a></li>
                  <li><a target="_blank" href="https://m.facebook.com/1koshish"><i class="fab fa-facebook"></i></a></li>
                  <li><a target="_blank" href="https://www.youtube.com/channel/UC-tJISVz2rmDxJ-XHKWOx7w?app=desktop"><i class="fab fa-youtube"></i></a></li>
                  <li><a target="_blank" href="https://www.instagram.com/koshish_family/"><i class="fab fa-instagram"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- ======================Main started====================== -->

  <main>

    <!-- ============abt-01 Section  Start============ -->

    <section class="abt-01">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading-wrapper">
                        <h3>Koshish Family Needs your Help</h3>
                        <ol>
                            <li>Home<i class="far fa-angle-double-right"></i></li>
                            <li>help-us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================Bg-03 started====================== -->

    <section class="bg-03">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="heading">
              <h2>Koshish Emergency</h2>
            </div>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <div>
              <div class="heading">
                <h2>Target 20 Lakhs</h2><span style="display: inline-block;width: 25px;"></span>
                <b class="text-success">Reached <?= $savedValue ?> Lakhs</b>
                <div class="progress">
                  <div class="progress-bar progress-bar-animated progress-bar-striped bg-success" role="progressbar" style="width: <?= $barValue ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
            <div class="wrapper">
              <div class="content">
                <ol>
                  <li>
                    <i class="fal fa-hands-heart"></i>
                    <h3>Situation going on</h3>
                    <p>Since last year September Dharamvir is unwell and has been smiling through all the pain. Recently the doctor has prescribed dialysis to better his condition and once the Urea is under control he needs to go for an urgent kidney transplant to get another chance at life. <br><br>

                      Many of you know Dharma personally and are amazed by his beautiful smile, ready to do attitude, and helpful nature. He is always the first one to volunteer for Any drive and is always there to help anyone in need. He has been the shine and light of Koshish family and his other friends and family for so long and now he needs our help to continue to shine. 
                      Consider donating and sharing among your friends. We are trying to save our family member but we need your support. For any other information you can contact the number. All the details will be timely updated.</p>
                  </li>
                </ol>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="wrapper">
                  <div class="content">
                    <ol>
                      <li>
                        <i class="fal fa-money"></i>
                        <h3>Help with UPI Payment</h3>
                        <p>Take Screenshot -> Open Payment App -> Scan Option -> Upload from Gallery</p>
                        <center>
                          <img src="./assets/dharma/scan1.jpeg" class="img img-thumbnail" />
                          </center>
                        </p>
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
              <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                <div class="wrapper">
                  <div class="content">
                    <ol>
                      <li>
                        <img src="./assets/dharma/banner.jpeg" />
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="wrapper">
                  <div class="content">
                    <ol>
                      <li>
                        <i class="fal fa-hands-heart"></i>
                        <h3>Problem</h3>
                        <p> Attaching the Medical History of our family member Dharma <br>
                          <center>
                            <a class="btn" target="_blank" href="./assets/dharma/history.pdf" style="background-color: #fd580b;color: #fff;">Download Medical History</a>
                          </center>
                        </p>
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="wrapper">
                  <div class="content">
                    <ol>
                      <li>
                        <i class="fal fa-calendar-plus"></i>
                        <h3>Reports</h3>
                        <p> Attaching the Medical Reports of our family member Dharma <br>
                          <center>
                            <a class="btn" target="_blank" href="./assets/dharma/reports.pdf" style="background-color: #fd580b;color: #fff;">Download Medical History</a>
                          </center>
                        </p>
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="wrapper">
              <div class="content">
                <ol>
                  <li>
                    <i class="fal fa-calendar-plus"></i>
                    <h3>Help us, by Helping him</h3>
                    <p><img src="./assets/dharma/paytm.jpeg" class="img img-thumbnail" alt="dharma" /></p>
                  </li>
                </ol>
              </div>
              <div class="row">
                <div class="col-12">
                  <p><img src="./assets/dharma/image.jpeg" class="img img-thumbnail" alt="dharma" /></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-4 col-xs-6">
            <div class="wrapper">
              <div class="content">
                <ol>
                  <li>
                    <i class="fal fa-money"></i>
                    <h3>Help with UPI Payment</h3>
                    <p>Take Screenshot -> Open Payment App -> Scan Option -> Upload from Gallery</p>
                      <center>
                        <img src="./assets/dharma/scan2.jpeg" class="img img-thumbnail" />                          
                      </center>
                    </p>
                  </li>
                </ol>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-4 col-xs-6">
            <div class="wrapper">
              <div class="content">
                <ol>
                  <li>
                    <i class="fal fa-money"></i>
                    <h3>Help with other amount</h3>
                      <center>
                        <p>Paytm/UPI/Google Pay/PhonePe</p>
                        <b>91-7500338063</b><br>
                        <b>shobhitbhatt.sb@oksbi</b>
                      </center>
                    </p>
                  </li>
                </ol>
              </div>
            </div>
          </div>
          

        </div>
      </div>
    </section>
 
  </main>

  <!-- =====================>>>>>Footer Started>>>>>======================== -->

  <footer>
    <div class="copy-right">
      <div class="container">
        <div class="copy-right-card">
          <p>&copy 2012-2021 @ All Rights Reserved Designed and developed by<a
            href="index.html">KOSHISH</a> Tech Titans</p>
        </div>
      </div>
    </div>
  </footer>
</body>


<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>
</html>