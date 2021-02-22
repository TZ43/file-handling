<!DOCTYPE html>
<html>
<head>
	<title>Form Registration </title>
</head>
<body>

	<h1>Form Registration</h1>

	<?php 

		$FirstName = $_POST['fname'];
		$LastName = $_POST['lname'];
		$Gender = $_POST['gender'];
		$Email = $_POST['email'];
		$UserName = $_POST['uname'];
		$Password = $_POST['password'];
		$RecoveryEmail = $_POST['recoveryemail'];

    	echo "First Name: $FirstName Last Name: $LastName  Gender: $Gender Email: $Email User Name: $UserName";

	
        $f = fopen("text.txt","a");
        fwrite($f, "First Name= ".$FirstName ."\n");
        fwrite($f, "Last Name= ".$LastName ."\n");
        fwrite($f, "User Name=".$UserName. "\n");
        fwrite($f, "Email= ".$Email. "\n");
        fwrite($f, "Password=".$Password. "\n");
        fwrite($f, "Recovery Email=".$RecoveryEmail. "\n");
        fwrite($f, "Gender= ".$Gender ."\n\n");

        fclose($f);

	?>

</body>
</html>