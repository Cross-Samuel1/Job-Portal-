<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">




<title>New Client Registration</title>

<style type="text/css">

</style>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />

</head>

<body>
<SCRIPT language="JavaScript1.2" src="gen_validation.js"></SCRIPT>
<SCRIPT language="JavaScript1.2">
var arrFormValidation=
             [
			 		[//Name
						["minlen=1",
		"Please Enter Company Name"
						  ]

                     ],
                   [//Contact Person
						  ["minlen=1",
		"Please Enter Contact Person"
						  ]

                   ],
				   [//Address
						["minlen=1",
		"Please Enter Address"
						  ]
                   ],
                   [//City
						["minlen=1",
		"Please Enter City"
						  ]
                   ],
				   [//Email

						["minlen=1",
		"Please Enter Email "
						  ],
						  ["email",
		"Please Enter valid email "
						  ]
                   ],
				   [//Mobile
						   ["num",
		"Please Enter valid Mobile "
						  ],
						  ["minlen=10",
		"Please Enter valid Mobile "
						  ]
                   ],
				   [//Area

					  ["minlen=1",
		"Please Enter Area of Work"
						  ]


                   ],

				   [//User
						  ["minlen=1",
		"Please Enter UserName "
						  ]


                   ],
				   [//Password
						["minlen=1",
		"Please Enter Password "
						  ]


                   ],
				    [//Que


                   ],
				    [//Answer

						  ["minlen=1",
		"Please Enter Answer "
						  ]

                   ]

            ];
</SCRIPT>


<!-- navigation bar starts here -->
<nav class="navbar" id="insidenav">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="./index.php"> Cs Job Portal</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Employer Registration</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="./login.php">Login</a></li>
    </ul>
  </div>
</nav>

<!-- navigation bar ends here -->


<div class="container">
  <div class="jumbotron">
    <h1 align="center">Register your company</h1>
    <div id="insidejumb">
      <p>
        Register today and post a job in easy steps and start receiving applications the same day.
        Find the right candidates easily and quickly through our Search feature.
      </p>
    </div>
  </div>


    <form action="EmployeInsert.php" method="post" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2" class="form-horizontal">
      <h3 class="h3style"> Your Login details </h3>
      <div class="page-header"> </div>


      <div class="form-group">
          <label for="username" class="control-label col-sm-2">UserName</label>
          <div class="col-sm-4">
             <input type="UserName" required placeholder="Enter your UserName" class="form-control" name="txtUserName" id="txtUserName">
          </div>
      </div>

      <div class="form-group">
          <label class="control-label col-sm-2" for="Password">Password</label>
          <div class="col-sm-4">
              <input type ="password"  placeholder="Enter your password" name="txtPassword" id="txtPassword" class="form-control">
          </div>
      </div>

      <div class="form-group">
                     <label class="control-label col-sm-2">Security Question</label>
                     <div class="col-sm-4">
                        <select name="cmbQue" id="cmbQue" class="form-control" required>
                        <option>What is Your Pet Name?</option>
                        <option>Who is Your Favourite Person?</option>
                        <option>What is the Name of Your First School?</option>
                      </select>
                     </div>
      </div>

      <div class="form-group">
        <label class="control-label-sm-2" for="Answer">Answer</label>
        <div class="col-sm-4">
          <input type="text" name="txtAnswer" id="txtAnswer" required placeholder="Enter your Answer" class="form-control">
        </div>
      </div>




      <div class="page-header"></div>
      <h3 class="h3style"> Your Company Details</h3>
      <div class="page-header"></div>

      <div class="form-group">
       <label for="txtName" class="control-label col-sm-2"> Company Name </label>
       <div class="col-sm-4">
        <input type ="text" name="txtName" id="txtName" placeholder="Enter Company Name" class="form-control">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="person">Contact Person</label>
       <div class="col-sm-4">
         <input type="text" calss="form-control" name="txtPerson" id="txtPerson" required placeholder="Enter Executive Name">
       </div>
    </div>


        <div class="form-group">
          <label for="email" class="control-label col-sm-2">E-mail</label>
          <div class="col-sm-4">
                <input type="text" name="txtEmail" id="txtEmail" required placeholder="Enter your Email" class="form-control">
          </div>
        </div>



<div class="form-group">
               <label for="indtype" class="control-label col-sm-2">Industry:</label>
               <div class="col-sm-4">
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


<div class="form-group">
  <label for="txtAddress" class="control-label col-sm-2">Address</label>
   <div class="col-sm-4">
     <textarea name="txtAddress" id="txtAddress" rows="5" class="form-control" required placeholder="Enter Your Address" ></textarea>
   </div>
</div>

<div class="form-group">
               <label for="City" class="control-label col-sm-2">Region</label>
               <div class="col-sm-4">
                   <select name="txtCity" id="txtCity" class="form-control" required>
                   <option selected="selected" value="">- Select a Region -</option>
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



<div classs="form-group">
  <label for="Mobile" class="control-label col-sm-2">Moblie Number:</label>
  <div class="col-sm-4">
          <input type="text" name="txtMobile" id="txtMobile" requied placeholder="Enter your Mobile-Number" class="form-control">
  </div>
</div>


<div class="page-header"> </div>
  <div class="form-group form-inline col-sm-10">
    <label for="reg" class="control-label col-sm-5">Check for errors before submitting the form!</label>
      <button class="btn btn-success" type="submit"  id="reg">Register</button>
      <label for"reset" class="control-label"> </label>
      <button class="btn btn-danger" type="reset" id="reset"> Reset </button>
  </div>
</div>


</form>


<div class="page-header"> </div>
<link rel="stylesheet" href="./bootstrap/dist/css/bootstrap.min.css">
<link href="./css/main.css" rel="stylesheet">
<link href="./css/employer.css" rel="stylesheet">
<link href="./css/home.css" rel="stylesheet">
<script src="./js/jquery-1.12.0.min.js"></script>
<script src="./js/bootstrap.min.js"></script>



</body>
</html>
