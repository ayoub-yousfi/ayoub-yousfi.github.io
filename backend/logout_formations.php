<?php
session_start();

session_destroy();
echo "<script>location.href='../modif_formations.php'</script>";
?>