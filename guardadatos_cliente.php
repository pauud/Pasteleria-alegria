<?php 
// activamos el motor de mysqli
$conectado = new mysqli ('localhost', 'root', '0123456789','pasteleria_alegria');
 if ($conectado)
    {
     echo ("SE HA CONECTADO AL SERVIDOR MYSQL.......");      
     mysqli_select_db($conectado, "pasteleria_alegria") or die ("No se encuentra la base de datos"); 
     mysqli_set_charset ($conectado, "utf8"); 
      
 // recibimos datos del formulario
    
    $clave_cliente       = $_POST ['clave_cliente'];  
    $nombre_cliente      = $_POST ['nombre_cliente'];
    $apellido_cliente    = $_POST ['apellido_cliente']; 
    $direccion_cliente   = $_POST ['direccion_cliente']; 
    $correo_cliente    = $_POST ['correo_cliente'];  
 

  
         // Se procede guardar los datos en la tabla clientes
            $sql ="INSERT INTO clientes (clave_cliente,nombre_cliente,apellido_cliente,direccion_cliente,correo_cliente) VALUES           

  ('$clave_cliente','$nombre_cliente ','$apellido_cliente','$direccion_cliente','$correo_cliente');";
            $resultado=mysqli_query ($conectado,$sql);
            if (mysqli_affected_rows ($conectado)>0)
               {
                echo ("Se ha insertado el registro con éxito");
               }
             else
              { 
               echo ("No se ha podido insertar el registro");
              }

    

 }
else
    {
     // si la conexion falla, se avisa de ello y se interrumpe la operacion.
     echo ("NO SE PUDO CONECTAR AL SERVIDOR MYSQL.......");
    }

?>