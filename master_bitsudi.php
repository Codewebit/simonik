<?php include "header.php" ;?>
<?php include "navbar.php" ;?>
	<h2>DATA BIDANG STUDI</h2><hr>
	<a href="add_pegawai.php" ><i class="uk-icon-plus-circle uk-icon-medium"></i> ENTRI</a>
	<a href="print_excel.php" ><i class="uk-icon-file-excel-o uk-icon-medium"></i> EXCEL</a>
	<a href="print_pdf.php" ><i class="uk-icon-file-pdf-o uk-icon-medium"></i> PDF</a><br><br>
	<table id="dataTables" width="100%" class="uk-table uk-table-hover uk-table-striped uk-overflow-container" cellspacing="0">
        <thead>
            <tr>
                <th>NO.</th>
                <th>NAMA BIDANG STUDI</th>
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
			$result = $konek->query("SELECT * FROM bistudi");
			//menampilkan data
			while($row = $result->fetch(PDO::FETCH_ASSOC)){
				?>
				<tr>
					<td><?php echo $no ;?></td>
					<td><?php echo $row['nama_bistudi'];?></td>
					<td>
						<a  href="detail_pegawai.php?detail_id=<?php echo $row['id']?>"><i class="uk-icon-list uk-icon-small"></i></a>
						<a href="edit_pegawai.php?edit_id=<?php echo $row['id'];?>"><i class="uk-icon-pencil-square-o uk-icon-small"></i></a>
						<a href="?delete_id=<?php echo $row['id'];?>" title="klik untuk menghapus" onclick="return confirm('Kamu Yakin?')"><i class="uk-icon-trash-o uk-icon-small"></i></a>
    				</td>

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

