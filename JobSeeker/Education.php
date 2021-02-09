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

    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
    <style type="text/css">

    </style>
    <script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
    <link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
    </style>
</head>

<body>
<!-- Main -->

<nav class="navbar" id="insidenav">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Cs Job Portal</a>
        </div>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="sessiion_destroy"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
       </ul>
     </div>
 </nav>

                <form id="form1" method="post" action="InsertEdu.php" enctype="multipart/form-data" class="form-horizontal">
									<h1 class="h3style"> Your Educational Detials </h1>

								<div class="form-group">
									<font size="3" label class="control-label col-sm-2" for="Degree"> First Degree</font> </label>
									<div class="col-sm-4">
										<select name="cmbQual" id="cmbQual" class=" form-control" required>
										<option value="" label="Select">Select</option>
										<option value="Not Pursuing Graduation"> Not Pursuing Graduation</option>
										<option value="B.A">B.A</option>
										<option value="B.Arch">B.Arch</option>
										<option value="BCA">BCA</option>
										<option value="B.B.A">B.B.A</option>
										<option value="B.Com">B.Com</option>
										<option value="B.Ed">B.Ed</option>
										<option value="BDS">BDS</option>
										<option value="BHM">BHM</option>
										<option value="B.Pharma">B.Pharma</option>
										<option value="B.Sc">B.Sc</option>
										<option value="B.Tech/B.E.">B.Tech/B.E.</option>
										<option value="LLB">LLB</option>
										<option value="MBBS">MBBS</option>
										<option value="Diploma">Diploma</option>
										<option value="BVSC">BVSC</option>
										<option value="Other">Other</option>
									</select>
								</div>
								</div>

								   <div class="form-group">
								     <font size="3" label class="control-label col-sm-2" for="Other"> Your Masters Education</font></label>
								     <div class="col-sm-4">
								       <select name="txtOther" id="txtOther" class="form-control" required>
								         <option value="">Select</option>
								         <option value="Not Pursuing Post Graduation"> Not Post Pursuing Graduation</option>
								         <option value="CA">CA</option>
								         <option value="CS">CS</option>
								         <option value="ICWA (CMA)">ICWA (CMA)</option>
								         <option value="Integrated PG">Integrated PG</option>
								         <option value="LLM">LLM</option>
								         <option value="M.A">M.A</option>
								         <option value="M.Arch">M.Arch</option>
								         <option value="M.Com">M.Com</option>
								         <option value="M.Ed">M.Ed</option>
								         <option value="M.Pharma">M.Pharma</option>
								         <option value="M.Sc">M.Sc</option>
								         <option value="M.Tech">M.Tech</option>
								         <option value="MBA/PGDM">MBA/PGDM</option>
								         <option value="MCA">MCA</option>
								         <option value="MS">MS</option>
								         <option value="PG Diploma">PG Diploma</option>
								         <option value="MVSC">MVSC</option>
								         <option value="MCM">MCM</option>
								         <option value="Other">Other</option>
								       </select>
								     </div>
								   </div>


									      <div class="form-group">
									         <font size="3" label class="control-label col-sm-2" for="name">Enter your GPA</font></label>
									         <div class="col-sm-1">
									              <input type="text" id="txtPer" placeholder="Your GPA" name="txtPer" class="form-control" />
									         </div>
									      </div>

									      <div class="form-group">
									         <font size="3" label class="control-label col-sm-2" for="University">Enter your University</font></label>
									         <div class="col-sm-4">
									              <input type="text" id="txtBoard" placeholder="University Name" name="txtBoard" class="form-control" />
									         </div>
									      </div>



												 <div class="form-group">
													 <font size="3" label class="control-label col-sm-2" for="Passing Year"> Finished year </font></label>
													 <div class="col-sm-4">
														 <select name="cmbYear" id="cmbYear" class="form-control" required>
                              <option>1993</option>
                              <option>1994</option>
                              <option>1995</option>
                              <option>1996</option>
                              <option>1997</option>
                              <option>1998</option>
                              <option>1999</option>
                              <option>2000</option>
                              <option>2001</option>
                              <option>2002</option>
                              <option>2003</option>
                              <option>2004</option>
                              <option>2005</option>
                              <option>2006</option>
                              <option>2007</option>
                              <option>2008</option>
                              <option>2009</option>
                              <option>2010</option>
                              <option>2011</option>
                              <option>2012</option>
                              <option>2013</option>
                              <option>2014</option>
                              <option>2015</option>
                              <option>2016</option>
                              <option>2017</option>
                              <option>2018</option>

                            </select>


												    <div class="form-group form-inline col-sm-10">
												      <font size="2" label for="submit" class="control-label col-sm-2">Check for errors before submitting the form!</font></label>
												      <div class="col-sm-4">
												      <button class="btn btn-danger" type="submit" id="button"> Submit </button>
												    </div>
												  </div>

              </form>

							<div class="page-header"></div>
						  <h1 class="h3style">Educational Profile</h1>

                  <tr>
                    <td><table width="100%" border="1" cellpadding="1" cellspacing="2" bordercolor="#006699" >
                      <tr>
                        <th height="32" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Degree</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>University</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Passing Year</strong></div></th>
                         <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Percentage</strong></div></th>
                      </tr>
                      <?php
					  $ID=$_SESSION['ID'];
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","job");

// Specify the query to execute
$sql = "select * from JobSeeker_Education where JobSeekId='".$ID."'";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records
while($row = mysqli_fetch_array($result))
{
$Degree=$row['Degree'];
$Univ=$row['University'];
$Passing=$row['PassingYear'];
$Per=$row['Percentage'];
?>
                      <tr>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Degree;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Univ;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Passing;?></strong></div></td>
                         <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Per;?></strong></div></td>
                      </tr>
                      <?php
}
// Retrieve Number of records returned
$records = mysqli_num_rows($result);
?>
                      <tr>
                        <td colspan="4" class="style3"><div align="left" class="style12"><?php echo "Total ".$records." Records"; ?> </div></td>
                      </tr>
                      <?php
// Close the connection
mysqli_close($con);
?>
                    </table></td>
                  </tr>

          </div> <!-- /article -->


<script type="text/javascript">

</script>
</body>
<link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
<link href="../css/main.css" rel="stylesheet">
<link href="../css/jobseeker.css" rel="stylesheet">
<script src="search.js"></script>
<script src="../js/jquery-1.12.0.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</html>
