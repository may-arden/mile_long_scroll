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
// $dir = "images/";


  $imgs = glob("images/fullsize/*.{jpg,jpeg,JPG,JPEG}", GLOB_BRACE);



  $num_imgs = count($imgs);
  for ($i = $num_imgs; $i >= 1; $i--) {
    echo 
    "<div class='body text-center'>
      <a data-bs-toggle='modal' data-bs-target='#my-modal".$i."'>
        <img src='images/fullsize/".$i.".jpg' class='img-fluid' >
      </a>
    </div>";
    echo     
    "<div class='modal fade bd-example-modal-sm' id='#my-modal".$i."' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
      <div class='modal-dialog modal-sm'>
        <div class='modal-content'>
          <div class='modal-header'>
          </div>
          <div class='modal-body text-center'>
            <img src='images/small/".$i.".jpg' class='img-fluid'>
          </div>
          <div class='modal-footer'>
            <p>Title of Piece Goes Here </p>
            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
          </div>
        </div>
      </div>
    </div>";
  }
?>
 </body>
</html>
