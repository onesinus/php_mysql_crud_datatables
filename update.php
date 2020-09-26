<?php
	require "koneksi.php";

	if ($_GET['id']) {
		$id = $_GET['id'];
		$query = "SELECT * FROM tb_pasien WHERE id = '$id'";
		$getPasien = $conn->query($query);
		$pasien = $getPasien->fetch_assoc();
	}else {
		header('Location: read.php');
	}
?>
<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Ubah Pasien</title>
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.css">
	</head>
	<body>
		<section class="section">
		    <div class="container">
		      <h1 class="title has-text-centered">
		        Edit Data Pasien
		      </h1>
  	      	  <form method="POST" action="proses_update.php">
  	      	  	<input type="hidden" name="id" value="<?php echo $id; ?>">
  	      	  	<div class="field">
		      	  	<label class="label">Nama Lengkap</label>
		      		<input name="namalengkap" class="input" type="text" placeholder="Isi nama lengkap pasien" value="<?php echo $pasien['namalengkap']; ?>" required />
  	      	  	</div>
  	      	  	<div class="field">
		      	  	<label class="label">Alamat</label>
		      		<textarea name="alamat" class="textarea" placeholder="Isi alamat pasien" rows="3"><?php echo $pasien['alamat']; ?></textarea>
  	      	  	</div>
  	      	  	<div class="field">
		      	  	<label class="label">Umur</label>
		      		<input name="umur" class="input" type="number" placeholder="Isi Usia Pasien" min="0" max="200" value="<?php echo $pasien['umur']; ?>" />
  	      	  	</div>
  	      	  	<div class="field">
		      	  	<label class="label">Pekerjaan</label>
		      		<input name="pekerjaan" class="input" type="text" placeholder="Isi pekerjaan pasien" value="<?php echo $pasien['pekerjaan']; ?>" />
  	      	  	</div>
  	      	  	<div class="field">
		      	  	<label class="label">Jenis Kelamin</label>
		      		<div class="select is-fullwidth">
					  <select name="jeniskelamin">
					    <option value="laki-laki" <?php if($pasien['jeniskelamin']=="laki-laki") echo 'selected="selected"'; ?> >Laki-laki</option>
					    <option value="perempuan" <?php if($pasien['jeniskelamin']=="perempuan") echo 'selected="selected"'; ?> >Perempuan</option>
					    <option value="lain-lain" <?php if($pasien['jeniskelamin']=="lain-lain") echo 'selected="selected"'; ?> >Lain-lain</option>
					  </select>
					</div>
  	      	  	</div>
  	      	  	<div class="field">
		      	  	<label class="label">Contact</label>
		      		<input name="contact" class="input" type="number" placeholder="628xxxxx" value="<?php echo $pasien['contact']; ?>" />
  	      	  	</div>
  	      	  	<div class="control">
				  <input type="submit" class="button is-link" value="Ubah Data" />
				  <a href="read.php" class="button">Kembali ke data pasien</a>
				</div>
	      	  </form>
		    </div>
  	  	</section>
	</body>
</html>