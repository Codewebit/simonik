    <?php
    //koneksi ke database
    include"config/dbconfig.php";
    //akhir koneksi
     
    #ambil data di tabel dan masukkan ke array
    $result = $konek->query("SELECT id_pegawai, nopeg, nama_pegawai, tempat_lahir FROM pegawai");
    $data = array();
    while($row = $result->fetch(PDO::FETCH_ASSOC)){
    	array_push($data, $row);
    }
     
    #setting judul laporan dan header tabel
    $judul = "LAPORAN DATA PEGAWAI";
    $header = array(
    		array("label"=>"ID", "length"=>30, "align"=>"L"),
    		array("label"=>"NOPEG", "length"=>50, "align"=>"L"),
    		array("label"=>"NAMA PEGAWAI", "length"=>80, "align"=>"L"),
    		array("label"=>"TEMPAT LAHIR", "length"=>30, "align"=>"L")
    	);
     
    #sertakan library FPDF dan bentuk objek
    require_once ("fpdf181/fpdf.php");
    $pdf = new FPDF();
    $pdf->AddPage();
     
    #tampilkan judul laporan
    $pdf->SetFont('Arial','B','16');
    $pdf->Cell(0,20, $judul, '0', 1, 'C');
     
    #buat header tabel
    $pdf->SetFont('Arial','','10');
    $pdf->SetFillColor(255,0,0);
    $pdf->SetTextColor(255);
    $pdf->SetDrawColor(128,0,0);
    foreach ($header as $kolom) {
    	$pdf->Cell($kolom['length'], 5, $kolom['label'], 1, '0', $kolom['align'], true);
    }
    $pdf->Ln();
     
    #tampilkan data tabelnya
    $pdf->SetFillColor(224,235,255);
    $pdf->SetTextColor(0);
    $pdf->SetFont('');
    $fill=false;
    foreach ($data as $baris) {
    	$i = 0;
    	foreach ($baris as $cell) {
    		$pdf->Cell($header[$i]['length'], 5, $cell, 1, '0', $kolom['align'], $fill);
    		$i++;
    	}
    	$fill = !$fill;
    	$pdf->Ln();
    }
     
    #output file PDF
    $pdf->Output();
    ?>

