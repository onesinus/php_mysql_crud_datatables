<?php
	require "koneksi.php";
?>
<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Klinik</title>
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.css">
	</head>
	<body>
		<section class="section">
		    <div class="container">
		      <h1 class="title has-text-centered">
		        Data Klinik
		      </h1>
	          <a href="create.php" class="button is-success">Add Pasien</a>
	          <div class="table-container">
			      <table class="table is-hoverable is-bordered is-fullwidth mt-2">
			      	<tr>
			      		<th>#</th>
			      		<th>Id Pasien</th>
			      		<th>Nama Lengkap</th>
			      		<th>Alamat</th>
			      		<th>Umur</th>
			      		<th>Pekerjaan</th>
			      		<th>Jenis Kelamin</th>
			      		<th>Contact</th>
			      		<th>Actions</th>
			      	</tr>
			      	<?php
			      		$query = "SELECT * FROM tb_pasien";
			      		$getPasien = $conn->query($query);
			      		if ($getPasien->num_rows > 0):
			      			$i = 1;
			      			while ($row = $getPasien->fetch_assoc()):		      				
			      	?>
						      	<tr>
						      		<td><?php echo $i++; ?></td>
						      		<td><?php echo $row['id']; ?></td>
						      		<td><?php echo $row['namalengkap']; ?></td>
						      		<td><?php echo $row['alamat']; ?></td>
						      		<td><?php echo $row['umur']; ?></td>
						      		<td><?php echo $row['pekerjaan']; ?></td>
						      		<td><?php echo $row['jeniskelamin']; ?></td>
						      		<td><?php echo $row['contact']; ?></td>
						      		<td>
						      			<a href="update.php?id=<?php echo $row['id']; ?>" class="button is-info">Ubah Data</a>
						      			<a onclick="return confirm('Are you sure you want delete this data?')" href="delete.php?id=<?php echo $row['id']; ?>" class="button is-danger">Hapus Data</a>
						      		</td>
						      	</tr>
					<?php
							endwhile;
					?>
					<?php
						else:
					?>
						<tr>
							<td colspan="8">No Patient Data</td>
						</tr>
					<?php
						endif;
					?>				
			      </table>
			    </div> <!-- End Div table container -->
		    </div>
  	  	</section>
	</body>
</html>
<?php
	$conn->close();
?>