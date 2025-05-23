
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><form method="post" action="">
    <div class="nav">
    <nav>
        <a href="adminlogin.php">Logout</a>
    </nav>
</div>
    <center>
        <input type="submit" name="memadd" value="Add Members"><br><br>
        <input type="submit" name="memrem" value="Remove Members"><br><br>
        <input type="submit" name="bkadd" value="Add Books"><br><br>
        <input type="submit" name="bkrem" value="Remove Books"><br><br>
        <input type="submit" name="viewbk" value="View Books"><br><br>
        <input type="submit" name="viewmem" value="View Members"><br><br>
    </center>
</form>
</body>
</html>
<?php
if(isset($_POST['memadd'])){
    echo "<script>window.location.href='memadd.php';</script>";
}
if(isset($_POST['memrem'])){
    echo "<script>window.location.href='memrem.php';</script>";
}
?>