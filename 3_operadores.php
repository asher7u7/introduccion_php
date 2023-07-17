<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //Operadores aritmeticos

        /* +$a	Identidad	Conversión de $a a int o float según el caso.
            -$a	Negación	Opuesto de $a.
            $a + $b	Adición	Suma de $a y $b.
            $a - $b	Sustracción	Diferencia de $a y $b.
            $a * $b	Multiplicación	Producto de $a y $b.
            $a / $b	División	Cociente de $a y $b.
            $a % $b	Módulo	Resto de $a dividido por $b.
            $a ** $b	Exponenciación	Resultado de elevar $a a la potencia $bésima.*/

            $a = 8;
 
            $b = 3;
           
            echo $a + $b."<br>";
           
            echo $a - $b."<br>";
           
            echo $a * $b."<br>";
           
            echo $a / $b."<br>";
           
            echo $a % $b,"<br>";
           
            $a++;
           echo $a."<br>";
           
            $b--;
           echo $b."<br>";


        //Operadores de Comparación

            /*$a == $b	Igual	true si $a es igual a $b después de la manipulación de tipos.
            $a === $b	Idéntico	true si $a es igual a $b, y son del mismo tipo.
            $a != $b	Diferente	true si $a no es igual a $b después de la manipulación de tipos.
            $a <> $b	Diferente	true si $a no es igual a $b después de la manipulación de tipos.
            $a !== $b	No idéntico	true si $a no es igual a $b, o si no son del mismo tipo.
            $a < $b	Menor que	true si $a es estrictamente menor que $b.
            $a > $b	Mayor que	true si $a es estrictamente mayor que $b.
            $a <= $b	Menor o igual que	true si $a es menor o igual que $b.
            $a >= $b	Mayor o igual que	true si $a es mayor o igual que $b.
            $a <=> $b	Nave espacial	Un integer menor que, igual a, o mayor que cero cuando $a es respectivamente menor que, igual a, o mayor que $b.
            $a ?? $b ?? $c	Fusión de null	El primer operando de izquierda a derecha que exista y no sea null. null si no hay valores definidos y no son null.*/

            $a = 8;
 
            $b = 3; 
            
            $c = 5; 
            
            if($a == $b)
                {
                echo "$a es igual a $b <br>";
            } 
                else
                {
                echo "$a no es igual a $b <br>";
                }
            
            if($a != $b)
                {
                echo "$a no es igual a $b <br>";
                }
            else
                {
                echo "$a es igual a $b <br>";
            }
            
            if($a < $b)
            {
                echo "$a es menor a $b <br>";
            }
            else
                {
                echo "$a no menor a $b <br>";
            }
            
            if($a > $b)
            {
                echo "$a es mayor a $b <br>";
            }
            else
                {
                echo "$a no es mayor a $b <br>";
                }
            
                if($a >= $c)
                {
                echo "$a es mayor o igual a $b <br>";
                }
                else
                {
                echo "$a no es mayor o igual a $b <br>";
                }
            
            if($b <= $c)
                {
                echo "$b es menor o igual a $c <br>";
                }
                else
                {
                echo "$b no es menor o igual a $c <br>";
                }

        //Operadores logicos

                /*$a and $b	And (y)	true si tanto $a como $b son true.
                $a or $b	Or (o inclusivo)	true si cualquiera de $a o $b es true.
                $a xor $b	Xor (o exclusivo)	true si $a o $b es true, pero no ambos.
                ! $a	Not (no)	true si $a no es true.
                $a && $b	And (y)	true si tanto $a como $b son true.
                $a || $b	Or (o inclusivo)	true si cualquiera de $a o $b es true.*/

                echo " true && true  es igual a: ";
                var_dump($a && $b);
                echo "<br/>";
                echo " true || true  es igual a: ";
                var_dump($a || $b);
                echo "<br/>";
                echo " true xor true  es igual a: ";
                var_dump($a xor $b);
                echo "<br/>";
                echo " !true es igual a: ";
                var_dump(!$a);



        //Operadores de union de cadenas
                
                /*Operador de concatenación '.'. Concatena los argumentos derecho e izquierdo.
                Operador de asignación sobre concatenación '.=', añade el argumento del lado derecho al argumento del lado izquierdo.*/

                $x = "Hola";
                $y = $x . ", ¿Qué tal?"; // $y = "Hola, ¿Qué tal?"
                
                $x = "Hola ";
                $x .= ", ¿Qué tal?"; // $x = "Hola, ¿Qué tal?"



    ?>
</body>
</html>