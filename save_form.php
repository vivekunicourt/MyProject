<?php

//echo json_encode(['msg'=>'successfull']);
//exit;
session_start();
//echo $_SESSION["session_user_id"];exit;
$servername = "localhost";
$username = "unicourt_user";
$password = "password10";
$dbname = "school";


//echo '<Pre>';
//print_r($_REQUEST['p']);exit;

//$conn = mysqli_connect('localhost', 'unicourt_user', 'password10','test');
$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
//$password );
    // set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id=$_SESSION["session_user_id"];
//echo $id;exit;
$sql="select first_name,last_name,email from users where id='$id'";
$users=$conn->prepare($sql);
$users->execute(array(':id'=>$id));
$result=$users->fetch(PDO::FETCH_ASSOC);
//print_r($result);exit;
 $data = array(
 'first_name'=> $result['first_name'],
'last_name'=> $result['last_name'],
'email'=> $result['email'],
'phone_number'=>$_REQUEST['p'],
'comments'=>$_REQUEST['c'],

);



$sqli="insert into forms(`first_name`,`last_name`,`email`,`phone_number`,`comments`)values(:first_name,:last_name,:email,:phone_number,:comments)";
$conn->prepare($sqli)->execute($data);

echo json_encode(['msg'=>'Form submitted successfully!!!!']);


//<div class='notification is-success'>
 
  //Form submitted successfully!!!!</div>