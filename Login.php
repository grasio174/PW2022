<?php
include 'Database.php';
if (!empty($_POST['Username']) && !empty($_POST['Password'])) {
  $username =$_POST['Username'];
  $password =$_POST['Password'];
}
else if (empty($_POST['Username']) || empty($_POST['Password'])){
  $username ='';
  $password ='';
}

$resultq=mysqli_query($db, "select Username from akun where Username='$username' OR Email = '$username' AND Password='$password'");
$result = mysqli_fetch_assoc($resultq);
$result = implode('', $result);

if ($result == $username){
  session_start();
  $_SESSION['Username'] =  $result;
  setcookie('User', $_SESSION['Username'], time() + (86400 * 1), "/");
  echo '<script>
  alert("Login berhasil");
  window.location.href = "home.php";
  </script>';
}
else {
  echo '<script>
  alert("Periksa kembali username dan password yang diisikan");
  window.location.href = "index.html"; 
  </script>';
}
?>

