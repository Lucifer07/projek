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
         // Create connection
         $conn = new mysqli($servername, $username, $password, $dbname);
         // Check connection
         if ($conn->connect_error) {
             die("Koneksi Gagal :" . $conn->connect_error);
         } 
        //  $sqls = "UPDATE outputs SET state='" . $state . "' WHERE id='". $id .  "'";

        //  $sql = "UPDATE hasil SET energir='" . $energiR . "'". ",". "  WHERE panel='". $api_key . "'"; 
         $sql = "UPDATE hasil SET energitotal='" . $kwhtotal . "'".",energir=".$energiR.", energis=".$energiS.",energit=".$energiT.
                ",voltr=".$voltR.", volts=".$voltS.",voltt=".$voltT.",dayatotal=".$dayatotal." WHERE panel='Panel1'"; 
        // $sql = "UPDATE hasil SET voltr='".$voltR."',energir='".$energiR."',dayatotal='".$dayaR."'where panel='Panel1'"; 
         
         if ($conn->query($sql) === TRUE) {
             echo "Record baru sukses ditambahkan";
         } 
         else {
             echo "Error: " . $sql . "<br>" . $conn->error;
         }
     
         $conn->close();
     }
     else {
         echo "Wrong API Key provided.";
     }
     
 
 }

   ?>