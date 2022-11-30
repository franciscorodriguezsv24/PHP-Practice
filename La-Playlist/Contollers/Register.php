<?php print_r($_POST)?>

<?php 
if (empty($_POST['inputTitle']) || empty($_POST['inputArtist']) || empty($_POST['inputAlbum']) || empty($_POST['inputPremier']) || empty($_POST['inputDuration'])){
    echo "Error, Please complete the form. ";
    exit();
}

include '../Models/conection.php';

$title = $_POST ['inputTitle'];
$artist = $_POST ['inputArtist'];
$album = $_POST ['inputAlbum'];
$premier = $_POST ['inputPremier'];
$duration = $_POST ['inputDuration'];

echo $title,$artist,$album,$premier,$duration;

$consulta = $bd->prepare("INSERT INTO Songs(Title,Artist,Album,Premier,Duration) VALUES(?,?,?,?,?)");

$resultado = $consulta->execute([$title,$artist,$album,$premier,$duration]);

if($resultado){
    header("Location: ../index2.php");
}else {
}




?>