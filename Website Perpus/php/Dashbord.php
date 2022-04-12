<?php
    session_start();

    if(!isset($_SESSION['username']))
    {
        header("Location: HalamanLogin.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body class="HalamanDashbord">
    <!-- Nav Bar -->
    <div class="wrapper">
        <nav>
            <div class="kontainer-flex">
                <div class="brand">
                    <a class="Dashbord" href="Dashbord.php">Perpustakaan Online</a>
                </div>
                <div class="burger">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
                <div class="bg-sidebar"></div>
                <ul class="sidebar">
                    <li><a href="#listBook">Daftar Buku</a></li>
                    <li><a href="#addBook">Tambahkan Buku</a></li>
                    <li><a href="#deleteBook">Hapus Buku</a></li>
                    <li><a href="LogOut.php">Log Out</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="displayDashbord">
        <!-- Hero Section -->
        <div>
            <form action="" method="POST" class="login-email">
                <?php echo "<h1>Halo ". $_SESSION['username'] .",</h1>" ?>
                <p class="tanya">Mau Baca apa hari ini?</p>
                <img class="reading" src="reading.svg">
            </form>
        </div>
    </div>

    <script src="animation.js"></script>
</body>
</html>