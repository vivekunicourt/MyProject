<?php
$servername = "localhost";
$username = "unicourt_user";
$password = "password10";
$dbname = "test";

//$conn = mysqli_connect('localhost', 'unicourt_user', 'password10','test');
$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
//$password );
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(!$conn)
	die('couldn\'t connect');
else
	echo 'connection successfuls';
/*class test
{
	//echo "hi im a test class";
	const bar='123';
}*/
//echo 'test';
$name=$_GET["name"];
$age=$_GET["age"];

//echo phpinfo();

echo "name is ".$name." and age is ".$age;

