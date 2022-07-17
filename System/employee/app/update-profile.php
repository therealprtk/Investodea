<?php
require '../../constants/db_config.php';
require '../constants/check-login.php';
$fname = ucwords($_POST['fname']);
$lname = ucwords($_POST['lname']);
$mydate = $_POST['date'];
$mymonth = $_POST['month'];
$myyear = $_POST['year'];
$myemail = $_POST['email'];
$edu = ucwords($_POST['education']);
$title = ucwords($_POST['title']);
$gender = $_POST['gender'];

$about = $_POST['about'];
$phone = $_POST['phone'];
$state = $_POST['state'];

    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email AND member_no != '$myid'");
	$stmt->bindParam(':email', $myemail);
    $stmt->execute();
    $result = $stmt->fetchAll();
	$rec = count($result);
	if ($rec == "0") {
	
	$stmt = $conn->prepare("UPDATE users SET first_name = :fname, last_name = :lname, gender = :gender, bdate = :bdate , bmonth = :bmonth , byear = :byear, email = :email, title = :title, state = :state, phone = :phone, about = :about WHERE member_no='$myid'");
    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
	$stmt->bindParam(':gender', $gender);
	$stmt->bindParam(':bdate', $mydate);
	$stmt->bindParam(':bmonth', $mymonth);
	$stmt->bindParam(':byear', $myyear);
	$stmt->bindParam(':email', $myemail);
	$stmt->bindParam(':title', $title);;
	$stmt->bindParam(':state', $state);
	$stmt->bindParam(':phone', $phone);
	$stmt->bindParam(':about', $about);

    $stmt->execute();
	
	$_SESSION['myfname'] = $fname;
	$_SESSION['mylname'] = $lname;
    $_SESSION['myemail'] = $myemail;
	$_SESSION['mydate'] = $mydate;
	$_SESSION['mymonth'] = $mymonth;
	$_SESSION['myyear'] = $myyear;
    $_SESSION['myphone'] = $phone;
	$_SESSION['myedu'] = $edu;
	$_SESSION['mytitle'] = $title;
    $_SESSION['mystate'] = $state;
    $_SESSION['mydesc'] = $about;
	$_SESSION['gender'] = $gender;
    header("location:../?r=9837");
		
	}else{
		
		header("location:../?r=0927");
	}
			  
	}catch(PDOException $e)
    {

    }
	
?>
