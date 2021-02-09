<!DOCTYPE html>
<html lang="en">
  <head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1"><head>
    <title>Signin</title>

</head>

        <!-- Right column -->
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">

<nav class="navbar" id="insidenav">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Cs Job Portal</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="right.php">Login</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
    <span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="JobSeekerReg.php">Jobseeker</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="EmployerReg.php">Company</a></li>
        </ul>
      </li>
      </ul>
  </div>
</nav>

<body>
  <div class="container col-sm-5 pull-right">
    <div class="login">
    <form name="form1" action="login.php" method="post">
      <h2 class="form-signin-heading">Please sign in</h2>

      <tr>
        <td><strong>User Name</strong></td>
      </tr>
      <tr>
<td><span id="sprytextfield1">
          <label>
          <input type="text" name="txtUser" id="txtUser">
          </label>
        <span class="textfieldRequiredMsg">*</span></span>
<label></label></td>
      </tr>
      <tr>
        <td><strong>Password</strong></td>
      </tr>
      <tr>
  <td><span id="sprytextfield2">
          <label>
          <input type="password" name="txtPass" id="txtPass">
          </label>
        <span class="textfieldRequiredMsg">*</span></span></td>
      </tr>
      <tr>
        <td><strong>User Type</strong></td>
      </tr>
       <label><input type="checkbox" value="remember-me"> Remember me </label>

            <label for="User type" class="sr-only">Usertype</label>
                        <select name="cmbUser" id="cmbUser">
                          <option value="JobSeeker">JobSeeker</option>
                          <option value="Employer" selected="selected">Employer</option>
                          <option value="Administrator">Administrator</option>
                          </select>
                    <tr>
                      <td><label>
                        <div align="center">
                          <input type="submit" name="button" id="button" value="Login">
                          </div>
                      </label></td>
                    </tr>
                    <tr>
                      <td><div align="center"><a href="Forget.php"><strong>Forgot Password? </strong></a></div></td>
                    </tr>
                  </table>
      </form>
              </div>
                <br/>

              </body>

            <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
            <link href="css/signin.css" rel="stylesheet">

            </html>
