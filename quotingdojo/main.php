<?php
	include_once('connection.php');
	$query = "SELECT * FROM quotes ORDER BY created_at DESC";
	$quotes = fetch_all($query);
?>

<!DOCTYPE html>
<hmtl lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>All the quotes</title>
</head>
<style>
</style>
<body>
	<h1>Here are all the awesome quotes!</h1>

<?php
	foreach($quotes as $quote)
	{
		$date_added = date("g:ia F d, Y", strtotime($quote['created_at']));
		echo "<p>" . $quote['text'] . "</p>" . "<p> - " . $quote['name'] . " at " . $date_added . "<p><hr>";
	}
?>
	<a href="quotingdojoindex.php">Return to Index</a>
</body>
</html>


