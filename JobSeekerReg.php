<!DOCTYPE HTML>
 <html>
 <head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Job Seeker Registration</title>
    <style type="text/css"> </style>

    <script type="text/javascript">

    // Code begin...
    // Set the initial date.
    var ds_i_date = new Date();
    ds_c_month = ds_i_date.getMonth() + 1;
    ds_c_year = ds_i_date.getFullYear();

    // Get Element By Id
    function ds_getel(id) {
    	return document.getElementById(id);
    }

    // Get the left and the top of the element.
    function ds_getleft(el) {
    	var tmp = el.offsetLeft;
    	el = el.offsetParent
    	while(el) {
    		tmp += el.offsetLeft;
    		el = el.offsetParent;
    	}
    	return tmp;
    }
    function ds_gettop(el) {
    	var tmp = el.offsetTop;
    	el = el.offsetParent
    	while(el) {
    		tmp += el.offsetTop;
    		el = el.offsetParent;
    	}
    	return tmp;
    }

    // Output Element
    var ds_oe = ds_getel('ds_calclass');
    // Container
    var ds_ce = ds_getel('ds_conclass');

    // Output Buffering
    var ds_ob = '';
    function ds_ob_clean() {
    	ds_ob = '';
    }
    function ds_ob_flush() {
    	ds_oe.innerHTML = ds_ob;
    	ds_ob_clean();
    }
    function ds_echo(t) {
    	ds_ob += t;
    }

    var ds_element; // Text Element...

    var ds_monthnames = [
    'January', 'February', 'March', 'April', 'May', 'June',
    'July', 'August', 'September', 'October', 'November', 'December'
    ]; // You can translate it for your language.

    var ds_daynames = [
    'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'
    ]; // You can translate it for your language.

    // Calendar template
    function ds_template_main_above(t) {
    	return '<table cellpadding="3" cellspacing="1" class="ds_tbl">'
    	     + '<tr>'
    		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_py();">&lt;&lt;</td>'
    		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_pm();">&lt;</td>'
    		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_hi();" colspan="3">[Close]</td>'
    		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_nm();">&gt;</td>'
    		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_ny();">&gt;&gt;</td>'
    		 + '</tr>'
    	     + '<tr>'
    		 + '<td colspan="7" class="ds_head">' + t + '</td>'
    		 + '</tr>'
    		 + '<tr>';
    }

    function ds_template_day_row(t) {
    	return '<td class="ds_subhead">' + t + '</td>';
    	// Define width in CSS, XHTML 1.0 Strict doesn't have width property for it.
    }

    function ds_template_new_week() {
    	return '</tr><tr>';
    }

    function ds_template_blank_cell(colspan) {
    	return '<td colspan="' + colspan + '"></td>'
    }

    function ds_template_day(d, m, y) {
    	return '<td class="ds_cell" onclick="ds_onclick(' + d + ',' + m + ',' + y + ')">' + d + '</td>';
    	// Define width the day row.
    }

    function ds_template_main_below() {
    	return '</tr>'
    	     + '</table>';
    }

    // This one draws calendar...
    function ds_draw_calendar(m, y) {
    	// First clean the output buffer.
    	ds_ob_clean();
    	// Here we go, do the header
    	ds_echo (ds_template_main_above(ds_monthnames[m - 1] + ' ' + y));
    	for (i = 0; i < 7; i ++) {
    		ds_echo (ds_template_day_row(ds_daynames[i]));
    	}
    	// Make a date object.
    	var ds_dc_date = new Date();
    	ds_dc_date.setMonth(m - 1);
    	ds_dc_date.setFullYear(y);
    	ds_dc_date.setDate(1);
    	if (m == 1 || m == 3 || m == 5 || m == 7 || m == 8 || m == 10 || m == 12) {
    		days = 31;
    	} else if (m == 4 || m == 6 || m == 9 || m == 11) {
    		days = 30;
    	} else {
    		days = (y % 4 == 0) ? 29 : 28;
    	}
    	var first_day = ds_dc_date.getDay();
    	var first_loop = 1;
    	// Start the first week
    	ds_echo (ds_template_new_week());
    	// If sunday is not the first day of the month, make a blank cell...
    	if (first_day != 0) {
    		ds_echo (ds_template_blank_cell(first_day));
    	}
    	var j = first_day;
    	for (i = 0; i < days; i ++) {
    		// Today is sunday, make a new week.
    		// If this sunday is the first day of the month,
    		// we've made a new row for you already.
    		if (j == 0 && !first_loop) {
    			// New week!!
    			ds_echo (ds_template_new_week());
    		}
    		// Make a row of that day!
    		ds_echo (ds_template_day(i + 1, m, y));
    		// This is not first loop anymore...
    		first_loop = 0;
    		// What is the next day?
    		j ++;
    		j %= 7;
    	}
    	// Do the footer
    	ds_echo (ds_template_main_below());
    	// And let's display..
    	ds_ob_flush();
    	// Scroll it into view.
    	ds_ce.scrollIntoView();
    }

    // A function to show the calendar.
    // When user click on the date, it will set the content of t.
    function ds_sh(t) {
    	// Set the element to set...
    	ds_element = t;
    	// Make a new date, and set the current month and year.
    	var ds_sh_date = new Date();
    	ds_c_month = ds_sh_date.getMonth() + 1;
    	ds_c_year = ds_sh_date.getFullYear();
    	// Draw the calendar
    	ds_draw_calendar(ds_c_month, ds_c_year);
    	// To change the position properly, we must show it first.
    	ds_ce.style.display = '';
    	// Move the calendar container!
    	the_left = ds_getleft(t);
    	the_top = ds_gettop(t) + t.offsetHeight;
    	ds_ce.style.left = the_left + 'px';
    	ds_ce.style.top = the_top + 'px';
    	// Scroll it into view.
    	ds_ce.scrollIntoView();
    }

    // Hide the calendar.
    function ds_hi() {
    	ds_ce.style.display = 'none';
    }

    // Moves to the next month...
    function ds_nm() {
    	// Increase the current month.
    	ds_c_month ++;
    	// We have passed December, let's go to the next year.
    	// Increase the current year, and set the current month to January.
    	if (ds_c_month > 12) {
    		ds_c_month = 1;
    		ds_c_year++;
    	}
    	// Redraw the calendar.
    	ds_draw_calendar(ds_c_month, ds_c_year);
    }

    // Moves to the previous month...
    function ds_pm() {
    	ds_c_month = ds_c_month - 1; // Can't use dash-dash here, it will make the page invalid.
    	// We have passed January, let's go back to the previous year.
    	// Decrease the current year, and set the current month to December.
    	if (ds_c_month < 1) {
    		ds_c_month = 12;
    		ds_c_year = ds_c_year - 1; // Can't use dash-dash here, it will make the page invalid.
    	}
    	// Redraw the calendar.
    	ds_draw_calendar(ds_c_month, ds_c_year);
    }

    // Moves to the next year...
    function ds_ny() {
    	// Increase the current year.
    	ds_c_year++;
    	// Redraw the calendar.
    	ds_draw_calendar(ds_c_month, ds_c_year);
    }

    // Moves to the previous year...
    function ds_py() {
    	// Decrease the current year.
    	ds_c_year = ds_c_year - 1; // Can't use dash-dash here, it will make the page invalid.
    	// Redraw the calendar.
    	ds_draw_calendar(ds_c_month, ds_c_year);
    }

    // Format the date to output.
    function ds_format_date(d, m, y) {
    	// 2 digits month.
    	m2 = '00' + m;
    	m2 = m2.substr(m2.length - 2);
    	// 2 digits day.
    	d2 = '00' + d;
    	d2 = d2.substr(d2.length - 2);
    	// YYYY-MM-DD
    	return y + '-' + m2 + '-' + d2;
    }

    // When the user clicks the day.
    function ds_onclick(d, m, y) {
    	// Hide the calendar.
    	ds_hi();
    	// Set the value of it, if we can.
    	if (typeof(ds_element.value) != 'undefined') {
    		ds_element.value = ds_format_date(d, m, y);
    	// Maybe we want to set the HTML in it.
    	} else if (typeof(ds_element.innerHTML) != 'undefined') {
    		ds_element.innerHTML = ds_format_date(d, m, y);
    	// I don't know how should we display it, just alert it to user.
    	} else {
    		alert (ds_format_date(d, m, y));
    	}
    }

    // And here is the end.

    // ]]> -->
    </script>


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
		"Please Enter Name"
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
		"You have entered an invalid email address "
						  ]
                   ],
				   [//Mobile
						   ["num",
		"Please Enter valid Mobile "
						  ],
						  ["minlen=10",
		"Please Enter valid Mobile "
						  ],
						  ["maxlen=10",
		"Please Enter valid Mobile "
						  ]
                   ],
				   [//Qual




                   ],
				   [//Other


                   ],
				   [//Gender


                   ],
				   [//Birthdate

						["minlen=1",
		"Please Enter Birthdate "
						  ]

                   ],
				   [//Upload

					 ["minlen=1",
		"Please Upload Marksheet "
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

<nav class="navbar" id="insidenav">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="./index.php">Cs Job Portal</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Jobseeker Registraation</a></li>

       </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="./login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
       </ul>
     </div>
 </nav>

<div class="container">
    <div class="container">
        <div class="jumbotron">
            <h1 align="center">Register & find Jobs</h1>
            <p>Helps passive and active jobseekers find better jobs. Get connected with over 45000 recruiters.<br/>
               Apply to jobs in just one click. Apply to thousands of jobs posted daily.
            </p>
        </div>

    <form action="JobSeekerInsert.php" method="post" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2" class="form-horizontal">
    <h1 class="h3style"> Your Login Detials </h1>


     <div class="form-group">
        <font size="3" label class="control-label col-sm-2" for="UserName" > UserName</font></label>
        <div class="col-sm-4">
             <input type="text" name="txtUserName" placeholder="Enter Your UserName" class="form-control" id="txtUserName" />
        </div>
     </div>

     <div class="form-group">
        <font size="3" label class="control-label col-sm-2 " for="Password" > Create new Password </font></label>
        <div class="col-sm-4">
             <input type="password" id="txtPassword" placeholder="New Password" name="txtPassword" class="form-control" />
        </div>
     </div>


     <div class="form-group">
       <font size="3" label for="File" class="control-label col-sm-2">Upload Resume</font></label>
       <div class="col-sm-4">
         <input type="file" name="txtFile" id="txtFile" class="form-control">
       </div>
     </div>

     <div class="form-group">
       <font size="3" label for="Security Question" class="control-label col-sm-2">Security Question</font></label>
       <div class="col-sm-4">
         <select name="cmbQue" id="cmbQue" class="form-control">
           <option selected="selected">What is Your Pet Name?</option>
           <option>Who is Your Favourite Person?</option>
           <option>What is the Name of Your First School?</option>
         </select>
       </div>
     </div>

     <div class="form-group">
       <font size="3" label for="text" class="control-label col-sm-2">Answer</font></label>
       <div class="col-sm-4">
         <input type="text" name="txtAnswer" id="txtAnswer" required placeholder="Answer" class="form-control">
       </div>
     </div>



     <div class="page-header"></div>
     <h1 class="h3style">Your Contact Information</h1>


     <div class="form-group">
        <font size="3" label class="control-label col-sm-2" for="name">Enter your Full Name</font></label>
        <div class="col-sm-4">
             <input type="text" id="txtName" placeholder="Your Name" name="txtName" class="form-control" />
        </div>
     </div>


     <div class="form-group">
        <font size="3" label for="txtAddress" class="control-label col-sm-2"> Address</font></label>
        <div class="col-sm-4">
             <textarea name="txtAddress" id="txtAddress" rows="5" class="form-control" placeholder="Your Address" required ></textarea>
        </div>
     </div>

     <div class="form-group">
       <font size="3" label for="BirthDate" class="control-label col-sm-2">BirthDate</font></label>
       <div class="col-sm-4">
         <input type="text" name="txtBirthDate" onclick="ds_sh(this);" id="txtBirthDate" required placeholder="Enter your Birthday" class="form-control">
       </div>
     </div>

     <div class="form-group">
        <font size="3" label class="control-label col-sm-2"> Region</font></label>
          <div class="col-sm-4">
            <select name="txtCity" id="txtCity" class="form-control"  required>
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

   <div class="form-group">
       <font size="3" label for"Email" class="control-label col-sm-2">E-mail</font></label>
       <div class="col-sm-4">
         <input type="text" name="txtEmail" id="txtEmail" required placeholder="Enter your Email" class="form-control">
       </div>
     </div>


     <div classs="form-group">
       <font size="3" label for"Mobile" class="control-label col-sm-2">Moblie Number</font></label>
       <div class="col-sm-4">
         <input type="text" name="txtMobile" id="txtMobile" requied placeholder="Enter your Mobile-Number" class="form-control">
       </div>
     </div>



     <div class="page-header"> </div>
     <h1 class="h3style"> Your Educational Qualifications </h1>


     <div class="form-group">
       <font size="3" label class="control-label col-sm-2" for="Qualification"> Your Basic Education</font> </label>
       <div class="col-sm-4"> <select name="txtQualification" id="txtQualification" class=" form-control" required>
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
       <select name="txtOther" id="txtOther"  class="form-control" required>
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
     <font size="3" label for="Gender" class="control-label col-sm-2">Gender</font></label>
     <div class="col-sm-4">
       <select name="cmbGender" id="cmbGender" class="form-control">
       <option value="Male">Male</option>
       <option value="Female">Female</option>
     </select>



   <div class="page-header"> </div>
    <div class="form-group form-inline col-sm-10" >
      <label for="button2" class="control-label col-sm-5"> Check for errors before submitting the form!</label>
      <button class="btn btn-success" type="submit"  id="button2">Submit</button>
      <label for"reset" class="control-label"> </label>
    </div>
   </div>


</form>



</body>
<link rel="stylesheet" href="./bootstrap/dist/css/bootstrap.min.css">
<link href="./css/main.css" rel="stylesheet">
<link href="./css/jobseeker.css" rel="stylesheet">
<script type="text/javascript" src="SpryAssets/SpryValidationTextarea.js"></script>
<script src="./js/jquery-1.12.0.min.js"></script>
<script src="./js/bootstrap.min.js"></script>

</html>
