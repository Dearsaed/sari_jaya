<?php  include "layout/head.php"; ?>
<?php include "layout/nav.php"; ?>
<?php include "layout/header.php"; ?>
<?php include "../koneksi.php";
date_default_timezone_set('Asia/Jakarta');


?>
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>TAMBAH USER</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> TAMBAH USER <small>Administrator / Operator</small></h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="proses_mobil.php">


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nopol">NOPOL<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nopol" name="nopol" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="tahun" class="control-label col-md-3 col-sm-3 col-xs-12">TAHUN<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tahun" class="form-control col-md-7 col-xs-12" type="text" name="tahun" required>
                        </div>
                      </div>


                      <div class="form-group">

                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_sopir1"> SOPIR 1
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <?php
                  // ----------------------------------------
               //   include "koneksi.php";
                  $query="select * from user";
                  $result=mysqli_query($conn,$query);
                  // ----------------------------------------
                  echo "<select name='id_sopir1' class='form-control theSelect' required>";
                  echo "<option selected disabled value='id_sopir1' selected>ID SOPIR</option>";
                    while($row=mysqli_fetch_row($result))
                    {
                      echo "<option value=$row[0]>$row[0], $row[3]</option>";
                    }
                  echo "</select>";
                  echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>';
      	          echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css">';
      	          echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>';
      	          echo '<script> $(".theSelect").select2(); </script>';
                ?>
                        </div>
                      </div>

                      <div class="form-group">

                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_sopir2"> SOPIR 2
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <?php
                  // ----------------------------------------
               //   include "koneksi.php";
                  $query1="select * from user";
                  $result1=mysqli_query($conn,$query1);
                  // ----------------------------------------
                  echo "<select name='id_sopir2' class='form-control theSelect' required>";
                  echo "<option selected disabled value='id_sopir2' selected>ID SOPIR</option>";
                    while($row1=mysqli_fetch_row($result1))
                    {
                      echo "<option value=$row1[0]>$row1[0], $row1[3]</option>";
                    }
                  echo "</select>";
                  echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>';
      	          echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css">';
      	          echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>';
      	          echo '<script> $(".theSelect").select2(); </script>';
                ?>
                        </div>
                      </div>



                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="table_mobil.php"><button class="btn btn-danger" type="button">Cancel</button><a>
						              <button class="btn btn-warning" type="reset">Reset</button>
                          <button type="submit" name="submit" class="btn btn-success">Submit</button>
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
