<?php 
    include("config.php");

    $nama = $_POST['nama'];
    $keterangan = $_POST['keterangan'];
    $profesi = $_POST['profesi'];

    $rand = rand();
    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['foto']['name'];
    $ukuran = $_FILES['foto']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    
        $xx = $rand.'_'.$filename;
        move_uploaded_file($_FILES['foto']['tmp_name'], 'images/testimoni/'.$rand.'_'.$filename);
        mysqli_query($conn, "INSERT INTO testimoni VALUES(NULL,'$nama','$keterangan','$profesi','$xx')");            
?>

    <script type="text/javascript">
        window.location.href="testimoni.php";
    </script>

