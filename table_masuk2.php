<?php  include "layout/head.php"; ?>
<?php include "layout/nav.php"; ?>
<?php include "layout/header.php"; ?>
<?php include "../koneksi.php";
$query = "SELECT * FROM pengeluaran ORDER BY tgl DESC";
$result=$conn->query($query);
?>

 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Pengeluaran<small> Pengeluaran Sari Jaya</small></h3>
              </div>
            </div>

            <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><a href="add_masuk2.php"><i class="fa fa-plus"></i> MASUKKAN PENGELUARAN </a></h2>
                    <a href="cetak_dtw.php"><span class="fa fa-print pull-right" style="font-size:30px"></span></a>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Tanggal</th>
                          <th>Sebab</th>
                          <th>Keterangan</th>
                          <th>Nominal Pengeluaran</th>
                          <th>Nopol Mobil</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>


                      <tbody>
            <?php $i=0;
            $nomer=1;
            while($r=mysqli_fetch_array($result))
            {
              $id_pendapatan = $r['0'];
              $tgl = $r['1'];
              $id_sebab = $r['2'];
              $keterangan = $r['3'];
              $nominal = $r['4'];
              $id_mobil = $r['5'];
              $id_user = $r['6'];

              $query2 = "SELECT nopol FROM mobil where id_mobil='$id_mobil'";
              $result2 = $conn->query($query2);
              while($r2=mysqli_fetch_array($result2))
  						{$mobil=$r2['0'];}

              $query3 = "SELECT fullname FROM user where ID_USER='$id_user'";
              $result3 = $conn->query($query3);
              while($r3=mysqli_fetch_array($result3))
  						{$user=$r3['0'];}

              $query4 = "SELECT sebab FROM sebab where id_sebab='$id_sebab'";
              $result4 = $conn->query($query4);
              while($r4=mysqli_fetch_array($result4))
  						{$sebab=$r4['0'];}
              ?>

                        <tr>
                          <td><?php echo $tgl ?></td>
                          <td><?php echo $sebab ?></td>
                          <td><?php
                            echo $keterangan;
                           ?></td>
                          <td><?php echo $nominal ?></td>
                          <td><?php echo $mobil ?></td>

            <?php echo "<td class='center'>
            <a href='update_masuk2.php?update_id=$r[0]' class='btn btn-primary btn col-md-12' title='Edit'><i class='fa fa-edit'></i></a>
            <a href='proses_masuk2.php?delete_id=$r[0]' class='btn btn-danger btn col-md-12' title='Delete'><i class='fa fa-trash'></i></a></td>"; ?>
            </tr>
            <?php $i++;
            $nomer++; } ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
      </div>
    </div>
    </div>

<?php include "layout/footer.php"; ?>
