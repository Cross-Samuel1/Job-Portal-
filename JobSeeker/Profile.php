<?php
session_start();
if(isset($_SESSION['$UserName_job'])){
}
	else{
		header('location:../index.php');
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

    <title>Cs JOB PORTAL</title>
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />

    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
    <style type="text/css">

    </style>
</head>

<body>
<!-- Main -->

<div id="nav">
    <nav class="navbar">
        <div class="navbar" id="insidenav">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Cs Job Portal</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="Profile.php">Profile<span class="sr-only">(current)</span></a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Options<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="Profile.php">Update Profile</a></li>
                        <li><a href="Walkin.php">View Applied Jobs</a></li>

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

                </li>
                <li><a href="session_destroy.php">Logout</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</div><!-- /.container-fluid -->


            <div class="article">
                <h2><span><a href="#">Welcome <?php echo $_SESSION['Name'];?></a></span></h2>

<?php
$ID=$_SESSION['ID'];
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","job");
// Specify the query to execute
$sql = "select * from JobSeeker_Reg where JobSeekId='".$ID."'  ";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records
$row = mysqli_fetch_array($result)
?>

<section class="col-sm-7">
<div id="searchcontent">
<!-- Search content overlay div starts here ------------------------------------ --- -->
<div id="">
<h3> Find jobs, edit your profile or update your current resume for better jobs!</h3>
</div>

<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#details">Your Profile</a></li>
    <li><a data-toggle="tab"  href="#advsearch">Advanced Search</a></li>
</ul>

<div class="tab-content">

<!------------------------------------------------------------------------------- -->

		<div id="details" class="tab-pane fade in active" style="margin-top: 50px;">
		<h3> Your Profile</h3>
		<table class="table" >
		<tr>
				<td class="tbold">Full Name:</td>
				<td><?php echo $row['JobSeekerName']; ?></td>

		</tr>
		<tr>
				<td class="tbold">Email:</td>
				<td><?php echo $row['Email']; ?></td>
		</tr>
		<tr>
				<td class="tbold">Mobile:</td>
				<td><?php echo $row['Mobile']; ?></td>
		</tr>
		<tr>
				<td class="tbold">Address:</td>
				<td><?php echo $row['Address'];?></td>
		</tr>
		<tr>
				<td class="tbold">Region:</td>
				<td><?php echo $row['Region']; ?></td>
		</tr>
		<tr>
				<td class="tbold">Gender:</td>
				<td><?php echo $row['Gender']; ?></td>
		</tr>
		<tr>
			 <td class="tbold">Highest Qualification:</td>
				<td><?php echo $row['Qualification']; ?></td>
		</tr>
		<tr>
				<td class="tbold">BirthDate:</td>
				<td><?php echo $row['BirthDate']; ?></td>
		</tr>
</table>
</div> <!-- profile -->


    <div id="advsearch" class="tab-pane fade">
       <div class="container-fluid" id="advsearch" >
           <h2>Search for jobs</h2>
           <form role="form">
              <table>
                  <tr >
                    <td class="tbold">Company Name:</td>
                    <td><input type="text" class="form-control" id="txtName" name="txtName" required placeholder="Company Name:"> </td>
                  </tr>
                  <tr>
                    <td class="tbold">Region:</td>
                    <td>
                      <input type="text" class="form-control" id="txtCity" name="txtCity" placeholder="Your Prefered Location">
                    </td>
                  </tr>
                  <tr>
                    <td class="tbold">Industy type:</td>
                    <td><input type = "text" class="form-control" id="txtAreaWork" name="txtAreaWork" placeholder="Industry Type"></td>  </tr>
                  <tr>
                      <td></td>
                      <td><button type="button" onclick="advsearch()" class="btn btn-success"><span class="glyphicon glyphicon-search"></span> Search Jobs</button></td>
                  </tr>
              </table>
           </form>
       </div>
        <hr>
        <div id="subcontent">
        <!---- sub content shows advanced search results --------- -->
			</div>
                  <tr>
                    <td><strong>Resume:</strong></td>
                    <td><a href="../upload/<?php echo $row['Resume'];?>" target="_blank"><strong>View</strong></a></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
              <p>&nbsp;</p>

                  </div> <!-- /article -->

            <?php
            mysqli_close($con);
            ?>

            <hr class="noscreen" />


</div> <!-- /main -->

</body>
<link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
<link href="../css/main.css" rel="stylesheet">
<link href="../css/jobseeker.css" rel="stylesheet">
<script src="search.js"></script>
<script src="../js/jquery-1.12.0.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

</html>
