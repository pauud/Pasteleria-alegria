<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3c.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head>

<meta http-equiv="Content-Type" content="text/html;
charset=utf-8" />

<title>Formulario clientes</title>
<style>
table {
      margin:auto
      with  :450px;
      border:2px dotted #FF0000
}

</style>
</head>

<body>
<p><h1>Formulario de registro de clientes</h1></p>
<form action="guardadatos_cliente.php" enctype="multipart/form-data" method="post">
<table>
<tr>
  <td>
  <label for="clave_cliente">clave del cliente: </label></td>
  <td><input id ="clave_cliente" type="text" name="clave_cliente" required > </td></tr>

<tr>
  <td>
  <label for="nombre_cliente">nombre del cliente: </label></td>
  <td><input id ="nombre_cliente" type="text" name="nombre_cliente" required > </td></tr>

<tr>
  <td>
  <label for="apellido_cliente">apellido del cliente: </label></td>
  <td><input id ="apellido_cliente" type="text" name="apellido_cliente" required > </td></tr>


<tr>
  <td>
  <label for="direccion_cliente">direccion del cliente: </label></td>
  <td><input id ="direccion_cliente" type="text" name="direccion_cliente" required > </td></tr>

<tr>
  <td>
  <label for="correo_cliente">correo del cliente: </label></td>
  <td><input id ="correo_cliente" type="text" name="correo_cliente" required > </td></tr>


   <tr>
  <td>
  <input type="submit" value="Registrar datos" name="ok" id="ok"/> </td></tr>
</body>

</html>