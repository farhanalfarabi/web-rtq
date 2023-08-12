<?php 
    include("config.php");

    $id = $_GET['id'];
    $nama_kegiatan = $_POST['nama_kegiatan'];
    $keterangan = $_POST['keterangan'];

    $rand = rand();
    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['foto']['name'];
    $ukuran = $_FILES['foto']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    
        $xx = $rand.'_'.$filename;
        move_uploaded_file($_FILES['foto']['tmp_name'], 'images/kegiatan/'.$rand.'_'.$filename);
        mysqli_query($conn, "UPDATE kegiatan SET nama_kegiatan = '$nama_kegiatan', keterangan = '$keterangan', foto = '$xx' WHERE id = '$id'");          
?>

    <script type="text/javascript">
        window.location.href="kegiatan.php";
    </script>

