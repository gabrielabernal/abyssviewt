<?php
session_start();
 unset($_SESSION['CONTRA']);
 unset($_SESSION['GRUPO']);
 unset($_SESSION['TELEF']);
 unset($_SESSION['DIREC']);
 unset($_SESSION['PRECI']);
 unset($_SESSION['CORRE']);
 unset($_SESSION['FECHA']);
 session_destroy();
?>
