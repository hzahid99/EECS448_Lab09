<style> 
    <?php 
        include 'style.css'; 
    ?> 
</style>
<?php 

error_reporting(E_ALL);
ini_set("display_errors", 1);

$username = $_POST["username"];
$password = $_POST["password"];
$carrera = $_POST["carrera"];
$movado = $_POST["movado"];
$rolex = $_POST["rolex"];
$shipping = $_POST["choice"];

echo "<p style='color: Blue; font-size:30px'> Welcome to the Store: " . $username ."</p>";
echo "<p style='color: Blue; font-size:30px'> Your Password: " . $password . "</p>";

$ShippingCost=0;
if($shipping == "Normal")
{
    $ShippingCost = 0;
}
else if($shipping == "Priority")
{
    $ShippingCost = 50;
}
else if($shipping == "Express")
{
    $ShippingCost = 5;
}


$RolexPrice=$rolex*8750;
$MovadoPrice=$movado*695;
$CarreraPrice=$carrera*2850;

$total = $ShippingCost + $RolexPrice + $MovadoPrice + $CarreraPrice;

echo "<p style='color: Red; font-size:30px'>Receipt:</p>";
echo "<br><br>";
echo "
 <table>
	<tr>	
		<th style='background-color:rgb(191, 209, 186)'>            </th>
		<th style='background-color:rgb(191, 209, 186)'>Quantity</th>
		<th style='background-color:rgb(191, 209, 186)'>Cost Per Item</th>
		<th style='background-color:rgb(191, 209, 186)'>Sub Total</th>
	</tr>";

	echo "<tr>
		<th style='background-color:rgb(191, 209, 186)'>TAG HEUER CARRERA</th>
		<td style='background-color:rgb(199, 140, 211)'>$carrera</td>
		<td style='background-color:rgb(199, 140, 211)'>$2850.00</td>
		<td style='background-color:rgb(199, 140, 211)'>$$CarreraPrice</td>
	</tr>";
	echo "<tr>
		<th style='background-color:rgb(191, 209, 186)'>Movado Modern 47</th>
		<td style='background-color:rgb(199, 140, 211)'>$movado</td>
		<td style='background-color:rgb(199, 140, 211)'>$695.00</td>
		<td style='background-color:rgb(199, 140, 211)'>$$MovadoPrice</td>
	</tr>";
echo "<tr>
		<th style='background-color:rgb(191, 209, 186)'>Rolex Submariner Date Watch</th>
		<td style='background-color:rgb(199, 140, 211)'>$rolex</td>
		<td style='background-color:rgb(199, 140, 211)'>$8750.00</td>
		<td style='background-color:rgb(199, 140, 211)'>$$RolexPrice</td>
	</tr>";
echo "<tr>
		
		<th style='background-color:rgb(191, 209, 186)'>Shipping</th>
		<td style='background-color:rgb(199, 140, 211)' colspan='2'>$shipping</td>
		<td style='background-color:rgb(199, 140, 211)'>$$ShippingCost</td>
</tr>";
echo "<tr>
		
		<th style='background-color:rgb(191, 209, 186)' colspan='3'>Total Cost</th>
		<td style='background-color:rgb(199, 140, 211)'>$$total</td>
</tr>";
echo "</table>";
?>