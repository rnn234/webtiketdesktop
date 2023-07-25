<?php 
 
session_start();
include 'function.php';
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
//     $_SESSION['username'] = array(
//     'username' => $username
// );
}


?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Berhasil Login</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Fakultas Psikologi</title>
</head>
<body>
<div class="container">
    <div class="sidebar">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="logoui.png" alt="">
                </span>
                <div class="text header-text">
                    <span class="name">Fakultas Psikologi</span>
                    <span class="profession">Tim IT Fakultas</span>
                </div>
            </div>            

            <i class='bx bx-chevron-right toggle'></i>
        </header>
        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-link">
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bxs-tachometer icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bxs-printer icon' ></i>
                            <span class="text nav-text">Perangkat Fakultas</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-comment-error icon'></i> 
                            <span class="text nav-text">Masalah</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-history icon'></i> 
                            <span class="text nav-text">Riwayat</span>
                        </a>
                    </li>                          
                </ul>
            </div>
            <div class="bottom-content">
                <li class="">
                    <a href="logout.php">
                        <i class='bx bx-log-out icon'></i> 
                        <span class="text nav-text">Log-Out</span>
                    </a>
                </li>   
                <li class="mode">
                    <div class="moon-sun">
                        <i class='bx bx-moon icon moon'></i> 
                        <i class='bx bx-sun icon sun'></i> 
                    </div>
                    <span class="mode-text text">Tema</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
            </div>
        </div>
    </div>

    <!-- ======= Main ======= -->
    <div class="main">
        <div class="title">
            <h1>Aduan Masalah</h1>
        </div>
        <!-- ======== card list ========  -->
        <div class="cardlist">
            <div class="cardBox">
                <div class="card">
                    <div class="list">
                        <div class="top">
                            <div class="iconBx">
                                <span class="number">1.</span>
                            </div>
                            <div class="text-report">
                                <div class="cardName">Prof. Dr. Shaka Aufa M.kom</div>
                                <div class="problemText">Masalah jaringan | H-109</div>
                            </div>
                        </div>
                        <div class="button-nav">
                            <span class="btn-biru">
                                <a href="#">Detail</a>
                            </span>
                            <span class="btn-hijau">
                                <a href="#">Tangani</a>
                            </span>
                        </div>
                    </div>                
                </div>
            </div>
        </div>
        
        <!-- ======== end card list ========  -->
    </div>
    <!-- ======= end Main ======= -->
</div>





<script src="script.js"></script>
</body>
</html>
</body>
</html>