<?php
require './conn.php';

$a = mysql_query("select * from mock_data") or die(mysql_error());
echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>name</th>";
echo "<th>phone</th>";
echo "<th>gender</th>";
echo "</tr>";

while($b=mysql_fetch_row($a)){
echo "<tr>";
echo "<td>$b[0]</td><td>$b[1]</td><td>$b[2]</td><td>$b[3]</td>" ;
echo "</tr>";

}
echo "</table>";








?>