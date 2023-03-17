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
      /**********************************************************/
    // BUCLES
     /******************************************************** */

     //Crea la función suma que acepte como argumento dos números y devuelva el resultado de su suma.
     function SumaNum($num1,$num2){
        return $num1+$num2;
        
    }
    echo SumaNum(2,5);
     echo "<br>";
     //Crea la función potenciacion que acepte como argumento dos números y devuelva el resultado de elevar el primero(a) al segundo(b) (a^b).
    function Eleva($num1,$num2){
        return $num1^$num2;
    }
     echo "<br>";
     //Crea la función separarPalabras que acepte como argumento un string y devuelva un array de palabras 'hola mundo' => [hola, mundo].
    function SepararPalabras($cadena){
        return explode ( ' ', $cadena );
    }


     
     echo "<br>";
     //Crea la función repetirString que acepte como argumento un string y un número y devuelva un string que sea el resultado de concatenar el primer string el número dado de veces.

     function RepetirString($cadena,$num){
        for($i=0;$i<$num;i++){
            $cadena.=$cadena;
        }
        return $cadena;
     }
     echo "<br>";
     //Crea la función esPrimo que acepte como argumento un número y devuelva true si es primo y false si no lo es.
     function esPrimo($primo){
        for ($i = 2; $i < $numero; $i++) {
            if (($numero % $i) == 0) {     // No es primo                 
                return false;   
            }
        }
        return true; //si no entra al if es que es primo
     }
     
     echo "<br>";
     //Crea la función multiplicacion que acepte como argumento dos números y devuelva el resultado de su multiplicación.
     function multiplicacion($num1,$num2){
        return $num1*$num2;
     }
    
     //Crea la función división que acepte como argumento dos números y devuelva el resultado de su división.
     function division($num1,$num2){
        return $num1/$num2;
     }

     //Crea la función esPar que acepte como argumento un número y devuelva true si es par y false si es impar.
     function esPar($numero){
        if($numero%2==0){//si es divisible enrtre 2 es par
            return true;
        }
        return false;
     }
     //Crea el array arrayFunciones que tenga como valor las funciones: suma,
     // resta y multiplicación (todas aceptan 2 números como argumento y devuelve el resultado de su operación).
     $arrayFunciones;

        /**********************************************************/
    // BUCLES
     /******************************************************** */

     //Crear la función ordenarArray que acepta como argumento un array de números y devuelva un array ordenado de menor a mayor.
     function OrdenarArray($numeros){
        return asort($numeros);
     }

     //Crear la función obtenerPares que acepta como argumento un array de números y devuelva un array con los elementos pares.
     function obtenerPares($numeros){
        $pares=[];
        $i=0;
        $cont=0;
        if($numeros[$i]%2){
            pares[$cont]=$numeros[$i];
            $i++;
            $cont++;
        }
        return $pares;

     }
     //Crear la función pintarArray que acepte como argumento un array y devuelva una cadena de texto Array entrada: [0, 1, 2] String salida: '[0, 1, 2]'.
     function pintarArray($array){
        $cadena;
        for($i=0;$i<count($array);$i++){
            $cadena.=$array[$i];
        }
        return $cadena;
     }
     //Crear la función arrayMapi que acepte como argumento un Array y una función y devuelva un array en el que se haya aplicado la función a cada elemento del array.
     function arrayMapi($array,$funcion){
        return $funcion($array);

     }

     //Crear la función eliminarDuplicados que acepte como argumento un array y devuelva un array en el que se hayan eliminado los duplicados
     function eliminarDuplicados($array){
        return array_unique($array);
     }

     //Crear la función ordenarArray2 que acepta como argumento un array de números y devuelva un array ordenado de mayor a menor.
     function ordenarArray2($numeros){
        return arsort($numeros);
     }

     //Crear la función obtenerImpares que acepta como argumento un array de números y devuelva un array con los elementos impares.
     function obtenerImpares($array){
        $impares=[];
        $pos=0;
        for($i=1;$i<10;$i+=2){
            $impares[$pos]=$i;
            $pos++;
        }
    }
     ?>