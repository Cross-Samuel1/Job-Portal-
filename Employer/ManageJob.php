
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

    <meta name="author" content="All: ... [Nazev webu - www.url.cz]; e-mail: info@url.cz" />
    <meta name="copyright" content="Design/Code: Vit Dlouhy [Nuvio - www.nuvio.cz]; e-mail: vit.dlouhy@nuvio.cz" />

<title>JOB PORTAL</title>

    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
    <style type="text/css">

    </style>
    <script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
    <script src="../SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
    <link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
    <link href="../SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
    <style type="text/css">

    </style>
</head>

<body id="www-url-cz">
<!-- Main -->

<div id="nav">
    <nav class="emp-nav">
        <div class="navbar" id="insidenav">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Job Portal</a>
            </div>

            <ul class="nav navbar-nav">
                <li><a href=""><?php echo $_SESSION['Name']; ?><span class="sr-only">(current)</span></a></li>
                <li class="active"><a href="#">Manage Jobs</a></li>
                <li><a href="#">Notifications</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="post_jobs.php">Post New Jobs</a></li>
                        <li><a href="#">Manage Jobs</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Manage Applicants</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Search</button>
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
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</div><!-- /.container-fluid -->

<div class="container">
<br/>
<center><h2>Post Jobs </h2></center>
<div class="page-header" style="background: #f4511e"></div>
<h3> Job Details: </h3>
	<div class="page-header" />
