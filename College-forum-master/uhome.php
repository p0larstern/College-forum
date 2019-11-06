<?php include_once('fix_mysql.inc.php');
	session_start();
	require("header.php");
 require("checkUser.php");
?>
<script type="text/javascript">
	document.getElementById("auhome").className="active";
</script>

<h5><a href="que.php">My Questions</a>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="ans.php">My Answers </a></h5>
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
    