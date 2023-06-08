<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body>
	<nav class="navbar bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="flyicon.png" alt="Bootstrap" width="45" height="45"> Logo
            </a>
        </div>
    </nav>	
	<div class="container">
		<div class="table-container">
		<table class="table">
			<thead>
				<tr>
					<th>Id Booking</th>
					<th>Tanggal</th>
					<th>Nama Pemesan</th>
					<th>Total Penumpang</th>
					<th>Asal Keberangkatan</th>
					<th>Tujuan Keberangkatan</th>
					<th>Kelas</th>
					<th>Harga</th>
				</tr>
			</thead>
			<tbody>		
			<?php
				$sql = "SELECT Reservasi.R_ID, Reservasi.R_Tanggal, Pemesan.Pm_Nama, Reservasi.R_Jumlah_Kursi, Jadwal_Penerbangan.Jp_Bandara_Asal, Jadwal_Penerbangan.Jp_Bandara_Tujuan, Harga.H_Harga, Kelas.K_Nama
						FROM Reservasi
						JOIN Pemesan ON Reservasi.Pn_ID = Pemesan.Pm_ID
						JOIN Jadwal_Penerbangan ON Reservasi.Pm_ID = Jadwal_Penerbangan.Jp_ID
						JOIN Harga ON Reservasi.Pn_ID = Harga.H_ID
						JOIN Kelas ON Harga.K_ID = Kelas.K_ID";
						
						
				$query = mysqli_query($db, $sql);
				
				if ($query) {
					while ($hasil = mysqli_fetch_array($query)) {
						echo "<tr>";
						echo "<td>".$hasil['R_ID']."</td>";
						echo "<td>".$hasil['R_Tanggal']."</td>";
						echo "<td>".$hasil['Pm_Nama']."</td>";
						echo "<td>".$hasil['R_Jumlah_Kursi']."</td>";
						echo "<td>".$hasil['Jp_Bandara_Asal']."</td>";
						echo "<td>".$hasil['Jp_Bandara_Tujuan']."</td>";
						echo "<td>".$hasil['K_Nama']."</td>";
						echo "<td>".$hasil['H_Harga']."</td>";
						echo "</tr>";
					}
				} else {
					echo "Query execution failed: " . mysqli_error($db);
				}
			?>
			</tbody>
		</table>
		</div>
	</div>
</body>
</html>