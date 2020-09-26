<?php
	require "koneksi.php";

	if (isset($_POST)) {
		$nama_lengkap = $_POST['namalengkap'];
		$alamat = $_POST['alamat'];
		$umur = $_POST['umur'];
		$pekerjaan = $_POST['pekerjaan'];
		$jenis_kelamin = $_POST['jeniskelamin'];
		$contact = $_POST['contact'];

		$query = "INSERT INTO tb_pasien (namalengkap, alamat, umur, pekerjaan, jeniskelamin, contact) VALUES('$nama_lengkap', '$alamat', '$umur', '$pekerjaan', '$jenis_kelamin', '$contact')";

		if ($conn->query($query) === TRUE) {
			Header('Location: read.php');		
		}else {
			echo "Error: " . $conn->error;
		}
	}
		
	$conn->close();
?>