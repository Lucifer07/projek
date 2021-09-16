<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>laporan monotoring Arus Galat </title>
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
        <h1>LAPORAN MONITORING TEGANGAN GALAT PANEL6</BR></h1>
        </center>
        <table class="table">
            <thead>
                <tr>
                    <th>TANGGAL</th>
                    <th>VOLTR</th>
                    <th>VOLTS</th>
                    <th>VOLTT</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $h=date('m');
            include '../koneksi.php';
            $cek_data = mysqli_query($koneksi,"SELECT * FROM panel_ where idkey='panel6'and month(tanggal)=$h");
            foreach($cek_data as $row){
                echo "<tr>
                    <td>".$row['tanggal']."</td>
                    <td>".$row['voltr']."</td>
                    <td>".$row['volts']."</td>
                    <td>".$row['voltt']."</td>
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
