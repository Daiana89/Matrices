<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp4_backend.php</title>
</head>
<body>
<?php 
echo"<h3>MATRICES</h3>";
echo "1. Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.<br><br>";
$array=[2,4,6,8,10,12,14,16,18,20];
foreach($array as $num){
    echo"$num<br><br>";
}
echo"<br>";
echo "2. Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la
matriz. Mostrar el esquema del array con print_r().<br><br>";
$array=[ "Pedro", "Ana", 34 , 1,];
foreach($array as $valor){
    echo"<br>";
    print_r($valor);
}

echo"<br><br>";
echo "3. Crear un array asociativo e introducir los siguientes valores:
Nombre: Pedro
Apellido: Torres
Dirección: Av. Mayor 3703
Teléfono: 1122334455
<br><br>";
$array=[
"Nombre"=> "Pedro",
"Apellido"=> "Torres",
"Dirección"=> "Av. Mayor 3703",
"Teléfono" => 1122334455,
];
foreach ($array as $indice => $valor){
    echo"$indice => $valor <br><br>";

}


echo "4. Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y
Chicago, sin asignar índices al array. A continuación, muestra el contenido del array.
Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.<br><br>";

$array=[ "Madrid", "Barcelona", "Londres", "New York", "Los Ángeles",
"Chicago"];
foreach ($array as $indice => $valor){
    echo"$indice => $valor <br><br>";

}


echo "5. Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona,
LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.
Ejemplo: El índice de Madrid es MD.<br><br>";

$array=["MD"=>"Madrid",
"BCL"=>"Barcelona",
"LC" => "Londres",
"NY" =>"New York",
"LA" => "Los Angeles",
"CCG" => "Chicago"];

foreach ($array as $indice => $valor){
    echo"$indice => $valor <br><br>";

}






?>
    
</body>
</html>