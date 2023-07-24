<?php
include 'function.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $status = $_POST['status'];
    $code = md5($email.date('Y-m-d H:i:s'));

//Load Composer's autoloader
require './vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'fakultaspsikologiad@gmail.com';                     //SMTP username
    $mail->Password   = 'bezpkjqvkkevnkvv';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('from@itadminfpsi.com', 'verifikasi');
    $mail->addAddress($email,$nama);     
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Verifikasi akun';
    $mail->Body    = 'HI '.$nama.' Silahkan verifikasi akun kamu <a href="http://localhost/ticketing/verifikasi.php?code='.$code.'">VERIFIKASI</a>';

    if($mail->send()){
        mysqli_query($conn, "INSERT INTO akun (username, nama, email, password, status, verification_code)
        VALUES ('$username','$nama','$email', '$password', '$status', '$code')");
        
    echo "<script>alert('registrasi berhasil, silahkan cek email untuk verifikasi akun</script>";
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
