<?php
// Guardo la salida en un buffer(en memoria)
// No se envia al navegador
ob_start();

?>

<table>
	<tr>
<?php
$auto = $_SERVER['PHP_SELF'];
// identificador => Nombre, email, plan y Estado
?>
<?php foreach ($usuarios as $clave => $datosusuario) : ?>
<tr>		
<td><?= $clave ?></td> 
	<?php for  ($j=0; $j < count($datosusuario); $j++) :?>
     <td><?=$datosusuario[$j] ?></td>
	<?php endfor;?>
<td><a href="app/plantilla/borrar.html" onclick="confirmarBorrar('<?= $datosusuario[0]."','".$clave."'"?>);">Borrar</a></td>
<td><a href="app/plantilla/modificar.html">Modificar</a></td>
<td><a href="app/plantilla/detalles1.html">Detalles</a></td>
</tr>
<?php endforeach; ?>
</table>
<form action='index.php'>
	<input type='hidden' name='orden' value='Cerrar'> <input type='submit'
		value='Cerrar Sesión'>
</form>

<?php
// Vacio el bufer y lo copio a contenido
// Para que se muestre en div de contenido de la página principal
$contenido = ob_get_clean();
include_once "principal.php";

?>