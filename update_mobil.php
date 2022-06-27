<?php  include "layout/head.php"; ?>
<?php include "layout/nav.php"; ?>
<?php include "layout/header.php"; ?>
<?php include "../koneksi.php";
date_default_timezone_set('Asia/Jakarta');
$update_id = $_GET['update_id'];
$query    = "SELECT * FROM mobil WHERE id_mobil='$update_id'";
$result   = $conn->query($query);

?>

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>EDIT USER</h3>
              </div>

            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> UPDATE USER <small>admin / user</small></h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="proses_mobil.php">
						<?php
						while($r=mysqli_fetch_array($result))
						{
              $id_mobil = $r['0'];
              $nopol = $r['1'];
              $tahun = $r['2'];
              $id_sopir1 =$r['3'];
              $id_sopir2 =$r['4'];
						?>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_mobil"> ID MOBIL <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="id_mobil" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $id_mobil ?>" readonly name="id_mobil">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">NOPOL <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nopol" name="nopol" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $nopol ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="tahun" class="control-label col-md-3 col-sm-3 col-xs-12">TAHUN<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tahun" class="form-control col-md-7 col-xs-12" type="text" name="tahun" required value="<?php echo $tahun ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="id_sopir1" class="control-label col-md-3 col-sm-3 col-xs-12">ID SOPIR 1<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="id_sopir1" class="form-control col-md-7 col-xs-12" type="text" name="id_sopir1" required value="<?php echo $id_sopir1 ?>" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="id_sopir2" class="control-label col-md-3 col-sm-3 col-xs-12">ID SOPIR 2<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="id_sopir2" class="form-control col-md-7 col-xs-12" type="text" name="id_sopir2" required value="<?php echo $id_sopir2 ?>" readonly>
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="table_mobil.php"><button class="btn btn-danger" type="button">Cancel</button><a>
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
