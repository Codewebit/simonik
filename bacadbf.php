
    <html>
    <head><title>Demo Baca File DBF</title></head>
    <body>
    <h1>MEMBACA FILE DBF DARI FOXPRO DENGAN PHP</h1>
     
    <table width="100%" border="1">
    <tr>
    	<th>NO</th>
    	<th>NIM</th>
    	<th>NAMA</th>
    	<th>NILAI</th>
    	<th>NO</th>
    	<th>NIM</th>
    	<th>NAMA</th>
    	<th>NILAI</th>
    	<th>NO</th>
    	<th>NIM</th>
    	<th>NAMA</th>
    	<th>NILAI</th>
    	<th>NO</th>
    	<th>NIM</th>
    	<th>NAMA</th>
    	<th>NILAI</th>
    	<th>NO</th>
    	<th>NIM</th>
    	<th>NAMA</th>
    	<th>NILAI</th>
    	
    </tr>
     
    <?php
    /* load the required classes */
    require "phpxbase/Column.class.php";
    require "phpxbase/Record.class.php";
    require "phpxbase/Table.class.php";
     
    /* buat object table dan buka */
    $table = new XBaseTable("mahasiswa.dbf");
    $table->open();
     
    $row = 1;
    while ($record=$table->nextRecord()) {
    	echo "<tr>";
    	echo "<td>".$row++."</td>";
    	foreach ($table->getColumns() as $i=>$c) {
    	    echo "<td>".$record->getString($c)."</td>";
        }
    	echo "</tr>";
    } //end while
     
    $table->close();
     
    ?>
    </table>
    <label>Upload File DBF</label>
    <input type="file" value="Upload File" name="bacadbf"></input>
    </body>
    </html>

