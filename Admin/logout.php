<?php
session_start();
session_destroy();
header("location:http://localhost/Travel/admin/index.php");
?>