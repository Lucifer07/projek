<?php
    include("../koneksi.php");
    //untuk hapus data agar jadi1
    $h=date('d');
    $b=date('m');
    $bln=(int)$b;
    $sql =mysqli_query($koneksi, "SELECT max(energitotal) FROM panel1 WHERE day(tanggal)='$h' and month(tanggal)='$bln' ");
    $dapat=mysqli_fetch_array($sql);
    $data=$dapat['max(energitotal)'];
    $sql2 =mysqli_query($koneksi, "SELECT energitotal FROM panel1 WHERE day(tanggal)='$h' and month(tanggal)='$bln' ");
    $jumlah = mysqli_num_rows($sql2);
    if ($jumlah>1) {
        $query="DELETE from panel1 where energitotal<'$data' and day(tanggal)='$h' and month(tanggal)='$bln' ";
        mysqli_query($koneksi, $query);
    }
    $sql3 =mysqli_query($koneksi, "SELECT * FROM panel1 WHERE month(tanggal) between $bln-1 and '$bln' ");
    while ($row = mysqli_fetch_assoc($sql3)) {
        $data1[] = $row;
    }
    echo json_encode( $data1);
?>