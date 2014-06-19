<?php
include("stats.php");

$serialized = trim(file_get_contents("dreyri"));
$updates = unserialize($serialized);
?>
