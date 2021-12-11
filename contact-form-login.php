<?php
$var=mysqli_connect('localhost','root','','marvel-313235a982-313235cab2');
 
	$name = $_POST["username"]; 
	$password = $_POST["psw"];
	$query="SELECT username, psw FROM signup WHERE username = '".$name."' AND  password = '".$password."'";
	$result1=mysqli_query($var,$query);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
	$count = mysqli_num_rows($result);
    if($count==1 )
    { 
        $_SESSION["logged_in"] = true; 
        $_SESSION["naam"] = $name; 
		echo ("<script LANGUAGE='JavaScript'>
		window.alert('Log In Succesfull');
		window.location.href='login.html';
		</script>");
    }
    else
    {
        echo ("<script LANGUAGE='JavaScript'>
		window.alert('Log In Failed');
		window.location.href='login.html';
		</script>");
    }
?>