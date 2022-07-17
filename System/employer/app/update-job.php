<?php
require '../../constants/db_config.php';
require '../constants/check-login.php';

$idea_id = $_POST['jobid'];
$title  = ucwords($_POST['title']);
$state = $_POST['state'];
$category = $_POST['category'];
$type = $_POST['jobtype'];
$desc = ucfirst($_POST['description']);
$deadline = $_POST['deadline'];

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
$stmt = $conn->prepare("UPDATE ideas SET title = :title, state = :state, category = :category, type = :type,  description = :description, WHERE idea_id = :jobid AND company = '$myid'");
$stmt->bindParam(':title', $title);
$stmt->bindParam(':state', $state);
$stmt->bindParam(':category', $category);
$stmt->bindParam(':type', $type);
$stmt->bindParam(':description', $desc);
$stmt->bindParam(':jobid', $idea_id);
$stmt->execute();

header("location:../edit-job.php?r=0369&jobid=$idea_id");
					  
}catch(PDOException $e)
{

}
	
?>
