<?php
	require "koneksi.php";

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$query = "DELETE FROM tb_pasien WHERE id = '$id'";
		if ($conn->query($query)) {
			Header('Location: read.php');
		}else {
			echo "Error delete data " . $conn->error;
		}
	}

	$conn->close();

?>