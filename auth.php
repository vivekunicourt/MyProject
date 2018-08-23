<?php
session_start();
$servername = "localhost";
$username = "unicourt_user";
$password = "password10";
$dbname = "school";

$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




$email=$_POST["email"];
$password=$_POST["pwd"];

echo $email,$password;

//$email = 'pri@gmail.com';

$sql="select id,email,password from users where email='$email'";
$users=$conn->prepare($sql);
$users->execute(array(':email'=>$email));
$result=$users->fetch(PDO::FETCH_ASSOC);
//echo '<Pre>';
//echo ($result['password']);exit;

if($result){
	if(password_verify($password,$result['password'])){
		$_SESSION["session_user_id"] = $result['id'];
		//echo '<Pre>';
//print_r($_SESSION["session_user_id"]);exit;
		header("Location:form.php");
	}
	else{
		header("Location:login.php?msg=1");


	}
}
	
	else{
		$_SESSION['error_msg']="invalid user credentials";
		header("Location:login.php?msg=1");

	}



	



//var_dump($result);exit;

//echo '<Pre>';
//print_r($result);exit;


//echo var_dump($result);

//echo $fname;exit;
//echo '<Pre>';
//print_r(password_verify($password,$db_hashpwd));exit;


//if((password_verify($password,$result['password'])){


//$_SESSION["session_user_id"] = $users['id'];
//header("Location:form.php");

//}
//else{

	//header("Location:login.php");
//}
//echo "$_SESSION['fname']";exit;
//if(($result==''))
	//header("Location:login.php");
//else
	//header("Location:form.php");
/*echo '<Pre>';
var_dump($result);exit;

var_dump($result);exit;
//echo var_dump($result) ;

    print_r( $result['first_name']) . '<br />';
    echo $result['email'] . '<br />';*/



?>

