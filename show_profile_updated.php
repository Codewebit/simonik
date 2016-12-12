<?php include"header.php";?>
<?php include "navbar.php" ;?>

<h2>PROFIL ANDA SEKARANG</h2><hr>
<form class="uk-form uk-form-horizontal">
<div class="uk-form-row">
	<div class="uk-form-icon">
		<label class="uk-form-label">NAMA PEGAWAI :</label>
		<i class="uk-icon-user"></i>
		<input type="text" placeholder="NAMA LENGKAP..." class="uk-form-width-medium"></input>
	</div>
</div>
<div class="uk-form-row">
	<div class="uk-form-icon">
		<label class="uk-form-label" for="">TANGGAL LAHIR :</label>
		<i class="uk-icon-calendar"></i>
		<input type="text" data-uk-datepicker="{format:'DD.MM.YYYY'}" placeholder="SESUAI DENGAN KTP..." class="uk-form-width-medium"></input>
	</div>
</div>
<div class="uk-form-row">
	<label class="uk-form-label" for="">JENIS KELAMIN :</label>
	<select class="uk-form-width-medium">
		<option>-Pilih-</option>
		<option>Laki-Laki</option>
		<option>Perempuan</option>
	</select>
</div>
<div class="uk-form-row">
	<label class="uk-form-label" for="">PENDIDIKAN :</label>
	<select class="uk-form-width-medium">
		<option>-Pilih-</option>
		<option>Magister</option>
		<option>Sarjana</option>
	</select>
</div>
<div class="uk-form-row">
	<label class="uk-form-label" for="">ALAMAT LENGKAP :</label>
	<textarea class="uk-form-width-large" placeholder="ALAMAT SESUAI DENGAN SEKARANG..."></textarea>
</div>
<div class="uk-form-row">
	<div class="uk-form-icon">
		<label class="uk-form-label">KATA SANDI :</label>
		<i class="uk-icon-keyboard-o"></i>
		<input type="password" placeholder="ISIKAN DENGAN KARAKTER ANGKA DAN HURUF.." class="uk-form-width-large"></input>
	</div>
</div>
<div class="uk-form-row">
	<div class="uk-form-icon">
		<label class="uk-form-label">KETIK ULANG KATA SANDI :</label>
		<i class="uk-icon-keyboard-o"></i>
		<input type="password" placeholder="SAMAKAN DENGAN YANG PERTAMA..." class="uk-form-width-large"></input>
	</div>
</div>
<div class="uk-form-row">
	<div class="uk-form-icon">
		<label class="uk-form-label">FOTO PEGAWAI :</label>
		<i class="uk-icon-image"></i>
		<input type="file" class="uk-form-width-large"></input>
	</div>
</div>
	<hr>
	<button class="uk-button uk-button-primary" type="button"><i class="uk-icon-check-circle"></i> UPDATE</button>
</form>
<?php include"footer.php";?>