

<?php
   
   $con = mysqli_connect('localhost','root','root');
   
   if(!$con)
   {
    echo 'Невозможно подключиться к серверу';
   }
   
   if(!mysqli_select_db($con,'parkingdb'))
   {
    echo 'Ошибка базы данных';
   }
   
   $name = $_POST['name'];
$surname = $_POST['surname'];
$carid = $_POST['carid'];
$phone = $_POST['phone'];
   
   $sql ="INSERT INTO cars (name, surname, carid, phone, date) VALUES ('$name', '$surname', '$carid', '$phone', NOW())";
   
   if(!mysqli_query($con,$sql))
   {
    echo 'Неизвестная ошибка';
   }
   
   else
   {
    echo 'Данные успешно внесены!';
   }
  
?>