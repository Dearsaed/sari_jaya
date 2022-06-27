<?php  include "layout/head.php"; ?>
<?php include "layout/nav.php"; ?>
<?php include "layout/header.php"; ?>
<?php include "../koneksi.php";
date_default_timezone_set('Asia/Jakarta');
$update_id = $_GET['update_id'];
$query    = "SELECT * FROM pengeluaran WHERE id_pengeluaran='$update_id'";
$result   = $conn->query($query);
while($r=mysqli_fetch_array($result))
{
  $id_pengeluaran = $r['0'];
  $tgl = $r['1'];
  $id_sebab = $r['2'];
  $keterangan = $r['3'];
  $nominal = $r['4'];
  $id_mobil = $r['5'];
}
$query    = "SELECT * FROM `mobil` WHERE id_mobil='$id_mobil'";
$result   = $conn->query($query);
while($r=mysqli_fetch_array($result))
{
  $id_mobil=$r[0];
  $nopol=$r[1];
}

$query4 = "SELECT sebab FROM sebab where id_sebab='$id_sebab'";
$result4 = $conn->query($query4);
while($r4=mysqli_fetch_array($result4))
{$sebab=$r4['0'];}

$query    = "SELECT id_user,username,fullname,level,password,alamat,telp FROM USER WHERE ID_USER='$id_user'";
$result   = $conn->query($query);
while($r=mysqli_fetch_array($result))
{
?>
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
               <h3> Pengeluaran</h3>
              </div>


            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Update Pengeluaran<small><?php echo $tgl?></small></h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="proses_masuk2.php" enctype="multipart/form-data">

                      <div class="form-group">
                      <label for="id_pengeluaran" class="control-label col-md-3 col-sm-3 col-xs-12">ID pengeluaran<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="id_pengeluaran" class="form-control col-md-7 col-xs-12" type="text" name="id_pengeluaran" value="<?php echo "$id_pengeluaran"?>"  readonly required>
                      </div>
                    </div>
                      <div class="form-group">
                      <label for="tanggal" class="control-label col-md-3 col-sm-3 col-xs-12">TANGGAL<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="tanggal" class="form-control col-md-7 col-xs-12" type="text" name="tanggal" value="<?php echo "$tgl"?>"  readonly required>
                      </div>
                    </div>
                    <div class="form-group">
                    <label for="sebab" class="control-label col-md-3 col-sm-3 col-xs-12">SEBAB<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="sebab" class="form-control col-md-7 col-xs-12" type="text" name="sebab" value="<?php echo "$sebab"?>" readonly  required>
                    </div>
                  </div>
                  <div class="form-group">
                  <label for="keterangan" class="control-label col-md-3 col-sm-3 col-xs-12">KETERANGAN<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="keterangan" class="form-control col-md-7 col-xs-12" type="text" name="keterangan" value="<?php echo "$keterangan"?>"   required>
                  </div>
                </div>
                      <div class="form-group">
                        <label for="nominal" class="control-label col-md-3 col-sm-3 col-xs-12"> NOMINAL </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nominal" class="form-control col-md-7 col-xs-12" type="text" name="nominal" value="<?php echo "$nominal"?>" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="id_mobil" class="control-label col-md-3 col-sm-3 col-xs-12"> ID MOBIL </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="id_mobil" class="form-control col-md-7 col-xs-12" type="text" name="id_mobil" value="<?php echo "$id_mobil"?>"  readonly required>
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="nopol" class="control-label col-md-3 col-sm-3 col-xs-12"> NOPOL </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nopol" class="form-control col-md-7 col-xs-12" type="text" name="nopol" value="<?php echo "$nopol"?>"  readonly required>
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="table_masuk2.php"><button class="btn btn-danger" type="button">Cancel</button><a>
                          <button class="btn btn-warning" type="reset">Reset</button>
                          <button type="submit" name="submit1" class="btn btn-success">Submit</button>
                        </div>
                      </div>
            <?php } ?>
                    </form>
                  </div>
                </div>
              </div>
            </div>
      </div>
    </div>


<?php include "layout/footer.php"; ?>
