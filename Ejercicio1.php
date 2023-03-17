<?php
/*
    EJERCICIO 1
    Un bikram es una combinación de 26 ejercicios de programación para perfeccionar la conexión entre el programador interior que llevas dentro y el alma del lenguaje de programación.
    
    Estas 26 pruebas cubren un espectro de dificultad incremental, dotada de tests que cubrirán la correcta resolución para ayudarte a encontrar posibles errores en tu código.
    
   **********************************************************/
  // Variables y Constantes
   /******************************************************** */
    //Crea una variable de nombre "variable sin valor" declarada sin valor.
    $VariableSinValor;
    //Crea dos variables con nombres booleano1 y booleano2 con valores booleanos.
    $booleano1=false;
    $booleano2=true;
    //Crea una constante con el número PI.
    const PI = 3.14;
    echo PI;
    echo "<br>";
    //Crea una variable llamada tau con el valor de PI multiplicado por dos.
    $tau=PI*2;
    echo $tau;
    echo "<br>";
    //Crea una constante de nombre "mi nombre" con tu nombre.
    const MI_NOMBRE = "David";
    echo MI_NOMBRE;
    echo "<br>";
    //Crea una constante de nombre "mi num fav" con valor numérico.
    const MI_NUM_FAV=83;
    echo MI_NUM_FAV;
    echo "<br>";
    /**********************************************************/
    // Booleanos
     /******************************************************** */
     //Crear una variable cuya valor sea la comparación entre booleano1 and booleano2.
     $comparada=($booleano1 && $booleano2);
     echo $comparada;
     var_dump($comparada);
     echo "<br>";
     //Crea una variable cuyo valor sea la comparación booleana de no boleano1.
     $noBoleano=!$booleano1; //recuerda que boleano 1 era false
     echo $noBoleano;
     echo "<br>";
     //Crea variable cuyo valor sea la compración booleana de (booleano1 or booleano2) and (booleano1 or (no booleano1 and no booleano2)).
    $compaVarias=(($booleano1 || $booleano2) && ($booleano1 || (!$booleano1 && !$booleano2)) );
    //(false o true) y (false o (true y false)) -> true y (false o false) -> true y false -> false
    var_dump($compaVarias);
     echo "<br>";
     //Crear variable cuyo valor sea la comparación booleano1 or booleano2.
    $compaOR=($booleano1 || $booleano2);
    echo $compaOR;
     echo "<br>";
     //Crear una variable cuyo valor sea la compración booleano (booleano1 and (tau/2 sea igual a PI) or (variableNumerica mayor o igual a miNumFav))
    $comparaciones=($booleano1 && ($tau/2==$PI) || ($variableNumerica=12 >= MI_NUM_FAV));
    //false y tue o true = false
    echo $comparaciones;
     echo "<br>";
     //Crea una variable cuya valor sea la comparación booleana 6 no es estrictamente igual que 9.
    $estricta=6===9;
    var_dump($estricta);
     echo "<br>";
     //Crear una variable cuyo valor sea la comparación booleana variableNumerica es positivo o menor que (miNumFav*tau).
    $positivo=($variableNumerica=90<=0 || $variableNumerica<(MI_NUM_FAV*$tau)); //<=0 se considera el 0 como positivo
    echo $positivo;
     echo "<br>";
    /**********************************************************/
    // OPERADORES
     /******************************************************** */

     //14 Crea una variable con valor 2, después súmale 5.
    $numeroSum=2;
    $numeroSum+=5;
    echo $numeroSum;
     echo "<br>";
     //15 /Crea una variable cuyo valor sea la resta de miNumFav y una variable de valor numérico.
    $numRes=MI_NUM_FAV-$numeroSum;
    echo $numRes; //83-7  76
     echo "<br>";
     //16 Crea una variable cuyo valor sea la suma de miNumFav y una variable de valor numérico.
    $numSumConst=MI_NUM_FAV+$numRes;
    echo $numSumConst; //83 + 76 = 159
     echo "<br>";
     //17 Crea una variable cuyo valor sea la multiplicación de miNumFav y una variable de valor numérico
    $numMult=MI_NUM_FAV*$numSumConst;
    echo $numMult; //159*83 13197
     echo "<br>";
     //18 Crea una variable cuyo valor sea la división de miNumFav y una variable de valor mumérico igual a 3.
    $numDiv=MI_NUM_FAV/$numeResta=3;
    echo $numDiv; //83/3 27.6...

     echo "<br>";
     //19 Crea una variable cuyo valor sea el resto de la división de 143 dividido entre 140.
    $modulo=143%140;
    echo $modulo;
     echo "<br>";
     //20 Crea una variable que cuyo valor sea el resto de la división de 25 entre 5.
     $modulo=25%5;
     echo $modulo;
     echo "<br>";
     /**********************************************************/
    // BUCLES
     /******************************************************** */
     //Crear variable contarHasta10_2 con valor 0 e incrementar su valor con un bucle for hasta que se verifique que contarHasta10_2 === 10.
     $contarHasta10_2=0;
    for($contarHasta10_2=0;$contarHasta10_2<10;$contarHasta10_2++){
        echo $contarHasta10_2;
        echo " ";
    }
    echo $contarHasta10_2; //podemos ver que llegó a 10
    
     echo "<br>";
     //Crear las variables postI y postJ con valor 0 a continuación crea un bucle que itere 11 veces. En cada iteración se deberá sumar al valor de postI el valor de postJ++.
    $postI=0;
    $postJ=0;
    for($i=0;$i<=10;$i++){
        echo $postI." ";
        $postI+=$postJ++;

    }
    echo $postI;
     echo "<br>";
     //Crear la variable sumaPares con valor 0 a continuación crea un bucle que itere 10 veces (i < 10) si la iteración es par se deberá sumar a sumaPares el número de la iteración actual (i).
    $sumaPares=0;
    for($i=0;$i<10;$i+=2){ //al empezar en 0 cada iteración será par, si no se podría usar el if $i%2=0
        $sumaPares+=$i;
    }
     echo "<br>";
     //Crear variable contarHasta10 con valor 0 e incrementar su valor con un bucle while hasta que se verifique que contarHasta10 === 10.
    $contarHasta10=0;
    while($contarHasta10<10){ //<10 y no <=10 para que cuando valga 10 ya no entre
        $contarHasta10++;
    }
    echo $contarHasta10;
     echo "<br>";
     //Crear las variables preI y preJ con valor 0 a continuación cree un bucle que itere 11 veces. En cada iteración se deberá sumar al valor de preI el valor de ++preJ.
    $preI=0;
    $preJ=0;
    for($i=0;$i<10;$i++){
        ++$preJ;
        $preI+=$preJ;
    }
    echo $preI;
     echo "<br>";
     //Crear la variable sumaImpares con valor 0 a continuación crea un bucle que itere 10 veces (i < 10) si la iteración es impar se deberá sumar a sumaImpares el número de la iteración actual (i).
    $sumaImpares=0;
    for($i=1;$i<10;$i+=2){
        echo "Sumando ".$i." a ".$sumaImpares."<br>";
        $sumaImpares+=$i;
    }
    echo $sumaImpares;
     echo "<br>";
?>