<?php
    include("../koneksi.php");
    $sql = mysqli_query($koneksi, "SELECT * FROM hasil where PANEL='Panel7'");
    $result = array();
    while ($row = mysqli_fetch_assoc($sql)) {
        $data[] = $row;
    }
    echo json_encode( $data);
?>