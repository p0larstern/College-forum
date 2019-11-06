<?php
require("sql_con.php");
?>
<?php
$u_name=$_POST['u_name'];
$f_name=$_POST['f_name'];
$pwd=$_POST['pwd'];
$e_mail=$_POST['e_mail'];
$gender=$_POST['gender'];

$ima = $_FILES['ima']['name'];
$imup=$_FILES['ima']['tmp_name'];

$path="ups/$ima";
move_uploaded_file($imup, $path);

$sql=" INSERT INTO user (username,fullname,password,e_mail,gender,user_type,uimg) values ('$u_name','$f_name','$pwd','$e_mail','$gender','user','$path')";

$result=ExecuteNonQuery ($sql);

if($result)
{
	header( "<h1> YOU ARE REGISTERED </h1> ") ;
    echo "click here to log-in <a href='index.php'>click here</a>";
    ;
}
else
{
		header("location:signup.php");
}
?> 	