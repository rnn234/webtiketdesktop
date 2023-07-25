<?php 

 
session_start(); 
 
include 'function.php';
 
// error_reporting(0);
 
// if (isset($_SESSION['user'])) {
//     header("Location:home.php");
// }
 
// if (isset($_POST['submit'])) {
//     $email = $_POST['email'];
//     $password = md5($_POST['password']);
//     $sql = "SELECT * FROM akun WHERE email='$email' AND password='$password'";
//     $result = mysqli_query($conn, $sql);
//     $cek = mysqli_num_rows($result); 
    
//     if($cek > 0){
//         $verif = mysqli_fetch_assoc($result);
//         if($verif['is_verif'] == '1'){
//             $username = $verif['username'];
//             $_SESSION['user'] = $username;
//             echo "<script>alert('login berhasil');window.location='home.php'</script>";
//         }else{
//             echo "<script>alert('harap verifikasi akun anda terlebih dahulu');window.location='login.php'</script>";
//         }
        
//     }else{
//         echo "<script>alert('email atau password salah');window.location='login.php'</script>";
//     }
    
    

// }

 
// if(isset($_POST['submit'])){
//     if(login($_POST) > 0){
//         echo"<script>alert('berhasil menambahkan report!');document.location.href='index.php'</script>";
//     }
// }
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">
 
    <title>Niagahoster Tutorial</title>
</head>
<body>
    <div class="alert alert-warning" role="alert">
        <!-- echo $_SESSION['error']?> -->
    </div>
 
    <div class="container">
        <form action="proses-resetpw.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <label for="">masukkan email anda</label>
                <input type="email" placeholder="Email" name="email" required>
            </div>
            
            <div class="input-group">
                <button type="submit" name="submit" class="btn">submit</button>
            </div>
            <p class="login-register-text">? <a href="login.php">Login</a></p>
        </form>
    </div>
</body>
</html>
