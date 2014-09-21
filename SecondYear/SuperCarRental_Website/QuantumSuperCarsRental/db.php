<?php
$db = mysql_connect('localhost','root','');
if ($db === False) die ('Fail Message');
if(mysql_select_db("cars") === False) die ("Fail Message");
?>