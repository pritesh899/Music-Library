<!DOCTYPE html>
<html>
<body bgcolor="#E6E6FA">
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<img src="http://cmitelementary.org/newsletters/2015/30/Music-Notes.jpg" alt="W3Schools.com">
<img src="https://s-media-cache-ak0.pinimg.com/originals/d4/63/47/d46347aefcc72e46d6cfa330e6c83e5c.gif" />
<body>
	<div id="frm">
		<form action="connect1.php" method="POST">	
			<button name="subject" type="submit" value="search">Artist</button>

		</form>
		<form action="php_checkbox.php" method="post">
<label class="heading">Genre:</label>
<input type="checkbox" name="check_list[]" value="rock"><label>rock</label>
<input type="checkbox" name="check_list[]" value="pop"><label>pop</label>
<input type="checkbox" name="check_list[]" value="hip"><label>hip</label>
<input type="checkbox" name="check_list[]" value="clasical"><label>clasical</label>
<input type="checkbox" name="check_list[]" value="jazz"><label>jazz</label>
<input type="submit" name="submit" Value="Submit"/>
<!----- Including PHP Script ----->
<?php include 'checkbox_value.php';?>
</form>
<form action="connect.php" method="POST">	
<label class="Year">Year :</label>
			<p>
				<label>from:
				<input type="text" id="from" name="from" />
			</p>	
			<p>
				<label>to:
				<input type="text" id="to" name="to" />
			</p>	
</body>
</html>