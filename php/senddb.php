<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$servername = "localhost:3306";
$username = "kuaforcengiz";
$password = "Kuaforitgs2019";
$dbname = "kcdatabase";


// Create connection
$connection = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($connection->connect_error) {
    die("Bağlantı sağlanamadı: " . $connection->connect_error);
} 
$name=$_POST["isim"];
$comment=$_POST["yorum"];
$sql = "INSERT INTO comments (name, comment) VALUES ('$name', '$comment')";

if ($connection->query($sql) === TRUE) {
    echo "Yorumunuz başarıyla eklenmiştir.";
} else {
    echo "Hata: " . $sql . "<br>" . $connection->error;
}

$connection->close();
?>
</body>
</html>