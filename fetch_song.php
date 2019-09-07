<?php
   require_once("includes/db.php");
?>
    <link href="styles.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="vendors/font-awesome/font-awesome.css">
      
       <div class="container-fluid">
    <div class="clearfix"></div>
    <div class="music-container">
     <a href="upload/romance.php">ALL ROMANTIC SONGS</a>
      <p>ROMANTIC SONGS</p>
       <table class="table">
          <col width ="200">
       <col width = "300">
       <col width = "60">
        <thead>
            <tr>
                <th><p>IMAGE</p></th>
                <th><p>NAME</p></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php
       // $genre=mysqli_fetch($genre);
        $query  = "SELECT * FROM SONGS WHERE genre = 'Romance' LIMIT 3";
        //echo $query;
    $song_query = mysqli_query($connection,$query);

        //echo $query;
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
        
        //echo"";   
    }
        ?>
</tbody>
    </table>
    </div>
    

    <div class="clearfix"></div>
    <div class="music-container">
      <a href="upload/party.php">ALL PARTY SONGS</a>
       <p>PARTY SONGS</p>
       <table class="table">
          <col width ="200">
       <col width = "300">
       <col width = "60">
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php
       // $genre=mysqli_fetch($genre);
        $query  = "SELECT * FROM SONGS WHERE genre = 'Party' LIMIT 3";
        //echo $query;
    $song_query = mysqli_query($connection,$query);

        //echo $query;
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
        
        //echo"";   
    }
        ?>
        </tbody>
    </table>
    </div>
    
    
    <div class="clearfix"></div>
    <div class="music-container">
      <a href="upload/hollywood.php">ALL HOLLYWOOD SONGS</a>
       <p>HOLLYWOOD SONGS</p>
       <table class="table">
          <col width ="200">
       <col width = "300">
       <col width = "60">
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php
       // $genre=mysqli_fetch($genre);
        $query  = "SELECT * FROM SONGS WHERE genre = 'Hollywood' LIMIT 3";
        //echo $query;
    $song_query = mysqli_query($connection,$query);

        //echo $query;
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
        
        //echo"";   
    }
        ?>
        </tbody>
    </table>
    </div>
    
    
    <div class="clearfix"></div>
    <div class="music-container">
      <a href="upload/workout.php">ALL WORKOUT SONGS</a>
       <p>WORKOUT SONGS</p>
       <table class="table">
          <col width ="200">
       <col width = "300">
       <col width = "60">
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php
       // $genre=mysqli_fetch($genre);
        $query  = "SELECT * FROM SONGS WHERE genre = 'Workout' LIMIT 3";
        //echo $query;
    $song_query = mysqli_query($connection,$query);

        //echo $query;
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
        
        //echo"";   
    }
        ?>
        </tbody>
    </table>
    </div>
    
    
    <div class="clearfix"></div>
    <div class="music-container" style="margin-bottom:120px;">
       <a href="upload/wedding.php">ALL WEDDING SONGS</a>
        <p>WEDDING SONGS</p>
         <table class="table">
          <col width ="200">
       <col width = "300">
       <col width = "60">
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
       
        <?php
       // $genre=mysqli_fetch($genre);
        $query  = "SELECT * FROM SONGS WHERE genre = 'Wedding' LIMIT 3";
            
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
       <div class="audio-tag-div">
       <div>
       <p id="song-p-tag">Song Name</p>
        <audio  controls autoplay="" class="audio-tag" id="audio-tag-id" src="">
        </audio>
        </div>
    </div>
    
    <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
    <script src="js/script.js"></script> 