<!DOCTYPE html>
<html lang="en">
	<head>
	<!--META TAGS -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

    <!--LINKING CSS -->
    <!--FONTAWESOME CSS-->
    <link rel="stylesheet" href="vendors/font-awesome/font-awesome.css">
    
    <!--OWL CAROUSEL-->
    <link rel="stylesheet" href="vendors/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/assets/owl.theme.blue.css">

    <!--CUSTOM CSS -->
    <link rel="stylesheet" media="screen" href="vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="assets/css/mystyles.css">
 	
	</head>
   <body>
      
<!--NAVBAR-->
<?php
        require_once("includes/navbar.php");
        ?>
<!--    END OF NAVBAR-->
<div class="clear-fix"></div>
<div class="container">
    <div class="row ">
              <div class="col-md-12">
                <div class=" song-carousel owl-carousel owl-theme">
                 <div class="carousel-img">
                  <img src="carousel-images/arijit.jpg" alt="">
                  </div><!--.carousel-img-->
                  <div class="carousel-img">
                  <img src="carousel-images/backg.jpg" alt="">
                  </div><!--.carousel-img-->
                  <div class="carousel-img">
                  <img src="carousel-images/bangbang.jpg" alt="">
                  </div><!--.carousel-img-->
              </div><!--.song-carousel-->
          </div><!--.col-md-12-->
      </div><!--.row-->
</div><!--.container-->



<!--QUEUE SECTION-->
    <?php
        require_once("includes/queue.php");
        ?>
    <!--END OF QUEUE-->
    <!--INCLUDING PAGES-->
         <?php
         require_once("fetch_song.php")
      ?>
	<!--OWL CAROUSEL-->
   <script src="scripts/jquery-3.3.1.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<!--    <script src="vendors/bootstrap/js/bootstrap.min.js"></script>-->
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!-- CUSTOM SCRIPTS-->
<!--    <script src="scripts/script-home.js"></script>-->
   </body>
</html>