
<?php  

$server = 'eliskaszabova.dk.mysql'; 
$username = 'eliskaszabova_d';
$password = '4YFGDVJW';
$database = 'eliskaszabova_d';

try {
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
	die ("Connection failed: " . $e->getMessage());
}


?>