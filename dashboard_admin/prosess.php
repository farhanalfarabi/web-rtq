<?php 
    include("config.php");

    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];

    $rand = rand();
    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['foto']['name'];
    $ukuran = $_FILES['foto']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    
        $xx = $rand.'_'.$filename;
        move_uploaded_file($_FILES['foto']['tmp_name'], 'images/anggota/'.$rand.'_'.$filename);
        mysqli_query($conn, "INSERT INTO anggota VALUES(NULL,'$nama','$jabatan','$xx')");            
?>

    <script type="text/javascript">
        window.location.href="index.php";
    </script>

