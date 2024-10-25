<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3c.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head>

<meta http-equiv="Content-Type" content="text/html;
charset=utf-8" />

<title>Formulario carga imagen de galeria_foto</title>
<style>
table {
      margin:auto;
      with  :450px;
      border:2px dotted #FF0000
}

</style>
</head>

<body>
<p><h1>Formulario de registro de galeria foto</h1></p>
<form action="guardadatos_galeria.php" enctype="multipart/form-data" method="post">
<table>
<tr>
  <td>
  <label for="clave_servicio">clave de servicio: </label></td>
  <td><input id ="clave_servicio" type="text" name="clave_servicio" required > </td></tr>

<tr>
  <td>
  <label for="precio_producto">precio del producto: </label></td>
  <td><input id ="precio_producto" type="text" name="precio_producto" required > </td></tr>

<tr>
  <td>
  <label for="tiempo_elaboracion">tiempo de elaboracion: </label></td>
  <td><input id ="tiempo_elaboracion" type="text" name="tiempo_elaboracion" required > </td></tr>

<tr>
  <td>
  <label for="foto_producto">foto del producto: </label></td>
  <td><input id ="foto_producto" type="file" name="foto_producto" required > </td></tr>

   <tr>
  <td>
  <input type="submit" value="Registrar datos" name="ok" id="ok"/> </td></tr>
</body>

</html>