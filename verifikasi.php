<?php
include 'function.php';
$code = $_GET['code'];

if(isset($code)){
    $sql = "select * from akun where verification_code='$code'";
    $result = mysqli_query($conn, $sql);
    $data= mysqli_fetch_assoc($result);

    mysqli_query($conn, "update akun set is_verif=1 where id='".$data['id']."'");
    echo "<script>alert('verifikasi berhasil');window.location='login.php'</script>";
}