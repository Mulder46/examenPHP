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
    var_dump($arrayNumerosPares);
    echo "<br>";
    //Crear variable de nombre arrayBidimensional declarada con valor array [[0, 1, 2], ['a', 'b', 'c']].
    $arrayBidimensional=[[0, 1, 2],['a', 'b', 'c']];
    echo "<br>";

    //Crear variable de nombre arrayNumerosNeg declarada con un array de números del 0 al -9 (0, -1, -2...).
    $arrayNumerosNeg=[];
    $pos=0;//reinicio pos
    for($i=0;$i>=-9;$i--){ //
        $arrayNumerosNeg[$pos]=$i;
       // echo $arrayNumerosNeg[$pos];
        $pos++;  
    }
    var_dump($arrayNumerosNeg);
    echo "<br>";

    //Crear variable cuyo valor sea un array asociativo con las clases-valores: nombre-tu nombre, apellido- tu apellido y edad- tu edad.
    $datospersonales=["nombre"=>"David","Apellido"=>"León Valle","edad"=>34];
    echo $datospersonales["nombre"];
    echo "<br>";

    //Crear variable de nombre loGuardoTodo declarada con valor array con valores 'hola', 'que', 23, 42.33 y 'tal'.
    $loGuardoTodo=["hola","que",23,42.33,"tal"];
    echo "<br>";
    //Crear variable de nombre arrayDeArrays declarada con valor array: [[756, 'nombre'], [225, 'apellido'], [298, 'direccion']].
    $arrayDeArrays=[[756, 'nombre'], [225, 'apellido'], [298, 'direccion']];
    echo $arrayDeArrays[2][0];  //debe ser 298 ya que es primera posiciòn de 3º array
    echo "<br>";
      /**********************************************************/
    // FUNCIONES
     /******************************************************** */

     //Crea la función suma que acepte como argumento dos números y devuelva el resultado de su suma.
     function sumaNum($num1,$num2){
        return $num1+$num2;
        
    }
    echo sumaNum(2,5);
     echo "<br>";

     //Crea la función potenciacion que acepte como argumento dos números y devuelva el resultado de elevar el primero(a) al segundo(b) (a^b).
    function eleva($num1,$num2){
       // return $num1^$num2;
       $elevado=$num1;
       for($i=1;$i<$num2;$i++){
        $elevado*=$num1;  //falle al expresar la potencia, podría usar pow
       }
       return $elevado;
    }
    echo eleva(2,3);
     echo "<br>";

     //Crea la función separarPalabras que acepte como argumento un string y devuelva un array de palabras 'hola mundo' => [hola, mundo].
    function separarPalabras($cadena){
        return explode ( ' ', $cadena );
    }
    var_dump(separarPalabras("hola mundo"));
     echo "<br>";

     //Crea la función repetirString que acepte como argumento un string y un número y devuelva un string que sea el resultado de concatenar el primer string el número dado de veces.
     function repetirString($cadena,$num){
        $concatenada=$cadena; //al no hacer este paso se iba a la potencia de repeticiones
        for($i=1;$i<$num;$i++){
            $concatenada.=$cadena;
        }
        return $concatenada;
     }
     echo repetirString("hola",4);
     echo "<br>";

     //Crea la función esPrimo que acepte como argumento un número y devuelva true si es primo y false si no lo es.
     function esPrimo($primo){
        for ($i = 2; $i < $primo; $i++) {
            if (($primo % $i) == 0) {     // No es primo                 
                return false;   
            }
        }
        return true; //si no entra al if es que es primo
     }
     var_dump(esPrimo(4));
     var_dump(esPrimo(7));
     echo "<br>";

     //Crea la función multiplicacion que acepte como argumento dos números y devuelva el resultado de su multiplicación.
     function multiplicacion($num1,$num2){
        return $num1*$num2;
     }
     echo "<br>";

     //Crea la función división que acepte como argumento dos números y devuelva el resultado de su división.
     function division($num1,$num2){
        return $num1/$num2;
     }
     echo "<br>";

     //Crea la función esPar que acepte como argumento un número y devuelva true si es par y false si es impar.
     function esPar($numero){
        if($numero%2==0){//si es divisible enrtre 2 es par
            return true;
        }
        return false;
    
     }
     echo "es par: "; //¿?¿?
     var_dump(esPrimo(4));
     var_dump(esPrimo(7));
     echo "<br>";
     //Crea el array arrayFunciones que tenga como valor las funciones: suma,
     // resta y multiplicación (todas aceptan 2 números como argumento y devuelve el resultado de su operación).
     $arrayFunciones;

        /**********************************************************/
    // Mezclando arrays y funciones
     /******************************************************** */

     //Crear la función ordenarArray que acepta como argumento un array de números y devuelva un array ordenado de menor a mayor.
     function OrdenarArray($numeros){
        return asort($numeros); //FALSO
     }
     $array=[7,6,5,4,3,2,1];
     var_dump(OrdenarArray($array));
     echo "<br>";

     //Crear la función obtenerPares que acepta como argumento un array de números y devuelva un array con los elementos pares.
     function obtenerPares($numeros){
        $pares=[];
        $i=0;
        $cont=0;
        //faltó el bucle
        if($numeros[$i]%2){
            $pares[$cont]=$numeros[$i];
            $i++;
            $cont++;
        }
        return $pares;
     }
     $array=[1,2,3,4,5,6,7,8,9];
        var_dump(obtenerPares($array));  
        echo "<br>";
     //Crear la función pintarArray que acepte como argumento un array y devuelva una cadena de texto Array entrada: [0, 1, 2] String salida: '[0, 1, 2]'.
     function pintarArray($array){
        $cadena=[];
        for($i=0;$i<count($array);$i++){
            $cadena.=$array[$i];  //undefined, pero funciona
        }
        return $cadena;
     }
     $array=[1,2,3];
     echo pintarArray($array);
     echo "<br>";
     //Crear la función arrayMapi que acepte como argumento un Array y una función y devuelva un array en el que se haya aplicado la función a cada elemento del array.
     function arrayMapi($array,$funcion){
        return $funcion($array);

     }
     var_dump(arrayMapi($array=[1,2,3,4,5,6,7,8,9,6,7,4,3,6],"eliminarDuplicados")); //se le pasa como cadena
     echo "<br>";
     //Crear la función eliminarDuplicados que acepte como argumento un array y devuelva un array en el que se hayan eliminado los duplicados
     function eliminarDuplicados($array){
        return array_unique($array);
     }
     $array=[1,2,3,4,5,6,7,8,9,6,7,4,3,6];
     var_dump(eliminarDuplicados($array));
     echo "<br>";

     //Crear la función ordenarArray2 que acepta como argumento un array de números y devuelva un array ordenado de mayor a menor.
     function ordenarArray2($numeros){
        return arsort($numeros); //MAL
     }
     $array=[1,2,3,4,5,6,7,8,9];
     var_dump(ordenarArray2($array));
     echo "<br>";
     //Crear la función obtenerImpares que acepta como argumento un array de números y devuelva un array con los elementos impares.
     function obtenerImpares($array){
        $impares=[];
        $pos=0;
        for($i=1;$i<10;$i+=2){
            $impares[$pos]=$i;
            $pos++;
        }
        return $impares; //falto el return
    }
    $array=[1,2,3,4,5,6,7,8,9];
    var_dump(obtenerImpares($array));
    echo"<br>";
    //Crear la función sumarArray que acepte como argumento un array numérico y devuelva la suma de los números en el array Array: [1, 2, 3]
    function sumarArray($numeros){
        $acumulado=0;
        for($i=0;$i<count($numeros);$i++){//me equivoque en vez de count puse short
            $acumulado+=$numeros[$i];
        }
        return $acumulado; //falto el return
    }
    $array=[1, 2, 3];
    echo sumarArray($array)
     ?>