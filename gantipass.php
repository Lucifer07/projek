<?php
session_start();
if (empty($_SESSION['username'])) {
    echo "<script>alert('Maaf, untuk mengakses halaman ini, anda harus login terlebih dahulu, terima kasih');document.location='index.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PJU Remote Access </title>
    <!-- Bootstrap core CSS -->

    <link href="dist/css/bootstrap.min.css" rel="stylesheet"> 
</head>
<body>
<div class="container">
<div class="card">
            <div class="card-header bg-primary text-white">
                Ganti Password 
            </div>
            <div class="card-body">
                <form method="post" action="ganti_password.php">
                    <input type="hidden" name="username" value="<?= $_SESSION['username'] ?>">
                    <div class="form-group">
                        <label>Masukkan Password Lama Anda!</label>
                        <input type="password" class="form-control" name="pass_lama" required>
                    </div>
                    <div class="form-group">
                        <label>Masukkan Password Baru Anda!</label>
                        <input type="password" class="form-control" name="pass_baru" required>
                    </div>
                    <div class="form-group">
                        <label>Konfirmasi Password Baru Anda!</label>
                        <input type="password" class="form-control" name="konfirmasi_pass" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <input type="button" class="btn btn-danger" value="Cancel" onClick="document.location.href='panel1/';" />
                </form>
            </div>
        </div>
        </div>
</body>
</html>