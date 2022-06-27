<?php  include "../koneksi.php";
$update_id = $_GET['print_id'];
$query    = "SELECT * FROM form_desa WHERE id_desa='$update_id'";
$result   = $conn->query($query);

            while($r=mysqli_fetch_array($result))
            {
                $id_desa = $r['0'];
                $desa = $r['1'];
                $desa1 = strtoupper($desa);
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
                if($pendopo =="0"){
                  $pendopo="TIDAK ADA";
                }
                else if ($pendopo=="1") {
                  $pendopo="ADA "." "." "." KAPASITAS ".$kapasitas_pendopo;
                };
                $homestay = $r['22'];
                $kapasitas_homestay = $r['23'];
                if($homestay =="0"){
                  $homestay="TIDAK ADA";
                }
                else if ($homestay=="1") {
                  $homestay="ADA "." "." "." KAPASITAS ".$kapasitas_homestay;
                };
            }

require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
 $dompdf = new Dompdf();
 $nomer=1;

    $html='<html>
    <head>
    <style>
      table, td, th {
      border: 2px solid black;
      }

      table {
      border-collapse: collapse;
      }
      th, td {
        text-align: center;
        padding-top: 2px;
        padding-right: 2px;
        padding-bottom: 2px;
        padding-left: 2px;
      }
      tr:nth-child(1) {
        background-color: #ffd966;
      }
      tr:nth-child(2),tr:nth-child(9),tr:nth-child(14),tr:nth-child(19),tr:nth-child(25) {
        background-color: #ffe699;
      }
    </style><center>
    <table border="1" >
      <tr>
        <th colspan="4">DATA DESA WISATA DI JAWA TENGAH</th>
      </tr>
      <tr>
        <td colspan="4" style="height:30px" >DESA '.$desa1.'</td>
      </tr>
      <tr>
        <td style="width:10px" >' .$nomer++. '</td>
        <td style="width:150px" >DESA</td>
        <td style="width:10px" > : </td>
        <td>' .$desa. '</td>
      </tr>
      <tr>
        <td style="width:10px" >' .$nomer++. '</td>
        <td style="width:150px" >KELURAHAN</td>
        <td style="width:10px" > : </td>
        <td>' .$kelurahan. '</td>
      </tr>
      <tr>
        <td style="width:10px" >' .$nomer++. '</td>
        <td style="width:150px" >KECAMATAN</td>
        <td style="width:10px" > : </td>
        <td>' .$kecamatan. '</td>
      </tr>
      <tr>
        <td style="width:10px" >' .$nomer++. '</td>
        <td style="width:150px" >KABUPATEN</td>
        <td style="width:10px" > : </td>
        <td>' .$desa. '</td>
      </tr>
      <tr>
        <td style="width:10px" >' .$nomer++. '</td>
        <td style="width:150px" >ALAMAT</td>
        <td style="width:10px" > : </td>
        <td>' .$jalan. '</td>
      </tr>
      <tr>
        <td style="width:10px" >' .$nomer++. '</td>
        <td style="width:150px" >NAMA DESA WISATA</td>
        <td style="width:10px" > : </td>
        <td>' .$nama_desa_wisata. '</td>
      </tr>
      <tr>
        <td colspan="4">DATA PENGELOLA DESA WISATA</td>
      </tr>
      <tr>
        <td style="width:10px" >' .$nomer++. '</td>
        <td style="width:150px" >NAMA KADES</td>
        <td style="width:10px" > : </td>
        <td>' .$nama_kades. '</td>
      </tr>
      <tr>
        <td style="width:10px" >' .$nomer++. '</td>
        <td style="width:150px" >NO TLPN KADES</td>
        <td style="width:10px" > : </td>
        <td>' .$jalan. '</td>
      </tr>
      <tr>
        <td style="width:10px" >' .$nomer++. '</td>
        <td style="width:150px" >NAMA PENGELOLA</td>
        <td style="width:10px" > : </td>
        <td>' .$nama_pengelola. '</td>
      </tr>
      <tr>
        <td style="width:10px" >' .$nomer++. '</td>
        <td style="width:150px" >NO TLPN PENGELOLA</td>
        <td style="width:10px" > : </td>
        <td>' .$no_pengelola. '</td>
      </tr>
      <tr>
        <td colspan="4">BASIS DESA WISATA</td>
      </tr>
      <tr>
        <td style="width:10px" >' .$nomer++. '</td>
        <td style="width:150px" >BASIS DESA WISATA (ALAM, BUATAN, BUDAYA. EKONOMI KREATIF)</td>
        <td style="width:10px" > : </td>
        <td>' .$basis_dtw. '</td>
      </tr>
      <tr>
        <td style="width:10px" >' .$nomer++. '</td>
        <td style="width:150px" >DAYA TARIK WISATA DI DESA</td>
        <td style="width:10px" > : </td>
        <td>' .$daya_tarik. '</td>
      </tr>
      <tr>
        <td style="width:10px" >' .$nomer++. '</td>
        <td style="width:150px" >DESKRIPSI DESA WISATA</td>
        <td style="width:10px" > : </td>
        <td>' .$deskripsi. '</td>
      </tr>
      <tr>
        <td style="width:10px" >' .$nomer++. '</td>
        <td style="width:150px" >KRITERIA (MAJU/BERKEMBANG/RINTISAN)</td>
        <td style="width:10px" > : </td>
        <td>' .$kriteria. '</td>
      </tr>
      <tr>
        <td colspan="4">SURAT KETERANGAN</td>
      </tr>
      <tr>
        <td style="width:10px" >' .$nomer++. '</td>
        <td style="width:150px" >SK POKDARWIS (NAMA POKDARWIS, NOMER, TANGGAL)</td>
        <td style="width:10px" > : </td>
        <td>' .$sk_pokdarwis. '</td>
      </tr>
      <tr>
        <td style="width:10px" >' .$nomer++. '</td>
        <td style="width:150px" >SK BUMDES (NAMA BUMDES, NOMER ,TANGGAL)</td>
        <td style="width:10px" > : </td>
        <td>' .$sk_bumdes. '</td>
      </tr>
      <tr>
        <td style="width:10px" >' .$nomer++. '</td>
        <td style="width:150px" >SK PENGELOLA</td>
        <td style="width:10px" > : </td>
        <td>' .$sk_pengelola. '</td>
      </tr>
      <tr>
        <td style="width:10px" >' .$nomer++. '</td>
        <td style="width:150px" >SK KRITERIA DARI DINAS (NOMER DAN TANGGAL)</td>
        <td style="width:10px" > : </td>
        <td>' .$sk_dinas. '</td>
      </tr>
      <tr>
        <td style="width:10px" >' .$nomer++. '</td>
        <td>SK PENETAPAN DARI BUPATI (NOMER DAN TANGGAL)</td>
        <td style="width:10px" > : </td>
        <td>' .$sk_bupati. '</td>
      </tr>
      <tr>
        <td colspan="4">FASILITAS PARIWISATA</td>
      </tr>
      <tr>
        <td style="width:10px" >' .$nomer++. '</td>
        <td style="width:150px" >PENDOPO/ RUANG MICE</td>
        <td style="width:10px" > : </td>
        <td>' .$pendopo. '</td>
      </tr>
      <tr>
        <td style="width:10px" >' .$nomer++. '</td>
        <td style="width:150px" >HOME STAY</td>
        <td style="width:10px" > : </td>
        <td>' .$homestay. '</td>
      </tr>
      
      
      </tr>

</table></center></html>';



 $dompdf->loadHtml($html);
 $dompdf->setPaper('A4','portrait');
 $dompdf->render();
 $dompdf->stream($desa1.".pdf");
?>
