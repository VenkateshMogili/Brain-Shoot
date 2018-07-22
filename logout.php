<?php
session_start();
require_once 'connect.php';
session_destroy();
header('Location: Register.php');
?>
