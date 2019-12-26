<?php
$username = filter_input(INPUT_POST, 'uname');
$password = filter_input(INPUT_POST, 'psw');
if(!empty($username)){
	if(!empty($password)){
		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "murali";
		$dbname = "qatar";
		
		// create_connection
		
			$conn = new mysqli ($host, $dbusername,$dbpassword,$dbname);
			if(mysqli_connect_error()){
				die('Connect Error ('.mysqli_connect_errno().')'
				.mysqli_connect_error());
				
			}
			
			else{
				$sql = "INSERT INTO Login (Username, password)"
				values($username,$password);
				
				if($conn-> query($sql){
					echo "inserted succesfully"
				}
				else{
					echo "error";
				}
				$conn-> close();
			}
	}
	else{
	echo "password should not be empty";
	die();
	}
}
else{
	echo "User name should not be empty";
	die();
}



?>