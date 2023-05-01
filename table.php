<?php
require './connection.php';

$a = mysql_query("select * from student") or die(mysql_error());
echo "<table border='1'>";
echo "<tr>";
echo"<th>id</th>";
echo"<th>name</th>";
echo"<th>gender</th>";
echo"<th>mobile</th>";
echo "</tr>";
while($b = mysql_fetch_row($a))
{

echo "<tr>";
echo "<td>$b[0]</td><td>$b[1]</td><td>$b[2]</td><td>$b[3]</td><td>$b[4]</td>";
echo "</tr>";

}
echo "</table>"
?>