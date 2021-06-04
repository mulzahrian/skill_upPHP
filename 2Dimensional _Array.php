<!DOCTYPE html>
<html>
<head>
  <title>Belajar Array 2 Dimensi PHP</title>
</head>
<body>
<table border="1">
<tr><td>Nama</td><td>Jurusan</td><td>Jenis Kelamin</td><td>Usia</td></tr>
<?php
$mahasiswa = array(
		array("Ari", "Teknik Komputer", "Laki-laki",21),
		array("Nugi", "Teknik Elektronika Telekomunikasi", "Laki-Laki", 21),
		array("Yanda", "Akuntansi", "Perempuan",21),
		array("Fitra", "Teknik Listrik", "Perempuan", 21),
		array("Gina", "Teknik Informatika", "Perempuan", 21)
		);
			
	for ($row = 0; $row < 5; $row++) {
		echo "<tr>";
		for ($col = 0; $col < 4; $col++) {
			echo "<td>".$mahasiswa[$row][$col]."</td>";
		}
	echo "</tr>";
}
?>
</table>
</body>
</html>
