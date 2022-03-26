<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<?php
if(isset($_POST['value'])){
  $number = $_POST['value'];
  echo $number;
  $myfile = fopen("progressBar.txt", "w") or die("Unable to open file!");
  $txt = $number;
  fwrite($myfile, $txt);
  fclose($myfile);
  die(); 
}
$myfile = fopen("progressBar.txt", "r") or die("Unable to open file!");
$savedValue = fread($myfile,filesize("progressBar.txt"));
fclose($myfile);
?>
<form method="post" action="">
  <label>Enter ProgressBar Value</label><br>
  <input type="text" name="value" value="<?= $savedValue ?>"><br>
  <input type="submit" value="submit">
</form>
</body>
</html>