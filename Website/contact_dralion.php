<!DOCTYPE html>
<html>

<head>
<link href="style.css" rel="stylesheet" type="text/css" />
    <link href="script.js" rel="dynamic" type="script"/>
    <link rel="shortcut icon" href="logo.jpeg" type="image/x-icon" />

    <title>Dralion Construction</title>
    <body>
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <div class="header">
          <div class="header-left">
            <a href="main.html" class="logo"><img src="logo.jpeg"  alt="logo" width="200" height="145"></a>

          </div>
            <div class="header-right">

              <a  href="main.html">Home</a>
              <a href="aboutus.html">About Us</a>
              <a href="Expertise.html">Expertise</a>
              <a href="ourservices.html">Our Services</a>
              <a href="projects.html">Projects</a>
              <a href="whyus.html">why us?</a>
              <a href="opportunities.html">Opportunities</a>
              <a class="active" href="contactus.html">Contact Us</a>

            </div>
          </div>
         
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "website");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
		$address = $_REQUEST['address'];
		$phone = $_REQUEST['phone'];
		$email = $_REQUEST['email'];
		$comment=$_REQUEST['comment'];
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO message VALUES ('$name',
			'$address','$phone','$email','$comment')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h1>Message received successfully.</h1>";
            echo"<h2>We will get back to you soon!.</h2>";
			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
