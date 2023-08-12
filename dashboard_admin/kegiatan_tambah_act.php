<?php 
    include("config.php");

    $nama_kegiatan = $_POST['nama_kegiatan'];
    $keterangan = $_POST['keterangan'];

    $rand = rand();
    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['foto']['name'];
    $ukuran = $_FILES['foto']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    
        $xx = $rand.'_'.$filename;
        move_uploaded_file($_FILES['foto']['tmp_name'], 'images/kegiatan/'.$rand.'_'.$filename);
        mysqli_query($conn, "INSERT INTO kegiatan VALUES(NULL,'$nama_kegiatan','$keterangan','$xx')");            
?>

    <script type="text/javascript">
        window.location.href="kegiatan.php";
    </script>

