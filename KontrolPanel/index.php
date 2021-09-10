<?php
session_start();
if (empty($_SESSION['username'])) {
    echo "<script>alert('Maaf, untuk mengakses halaman ini, anda harus login terlebih dahulu, terima kasih');document.location='../index.php'</script>";
}
if (isset($_SESSION['username'])){


$_SESSION['login_user_time']=time();
}
// ini maksudnya untuk board 1 ,untuk board 2 dst, ini mengambil baris per baris data pada database , jadinya mudah nanti menampilkan relaynya. (ada html_buttons dari 1 sampai 11)
?>
<?php
    // File ini digunakan untuk memanggil board yang ada pada database berdasarkan ID (RA,SA,TA,RB,SB,TB) 
    include 'esp-database.php';
    include 'dataLineRelay/DataRa.php';
    include 'dataLineRelay/DataRaS.php';
    include 'dataLineRelay/DataRat.php';
    include 'dataLineRelay/DataRb.php';
    include 'dataLineRelay/DataRbs.php'; 
    include 'dataLineRelay/DataRbt.php'; 
    $resultreq = getAllBoards();
    $html_boards = null;
    if ($resultreq) {
        $html_boards .= '<h3>Boards</h3>';
        while ($rowreq = $resultreq->fetch_assoc()) {
            $row_reading_time = $rowreq["last_request"];
            // Uncomment to set timezone to - 1 hour (you can change 1 to any number)
            //$row_reading_time = date("Y-m-d H:i:s", strtotime("$row_reading_time - 1 hours"));

            // Uncomment to set timezone to + 4 hours (you can change 4 to any number)
            //$row_reading_time = date("Y-m-d H:i:s", strtotime("$row_reading_time + 7 hours"));
            $html_boards .= '<p><strong>Board ' . $rowreq["board"] . '</strong> - Last Request Time: '. $row_reading_time . '</p>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="240;url=index.php" />
    <title>PJU Remote Access</title>
    <!-- Bootstrap core CSS , Javascript -->
    <link rel="shortcut icon" href="../dist/img/Jasamarga_Bali.ico" type="image/x-icon">
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="../dist/css/bootstrap.css" rel="stylesheet"> 
    <link href="../dist/css/bootstrap-grid.css" rel="stylesheet"> 
    <link href="../dist/css/bootstrap-grid.min.css" rel="stylesheet"> 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <link href="../dist/css/esp-style.css" rel="stylesheet" > -->
    <!-- <script
			  src="https://code.jquery.com/jquery-3.6.0.js"
			  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
			  crossorigin="anonymous"></script> -->
</head>
<!-- style CSS untuk setiap button ! pada relay -->
<style>

    html {
        font-family: Arial;
        display: inline-block;
        text-align: center ;
    }

    h2 {
        font-size: 3.0rem;
    }

    body {
        max-width: 1440px;
        margin:0px auto;
        padding-bottom: 25px;
    }

    .switch {
        position: relative;
        display: inline-block;
        width: 55px;
        height: 28px;
        cursor :pointer;
    }

    .switch input {
        display: none
    }

    .slider {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #949494;
        border-radius: 34px;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 12px;
        width: 12px;
        left: 8px; bottom: 8px;
        background-color: #fff;
        -webkit-transition: .4s;
        transition: .4s;
        border-radius: 68px;
    }

    input:checked+.slider {
        background-color: #008B74;
    }

    input:checked+.slider:before {
        -webkit-transform: translateX(32px);
        -ms-transform: translateX(32px);
        transform: translateX(32px);
    }

    input[type=text], input[type=number], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #008B74;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #005a4c;
    }

    div {
        text-align: left;
        border-radius: 4px;
        background-color: #efefef;
        padding: 20px;
    }

</style>

    <body>
    <script type="text/javascript">
function checkUserTime()
	{
		$.ajax({
			url:"autologout.php",
			method:"post",
			success:function(response)
			{
				if(response=='Logout')
				{
					window.location.href="logout.php";
				}
			}
		});	
	}
	setInterval(function(){
		checkUserTime();
	},2000);
</script>
        <script language="JavaScript">
            var tanggallengkap = new String();
            var namahari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu");
            namahari = namahari.split(" ");
            var namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember");
            namabulan = namabulan.split(" ");
            var tgl = new Date();
            var hari = tgl.getDay();
            var tanggal = tgl.getDate();
            var bulan = tgl.getMonth();
            var tahun = tgl.getFullYear();
            tanggallengkap = namahari[hari] + ", " +tanggal + " " + namabulan[bulan] + " " + tahun;
            </script>
            <div class="container bg-white ">
                <div class="jumbotron jumbotron-fluid text-center bg-primary text-white ">
                    <h1 class="display-30">PT. JASAMARGA BALI TOL </h1>
                    <input type="hidden" name="username" value="<?= $_SESSION['username'] ?>">
                    <p class="">Remote access Lampu Penerangan Jalan Umum TOL Bali Mandara</p>
                    <script language='JavaScript'>document.write(tanggallengkap);</script>
                    <hr class="my-10 bg-light">
                  
                    <a class="btn btn-danger btn-md  " href="../logout.php" role="button">Keluar</a>
                    <a class="btn btn-warning btn-md" href="index.php" name="go" >Refresh</a>
                    <a class="btn btn-success btn-md  " href="../panel1/" role="button">Monitoring Panel</a>
                    <!-- <a class="btn btn-success btn-md " href="gantipass.php" role="button">Ganti Password</a> -->
                </div>   
                 <!-- Awal penampilkan Switch Relay dan function ping  -->
                <div class="table-responsive bg-white">  
                    <table class="table table-hover table-primary ">
                        <thead >
                            <tr class="bg-primary">
                                <th scope="col" style="color:white">ID</th>
                                <th scope="col" style="color:white">LOKASI PANEL </th>
                                <th scope="col" style="color:white">STATUS</th>
                                <!-- <th scope="col" style="color:white">ON/OFF</th> -->
                                <th scope="col"></th>
                                <th scope="col" style="color:white">LINE A</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col" style="color:white">LINE B</th>
                                <th scope="col"></th>
                                <!-- <th scope="col"></th> -->
                            </tr>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                             
                                <th scope="col"  style ="color:red; font-size:20px">&ensp;&ensp;R</th>
                                <th scope="col"  style ="color:orange; font-size:20px">&ensp;&ensp;S</th>
                                <th scope="col"  style ="font-size:20px">&ensp;&ensp;T</th>
                                <th scope="col"  style ="color:red; font-size:20px">&ensp;&ensp;R</th>
                                <th scope="col"  style ="color:orange; font-size:20px">&ensp;&ensp;S</th>
                                <th scope="col"  style ="font-size:20px">&ensp;&ensp;T</th>
                            
                            </tr>
                        </thead>
                        <tbody>
               
                    <?php 

                    function ping($host){
                        $str = exec("ping -n 1 -w 1 $host", $input, $result);
                        if ($result == 0){
                            return '<span style="color:green";font-weight:bold> On </span><br>';
                        }else{
                            return '<span style="color:Red"; "font-weight:bold"> Off </span><br>';
                        }
                        
                    }
            
                            $DataRa     =[$html_buttons,$html_buttons2,$html_buttons3,$html_buttons4,$html_buttons5,$html_buttons6,$html_buttons7,$html_buttons8,$html_buttons9,$html_buttons10];
                            $DataRas    =[$Button_Ras,$Button_Ras2,$Button_Ras3,$Button_Ras4,$Button_Ras5,$Button_Ras6,$Button_Ras7,$Button_Ras8,$Button_Ras9,$Button_Ras10];
                            $DataRat    =[$Button_Rat,$Button_Rat2,$Button_Rat3,$Button_Rat4,$Button_Rat5,$Button_Rat6,$Button_Rat7,$Button_Rat8,$Button_Rat9,$Button_Rat10];
                            $DataRb     =[$Button_Rb,$Button_Rb2,$Button_Rb3,$Button_Rb4,$Button_Rb5,$Button_Rb6,$Button_Rb7,$Button_Rb8,$Button_Rb9,$Button_Rb10];
                            $DataRbss   =[$Button_Rbs,$Button_Rbs2,$Button_Rbs3,$Button_Rbs4,$Button_Rbs5,$Button_Rbs6,$Button_Rbs7,$Button_Rbs8,$Button_Rbs9,$Button_Rbs10,];
                            $DataRbt    =[$Button_Rbt,$Button_Rbt2,$Button_Rbt3,$Button_Rbt4,$Button_Rbt5,$Button_Rbt6,$Button_Rbt7,$Button_Rbt8,$Button_Rbt9,$Button_Rbt10];
                            $Dataip     =['192.168.1.12','192.168.1.14','192.168.1.16','192.168.1.18','192.168.1.19','192.168.1.21','192.168.1.22','192.168.1.25','192.168.1.27','192.168.1.29'];
                            $DataLokasi =['0+360','2+260','4+700','5+760','7+400','OFF RAMP BENOA','AKSES BENOA','U-TURN AKSES BENOA','1N+100','0N+100'];
                            $count=0;
                                for($i=0;$i<=count($DataRa)-1;$i++){
                                    $count+=1;
                                    echo '<tr><th scope="col">'.$count.'</th>'.'<td scope="col">'.$DataLokasi[$i]."</td>".'<td scope="row">'.'<span id="ip_"'.$count.'>'.ping($Dataip[$i]).'</span>'."</td>".'<td scope="col">'.$DataRa[$i]."</td>".'<td scope="col">'.$DataRas[$i]."</td>".'<td scope="col">'.$DataRat[$i]."</td>".'<td scope="col">'.$DataRb[$i]."</td>".'<td scope="col">'.$DataRbss[$i]."</td>".'<td scope="col">'.$DataRbt[$i]."</td>";
                                }

                        ?>
                
                
                        </tbody>
                    </table>
                    <!-- Akhir penampilkan Switch Relay dan function ping  -->
                    </div>  
                </div>
                
        <!-- API  -->

            <script>
                function updateOutput(element) {
                    var xhr = new XMLHttpRequest();
                    if(element.checked){
                        xhr.open("GET", "esp-outputs-action.php?action=output_update&id="+element.id+"&state=1", true);
                    }
                    else {
                        xhr.open("GET", "esp-outputs-action.php?action=output_update&id="+element.id+"&state=0", true);
                    }
                    xhr.send();
                }

                function deleteOutput(element) {
                    var result = confirm("Want to delete this output?");
                    if (result) {
                        var xhr = new XMLHttpRequest();
                        xhr.open("GET", "esp-outputs-action.php?action=output_delete&id="+element.id, true);
                        xhr.send();
                        alert("Output deleted");
                        setTimeout(function(){ window.location.reload(); });
                    }
                }

                function createOutput(element) {
                    var xhr = new XMLHttpRequest();
                    xhr.open("POST", "esp-outputs-action.php", true);

                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                    xhr.onreadystatechange = function() {
                        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                            alert("Output created");
                            setTimeout(function(){ window.location.reload(); });
                        }
                    }
                    var outputName = document.getElementById("outputName").value;
                    var outputBoard = document.getElementById("outputBoard").value;
                    var outputGpio = document.getElementById("outputGpio").value;
                    var outputState = document.getElementById("outputState").value;
                    var httpRequestData = "action=output_create&name="+outputName+"&board="+outputBoard+"&gpio="+outputGpio+"&state="+outputState;
                    xhr.send(httpRequestData);
                }
            </script>
    </body>

</html>
