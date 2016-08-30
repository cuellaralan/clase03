<?php 
$cant = strlen($_POST['mensaje']);
$msj = $_POST['mensaje'];
echo "La variable ".$msj." es ";

if ($cant < 5) 
{
	include 'menorA5.php';
}
else
	include 'mayorA5.php';
/*if (isset($_POST['mensaje'])) 
{
	echo $_POST['mensaje'];

}
else
	echo "<H1>primera vez que ingreso<H1>";
*/
 ?>