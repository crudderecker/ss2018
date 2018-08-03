<?php
session_start();
session_destroy();
$page = 'sshome.php';
header("refresh:0; url=" . $page);
exit;
?>