<?php   
    
//   $connection = mysqli_connect("localhost","JUHI","juhistudylink","music_player");
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
    <link rel="stylesheet" href="vendors/font-awesome/font-awesome.css">



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




    <!--QUEUE SECTION-->
    <?php
        require_once("includes/queue.php");
    ?>
    <!--END OF QUEUE-->
    <div class="container">
        <div class="discover-genres">
            <div class='row'>
                <?php
    $query="SELECT * FROM GENRE";
    $get_genre=mysqli_query($connection,$query);
    while($fetch_genre = mysqli_fetch_assoc($get_genre)){
        $genre_id=$fetch_genre['genre_id'];
        $genre_name=$fetch_genre['genre_name'];
        echo"<a href='genre_page.php?genre_name=$genre_name' >
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
        </div>
    </div>
    <!--.container-->
</body>
<!--OWL CAROUSEL-->
<script src="scripts/jquery-3.3.1.min.js"></script>

<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
<!-- CUSTOM SCRIPTS-->
<script src="scripts/script.js"></script>

</html>
