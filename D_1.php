<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php /* php se escribe entre <?php y ?>*/
// esto es un comentario de una sola linea
/* esto es un 
comentario multilinea
*/
echo "Hello World!"; // la funcion echo imprime en pantalla
/*php no es sensible a mayusculas y minusculas 
en las funciones y palabras reservadas */
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";
/*php es sensible a mayusculas y minusculas en las variables, 
por lo que $color y $COLOR son diferentes */

$color = "red";// las variables se declaran con el signo $
echo "My car is " . $color . "<br>";
// producen un error por no tener valores asignados
//echo "My house is " . $COLOR . "<br>"; 
//echo "My boat is " . $coLOR . "<br>";
$txt = "Tacos"; // las variables no tienen tipo de dato
echo "I love " . $txt . "! <br>"; // se pueden concatenar variables
echo "tipos de datos en php <br>";
var_dump(5);
echo "<br>"; // <br> es un salto de linea
var_dump("John");
echo "<br>";
var_dump(3.14);
echo "<br>";
var_dump(true);
echo "<br>";
var_dump([2, 3, 56]);
echo "<br>";
var_dump(NULL);
echo "<br>";

$x = $y = $z = "Fruit"; // se pueden asignar el mismo valor a varias variables
echo "I love tropical " . $x . "! <br>";
echo "I love mexican " . $y . "! <br>";
echo "I love sweet " . $z . "! <br>";
$global = 5; // variable global (ignorar el nombre de la variable)

function myTest() { //esta es una funcion
  $local = 10; // variable local (ignorar el nombre de la variable)
  echo "<p>Variable x inside function is: $local</p>";
}
myTest();

echo "<p>Variable x outside function is: $global</p>";

$numx = 5;
$numy = 10;

function myTestg() { 
  global $numx, $numy;// se pueden usar variables globales dentro de funciones
  $numy = $numx + $numy;
}
myTestg();
echo "<br>";
echo $numy; // outputs 15
echo "<br>";

$numxx = 5;
$numyy = 10;

function myTestgi() {
  $GLOBALS['numyy'] = $GLOBALS['numxx'] + $GLOBALS['numyy'];
}// se pueden usar variables globales dentro de funciones con $GLOBALS array que almacena todas las variables globales

myTestgi();
echo "<br>";
echo $numyy; // outputs 15
echo "<br>";

function myTests() {
  static $x = 0; // static mantiene el valor de la variable
  echo $x;
  $x++;
}

myTests();
echo "<br>";
myTests();
echo "<br>";
myTests();

echo "<h2>PHP is Fun!</h2>"; //echo puede usarse con o sin parentesis: echo o echo()
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters. <br>";



// Ejemplo de uso de echo
$mensaje = "Hola, mundo! <br>";
echo $mensaje; // Imprime "Hola, mundo!" en la pantalla

// Ejemplo de uso de print
$numero = 10;
$resultado = print($numero); // Imprime el valor de $numero (10) y devuelve 1
echo "<br>"; // Imprime un salto de línea HTML
echo "El valor devuelto por print es: $resultado <br>"; // Imprime "El valor devuelto por print es: 1"
echo "array de carros <br>";


$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

echo "<br>";
$x = 5;
$x = (string) $x; //convertir a string sin cambiar el valor de la variable
var_dump($x);

echo strlen("Hello world! <br>"); //retorna la longitud de un string
echo str_word_count("Hello world! <br>"); //retorna el numero de palabras en un string
echo strpos("Hello world!", "world <br>"); //retorna la posicion de la primera ocurrencia de una palabra en un string













?>
</body>
</html>