<?php

//NAME
if (empty($_POST["name"])) 
{
    $data['name'] = "*Name is required";
} 
else 
{
    $name = $_POST["name"];
    $data['name'] ="";
}

//EMAIL
if (empty($_POST["email"])) 
{
    $data['email'] = "*Email is required";
} 
else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) 
{
    $data['email'] = "Invalid email format";
}
else 
{
    $email = $_POST["email"];
    $data['email'] ="";
}

//MSG SUBJECT
if (empty($_POST["subject"])) 
{
    $data['subject'] = "*Subject is required";
} 
else 
{
    $subject = $_POST["subject"];
    $data['subject'] ="";
}

//MESSAGE
if (empty($_POST["message"])) 
{
    $data['message'] = "*Message is required";
} 
else 
{
    $message = $_POST["message"];
    $data['message'] ="";
}

if(empty($data['name']) and empty($data['email']) and empty($data['subject']) and empty($data['message']))
{
	$msg = "Name: ".$name.", Email: ".$email.", Subject: ".$subject.", Message:".$message;
	echo json_encode(['code'=>200, 'msg'=>$msg]);
	exit;
}
else
{
    echo json_encode(['code'=>404, 'msg'=>$data]);
}

?>