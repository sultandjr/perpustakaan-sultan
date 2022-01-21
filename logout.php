<?php
session_start();
session_destroy();
header('location:index.php')
?>
<script>
alert('Anda Berhasil Logout !');
windows.location.href='index.php';
</script>