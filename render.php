<?php
require("smoother.php");

$serialized = trim(file_get_contents("dreyri"));
$updates = unserialize($serialized);

var_dump(smooth_skill($updates, 0, 86400, last_update($updates)));
?>

<html>
  <head>
    <title>Smoother output</title>
  </head>
</html>
