<?php
	require "koneksi.php";
?>
<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Add Pasien</title>
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.css">
	</head>
	<body>
		<section class="section">
		    <div class="container">
		      <h1 class="title has-text-centered">
		        Add Data Pasien
		      </h1>
  	      	  <form method="POST" action="proses_create.php">
  	      	  	<div class="field">
		      	  	<label class="label">Nama Lengkap</label>
		      		<input name="namalengkap" class="input" type="text" placeholder="Isi nama lengkap pasien" required />
  	      	  	</div>
  	      	  	<div class="field">
		      	  	<label class="label">Alamat</label>
		      		<textarea name="alamat" class="textarea" placeholder="Isi alamat pasien" rows="3"></textarea>
  	      	  	</div>
  	      	  	<div class="field">
		      	  	<label class="label">Umur</label>
		      		<input name="umur" class="input" type="number" placeholder="Isi Usia Pasien" min="0" max="200" />
  	      	  	</div>
  	      	  	<div class="field">
		      	  	<label class="label">Pekerjaan</label>
		      		<input name="pekerjaan" class="input" type="text" placeholder="Isi pekerjaan pasien" />
  	      	  	</div>
  	      	  	<div class="field">
		      	  	<label class="label">Jenis Kelamin</label>
		      		<div class="select is-fullwidth">
					  <select name="jeniskelamin">
					    <option value="laki-laki">Laki-laki</option>
					    <option value="perempuan">Perempuan</option>
					    <option value="lain-lain">Lain-lain</option>
					  </select>
					</div>
  	      	  	</div>
  	      	  	<div class="field">
		      	  	<label class="label">Contact</label>
		      		<input name="contact" class="input" type="number" placeholder="628xxxxx" />
  	      	  	</div>
  	      	  	<div class="control">
				  <input type="submit" class="button is-link" value="Simpan Data" />
				  <a href="read.php" class="button">Kembali ke data pasien</a>
				</div>
	      	  </form>
		    </div>
  	  	</section>
	</body>
</html>