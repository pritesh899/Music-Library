<!DOCTYPE html>
<html>
<body >
<head>
	<title>Music Search Page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<center>
<img class="logo" name="Music Libary" src="images/music library.jpg" style="width:350px;height:150px" >
</center>

<body>
<div id="frm">
<center>

<form  action="searchByAll.php" method="POST">	
<label ><font face="Lucida Console" size="3"><input class="search_bar" type="text" placeholder="Songs, Artists, Lyrics, Genre etc." id="All" name="All" size="35"/></font>
</label>
</font>

<button class="search_button" name="subject" type="submit" value="search">Search</button>

</center>

</form>

<center>
<h2><center>Search By</h2>
<form action="SearchByArtist1.php" method="POST">	
<button class="button" name="subject" type="submit" value="search">Artist</button>
</form>
<br/>

<div>
<form action="searchBySong1.php" method="POST">	
<button class="button" name="subject" type="submit" value="search">Songs</button>
</form>
<br/>
<form action="searchByAlbum1.php" method="POST">	
<button class="button" name="subject" type="submit" value="search">Album</button>
</form>
<br/>
<form action="searchByGenre1.php" method="post">
<button class="button" name="subject" type="submit"  value="search">Genre</button>
</form>
<br/>
<form action="searchByMood1.php" method="post">
<button class="button" name="subject" type="submit" value="search">Mood</button>
</form>
<br/>
<form action="searchByYear1.php" method="POST">	
<button class="button" name="subject" type="submit" value="search">Year</button>
</form>
<br/>
<form action="searchByMostPlayed.php" method="post">
<button class="button" name="subject" type="submit" value="search">Most Played</button>
</form>
<br/>
<form action="searchByLatest.php" method="post">
<button class="button" name="subject" type="submit" value="search">Latest</button>
</form>
<br/>
<br/>
</center>

<center>
<form action="insert1.php" method="POST">	
<label class="comments_title">Add your comments here to be reviewed by the admins about the content </label>
<br/>
<input class="comments_textbox" type="text" id="user" placeholder="Comments" name="user" />
<button class="comments_submitbutton" name="subject" type="submit" value="search">Submit</button>
</form>

<form action="viewComments.php" method="POST">	
<button class="viewcomments_button" name="subject" type="submit" value="search">View Comments</button>
</form>

</center>
</body>
</html>