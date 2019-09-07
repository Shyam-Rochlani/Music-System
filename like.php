<?php
include_once("includes/functions.php");
session_start(); 

if(isset($_POST['song_id']) && $_SESSION['id']){
    $user_id=$_SESSION['id'];
    $song_id=$_POST['song_id'];
    $query= "SELECT * FROM likes where user_id='$user_id' and song_id='$song_id'";
    $result=mysqli_query($connection,$query);
    checkQueryResult($result);
    if(mysqli_num_rows($result)==0){
        $query = "INSERT INTO likes VALUES ($user_id, $song_id)";
        $result=mysqli_query($connection,$query);
        checkQueryResult($result);
         $status ="liked";
    }elseif(mysqli_num_rows($result)==1){
        $query = "DELETE FROM likes where user_id='$user_id' and song_id='$song_id'";
        $result=mysqli_query($connection,$query);
        checkQueryResult($result);
        $status ="unliked";
    }
    $data = ["status" => $status,]; 
        echo json_encode($data);
    
}
?>
