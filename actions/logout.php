<?php
session_start();

session_destroy();

header("Location: /dts-jwd/login.php");
exit();
