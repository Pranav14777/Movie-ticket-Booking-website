<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
	<style>
		#bd{
			background-image:url("cafe.jpg");
		}
	</style>
</head>

<body id="bd">
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "employee");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$name = $_REQUEST['name'];
		$address = $_REQUEST['address'];
		$zipcode = $_REQUEST['zipcode'];
		$email = $_REQUEST['email'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO pharmacy VALUES ('$username',
			'$password','$name','$address','$zipcode','$email')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$username\n $password\n "
				. "$name\n $address\n $zipcode\n $email");
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