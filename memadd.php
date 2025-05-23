<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
    <center>
        <label for="name">Enter Member Name:</label><br><input type="text" name="name" placeholder="Enter Member Name" ><br><br>
        <label for="npass">Enter New Password:</label><br><input type="text" name="npass" placeholder="Enter New Password"><br><br>
        <label for="cpass">Confirm new password:</label><br><input type="text" name="cpass" placeholder="Confirm New Password"><br><br>
        <label for="name">Enter Mobile Number:</label><br><input type="text" name="mob" placeholder="Enter Mobile Number"><br><br>
        <input type="submit" name="sbtn" value="Confirm Member">
    </center>
    <input type="submit" name="back" value="Back">
</form>
</body>
</html>
<?php
if(isset($_POST['sbtn'])){
    $name=strtoupper($_POST['name']);
    $newpass=$_POST['npass'];
    $confirmpass=$_POST['cpass'];
    $mob=$_POST['mob'];
    if(empty($name)&empty($mob)){
        echo "<script>alert('Fields Cannot be left Empty');</script>";
        echo "<script>window.location.href='memadd.php';</script>";
    }
    
    if($newpass==$confirmpass){
        $cn=mysqli_connect('localhost','root','','user');
        $qry="insert into userinfo values('".$name."','".$newpass."','".$mob."')";
        $rs=mysqli_query($cn,$qry);
        if($rs){
            echo "<script>alert('Member added Successfully');</script>";
            echo "<script>window.location.href='memadd.php';</script>";
        }
    }else{
        echo "<script>alert('Passwords Do not match');</script>";
        echo "<script>window.location.href='memadd.php';</script>";
    }
}
if(isset($_POST['back'])){
    echo "<script>window.location.href='adminhome.php';</script>";
}
?>