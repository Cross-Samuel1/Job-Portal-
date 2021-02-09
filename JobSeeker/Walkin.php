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
	<title> Cs JOB PORTAL</title>
	<script type='text/javascript'></script>
	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width">

</head>

<body>
	<div class ="iframe-container"
	style="overflow: hidden;
	padding-top: 56.25%;
	position: relative;">
		<iframe allow="microphone; camera"
		style="border: 0;
		height:100%;
		left: 0;
		position: absolute;
		top:0;
		width:100%"
		src="https://success.zoom.us/wc/join{meeting-id}" frameborder="0"></iframe>
	</div>





</body>
</html>
