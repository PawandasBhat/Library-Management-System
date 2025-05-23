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
        <label for="name">Enter the Name of the member:</label><br><br><input type="text" name="name" placeholder="Enter Member Name"><br><br>
        <input type="submit" name="rembtn" value="Remove Member" onclick="return confirm('Are You Sure?')">
    </center>
    <input type="submit" name="back" value="Back">
    </form>
</body>
</html>
<?php
if(isset($_POST['rembtn'])){
    $name=$_POST['name'];
    $cn=mysqli_connect('localhost','root','','user');
    $qry="delete from userinfo where name='.$name.'";
    $rs=mysqli_query($cn,$qry);
    if($rs){
        echo "<script>alert('Member Removed Successfully');</script>";
        echo "<script>window.location.href='memrem.php';";
    }else{
        echo "<script>alert('Member Info Not Found');</script>";
        echo "<script>window.location.href='memrem.php';";
    }
}
if(isset($_POST['back'])){
    echo "<script>window.location.href='adminhome.php';</script>";
}
?>