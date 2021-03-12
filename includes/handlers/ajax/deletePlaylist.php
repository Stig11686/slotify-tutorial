<?php

include("../../config.php");

if(isset($_POST['playlistId'])){
    $playlistId = $_POST['playlistId'];

    $playlistquery = mysqli_query($con, "DELETE FROM playlists WHERE id='$playlistId'");
    $songsquery = mysqli_query($con, "DELETE FROM playlistSongs WHERE playlistId='$playlistId'");

} else {
    echo "Playlist Id not passed into deleteplaylist.php";
}



?>