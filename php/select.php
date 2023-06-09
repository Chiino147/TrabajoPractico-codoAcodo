<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<style type="text/css">
@import url("css/tabla.css");
</style>

<body>

</body>
</html>


<table>

 <?php

include ('conex.php');


 $consulta="SELECT * from tercero";
                       
          $result=$conexion->query($consulta); 
          //$num_resul=mysqli_num_rows($result);
           while ($filas = mysqli_fetch_assoc($result))
             {
           echo "<tr>";
           echo "<td>"; echo $filas['idtercero']; echo "</td>"; echo"</br>";
           echo "<td>"; echo $filas['nombre']; echo "</td>"; echo"</br>";
           echo "<td>"; echo $filas['apellido']; echo "</td>"; echo"</br>";
           echo "<td>"; echo $filas['habilidad']; echo "</td>";  echo"</br>";
           echo "<td>  <a href='update.php=".$filas['idtercero']."'> <button type='button' /class='btn btn-success'>Ver_Registro</button> </a> </td>";

        
                 }
      
           echo"</br>";

        

   ?> 



    
         </table>

