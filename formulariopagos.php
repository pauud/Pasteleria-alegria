<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3c.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head>

<meta http-equiv="Content-Type" content="text/html;
charset=utf-8" />

<title>Formulario pagos</title>
<style>
table {
      margin:auto
      with  :450px;
      border:2px dotted #FF0000
}

</style>
</head>

<body>
<p><h1>Formulario de registro de pagos</h1></p>
<form action="guardadatos_pagos.php" enctype="multipart/form-data" method="post">
<table>
<tr>
  <td>
  <label for="clave_cliente">clave del cliente: </label></td>
  <td><input id ="clave_cliente" type="text" name="clave_cliente" required > </td></tr>

<tr>
  <td>
  <label for="clave_servicio">clave de servicio: </label></td>
  <td><input id ="clave_servicio" type="text" name="clave_servicio" required > </td></tr>

<tr>
  <td>
  <label for="precio">precio: </label></td>
  <td><input id ="precio" type="text" name="precio" required > </td></tr>


<tr>
  <td>
  <label for="fecha">fecha: </label></td>
  <td><input id ="fecha" type="text" name="fecha" required > </td></tr>







   <tr>
  <td>
  <input type="submit" value="Registrar datos" name="ok" id="ok"/> </td></tr>
</body>

</html>