<!DOCTYPE html>
<html>
<head>
	<title>Register - Session 3</title>
	<style type="text/css">
		.error {
			color: red;
		}
	</style>
</head>
<body>
	<h1>Register form</h1>
    <?php 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database="users";
        $conn = mysqli_connect($servername, $username, $password,$database);
		$errUserName = $errEmail =  '';
		$username = $email = '';
		$checkRegister=true;
		if (isset($_POST['register'])) {
			$username =  $_POST['username'];
			$email =  $_POST['email'];
			
			//var_dump($_POST['city']);
			if ($username == '') {
				$errUserName  = 'Please input your username';
				$checkRegister = false;
			} else {
				$errUserName = '';
			}
			if ($email == '') {
				$errEmail  = 'Please input your password';
				$checkRegister = false;
			} else {
				$errEmail = '';
            }
            if ($checkRegister){
				$sql = "INSERT INTO users (Fullname, Email)
                VALUES ('$username', '$email')";

                if ($conn->query($sql) === TRUE) {
                    echo "New record created successfully";
                } else {
                     echo "Error: " . $sql . "<br>" . $conn->error;
                }
			}	
        }
        mysqli_close($conn);

	?>	
	<form action="#" method="POST">
		<p>Username: 
			<input type="text" name="username" value="<?php echo $username?>">
		</p>
		<p class="error"><?php echo $errUserName;?></p>
		<p>Email: 
			<input type="text" name="email" value="<?php echo $email?>">
		</p>
		<p class="error"><?php echo $errEmail;?></p>
		<p>
			<input type="submit" name="register" value="Register">
		</p>
	</form>
</body>
</html>