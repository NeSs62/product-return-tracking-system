<?php
session_start();
session_unset();
header("location:adminpage.php");
?>