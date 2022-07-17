<?php
require '../../constants/db_config.php';
require '../constants/check-login.php';
$idea_id = $_GET['id'];

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
$stmt = $conn->prepare("DELETE FROM ideas WHERE idea_id= :jobid AND company = '$myid'");
$stmt->bindParam(':jobid', $idea_id);
$stmt->execute();

$stmt = $conn->prepare("DELETE FROM tbl_job_application WHERE idea_id= :jobid");
$stmt->bindParam(':jobid', $idea_id);
$stmt->execute();

header("location:../my-jobs.php?r=0173");					  
}catch(PDOException $e)
{

}
	
?>