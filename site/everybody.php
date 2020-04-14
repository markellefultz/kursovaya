<?php
$con = mysqli_connect('localhost','root','root','parkingdb');
$enteredidcar= $_POST['idcar'];
$result = mysqli_query($con,"SELECT * FROM cars");

echo "<table border='1'>
<tr>
<th>Все записи:</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['surname'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "<td>" . $row['carid'] . "</td>";
echo "<td>" . $row['date'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>