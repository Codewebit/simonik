    <?php
    require_once "Excel.class.php";
     
    #koneksi ke mysql
    include"config/dbconfig.php";
    #akhir koneksi
     
    #ambil data
    $result = $konek->query("SELECT id_pegawai, nopeg, nama_pegawai FROM pegawai");
    $arrmhs = array();
    while($row = $result->fetch(PDO::FETCH_ASSOC)){
    	array_push($arrmhs, $row);
    }
    #akhir data
     
    $excel = new Excel();
    #Send Header
    $excel->setHeader('Data_Pegawai_TimurPutra.xls');
    $excel->BOF();
     
    #header tabel
    $excel->writeLabel(0, 0, "ID");
    $excel->writeLabel(0, 1, "NOPEG");
    $excel->writeLabel(0, 2, "NAMA_PEGAWAI");
     
    #isi data
    $i = 1;
    foreach ($arrmhs as $baris) {
    	$j = 0;
    	foreach ($baris as $value) {
    		$excel->writeLabel($i, $j, $value);
    		$j++;
    	}
    	$i++;
    }
     
    $excel->EOF();
     
    exit();
    ?>

