<?php
echo("List  :<br> <a href='/ucmdb'> http://$_SERVER[HTTP_HOST]/</a> <br><br>");
echo("Add IP:<br><a href='/ucmdb/add_ip.php?ip=192.168.121.123'> Add server 192.168.121.123 </a><br>");
echo("<a href='/ucmdb/add_ip.php?ip=192.168.121.124'> Add server 192.168.121.124 </a><br>");
echo("<a href='/ucmdb/add_ip.php?ip=192.168.121.125'> Add server 192.168.121.125 </a><br><br>");
echo("Clear :<br> <a href='/ucmdb/clear.php'> Clear List </a> <br><br>");
echo("Usage :<br> http://$_SERVER[HTTP_HOST]/ucmdb/usage.php <br>");
?>

