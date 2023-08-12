<?php 
    include("config.php");

    $id = $_GET['id'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];

    $rand = rand();
    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['foto']['name'];
    $ukuran = $_FILES['foto']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    
        $xx = $rand.'_'.$filename;
        move_uploaded_file($_FILES['foto']['tmp_name'], 'images/anggota/'.$rand.'_'.$filename);
        mysqli_query($conn, "UPDATE anggota SET nama = '$nama', jabatan = '$jabatan', foto = '$xx' WHERE id = '$id'");          
?>

    <script type="text/javascript">
        window.location.href="index.php";
    </script>

