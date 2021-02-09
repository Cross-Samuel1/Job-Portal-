<?php
session_start();
if(isset($_SESSION['$UserName_job'])){
}
	else{
		header('location:../index.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />


    <title>JOB PORTAL</title>
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
	                <a class="navbar-brand" href="index.php">Cs Job Portal</a>
	            </div>
	            <ul class="nav navbar-nav">
	                <li class="active">
										<li><a href=""><?php echo $_SESSION['Name']; ?><span class="sr-only">(current)</span></a></li>

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

	<!------------------------------------------------------------------------------- -->



                <h2><span><a href="#">Welcome back</a></span></h2>


                <table width="100%" border="0">
                  <tr>
                    <td><div align="center"><img src="design/Profile.png" alt="" width="64" height="64" /></div></td>
                    <td><div align="center"><img src="design/Edu.png" alt="" width="64" height="64" /></div></td>
                    <td><div align="center"><img src="design/Search.png" alt="" width="64" height="64" /></div></td>
                  </tr>
                  <tr>
                    <td bgcolor="#A0B9F3"><div align="center"><a href="Profile.php"><strong>Profile</strong></a></div></td>
                    <td bgcolor="#A0B9F3"><div align="center"><a href="Education.php"><strong>Education</strong></a></div></td>
                    <td bgcolor="#A0B9F3"><div align="center"><a href="SearchJob.php"><strong>Search JOB</strong></a></div></td>
                  </tr>
                  <tr>
                    <td><div align="center"><img src="design/Interview.png" alt="" width="64" height="64" /></div></td>
                    <td><div align="center"><img src="design/Feedback.png" alt="" width="64" height="64" /></div></td>
                    <td><div align="center"><img src="design/Log.png" alt="" width="64" height="64" /></div></td>
                  </tr>
                  <tr>
                    <td bgcolor="#A0B9F3"><div align="center"><a href="Walkin.php"><strong>Online Interview</strong></a></div></td>
                    <td bgcolor="#A0B9F3"><div align="center"><a href="Feedback.php"><strong>Feedback</strong></a></div></td>
                    <td bgcolor="#A0B9F3"><div align="center"><a href="session_destroy.php"><strong>Logout</strong></a></div></td>
                  </tr>
                </table>

</body>
<link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
<link href="../css/main.css" rel="stylesheet">
<link href="../css/jobseeker.css" rel="stylesheet">
<script src="search.js"></script>
<script src="../js/jquery-1.12.0.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

</html>
