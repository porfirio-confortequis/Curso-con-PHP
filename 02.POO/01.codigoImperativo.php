<?php

#TÉCNICA DE CÓDIGO IMPERATIVO O CÓDIGO ESPAGUETTI

#Este formato consiste en la declaración de variables, dandole cualequier valor, luego se crean unas funciones y luego creamos algunas condiciones

$automovil1 = (Object) ["marca"=> "Toyota", "modelo" => "Corolla"]; #Se declara la variable $automovil1 de tipo objeto, esa variable de tipo obejto va a tener 2 valores o 2 propiedades ["marca"=> "Toyota", "modelo" => "Corolla"];
$automovil2 = (Object) ["marca"=> "Chevrolet", "modelo" => "Sonic"]; #Se declara la variable $automovil2 de tipo objeto, esa variable de tipo obejto va a tener 2 valores o propiedades ["marca"=> "Chevrolet", "modelo" => "Sonic"];


#Se crea FUNCION MOSTRAR
function Mostrar($automovil){ #Se crea funcion Mostrar con parametro, el parametro es una variable ($automovil) que sera reemplazada por la variable($automovil1) o la variable ($automovil2) que estan en las CONDICIONES

    echo "<p>¡Hola! Soy un $automovil->marca, $automovil->modelo </p>"; #Se imprime con echo,que muestre con una etiqueta parrafo<p> la cadena "¡Hola! Soy un" seguido de la variable $automovil donde lo primero que se pide es que muestre la marca y segundo el modelo 
}


#CONDICIONES
Mostrar($automovil1); #El primer parametro que quiero que me muestre sea, las propiedades de la variable ($automovil1)
Mostrar($automovil2); #El segundo parametro que quiero que me muestre sea, las propiedades de la variable ($automovil2)


?>