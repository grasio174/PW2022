<?php
include 'Database.php';
$user = $_COOKIE['User'];
$pesan = $_COOKIE['Pesan'];
if (!empty($_POST['Nama']) && !empty($_POST['Alamat']) && !empty($_POST['NoH']) && !empty($_POST['Catatan'])) {
    $nama =$_POST['Nama'];
    $noH =$_POST['NoH'];
    $alamat =$_POST['Alamat'];
    $catatan =$_POST['Catatan'];
  }

if ($nama != '' && $alamat != ''&& $noH != '' && $catatan != ''){
    $dataq=mysqli_query($db, "select Id_User from akun where Username = '$user' OR Email = '$user'");
    $datau = mysqli_fetch_assoc($dataq);
    $dataq=mysqli_query($db, "select Id_Produk from produk where Nama_Produk='$pesan'");
    $datap = mysqli_fetch_assoc($dataq);
    $datap = implode('', $datap);
    $dataq=mysqli_query($db, "select Email from akun where Username = '$user' OR Email = '$user'");
    $datae = mysqli_fetch_assoc($dataq);
    $dataq=mysqli_query($db, "select Harga from produk where Nama_Produk='$pesan'");
    $datah = mysqli_fetch_assoc($dataq);
    $datah = implode('', $datah);


    mysqli_query($db, "insert into pemesanan (Id_User, Id_Produk, Alamat, Catatan, Penerima, NoHP) values ('$datau', '$dataup', '$alamat', '$catatan', '$nama', '$noH')");
    
    $msg = "Pemesanan Kendaraan " . ' ' . $pesan . ' ' . "Akan Segera Di Proses Setalah Melakukan Pembayaran Ke Nomor Dana 082292351340 Dengan Total Harga Senilai " . ' ' . $harga;
    $msg = wordwrap($msg,300);
    $headers .= 'Return-Path: SeconM@domain.tld' ."\r\n";
    $headers .= 'From: Sender <SeconM@domain.tld>' . "\r\n";
    
    mail($datae,"Orderan SeconM",$msg,$headers, "-f$datae");
    echo '<script>
    alert("Berhasil Dipesan Silahkan Menunggu Email Pembayaran");
    window.location.href = "home.php";
    </script>';
    }
else{
    echo '<script>
    alert("Harap tidak terdapat kotak yang kosong");
    window.location.href = "Pemesanan.php>produk="+"'.$pesan.'";
    </script>';
    }

?>