<?php
// Comentario de una sola linea
/* 
este es un comentario de multiples lineas
en php
*/

//definicion de variables ->lowerCamerlCase
$edadMinimoVotacion = 18;
$nombrePersona = "luis carlos";

//Constantes => SNAKE_CASE define
define("HOST_DATABASE", "localhost");

echo HOST_DATABASE;


// Funciones => lowerCamelCase
function calcularAreaRectangulo($base, $altura){
    return $base * $altura;
}

//Clase => UpperCamelCase
class AulaClase {
    // Propiedades => lowerCamelCase
    public $numeroSillas = 15;
    // Metodos => lowerCamelCase
    function octenerCantidadEstudiantes(){
        $this->numeroSillas;

    }
}
//if 
/*
operadores de comparacion
>
<
>=
<=
Operadores logicos
&&  => Y
|| => OR
!= Diferente
! => Negacion
*/
if($edadMinimoVotacion>=18 && $nombrePersona='luis carlos'){

}else if($edadMinimoVotacion<18){

}else{

}

//inferencia de tipos
$numerEntero = 10; //en php no se necesita definir el tipod e dato 
$cadetaTexto = "tido de dato string";

$arreglo =[0,1,2,3,4,"php", TRUE];
echo $arreglo[3];
 
$var1 = 18;
echo $var1;

$persona = [
    [
        "nombres" => "carlos",
        "apellidos" => "jurado"
    ],
    [
        "nombres" => "luis",
        "apellidos" => "ortega",
        "lenguajes" => ['php', 'js', 'python']
    ]
    
    ];

    var_dump($persona[1]["lenguajes"][1]);

    // Ciclos For y Foreach
    for ($i = 0; $i < count($arreglo); $i++){
        echo $arreglo[$i] . "\n";
    }
    
    foreach ($persona as $key => $data){
        echo $key . " " . $data['nombres'] . "\n";
    }