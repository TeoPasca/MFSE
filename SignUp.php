<?php
$server = 'localhost';
$user   = 'root';
$pass   = '';
$name   = 'MFSE';	

$db = new PDO('mysql:host=localhost;dbname=' .$name . ';charset=utf8',  $user, $pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	if (!$db){
		echo 'failed';
}
	else{
		echo '';	
}

//insert

	if (isset($_POST["create"])) {
			$fName    = $_POST['firstName'];
			$lName    = $_POST['lastName'];
			$email    = $_POST['mail'];
			$password = $_POST['smecher'];
			$query = "INSERT INTO Register(fName, lName, email, password) VALUES(?,?,?,?)";
			$insert = $db->prepare($query);
			
			$result = $insert->execute([$fName, $lName, $email, $password]);
	if($result){
		echo '';	
}
	else{
	 	echo 'no save';	
	}			
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SignUp</title>
	<link rel="stylesheet" href="style.css"/>
	<script src="https://kit.fontawesome.com/1e7416c8f2.js" crossorigin="anonymous"></script>
	<script src="javaScript.js"></script>
	
</head>
<style>
	body{
	background:tomato;
	background-position:center;
	background-repeat:no-repeat;
	margin:0;
	padding:0;
	height:800px;
	
	}
	
	
	.all{
	 height: 100%;
   	 min-height: 100%;
   	 width: 100%;
   	 margin-left: auto;
   	 margin-right: auto;
   	 position: relative;
   	 box-sizing: border-box;
         }

	.container{
		margin-left:auto;
		margin-right:auto;
		width: 359px;
    		padding-top: 205px;
		}
	
	.header{
		padding-bottom:15px;
		color:white;
		text-align:center;
		position:relative;
		top:-37px;
		font-family: "Montserrat", Arial, sans-serif;
		
	}
	.details {
   		margin: 10px 0;
	}
	h2{
		font-size:14px;
		color:white;
		text-align:center;
		position:relative;
		font-family: "Montserrat", Arial, sans-serif;
	}
 		h2:before{
 		content:"";
 		width:88px;
 		height:2px;
 		background:white;
 		display:block;
 		position:absolute;
 		top:50%;
 		left: 5px;
 		}
 		
 		h2:after{
 		content:"";
 		width:88px;
 		height:2px;
 		background:white;
 		display:block;
 		position:absolute;
 		top:50%;
 		right: 5px;
 		}
 	
		
	.name{
	height:53px;
	}
	
		
	
	.firstname{
	float:left}
	
	.lastname{
	float:left;
	margin-left: 12px;} 
	.second{
	position:relative;
	max-width:100%;
	}
	
	.third{
	position:relative;}	
	
	.forth{
	position:relative;
	max-width:100%;
	padding-top:20px;
	padding-bottom:60px;
	text-align:center;
	}
	
	
	input[type=name]{
		width:121px;
		margin:5px;
		border-radius:5px;
		font-size:15px; 
		background: rgba(255,255,255,0.8);
		border: 1px solid rgba(255,255,255,0);
		
		}
	
	input[type=password]{
		width:348px;
		margin:5px;
		border-radius:5px;
		box-sizing:border-box;
		padding-left:35px;
		font-size:15px;
		background: rgba(255,255,255,0.8);
		border: 1px solid rgba(255,255,255,0);
		}
		
	input[type=email]{
		width:348px;
		margin:5px;
		border-radius:5px;
		padding-left:35px;
		box-sizing:border-box;
		font-size:15px;
		font:'Open Sans', Arial, sans-serif;
		background: rgba(255,255,255,0.8);
		border: 1px solid rgba(255,255,255,0);
		}
		
	.regbutton{
		width:348px;
		
		border-radius:5px;
		font-size:20px; 
		box-sizing:border-box;
		background-color: #f2653c;
		border:1px solid #f2653c;
		cursor:pointer;	
		font-family: "Montserrat", Arial, sans-serif;
		height:45px;
		color:white;
		font-weight:bold;
		
                }

		
		
	i.fas.fa-envelope {
    		position: absolute;
    		left:18px;
    		top:17px;
    		}
    	
	i.fas.fa-lock {
 		position: absolute;
    		left: 18px;
    		top: 14px;
		}
	i.fas.fa-eye{
		position:absolute;
		top:9px;
		right:7px;
		cursor:pointer;	
		}
	.hide{
		position: absolute;
	    	wi: ;
	    	top:11px;
	    	right:10px;
	    	border: none;
	    	width:38px;
	    	height:34px;
	    	background: transparent;
	    	white-space:nowrap;
		}
	.login{
		text-align:center;
		margin-top:20px;
		color:white;
	        }
	a:visited, a:link {
        	color: white;
                }
	

</style>

<body>

	
	<div class="all">
		<form action="SignUp.php" method="POST">
			<div class="container">
			<div class="header">
				<h1>CREATE YOUR ACCOUNT HERE</h1>
			</div>
			
			<div class="details">
				<h2>add your details below
				</h2>
			</div>
			
			<div class="name">
				<div class="firstname">
					<input name="firstName" type="name" value placeholder="First Name" maxlength="32" />
				</div>
			
				<div class="lastname">
					<input name="lastName" type="name" value placeholder="Last Name"  />
				</div>	
				
			</div>
			
			
			<div class="second">
				
				<input class="test" name="mail" type="email" value placeholder="Email"/>
				<i class="fas fa-envelope"></i> 
			</div>
			<div class="third">
				<i class="fas fa-lock"></i>
				<input name="smecher" type="password" value placeholder="Password" id="myInput" maxlength="32" required/>
				<button type="button" class="hide" onclick="myFunction()" tabindex="-1"> 
				<i class="fas fa-eye" id="eye"></i> 
				
			</div>
			<br>	
			<div class="forth">
				<button class="regbutton" type="submit" name="create" on> CREATE ACCOUNT</button>
			</div>
			
			<div class="login"> 
				<a href="./SignIn.html">Already registered? Sign in here</a>
			</div>
		</form>
	</div>	
	
	



</body>



















 
