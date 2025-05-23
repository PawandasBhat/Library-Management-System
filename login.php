

<html>
<head>
<title>Login</title>
<style>
*{
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: 'Roboto';
}
body{
display: flex;
justify-content: center;
align-items: center;
background-image: url(https://www.pixground.com/wp-content/uploads/2023/07/Dark-Blue-Abstract-Layers-AI-Generated-4K-Wallpaper-jpg.webp);
background-size: cover;
}
.cont{
     width: 350px;
 height: 400px;
box-shadow: 2px 2px 20px black;
background-color: transparent;
backdrop-filter: blur(8px);
border-radius: 20px;
}

input::placeholder{
color:white;
}

input{
margin-bottom: 15px;
top:80px;
position: relative;
left: 10px;
width: 307px;
height: 30px;
margin-left: 10px;
transition: 0.3s linear;
background: transparent;
border: none;
border-bottom: 1px solid white;
}

input:hover{
border: none;
background-color: none;
cursor: pointer;
}
input:focus{
background-color: none;
color:white;
}


form{
font-size: 1.1rem;
font-family: 'calibri';
font-weight: bold;
}
.cont h2{
top: 20px;
position: relative; 
font-size: 40px;
color: white;
text-align: center;
margin-bottom: 10px; 
}
.btn{
width: 106px;
height: 30px;
position: relative;
top: 120px;
left: 105px;
margin-top: 22px;
font-weight: bold;
background-color:white;
color: black;
transition: 0.4s linear;

border-radius: 12px;
border: none;
}
.btn:hover{
background-color: blue;
color: white;
box-shadow: 0px 0px 4px blue;
border: none;
cursor: pointer;
}
</style>
</head>

<div class="cont">



<html>
<head>
<title>Login</title>
<style>
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Roboto';
}
body{
	display: flex;
	justify-content: center;
	align-items: center;
	background-image: url(backgroundlogin.jpg);
	background-size: cover;
}
.cont{
     width: 350px;
	 height: 450px;
	box-shadow: 10px 10px 10px black;
	background-color: transparent;
	backdrop-filter: blur(8px);
	border-radius: 20px;
}

input::placeholder{
	color:black;
}

input{
	margin-bottom: 15px;
	top:120px;
	position: relative;
	left: 10px;
	width: 307px;
	height: 30px;
	margin-left: 10px;
	transition: 0.3s linear;
	background-color:white;
	border-radius:10px;
	border: none;
	border-bottom: 1px solid white;
}

input:hover{
	border: none;
	border-radius:10px;
	background-color: white;
	cursor: pointer;	
}
input:focus{
	background-color: white;
	color:white;
}
input::placeholder{
    text-align:center;
}

form{
	font-size: 1.1rem;
	font-family: 'calibri';	
	font-weight	: bold;
}
.cont h2{
	top: 40px;
	position: relative; 
	font-size: 40px;
	color: white;
	text-align: center;
	margin-bottom: 10px; 
}
.head h1{
	position:relative;
	top:20px;
	color:white;
	left:5px;
	padding:5px;
	text-align:center;
}
.btn{
	width: 106px;
	height: 30px;
	position: relative;
	top: 120px;
	left: 50px;
	margin-top: 22px;
	font-weight: bold;
	background-color:white;
	color: black;
	transition: 0.4s linear;
	
	border-radius: 12px;
	border: none;
}
.btn:hover{
	background-color: blue;
	color: white;
	box-shadow: 0px 0px 4px blue;
	border: none;
	cursor: pointer;
}
.cont .label{
   position:relative;
   color:white;
   font-family:
   border-radius:10px;
   text-align:center;
   width:300px;
   
   padding:2px;
   top:80px;
   left:25px;
   
}

</style>
</head>
<body>


<div class="cont">
	<form action="" method="post" class="cont">
	<div class="head"><h1>Granth Bhandaar</h1></div>
	<h2>LOGIN</h2>
    <div class="label">
    <label for="username" > Enter Membership number </label>
	
    </div>
		<input type="text" name="usn" placeholder="Enter your name.."></input>
		<input type="password" name="pass" placeholder="Enter your password"></input>
		<br>
		<br>
        
		<input class="btn" type="submit" name="login" value="Login"></input>
        <input class="btn" type="submit" name="login1" value="Admin Login"></input>
    </form>
</div>

</body>
</html>
<?php
if(isset($_POST['login1'])){
	
	echo "<script>window.location.href='adminlogin.php'</script>";
}
?>