<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
if(isset($_POST['submit'])) 
{
    include 'function.php';
    // $username = $_POST['username'];
    //$nama = $_POST['nama'];
    // $email = $_POST['email'];
    //$password = md5($_POST['password']);
    // $cpassword = md5($_POST['password']);
    // $status = $_POST['status'];
    // $code = md5($email.date('Y-m-d H:i:s'));
    $email = $_POST['email'];
  
    $select=mysqli_query($conn, "select email,password FROM akun WHERE email='$email'");
    if(mysqli_num_rows($select)==1)
    {
        while($row=mysqli_fetch_array($select))
        {
            $email=$row['email'];
            $password=md5($row['password']);
        }
    

            
    
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
                $mail->setFrom('from@itadminfpsi.com', 'Reset ulang password');
                $mail->addAddress($email);     
                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Reset ulang password';
                //$mail->Body    = 'Hi '.$nama.' Silahkan verifikasi akun kamu <a href="http://localhost/ticketing/verifikasi.php?code='.$code.'">VERIFIKASI</a>';
                $mail->Body    = "Hi Silahkan klik untuk mereset password <a href='http://localhost/ticketing/resetpass.php?reset=$password&key=$email'>Ganti password</a>";
                               
                if($mail->send()){
        
                    // mysqli_query($conn, "INSERT INTO akun (username, nama, email, password, status, verification_code)
                    // VALUES ('$username','$nama','$email', '$password', '$status', '$code')");
                    echo "<script> alert('Link reset password telah dikirim ke email anda, Cek email untuk melakukan reset'); window.location = 'login.php'; </script>";//jika pesan terkirim
    
                }   
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        
    }
}