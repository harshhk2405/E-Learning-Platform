
<?php 
//session_start();
//DB conncetion
//include_once('includes/config.php');
//error_reporting(0);
//validating Session
//if (strlen($_SESSION['aid']==0)) {
  //header('location:logout.php');
  //}
  //else{
	//if($_GET['action']=='delete'){    
	//	$pid=intval($_GET['pid']);    
	//	$query=mysqli_query($con, "delete from tblphlebotomist where id='$pid'");
	//	echo '<script>alert("Record deleted")</script>';
	//	  echo "<script>window.location.href='manage-phlebotomist.php'</script>";
	//	}
//}
?>
  
<html>
<head>
	<meta charset="utf-8">
	<title>eLearning - Free Educational Responsive Web Template </title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/font-awesome.min.css"> 
	<link rel="stylesheet" href="../assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="../assets/css/da-slider.css" />
	<link rel="stylesheet" href="../assets/css/style.css">
	  
</head>
<body>
	<?php
		include "nav.php";
		$strconn=mysqli_connect("localhost","root","root","project2");
		if(!$strconn)
			echo "Connection failed".mysqli_connect_error();
		else{}
		session_start();
		if(isset($_SESSION["username"]))
		{
			$username=$_SESSION["username"];
		}
		else{ echo 'session not started';}
	?>
	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Welcome <?php echo $username;?></h1>
				</div>
			</div>
		</div>
	</header>
	<br>
	<div id="courses">
		<section class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="featured-box">
						<a href="Answer.php">
						<i class="fa fa-cogs fa-2x"></i>
						<div class="text">
							<h3>Answer Doubts</h3>
							
						</div>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
						<a href="Suggestion.php">
						<i class="fa fa-cogs fa-2x"></i>
						<div class="text">
							<h3>Suggestion to Admin</h3>
							
						</div>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
						<a href="manage.php">
						<i class="fa fa-cogs fa-2x"></i>
						<div class="text">
							<h3>Manage Profile</h3>
							
						</div>
						</a>
					</div>
				</div>
			</div>
		</section>
	</div>
	<?php
		include "footer.php";
	?>
</body>
</html>