<?php

$servername = "localhost";
$username = "unicourt_user";
$password = "password10";
$dbname = "school";

//$conn = mysqli_connect('localhost', 'unicourt_user', 'password10','test');
$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
//$password );
    // set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//include 'dbconnect.php';
$date=date("Y-m-d H:i:s");

$save_form = true;

if(!isset($argv[1])){
	echo "Please enter the first name\n";
    $save_form = false;}
elseif (!isset($argv[2])) {
	echo "Please enter the last name\n";
	  $save_form = false;
}
elseif (!isset($argv[3])) {
	echo "Please enter the email\n";
	  $save_form = false;
}
elseif (!isset($argv[4])) {
	echo "Please enter the password\n";
	  $save_form =false;
}
elseif (!isset($argv[5])) {
	echo "Please enter whether disabled or not\n";
	  $save_form = false;
}

if(count($argv)!=6)
	echo " please enter the correct no of arguments\n";
//echo var_dump($argv);
//echo PHP_EOL;
//exit;

if($save_form==true){
	$pwd=password_hash($argv[4],PASSWORD_DEFAULT);
    $data = array(
 'first_name'=> $argv[1],
'last_name'=> $argv[2],
'email'=> $argv[3],
'password'=>$pwd,
'activate_date'=>$date,
'is_disabled'=>$argv[5],
);



//print count($data);


$sql="insert into users(`first_name`,`last_name`,`email`,`password`,`activate_date`,`is_disabled`)values(:first_name,:last_name,:email,:password,:activate_date,:is_disabled)";
$conn->prepare($sql)->execute($data);


}
?>