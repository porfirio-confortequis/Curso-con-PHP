<?php

#TÉCNICA DE CÓDIGO EN POO

#EMPAQUETAMOS LOS OBJETOS EN CLASES
#UNA CLASE ES UN MODELO QUE SE UTILIZA PARA CREAR OBJETOS QUE COMPARTEN UN MISMO COMPORTAMIENTO, ESTADO E IDENTIDAD

#PRIMERA CAPSULA
class Automovil{ #SE CREA UNA CLASE AUTOMOVIL

    #PROPIEDADES: SON LAS CARACTERISTICAS QUE PUEDE TENER UN OBJETO

    #PROPIEDADES PUBLICAS
    public $marca; #LA PROPIEDAD PUBLICA PUEDE SER ACCEDIDA DE CUALQUIER PARTE DE LA APLICACIÓN SIN NINGUN PROBLEMA, SI FUESE PRIVATE SIGNIFICA QUE ESA PROPIEDAD PUEDE SER EJECUTADA DENTRO DE SOLO ESTA CLASE
    public $modelo;

    #MÉTODO: ES EL ALGORITMO ASOCIADO A UN OBJETO QUE INDICA LA CAPACIDAD DE LO QUE ESTE PUEDE HACER, ES DECIR ES UNA FUNCION QUE HACE TAREAS CON LAS PROPIEDADES QUE LE ESTOY ASIGNANDO ALA CLASE 

    #LA ÚNICA DIFERENCIA ENTRE MÉTODO Y FUNCIÓN, ES QUE LLAMAMOS MÉTODO A LAS FUNCIONES DE UNA CLASE (EN LA POO), MIENTRAS QUE LLAMAMOS FUNCIONES, A LOS ALGORITMOS DE LA PROGRAMACIÓN ESTRUCTURADA.
    
    public function mostrar(){ # SE CREA EL MÉTODO public function mostrar. SE LE CONOCE COMO MÉTODO PORQUE ESTA DENTRO DE UNA CLASE, ESTO ES PARA LA POO

        echo "<p>Hola! soy un $this->marca, modelo $this->modelo </p>"; #SE COLOCA UN ECHO PARA IMPRIMIR CON UNA ETIQUETA DE PARRAFO <P> SEGUIDO DE LA CADENA HOLA SOY UN, Y AHORA YA NO COLOCAREMOS LA PROPIEDAD SINO LA PALABRA $this QUE PUEDE SER CUALQUIERA DE LAS 2 PROPIEDADES PÚBLICAS YA SEA $marca o $modelo


    }

}


    #OBJETO: ES UNA ENTIDAD PROVISTA DE MÉTODOS O MENSAJES A LOS CUALES RESPONDE PROPIEDADES CON VALORES CONCRETOS 

    #SEGUNDA CAPSULA
    $a = new Automovil();#SE DECLARA LA VARIABLE $a PARA ASIGNARLE UN OBJETO, ENTONCES LLAMO ALA CLASE new Automovil(); QUE SIGNIFICA new Automovil, LE ESTOY DICIENDO QUE VOY A CREAR UN OBJETO QUE SE DERIBA DE LA CLASE class Automovil 
    $a -> marca = "Toyota"; #Y A ESE OBJETO LE VOY A DECIR QUE PRIMERO, LE VOY ASIGNAR EN LA PROPIEDAD MARCA EL VALOR "Toyota" 
    $a -> modelo = "Corolla";#Y QUE EN LA PROPIEDAD MODELO LE VOY ASIGNAR EL VALOR "Corolla"
    $a -> mostrar();#FINALMENTE EJECUTO LA FUNCIÓN MOSTRAR
    

    $b = new Automovil();#SE DECLARA LA VARIABLE $b PARA ASIGNARLE UN OBJETO, ENTONCES LLAMO ALA CLASE new Automovil(); QUE SIGNIFICA new Automovil, LE ESTOY DICIENDO QUE VOY A CREAR UN OBJETO QUE SE DERIBA DE LA CLASE class Automovil
    $b -> marca = "Chevrolet";#Y A ESE OBJETO LE VOY A DECIR QUE PRIMERO, LE VOY ASIGNAR EN LA PROPIEDAD MARCA EL VALOR "Chevrolet"
    $b -> modelo = "Sonic";#Y QUE EN LA PROPIEDAD MODELO LE VOY ASIGNAR EL VALOR "Sonic"
    $b -> mostrar();#FINALMENTE EJECUTO LA FUNCIÓN MOSTRAR

    $c = new Automovil();
    $c -> marca = "Ford";
    $c -> modelo = "Fusión";
    $c -> mostrar();

    #PRINCIOS DE LA POO QUE SE CUMPLEN EN ESTE EJEMPLO:

    #ABSTRACCIÓN: NUEVOS TIPOS DE DATOS (EL QUE TU QUIERAS, TU LO CREAS)
    #ENCAPSULACIÓN: ORGANIZAR EL CÓDIGO EN GRUPOS LÓGICOS. (TENEMOS UNA PRIMERA CAPSULA QUE ES LA class Automovil Y UNA SEGUNDA CAPSULA QUE ES EL OBJETO)  
    #OCULTAMIENTO: OCULTAR DETALLES DE IMPLEMENTACIÓN Y EXPONER SÓLO LOS DETALLES QUE SEAN NECESARIOS PARA EL RESTO DEL SISTEMA. EN ESTE CASO NOSOTROS SOLAMENTE
    #NECESITAMOS MOSTRAR LOS VALORES DE LAS PROPIEDADES(MARCA Y MÓDELO)



    #PORQUE SE USA LA TECNICA POO, PORQUE SE TRABAJA SEGURIDAD INFORMATICA,TODAS LAS APLICACIONES QUE SE HAGAN EN PHP ES UN REQUISITO INDISPENSABLE
    #QUE YA SEAN PROTEGIDAS POR ATAQUES DE HACKERS, POR ROBOPTS O SOFTWARE MALICIOSOS QUE PUEDAN DAÑAR UN SITIO WEB, SI UN SITIO WEB NO ESTA PROTEGIDO
    #ES UN SITIO VULNERABLE PARA QUE SE LE PUEDA ROBAR INFORMACIÓN, BD, SE LE PUEDA ROBAR LA ESTRUCTURA Y LA PUEDAN DAÑAR 





?>