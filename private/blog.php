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

if(isset($_GET['submit']) && $_POST['password'] == 'blogKoshish'){
  $slug = str_replace(" ","-",$_POST['title']);
  $slug = strtolower($slug);
  $sql = "INSERT INTO blog values('".$slug."','".$_POST['title']."','".$_POST['description']."','".$_POST['link']."')";
if ($conn->query($sql) === TRUE) {
  echo 'SUCCESS POSTED';
}
}
else{
  echo 'Not POSTED';
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>KOSHISH</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css" />
    <script src="../assets/js/banner.js"></script>
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
              <img height="65px" width="70px" src="../assets/images/logo.png">
            </div>
            <div class="menu-toggle">
              <div class="menu-hamburger"></div>
            </div>
            <div class="menu-items">
              <div class="menu">
                <ul>
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
                              <li>Hmoe<i class="far fa-angle-double-right"></i></li>
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

          <center>
        <form action="./blog.php?submit" method="POST">
          <div class="form-group">
            <label>Image Link</label>
            <input type="text" name="link" class="form-control" placeholder="Enter Link">
          </div>
          <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" placeholder="Title">
          </div>
          <div class="form-group form-check">
            <label class="form-check-label" for="exampleCheck1">Description</label>
            <textarea class="form-control" name="description" rows="5"></textarea>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
  </center>
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


<script src="../assets/js/jquery-3.2.1.min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/script.js"></script>
</html>