<?php  include "layout/head.php"; ?>
<?php include "layout/nav.php"; ?>
<?php include "layout/header.php"; ?>
<?php include "../koneksi.php";
$query = "SELECT * FROM mobil";
$result=$conn->query($query);
?>

 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> DATA MOBIL <small>Data Mobil Sari Jaya</small></h3>
              </div>
            </div>

            <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><a href="add_mobil.php"><i class="fa fa-plus"></i> ADD MOBIL DATA</a></h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>ID_MOBIL</th>
                          <th>NOPOL</th>
                          <th>TAHUN</th>
                          <th>SOPIR 1</th>
                          <th>SOPIR 2</th>
                          <th>AKSI</th>

                        </tr>
                      </thead>


                      <tbody>

            <?php
             while($r=mysqli_fetch_array($result))
            {
              $id_mobil = $r['0'];
              $nopol = $r['1'];
              $tahun = $r['2'];

              $id_sopir1 =$r['3'];
              $query2 = "SELECT fullname FROM user where ID_USER='$id_sopir1'";
              $result2 = $conn->query($query2);
              while($r2=mysqli_fetch_array($result2))
  						{$sopir1=$r2['0'];}

              $id_sopir2 =$r['4'];
              $query3 = "SELECT fullname FROM user where ID_USER='$id_sopir2'";
              $result3 = $conn->query($query3);
              while($r3=mysqli_fetch_array($result3))
  						{$sopir2=$r3['0'];}
              ?>

                        <tr>
            <td><?php echo $id_mobil ?></td>
            <td><?php echo $nopol ?></td>
            <td><?php echo $tahun ?></td>
            <td><?php echo $sopir1 ?></td>
            <td><?php echo $sopir2 ?></td>
            <?php echo "<td class='center'><a href='update_mobil.php?update_id=$r[0]' class='btn btn-primary btn' title='Edit Data'><i class='fa fa-edit'></i></a>
                                    <a href='proses_mobil.php?delete_id=$r[0]' class='btn btn-danger btn' title='Delete'><i class='fa fa-trash'></i></a></td>"; ?>

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
