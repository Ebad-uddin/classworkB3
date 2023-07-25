<?php
include('connection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> data connection </title>
</head>
<body>
    
<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
<label for="name"> CourseId </label>
<input type="text" name="cid">
<br>
<br>
<label for="text"> cname </label>
<input type="text" name="cname">
<br>
<br>
<label for="faculty"> faculty </label>
<input type="faculty" name="faculty">
<br><br>
<input type="submit" name="save">

</form>

<?php
if(isset($_POST['save'])){
    $cname = $_POST['cname'];
    $faculty = $_POST['faculty'];

    $query = "insert into courses(`cname`, `faculty`)values('$cname', '$faculty')";
    $res = mysqli_query($connection, $query);
if(!$res){
    die("connection failed");
}

}




?>






</body>
</html>
