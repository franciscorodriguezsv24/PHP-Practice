<?php 
 
$nombre_bd = "Playlist";
$usuario = "root";
$contrasenia = "";

try {

    $bd = new PDO(
        'mysql:host=localhost;
        dbname='.$nombre_bd,
        $usuario,
        $contrasenia
    );
} catch (exception $e){
    //por si hay un error. 
    echo "The conection doesn't work, because: ".$e->getMessage();
}
?>