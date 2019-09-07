<?php
//$connection = mysqli_connect("localhost","root","","music_player");
include_once("../includes/db.php");
$songId = $_POST['song'];
$query = "select * from songs where song_id = '$songId'";
$result = mysqli_query($connection,$query);

if(!$result){
    die("error".mysqli_error($connection));
}
$row = mysqli_fetch_assoc($result);
//$songName = $row['song_name'];
$json = json_encode($row);
echo $json;


