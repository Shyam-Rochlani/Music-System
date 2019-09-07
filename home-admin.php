<?php
include_once("includes/functions.php");
session_start();
//$connection = mysqli_connect("localhost","JUHI","juhistudylink","music_player");
include_once("includes/db.php");
?>
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
        <link rel="stylesheet" href="styles.css">
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
        require_once("includes/navbar-admin.php");
        ?>
            <!--    END OF NAVBAR-->

            <div class="container">
                <div class="row ">
                    <div class="col-md-12">
                        <div class=" song-carousel owl-carousel owl-theme">
                            <div class="carousel-img">
                                <img src="carousel-images/arijit.jpg" alt="">
                            </div>
                            <!--.carousel-img-->
                            <div class="carousel-img">
                                <img src="carousel-images/backg.jpg" alt="">
                            </div>
                            <!--.carousel-img-->
                            <div class="carousel-img">
                                <img src="carousel-images/bangbang.jpg" alt="">
                            </div>
                            <!--.carousel-img-->
                        </div>
                        <!--.song-carousel-->
                    </div>
                    <!--.col-md-12-->
                </div>
                <!--.row-->
            </div>
            <!--.container-->



            <!--QUEUE SECTION-->
            <?php
        require_once("includes/queue.php");
        ?>
                <!--END OF QUEUE-->
                <!--SONGS SECTION-->
                <div class="container songs-body">
                    <div class="new-category">
                        <div class="row">
<?php
       
    $query = "Select * from songs ";
   
$song_query = mysqli_query($connection,$query);
    
while($fetch_song = mysqli_fetch_assoc($song_query)){
    $song_id = $fetch_song['song_id'];
    $song_image = $fetch_song['cover_img'];
    $song_name = $fetch_song['song_name'];
    
    echo"
    <div class='col-md-3'>
        <div class='song'>
            <div class='song-img'>
                <img class='play-music' id='play-music-$song_id' src='image/$song_image'>

            </div>
            <!--.song-img-->
            <div class='song-name'>
                <p>$song_name</p>
            </div>";
            
            
        if(!isset($_SESSION['id'])){
        
        }else{
            $user_id = $_SESSION['id'];
            $song_id = $fetch_song['song_id'];
            $query= "SELECT * FROM likes where user_id='$user_id' and song_id='$song_id'";
            $result = mysqli_query($connection,$query);
            checkQueryResult($result);
//            if(mysqli_num_rows($result)==0){
//                echo "<div><ul class='options'>
//                <li><a><i class='like fa fa-heart-o' pull-left id='$song_id'></i></a></li>";
//            }else{
//                echo "<div><ul class='options'>
//                <li><a><i class='like fa fa-heart' pull-left id='$song_id'></i></a></li>";
//            }
//                    
//                }
//            
//           
//   
//        echo "<li><i class='add-to-que id='add-to-que-$song_id' fa fa-list'></i></li>
//                </ul>
//                </div><!--.options-->
//                </div>
//        <!--.song-->
//        
//    </div>
//    <!--.col-md-3-->";
    
                echo "<div><ul class='options'>";
            if(mysqli_num_rows($result)==0){
                echo"<li><a><i class='like fa fa-heart-o' pull-left id='$song_id'></i></a></li>";
                }
            else{
                echo"<li><a><i class='like fa fa-heart' pull-left id='$song_id'></i></a></li>";
            }
                echo"<li><i class='add-to-que add-queue fa fa-list' id='add-to-que-$song_id'></i></li>
                </ul></div></div><!--.song--></div><!--.col-md-3-->";

}
}
      
?>


                        </div>
                        <!--.row-->

                    </div>
                    <!--.new-category-->
                    <hr>
                    <div class='row'>
                        <?php
    $query="SELECT * FROM GENRE";
    $get_genre=mysqli_query($connection,$query);
    while($fetch_genre = mysqli_fetch_assoc($get_genre)){
        $genre_id=$fetch_genre['genre_id'];
        $genre_name=$fetch_genre['genre_name'];
        echo"<a href='genre_page.php?genre_id=$genre_id' >
    <div id='$genre_id' class='col-md-4'>
        <div class='song-genre'>
            <div class='genre-img'>
            <img src='image/$genre_name.jpg' >
            </div>
            <!--.genre-img-->
            <div class='genre-name'>
                <p>$genre_name</p>
            </div>
            <!--.genre-name-->
        </div>
        <!--.song-genre-->
    </div>
    <!--.col-md-4-->
</a>";
    }
?>
                    </div>
                    <!--.row-->
                    <hr>
                </div>
                <!--.container-->
                <div class="clear-fix"></div>
                
                <div class="audio-tag-div">
       <div>
       <p id="song-p-tag">Song Name</p>
        <audio  controls autoplay="" class="audio-tag" id="audio-tag-id" src="">
        </audio>
        </div>
    </div>





    </body>
    <!--OWL CAROUSEL-->
    <script src="scripts/jquery-3.3.1.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/bootstrap/js/bootstrap.min.js"></script>

    <!--    <script src="../vendors/bootstrap/js/bootstrap.min.js"></script>-->
    <!-- CUSTOM SCRIPTS-->
    <script src="js/script.js"></script>
    </html>
