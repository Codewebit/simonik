<?php
//crud, upload 
error_reporting( ~E_NOTICE );
require_once 'header.php';
require_once 'navbar.php';
require_once 'config/dbconfig.php';

if (isset($_POST['btnsimpan'])) 
{
	try {
		//deskripsi inputan form
		$v_pgw_nama   = $_POST['pgw_nama'];
		$v_pgw_tgllhr = $_POST['pgw_tgllhr'];
		//$v_pgw_tgllhr = $_POST['pgw_tgllhr'];
		
		//deskripsi inputan gambar
		$imgFile = $_FILES['pgw_foto']['name'];
		$tmp_dir = $_FILES['pgw_foto']['tmp_name'];
		$imgSize = $_FILES['pgw_foto']['size'];

		//validasi
		if (empty($v_pgw_nama)) 
		{
			$errMSG = "Mohon isi nama pegawai.";
		}elseif (empty($v_pgw_tgllhr)) 
		{
			$errMSG = "Mohon isi tanggal lahir.";
		}else{
			$upload_dir = 'pgw_foto/'; //direktori upload foto
			$imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION)); //dapatkan exktensi gambar
			//format upload
			$valid_extensions = array('jpeg','jpg','png','gif'); //jenis format gambar
			//rename upload gambar
			$userepic = rand(1000, 1000000).".".$imgExt;
			//allow valid format gambar
			if (in_array($imgExt, $valid_extensions)) 
			{
				//cek ukuran gambar '5MB'
				if ($imgSize < 5000000) 
				{
					move_uploaded_file($tmp_dir, $upload_dir.$userepic);
				}else{
					$errMSG = "maaf.. file foto kamu terlalu besar.. sistem menolak hal ini!!";
				}
			}
			// jika tidak ada kesalahan lanjutkan
			if (!isset($errMSG)) 
			{
				$stmt = $konek->prepare('INSERT INTO pegawai(nama_pegawai, tanggal_lahir) VALUES(:unama, :utgllhr)');
				$stmt=bindParam(':unama',$v_pgw_nama);
				$stmt=bindParam(':utgllhr',$v_pgw_tgllhr);
				//$stmt=bindParam(':utgllhr',$v_pgw_tgllhr);

				if ($stmt->execute()) 
				{
					$pesanBerhasil = "record pegawai baru telah ditambahkan...";
					header("refresh:5;master_pegawai.php"); //alihkan halaman dalam 5 detik
				}else{
					$errMSG = "ada kesalahan ketika memasukan data!!";
				}
			}	
		}
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}
?>

<h2>ENTRI PEGAWAI</h2><hr>
<form class="uk-form uk-form-horizontal" method="post" enctype="multipart/form-data">
<div class="uk-form-row">
	<div class="uk-form-icon">
		<label class="uk-form-label">NAMA PEGAWAI :</label>
		<i class="uk-icon-user"></i>
		<input type="text" placeholder="NAMA LENGKAP..." class="uk-form-width-medium" name="pgw_nama" value="<?php echo $nama_pegawai; ?>"></input>
	</div>
</div>
<div class="uk-form-row">
	<div class="uk-form-icon">
		<label class="uk-form-label" for="">TANGGAL LAHIR :</label>
		<i class="uk-icon-calendar"></i>
		<input type="text" data-uk-datepicker="{format:'DD.MM.YYYY'}" placeholder="SESUAI DENGAN KTP..." class="uk-form-width-medium" name="pgw_tgllhr"></input>
	</div>
</div>
<div class="uk-form-row">
	<label class="uk-form-label" for="">JENIS KELAMIN :</label>
	<select class="uk-form-width-medium" name="pgw_jnskel">
		<option>-Pilih-</option>
		<option>Laki-Laki</option>
		<option>Perempuan</option>
	</select>
</div>
<div class="uk-form-row">
	<label class="uk-form-label" for="">PENDIDIKAN :</label>
	<select class="uk-form-width-medium" name="pgw_pendidik">
		<option>-Pilih-</option>
		<option>Magister</option>
		<option>Sarjana</option>
	</select>
</div>
<div class="uk-form-row">
	<label class="uk-form-label" for="">ALAMAT LENGKAP :</label>
	<textarea class="uk-form-width-large" placeholder="ALAMAT SESUAI DENGAN SEKARANG..." name="pgw_alamat"></textarea>
</div>
<div class="uk-form-row">
	<div class="uk-form-icon">
		<label class="uk-form-label">KATA SANDI :</label>
		<i class="uk-icon-keyboard-o"></i>
		<input type="password" placeholder="ISIKAN DENGAN KARAKTER ANGKA DAN HURUF.." class="uk-form-width-large" name="pgw_sansi1"></input>
	</div>
</div>
<div class="uk-form-row">
	<div class="uk-form-icon">
		<label class="uk-form-label">KETIK ULANG KATA SANDI :</label>
		<i class="uk-icon-keyboard-o"></i>
		<input type="password" placeholder="SAMAKAN DENGAN YANG PERTAMA..." class="uk-form-width-large" name="pgw_sandi2"></input>
	</div>
</div>
<div class="uk-form-row">
	<div class="uk-form-icon">
		<label class="uk-form-label">FOTO PEGAWAI :</label>
		<i class="uk-icon-image"></i>
		<input type="file" class="uk-form-width-large" name="pgw_foto"></input>
	</div>
</div>
	<hr>
	<button name="btnsimpan" class="uk-button uk-button-danger" type="submit"><i class="uk-icon-save"></i> SIMPAN</button>
	<a href="master_pegawai.php" class="uk-button" type="button"><i class="uk-icon-refresh"></i> BATALKAN</a>
</form>
<?php include"footer.php";?>