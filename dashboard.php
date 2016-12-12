<?php 
include "header.php" ; 
include "navbar.php" ;
include "config/dbconfig.php";
$result = $konek->query("SELECT * FROM info ORDER BY info_judul ASC");

?>	
	<h3>Selamat Datang [ <?php echo $_SESSION['nama_pegawai']?> ]</h3>
	Level Anda : <strong><?php echo $_SESSION['level'];?></strong>
	<hr>
		<div class="content">
	<?php
	while ($row = $result->fetch(PDO::FETCH_ASSOC)) 
		{ ?>
		<h3><a href=""><?php echo $row["info_judul"]; ?></h3></a><!--buat accordion-->
		<div><?php echo $row["info_isi"];?></div>
	<?php
	}
	?>
	</div>
<?php include "footer.php";?>

<script type="text/javascript">
	$(document).ready(function(){
		$('.content').accordion({
			collapsible : true
		});
	});
</script>