<!doctype html>
<html lang="en">
<?php 
require '../constants/settings.php'; 
require 'constants/check-login.php';

if ($user_online == "true") {
if ($myrole == "employee") {
}else{
header("location:../");		
}
}else{
header("location:../");	
}

if (isset($_GET['page'])) {
$page = $_GET['page'];
if ($page=="" || $page=="1")
{
$page1 = 0;
$page = 1;
}else{
$page1 = ($page*10)-10;
}					
}else{
$page1 = 0;
$page = 1;	
}
?>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Investodea - Applied Investment</title>
	<meta name="description" content="Online Job Management / Job Portal" />
	<meta name="keywords" content="job, work, resume, applicants, application, employee, employer, hire, hiring, human resource management, hr, online job management, company, worker, career, recruiting, recruitment" />
	<meta name="author" content="BwireSoft">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:image" content="http://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:secure_url" content="https://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="Bwire Jobs" />
    <meta property="og:description" content="Online Job Management / Job Portal" />

	<link rel="shortcut icon" href="../images/ico/logoinv.png">


	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" media="screen">	
	<link href="../css/animate.css" rel="stylesheet">
	<link href="../css/main.css" rel="stylesheet">
	<link href="../css/component.css" rel="stylesheet">
	

	<link rel="stylesheet" href="../icons/linearicons/style.css">
	<link rel="stylesheet" href="../icons/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../icons/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="../icons/ionicons/css/ionicons.css">
	<link rel="stylesheet" href="../icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" href="../icons/rivolicons/style.css">
	<link rel="stylesheet" href="../icons/flaticon-line-icon-set/flaticon-line-icon-set.css">
	<link rel="stylesheet" href="../icons/flaticon-streamline-outline/flaticon-streamline-outline.css">
	<link rel="stylesheet" href="../icons/flaticon-thick-icons/flaticon-thick.css">
	<link rel="stylesheet" href="../icons/flaticon-ventures/flaticon-ventures.css">


	<link href="../css/style.css" rel="stylesheet">

	
</head>

  <style>
  
    .autofit2 {
	height:80px;
	width:100px;
    object-fit:cover; 
  }
  
  
  </style>
