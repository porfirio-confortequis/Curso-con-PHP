<?php #Se abre etiqutea PHP

#Variables en PHP

#Una variable PHP se escribe iniciando con el signo de $ y le podemos dar el nombre que queramos */

#Todas las variables deben de comenzar con el signo $ escritas a una sola palabra y si son dos se recomienda hacer los siguiente ejem: $numeroCinco

#----------------------------------------------------------------------------------------------------------------------------------------------
#VARIABLE NUMERICA
$numero = 5; #Variable($numero), se le da el valor de = 5 ala variable($numero) numerica

#Para visualizar lo que tiene la variable numero, se escribe echo
echo "Esto es una variable Número: $numero"; #Para ser más explicito, dejo la variablePHP dentro de la cadena string

echo "<br><br>"; #Se imprime, y se coloca saltos<br> de linea.
#---------------------------------------------------------------------------------------------------------------------------------------------

#VARIABLE STRING
$palabra = "palabra"; #Inicializa la variable $palabra de tipo cadena(string) = "palabra"
echo "Esto es una variable Texto: $palabra"; #Se imprime con echo, dejando la variable($palabra) dentro de la cadena string

echo "<br><br>"; #Se imprime, y se coloca saltos<br> de linea.
#---------------------------------------------------------------------------------------------------------------------------------------------

#VARIABLE BOOLEANA
$boleana = true; #Inicializa la variable $boleana, cuando es true devolvera un 1 y cuando es false devolvera un vacio, como sino existiera
echo "Esto es una variable Boleana: $boleana"; #Se imprime con echo, dejando la variable boleana($boleana) dentro de la cadena string
  
echo "<br><br>"; #Se imprime, y se coloca saltos<br> de linea.
#---------------------------------------------------------------------------------------------------------------------------------------------

#VARIABLE ARREGLO SON LAS QUE PERMITEN GUARDAR MAS DE UNA INFORMACIÓN
$colores = array("Rojo", "Verde", "Azul"); #Se inicializa la variable $colores = array(metodo en PHP) y entre comillas se coloca cada uno de los elementos que se requiere almacenar 
echo "Esto es una variable Arreglo: $colores[0]"; #Se imprime con echo, dejando la variable($colores) dentro de la cadena string y para mostrar lo que trae el arreglo abro corchetes y se tiene que colocar el indice que deseo mostrar[0] todos los indices de un arreglo incian con 0,1,2,3,4,5...

echo "<br><br>"; #Se imprime, y se coloca saltos<br> de linea.
#---------------------------------------------------------------------------------------------------------------------------------------------

#VARIABLE ARREGLO CON PROPIEDADES FORMA MAS COMODA DE ESCRIBIR ARREGLOS
$verduras = array("verdura1" => "Lechuga", "verdura2" => "Cebolla"); #Se inicializa la variable $verduras = array(metodo en PHP) y dentro de los parentesis se abre comillas y dentro de las comillas se coloca la propiedad del indice, para darle valor a una propiedad se coloca => y con , se agrega la siguiente propiedad 
echo "Esto es una variable Arreglo con Propiedades: $verduras[verdura1]"; #Se imprime con echo, dejando la variable($verduras) dentro de la cadena string y para mostrar lo que trae el arreglo abro corchetes [verdura1] y dentro de los corchetes lo que necesite llamar

echo "<br><br>"; #Se imprime, y se coloca saltos<br> de linea.
#---------------------------------------------------------------------------------------------------------------------------------------------

#VARIABLES OBJETO
$frutas = (object)["fruta1" => "Manzana", "fruta2" => "Pera"]; #Se inicializa la variable $frutas = (object)(metodo en PHP) y dentro de los corchetes se colocan comillas y dentro de las comillas se coloca la propiedad del indice, para darle valor a una propiedad se coloca => y con , se agrega la siguiente propiedad
echo "Esto es una variable Objeto con Propiedades: $frutas->fruta1"; #Se imprime con echo, dejando la variable($frutas) dentro de la cadena string y para mostrar lo que trae el objeto se coloca el simbolo -> seguido de lo que se desea mostrar 

echo "<br><br>"; #Se imprime, y se coloca saltos<br> de linea.

#Se cierra etiqueta PHP
?> 