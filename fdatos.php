<?php require_once('conexion.php');
$cantidad=$_POST["cantidad"];

for($x =0 ; $x <= $_POST['cantidad'] ; $x++) 
if(isset($_POST["submit" . $x])) {
 $nombre=  $_POST["nombre".$x ];
 $apellido=$_POST["apellido".$x ];

 $consulta="INSERT INTO alumno (nombre, apellido) VALUES ('$nombre', '$apellido')";
 mysql_query($consulta);
}
?>
<form id="form1" name="form1" method="post" >
  N. de Productos a Registrar:
  <input name="cantidad" type="number" id="cantidad" />
  <input type="submit" name="Submit" value="Ok" />
</form>


<? $cantidad=$_POST["cantidad"]; ?>{ 
  ?>
<br /><br />
<form method="POST">
<table width="auto" border="0">
  
  <tr>
    <td>No.</td>
    <td>Nombre:</td>
    <td>Apellido:</td>
  </tr>
  <?
 while($cantidad<=$_POST['cantidad']){ 
  ?>

  <tr>
    <td><? echo "$cantidad"; ?></td>
    <td><input type="text" name="nombre<? echo "$cantidad";?>" required="required"></td>
    <td><input type="text" name="apellido<? echo "$cantidad";?>" required="required"></td>
 <input name="num<? echo "$cantidad"; ?>" type="hidden">
 <input name="cantidad" type="hidden" id="cantidad" value="<? echo "$_POST['cantidad']"; ?>" />
<?
$cantidad++;
}
?>
  </tr>
  <tr>
   <td colspan="3" align="right">
   <button type ="submit" name="submit" >Guardar</button>
   </td>
<? } ?>  
  </tr>
</table>
</form>