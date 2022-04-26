<!DOCTYPE html>
<html>
<head>
	<title> Multiplication Table </title>
</head>
<body>
<div align = "center">
	<h1> 100x100 Multiplication Table </h1>
	<table border = "2">
		<tr>
			<th>x</th>
			<?php
			for ($i = 1; $i <= 100; $i++)
			{
				echo '<th>'.$i.'</th>';
			}
			?>
		</tr>
		<?php
		for ($i = 1; $i <= 100; $i++)
		{
			echo '<tr>
				<th>'.$i.'</th>';
			for ($j = 1; $j <= 100; $j++)
			{
				$prod = $i * $j;
				if($i%10 == 0 || $j%10== 0)
				{
					echo "<td style='background-color: #ccffff; color:#000000;'>".$prod;  //This coloring will help locate the values quicker
				}
				else
				{
					echo "<td>".$prod;	
				}
			}
		}
		?>
	</table>
</div>
</body>
</html>