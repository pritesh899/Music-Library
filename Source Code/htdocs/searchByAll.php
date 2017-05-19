<html>
<body >
	<link rel="stylesheet" type="text/css" href="style1.css">

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Music";
$album = $_POST['All'];

//echo "You searched for : " . $album1 .;  
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "select A.artist_name,T.track_name,G.genre_name,Al.album_name,T.year,T.link from Artist A join Tracks T join Genre G join Album al on A.id=T.id AND T.genre_id=G.genre_id AND Al.album_id=T.album_id where Al.album_name like '%$album%' or G.genre_name like '%$album%' or A.artist_name like '%$album%' or T.track_name like '%$album%' or T.lyrics like '%$album%' or T.year like '%$album%'";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
for($i = 0; $i < $result->num_rows; $i++) 
	{
      $row = $result->fetch_assoc();
      echo "Artist name: " . $row["artist_name"]. "<br>";
      echo " Track Name: " . $row["track_name"].  "<br>"; 
      echo " Genre: " . $row["genre_name"] . "<br>";
      echo "Album Name :" . $row["album_name"] ."<br>";
      echo "Year :" . $row["year"] . "<br>";
   //   echo "LINK :" . $row["link"] ."<br>";
      
      $ho = $row["link"];
      
          echo "<audio controls='controls'>";
	echo "<source src='$ho'  />";
	echo "</audio>";
    echo "<br>";
    echo "----------------------------------------"."<br>";
    }
} else {
    echo "<h1>0 results</h1>";
}
 $conn->query($sql1);
$conn->close();
?>
<form action="firstpageSorted2.php" method="post">
<button name="subject" type="submit" value="search">Main Page</button>
</form>
</body>
</html>