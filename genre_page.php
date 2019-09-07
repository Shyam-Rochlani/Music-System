
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

    <!--CUSTOM CSS -->
    <link rel="stylesheet" media="screen" href="vendors/bootstrap/css/bootstrap.min.css">
    <link href="styles.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="assets/css/mystyles.css">
 	
	</head>
<body>
    <?php require_once("includes/navbar.php");?>
    <div class="container">
    <div class="row ">
              <div class="col-md-12">
                <div class=" song-genre-page">
                 <div class="inner-genre-imgs">
                  <img src="image/<?php echo $_GET['genre_name']; ?>.jpg" alt="">
                  </div><!--.carousel-img-->
              </div><!--.song-carousel-->
          </div><!--.col-md-12-->
      </div><!--.row-->
</div><!--.container-->

    <?php require_once("includes/queue.php");?>
  <div class="container inner-genre-body">
      <div class="row">
          <table class="table">
          <col width ="200">
       <col width = "300">
       <col width = "60">
        <thead>
            <tr>
                <th>IMAGE</th>
                <th>NAME</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        
<?php
            include_once("includes/db.php");
            $genre_name = $_GET['genre_name'];
//            $query = "Select * from genre where genre_name = '$genre_name'";
//            $result = mysqli_query($connection,$query);
//            $row = mysqli_fetch_assoc($result);
//            $genre_id = $row['genre_id'];
            $query = "Select * from songs where genre = '$genre_name'";
            $song_query = mysqli_query($connection,$query);

                while($fetch_song = mysqli_fetch_assoc($song_query)){
        $song_id = $fetch_song['song_id'];
        $song_image = $fetch_song['cover_img'];
        $song_name = $fetch_song['song_name'];
        $artist = $fetch_song['artist'];
        //echo;
//        echo"<img src='image/$song_image' height='150px' width='200px' id='$song_id' class='music-img'>";
//        echo"<p class='song-name'>$song_name</p>";
        echo "<tr class='music-div' id='$song_id'>
                <td class='queue-img music-img'><img src='image/$song_image'></td>
                <td><p class='song-name'>$song_name</p>
                <p>$artist</p></td>
            </tr>
            <td><button class='add-to-que' id='add-to-que-$song_id'>Add To List</button></td>"; 
    }

            ?>
        </tbody>
    </table>

      </div>
  </div>
  <div style="margin-bottom:100px;"></div> 
   <div class="audio-tag-div">
       <div>
       <p id="song-p-tag">Song Name</p>
        <audio  controls autoplay="" class="audio-tag" id="audio-tag-id" src="">
        </audio>
        </div>
    </div> 
</body>
<script src="scripts/jquery-3.3.1.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
   <script src="js/script.js"></script>
    <!-- CUSTOM SCRIPTS-->
<!--    <script src="../scripts/script.js"></script>-->
</html>