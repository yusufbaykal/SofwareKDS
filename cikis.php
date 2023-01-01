<?php
session_start();
ob_start();
session_destroy();
echo "<center>Çıkış yaptınız. Giriş sayfasına yönlendiriliyorsunuz.</center>";
header("Refresh: 2; url=index.php");
ob_end_flush();
?>