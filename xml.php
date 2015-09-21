<?php
header("Content-type:text/xml");
mysql_connect("localhost","root","");
$result = mysql("hr","SELECT LastName,FirstName from Employees ORDER BY LastName, FirstName");

$i=0;
echo "<data_mahasiswa>";
while ($i < mysql_num_rows($result)) {
	$fields = mysql_fetch_row($result);
	echo "<nama>$fields[1] $fields[0] </nama>\r\n";
	$i++;
}
echo "</data_mahasiswa>";
mysql_close();
?>