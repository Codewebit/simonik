<?php include"header.php";?>
<?php include "navbar.php" ;?>

<h2>RUBAH KATA SANDI</h2><hr>
<form class="uk-form uk-form-horizontal">
<div class="uk-form-row">
	<div class="uk-form-icon">
		<label class="uk-form-label">NOPEG :</label>
		<i class="uk-icon-key"></i>
		<input type="text" placeholder="NOPEG KAMU..." class="uk-form-width-medium" disabled="" value="615073"></input>
	</div>
</div>
<div class="uk-form-row">
	<div class="uk-form-icon">
		<label class="uk-form-label">KATA SANDI SEKARANG :</label>
		<i class="uk-icon-keyboard-o"></i>
		<input type="password" placeholder="MASUKKAN KATA SANDI LAMA.." class="uk-form-width-large"></input>
	</div>
</div>
<div class="uk-form-row">
	<div class="uk-form-icon">
		<label class="uk-form-label">KATA SANDI BARU :</label>
		<i class="uk-icon-keyboard-o"></i>
		<input type="password" placeholder="ISIKAN DENGAN KARAKTER ANGKA DAN HURUF.." class="uk-form-width-large"></input>
	</div>
</div>
<div class="uk-form-row">
	<div class="uk-form-icon">
		<label class="uk-form-label">ULANGI KATA SANDI BARU :</label>
		<i class="uk-icon-keyboard-o"></i>
		<input type="password" placeholder="SAMAKAN DENGAN YANG BARU..." class="uk-form-width-large"></input>
	</div>
</div>
	<hr>
	<button class="uk-button uk-button-primary" type="button"><i class="uk-icon-check-circle"></i> UPDATE</button>
	<a href="master_pegawai.php" class="uk-button" type="button"><i class="uk-icon-remove"></i> BATALKAN</a>
</form>
<?php include"footer.php";?>