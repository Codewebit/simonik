<?php include "header.php" ;?>
<?php include "navbar.php" ;?>
	<h2>INFORMASI SEPUTAR NF</h2><hr>
	<a href="add_pegawai.php" ><i class="uk-icon-plus-circle uk-icon-medium"></i> ENTRI</a><br><br>
	<table id="dataTables" width="100%" class="uk-table uk-table-hover uk-table-striped uk-overflow-container" cellspacing="0">
        <thead>
            <tr>
                <th colspan="2">AKSI</th>
                <th>NO.</th>
                <th>JUDUL</th>
                <th>INFO</th>
            </tr>
        </thead>
		
		<tbody>
			<?php
			//panggil file koneksi database
			include"config/dbconfig.php";
			try {
			$no = 1;
			//jalankan query
			$result = $konek->query("SELECT * FROM info");
			//menampilkan data
			while($row = $result->fetch(PDO::FETCH_ASSOC)){
				?>
				<tr>
				<td>
						<a href="edit_pegawai.php?edit=<?php echo $row['id_info']?>"><i class="uk-icon-pencil-square-o uk-icon-medium"></i></a></td>
						<td>
						<a href="delete.php?del=<?php echo $row['id_info']?>"><i class="uk-icon-trash-o uk-icon-medium"></i></a>
    				</td>
					<td><?php echo $no ;?></td>
					<td><?php echo $row['info_judul'];?></td>
					<td><?php echo $row['info_isi'];?></td>

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

