<!DOCTYPE html>
<html>
 <head>
  <title>MILE LONG SCROLL</title>
  <link rel="stylesheet" href="styles.css">
 </head>
 <body>
   <div>
    <p>
     <a href="https://www.instagram.com/continuousdrawingproject">Follow</a>
     <a href="https://www.continuousdrawingproject.com">About</a>
    </p>
  </div>
<?php
$dir = "images/";


  $imgs = glob("images/*.{jpg,jpeg,JPG,JPEG}", GLOB_BRACE);



  $num_imgs = count($imgs);
  for ($i = $num_imgs; $i >= 1; $i--) {
    echo "<a href='http://opensea.io/ContinuousDrawingProject' target='_blank'><img src='images/".$i.".jpg'></a>";
  }
?>
 </body>
</html>
