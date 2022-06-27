<?php  include "layout/head.php"; ?>
<?php include "layout/nav.php"; ?>
<?php include "layout/header.php"; ?>
<?php include "../koneksi.php";
$query = "SELECT * FROM pendapatan ORDER BY tgl DESC";
$result=$conn->query($query);
?>

 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Pendapatan<small> Pendapatan Sari Jaya</small></h3>
              </div>
            </div>

            <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><a href="add_masuk.php"><i class="fa fa-plus"></i> MASUKKAN PENDAPATAN </a></h2>
                    <a href="cetak_desa.php"><span class="fa fa-print pull-right" style="font-size:30px"></span></a>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Tanggal</th>
                          <th>Pendapatan Sopir 1</th>
                          <th>Sopir 1</th>
                          <th>Pendapatan Sopir 2</th>
                          <th>Sopir 2</th>
                          <th>Pendapatan Mobil</th>
                          <th>Nopol Mobil</th>
                          <th>Aksi</th>

                        </tr>
                      </thead>


                      <tbody>
            <?php $i=0;
            while($r=mysqli_fetch_array($result))
            {
              $id_pendapatan = $r['0'];
              $tgl = $r['1'];
              $nominal = $r['2'];
              $nominal2 = $r['3'];
              $nominal3 = $nominal+$nominal2;
              $id_mobil = $r['4'];

              $query2 = "SELECT nopol,id_sopir1,id_sopir2 FROM mobil where id_mobil='$id_mobil'";
              $result2 = $conn->query($query2);
              while($r2=mysqli_fetch_array($result2))
  						{
                $mobil=$r2['0'];
                $id_sopir1=$r2['1'];
                $id_sopir2=$r2['2'];
              }

              $query3 = "SELECT fullname FROM user where ID_USER='$id_sopir1'";
              $result3 = $conn->query($query3);
              while($r3=mysqli_fetch_array($result3))
  						{$sopir1=$r3['0'];}

              $query4 = "SELECT fullname FROM user where ID_USER='$id_sopir2'";
              $result4 = $conn->query($query4);
              while($r4=mysqli_fetch_array($result4))
  						{$sopir2=$r4['0'];}
              ?>

                        <tr>
            <td><?php echo $tgl ?></td>
            <td><?php echo $nominal ?></td>
            <td><?php echo $sopir1 ?></td>
            <td><?php echo $nominal2 ?></td>
            <td><?php echo $sopir2 ?></td>
            <td><?php echo $nominal3 ?></td>
            <td><?php echo $mobil ?></td>



            <?php echo "<td class='center'>
            <a href='update_masuk.php?update_id=$r[0]' class='btn btn-primary btn col-md-12' title='Edit'><i class='fa fa-edit'></i></a>
            <a href='proses_masuk.php?delete_id=$r[0]' class='btn btn-danger btn col-md-12' title='Delete'><i class='fa fa-trash'></i></a>
            <!--<a href='cetak_surat.php?print_id=$r[0]' class='btn btn-warning btn col-md-12' title='Print'><i class='fa fa-print'></i></a></td>-->"; ?>
            </tr>
            <?php $i++; } ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
      </div>
    </div>
    </div>

<?php include "layout/footer.php"; ?>
