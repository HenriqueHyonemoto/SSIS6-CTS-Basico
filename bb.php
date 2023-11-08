<?php
session_start();
$_SESSION["nomevai"];
$_SESSION["ravai"];
session_destroy();
header("Location: http://ndlvtp.org/ava/ADS/", TRUE);
?>