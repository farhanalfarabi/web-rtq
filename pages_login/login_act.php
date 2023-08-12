<?php

include '../dashboard_admin/config.php';

if(isset($_POST["tujuan"])){

    $tujuan = $_POST["tujuan"];

    if($tujuan == "LOGIN"){
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        $query_sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
        
        $result = mysqli_query($conn, $query_sql);

        if(mysqli_num_rows($result) > 0){
            header("Location: ../dashboard_admin/index.php");
        }else{
            // echo "<h2>Username atau Password Salah!</h2>";
            header("Location: login.php");
        }
    }

}


// tutup koneksi
mysqli_close($conn);
?>