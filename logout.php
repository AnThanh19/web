<?php
require "./login.php";

setcookie("fullName", "", -1, "/");
session_destroy();

echo '<script>localStorage.clear();location.replace("./");</script>';