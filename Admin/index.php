<?php
session_start();
if(isset($_SESSION['$UserName'])){

}
else{
		header('location:../index.php');
}
?>
<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

    <title>ADMINSTRATOR </title>
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />

    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
    <style type="text/css">

    </style>
</head>

<body id="www-url-cz">
<!-- Main -->
<div id="nav">
		<nav class="navbar">
				<div class="navbar" id="insidenav">
						<div class="navbar-header">
								<a class="navbar-brand" href="index.php">Admin</a>
						</div>
						<ul class="nav navbar-nav">
								<li class="active">

								<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Options<span class="caret"></span></a>
										<ul class="dropdown-menu">
												<li><a href="EditProfile.php">Update Profile</a></li>
												<li><a href="view_applied.php">View Applied Jobs</a></li>
												<li role="separator" class="divider"></li>
												<li><a href="view_selected.php">View Selected Jobs</a></li>
										</ul>
								</li>
						</ul>
						<form class="navbar-form navbar-left" role="search">
								<div class="form-group">
										<input type="text" name="keyword" id="keyword" class="form-control" placeholder="Search Jobs">
								</div>
								<button type="button" class="btn btn-default" onclick="search();">Search</button>
						</form>
						<ul class="nav navbar-nav navbar-right">
								<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account<span class="caret"></span></a>
										<ul class="dropdown-menu">
												<li><a href="Profile.php">Account Overview</a></li>
												<li role="separator" class="divider"></li>
												<li><a href="#">Account Settings</a></li>
									 </ul>
								</li>
								<li><a href="session_destroy.php">Logout</a></li>
						</ul>
				</div><!-- /.navbar-collapse -->
		</nav>
</div><!-- /.container-fluid -->

<?php
include "menu.php"
?>
<!-- Page (2 columns) -->
            <!-- Article -->
            <div class="article">
                <h2><span><a href="#">Welcome To Control Panel</a></span></h2>


              </div> <!-- /article -->


</div> <!-- /main -->

</body>
<link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
<link href="../css/main.css" rel="stylesheet">
<link href="../css/jobseeker.css" rel="stylesheet">
<script src="search.js"></script>
<script src="../js/jquery-1.12.0.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

</html>
