<?php  include "layout/head.php"; ?>
<?php include "layout/nav.php"; ?>
<?php include "layout/header.php"; ?>
<?php include "../koneksi.php";
$id_surat = $_GET['id_surat'];
$id_buka = $_GET['id_buka'];
if ($id_buka=="0") {
    $query    = "SELECT * FROM surat_masuk WHERE id_surat_masuk='$id_surat'";
    $result=$conn->query($query);
    while($r=mysqli_fetch_array($result))
                {
                  $id_surat_masuk = $r['0'];
                  $id_jenis = $r['1'];
                  $pengirim = $r['2'];
                  $alamat_pengirim = $r['3'];
                  $nomor_surat = $r['4'];
                  $perihal = $r['5'];
                  $deskripsi = $r['6'];
                  $tanggal_surat = $r['7'];
                  $nama_file = $r['8'];
                  $tanggal_entri = $r['9'];
                  $id_user2 = $r['10'];
                }
    $query2 = "SELECT jenis FROM jenis WHERE id_jenis='$id_jenis'";
    $result2=$conn->query($query2);
    while($l=mysqli_fetch_array($result2))
                {
                  $jenis = $l['0'];
                }
}
else{
    $query    = "SELECT * FROM surat_keluar WHERE id_surat_keluar='$id_surat'";
    $result=$conn->query($query);
    while($r=mysqli_fetch_array($result))
    {
      $id_surat_keluar = $r['0'];
      $id_jenis = $r['1'];
      $pengirim = $r['2'];
      $tujuan = $r['3'];
      $tanggal_surat = $r['4'];
      $perihal = $r['5'];
      $deskripsi = $r['6'];
      $nama_file = $r['7'];
      $tanggal_entri = $r['8'];
      $staff = $r['9'];
      $laporan = $r['10'];
    }
    $query2 = "SELECT jenis FROM jenis WHERE id_jenis='$id_jenis'";
    $result2=$conn->query($query2);
    while($l=mysqli_fetch_array($result2))
                {
                  $jenis = $l['0'];
                }
}

?>

 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Surat <?php echo $id_surat ?></h3>
              </div>
            </div>

            <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><a href="new_disposisi.php"><i class="fa fa-plus"></i> TAMBAHKAN DISPOSISI </a></h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                        <?php if($id_buka=="0"){ echo"
                          <th>ID SURAT MASUK</th>
                          <th>PENGIRIM</th>
                          <th>ALAMAT PENGIRIM</th>
                          <th>NOMOR SURAT</th>
                          <th>PERIHAL</th>
                          <th>TANGGAL SURAT</th>
                          <th>NAMA FILE</th>
                          <th>TANGGAL ENTRI</th>
                          <th>JENIS</th>
                          <th>DESKRIPSI</th>
                          <th>ID USER</th>
                          ";
                        }   
                        else{
                            echo "
                          <th>ID SURAT KELUAR</th>
                          <th>PENGIRIM</th>
                          <th>TUJUAN</th>
                          <th>TANGGAL SURAT</th>
                          <th>PERIHAL</th>
                          <th>NAMA FILE</th>
                          <th>TANGGAL ENTRI</th>
                          <th>ACTION</th>
                          <th>JENIS</th>
                          <th>STAFF</th>
                          <th>LAPORAN</th>
                          <th>DESKRIPSI</th>
                            ";
                        }
                        ?>

                        </tr>
                      </thead>


                      <tbody>
            <?php $i=0;?>
            <?php if($id_buka=="0"){ echo"
                        <tr>
                        <td>$id_surat_masuk</td>
                        <td>$pengirim</td>
                        <td>$alamat_pengirim</td>
                        <td>$nomor_surat</td>
                        <td>$perihal</td>
                        <td>$tanggal_surat</td>
                        <td>$nama_file</td>
                        <td>$tanggal_entri</td>
                        <td>$jenis</td>
                        <td>$deskripsi</td>
                        <td>$id_user2</td></tr>";
                    }   
                    else{ echo"
                        <tr>
                        <td>$id_surat_keluar</td>
                        <td>$pengirim</td>
                        <td>$tujuan</td>
                        <td>$tanggal_surat</td>
                        <td>$perihal</td>
                        <td>$nama_file<a> </td>
                        <td>$tanggal_entri</td>
                        <td>$id_jenis</td>
                        <td>$staff</td>
                        <td>$laporan</td>
                        <td>$deskripsi</td>
                      </tr>";
                    }
                    ?>
            <?php $i++;  ?>

                      </tbody>
                    </table>
                    <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="../<?php 
                    if($id_buka=="0"){
                        echo "file/$nama_file";
                    }
                    else{
                        echo "file_keluar/$nama_file";
                    }
                    ?>">
                    </iframe>
                    </div>
                  </div>
                </div>
              </div> 
      </div>
    </div>
    </div>

<?php include "layout/footer.php"; ?>
