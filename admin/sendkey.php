<!DOCTYPE html>
<html lang="en">
<head>
	<title>Data Leakage Detection</title>
	<meta charset="utf-8" />
	
	<link rel="stylesheet" href="https://cse3501project.herokuapp.com/admin/stylesheet.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<?php
session_start(); //Start the session

if (!isset($_SESSION['name'])) {
        echo "Please Login";
		//$_SESSION['error'] = "Please Login First";
		echo "<script type=\"text/javascript\">"." alert('Please Login'); " ."</script>";
		} if (!$_SESSION['name']){
		      echo  header("Location: https://cse3501project.herokuapp.com/adminlogin.php");
		}

		
		else{
		
		define('ADMIN',$_SESSION['name']); //Get the user name from the previously registered super global variable
		//if(!session_is_registered("admin")){ //If session not registered
//header("location:login.php"); // Redirect to login.php page
//}
//else //Continue to current page
header( 'Content-Type: text/html; charset=utf-8' );
//include'includes/conn.php';
 }
 
?>
<body class="body">
	
	<header class="mainHeader">
		<nav><ul>
			<li ><a href="https://cse3501project.herokuapp.com/admin/admin.php">Home</a></li>
			<li><a href="https://cse3501project.herokuapp.com/admin/upload.php">Upload Article</a></li>
			<li><a href="https://cse3501project.herokuapp.com/admin/viewfile.php">View File</a></li>
			<li ><a href="https://cse3501project.herokuapp.com/admin/leakfile.php">Leak User</a></li>
			<li class="active"><a href="https://cse3501project.herokuapp.com/admin/sendkey.php">SendKey</a></li>
			
			
		</ul></nav>
	</header>
		
	<div class="mainContent1">
		<div class="content">	
				<article class="topcontent1">	
					<header>
						<h2><a href="#" rel="bookmark" title="Permalink to this POST TITLE">Send Key</a></h2>
					</header>
					
					<footer>
					</footer>
					
					<content>
						<p >
						
						<h2><a href="#" rel="bookmark" title="Permalink to this POST TITLE">UserRequest:</a></h2>
						<table align="center" cellpadding="9" cellspacing="2" width="10" >
							<tr bgcolor="green"><td>id</td><td>UserName</td><td>Filename</td></tr>
		
						<?PHP
				
				include 'config.php';
				//$con = mysqli_connect("sql6.freemysqlhosting.net","sql6453269","13gSHbLs1b");
                                if (!$con)
                                    echo('Could not connect: ' . mysqli_error());
                                else
                                {
                                    //mysqli_select_db($con, "sql6453269");
									


$qry="Select * FROM askkey where reciver='admin' and status='no'";
	$result=mysqli_query($con, $qry);
while($w1=mysqli_fetch_array($result))
{
	echo'			<tr bgcolor="white">
	
	<td>'.$w1["id"].'    </td><td>     '.$w1["user"].'	
					</td><td>'.$w1["filename"].'

	</td>
</tr>


	
	';
		
}
								}

?>
							
							

						</p>
						
</table>

						<article class="topcontent2">	
				
						
						
							<p>		

<h2><a href="#" rel="bookmark" title="Permalink to this POST TITLE">View File And Key:</a></h2>		
<table align="center" cellpadding="9" cellspacing="1" width="10" >
							<tr bgcolor="green"><td>FileName</td><td>key</td></tr>
							
					<?PHP
				include 'config.php';
				//$con = mysqli_connect("sql6.freemysqlhosting.net","sql6453269","13gSHbLs1b");
                                if (!$con)
                                    echo('Could not connect: ' . mysqli_error());
                                else
                                {
                                    //mysqli_select_db($con, "sql6453269");
									


$qry="Select * FROM presentation";
	$result=mysqli_query($con, $qry);
while($w1=mysqli_fetch_array($result))
{
	echo'			<tr bgcolor="white">
	
	<td>'.$w1["subject"].'    </td><td>     '.$w1["Topic"].'	
					</td>
</tr>


	
	';
		
}
								}

?>		
							
							
				</p>
				
</table>

						</content>
					
				</article>

			</div>
<aside class="top-sidebar">
					<article>
					<h2>Welcome: <?php echo $_SESSION['name']/*Echo the username */ ?></h2>
					<li><a href="https://cse3501project.herokuapp.com/admin/logout.php">Logout</a></li>
					
					<p ><h5 >Send Key:</h5></br>
							<form name="s" action="https://cse3501project.herokuapp.com/admin/sendkeytouser.php" method="POST" onsubmit="return valid()">
            <table  bgcolor="brown" align="center" cellpadding="" cellspacing="" width="">
              <tr> 
                <td colspan="2" align="center"><font size="2"><b>
                  </b></font></td>
              </tr>
                <tr> 
                <td><strong>Send To:</strong></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="a1" id="a1" class="b"></td>
              </tr>
			   <tr> 
                <td><strong>
				FileName:</strong></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="a3" id="a3" class="b"></td>
              </tr>
              <tr> 
                <td><strong>Key:</strong></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="a2" id="a2" class="b">
</td>
              </tr>
                <td></td>
                <td><input type="submit" name="s" value="Send" class="b1" > 
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                  <input type="reset" name="r" value="clear" class="b1"></td>
              </tr>
            </table>
          </form>
							
							
							
							
				</p>
				    </article>
				</aside>	
		</div>
			
		
		
				    
				
		</div>
			
				
	</div>
	
	<footer class="mainFooter">
		<p>CSE3501 Project</p>
	</footer>

</body>
</html>
