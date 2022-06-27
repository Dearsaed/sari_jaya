<?php  include "layout/head.php"; ?>
<?php include "layout/nav.php"; ?>
<?php include "layout/header.php"; ?>
<?php include "../koneksi.php";
date_default_timezone_set('Asia/Jakarta');
$update_id = $_GET['update_id'];
$query    = "SELECT * FROM pendapatan WHERE id_pendapatan='$update_id'";
$result   = $conn->query($query);
while($r=mysqli_fetch_array($result))
{
  $id_pendapatan = $r['0'];
  $tgl = $r['1'];
  $nominal = $r['2'];
  $nominal1 = $r['3'];
  $id_mobil = $r['4'];
}
$query    = "SELECT * FROM `mobil` WHERE id_sopir1='$id_user' OR id_sopir2='$id_user'";
$result   = $conn->query($query);
while($r=mysqli_fetch_array($result))
{
  $id_mobil=$r[0];
  $nopol=$r[1];
}

            ?>
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
               <h3> Pendapatan</h3>
              </div>


            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Update Pendapatan<small><?php echo $tgl?></small></h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="proses_masuk.php" enctype="multipart/form-data">

                      <div class="form-group">
                      <label for="id_pendapatan" class="control-label col-md-3 col-sm-3 col-xs-12">ID PENDAPATAN<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="id_pendapatan" class="form-control col-md-7 col-xs-12" type="text" name="id_pendapatan" value="<?php echo "$id_pendapatan"?>"  readonly required>
                      </div>
                    </div>
                      <div class="form-group">
                      <label for="tanggal" class="control-label col-md-3 col-sm-3 col-xs-12">TANGGAL<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="tanggal" class="form-control col-md-7 col-xs-12" type="text" name="tanggal" value="<?php echo "$tgl"?>"  readonly required>
                      </div>
                    </div>
                      <div class="form-group">
                        <label for="nominal" class="control-label col-md-3 col-sm-3 col-xs-12"> PENDAPATAN SOPIR 1 </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nominal" class="form-control col-md-7 col-xs-12" type="text" name="nominal" value="<?php echo "$nominal"?>" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="nominal1" class="control-label col-md-3 col-sm-3 col-xs-12"> PENDAPATAN SOPIR 2 </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nominal1" class="form-control col-md-7 col-xs-12" type="text" name="nominal1" value="<?php echo "$nominal1"?>" required>
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
                          <a href="table_masuk.php"><button class="btn btn-danger" type="button">Cancel</button><a>
                          <button class="btn btn-warning" type="reset">Reset</button>
                          <button type="submit" name="submit1" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
      </div>
    </div>


<?php include "layout/footer.php"; ?>
