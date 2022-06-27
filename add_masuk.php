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
                <h3>PENDAPATAN</h3>
              </div>

            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> TAMBAHAN PENDAPATAN <small></small></h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="proses_masuk.php" enctype="multipart/form-data">

                      <div class="form-group">
                      <label for="tanggal" class="control-label col-md-3 col-sm-3 col-xs-12">TANGGAL<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="tanggal" class="form-control col-md-7 col-xs-12" type="date" name="tanggal" required>
                      </div>
                    </div>
                      <div class="form-group">
                        <label for="nominal" class="control-label col-md-3 col-sm-3 col-xs-12"> PENDAPATAN SOPIR 1 </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nominal" class="form-control col-md-7 col-xs-12" type="text" name="nominal" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="nominal1" class="control-label col-md-3 col-sm-3 col-xs-12"> PENDAPATAN SOPIR 2 </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nominal1" class="form-control col-md-7 col-xs-12" type="text" name="nominal1" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_mobil"> MOBIL
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <?php
                  // ----------------------------------------
               //   include "koneksi.php";
                  $query="select id_mobil,nopol,id_sopir1,id_sopir2 from mobil";
                  $result=mysqli_query($conn,$query);
                  // ----------------------------------------
                  echo "<select name='id_mobil' class='form-control theSelect' required>";
                  echo "<option selected disabled value='id_mobil' selected>ID MOBIL</option>";
                    while($row=mysqli_fetch_row($result))
                    {
                      echo "<option value=$row[0]>$row[0], $row[1], $row[2], $row[3]</option>";
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
                          <a href="table_masuk.php"><button class="btn btn-danger" type="button">Cancel</button><a>
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
