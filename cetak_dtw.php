<?php
include "../koneksi.php";
date_default_timezone_set('Asia/Jakarta');
$date=date("Y-m-d");
$fileName="DATA_DTW-".$date.".xlsx";

      //memanggil library
      require 'vendor/autoload.php';
      use PhpOffice\PhpSpreadsheet\Spreadsheet;
      use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

      //menuliskan nama kolom pada excel
      $spreadsheet = new Spreadsheet();
      $sheet = $spreadsheet->getActiveSheet();
      $sheet->setCellValue('A1', 'No');
      $sheet->setCellValue('B1', 'Kabupaten');
      $sheet->setCellValue('C1', 'Nama DTW');
      $sheet->setCellValue('D1', 'Desa/Kelurahan');
      $sheet->setCellValue('E1', 'Kecamatan');
      $sheet->setCellValue('F1', 'Alamat');
      $sheet->setCellValue('G1', 'Kategori');
      $sheet->setCellValue('H1', 'Keterangan');
      $sheet->setCellValue('I1', 'Deskripsi');
      $sheet->setCellValue('J1', 'Fasilitas');
      $sheet->setCellValue('K1', 'Kondisi');
      $sheet->setCellValue('L1', 'Aksesibilitas');
      $sheet->setCellValue('M1', 'Alamat Media Sosial');
      $sheet->setCellValue('N1', 'Contact Person');

      $i=2;
      $no=1;
      $query    = "SELECT * FROM form_dtw";
      $result   = $conn->query($query);
      while($r=mysqli_fetch_array($result))
      {
        $kabupaten = $r['1'];
        $nama_dtw = $r['2'];
        $desa = $r['3'];
        $kecamatan = $r['4'];
        $alamat = $r['5'];
        $alam = $r['6'];
        $keterangan = $r['7'];
        $deskripsi = $r['8'];
        $toilet = $r['9'];
        $mushola = $r['10'];
        $aksesibilitas = $r['11'];
        $medsos = $r['12'];
        $cp = $r['13'];

      $sheet->setCellValue('A'.$i, $no);
      $sheet->setCellValue('B'.$i, $kabupaten);
      $sheet->setCellValue('C'.$i, $nama_dtw);
      $sheet->setCellValue('D'.$i, $desa);
      $sheet->setCellValue('E'.$i, $kecamatan);
      $sheet->setCellValue('F'.$i, $alamat);
      $sheet->setCellValue('G'.$i, $alam);
      $sheet->setCellValue('H'.$i, $keterangan);
      $sheet->setCellValue('I'.$i, $deskripsi);
      $sheet->setCellValue('J'.$i, $toilet);
      $sheet->setCellValue('K'.$i, $mushola);
      $sheet->setCellValue('L'.$i, $aksesibilitas);
      $sheet->setCellValue('M'.$i, $medsos);
      $sheet->setCellValue('N'.$i, $cp);
      
      $i++; $no++;}
      //style
      $styleArray = [
      			'borders' => [
      				'allBorders' => [
      					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
      				],
      			],
      		];
      $i = $i - 1;
      $sheet->getStyle('A1:M'.$i)->applyFromArray($styleArray);

      //memunculkan file excel
      $writer = new Xlsx($spreadsheet);
      header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
      header('Content-Disposition: attachment; filename="'. urlencode($fileName).'"');
      $writer->save('php://output');

      
      header("location:table_masuk.php");
 ?>
