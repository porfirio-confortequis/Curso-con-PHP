<?php

#CONDICIONES 

#---------------------------------------------------------------------------------------------------------------------------------------------
#CONDICIÓN IF

#Las condiciones nos referimos a pedirle a la funcion que cuando ejecute la tarea, la ejecute de acuerdo a una condicion.

    $A = 5; #Se declara la variable $A = 15
    $B = 10; #Se declara la variable $A = 10

#Se mete una condición if(si)
    if($A > $B){ #Si la variable $A > $B en el echo se mostrara el string, si la variable $A es menor a la variable $B, no mostrara nada.

        echo "La variable A es mayor que la variable B"; #Se imprime con echo y la cadena string "La variable A es mayor ala variable B"
}

#----------------------------------------------------------------------------------------------------------------------------------------------
#CONDICION ELSE IF
    else if($A == $B){ #(de lo contrario si) cuando la variable $A sea igual ala variable $B

        echo "La variable A es igual a la variable B";

}

#----------------------------------------------------------------------------------------------------------------------------------------------
#CONDICION ELSE
    else{ #Significa que sino se cumple ninguna CONDICION IF, y/o ELSE IF. Dentro del ELSE no se coloca ninguna condición, solo se manda a imprimir la cadena string

        echo "La variable A es menor que la variable B";
}

    echo "<br><br>"; #Imprime saltos de linea
#-----------------------------------------------------------------------------------------------------------------------------------------------

#CONDICION SWITCH
    $dia = "Sabado"; #Se declara la variable $dia, con valor de Sabado = "Sabado"

#metodo SWITCH
    switch($dia){ #EL SWITCH es un metodo. Dentro del metodo SWITCH se coloca la variable $dia

        #SE COLOCAN LOS CASOS
        #CASO 1
        case 'Sabado': #Si el caso es sabado, entonces.....
        echo "Voy a ir a estudiar PHP"; #Imprime la cadena "Voy a ir a estudiar PHP"
        break; #Se rompe el caso

        #CASO 2
        case 'Domingo': #Si el caso es Domingo, entonces....
        echo "Voy a decansar"; #Imprime la cadena, "Voy a descansar"
        break; #Se rompe el caso

        #CASO 3
        case 'Viernes': #Si el caso es viernes, entonces....
        echo "Voy a la fiesta con mis amigos"; #Imprime la cadena "Voy a salir con mis amigos"
        break; #Se rompe el caso

        #CASO 4
        case 'Lunes'; #Si el caso es Lunes, entonces..... 
        echo "Voy a ir a trabajar a la Zapateria"; #Imprime la cadena, "Voy a ir a trabajar ala Zapateria"
        break; #Se rompe el caso

        #DEFAULT 
        default: echo "Voy a dormir un rato"; #Se coloca un valor por defecto, con el DEFAULT, seguido de un echo para imprimir la cadena "Voy a dormir un rato"
}

    echo "<br><br>"; #Imprime saltos de linea
#--------------------------------------------------------------------------------------------------------------------------------------------------------------

#CICLOS sirven para incrementar un valor o para hacer una tarea una serie de veces

#CICLO WHILE

    $n = 1;#Se declara la variable $n dandole el valor de 1

    while($n <= 5){ #Ciclo WHILE permite dar una condicion, dentro de parentesis mientras la varibale $n sea menor o = que 5 ($n < 5)

        echo $n; #Imprime con echo, la variable $n
        $n++; #Entonces que la variable $n la incremente
    }

#La variable $n se va a incrementar hasta llegar a un valor menor que 5, la variable n$ comenzo en un valor de 1, eso es que lo se mostrará con echo en pantalla

    echo "<br><br>"; #Imprime saltos de linea

#----------------------------------------------------------------------------------------------------------------------------------

#CICLO DO WHILE

    $P = 1; #Se declara la variable $P dandole el valor de =1

    do{# Do = hacer o haz
        echo $P; #Imprime con echo, la variable $P
        $P++; #pero incrementala de uno en uno
    }
    #Mientras
    while($P <= 5); #La variable $P sea menor o = que 5

    echo "<br><br>"; #Imprime saltos de linea

#---------------------------------------------------------------------------------------------------------------------------------

#CICLO FOR
    
    for ($i = 0; $i <= 0; $i++){#La variable $i con valor que inicia en 0($i = 0), mientras la variable $i sea < o = a 5 ($i <= 0), entonces que la variable $i se incremente($i++)  
        echo $i;
    }

?>