<body class="not-transparent-header">

	<div class="container-wrapper">

		<header id="header">

			<nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function">

				<div class="container">
					
					<div class="logo-wrapper">
						<div class="logo">
							<a href="../"><img src="../images/inv.png" alt="Logo" /></a>
						</div>
					</div>
					
					<div id="navbar" class="navbar-nav-wrapper navbar-arrow">
					
						<ul class="nav navbar-nav" id="responsive-menu">
						
							<li>
							
								<a href="../">Home</a>
								
							</li>
							
							<li>
								<a href="../ideas.php">Ideas</a>

							</li>
							
							<li>
								<a href="../ideators.php">Ideators</a>
							</li>
							
							<li>
								<a href="../investors.php">Investors</a>
							</li>
							
							<li>
								<a href="../contact.php">Contact Us</a>
							</li>

						</ul>
				
					</div>

					<div class="nav-mini-wrapper">
						<ul class="nav-mini sign-in">
							<li><a href="../logout.php">logout</a></li>
							<li><a href="./">Profile</a></li>
						</ul>
					</div>
				
				</div>
				
				<div id="slicknav-mobile"></div>
				
			</nav>

			
		</header>

		<div class="main-wrapper">

			
		
			
			<div class="admin-container-wrapper">

				<div class="container">
				
					<div class="GridLex-gap-15-wrappper">
					
						<div class="GridLex-grid-noGutter-equalHeight">
						
							<div class="GridLex-col-3_sm-4_xs-12">
							
								<div class="admin-sidebar">
										
									<div class="admin-user-item">
									<div class="image">	
									
										<?php 
										if ($myavatar == null) {
										print '<center><img class="img-circle autofit2" src="../images/default.jpg" title="'.$myfname.'" alt="image"  /></center>';
										}else{
										echo '<center><img class="img-circle autofit2" alt="image" title="'.$myfname.'"  src="data:image/jpeg;base64,'.base64_encode($myavatar).'"/></center>';	
										}
										?>
										</div>
										<br>
										
										
										<h4><?php echo "$myfname"; ?> <?php echo "$mylname"; ?></h4>
										<p class="user-role"><?php echo "$mytitle"; ?></p>
										
									</div>
									
									
									<ul class="admin-user-menu clearfix">
										<li>
											<a href="./"><i class="fa fa-user"></i> Profile</a>
										</li>
										<li class="">
										<a href="change-password.php"><i class="fa fa-key"></i> Change Password</a>
										</li>
										<li class="active">
											<a href="applied-jobs.php"><i class="fa fa-bookmark"></i> Applied Investment</a>
										</li>
										<li>
											<a href="../logout.php"><i class="fa fa-sign-out"></i> Logout</a>
										</li>
									</ul>
									
								</div>

							</div>
							
							<div class="GridLex-col-9_sm-8_xs-12">
							
								<div class="admin-content-wrapper">

									<div class="admin-section-title">
									
										<h2><b>Applied Investment</b></h2>
					
										
									</div>
									
									<div class="resume-list-wrapper">
									
									<?php require 'constants/check_reply.php'; ?>
									<div class="recent-job-wrapper">
								  <?php
                                  require '../constants/db_config.php';
								  
								  try {
                                  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                  $stmt = $conn->prepare("SELECT * FROM tbl_job_applications WHERE member_no = '$myid' ORDER BY id DESC LIMIT $page1,10");
                                  $stmt->execute();
                                  $result = $stmt->fetchAll();
                                  foreach($result as $row)
                                  {
									$post_date = date_format(date_create_from_format('m/d/Y', $row['application_date']), 'd');
                                    $post_month = date_format(date_create_from_format('m/d/Y', $row['application_date']), 'F');
                                    $post_year = date_format(date_create_from_format('m/d/Y', $row['application_date']), 'Y');
								    $idea_id = $row['idea_id'];
								
								    $stmtb = $conn->prepare("SELECT * FROM ideas WHERE idea_id = '$idea_id'");
                                    $stmtb->execute();
                                    $resultb = $stmtb->fetchAll();
									foreach($resultb as $rowb)
									{
									$job_title = $rowb['title'];
									$jobstate = $rowb['state'];
									$jobtype = $rowb['type'];
                                    $compid = $rowb['company'];
									if ($jobtype == "Mini Investment") {
	                                $sta = '<div class="job-label label label-success">
											Mini Investment
											</div>';
											  
	                                }
	                                if ($jobtype == "Short Term Investment") {
	                                 $sta = '<div class="job-label label label-danger">
											Short Term Investment
											</div>';
											  
	                                }
	                                if ($jobtype == "Long Term Investment") {
	                                $sta = '<div class="job-label label label-warning">
											Long Term Investment
											</div>';
											  
	                                }	
									
									$stmtc = $conn->prepare("SELECT * FROM users WHERE member_no = '$compid' AND role = 'employer'");
                                    $stmtc->execute();
                                    $resultc = $stmtc->fetchAll();
									
									foreach ($resultc as $rowc) {
									$compname = $rowc['first_name'];
									$complogo = $rowc['avatar'];	
										
									}
									
									?>
																	   <a target="_blank" href="../explore-job.php?jobid=<?php echo "$idea_id"; ?>" class="recent-job-item clearfix">
								<div class="GridLex-grid-middle">
									<div class="GridLex-col-6_xs-12">
										<div class="job-position">
											<div class="image">
											<?php 
										    if ($complogo == null) {
										    print '<center><img class="autofit3" alt="image"  src="images/blank.png"/></center>';
										    }else{
										    echo '<center><img class="autofit3" alt="image" title="'.$compname.'" width="180" height="100" src="data:image/jpeg;base64,'.base64_encode($complogo).'"/></center>';	
										    }
										     ?>
											</div>
											<div class="content">
												<h4><?php echo "$job_title"; ?></h4>
												<p><?php echo "$compname"; ?></p>
											</div>
										</div>
									</div>
									<div class="GridLex-col-3_xs-8_xss-12 mt-10-xss">
										<div class="job-location">
											<i class="fa fa-map-marker text-primary"></i> <?php echo "$jobstate"; ?>
										</div>
									</div>
									<div class="GridLex-col-3_xs-4_xss-12">
                                     <?php echo "$sta"; ?>
										<span class="font12 block spacing1 font400 text-center"><?php echo "$post_month"; ?> <?php echo "$post_date"; ?>, <?php echo "$post_year"; ?></span>
									</div>
								</div>
							</a>
							
							<?php
									}
								  
								 
		
 
	                              }
                                  }catch(PDOException $e)
                                  {

                                  } ?>
	
								  </div>

									<div class="pager-wrapper">
								
						            <ul class="pager-list">
								<?php
								$total_records = 0;
								require '../constants/db_config.php';
								try {
                                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                $stmt = $conn->prepare("SELECT * FROM tbl_job_applications WHERE member_no = '$myid' ORDER BY id");
                                $stmt->execute();
                                $result = $stmt->fetchAll();
                                foreach($result as $row)
                                {
	                              $total_records++;
	                            }

					  
	                            }catch(PDOException $e)
                                {
                 
                                }
	
								$records = $total_records/10;
                                $records = ceil($records);
				                if ($records > 1 ) {
								$prevpage = $page - 1;
								$nextpage = $page + 1;
								
								print '<li class="paging-nav" '; if ($page == "1") { print 'class="disabled"'; } print '><a '; if ($page == "1") { print ''; } else { print 'href="applied-jobs.php?page='.$prevpage.'"';} print '><i class="fa fa-chevron-left"></i></a></li>';
					            for ($b=1;$b<=$records;$b++)
                                 {
                                 
		                        ?><li  class="paging-nav" ><a <?php if ($b == $page) { print ' style="background-color:#33B6CB; color:white" '; } ?> href="applied-jobs.php?page=<?php echo "$b"; ?>"><?php echo $b." "; ?></a></li><?php
                                 }	
								 print '<li class="paging-nav"'; if ($page == $records) { print 'class="disabled"'; } print '><a '; if ($page == $records) { print ''; } else { print 'href="applied-jobs.php?page='.$nextpage.'"';} print '><i class="fa fa-chevron-right"></i></a></li>';
					             }

								
								?>

						            </ul>	
					
					                </div>

										
		
										
									</div>
									
									
								</div>

							</div>
							
						</div>

					</div>

				</div>
			
			</div>

			<footer class="footer-wrapper">
			
			<div class="main-footer">
			
				<div class="container">
				
					<div class="row">
					
						<div class="col-sm-12 col-md-9">
						
							<div class="row">
							
								<div class="col-sm-6 col-md-4">
								
									<div class="footer-about-us">
										<h5 class="footer-title">About Investodea</h5>
										<p>Investodea is a platform that acknowledge The Risk Takers, The Idea Makers, The Ones who determine their own fate. </p>
									
									</div>

								</div>
								
								<div class="col-sm-6 col-md-5 mt-30-xs">
									<h5 class="footer-title">Quick Links</h5>
									<ul class="footer-menu clearfix">
										<li><a href="./">Home</a></li>
										<li><a href="ideas.php">Ideas</a></li>
										<li><a href="ideators.php">Ideators</a></li>
										<li><a href="investors.php">Investors</a></li>
										<li><a href="contact.php">Contact Us</a></li>
									</ul>
								
								</div>

							</div>

						</div>
						
						<div class="col-sm-12 col-md-3 mt-30-sm">
						
							<h5 class="footer-title">Investodea Contact</h5>
							
							<p>Address : Cimage Professional College, Patna</p>
							<p>Email : <a href="mailto:investodea@gmail.com">Investodea@gmail.com</a></p>
							<p>Phone : <a href="tel:+91 2233344445">+91 2233344445</a></p>
							

						</div>

						
					</div>
					
				</div>
				
			</div>
			
			<div class="bottom-footer">
			
				<div class="container">
				
					<div class="row">
					
						<div class="col-sm-4 col-md-4">
				
							<p class="copy-right">&#169; Copyright <?php echo date('Y'); ?> Investodea</p>
							
						</div>
						
						<div class="col-sm-4 col-md-4">
						
							<ul class="bottom-footer-menu">
								<li><a >Developed by Dominators</a></li>
							</ul>
						
						</div>
						
						<!--<div class="col-sm-4 col-md-4">
							<ul class="bottom-footer-menu for-social">
								<li><a href="<?php echo "$tw"; ?>"><i class="ri ri-twitter" data-toggle="tooltip" data-placement="top" title="twitter"></i></a></li>
								<li><a href="<?php echo "$fb"; ?>"><i class="ri ri-facebook" data-toggle="tooltip" data-placement="top" title="facebook"></i></a></li>
								<li><a href="www.facebook.com"><a href="<?php echo "$ig"; ?>"><i class="ri ri-instagram" data-toggle="tooltip" data-placement="top" title="instagram"></i></a></a></li>
							</ul>
						</div>-->
					
					</div>

				</div>
				
			</div>
		
		</footer>
			
		</div>


	</div>
 
 

