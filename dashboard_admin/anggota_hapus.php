<?php
     include("config.php");

     $id = $_GET['id'];
     $sql = "DELETE FROM anggota WHERE id = '$id'";
     $query = mysqli_query($conn, $sql);
?>

<script type="text/javascript">
     window.location.href="index.php";
</script>