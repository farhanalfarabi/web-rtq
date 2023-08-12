<?php 
    include("config.php");

    $id = $_GET['id'];
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
        mysqli_query($conn, "UPDATE testimoni SET nama = '$nama', keterangan = '$keterangan', profesi = '$profesi', foto = '$xx' WHERE id = '$id'");          
?>

    <script type="text/javascript">
        window.location.href="testimoni.php";
    </script>

