<?php require("header.php");?>
<?php 
session_start();

ExecuteNonQuery ("UPDATE User SET isuser=false WHERE user_id='$_SESSION[uid]'");

session_destroy();
?>
<h1>Logged out</h1>
<p>
  <a href="index.php">Click here</a> to login again.
</p>
<?php require("footer.php");?>