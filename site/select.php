<?php
$con = mysqli_connect('localhost','root','root','parkingdb');
$enteredidcar= $_POST['idcar'];
$result = mysqli_query($con,"SELECT name, carid FROM cars WHERE carid = '".$enteredidcar."'");

echo "<table border='1'>
<tr>
<th>Ваша бронь:</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['carid'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>