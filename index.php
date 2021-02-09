<?php
session_start();
if(isset($_SESSION['$UserName'])){
	header('location:Admin/index.php');
}
if(isset($_SESSION['$UserName_job'])){
	header('location:JobSeeker/index.php');
}
if(isset($_SESSION['$UserName_emp'])){
	header('location:Employer/index.php');
}
?>
<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

    <meta name="author" content="Cross Samuel" />
    <meta name="copyright" content="Cross Samuel; e-mail: samuelnanaosei6@gmail.com" />

    <title>Cs Job Portal</title>
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />

    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
    <style type="text/css">
<!--
<style>

-->
    </style>
		<script type="application/javascript">
				$(document).ready(function(){
						// Add smooth scrolling to all links in navbar + footer link
						$(".navbar a, footer a[href='#insidenav']").on('click', function(event) {

								// Prevent default anchor click behavior
								event.preventDefault();

								// Store hash
								var hash = this.hash;

								// Using jQuery's animate() method to add smooth page scroll
								// The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
								$('html, body').animate({
										scrollTop: $(hash).offset().top
								}, 900, function(){

										// Add hash (#) to URL when done scrolling (default click behavior)
										window.location.hash = hash;
								});
						});
						$(window).scroll(function() {
								$(".slideanim").each(function(){
										var pos = $(this).offset().top;

										var winTop = $(window).scrollTop();
										if (pos < winTop + 600) {
												$(this).addClass("slide");
										}
								});
						});
				})
		</script>
</head>

<body id="www-url-cz">

<?php
include "Header.php"
?>
<?php
include "menu.php"
?>

				<h1><i><marquee>Connecting you to your dream</marquee></i></h1>
<p align="center"> <img src="design/logo2.jpg" /></p>


<div class="page-header" style="background:#1abc9c"></div>
<div class="container-fluid" style="background: transparent">
    <div class="text-center">
        <h2>Register</h2>
        <h4>Register in this website for a better experience</h4>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h1>Employers</h1>
                </div>
                <div class="panel-body">
                    <p style="font-size: 16px">Register today and post a job in easy steps and start receiving applications the same day.
                        Find the right candidates easily and quickly through our Search feature.</p>
                </div>
                <div class="panel-footer">
                    <h3>$0</h3>
                   <a href="EmployerReg.php" style="color: inherit"> <button class="btn btn-lg">Sign Up</button></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h1>Job Seekers</h1>
                </div>
                <div class="panel-body">
                    <p style="font-size: 16px">Helps passive and active jobseekers find better jobs. Get connected with over 45000 recruiters.
                        Apply to jobs in just one click. Apply to thousands of jobs posted daily.</p>
                </div>
                <div class="panel-footer">
                    <h3>$0</h3>
                    <a href="JobSeekerReg.php" style="color: inherit"> <button class="btn btn-lg">Sign Up</button></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h1>Premium</h1>
                </div>
                <div class="panel-body">
                    <p style="font-size: 16px;">Better Exposure <br>
                        Better Support</p>
                </div>
                <div class="panel-footer">
                    <h3>$4</h3>
                    <h4>per month</h4>
                    <button class="btn btn-lg disabled">Upgrade</button>
                </div>
            </div>
        </div>
    </div>
</div>





</body>
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/search.js"></script>
<script src="js/bootstrap.min.js"></script>
<link href="css/home.css" rel="stylesheet">
<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
</html>
