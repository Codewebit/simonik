<?php include "header.php" ;?>
<?php include "navbar.php" ;?>
	<h2>HISTORY KONSULTASI PENGAJAR</h2><hr>
	<a href="add_pegawai.php" ><i class="uk-icon-plus-circle uk-icon-medium"></i> ENTRI</a>
	<a href="print_excel.php" ><i class="uk-icon-file-excel-o uk-icon-medium"></i> EXCEL</a>
	<a href="print_pdf.php" ><i class="uk-icon-file-pdf-o uk-icon-medium"></i> PDF</a><br><br>
	<div class='uk-alert uk-alert-success'>
                    <a href='' class='uk-alert-close uk-close'></a>
                    <p><strong>INGAT :</strong> INPUT DATA KONSULTASI HARUS SETIAP HARI...!!</p>
                </div>
	<table id="dataTables" width="100%" class="uk-table uk-table-hover uk-table-striped uk-overflow-container" cellspacing="0">
        <thead>
            <tr>
                <th>NO.</th>
                <th>NOPEG</th>
                <th>NAMA PEGAWAI</th>
                <th>TEMPAT LAHIR</th>
                <th>TANGGAL LAHIR</th>
                <th>JENIS KELAMIN</th>
                <th>JABATAN</th>
                <th>AKSI</th>
            </tr>
        </thead>
		<tbody>
			<?php
			//panggil file koneksi database
			include"config/dbconfig.php";
			try {
			$no = 1;
			//jalankan query
			$result = $konek->query("SELECT pegawai.nopeg, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, jabatan.nama_jabatan 
				FROM jabatan 
				INNER JOIN pegawai ON jabatan.id_jabatan=pegawai.id_jabatan 
				ORDER BY pegawai.nama_pegawai ASC ");
			//menampilkan data
			while($row = $result->fetch(PDO::FETCH_ASSOC)){
				?>
				<tr>
					<td><?php echo $no ;?></td>
					<td><?php echo $row['nopeg'];?></td>
					<td><?php echo $row['nama_pegawai'];?></td>
					<td><?php echo $row['tempat_lahir'];?></td>
					<td><?php echo $row['tanggal_lahir'];?></td>
					<td><?php echo $row['jenis_kelamin'];?></td>
					<td><?php echo $row['nama_jabatan'];?></td>
					<td>
						<a  href="detail_pegawai.php?detail_id=<?php echo $row['id']?>"><i class="uk-icon-list uk-icon-small"></i></a>
						<a href="edit_pegawai.php?edit_id=<?php echo $row['id'];?>"><i class="uk-icon-pencil-square-o uk-icon-small"></i></a>
						<a href="?delete_id=<?php echo $row['id'];?>" title="klik untuk menghapus" onclick="return confirm('Kamu Yakin?')"><i class="uk-icon-trash-o uk-icon-small"></i></a>
    				</td>Z

				</tr>
			<?php
				$no++;
			}
			} catch (PDOException $e) {
				$e->getMessage();
			}
			?>
		</tbody>
	</table>
 </div>
<?php include "footer.php";?>

