
<html>
<head>
<meta charset="UTF-8">
</head>


<body >


<?php
//connect with server 
$connect=mysqli_connect( "localhost" ,"root", "12345678" );

//select database (fitnut) 
mysqli_select_db($connect,"fitnut");

// get user's information from html page (signup) using (form)
$user_name = $_POST["username_1"];
$user_password = $_POST["password_1"];
$user_email= $_POST["email_1"];
$user_age = $_POST["age_1"];
$user_gender = $_POST["gender_1"];
$user_height = $_POST["height_1"];
$user_weight = $_POST["weight_1"];


// insert user's information to database 

$insert_user_information = "insert into signup (username,email,password,height,weight,age,gender)
values('$user_name' , '$user_email' , '$user_password' , '$user_height' , '$user_weight' , '$user_age' , '$user_gender' )";

if(mysqli_query($connect,$insert_user_information))
	print("<h1 style = 'color:red ; font-size:90px; text-alien:center' > Welcome to our Website <h1>");
else
	print("Try again please ");

//close database connection
mysqli_close($connect);
	


?>



</body >
</html >
