<?php
include "../koneksi.php";
date_default_timezone_set('Asia/Jakarta');
$date=date("Y-m-d");
$fileName="DATA_DESA_WISATA-".$date.".xlsx";

      //memanggil library
      require 'vendor/autoload.php';
      use PhpOffice\PhpSpreadsheet\Spreadsheet;
      use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

      //menuliskan nama kolom pada excel
      $spreadsheet = new Spreadsheet();
      $sheet = $spreadsheet->getActiveSheet();
      $sheet->setCellValue('A1', 'No');
      $sheet->setCellValue('B1', 'Desa');
      $sheet->setCellValue('C1', 'Kelurahan');
      $sheet->setCellValue('D1', 'Kecamatan');
      $sheet->setCellValue('E1', 'Kabupaten');
      $sheet->setCellValue('F1', 'Alamat');
      $sheet->setCellValue('G1', 'Nama Desa Wisata');
      $sheet->setCellValue('H1', 'Nama Kades');
      $sheet->setCellValue('I1', 'No TELP Kades');
      $sheet->setCellValue('J1', 'Nama Pengelola');
      $sheet->setCellValue('K1', 'No TeLP Pengelola');
      $sheet->setCellValue('L1', 'Basis Desa Wisata');
      $sheet->setCellValue('M1', 'Daya Tarik Wisata');
      $sheet->setCellValue('N1', 'Deskripsi');
      $sheet->setCellValue('O1', 'Kriteria');
      $sheet->setCellValue('P1', 'SK POKDARWIS');
      $sheet->setCellValue('Q1', 'SK BUMDES');
      $sheet->setCellValue('R1', 'SK PENGELOLA');
      $sheet->setCellValue('S1', 'SK KRITERIA DARI DINAS');
      $sheet->setCellValue('T1', 'SK PENETAPAN DARI BUPATI');
      $sheet->setCellValue('U1', 'PENDOPO/ RUANG MICE ');
      $sheet->setCellValue('V1', 'Kapasitas PENDOPO/ RUANG MICE');
      $sheet->setCellValue('W1', 'HOME STAY');
      $sheet->setCellValue('X1', 'Kapasitas HOME STAY');

      $i=2;
      $query    = "SELECT * FROM form_desa";
      $result   = $conn->query($query);
      while($r=mysqli_fetch_array($result))
      {
        $id_desa = $r['0'];
        $desa = $r['1'];
        $kelurahan = $r['2'];
        $kecamatan = $r['3'];
        $kabupaten = $r['4'];
        $jalan = $r['5'];
        $nama_desa_wisata = $r['6'];
        $nama_kades = $r['7'];
        $no_kades = $r['8'];
        $nama_pengelola = $r['9'];
        $no_pengelola = $r['10'];
        $basis_dtw = $r['11'];
        $daya_tarik = $r['12'];
        $deskripsi = $r['13'];
        $kriteria = $r['14'];
        $sk_pokdarwis = $r['15'];
        $sk_bumdes = $r['16'];
        $sk_pengelola = $r['17'];
        $sk_dinas = $r['18'];
        $sk_bupati = $r['19'];
        $pendopo = $r['20'];
        $kapasitas_pendopo = $r['21'];
        $homestay = $r['22'];
        $kapasitas_homestay = $r['23'];

      $sheet->setCellValue('A'.$i, $id_desa);
      $sheet->setCellValue('B'.$i, $desa);
      $sheet->setCellValue('C'.$i, $kelurahan);
      $sheet->setCellValue('D'.$i, $kecamatan);
      $sheet->setCellValue('E'.$i, $kabupaten);
      $sheet->setCellValue('F'.$i, $jalan);
      $sheet->setCellValue('G'.$i, $nama_desa_wisata);
      $sheet->setCellValue('H'.$i, $nama_kades);
      $sheet->setCellValue('I'.$i, $no_kades);
      $sheet->setCellValue('J'.$i, $nama_pengelola);
      $sheet->setCellValue('K'.$i, $no_pengelola);
      $sheet->setCellValue('L'.$i, $basis_dtw);
      $sheet->setCellValue('M'.$i, $daya_tarik);
      $sheet->setCellValue('N'.$i, $deskripsi);
      $sheet->setCellValue('O'.$i, $kriteria);
      $sheet->setCellValue('P'.$i, $sk_pokdarwis);
      $sheet->setCellValue('Q'.$i, $sk_bumdes);
      $sheet->setCellValue('R'.$i, $sk_pengelola);
      $sheet->setCellValue('S'.$i, $sk_dinas);
      $sheet->setCellValue('T'.$i, $sk_bupati);
      if($pendopo =="0"){
        $sheet->setCellValue('U'.$i, 'TIDAK ADA');
      }
      else if ($pendopo=="1") {
        $sheet->setCellValue('U'.$i, 'ADA');
      };
       
      if($pendopo =="0"){
        $sheet->setCellValue('V'.$i, '-');
      }
      else if ($pendopo=="1"){
        $sheet->setCellValue('V'.$i, $kapasitas_pendopo);
      };
       
      if($homestay =="0"){
        $sheet->setCellValue('W'.$i, 'TIDAK ADA');
      }
      else if ($homestay=="1"){
        $sheet->setCellValue('W'.$i, 'ADA');
      };
       
      if($homestay =="0"){
        $sheet->setCellValue('X'.$i, '-');
      }
      else if ($homestay=="1"){
        $sheet->setCellValue('X'.$i, $kapasitas_homestay);
      };
      $i++; }
      //style
      $styleArray = [
      			'borders' => [
      				'allBorders' => [
      					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
      				],
      			],
      		];
      $i = $i - 1;
      $sheet->getStyle('A1:X'.$i)->applyFromArray($styleArray);

      //memunculkan file excel
      $writer = new Xlsx($spreadsheet);
      header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
      header('Content-Disposition: attachment; filename="'. urlencode($fileName).'"');
      $writer->save('php://output');

      
      header("location:table_masuk.php");
 ?>
