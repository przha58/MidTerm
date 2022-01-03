<?php

	function validate($password)
	{
		$password=strlen($_POST['password']);
		if ($password < 8 || $password > 16)
		{
			echo"password should be bettwen 8 to 16 character";
			return false;
			
		}
		else
		{
			return true;
		
		}
	}

	if (isset($_POST['login']))
	{

		if (validate($_POST['password']))
		{

	 		$email=$_POST['email'];
			$gender=$_POST['gender'];

			echo "email is " . $email . "<br>";
			echo"gender is " . $gender . "<br>";


			if (isset($_POST['color']) != null)
			{
				$color=$_POST['color'];
				foreach ($color as $c)
				{
					echo"your favorite color is " . $c . "<br>";
				}
			}
			else
			{
				echo"no favorite color" . "<br>";
			}
		}
	}

 	else
 	{
 		echo "please Register the form ";
 		header('location:form.html');

 	}
 ?>
