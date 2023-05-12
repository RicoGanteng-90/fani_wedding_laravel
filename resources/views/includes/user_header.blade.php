<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/head.css">
</head>

<body>

    <header class="header">

        <section class="flex">

            <a class="logo" href="index.php">
                <img class="z" src="images/logofanny.png" width="35" height="35"> &nbsp; Fanny Wedding
                Organizer
            </a>

            <nav class="navbar">
                <a href="/">Beranda</a>
                <a href="about.php">Tentang</a>
                <a href="menu.php">Produk</a>
                <a href="orders.php">Order</a>
                <a href="/kontak">Kontak</a>
                <a href="showreview.php">Testimoni</a>
            </nav>

            <div class="icons">
               
                <a href="search.php"><i class="fas fa-search"></i></a>
                <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>()</span></a>
                <div id="user-btn" class="fas fa-user"></div>
                <div id="menu-btn" class="fas fa-bars"></div>
            </div>

            <div class="profile">
               
                <p class="name">Ceritanya</p>
                <div class="flex">
                    <a href="profile.php" class="btn">Profil</a>
                    <a href="components/user_logout.php" onclick="return confirm('keluar dari web WoFy?');"
                        class="delete-btn">keluar</a>
                </div>
                <p class="account">
                    <a href="login.php">Masuk</a> /
                    <a href="register.php">Daftar</a>
                </p>
            </div>

        </section>

    </header>
</body>

</html>
