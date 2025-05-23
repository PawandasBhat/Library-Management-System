

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
	 height: 400px;
	box-shadow: 2px 2px 20px black;
	background-color: transparent;
	backdrop-filter: blur(8px);
	border-radius: 20px;
}

input::placeholder{
	color:Black;
}

input{
	margin-bottom: 15px;
	top:80px;
	position: relative;
    text-align:center;
	left: 40px;
	width: 250px;
	height: 30px;
	margin-left: 10px;
	transition: 0.3s linear;
	border: none;
    border-radius:10px;
	border-bottom: 1px solid white;
}

input:hover{
	border: none;
	background-color: white;
	cursor: pointer;	
}
input:focus{
	background-color: none;
	color:black;
}


form{
	font-size: 1.1rem;
	font-family: 'calibri';	
	font-weight	: bold;
}
.cont h2{
	top: 20px;
	position: relative; 
	font-size: 40px;
	color: white;
	text-align: center;
	margin-bottom: 10px; 
}
.head h1{
	color:white;
	left:10px;
	padding:5px;
	text-align:center;
}
.btn{
	width: 106px;
	height: 30px;
	position: relative;
	top: 90px;
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
<body>

<div class="cont">
	<form action="" method="post" class="cont">
    <div class="head"><h1>Granth Bhandaar</h1></div>
	<h2>ADMIN LOGIN</h2>
		<input type="text" name="usn" placeholder="Enter your name.." required></input>
		<br>
		<br>
		<input type="password" name="pass" placeholder="Password.." required></input>
		<br>
		<input class="btn" type="submit" name="login" value="login"></input>
	</form>
</div>

</body>
</html>
<?php
if(isset($_POST['login'])){
    $user=$_POST['usn'];
    $pass=$_POST['pass'];
    $cn=mysqli_connect('localhost','root','','admininfo');
    $qry="select * from adinf where user='".$user."' and pass='".$pass."'";
    $rs=mysqli_query($cn,$qry);
    $rc=mysqli_num_rows($rs);
    if($rc!=0){
        echo "<script>alert('Successfully Logged In');</script>";
		echo "<script>window.location.href='adminhome.php';</script>";
    }else{
        echo "<script>alert('Invalid Username and Password');</script>";
    }
}
?>