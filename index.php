<center><h1>hola mundo</h1></center>
<?php
$dias = ["lunes","martes","miercoles","jueves","viernes","sabado","domingo"];
echo $dias[5];//define una nombre del arreglo que esta en la linea 3

echo "<br>";//salto de linea

var_dump($dias);//imprime en pantalla todos los datos del arreglo

echo "<br>";

echo count($dias);//cuenta el numero de elementos del arreglo

echo "<br>";

for($i=0; $i<count($dias); $i++)
{
    echo $dias[$i]."___";
    echo "Dia $i: ".$dias[$i]."<br>";
}
////////////////////////////////////////////////////////////////////

echo "<br>";echo "__________________________________________________________________________________________________________________________________________________";echo "<br>";

?>
<?php 
    $array = [50,20,200,30,1,2];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenerar Arrays</title>
</head>
<body>
    Array de Entrada: <?= implode(',', $array) ?>
    <br>
    <?php sort($array) ?>
    Array de Salida: <?= implode(',', $array)  ?>
</body>
</html>