<?php  include "layout/head.php"; ?>
<?php include "layout/nav.php"; ?>
<?php include "layout/header.php"; ?>
<?php date_default_timezone_set('Asia/Jakarta');
$tahun = date ("Y") ;  ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row top_tiles">
            <a href="table_masuk.php">
              <div class="animated flipInY col-lg-6 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-table"></i></div>
                  <h3>PENDAPATAN</h3>
                </div>
              </div>
             </a>

             <!--surat keluar-->
             <a href="table_masuk2.php">
              <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-table"></i></div>
                  <h3>PEGELUARAN</h3>
                </div>
              </div>
            </a>
          </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <div class="clearfix"><H3> HASIL PENDAPATAN PADA TAHUN <?php echo $tahun;?></H3></div>
                  </div>
                  <div class="x_content">

                    <?php

                    $query1 = "SELECT nominalsopir1,nominalsopir2 FROM pendapatan where MONTH(tgl)='1' AND YEAR(tgl)='$tahun'";
                    $sql1 = mysqli_query ($conn,$query1);
                    while($r1=mysqli_fetch_array($sql1))
                    {
                     $nominal1=$r1['0']+$r1['1'];
                     $total1=$total1+$nominal1;
                    }

                    $query2 = "SELECT nominalsopir1,nominalsopir2 FROM pendapatan where MONTH(tgl)='2' AND YEAR(tgl)='$tahun'";
                    $sql2 = mysqli_query ($conn,$query2);
                    while($r2=mysqli_fetch_array($sql2))
                    {
                     $nominal2=$r2['0']+$r2['1'];
                     $total2=$total2+$nominal2;
                    }


                    $query3 = "SELECT nominalsopir1,nominalsopir2 FROM pendapatan where MONTH(tgl)='3' AND YEAR(tgl)='$tahun'";
                    $sql3 = mysqli_query ($conn,$query3);
                    while($r3=mysqli_fetch_array($sql3))
                    {
                     $nominal3=$r3['0']+$r3['1'];
                     $total3=$total3+$nominal3;
                    }

                    $query4 = "SELECT nominalsopir1,nominalsopir2 FROM pendapatan where MONTH(tgl)='4' AND YEAR(tgl)='$tahun'";
                    $sql4 = mysqli_query ($conn,$query4);
                    while($r4=mysqli_fetch_array($sql4))
                    {
                     $nominal4=$r4['0']+$r4['1'];
                     $total4=$total4+$nominal4;

                    }

                    $query5 = "SELECT nominalsopir1,nominalsopir2 FROM pendapatan where MONTH(tgl)='5' AND YEAR(tgl)='$tahun'";
                    $sql5 = mysqli_query ($conn,$query5);
                    while($r5=mysqli_fetch_array($sql5))
                    {
                     $nominal5=$r5['0']+$r5['1'];
                     $total5=$total5+$nominal5;

                    }

                    $query6 = "SELECT nominalsopir1,nominalsopir2 FROM pendapatan where MONTH(tgl)='6' AND YEAR(tgl)='$tahun'";
                    $sql6 = mysqli_query ($conn,$query6);
                    while($r6=mysqli_fetch_array($sql6))
                    {
                     $nominal6=$r6['0']+$r6['1'];
                     $total6=$total6+$nominal6;

                    }

                    $query7 = "SELECT nominalsopir1,nominalsopir2 FROM pendapatan where MONTH(tgl)='7' AND YEAR(tgl)='$tahun'";
                    $sql7 = mysqli_query ($conn,$query7);
                    while($r7=mysqli_fetch_array($sql7))
                    {
                     $nominal7=$r7['0']+$r7['1'];
                     $total7=$total7+$nominal7;

                    }

                    $query8 = "SELECT nominalsopir1,nominalsopir2 FROM pendapatan where MONTH(tgl)='8' AND YEAR(tgl)='$tahun'";
                    $sql8 = mysqli_query ($conn,$query8);
                    while($r8=mysqli_fetch_array($sql8))
                    {
                     $nominal8=$r8['0']+$r8['1'];
                     $total8=$total8+$nominal8;
                    }

                    $query9 = "SELECT nominalsopir1,nominalsopir2 FROM pendapatan where MONTH(tgl)='9' AND YEAR(tgl)='$tahun'";
                    $sql9 = mysqli_query ($conn,$query9);
                    while($r9=mysqli_fetch_array($sql9))
                    {
                     $nominal9=$r9['0']+$r9['1'];
                     $total9=$total9+$nominal9;
                    }

                    $query10 = "SELECT nominalsopir1,nominalsopir2 FROM pendapatan where MONTH(tgl)='10' AND YEAR(tgl)='$tahun'";
                    $sql10 = mysqli_query ($conn,$query10);
                    while($r10=mysqli_fetch_array($sql10))
                    {
                     $nominal10=$r10['0']+$r10['1'];
                     $total10=$total10+$nominal10;
                    }

                    $query11 = "SELECT nominalsopir1,nominalsopir2 FROM pendapatan where MONTH(tgl)='11' AND YEAR(tgl)='$tahun'";
                    $sql11 = mysqli_query ($conn,$query11);
                    while($r11=mysqli_fetch_array($sql11))
                    {
                     $nominal11=$r11['0']+$r11['1'];
                     $total11=$total11+$nominal11;
                    }

                    $query12 = "SELECT nominalsopir1,nominalsopir2 FROM pendapatan where MONTH(tgl)='12' AND YEAR(tgl)='$tahun'";
                    $sql12 = mysqli_query ($conn,$query12);
                    while($r12=mysqli_fetch_array($sql12))
                    {
                     $nominal12=$r12['0']+$r12['1'];
                     $total12=$total12+$nominal12;
                    }
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
                               label: 'Total Pendapatan Pada Tahun <?php echo $tahun;?>',
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



        <?php include "layout/footer.php"; ?>

        <!-- <?php if ($total1==NULL) {
          echo "0";
        }else
        echo $total1;
        ?>,
        <?php if ($total2==NULL) {
          echo "0";
        }else
        echo $total2;
        ?>,
        <?php if ($total3==NULL) {
          echo "0";
        }else
        echo $total3;
        ?>,
        <?php if ($total4==NULL) {
          echo "0";
        }else
        echo $total4;
        ?>,
        <?php if ($total5==NULL) {
          echo "0";
        }else
        echo $total5;
        ?>,
        <?php if ($total6==NULL) {
          echo "0";
        }else
        echo $total6;
        ?>,
        <?php if ($total7==NULL) {
          echo "0";
        }else
        echo $total7;
        ?>,
        <?php if ($total8==NULL) {
          echo "0";
        }else
        echo $total8;
        ?>,
        <?php if ($total9==NULL) {
          echo "0";
        }else
        echo $total9;
        ?>,
        <?php if ($total10==NULL) {
          echo "0";
        }else
        echo $total10;
        ?>,
        <?php if ($total11==NULL) {
          echo "0";
        }else
        echo $total11;
        ?>,
        <?php if ($total12==NULL) {
          echo "0";
        }else
        echo $total12;
        ?> -->
