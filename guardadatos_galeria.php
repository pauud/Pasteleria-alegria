<?php 
// activamos el motor de mysqli
$conectado = new mysqli ('localhost', 'root', '0123456789','pasteleria_alegria');
 if ($conectado)
    {
     echo ("SE HA CONECTADO AL SERVIDOR MYSQL.......");      
     mysqli_select_db($conectado, "pasteleria_alegria") or die ("No se encuentra la base de datos"); 
     mysqli_set_charset ($conectado, "utf8"); 
      
 // recibimos datos del formulario
    
    $clave_servicio       = $_POST ['clave_servicio'];  
    $foto_producto        = $_FILES ['foto_producto'];
    $precio_producto      = $_POST ['precio_producto']; 
    $tiempo_elaboracion   = $_POST ['tiempo_elaboracion'];
    
    $contenido_foto = $_FILES['foto_producto']['name'];
    $nombre_foto    = $_FILES['foto_producto']['name'];
    $tipo_foto      = $_FILES['foto_producto']['type'];
    $tamanio_foto   = $_FILES['foto_producto']['size'];

    if ($tamanio_imagen <= 2000000)
      {
       if ($tipo_foto=="image/jpeg" || $tipo_foto=="image/jpg" ||  $tipo_foto=="image/png" || $tipo_foto=="image/gif")
          {
          // Ruta de la carpeta destino      en el servidor
             $carpeta_destino =$_SERVER     ['DOCUMENT_ROOT'] . '/foto/';
          // Movemos la imagen del     directorio temporal al directorio escogido
             move_uploaded_file($_FILES['foto_producto'] ['tmp_name'], $carpeta_destino.$nombre_foto);
            echo ("Datos registrados, gracias");

            $archivo_objetivo=fopen($carpeta_destino . $nombre_foto, "r");
            $contenido=fread($archivo_objetivo, $tamanio_foto);
            $contenido=addslashes($contenido);
            fclose ($archivo_objetivo);

         // Se procede guardar los datos en la tabla alumnos
            $sql ="INSERT INTO galeria_foto (clave_servicio, foto_producto,precio_producto, tiempo_elaboracion, contenido_foto,nombre_foto, tipo_foto, tamanio_foto) VALUES           

  ('$clave_servicio','$foto_producto','$precio_producto','$tiempo_elaboracion','$contenido', '$nombre_foto','$tipo_foto', '$tamanio_foto');";
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
           echo ("No es el tipo de imagen permitido, favor de verificar el formato");
          }
    }
    else
    {
     echo ("Se excede de lo permitido,intente con otra imagen ");

    }
 }
else
    {
     // si la conexion falla, se avisa de ello y se interrumpe la operacion.
     echo ("NO SE PUDO CONECTAR AL SERVIDOR MYSQL.......");
    }

?>