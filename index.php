<?php
	include 'header.php';
	
echo "hello world";

$sql = "SELECT * FROM user WHERE uid = 1";

$result = mysql_query($sql);

// $sql = "SELECT * FROM user";

// $result = mysql_query($sql,$link);

while ($row=mysql_fetch_array($result))
{
	//var_dump($row);
	echo $row['uid'];
}
 
?>