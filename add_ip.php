<?php
  file_put_contents('/tmp/inventory.txt', $_GET["ip"]."\n", FILE_APPEND);
  echo "OK";
?>
