<?php include "header.php" ;?>
<?php include "navbar.php" ;?>
	<h2>HISTORY URAIAN KERJA</h2><hr>
	<a href="add_pegawai.php" class="uk-button uk-button-primary"><i class="uk-icon-plus-circle"></i> ENTRI</a>
	<a href="print_excel.php" class="uk-button uk-button-success"><i class="uk-icon-file-excel-o"></i> EXCEL</a>
	<a href="print_pdf.php" class="uk-button"><i class="uk-icon-file-pdf-o"></i> PDF</a><br><br>
	<table id="dataTables" width="100%" class="uk-table uk-table-hover uk-table-striped uk-overflow-container" cellspacing="0">
        <thead>
            <tr>
                <th>NO.</th>
                <th>NOPEG</th>
                <th>NAMA PEGAWAI</th>
                <th>TEMPAT LAHIR</th>
                <th>TANGGAL LAHIR</th>
                <th>JENIS KELAMIN</th>
                <th>NO.HP</th>
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
			$result = $konek->query("SELECT * FROM pegawai");
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
					<td><?php echo $row['hp'];?></td>
					<td>
						<a class="uk-button uk-button-primary" href="detail_pegawai.php?detail=<?php echo $row['id']?>"><i class="uk-icon-list"></i></a>
						<a class="uk-button uk-button-success" href="edit_pegawai.php?edit=<?php echo $row['id']?>"><i class="uk-icon-pencil-square-o"></i></a>
						<a class="uk-button uk-button-danger" href="delete.php?del=<?php echo $row['id']?>"><i class="uk-icon-trash-o"></i></a>
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

