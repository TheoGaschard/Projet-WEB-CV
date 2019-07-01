<?php

session_start();
session_destroy();

$_SESSION['logged'] = false;

header('Location:http://'.$_SERVER[HTTP_HOST].'/admin/index.php');
exit();