<?php
include '../koneksi.php';
$tgl1 = @$_POST['tanggal'];
$a=@$_POST['tanggal2'];
$b=explode("-",$a);
$b[2]+=1;
$tgl2="$b[0]-$b[1]-$b[2]";
$h=date('d');
$z=date('m');
$bln=(int)$z;
$sql =mysqli_query($koneksi, "SELECT max(energitotal) FROM panel8 WHERE day(tanggal)='$h' and month(tanggal)='$bln' ");
$dapat=mysqli_fetch_array($sql);
$data=$dapat['max(energitotal)'];
$sql2 =mysqli_query($koneksi, "SELECT energitotal FROM panel8 WHERE day(tanggal)='$h' and month(tanggal)='$bln' ");
$jumlah = mysqli_num_rows($sql2);
if ($jumlah>1) {
    $query="DELETE from panel8 where energitotal<'$data' and day(tanggal)=$h and month(tanggal)=$bln ";
    mysqli_query($koneksi, $query);
}
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
<body>
    <section class="sheet padding-10mm">
        <center>
        <img src="../dist/img/Jasamarga_Bali.webp" width="80" height="60">
        <h1>LAPORAN MONITORING panel8</BR><?= $tgl1?> HINGGA <?= $a?></h1>
        </center>
        <table class="table">
            <thead>
                <tr>
                    <th>TANGGAL</th>
                    <th>ENERGIR</th>
                    <th>ENERGIS</th>
                    <th>ENERGIT</th>
                    <th>ENERGITOTAL</th>
                    <th>BIAYA</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $cek_data = mysqli_query($koneksi, "SELECT * FROM panel8 WHERE tanggal between '$tgl1' and '$tgl2' ORDER BY tanggal");
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
            $no=0;
            $no2=0;
            $r=[];
            foreach ($cek_data as $row){
                $tag=$row['tanggal'];
                $tag2=explode("-",$tag);
                $har=explode(" ",$tag2[2]);
                if (count($r)==0) {
                    $r[0]=$tag2[1];
                    $energir[0]=$row['energir'];
                    $energis[0]=$row['energis'];
                    $energit[0]=$row['energit'];
                    $energitotal[0]=$row['energitotal'];
                    $tanggal[0]=$row['tanggal'];
                    $no++;
                }
                elseif ($r[0]==$tag2[1]) {
                    $energir["$no"]=$row['energir'];
                    $energis["$no"]=$row['energis'];
                    $energit["$no"]=$row['energit'];
                    $energitotal["$no"]=$row['energitotal'];
                    $tanggal["$no"]=$row['tanggal'];
                    $no++;
                }
                
                elseif ($tag2[1]!=$r[0]) {
                    $energir_["$no2"]=$row['energir'];
                    $energis_["$no2"]=$row['energis'];
                    $energit_["$no2"]=$row['energit'];
                    $energitotal_["$no2"]=$row['energitotal'];
                    $tanggal_["$no2"]=$row['tanggal'];
                    $no2++;
                }
            }
            for ($j=0; $j < count($energitotal); $j++) { 
                if ($j==0) {
                    $energis1[$j]=$energis[$j];
                    $energit1[$j]=$energit[$j];
                    $energir1[$j]=$energir[$j];
                    $energitotal1[$j]=$energitotal[$j];
                }
                else {
                    $energis1[$j]=$energis[$j]-$energis[$j-1];
                    $energit1[$j]=$energit[$j]-$energit[$j-1];
                    $energir1[$j]=$energir[$j]-$energir[$j-1];
                    $energitotal1[$j]=$energitotal[$j]-$energitotal[$j-1];
                }
                
             }
            for ($ui=0; $ui < count($energitotal_); $ui++) { 
                if ($ui==0) {
                    $energis2[$ui]=$energis_[$ui];
                    $energit2[$ui]=$energit_[$ui];
                    $energir2[$ui]=$energir_[$ui];
                    $energitotal2[$ui]=$energitotal_[$ui];
                }
                else {
                    $d=$ui-1;
                    //
                    $energis2[$ui]=$energis_[$ui]-$energis_[$d];
                    $energit2[$ui]=$energit_[$ui]-$energit_[$d];
                    $energir2[$ui]=$energir_[$ui]-$energir_[$d];
                    $energitotal2[$ui]=$energitotal_[$ui]-$energitotal_[$d];
                }
                
            }
        for ($q=0; $q < count($energir2); $q++) { 
            echo "<tr>
                <td>".$tanggal_[$q]."</td>
                <td>".$energir2[$q]."</td>
                <td>".$energis2[$q]."</td>
                <td>".$energit2[$q]."</td>
                <td>".$energitotal2[$q]."</td>
                <td>".$energitotal2[$q]*1444.44."</td>
                </tr>";
        }
        for ($t=0; $t < count($energir1); $t++) { 
            echo "<tr>
                <td>".$tanggal[$t]."</td>
                <td>".$energir1[$t]."</td>
                <td>".$energis1[$t]."</td>
                <td>".$energit1[$t]."</td>
                <td>".$energitotal1[$t]."</td>
                <td>".$energitotal1[$t]*1444.44."</td>
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
