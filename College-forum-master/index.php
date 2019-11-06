<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <!--
        *Uncomment to make webpage responsive but some elements would show unexpected behaviour in small screens.
        <meta name="viewport" content="width=device-width, initial-scale=1">
    -->
    <link href='//fonts.googleapis.com/css?family=Raleway:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="skeleton.css" />
    <link rel="stylesheet" href="personal.css" />
    <title>College Forum</title>
</head>
<?php include_once('fix_mysql.inc.php');
      require_once("sql_con.php");?>
<body>
    <div class="section hero">
        <div class="container">
            <div class="value-props row">
                <div class="four columns value-prop u-pull-left" id="headerFour">
                    <div class="row">
                            <div class="one-half column">
                                <img class="value-img" id="icon" src="icon.png">
                            </div>
                            <div class="one-half column">
                                <h5 class="value-heading" id="brandText">clg-forum</h5>
                            </div>
                    </div>
                </div>
                <div class="eight columns value-prop u-pull-right" id="headerEight">
                    <div class="container">
                    
                        <div class="row">
                            <div class="three columns" id="threeCol">
                                <label for="username">Username</label>
                            </div>
                            <div class="three columns" id="threeCol">
                                <label for="password">Password</label>
                            </div>
                            <div class="five columns" id="twoCol"></div>
                        </div>
                        <form action="loginH.php" method="POST" onsubmit="return 'true'">
                        <div class="row">
                            <div class="three columns">
                                <input class="u-full-width" type="text"  name="uid">
                            </div>
                            <div class="three columns">
                                <input class="u-full-width" type="password"  name="pwd">
                            </div>
                            <div class="two columns">
                                <input class="button-primary" type="submit" value="Log In">            
                            </div></form>
                            <?php
			if (isset ($_GET["act"]))
				if ($_GET["act"] == "invalid")
				  alert("Enter valid user ID or password");
				
?></form>
                            <div class="one column"><p></p></div>
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
    <br><br>
    <div class="section value u-max-full-width" id="threadsSection">
        <div class="container">
            <div class="row">
                <div class="three columns value">
                    <h1 class="value-heading" id="threadsHeading">Threads</h1> 
                </div>
            </div>
            <div class="row">
                <table class="u-full-width">
                    <thead>
                        <tr>
                            <th class="two columns">Started By</th>
                            <th class="six columns">Title</th>
                            <th class="two columns">Date Posted</th>
                            <th class="two columns">Replies</th>
                        </tr>
                    </thead>
                    <tbody id="tableContent">
                       <?php

	$sql="select * from question,user where question.user_id=user.user_id ORDER BY  datetime desc limit 0,5";
	
	$result=ExecuteQuery($sql);
	

	while($row = mysql_fetch_array($result))
	{
		   
			
			// echo "<span class='box2'>";
			echo "<a href='questionview.php?qid=$row[question_id]' >$row[heading]</a>";
			
			echo "<table class='u-full-width'>";
			echo "<tr><td class='two columns'>
			
				<br/>
			$row[fullname]
			<td class='six columns'><br/>
			$row[question_detail]</td>
			<td class='two columns'>$row[datetime]<br/>
			</td></tr>";
			
			
			echo "</table>";
		}
	
?>
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </body>
    </html>