<?php
include 'testinput.php';
 $servername = "localhost";

 // REPLACE with your Database name
 $dbname = "MonitoringJasamarga";
 // REPLACE with Database user
 $username = "root";
 // REPLACE with Database user password
 $password = "root";
 
 // Keep this API Key value to be compatible with the ESP32 code provided in the project page. If you change this value, the ESP32 sketch needs to match
 $api_key_value ="Panel1";
 
 $api_key = $energiR = $voltR  = $dayaR ="";
 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $api_key = test_input($_POST["api_key"]);
     if($api_key == $api_key_value) {
         $energiR = test_input($_POST["kwhr"]);
         $energiS = test_input($_POST["kwhs"]);
         $energiT = test_input($_POST["kwht"]);
         $datakwh = array($energiR,$energiS,$energiT);
         $voltR = test_input($_POST["voltr"]);
         $voltS = test_input($_POST["volts"]);
         $voltT = test_input($_POST["voltt"]);
         $dayaR = test_input($_POST['dayar']);
         $dayaS = test_input($_POST['dayas']);
         $dayaT = test_input($_POST['dayat']);
         $kwhtotal = array_sum($datakwh);
         $datadaya = array($dayaR,$dayaS,$dayaT);
         $dayatotal = array_sum($datadaya);
         $currentR = test_input($_POST["currentr"]);
         $currentS = test_input($_POST["currents"]);
         $currentT = test_input($_POST["currentt"]);
         // Create connection
         $conn = new mysqli($servername, $username, $password, $dbname);
         $sql = "INSERT INTO panel1(energis, energit, energir, voltr, volts, voltt, energitotal, currentr, currents, currentt, dayatotal) VALUES ($energiS, $energiT, $energiR, $voltR, $voltS, $voltT, $kwhtotal, $currentR, $currentS, $currentT, $dayatotal)";
         mysqli_query($conn, $query);
         // Check connection
         if ($conn->connect_error) {
             die("Koneksi Gagal :" . $conn->connect_error);
         } 
        //  $sqls = "UPDATE outputs SET state='" . $state . "' WHERE id='". $id .  "'";
        if ($currentR<200 or $currentS<200 or $currentT<200) {
            $query="INSERT INTO panel1_(energis, energit, energir, voltr, volts, voltt, energitotal, currentr, currents, currentt, dayatotal) VALUES ($energiS, $energiT, $energiR, $voltR, $voltS, $voltT, $kwhtotal, $currentR, $currentS, $currentT, $dayatotal)";
            mysqli_query($conn, $query);
        }
        //  $sql = "UPDATE hasil SET energir='" . $energiR . "'". ",". "  WHERE panel='". $api_key . "'";     
     else {
         echo "Wrong API Key provided.";
     }
     
 
 }

   ?>