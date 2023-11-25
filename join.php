
<!DOCTYPE html>
<html>

<head>
	<title>Insert interestedUser for yavu -01</title>
</head>

<body>
     <h2> AERSENSE</h2>
		<?php
/*
$servername = "sql302.infinityfree.com";
$username = "if0_34530390";
$password = "KuRPomDZshjifFL";
$dbname = "if0_34530390_aersense";
*/

$servername = "localhost";
$username = "praveen";
$password = "";
$dbname = "aersense";

// Create connection
$conn = new mysqli($servername,$username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: "
		. $conn->connect_error);
}

		//$conn = mysqli_connect("localhost", "root", "", "staff");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		

        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $mobile = $_POST['mobile'];

		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO waitlist VALUES ('$name','$age','$email','$mobile')";
		if ($conn->query($sql) === TRUE) {
        echo "<script>
        alert('Thankyou for showing interest!');
        window.location.href='index.html';
        </script>";		  }
         else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		  }
        
        // Close connection
		mysqli_close($conn);
		?>
</body>

</html>
