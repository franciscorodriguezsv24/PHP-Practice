<?php 

print_r($_POST);

include '../Models/conection.php';

$codeSong = $_POST['id'];

$Title = $_POST['inputTitle'];
$Artist = $_POST['inputArtist'];
$Album = $_POST['inputAlbum'];
$Premier = $_POST['inputPremier'];
$Duration = $_POST['inputDuration'];

print_r($codeSong);

$query = $bd->prepare("UPDATE Songs SET Title=?, Artist=?, Album=?, Premier=?, Duration=? WHERE id=?");

$answer = $query->execute([$Title, $Artist, $Album,$Premier, $Duration, $codeSong]);

if($answer){
    header("Location: ../index2.php");
}else{
    echo "your edit failed";
}




?>