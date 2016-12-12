<?php include"header.php";
	  include "navbar.php";
			//panggil file koneksi database
			include"config/dbconfig.php";
			try {
				if (isset($_GET['edit_id'])) 
				{
					$id=$_GET['edit_id'];
					//JALANKAN QUERY DISINI
					//jalankan query
					$stmt = $konek->prepare('SELECT nama_pegawai, tanggal_lahir, jenis_kelamin FROM pegawai 
						WHERE id =:uid');
					$stmt->execute(array(':uid'=>$id));
					$row=$stmt->fetch(PDO::FETCH_ASSOC);
					extract($row);

				?>
			
<h2>DATA DETAIL PEGAWAI</h2><hr>
<form class="uk-form uk-form-horizontal">
<div class="uk-form-row">
		<label class="uk-form-label">NAMA PEGAWAI :</label>
		<?php echo $row['nama_pegawai'];?>
</div>
<div class="uk-form-row">
		<label class="uk-form-label" for="">TANGGAL LAHIR :</label>
		<?php echo $row['tanggal_lahir'];?>
</div>
<div class="uk-form-row">
	<label class="uk-form-label" for="">JENIS KELAMIN :</label>
	<?php echo $row['jenis_kelamin'];?>
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
	<a href="master_pegawai.php" class="uk-button uk-button-primary" type="button"><i class="uk-icon-refresh"></i> KEMBALI</a>
	<a href="" class="uk-button uk-button-danger" type="button"><i class="uk-icon-edit"></i> EDIT</a>
</form>
<?php
}
			} catch (PDOException $e) {
				$e->getMessage();
			}

?>
<?php include"footer.php";?>