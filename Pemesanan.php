<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">


    <title>Pemesanan</title>

</head>
<body>
    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>
    
        <a href="#" class="logo"> <span>Enzzo </span>showroom </a>
    
        <nav class="navbar">
            <div id = "check"></div>
            <a href="index.html#beranda">beranda</a>
            <a href="index.html#kontak">kontak</a>
        </nav>
    
        <div id="login-btn">
            <div id = "log_info"></div>
            <i class="far fa-user"></i>
        </div>
    
    </header> 
        
    <div class="login-form-container">
    
        <span id="close-login-form" class="fas fa-times"></span>
    
        <form method="POST" action="Login.php">
        <div id = "log"></div>
        </form>
    
    </div>

    <section class="beranda" id="beranda">
    </section>

    <section class="kendaraan" id="kendaraan">
        <br><br><br>
        <h1 class="heading" > <span> Pemesanan</span> </h1>
        <div class = "produk" >
        <?php
        $produk =$_GET['produk'];
        setcookie('Pesan', $produk, time() + (86400 * 1), "/");
        include 'Database.php';
        $user = $_COOKIE['User'];
        $resultq=mysqli_query($db, "select * from produk where Nama_Produk = '$produk'");
        $result = mysqli_fetch_assoc($resultq);
        echo '<img src = "'.$result['Foto'].'"> <br>'; 
        ?>
        <label class="heading5">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $result["Nama_Produk"]; ?></label><br>
        <label class="heading5">Harga : Rp. <?php echo number_format($result["Harga"]); ?></label><br>
        <label class="heading3">Tinggi : <?php echo $result["Tinggi"]; ?></label>
        <label class="heading3">Tenaga : <?php echo $result["Tenaga"]; ?></label><br>
        <label class="heading3">Berat : <?php echo $result["Berat"]; ?></label>
        <label class="heading3">Mesin : <?php echo $result["Mesin"]; ?></label><br>

        </div>
        <section class="form-container">
        <form method="POST" action="Pesan.php">
            <div class="batasdaftarproduk">
                <br>
                <label for="get_nama" class="heading4">Nama Penerima: </label> <br> <input type="text" placeholder="Nama" name = "Nama" class="box">
                <br>
                <label for="get_alamat" class="heading4">Alamat : </label> <br> <input type="text" placeholder="Alamat" name = "Alamat" class="box">
                <br>
                <label for="get_noh" class="heading4">No Handphone : </label> <br> <input type="number" placeholder="No Handphone" name = "NoH" class="box">
                <br>
                <label for="get_cat" class="heading4">Catatan: </label> <br> <input type="text" placeholder="Catatan" name = "Catatan" class="box">
                <br>
                <input type="submit" value="Pesan" class="btn">
                <br>
            </div>
             </form>
    </section>
        <section class="unggulan" id="unggulan">
       
        </section>
        
<?php include 'footer.php'; ?>
        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
        <script src="js/script.js"></script>
</body>


