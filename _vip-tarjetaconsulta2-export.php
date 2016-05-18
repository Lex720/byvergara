<?php

// Time limit to 0 for exporting big records.
set_time_limit(0);
include ("_conexion-vip.php");

//header("Content-type: application/vnd.ms-excel");
//header("Content-Disposition: attachment; filename=Reporte_Giftcards.xls");
header("Content-type: text/html");
header("Content-Disposition: attachment; filename=Reporte_VIPs.html");
header("Pragma: no-cache");
header("Expires: 0");

echo "<html>";
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">";
echo "<body>";
echo"<br>";
echo "<table width=50% align=center border=1>";
echo"<tr><th align=center colspan=5><h2>Listado de tarjetas VIP</h2></th></tr>";
echo"<tr>
	<th align=center>Codigo</th>
	<th align=center>Tipo</th>
	<th align=center>Fecha de entrega</th>
	<th align=center>Tienda</th><th align=center>Status</th>
	</tr>";

// Get data using PDO prepare Query and execute it.
$consulta = $db->prepare("SELECT `codigo`, `tipo`, `fecha_entrega`, `tienda`, `status` FROM tarjetas ORDER BY codigo");
$consulta->execute();

// We use while loop here to echo records.
while ($filas = $consulta->fetch(PDO::FETCH_BOTH))
{

$codigo = $filas ['codigo'];
$tipo = $filas ['tipo'];
$fecha_entrega = $filas ['fecha_entrega'];
$tienda = $filas ['tienda'];
$status = $filas ['status'];

echo "<tr>";
echo "<td align=center>".$codigo."</td>";
echo "<td align=center>".$tipo."</td>";
echo "<td align=center>".$fecha_entrega."</td>";
echo "<td align=center>".$tienda."</td>";
echo "<td align=center>".$status."</td>";
echo "</tr>";
}

// Change the line below to your timezone!
date_default_timezone_set('America/Caracas');
$date = date('d/m/Y h:i:s a', time());

echo "<tr><td colspan=5>&nbsp;</td></tr>";
echo "<tr><td align=right colspan=5>".$date."</td></tr>";

echo "</table>";
echo "</body>";
echo "</html>";

// Closing MySQL database connection
$db = null;

?>