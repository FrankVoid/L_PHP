<!DOCTYPE html>
<html>
<body>
<?php
// Definición de la clase Car
class Car {
    // Propiedades públicas de la clase Car
    public $color;
    public $model;
    
    // Método constructor de la clase Car
    public function __construct($color, $model) { //esto es un constructor de la clase Car
        // Asigna los valores de color y modelo proporcionados a las propiedades correspondientes
        $this->color = $color;//esto es un atributo de la clase Car
        $this->model = $model; //esto es un atributo de la clase Car
    }
    
    // Método de la clase Car que devuelve un mensaje describiendo el automóvil
    public function message() { //esto es un método de la clase Car que devuelve un mensaje describiendo el automóvil
        // Concatena el color y el modelo del automóvil para formar un mensaje
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}

// Creación de una nueva instancia de la clase Car con el color "red" y el modelo "Volvo"
$myCar = new Car("red", "Volvo");

// Muestra información detallada sobre el objeto $myCar
var_dump($myCar);
echo "<br>";
if (1>0){
    echo "1 es mayor que 0 <br>";
}

$t = date("H");

if ($t < "20") {
  echo "Have a good day! <br>";
} else {
  echo "Have a good night! <br>";
}

$a = 5;

if ($a < 10) $b = "Hello"; 
// se puede omitir las llaves si solo hay una instrucción



$c = $a < 4 ? "Hello" : "Good Bye"; 
// se puede usar el operador ternario para asignar valores basados en una condición

echo $b . "<br>";    

echo $c . "<br>";

$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red! <br>";
    break;
  case "blue":
    "Your favorite color is blue! <br>";
    break;
  case "green":
    echo "Your favorite color is green! <br>";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green! <br>";
}
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
echo "matriz de carros bidimencional <br>";
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>"; 
//se puede acceder a los elementos de una matriz bidimensional usando dos índices
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

//También podemos poner un bucle dentro de otro bucle para obtener los elementos 
//de la clase $cars matriz (todavía tenemos que apuntar a los dos índices):forfor
for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
      for ($col = 0; $col < 3; $col++) {
        echo "<li>".$cars[$row][$col]."</li>";
      }
    echo "</ul>";
  }

?>
</body>
</html>

