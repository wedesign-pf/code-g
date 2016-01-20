<?php
session_start();
unset($_SESSION['auth']);
header('Status: 301 Moved Permanently', true, 301);
header('Location: ./');
exit();
?>