<form id="form1" role="form" onsubmit="return checkForm();" method="post" class="form-horizontal" action="InsertJob.php">

	<div class="form-group">
			<label for="txtTitle" class="control-label col-sm-2">Job Title/ Designation:</label>
			 <div class="col-sm-4">
						<input type="text" class="form-control" name="txtTitle" id="txtTitle">
			 </div>
	</div>

	 <div class="form-group">
				<label for="txtTotal" class="control-label col-sm-2">Number of vacancies:</label>
				<div class="col-sm-2">
					<input type="text" name="txtTotal" class="form-control" id="txtTotal">
				</div>
	</div>

	 <div class="form-group">
			<label for="txtDesc" class="control-label col-sm-2">Job Description:</label>
				<div class="col-sm-5">
					<textarea class="form-control" rows="5" id="txtDesc" name="txtDesc"></textarea>
				</div>
	</div>

	<div class="form-inline form-group">
		 <label for="exp" class="control-label col-sm-2">Work Experiecne:</label>
			 <div class="col-sm-4">
						<select class="form-control" name="exp" required name="exp" id="exp">
								<option value=""> -Select- </option>
								 <option value="1">1 </option>
									<option value="2">2 </option>
									 <option value="3">3 </option>
										<option value="4">4 </option>
										 <option value="5"> 5</option>
											<option value="6">6 </option>
											 <option value="7">7 </option>
												<option value="7 above"> above 7</option>
						</select> <span> Minimum Years </span>
				</div>
	</div>

 <div class="form-inline form-group">
		 <label for="number" class="control-label col-sm-2">Basic Pay:</label>
			 <div class="col-sm-4" id="txtOther">
							<select class="form-control" id="txtOther" name="txtOther">
								<option value="Ghc"> Ghc </option>
								<option value="USD"> USD </option>
								</select>
						 <input type="number" class="form-control" id="txtOther" name="txtOther">
				</div>
 </div>

 <div class="form-group">
                <label for="City" class="control-label col-sm-2">Location</label>
                <div class="col-sm-4">
                    <select name="txtCity" id="txtCity" class="form-control" required>
                    <option selected="selected" value="">- Select a Location -</option>
                    <option value="Greater Accra Region">Greater Accra Region</option>
                    <option value="Volta Region">Volta Region</option>
                    <option value="Central Region">Central Region</option>
                    <option value="Eastern Region">Eastern Region</option>
                    <option value="Ashanti">Ashanti Region</option>
                    <option value="Brong-Ahafo">Brong-Ahafo Region</option>
                    <option value="Northern Region">Northern Region</option>
                    <option value="Upper-East Region">Upper-East Region</option>
                    <option value="Upper-West Region">Upper-West Region</option>
               </select>
          </div>
 </div>

 <div class="form-group">
 		<label for="indtype" class="control-label col-sm-2">Industry:</label>
 		<div class="col-sm-5">
 		<select name="txtAreaWork" id="txtAreaWork" class="form-control"  required>
 				<option selected="selected" value="">- Select an Industry -</option>
 				<option value="Accessories/Apparel/Fashion Design">Accessories/Apparel/Fashion Design</option>
 				<option value="Accounting/Consulting/Taxation">Accounting/Consulting/Taxation</option>
 				<option value="Advertising/Event Management/PR">Advertising/Event Management/PR</option>
 				<option value="Agriculture/Dairy Technology">Agriculture/Dairy Technology</option>
 				<option value="Airlines/Hotel/Hospitality/Travel/Tourism/Restaurants">Airlines/Hotel/Hospitality/Travel/Tourism/Restaurants</option>
 				<option value="Animation / Gaming">Animation / Gaming</option>
 				<option value="Architectural Services/ Interior Designing">Architectural Services/ Interior Designing</option>
 				<option value="Auto Ancillary/Automobiles/Components">Auto Ancillary/Automobiles/Components</option>
 				<option value="Banking/Financial Services/Stockbroking/Securities">Banking/Financial Services/Stockbroking/Securities</option>
 				<option value="Banking/FinancialServices/Broking">Banking/FinancialServices/Broking</option>
 				<option value="Biotechnology/Pharmaceutical/Clinical Research">Biotechnology/Pharmaceutical/Clinical Research</option>
 				<option value="Brewery/Distillery">Brewery/Distillery</option>
 				<option value="Cement/Construction/Engineering/Metals/Steel/Iron">Cement/Construction/Engineering/Metals/Steel/Iron</option>
 				<option value="Ceramics/Sanitaryware">Ceramics/Sanitaryware</option>
 				<option value="Chemicals/Petro Chemicals/Plastics">Chemicals/Petro Chemicals/Plastics</option>
 				<option value="Computer Hardware/Networking">Computer Hardware/Networking</option>
 				<option value="Consumer FMCG/Foods/Beverages">Consumer FMCG/Foods/Beverages</option>
 				<option value="Consumer Goods - Durables">Consumer Goods - Durables</option>
 				<option value="Courier/Freight/Transportation/Warehousing">Courier/Freight/Transportation/Warehousing</option>
 				<option value="CRM/ IT Enabled Services/BPO">CRM/ IT Enabled Services/BPO</option>
 				<option value="Education/Training/Teaching">Education/Training/Teaching</option>
 				<option value="Electricals/Switchgears">Electricals/Switchgears</option>
 				<option value="Employment Firms/Recruitment Services Firms">Employment Firms/Recruitment Services Firms</option>
 				<option value="Entertainment/Media/Publishing/Dotcom">Entertainment/Media/Publishing/Dotcom</option>
 				<option value="Export Houses/Textiles/Merchandise">Export Houses/Textiles/Merchandise</option>
 				<option value="FacilityManagement">FacilityManagement</option>
 				<option value="Fertilizers/Pesticides">Fertilizers/Pesticides</option>
 				<option value="FoodProcessing">FoodProcessing</option>
 				<option value="Gems and Jewellery">Gems and Jewellery</option>
 				<option value="Glass">Glass</option>
 				<option value="Government/Defence">Government/Defence</option>
 				<option value="Healthcare/Medicine">Healthcare/Medicine</option>
 				<option value="HeatVentilation/AirConditioning">HeatVentilation/AirConditioning</option>
 				<option value="Insurance">Insurance</option>
 				<option value="KPO/Research/Analytics">KPO/Research/Analytics</option>
 				<option value="Law/Legal Firms">Law/Legal Firms</option>
 				<option value="Machinery/Equipment Manufacturing/Industrial Products">Machinery/Equipment Manufacturing/Industrial Products</option>
 				<option value=">Mining">Mining</option>
 				<option value="NGO/Social Services">NGO/Social Services</option>
 				<option value="Office Automation">Office Automation</option>
 				<option value="Others/Engg. Services/Service Providers">Others/Engg. Services/Service Providers</option>
 				<option value="Petroleum/Oil and Gas/Projects/Infrastructure/Power/Non-conventional Energy">Petroleum/Oil and Gas/Projects/Infrastructure/Power/Non-conventional Energy</option>
 				<option value="Printing/Packaging">Printing/Packaging</option>
 				<option value="Publishing">Publishing</option>
 				<option value="Real Estate">Real Estate</option>
 				<option value="Retailing">Retailing</option>
 				<option value="Security/Law Enforcement">Security/Law Enforcement</option>
 				<option value="Shipping/Marine">Shipping/Marine</option>
 				<option value="Software Services">Software Services</option>
 				<option value="Steel">Steel</option>
 				<option value="Strategy/ManagementConsultingFirms">Strategy/ManagementConsultingFirms</option>
 				<option value="Telecom Equipment/Electronics/Electronic Devices/RF/Mobile Network/Semi-conductor">Telecom Equipment/Electronics/Electronic Devices/RF/Mobile Network/Semi-conductor</option>
 				<option value="Telecom/ISP">Telecom/ISP</option>
 				<option value="Tyres">Tyres</option>
 				<option value="WaterTreatment/WasteManagement">WaterTreatment/WasteManagement</option>
 				<option value="Wellness/Fitness/Sports">Wellness/Fitness/Sports</option>
 		</select>
 		</div>
 </div>

 <h3> Desired Candidate Profile:</h3>
 <div class="page-header" />
		 <div class="form-group">
				 <label for="cmbQual" class="control-label col-sm-2">Specify UG Qualification:</label>
				 <div class="col-sm-4 ">
					 <select name="cmbQual" id="cmbQual"  name="cmbQual" class=" form-control" required>
		<option value="" label="Select">Select</option>
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
				 <label for="profile" class="control-label col-sm-2">Desired Candidate Profile</label>
				 <div class="col-sm-5"><textarea id="profile" rows="5" name="profile" class="form-control" required onblur="validate('longtext','proer',this.value)"></textarea></div>
				 <label class="error" id="proer"></label>
		 </div>
		 <div class="page-header" />
		 <p> Are you sure to submit the job! Check for errors before submitting the job</p>
		 <div class="form-group col-sm-2">
					<button class="btn btn-lg btn-primary btn-block" type="submit" id="button" value="submit">Post Job</button>
