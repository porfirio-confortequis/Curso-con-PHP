<?php

#TÉCNICA DE CÓDIGO IMPERATIVO EN POO

#EMPAQUETAMOS LOS OBJETOS EN CLASES
#UNA CLASE ES UN MODELO QUE SE UTILIZA PARA CREAR OBJETOS QUE COMPARTEN UN MISMO COMPORTAMIENTO, ESTADO E IDENTIDAD

class Automovil{ #SE CREA UNA CLASE AUTOMOVIL

    #PROPIEDADES: SON LAS CARACTERISTICAS QUE PUEDE TENER UN OBJETO

    #PROPIEDADES PUBLICAS
    public $marca; #LA PROPIEDAD PUBLICA PUEDE SER ACCEDIDA DE CUALQUIER PARTE DE LA APLICACIÓN SIN NINGUN PROBLEMA, SI FUESE PRIVATE SIGNIFICA QUE ESA PROPIEDAD PUEDE SER EJECUTADA DENTRO DE SOLO ESTA CLASE
    public $modelo;

    #MÉTODO: ES EL ALGORITMO ASOCIADO A UN OBJETO QUE INDICA LA CAPACIDAD DE LO QUE ESTE PUEDE HACER, ES DECIR ES UNA FUNCION QUE HACE TAREAS CON LAS PROPIEDADES QUE LE ESTOY ASIGNANDO ALA CLASE 

    #LA ÚNICA DIFERENCIA ENTRE MÉTODO Y FUNCIÓN, ES QUE LLAMAMOS MÉTODO A LAS FUNCIONES DE UNA CLASE (EN LA POO), MIENTRAS QUE LLAMAMOS FUNCIONES, A LOS ALGORITMOS DE LA PROGRAMACIÓN ESTRUCTURADA.
    
    public function mostrar(){ # SE CREA EL MÉTODO public function mostrar. SE LE CONOCE COMO MÉTODO PORQUE ESTA DENTRO DE UNA CLASE, ESTO ES PARA LA POO

        echo "<p>Hola! soy un $this->marca, $this->modelo </p>"; #


    }






}











?>