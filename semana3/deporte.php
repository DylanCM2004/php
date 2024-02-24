<?php
if ($_POST){
    //datos transferidos del formulario
    $nombre= $_POST["nombre"];
    $peso= $_POST["peso"];
    $altura= $_POST["altura"];
    $edad= $_POST["edad"];
    // proceso de evaluacion de condicionales
    if ($peso>=80 && $altura>=1.80 && $edad>=18){
        echo "Estudiante".$nombre."es aceptado en el equipo de Basketball"."<br>";
    }
    else{
        echo "Estudiante".$nombre."no cumple requisitos para equipo de Basketball"."<br>";
    }
}
?>