<?php


require ("desarrollo.php");
$desarrolloweb=new desarrollo();
$desarrolloweb->Nombre= $_POST["nombre"];
$desarrolloweb->apellido= $_POST["apellido"];
$desarrolloweb->direccion= $_POST["direccion"];
$desarrolloweb->telefono= $_POST["telefono"];
$desarrolloweb->email= $_POST["email"];
$desarrolloweb->tipovehiculo= $_POST["tipovehiculo"];
$desarrolloweb->marca= $_POST["marca"];
$desarrolloweb->modelo= $_POST["modelo"];
$desarrolloweb->año= $_POST["año"];
$desarrolloweb->color= $_POST["color"];

echo "nombre:  ",$desarrolloweb->Nombre, "<br>apellido:  ",$desarrolloweb->apellido;
echo "<br>direccion:  ", $desarrolloweb->direccion;
echo "<br>telefono:  ", $desarrolloweb->telefono;
echo "<br>email:  ", $desarrolloweb->email;
echo "<br>tipovehiculo:  ", $desarrolloweb->tipovehiculo;
echo "<br>marca:  ", $desarrolloweb->marca;
echo "<br>modelo:  ", $desarrolloweb->modelo;
echo "<br>año:  ", $desarrolloweb->año;
echo   "<br>color:  ", $desarrolloweb->color;
?>