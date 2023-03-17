<?php
/**********************************************************/
    // ARRAY
     /******************************************************** */

    //Crear variable de nombre arrayVacio cuyo valor sea un array vacío.
    $arrayVacio=[];

    echo "<br>";
    //Crear variable de nombre arrayNumeros declarada con un array de números del 0 al 9 (0, 1, 2...).
    $arrayNumeros=[0,1,2,3,4,5,6,7,8,9];

    echo "<br>";
    //Crear variable de nombre arrayNumerosPares declarada con un array con los números pares del 0 al 9 (considerando al 0 par).
    $arrayNumerosPares=[];
    $pos=0;
    for($i=0;$i<10;$i+=2){ //voy subiendo la posicion en el aray y meto i en esa posicion, ya que al ir de 2 en 2 son pares
        $arrayNumerosPares[$pos]=$i;
        $pos++;
    }
    echo "<br>";
    //Crear variable de nombre arrayBidimensional declarada con valor array [[0, 1, 2], ['a', 'b', 'c']].
    $arrayBidimensional=[[0, 1, 2],['a', 'b', 'c']];
    echo "<br>";
    //Crear variable de nombre arrayNumerosNeg declarada con un array de números del 0 al -9 (0, -1, -2...).
    $arrayNumerosNeg=[];
    $pos=0;//reinicio pos
    for($i=0;$i>=-9;$i--){ //
        $arrayNumerosNeg[$pos]=$i;
        echo $arrayNumerosNeg[$pos];
        $pos++;
        
    }
    echo "<br>";
    //Crear variable cuyo valor sea un array asociativo con las clases-valores: nombre-tu nombre, apellido- tu apellido y edad- tu edad.
    $datospersonales=["nombre"=>"David","Apellido"=>"León Valle","edad"=>34];


    echo "<br>";
    //Crear variable de nombre loGuardoTodo declarada con valor array con valores 'hola', 'que', 23, 42.33 y 'tal'.
    $loGuardoTodo=["hola","que",23,42.33,"tal"];
    echo "<br>";
    //Crear variable de nombre arrayDeArrays declarada con valor array: [[756, 'nombre'], [225, 'apellido'], [298, 'direccion']].
    $arrayDeArrays=[[756, 'nombre'], [225, 'apellido'], [298, 'direccion']];
    echo "<br>";

     ?>