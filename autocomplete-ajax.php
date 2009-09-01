<?php
$link = mysql_connect('localhost', 'user', 'password');
if (!$link) 
{
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('database_name')) 
{
    exit;
}

$text = mysql_real_escape_string($_GET['text']);

$sql = 'SELECT id,title FROM posts WHERE title LIKE "%'. $text . '%" LIMIT 5';

$result = mysql_query($sql);

while ($row = mysql_fetch_assoc($result)) 
{
	$posts[] = array($row['id'] => $row['title']);
}
echo json_encode($posts);
mysql_close($link);
?>
