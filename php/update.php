<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
include ('conex.php');


 $idregistro = $_GET ["idtercero"];                  
 $consulta="SELECT * from tercero where id='$idregistro'";
          $result=$conexion->query($consulta); 
          //$num_resul=mysqli_num_rows($result);
           while ($filas = mysqli_fetch_assoc($result))
             {
           echo "<tr>";
              $Id= $filas['idtercero'];
             //echo $Id;
              $Nom= $filas['nombre'];
              $Apel= $filas['apellido'];
              $Hab= $filas['habilidad'];
           
                 }
      
           echo"</br>";

          
?>


    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="idterciario" disabled style="width: 80px" value="<?php echo $Id;?>">
     &nbsp&nbsp&nbsp<input type="text" name="nom" disabled style="width: 80px" value="<?php echo $Nom;?>">
    &nbsp&nbsp&nbsp<input type="text" name="apel" disabled style="width: 80px" value="<?php echo $Apel;?>">
    &nbsp&nbsp&nbsp<input type="text" name="nom" disabled style="width: 80px" value="<?php echo $Hab;?>">


</body>
</html>