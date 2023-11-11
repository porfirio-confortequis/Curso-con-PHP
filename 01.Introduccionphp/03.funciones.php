<?php #Se abre php

#FUNCIONES, LAS TAREAS SE EJECUTAN POR MEDIO DE LAS FUNCIONES Y ESTAS SE USAN EN PROGRAMACION ORIENTA A OBJETOS
#-------------------------------------------------------------------------------------------------------------------------------------------------

#FUNCIONES SIN PARAMETRO

#PORQUE LOS () ESTAN VACIOS, ES UNA FUNCION QUE EJECUTA UNA TAREA 
function Saludo(){ #Se declara la funcion Saludo sin parametros porque los () estan vacios

#Dentro de las llaves se coloca la tarea a ejecutar
    echo "Hola<br>"; #Se imprime con echo, se coloca una cadena string, se abre comillas dentro de las comillas se escribe lo que se desea imprimir junto con un salto de linea "Hola<br>"

    }

#PARA EJECUTAR LA FUNCION, SE COLOCA APARTE FUERA DE LAS LLAVES DE LA FUNCIÓN saludo
Saludo(); #Se llama a la funcion Saludo() 
#--------------------------------------------------------------------------------------------------------------------------------------------------

#FUNCIONES CON PARAMETRO 
function Despedida($adios){ #Se declara la funcion Despedida con parametro (dentro del parantesis se coloca el parametro que necesitamos que ejecute($adios), los parametros son variables)

    echo $adios."<br>"; #Se imprime con echo, el parametro o variable $adios para separar de una cadena string se concatena con un . seguido del estring "<br>" se abre comillas y dentro se coloca un salto de linea "<br>" para separar

    }

#PARA EJECUTAR LA FUNCION Despedida, SE COLOCA APARTE FUERA DE LAS LLAVES DE LA FUNCION Despedida
Despedida("Good-Bye"); #Se llama ala funcion Despedida dentro de los parentesis se agrega lo que deseamos mostrar, podemos reemplazarlo por lo que deseemos("chao")
#--------------------------------------------------------------------------------------------------------------------------------------------------

#FUNCIONES CON RETORNO
function Retorno($retornar){ #Se declara la funcion Retorno (dentro del parentesis se coloca el parametro $retornar)

    return $retornar; #Dentro de la funcion se pide que se haga un retorno con la palabra clave return, de la variable que necesito retornar en este caso la varible del parametro $retornar
    }

    #Para ejecutar la función Retorno, se llama con un echo
    echo Retorno("RETORNAR"); #Para ejecutar la función retorno, se llama con un echo y dentro del parentesis se coloca lo que quiera reemplazar el parametro ("retornar")

#Se cierra php    
?>