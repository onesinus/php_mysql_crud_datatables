<?php
	require "koneksi.php";

	if (isset($_POST['id'])) {
		$id = $_POST['id'];
		$nama_lengkap = $_POST['namalengkap'];
		$alamat = $_POST['alamat'];
		$umur = $_POST['umur'];
		$pekerjaan = $_POST['pekerjaan'];
		$jenis_kelamin = $_POST['jeniskelamin'];
		$contact = $_POST['contact'];

		$query = "UPDATE tb_pasien 
				  SET 
				  		namalengkap = '$nama_lengkap', 
				  		alamat = '$alamat' , 
				  		umur = '$umur', 
				  		pekerjaan = '$pekerjaan', 
				  		jeniskelamin = '$jenis_kelamin', 
				  		contact = '$contact'
				  WHERE
				  		id = '$id'
				";

		if ($conn->query($query) === TRUE) {
			Header('Location: read.php');		
		}else {
			echo "Error: " . $conn->error;
		}
	}
	$conn->close();
?>