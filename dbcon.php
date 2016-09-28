<?php


$dbcon = mysql_connect("localhost", "root", "") or die(mysql_error());
$db = mysql_select_db("life") or die(mysql_error());

mysql_set_charset('utf8',$dbcon);

error_reporting(E_ALL ^ E_DEPRECATED);

?>