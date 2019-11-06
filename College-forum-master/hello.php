<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    
    
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href='//fonts.googleapis.com/css?family=Raleway:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="skeleton.css" />
    <link rel="stylesheet" href="personal.css" />
    <title>College Forum</title>
    <?php 
    include_once('fix_mysql.inc.php');
    session_start();
    require("./utility.php");
	require("header.php");
	require("checkUser.php");
?>
<script type="text/javascript">
	document.getElementById("auhome").className="active";
</script>
</head>
<script type="text/javascript">
	function check(f)
	{
		if (f.uid.value == "")
		{
			alert("Please, enter user id");
			//document.getElementById("spuid").innerHTML = "Please, Enter user id.";
			
			f.uid.focus();
			return false;
		}
		else if (f.pwd.value == "")
		{
			alert ("Please, enter password");
//document.getElementById("a").innerHTML = "Please,Enter the password";
			
			f.pwd.focus();
			return false;
		}
		else
			return true;
	}
</script>
<body>
    <div class="section hero">
        <div class="container">
            <div class="value-props row">
                <div class="three columns value-prop u-pull-left" id="headerThree">
                    <img class="value-img" id="icon" src="icon2.png">
                </div>
                <br>          
                <div class="nine columns value-prop u-pull-right" id="headerNine">
                    <div class="container">
                    <form action="loginH.php" method="POST" onsubmit="return check(this)">
                        
                        <div class="row">
                            <div class="three columns">
                                <input class="u-full-width" type="text" id="username" name="uid" placeholder="Username">
                            </div>
                            <div class="three columns">
                                <input class="u-full-width" type="password" id="password" name="pwd" placeholder="Password">
                            </div>
                            <div class="two columns">
                                <input class="button-primary " type="submit" value="Log In">            
                            </div>
                            <div class="two columns">
                                <a href="signup.php" ><input class="button-primary" type="button" value="Sign Up"></a>
                            </div>                                                                                 
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
    
    </div>
    <?php

	$sql="select * from question,user where question.user_id=user.user_id ORDER BY  datetime desc limit 0,5";
	
	$result=ExecuteQuery($sql);
	

	while($row = mysql_fetch_array($result))
	{
		   echo "11";
             echo "<span class='box2'>";
            echo "2255";
			echo "<span class='head'><a href='questionview.php?qid=$row[question_id]' >$row[heading]</a></span>";
			
			echo "<table>";
			echo `<tr><td valign='top' width='100px'>
				<img src='$row[uimg]' alt='' class='uimg'/>
				<br/>
			$row[fullname]
			<td valign='top'>
			$row[question_detail]<br/><br/>
			$row[datetime]<br/><br/>
			</td></tr>`;
			
			
			echo "</table></span><div class='h10'></div>";
		}
	
?>
</body>
</html>