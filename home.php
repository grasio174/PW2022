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
    <title>Home</title>

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
       
    </div>

</header> 
    
<div class="login-form-container">

    <span id="close-login-form" class="fas fa-times"></span>

    <form action="">
        <div id = "log"></div>
    </form>

</div>

<section class="beranda" id="beranda">
</section>

<section class="kendaraan" id="kendaraan">
<br><br><br>
    <h1 class="heading"> Produk Yang <span> Tersedia</span> </h1>

    <input type="button" value="Grid View" onclick = "grid()" class="btn"></a> 
    <input type="button" value="Swipe View" onclick = "swip()" class="btn"></a> 
    <label for="terendah" class="btn1 kanan">Harga Terendah: </label> <input type="number" id = 'terendah' class="btn2 kanan"></a> 
    <label for="tertinggi" class="btn1 kanan">Harga Tertinggi: </label> <input type="number" id = 'tertinggi' class="btn2 kanan"></a> 


    <div class="swiper kendaraan-slider">
        <div class="swiper-wrapper" id = "swip">
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>


<section class="unggulan" id="unggulan">
    <div class="swiper unggulan-slider">
       <div class="swiper-wrapper" id = "swipview" >
       </div>
    </div>
</section>
<?php
include 'Data.php';
?>




<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>

