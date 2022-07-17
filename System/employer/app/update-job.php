<?php
require '../../constants/db_config.php';
require '../constants/check-login.php';

$job_id = $_POST['jobid'];
$title  = ucwords($_POST['title']);
$city  = ucwords($_POST['city']);
$state = $_POST['state'];
$category = $_POST['category'];
$type = $_POST['jobtype'];
$exp = $_POST['experience'];
$desc = ucfirst($_POST['description']);
$rec = ucfirst($_POST['requirements']);
$res = ucfirst($_POST['responsiblities']);
$deadline = $_POST['deadline'];

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
$stmt = $conn->prepare("UPDATE ideas SET title = :title, city = :city, state = :state, category = :category, type = :type, experience = :experience, description = :description, responsibility = :responsibility, requirements = :requirements WHERE job_id = :jobid AND company = '$myid'");
$stmt->bindParam(':title', $title);
$stmt->bindParam(':city', $city);
$stmt->bindParam(':state', $state);
$stmt->bindParam(':category', $category);
$stmt->bindParam(':type', $type);
$stmt->bindParam(':experience', $exp);
$stmt->bindParam(':description', $desc);
$stmt->bindParam(':responsibility', $res);
$stmt->bindParam(':requirements', $rec);
$stmt->bindParam(':jobid', $job_id);
$stmt->execute();

header("location:../edit-job.php?r=0369&jobid=$job_id");
					  
}catch(PDOException $e)
{

}
	
?>
