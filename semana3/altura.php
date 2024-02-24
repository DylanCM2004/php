<?php
if ($_POST){
    //transferencia de datos del formulario a variables php
    $altura1=$_POST["altura1"];
    $altura2=$_POST["altura2"];
    $nombre1=$_POST["nombre1"];
    $nombre2=$_POST["nombre2"];
    // seccion de evaluacion de  condiciones SI
    if ($altura1>$altura2){
        echo $nombre1.".. es mas alto(a) que ".$nombre2."<br>";
    }else{
        echo $nombre2.".. es mas alto(a) que ".$nombre1."<br>";
    }
}
?>
