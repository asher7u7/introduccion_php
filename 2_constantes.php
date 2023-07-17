<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Variables y constantes</h1>
    <!--- codigo php --->
    <?php
        /*1. La forma de representar las variables en php
        es anteponiendo el simbolo $ a la palabra que 
        utilizaremos como variable. Ejemplo: $edad*/

        /*2. Debemos prestar atención a las mayusculas
        y minusculas, ya que PHP reconoce la diferencia
        entre las dos. $valor es diferente de $VALOR */

        /*3. ¿Para que se utilizan las variables?
        Gracias a ellas podemos realizar operaciones
        aritmeticas, operaciones con cadenas, etc */

        /*4. Las variables las utilizaremos como y
        cuando queramos en una misma pagina, ya que
        no existe limitacion en cuanto a su uso */

        /*5. Hay que prestar atención a no provocar
        errores, por usar como variables, palabras
        reservadas por el lenguaje. Ejemplo: $os 
        se geneta un error porque es una variable predefinida*/

        /*6. Tambien se debe evitar el error de
        empezar la variable por un número. Ejemplo:
        $35var = 45 es un error*/

        /*7. En PHP no es necesario especificar
        el tipo de variable, pero si debemos saber
        cuando utilizar las comillas a la hora de
        definirlas, ya que su uso indicaria que se
        esta hablando de una cadena. Ejemplo:
        $cuenta = 7 y $nombre = 'Nestor'*/

        /*8. Podemos mostrar las variables en pantalla
        de varias maneras, una de ellas puede ser utilizando
        la opcion echo(); otra puede ser mediante print();*/

        $a = 5;
        $b = "7";
        echo "<b><h1>";
        echo($a);
        echo "<br>";
        echo($b);
        echo "<b><h1>";

        //Constantes
        //La forma de definir una constante es mediante la funcion define
        //sintaxis: define("nombre_variable, valor variable")

        define("capital_colombia", "Bogotá");
        define("habitantes","7000000");
    ?>
</body>
</html>