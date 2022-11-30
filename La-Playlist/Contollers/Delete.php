<?php 

include '../Models/conection.php';

$CodeSong = $_GET['id'];

$Query = $bd->prepare("DELETE FROM Songs WHERE id=?");

$Result = $Query->execute([$CodeSong]);

if($Result){
    header("Location: ../index2.php");
} else{
    echo "You couldn't delete the song";
}

?>