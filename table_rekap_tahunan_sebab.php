<?php  include "layout/head.php"; ?>
<?php include "layout/nav.php"; ?>
<?php include "layout/header.php"; ?>
<?php include "../koneksi.php";
$query = "SELECT * FROM pengeluaran ORDER BY tgl DESC";
$result=$conn->query($query);

date_default_timezone_set('Asia/Jakarta');
$tahun = date ("Y") ;

?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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

                    <form action="#" method="post">

                    <div class="col-md-3 col-sm-6 col-xs-12">
                      <select class="form-control" required type="text" name="tahun" id="tahun">
                        <?php
                        echo "<option selected disabled value>Pilih Tahun...</option>";
                        echo "<option value=$tahun>$tahun</option>";
                        while ($tahun > 2012) {
                          $tahun=$tahun-1;
                          echo "<option value=$tahun>$tahun</option>";
                        }

                        ?>
                      </select>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <?php
                // ----------------------------------------
             //   include "koneksi.php";
                $query="select id_mobil,nopol from mobil";
                $result=mysqli_query($conn,$query);
                // ----------------------------------------
                echo "<select name='id_mobil' class='form-control theSelect' required>";
                echo "<option selected disabled value selected>Pilih Mobil...</option>";
                echo "<option value='all'>Semua</option>";
                  while($row=mysqli_fetch_row($result))
                  {
                    echo "<option value=$row[0]>$row[0], $row[1]</option>";
                  }
                echo "</select>";
                echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>';
                echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css">';
                echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>';
                echo '<script> $(".theSelect").select2(); </script>';



                        ?>
                      </select>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <?php
                // ----------------------------------------
             //   include "koneksi.php";
                $query="select * from sebab";
                $result=mysqli_query($conn,$query);
                // ----------------------------------------
                echo "<select name='id_sebab' class='form-control theSelect' required>";
                echo "<option selected disabled value selected>Pilih Sebab Pengeluaran...</option>";
                  while($row=mysqli_fetch_row($result))
                  {
                    echo "<option value=$row[0]> $row[1]</option>";
                  }
                echo "</select>";
                echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>';
                echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css">';
                echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>';
                echo '<script> $(".theSelect").select2(); </script>';

                        $tahun=$_POST['tahun'];
                        $id_mobil=$_POST['id_mobil'];
                        $id_sebab=$_POST['id_sebab'];


                        ?>
                      </select>
                    </div>
                    <!-- <a href="cetak_desa.php"><span class="fa fa-print pull-right" style="font-size:30px"></span></a> -->

                    <div class="row">
                      <div class="text-end">
                      <input type="submit" name="submit"  class="btn btn-success">
                      </div>
                    </form>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                					 <?php

                            $query1 = "SELECT nominal FROM pengeluaran where MONTH(tgl)='1' AND YEAR(tgl)= '$tahun' AND id_sebab='$id_sebab'";
                            $sql1 = mysqli_query ($conn,$query1);
                             while($r1=mysqli_fetch_array($sql1))
                             {
                               $nominal1=$r1['0']+$r1['1'];
                               $total1=$total1+$nominal1;
                             }

                            $query2 = "SELECT nominal FROM pengeluaran where MONTH(tgl)='2' AND YEAR(tgl)= '$tahun' AND id_sebab='$id_sebab'";
                            $sql2 = mysqli_query ($conn,$query2);
                             while($r2=mysqli_fetch_array($sql2))
                             {
                               $nominal2=$r2['0']+$r2['1'];
                               $total2=$total2+$nominal2;
                             }


                            $query3 = "SELECT nominal FROM pengeluaran where MONTH(tgl)='3' AND YEAR(tgl)= '$tahun' AND id_sebab='$id_sebab'";
                            $sql3 = mysqli_query ($conn,$query3);
                             while($r3=mysqli_fetch_array($sql3))
                             {
                               $nominal3=$r3['0']+$r3['1'];
                               $total3=$total3+$nominal3;
                             }

                            $query4 = "SELECT nominal FROM pengeluaran where MONTH(tgl)='4' AND YEAR(tgl)= '$tahun' AND id_sebab='$id_sebab'";
                            $sql4 = mysqli_query ($conn,$query4);
                             while($r4=mysqli_fetch_array($sql4))
                             {
                               $nominal4=$r4['0']+$r4['1'];
                               $total4=$total4+$nominal4;

                             }

                            $query5 = "SELECT nominal FROM pengeluaran where MONTH(tgl)='5' AND YEAR(tgl)= '$tahun' AND id_sebab='$id_sebab'";
                            $sql5 = mysqli_query ($conn,$query5);
                             while($r5=mysqli_fetch_array($sql5))
                             {
                               $nominal5=$r5['0']+$r5['1'];
                               $total5=$total5+$nominal5;

                             }

                            $query6 = "SELECT nominal FROM pengeluaran where MONTH(tgl)='6' AND YEAR(tgl)= '$tahun' AND id_sebab='$id_sebab'";
                            $sql6 = mysqli_query ($conn,$query6);
                             while($r6=mysqli_fetch_array($sql6))
                             {
                               $nominal6=$r6['0']+$r6['1'];
                               $total6=$total6+$nominal6;

                             }

                            $query7 = "SELECT nominal FROM pengeluaran where MONTH(tgl)='7' AND YEAR(tgl)= '$tahun' AND id_sebab='$id_sebab'";
                            $sql7 = mysqli_query ($conn,$query7);
                             while($r7=mysqli_fetch_array($sql7))
                             {
                               $nominal7=$r7['0']+$r7['1'];
                               $total7=$total7+$nominal7;

                             }

                            $query8 = "SELECT nominal FROM pengeluaran where MONTH(tgl)='8' AND YEAR(tgl)= '$tahun' AND id_sebab='$id_sebab'";
                            $sql8 = mysqli_query ($conn,$query8);
                             while($r8=mysqli_fetch_array($sql8))
                             {
                               $nominal8=$r8['0']+$r8['1'];
                               $total8=$total8+$nominal8;
                             }

                            $query9 = "SELECT nominal FROM pengeluaran where MONTH(tgl)='9' AND YEAR(tgl)= '$tahun' AND id_sebab='$id_sebab'";
                            $sql9 = mysqli_query ($conn,$query9);
                             while($r9=mysqli_fetch_array($sql9))
                             {
                               $nominal9=$r9['0']+$r9['1'];
                               $total9=$total9+$nominal9;
                             }

                            $query10 = "SELECT nominal FROM pengeluaran where MONTH(tgl)='10' AND YEAR(tgl)= '$tahun' AND id_sebab='$id_sebab'";
                            $sql10 = mysqli_query ($conn,$query10);
                             while($r10=mysqli_fetch_array($sql10))
                             {
                               $nominal10=$r10['0']+$r10['1'];
                               $total10=$total10+$nominal10;
                             }

                            $query11 = "SELECT nominal FROM pengeluaran where MONTH(tgl)='11' AND YEAR(tgl)= '$tahun' AND id_sebab='$id_sebab'";
                            $sql11 = mysqli_query ($conn,$query11);
                             while($r11=mysqli_fetch_array($sql11))
                             {
                               $nominal11=$r11['0']+$r11['1'];
                               $total11=$total11+$nominal11;
                             }

                            $query12 = "SELECT nominal FROM pengeluaran where MONTH(tgl)='12' AND YEAR(tgl)= '$tahun' AND id_sebab='$id_sebab'";
                            $sql12 = mysqli_query ($conn,$query12);
                             while($r12=mysqli_fetch_array($sql12))
                             {
                               $nominal12=$r12['0']+$r12['1'];
                               $total12=$total12+$nominal12;
                             }
                             $label=$tahun." Total Semua Mobil";

                             $query22 = "SELECT nopol FROM mobil where id_mobil='$id_mobil'";
                             $result22 = $conn->query($query22);
                             while($r22=mysqli_fetch_array($result22))
                 						{
                               $mobil=$r22['0'];
                             }
                             $query23 = "SELECT sebab FROM sebab where id_sebab='$id_sebab'";
                             $result23 = $conn->query($query23);
                             while($r23=mysqli_fetch_array($result23))
                 						{
                               $sebab=$r23['0'];
                             }
                             $label=$tahun." Mobil Nopol ".$mobil." Sebabnya ".$sebab;


                					?>

                          <script type="text/javascript" src="Chart.js"></script>
                          <canvas id="myChart" width="400" height="150"></canvas>
                          <script>
                          const ctx = document.getElementById('myChart').getContext('2d');
                          const myChart = new Chart(ctx, {
                              type: 'bar',
                              data: {
                                  labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni','Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
                                  datasets: [{
                                      label: 'Total Pengeluaran Pada Tahun <?php echo $label;?>',
                                      data: [
                                        <?php
                                        echo $total1;
                                        ?>,
                                        <?php
                                        echo $total2;
                                        ?>,
                                        <?php
                                        echo $total3;
                                        ?>,
                                        <?php
                                        echo $total4;
                                        ?>,
                                        <?php
                                        echo $total5;
                                        ?>,
                                        <?php
                                        echo $total6;
                                        ?>,
                                        <?php
                                        echo $total7;
                                        ?>,
                                        <?php
                                        echo $total8;
                                        ?>,
                                        <?php
                                        echo $total9;
                                        ?>,
                                        <?php
                                        echo $total10;
                                        ?>,
                                        <?php
                                        echo $total11;
                                        ?>,
                                        <?php
                                        echo $total12;
                                        ?>
                                      ],
                                      backgroundColor: [
                                          'rgba(255, 99, 132, 0.2)',
                                          'rgba(54, 162, 235, 0.2)',
                                          'rgba(255, 206, 86, 0.2)',
                                          'rgba(75, 192, 192, 0.2)',
                                          'rgba(153, 102, 255, 0.2)',
                                          'rgba(255, 159, 64, 0.2)',
                                          'rgba(255, 99, 132, 0.2)',
                                          'rgba(54, 162, 235, 0.2)',
                                          'rgba(255, 206, 86, 0.2)',
                                          'rgba(75, 192, 192, 0.2)',
                                          'rgba(153, 102, 255, 0.2)',
                                          'rgba(255, 159, 64, 0.2)'
                                      ],
                                      borderColor: [
                                          'rgba(255, 99, 132, 1)',
                                          'rgba(54, 162, 235, 1)',
                                          'rgba(255, 206, 86, 1)',
                                          'rgba(75, 192, 192, 1)',
                                          'rgba(153, 102, 255, 1)',
                                          'rgba(255, 159, 64, 1)',
                                          'rgba(255, 99, 132, 1)',
                                          'rgba(54, 162, 235, 1)',
                                          'rgba(255, 206, 86, 1)',
                                          'rgba(75, 192, 192, 1)',
                                          'rgba(153, 102, 255, 1)',
                                          'rgba(255, 159, 64, 1)'
                                      ],
                                      borderWidth: 1
                                  }]
                              },
                              options: {
                                  scales: {
                                      y: {
                                          beginAtZero: true
                                      }
                                  }
                              }
                          });
                          </script>



                  </div>
                </div>
              </div>
      </div>
    </div>
    </div>

<?php include "layout/footer.php"; ?>
