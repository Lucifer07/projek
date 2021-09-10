<?php

session_start();
unset($_SESSION['username']);
unset($_SESSION['password']);
// unset($_SESSION['level']);

session_destroy();
echo "<script>alert('Sesi anda sudah habis , mohon login kembali !');document.location='../index.php'</script>";
