<html>
<body bgcolor>
	<link rel="stylesheet" type="text/css" href="style1.css">

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Music";

//echo"$from1";
//echo"$from2";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "select id, comments from comments";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
for($i = 0; $i < $result->num_rows; $i++) 
	{
      $row = $result->fetch_assoc();
      echo "id: " . $row["id"]. "<br>";
      echo "Comments: " . $row["comments"].  "<br>"; 
  //    echo "LINK :" . $row["link"] ."<br>";
      
     
    echo "----------------------------------------"."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<form action="firstpageSorted2.php" method="post">
<button name="subject" type="submit" value="search">Main Page</button>
</form>
</body>
</html>