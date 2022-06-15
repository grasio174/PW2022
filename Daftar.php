<?php
include 'Database.php';
if (!empty($_POST['Username']) && !empty($_POST['Password']) && !empty($_POST['Nama']) && !empty($_POST['NoH']) && !empty($_POST['Email'])) {
    $nama =$_POST['Nama'];
    $noH =$_POST['NoH'];
    $email =$_POST['Email'];
    $username =$_POST['Username'];
    $password =$_POST['Password'];
  }


  $resultq=mysqli_query($db, "select Username from akun where Username='$username'");
  $result = mysqli_fetch_assoc($resultq);

  if (empty($result)){
    if ($nama != '' && $username != ''&& $noH != '' && $email != '' && $password != ''){

        $dataq=mysqli_query($db, "select Email from akun where Email='$email'");
        $data = mysqli_fetch_assoc($dataq);
        echo $data;
        if(empty($data)){
        mysqli_query($db, "insert into akun (Nama, Username, Email, Password, NoH) values ('$nama', '$username', '$email', '$password', '$noH')");
        echo '<script>
        alert("Berhasil Didaftar");
        window.location.href = "index.html";
        </script>';
        }
        else {
            echo '<script>
            alert("Email Telah Terdaftar");
            </script>';
          }
    }
    else{
        echo '<script>
        alert("Harap tidak terdapat kotak yang kosong");
        window.location.href = "Daftar.html";
        </script>';
    }
  }
  else {
    echo '<script>
    alert("Username Telah Terdaftar");
    window.location.href = "Daftar.html"; 
    </script>';
  }




?>