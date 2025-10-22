<?php

  $mysqli = new mysqli("localhost","2415267","Bhubindra90@90@@","db2415267");

  if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }
?>
