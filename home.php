
<!DOCTYPE html>
<html>
<head>
<title>Feedback Engine</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elegant Feedback Form  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- //custom-theme -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
</head>
<body class="agileits_w3layouts">
	<center>
    <img id="headerImg" src="./images/bg2.jpg" alt="background"><br/>
    </center>

    <div class="w3layouts_main wrap">

		<h1 class="text-center" style="font-size: 1.5em";>Online student feedback system</h1>
	  <br/>
		<h3>Please help us to serve you better by taking a couple of minutes. </h3>
	    <form action="feedback.php"  method="post" class="agile_form">
		  <h2>How satisfied were you?</h2>
			 <ul class="agile_info_select">
				 <li><input type="radio" name="view" value="excellent" id="excellent" required> 
				 	  <label for="excellent">excellent</label>
				      <div class="check w3"></div>
				 </li>
				 <li><input type="radio" name="view" value="good" id="good"> 
					  <label for="good"> good</label>
				      <div class="check w3ls"></div>
				 </li>
				 <li><input type="radio" name="view" value="neutral" id="neutral">
					 <label for="neutral">neutral</label>
				     <div class="check wthree"></div>
				 </li>
				 <li><input type="radio" name="view" value="poor" id="poor"> 
					  <label for="poor">poor</label>
				      <div class="check w3_agileits"></div>
				 </li>
			 </ul>	  
			<h2>If you have specific feedback, please write to us...</h2>
			<textarea placeholder="Additional comments" class="w3l_summary" name="comments" required=""></textarea>
			<select name="course" required>
			<option value="" disabled selected>Select Your Course</option>
			<option value="course1">Course 1</option>
			<option value="course2">Course 2</option>
			<option value="course3">Course 3</option>
			<option value="course4">Course 4</option>
			</select>
		
			<center><input type="submit" value="Submit" class="agileinfo" onclick="submitForm()"></center><br>
			
	  </form>
	  <br/>
            <center>
            <a href="login.php">Logout</a>
            </center>
            <br/>
	</div>
	<div class="agileits_copyright text-center">
			<center><p>&COPY; IVEI Project Students 2023 </p></center>
	</div>
</body>
</html>
