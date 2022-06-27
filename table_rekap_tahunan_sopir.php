<?php  include "layout/head.php"; ?>
<?php include "layout/nav.php"; ?>
<?php include "layout/header.php"; ?>
<?php include "../koneksi.php";
$query = "SELECT * FROM pendapatan ORDER BY tgl DESC";
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
                <h3>Pendapatan Sopir<small> Pendapatan Per Sopir Sari Jaya</small></h3>
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

                  while($row=mysqli_fetch_row($result))
                  {
                    echo "<option value=$row[0]>$row[0], $row[1]</option>";
                  }
                echo "</select>";
                echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>';
                echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css">';
                echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>';
                echo '<script> $(".theSelect").select2(); </script>';

                        $tahun=$_POST['tahun'];
                        $id_mobil=$_POST['id_mobil'];


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

                            $query1 = "SELECT nominalsopir1,nominalsopir2 FROM pendapatan where MONTH(tgl)='1' AND YEAR(tgl)='$tahun' AND id_mobil='$id_mobil'";
                   					$sql1 = mysqli_query ($conn,$query1);
                             while($r1=mysqli_fetch_array($sql1))
                             {
                               $nominal1=$r1['0'];
                               $nominall1=$r1['1'];

                             }

                   					$query2 = "SELECT nominalsopir1,nominalsopir2 FROM pendapatan where MONTH(tgl)='2' AND YEAR(tgl)='$tahun' AND id_mobil='$id_mobil'";
                   					$sql2 = mysqli_query ($conn,$query2);
                             while($r2=mysqli_fetch_array($sql2))
                             {
                               $nominal2=$r2['0'];
                               $nominall2=$r2['1'];

                             }


                   					$query3 = "SELECT nominalsopir1,nominalsopir2 FROM pendapatan where MONTH(tgl)='3' AND YEAR(tgl)='$tahun' AND id_mobil='$id_mobil'";
                   					$sql3 = mysqli_query ($conn,$query3);
                             while($r3=mysqli_fetch_array($sql3))
                             {
                               $nominal3=$r3['0'];
                               $nominall3=$r3['1'];

                             }

                   					$query4 = "SELECT nominalsopir1,nominalsopir2 FROM pendapatan where MONTH(tgl)='4' AND YEAR(tgl)='$tahun' AND id_mobil='$id_mobil'";
                   					$sql4 = mysqli_query ($conn,$query4);
                             while($r4=mysqli_fetch_array($sql4))
                             {
                               $nominal4=$r4['0'];
                               $nominall4=$r4['1'];


                             }

                   					$query5 = "SELECT nominalsopir1,nominalsopir2 FROM pendapatan where MONTH(tgl)='5' AND YEAR(tgl)='$tahun' AND id_mobil='$id_mobil'";
                   					$sql5 = mysqli_query ($conn,$query5);
                             while($r5=mysqli_fetch_array($sql5))
                             {
                               $nominal5=$r5['0'];
                               $nominall5=$r5['1'];


                             }

                   					$query6 = "SELECT nominalsopir1,nominalsopir2 FROM pendapatan where MONTH(tgl)='6' AND YEAR(tgl)='$tahun' AND id_mobil='$id_mobil'";
                   					$sql6 = mysqli_query ($conn,$query6);
                             while($r6=mysqli_fetch_array($sql6))
                             {
                               $nominal6=$r6['0'];
                               $nominall6=$r6['1'];


                             }

                   					$query7 = "SELECT nominalsopir1,nominalsopir2 FROM pendapatan where MONTH(tgl)='7' AND YEAR(tgl)='$tahun' AND id_mobil='$id_mobil'";
                   					$sql7 = mysqli_query ($conn,$query7);
                             while($r7=mysqli_fetch_array($sql7))
                             {
                               $nominal7=$r7['0'];
                               $nominall7=$r7['1'];


                             }

                   					$query8 = "SELECT nominalsopir1,nominalsopir2 FROM pendapatan where MONTH(tgl)='8' AND YEAR(tgl)='$tahun' AND id_mobil='$id_mobil'";
                   					$sql8 = mysqli_query ($conn,$query8);
                             while($r8=mysqli_fetch_array($sql8))
                             {
                               $nominal8=$r8['0'];
                               $nominall8=$r8['1'];

                             }

                   					$query9 = "SELECT nominalsopir1,nominalsopir2 FROM pendapatan where MONTH(tgl)='9' AND YEAR(tgl)='$tahun' AND id_mobil='$id_mobil'";
                   					$sql9 = mysqli_query ($conn,$query9);
                             while($r9=mysqli_fetch_array($sql9))
                             {
                               $nominal9=$r9['0'];
                               $nominall9=$r9['1'];

                             }

                   					$query10 = "SELECT nominalsopir1,nominalsopir2 FROM pendapatan where MONTH(tgl)='10' AND YEAR(tgl)='$tahun' AND id_mobil='$id_mobil'";
                   					$sql10 = mysqli_query ($conn,$query10);
                             while($r10=mysqli_fetch_array($sql10))
                             {
                               $nominal10=$r10['0'];
                               $nominall10=$r10['1'];

                             }

                   					$query11 = "SELECT nominalsopir1,nominalsopir2 FROM pendapatan where MONTH(tgl)='11' AND YEAR(tgl)='$tahun' AND id_mobil='$id_mobil'";
                   					$sql11 = mysqli_query ($conn,$query11);
                             while($r11=mysqli_fetch_array($sql11))
                             {
                               $nominal11=$r11['0'];
                               $nominall11=$r11['1'];

                             }

                   					$query12 = "SELECT nominalsopir1,nominalsopir2 FROM pendapatan where MONTH(tgl)='12' AND YEAR(tgl)='$tahun' AND id_mobil='$id_mobil'";
                   					$sql12 = mysqli_query ($conn,$query12);
                             while($r12=mysqli_fetch_array($sql12))
                             {
                               $nominal12=$r12['0'];
                               $nominall12=$r12['1'];

                             }

                             $query22 = "SELECT nopol,id_sopir1,id_sopir2 FROM mobil where id_mobil='$id_mobil'";
                             $result22 = $conn->query($query22);
                             while($r22=mysqli_fetch_array($result22))
                 						{
                               $mobil=$r22['0'];
                               $id_sopir1=$r22['1'];
                               $id_sopir2=$r22['2'];
                             }

                             $query32 = "SELECT fullname FROM user where ID_USER='$id_sopir1'";
                             $result32 = $conn->query($query32);
                             while($r32=mysqli_fetch_array($result32))
                 						{$sopir1=$r32['0'];}

                             $query42 = "SELECT fullname FROM user where ID_USER='$id_sopir2'";
                             $result42 = $conn->query($query42);
                             while($r42=mysqli_fetch_array($result42))
                 						{$sopir2=$r42['0'];}
                             $label=$tahun." Mobil Nopol ".$mobil;


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
                                      label: 'Total Pendapatan Pada Tahun <?php echo $label;?> Pak <?php echo $sopir1;?>',
                                      data: [
                                        <?php
                                        echo $nominal1;
                                        ?>,
                                        <?php
                                        echo $nominal2;
                                        ?>,
                                        <?php
                                        echo $nominal3;
                                        ?>,
                                        <?php
                                        echo $nominal4;
                                        ?>,
                                        <?php
                                        echo $nominal5;
                                        ?>,
                                        <?php
                                        echo $nominal6;
                                        ?>,
                                        <?php
                                        echo $nominal7;
                                        ?>,
                                        <?php
                                        echo $nominal8;
                                        ?>,
                                        <?php
                                        echo $nominal9;
                                        ?>,
                                        <?php
                                        echo $nominal10;
                                        ?>,
                                        <?php
                                        echo $nominal11;
                                        ?>,
                                        <?php
                                        echo $nominal12;
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
                                  },{
                                      label: 'Total Pendapatan Pada Tahun <?php echo $label; ?> Pak <?php echo $sopir2;?>',
                                      data: [
                                        <?php
                                        echo $nominall1;
                                        ?>,
                                        <?php
                                        echo $nominall2;
                                        ?>,
                                        <?php
                                        echo $nominall3;
                                        ?>,
                                        <?php
                                        echo $nominall4;
                                        ?>,
                                        <?php
                                        echo $nominall5;
                                        ?>,
                                        <?php
                                        echo $nominall6;
                                        ?>,
                                        <?php
                                        echo $nominall7;
                                        ?>,
                                        <?php
                                        echo $nominall8;
                                        ?>,
                                        <?php
                                        echo $nominall9;
                                        ?>,
                                        <?php
                                        echo $nominall10;
                                        ?>,
                                        <?php
                                        echo $nominall11;
                                        ?>,
                                        <?php
                                        echo $nominall12;
                                        ?>
                                      ],
                                      backgroundColor: [
                                        'rgba(255, 159, 64, 0.2)',
                                        'rgba(153, 102, 255, 0.2)',
                                        'rgba(75, 192, 192, 0.2)',
                                        'rgba(255, 206, 86, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(255, 159, 64, 0.2)',
                                        'rgba(153, 102, 255, 0.2)',
                                        'rgba(75, 192, 192, 0.2)',
                                        'rgba(255, 206, 86, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(255, 99, 132, 0.2)'
                                      ],
                                      borderColor: [
                                        'rgba(255, 159, 64, 1)',
                                        'rgba(153, 102, 255, 1)',
                                        'rgba(75, 192, 192, 1)',
                                        'rgba(255, 206, 86, 1)',
                                        'rgba(54, 162, 235, 1)',
                                        'rgba(255, 99, 132, 1)',
                                        'rgba(255, 159, 64, 1)',
                                        'rgba(153, 102, 255, 1)',
                                        'rgba(75, 192, 192, 1)',
                                        'rgba(255, 206, 86, 1)',
                                        'rgba(54, 162, 235, 1)',
                                        'rgba(255, 99, 132, 1)'
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
