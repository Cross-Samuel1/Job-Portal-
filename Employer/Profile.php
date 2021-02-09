<?php
session_start();
if(isset($_SESSION['$UserName_emp'])){

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

    <title>Profile</title>

    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
    <style type="text/css">
    </style>
</head>

<body>
<!-- Main -->
<?php
$ID=$_SESSION['ID'];
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","job");

$sql = "select * from Employer_Reg where EmployerId ='".$ID."'  ";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records
$row = mysqli_fetch_array($result)
?>
<div id="nav">
    <nav>
        <div class="navbar" id="insidenav">

            <ul class="nav navbar-nav">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Cs Job Portal</a>
                </div>
								<li><a href=""><?php echo $_SESSION['Name']; ?><span class="sr-only">(current)</span></a></li>
                <li class="active"><a href="#">Profile<span class="sr-only">(current)</span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="post_jobs.php">Post Jobs</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="managejobs.php">Manage Jobs</a></li>

                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left" role="search" method="get" action="search.php">
                <div class="form-group">
                    <input type="text" name="keyword" class="form-control" placeholder="Search Jobseekers">
                </div>
                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"> </span>Search</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Account Overview</a></li>
                        <li><a href="#">Account Settings</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Edit Profile</a></li>
                    </ul>
                </li>
                <li><a href="session_destroy">Logout</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</div><!-- /.container-fluid -->

<div class="container-fluid" id="content">

            <h3 align="center" class="text-center" style="color: #dd4814"> Welcome <?php echo $row['UserName']; ?> </h3> <hr>
            <h4 style="color: red;"></h4>

				<div class="container">
				<h3>Company Profile:</h3> <h4>The following informations are visible to job seekers.
						We reccomend you to always update these informations.</h4>

						<table class="table">
								<tr>
										<td class="tbold">Company ID</td>
										<td><strong><?php echo $row['EmployerId']; ?></strong></td>
								</tr>

										<tr>
												<td class="tbold">Company Name</td>
												<td><?php echo $row['CompanyName']; ?></td>
										</tr>

										<tr>
												<td class="tbold">Executive Name</td>
												<td><?php echo $row['ContactPerson']; ?></td>
										</tr>

										<tr>
												<td class="tbold">Address</td>
												<td><?php echo $row['Address']; ?></td>
										</tr>


										<tr>
												<td class="tbold">Email</td>
												<td><?php echo $row['Email']; ?></td>
										</tr>

										<tr>
												<td class="tbold">Mobile</td>
												<td><?php echo $row['Mobile']; ?></td>
										</tr>

										
										<tr>
												<td class="tbold">User Name</td>
												<td><?php echo $row['UserName']; ?></td>
										</tr>


                  <tr>
                    <td>&nbsp;</td>
                    <td><a href="EditProfile.php?EmployerId=<?php echo $row['EmployerId']; ?>">Edit Profile</a></td>
                  </tr>

                </table>
                <?php
                mysqli_close($con);
                ?>
              </div> <!-- /article -->

</div> <!-- /main -->

</body>
<link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
<link href="../css/main.css" rel="stylesheet">
<link href="../css/employer.css" rel="stylesheet">
<script src="../js/jquery-1.12.0.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

</html>
