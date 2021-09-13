<?php
include '../koneksi.php';
$tgl1 = @$_POST['tanggal'];
$tgl2=@$_POST['tanggal2'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>laporan monotoring <?= $tgl1?> sampai <?= $tgl2?></title>
    <link rel="shortcut icon" href="../dist/img/Jasamarga_Bali.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">
<style>
    @page { size: A4 }
  
    h1 {
        font-weight: bold;
        font-size: 15pt;
        text-align: center;
    }
  
    table {
        border-collapse: collapse;
        width: 100%;
    }
  
    .table th {
        padding: 8px 8px;
        border:1px solid #000000;
        text-align: center;
    }
  
    .table td {
        padding: 3px 3px;
        border:1px solid #000000;
    }
  
    .text-center {
        text-align: center;
    }
</style>
<body class="A4">
    <section class="sheet padding-10mm">
        <center>
        <img src="../dist/img/Jasamarga_Bali.webp" width="80" height="60">
        <h1>LAPORAN MONITORING PANEL1</BR><?= $tgl1?> HINGGA <?= $tgl2?></h1>
        </center>
        <table class="table">
            <thead>
                <tr>
                    <th>TANGGAL</th>
                    <th>ENERGIR</th>
                    <th>ENERGIS</th>
                    <th>ENERGIT</th>
                    <th>ENERGITOTAL</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $cek_data = mysqli_query($koneksi, "SELECT * FROM panel1 WHERE tanggal between '$tgl1' and '$tgl2' ORDER BY tanggal");
            $energis=[];
            $energit=[];
            $energir=[];
            $energitotal=[];
            $energis_=[];
            $energit_=[];
            $energir_=[];
            $energitotal_=[];
            $tanggal=[];
            $tanggal_=[];
            $energis1=[];
            $energit1=[];
            $energir1=[];
            $energitotal1=[];
            $energis2=[];
            $energit2=[];
            $energir2=[];
            $energitotal2=[];
            foreach ($cek_data as $row){
                $tag=$row['tanggal'];
                $tag2=explode("-",$tag);
                $har=explode(" ",$tag2[2]);
                if ($tag2[1]==date('m')) {
                    for ($i=1; $i <32 ; $i++) { 
                        if ($har[0]==$i) {
                            $energir[$i-1]=$row['energir'];
                            $energis[$i-1]=$row['energis'];
                            $energit[$i-1]=$row['energit'];
                            $energitotal[$i-1]=$row['energitotal'];
                            $tanggal[$i-1]=$row['tanggal'];
                        }
                    }
                }
                elseif ($tag2[1]==date('m')-1) {
                    for ($a=1; $a <32 ; $a++) { 
                        if ($har[0]==$a) {
                            $energir_[$a-1]=$row['energir'];
                            $energis_[$a-1]=$row['energis'];
                            $energit_[$a-1]=$row['energit'];
                            $energitotal_[$a-1]=$row['energitotal'];
                            $tanggal_[$a-1]=$row['tanggal'];
                        }
                    }
                }
            }
            for ($j=0; $j < count($energitotal); $j++) { 
                
                if ($j==0) {
                    $energis1[$j]=$energis[$j];
                    $energit1[$j]=$energit[$j];
                    $energir1[$j]=$energir[$j];
                    $energitotal1[$j]=$energitotal[$j];
                    //
                    $energis2[$j]=$energis_[$j];
                    $energit2[$j]=$energit_[$j];
                    $energir2[$j]=$energir_[$j];
                    $energitotal2[$j]=$energitotal_[$j];
                }
                else {
                    $d=$j-1;
                    $energis1[$j]=$energis[$j]-$energis[$d];
                    $energit1[$j]=$energit[$j]-$energit[$d];
                    $energir1[$j]=$energir[$j]-$energir[$d];
                    $energitotal1[$j]=$energitotal[$j]-$energitotal[$d];
                    //
                    $energis2[$j]=$energis_[$j]-$energis_[$d];
                    $energit2[$j]=$energit_[$j]-$energit_[$d];
                    $energir2[$j]=$energir_[$j]-$energir_[$d];
                    $energitotal2[$j]=$energitotal_[$j]-$energitotal_[$d];
                }
                
            }
            
            for ($t=0; $t < count($energir1); $t++) { 
                echo "<tr>
                    <td>".$tanggal[$t]."</td>
                    <td>".$energir1[$t]*1444.44."</td>
                    <td>".$energis1[$t]*1444.44."</td>
                    <td>".$energit1[$t]*1444.44."</td>
                    <td>".$energitotal1[$t]*1444.44."</td>
                    </tr>";
            }
            for ($q=0; $q < count($energir2); $q++) { 
                echo "<tr>
                    <td>".$tanggal_[$q]."</td>
                    <td>".$energir2[$q]*1444.44."</td>
                    <td>".$energis2[$q]*1444.44."</td>
                    <td>".$energit2[$q]*1444.44."</td>
                    <td>".$energitotal2[$q]*1444.44."</td>
                    </tr>";
            }
            ?>
            
            </tbody>
        </table>
    </section>
</body>
<SCript>
    window.print()
</SCript>
</html>
