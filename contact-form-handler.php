<?php


$var=mysqli_connect('localhost','root','','marvel-313235a982-313235cab2');

$query="insert into signup values('".$_POST['email']."','".$_POST['username']."','".$_POST['psw']."')";
echo $query;
$result=mysqli_query($var,$query);
echo ("<script LANGUAGE='JavaScript'>
    window.alert('You have been registered. Press ok to continue');
    window.location.href='index.html';
    </script>");
?>