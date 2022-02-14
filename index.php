<!DOCTYPE html>
<html>
 <head>
  <title>MILE LONG SCROLL</title>
  <link rel="stylesheet" href="styles.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  
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
      <a data-bs-toggle='modal' data-bs-target='.bd-example-modal-sm".$i."'>
        <img src='images/fullsize/".$i.".jpg' class='img-fluid' >
      </a>
    </div>";
    echo     
    "<div class='modal fade bd-example-modal-sm".$i."' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

 </body>
</html>
