
<!DOCTYPE html>

<html>

<head>
	<title>Opportunities</title>
</head>
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
              <a class="active" href="opportunities.html">Opportunities</a>
              <a href="contactus.html">Contact Us</a>

            </div>
          </div>
         
<body>
    <style>
        .h1{
            color: #161541;
            width: 100%;
        }
    </style>
	
		<?php

	$conn = mysqli_connect("localhost", "root", "", "website");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
	if (isset($_POST['submit'])) {

				$name = $_POST['name'];
				$address = $_POST['address'];
				$phone = $_POST['phone'];
				$email = $_POST['email'];
				$cv = $_POST['cv'];


			
				if (isset($_FILES['pdf_file']['name']))
				{
				$file_name = $_FILES['pdf_file']['name'];
				$file_tmp = $_FILES['pdf_file']['tmp_name'];

				move_uploaded_file($file_tmp,"./pdf/".$file_name);

				$insertquery =
				"INSERT INTO application_dralion(name,address,phone,email,cv) VALUES('$name','$address','$phone','$email','$cv')";
				$iquery = mysqli_query($conn, $insertquery);
				}
				
				if(mysqli_query($conn, $iquery)){
					echo "<h1>Message received successfully.</h1>";
					echo"<h2>We will get back to you soon!.</h2>";
					
				} else{
					echo "ERROR: Hush! Sorry $insertquery. "
						. mysqli_error($conn);
				}
	

}
		
?>

</body>

</html>
