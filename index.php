<!DOCTYPE html>
<html>
	<head>
		<title>
			Nasz sklep komputerowy
		</title>
		<link rel="stylesheet" href="styl8.css">
		<meta charset=UTF-8>
	</head>
	<body>
		<div class="logomenu">
			<a href="index.php">Główna</a>
			<a href="procesory.html">Procesory</a>
			<a href="ram.html">RAM</a>
			<a href="grafika.html">Grafika</a>
		</div>
		<div class="logomenu">
			<h2>Podzespoły komputerowe</h2>
		</div>
		<div id="gowny">
			<h1>Dzisiejsze promocje</h1>
			<table>
			<tr>
				<th>NUMER</th>
				<th>NAZWA PODZESPOŁU</th>
				<th>OPIS</th>
				<th>CENA</th>
			</tr>

			<?php
			$db = mysqli_connect('localhost','root','','sklep');

			$sql = "SELECT id, nazwa, opis, cena FROM podzespoly WHERE cena <'1000'";
			
			$result = mysqli_query($db, $sql);

			while($row = mysqli_fetch_array($result)){
				echo "<tr>";
				echo "<td>".$row[0]."</td>";
				echo "<td>".$row[1]."</td>";
				echo "<td>".$row[2]."</td>";
				echo "<td style='text-align:right';>".$row[3]."</td>";
				echo "</tr>";
			}
			mysqli_close($db);
			?>
			</table>
		</div>
		<footer>
			<img src="scalak.jpg" alt="promocje na procesory">
		</footer>
		<footer>
			<h4>Nasz Sklep Komputerowy</h4><p>Współpracujemy z hurtownią <a href="http://www.edata.pl/">edata</a></p>
		</footer>
		<footer>
			<p>zadzwoń: 601 602 603</p>
		</footer>
		<footer>
			<p>Stronę wykonał: Dawid Ziora IIIA</p>
		</footer>
	</body>
</html>