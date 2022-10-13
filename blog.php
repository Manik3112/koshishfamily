<?php
$servername = "localhost";
$username = "vdrayoti_wp568";
$password = "Kf@123";
$dbname = "vdrayoti_wp568";
date_default_timezone_set("Asia/Kolkata");

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
<?php
$sql = "SELECT * FROM blog";
$result = $conn->query($sql);
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
</head>

<body>
  <!-- ======================header started====================== -->
  <header>
    <div class="my-nav">
      <div class="container">
        <div class="row">
          <div class="nav-items">
            <div class="logo">
              <img height="65px" width="70px" src="assets/images/logo.png">
            </div>
            <div class="menu-toggle">
              <div class="menu-hamburger"></div>
            </div>
            <div class="menu-items">
              <div class="menu">
                <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about-us.html">About Us</a></li>
                  <li><a href="services.html">Services</a></li>
                  <li><a href="contact-us.html">Contact Us</a></li>
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
                          <h3>Blog</h3>
                          <ol>
                              <li>Home<i class="far fa-angle-double-right"></i></li>
                              <li>Blog</li>
                          </ol>
                      </div>
                  </div>
              </div>
          </div>
      </section>

    <!-- ======================Bg-05 started====================== -->

    <section class="bg-05">
      <div class="container">
        <div class="col-12">
          <div class="heading">
            <h2>Blog Posts</h2>
          </div>
        </div>

        <div class="blog-main-card d-flex">
          <?php
          if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            ?>
          <article class="blog-sub">
            <div class="blog-content">
              <img src="<?php echo $row['image']; ?>">
            </div>
            <div class="blog-content-section">
              <div class="blo-content-title">
                <h4><?php echo $row['title']; ?></h4>
                <p><?php echo $row['content']; ?></p>
              </div>
              <div class="blog-admin">
                <ol>
                  <li><i class="fal fa-user-tie"></i> By Admin</li>
                </ol>
              </div>
            </div>
          </article>
          <?php
          }
          }
          ?>
        </div>
      </div>
    </section>

  </main>

  <!-- =====================>>>>>Footer Started>>>>>======================== -->

  <footer>
    <div class="copy-right">
      <div class="container">
        <div class="copy-right-card">
         <p>2021 @ All Rights Reserved Designed and developed by<a
             href="index.html">KOSHIHS</a></p>
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