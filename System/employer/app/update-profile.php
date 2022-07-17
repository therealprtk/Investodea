<?php
require '../../constants/db_config.php';
require '../constants/check-login.php';

$companame = ucwords($_POST['company']);
$type = ucwords($_POST['type']);
$web = $_POST['web'];
$phone = $_POST['phone'];
$state = $_POST['state'];
$about = $_POST['background'];

$myemail = $_POST['email'];

    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email AND member_no != '$myid'");
	$stmt->bindParam(':email', $myemail);
    $stmt->execute();
    $result = $stmt->fetchAll();
    $rec = count($result);
	
	if ($rec == "0") {
    $stmt = $conn->prepare("UPDATE users SET first_name = :compname, byear = :esta, title = :type, state = :state, phone = :phone, about = :about, website = :website WHERE member_no='$myid'");
    $stmt->bindParam(':compname', $companame);
    $stmt->bindParam(':esta', $esta);
	$stmt->bindParam(':type', $type);
	$stmt->bindParam(':state', $state);
    $stmt->bindParam(':phone', $phone);
	$stmt->bindParam(':about', $about);
	$stmt->bindParam(':website', $web);
    $stmt->execute();
	
	$_SESSION['compname'] = $companame;
	$_SESSION['established'] = $esta;
    $_SESSION['myemail'] = $myemail;
    $_SESSION['myphone'] = $phone;
	$_SESSION['comptype'] = $type;
    $_SESSION['mystate'] = $state;
    $_SESSION['mydesc'] = $about;
	$_SESSION['website'] = $web;
	
	header("location:../?r=9837");	
	}else{
	header("location:../?r=0927");
	}

					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

?>


