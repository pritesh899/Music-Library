<html>
<body bgcolor="#E6E6FA">
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Music";
$comments1 = $_POST['comment'];
echo $comments1;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql1 = "INSERT INTO  comments (comments)
VALUES ('$comments1')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in Artist Table";
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}
 $conn->query($sql1);
$conn->close();
</body>
</html>