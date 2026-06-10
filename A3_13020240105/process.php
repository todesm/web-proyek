<?php
 if (isset($_POST['username']) && isset($_POST['pasword'])){
    $username = $_POST['username'];
    $pasword = $_POST['pasword'];
   

    if ($username == 'username' && $pasword == 'pasword'){
        $_SESSION['username'] = $username;
        echo 'selamat datang '. $_SESSION['username'];
        header("location: home.php");
    } else {
        echo "<script>alert('username atau pasword salah!');</script>";
        echo '<script>window.location.href = "INDEX.PHP"</script>';
    }
    } else {
        echo "<script>alert('username atau pasword kosong!');</script>";
    }
 
 ?>