<div id="back-to-top">
   <a href="#"><i class="ion-ios-arrow-up"></i></a>
</div>

<script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="../js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-modalmanager.js"></script>
<script type="text/javascript" src="../js/bootstrap-modal.js"></script>
<script type="text/javascript" src="../js/smoothscroll.js"></script>
<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="../js/wow.min.js"></script>
<script type="text/javascript" src="../js/jquery.slicknav.min.js"></script>
<script type="text/javascript" src="../js/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-tokenfield.js"></script>
<script type="text/javascript" src="../js/typeahead.bundle.min.js"></script>
<script type="text/javascript" src="../js/bootstrap3-wysihtml5.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="../js/jquery-filestyle.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-select.js"></script>
<script type="text/javascript" src="../js/ion.rangeSlider.min.js"></script>
<script type="text/javascript" src="../js/handlebars.min.js"></script>
<script type="text/javascript" src="../js/jquery.countimator.js"></script>
<script type="text/javascript" src="../js/jquery.countimator.wheel.js"></script>
<script type="text/javascript" src="../js/slick.min.js"></script>
<script type="text/javascript" src="../js/easy-ticker.js"></script>
<script type="text/javascript" src="../js/jquery.introLoader.min.js"></script>
<script type="text/javascript" src="../js/jquery.responsivegrid.js"></script>
<script type="text/javascript" src="../js/customs.js"></script>

<script type="text/javascript" src="../js/fileinput.min.js"></script>
<script type="text/javascript" src="../js/customs-fileinput.js"></script>


</body>


</html>