</form>
</div>

                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Posted Job </strong></td>
                  </tr>
                  <tr>
                    <td><table width="100%" border="1" bordercolor="#1CB5F1" >
                      <tr>
                        <th height="32" bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Id</strong></div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Job Title</strong></div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Vacancy</strong></div></th>
                         <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Qualification</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Description</strong></div></th>

                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style12">Delete</div></th>
                      </tr>
                      <?php
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","job");

// Specify the query to execute
$sql = "select * from job_Master where CompanyName='".$_SESSION['Name']."'";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records
while($row = mysqli_fetch_array($result))
{
$Id=$row['JobId'];
$JobTitle=$row['JobTitle'];
$Vacancy=$row['Vacancy'];
$MinQualification=$row['MinQualification'];
$Description =$row['Description'];

?>
                      <tr>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Id;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $JobTitle;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Vacancy;?></strong></div></td>
                          <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $MinQualification;?></strong></div></td>
                            <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Description;?></strong></div></td>

                        <td class="style3"><div align="left" class="style9 style5"><strong><a href="DeleteJob.php?JobId=<?php echo $Id;?>">Delete</a></strong></div></td>
                      </tr>
                      <?php
}
// Retrieve Number of records returned
$records = mysqli_num_rows($result);
?>
                      <tr>
                        <td colspan="6" class="style3"><div align="left" class="style12"><?php echo "Total ".$records." Records"; ?> </div></td>
                      </tr>
                      <?php
// Close the connection
mysqli_close($con);
?>

<script type="text/javascript">

</script>
</body>
<link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
<link href="../css/main.css" rel="stylesheet">
<link href="../css/employer.css" rel="stylesheet">
<script type="text/javascript" src="../js/validate.js"></script>
<script src="../js/jquery-1.12.0.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../location/location.js"></script>
</html>
