<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="../css/index-style.css">
</head>

<body>
<div id="Comments">
<?php
$servername = "localhost:3306";
$username = "kuaforcengiz";
$password = "Kuaforitgs2019";
$dbname = "kcdatabase";

// Create connection
$connection = new mysqli($servername, $username, $password, $dbname);
// Check connection 
if ($connection->connect_error) {
    die("Bağlantı kurulamadı: " . $connection->connect_error);
} 

$sql = "SELECT name, comment FROM comments";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<center>" .$row["comment"]."<br>" . $row["name"]."<p>";
    }
} else {
    echo "0 results";
}

$connection->close();
?> 
</div>
</body>
</html>