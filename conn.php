<?php
$email=$_GET ['email'];
$pass=$_GET ['password1'];

echo "Успешно";

$conn = new mysqli ( 
    'localhost',        
    'root',             
    '',                 
    'Naic');            

if (!$conn) { 
printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error()); 
exit; 
}

$sql = $conn->prepare ("INSERT INTO Users (Email, Password) VALUES (?, ?)");
$sql->bind_param('ss', $email, $pass);
$sql->execute();
printf("%d Row inserted.\n", $sql->affected_rows);
$sql->close();
?>

<script>location.href="index.html"</script>