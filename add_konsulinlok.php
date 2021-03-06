<?php 
include "header.php";
include "navbar.php";

if (isset($_POST['btnsimpan'])) 
{
	try {
		echo "
		<div class='uk-alert uk-alert-success'>
                    <a href='' class='uk-alert-close uk-close'></a>
                    <p>KONSULTASI TELAH DISIMPAN!!</p>
                </div>";
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}
;?>

<h2>ENTRI KONSULTASI</h2><hr>
<form class="uk-form uk-form-horizontal" method="POST" action="">
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
	<button name="btnsimpan" class="uk-button uk-button-success" type="submit"><i class="uk-icon-save"></i> SIMPAN</button>
	<a href="master_pegawai.php" class="uk-button" type="button"><i class="uk-icon-refresh"></i> BATALKAN</a>
</form>
<?php include"footer.php";?>
