<?php
$con = mysqli_connect('localhost','root','root','parkingdb');
$enteredidcar= $_POST['idcar'];
$result = mysqli_query($con,"DELETE FROM cars WHERE carid = '".$enteredidcar."'");

echo "<table border='1'>
<tr>
Запись удалена!
</tr>";


mysqli_close($con);
?>