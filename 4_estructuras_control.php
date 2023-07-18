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
        //if
            //Permite la ejecución condicional de fragmentos de código. 

            if ($a > $b) {
                echo "a es mayor que b";
              }
        
         
        //if-else
            /*elseif, como su nombre lo sugiere, es una combinación de if y else.
            Del mismo modo que else, extiende una sentencia if para ejecutar una
            sentencia diferente en caso que la expresión if original se evalúe
            como false. Sin embargo, a diferencia de else, esa expresión alternativa
            sólo se ejecutará si la expresión condicional del elseif se evalúa como true.
            Por ejemplo, el siguiente código debe mostrar a es mayor que b, a es igual que b o a es menor que b:*/

            if ($a > $b) {
                echo "a es mayor que b";
            } elseif ($a == $b) {
                echo "a es igual que b";
            } else {
                echo "a es menor que b";
            }

        //while
            /*El significado de una sentencia while es simple. Le dice a PHP que ejecute
            las sentencias anidadas, tanto como la expresión while se evalúe como true. 
            El valor de la expresión es verificado cada vez al inicio del bucle, por lo
            que incluso si este valor cambia durante la ejecución de las sentencias anidadas,
            la ejecución no se detendrá hasta el final de la iteración (cada vez que PHP
            ejecuta las sentencias contenidas en el bucle es una iteración). A veces, si
            la expresión while se evalúa como false desde el principio, las sentencias 
            anidadas no se ejecutarán ni siquiera una vez.*/

            $i = 1;
            while ($i <= 10) {
                echo $i++;
            }

        //do-while
            /*Los bucles do-while son muy similares a los bucles while, excepto que la
            expresión verdadera es verificada al final de cada iteración en lugar que
            al principio. La diferencia principal con los bucles while es que está 
            garantizado que corra la primera iteración de un bucle do-while (la expresión
            verdadera sólo es verificada al final de la iteración), mientras que no
            necesariamente va a correr con un bucle while regular (la expresión verdadera
            es verificada al principio de cada iteración, si se evalúa como false justo
            desde el comienzo, la ejecución del bucle terminaría inmediatamente).*/

            $i = 0;
            do {
                echo $i;
            } while ($i > 0);

        //for
            /*Cada una de las expresiones puede estar vacía o contener múltiples expresiones
            separadas por comas. En expr2, todas las expresiones separadas por una coma son
            evaluadas, pero el resultado se toma de la última parte. Que expr2 esté vacía
            significa que el bucle debería ser corrido indefinidamente (PHP implícitamente
            lo considera como true, como en C). Esto puede no ser tan inútil como se pudiera
            pensar, ya que muchas veces se debe terminar el bucle usando una sentencia
            condicional break en lugar de utilizar la expresión verdadera del for. */

            for ($i = 1; $i <= 10; $i++) {
                echo $i;
            }

        //require
            /*require es idéntico a include excepto que en caso de fallo producirá un error
            fatal de nivel E_COMPILE_ERROR. En otras palabras, éste detiene el script mientras
            que include sólo emitirá una advertencia (E_WARNING) lo cual permite continuar el script.*/

            require('somefile.php');

        //include
            //La sentencia include incluye y evalúa el archivo especificado
            
            //archivo con las variables
            //vars.php
            

            $color = 'verde';
            $fruta = 'manzana';

            
            //archivo con la ejecucion
            //test.php
            

            echo "Una $fruta $color"; // Una

            include 'vars.php';

            echo "Una $fruta $color"; // Una manzana verde

            

        //switch
            /*La sentencia switch es similar a una serie de sentencias IF en
            la misma expresión. En muchas ocasiones, es posible que se quiera
            comparar la misma variable (o expresión) con muchos valores diferentes,
            y ejecutar una parte de código distinta dependiendo de a que valor
            es igual. Para esto es exactamente la expresión switch.*/

            if ($i == 0) {
                echo "i es igual a 0";
            } elseif ($i == 1) {
                echo "i es igual a 1";
            } elseif ($i == 2) {
                echo "i es igual a 2";
            }
            
            switch ($i) {
                case 0:
                    echo "i es igual a 0";
                    break;
                case 1:
                    echo "i es igual a 1";
                    break;
                case 2:
                    echo "i es igual a 2";
                    break;
            }

        //Ejemplos Profe

        //if, if-else
            //Ejemplo 1
            $color = "rojo";
            if($color = "rojo")
            {
                print("efectivamente es color rojo");
            }
            echo "<br>";
            
            //Ejemplo 2
            $x = 10;
            $y = 15;
            if($x == $y)
            {
                print("X e Y son iguales");
            }
            elseif($x > $y)
            {
                print("X mayor que Y");
            }
            elseif($x < $y)
            {
                print("X es menor que Y)");
            }

        //While
            //Ejemplo 1
            $x = 10;
            while(--$x)
            {
                echo "<big>";
                echo "<b>";
                print("Número: ". $x);
                echo "<br>";
                echo "<hr>";
            }

        //do-While

        //for
            //Ejemplo 1
            for($x=5; $x<=10; $x++)
            {
                print("Número: ".$x."<br>");
            }

        //require
        
        //include
            //Ejemplo 1
            include("variable.php");
            echo "<br>";
            print("$x"."$z"."$y");
        
        //Switch
            //Ejemplo 1
            $color = "negro";
            switch($color)
            {
                case "blanco":
                    $sector = "claro";
                    break;
                case "naranja":
                    $sector = "normal";
                    break;
                case "negro":
                    $sector = "oscuro";
                    break;
            }

            print ($setor);



    ?>  
</body>
</html>