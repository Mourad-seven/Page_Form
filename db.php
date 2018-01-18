<?php
/* Database connection settings */
/*** mysql hostname ***/
$hostname = 'localhost';

/*** mysql username ***/
$username = 'root';

/*** mysql password ***/
$password = '';

$dbname = 'Page_Form';

try {
	$dbh = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
	/*** echo a message saying we have connected ***/
	//echo 'Connected to database';
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Abort connection" . $e->getMessage();
}

?>