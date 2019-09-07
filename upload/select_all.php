<?php
   require_once("../includes/db.php");
?>
    <html>
    <link href="../styles.css" rel="stylesheet">
    <link rel="stylesheet" href="../vendors/font-awesome/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="music-container">
   <a href="select_all.php" style="">SELECT ALL</a>
   <p style="">ALL SONGS</p>
    <?php
       // $genre=mysqli_fetch($genre);
        $query  = "SELECT * FROM SONGS";
        //echo $query;
    $song_query = mysqli_query($connection,$query);

        //echo $query;
    while($fetch_song = mysqli_fetch_assoc($song_query)){
        $song_id = $fetch_song['song_id'];
        $song_image = $fetch_song['cover_img'];
        $song_name = $fetch_song['song_name'];
        echo"<div class='music-div'>";
        echo"<img src='../image/$song_image' height='150px' width='200px' id='$song_id' class='music-img'>";
        echo"<p class='song-name'>$song_name</p>";
        echo"<span><i class='fa fa-heart'></i></span>";
        echo"<button>Add To List</button>";
        echo"</div>";   
    }
        ?>
    </div>
    <div class="audio-tag-div">
       <div>
       <p id="song-p-tag">Song Name</p>
        <audio  controls autoplay="" class="audio-tag" id="audio-tag-id" src="">
        </audio>
        </div>
    </div>
    <script src="../vendors/jquery/jquery-3.2.1.min.js"></script>
    <script src="../js/script.js"></script>
    </html>   