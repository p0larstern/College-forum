<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    
    
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href='//fonts.googleapis.com/css?family=Raleway:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="skeleton.css" />
    <link rel="stylesheet" href="personal.css" />
    <title>College Forum</title>
</head>
<body>
    <div class="section hero">
        <div class="container">
            <div class="value-props row">
                <div class="three columns value-prop u-pull-left" id="headerThree">
                    <img class="value-img" id="icon" src="icon2.png">
                </div></div>
                         
                <div class="twelve columns value-prop u-pull-right" id="headerEight"><h4>clg-forum</h4></div>
<br>
<br>
<br>
<br>
<!--<script type="text/javascript">
	function check(form1)
	{
		if(
		form1.u_name.value == "" ||
		form1.f_name.value == "" ||
		form1.pwd.value == "" ||
		form1.e_mail.value == ""||
		form1.gender.value == "")
        {
		
        if (form1.u_name.value == "")
        {
            document.getElementById("a").innerHTML = "Please, Enter user name.";
            //alert("Please, Enter The Username");
        form1.u_name.form1.focus();
            
        }
        else
        {
            document.getElementById("a").innerHTML = "";
            //alert("Please, Enter The Username");
            form1.u_name.focus();
            
        }
         if (form1.f_name.value == "")
        {
            document.getElementById("b").innerHTML = "Please, Enter full name.";
            //alert ("Please,Please Enter The Fullname");
            form1.f_name.focus();
            
        }
        else
        {
            document.getElementById("b").innerHTML = "";
            //alert ("Please,Please Enter The Fullname");
            form1.f_name.focus();
        }
         if (form1.pwd.value == "")
        {
            document.getElementById("c").innerHTML = "Please, Enter password.";
            //alert ("Please,Please Enter The Password");
            form1.pwd.focus();
            
        }
        else
        {
            document.getElementById("c").innerHTML = "";
            //alert ("Please,Please Enter The Password");
            form1.pwd.focus();

        }
        
         if (form1.e_mail.value == "")
        {
            document.getElementById("d").innerHTML = "Please, Enter e-mail address.";
            //alert ("Please,Please Enter The E-mail Address");
            form1.e_mail.focus();
            
        }
        else
        {
            document.getElementById("d").innerHTML = "";
            //alert ("Please,Please Enter The E-mail Address");
            form1.e_mail.focus();
        }
        }}-->

    <h2>Sign Up!</h2>            <!--<div class="nine columns value-prop u-pull-right" id="headerNine">-->
<form action="signup_insert.php" method="post" onsubmit="return check(this)" name="sign_up">
  <div class="row">
    <div class="six columns">
      <label for="Email">Your email</label>
      <input class="u-full-width" type="email" placeholder="test@mailbox.com" name="e_mail">
    </div>
  </div>
  <div class="row">
    <div class="six columns">
      <label for="fname">Full Name</label>
      <input class="u-full-width" type="text"  name="f_name">
    </div>
</div>
  <div class="row">
    <div class="six columns">
      <label for="uname">Username</label>
      <input class="u-full-width" type="text"  name="u_name">
    </div>
    <div class="six columns">
      <label for="uname">Password</label>
      <input class="u-full-width" type="password"  name="pwd">
    </div>
  </div>
  <div class="row">
      <div class="three columns">
          <label for="image">Profile Picture</label>
          <input type="file" name="ima">
</div>
</div>    
    <div class="row">  
    <div class="six columns">
      <label for="username">Gender</label>
      <select class="u-full-width" id="gender">
        <option value="Option 1">Male</option>
        <option value="Option 2">Female</option>
        <option value="Option 3">Rather not say</option>
      </select>
    </div>
  </div>
  <div class="row">
      <div class="three columns">
  <input class="button-primary" type="submit" value="Submit">
</div><div class="three columns">  <input type="reset" value="Reset">
</div></div>
</form>