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
			<li class="active"><a href="https://cse3501project.herokuapp.com/admin/admin.php">Home</a></li>
			<li><a href="https://cse3501project.herokuapp.com/admin/upload.php">Upload Article</a></li>
			<li><a href="https://cse3501project.herokuapp.com/admin/viewfile.php">View File</a></li>
			<li ><a href="https://cse3501project.herokuapp.com/admin/leakfile.php">Leak User</a></li>
			<li ><a href="https://cse3501project.herokuapp.com/admin/sendkey.php">SendKey</a></li>
			
		</ul></nav>
	</header>
		
	<div class="mainContent1">
		<div class="content">	
				<article class="topcontent1">	
					<header>
						<h2><a href="#" rel="bookmark" title="Permalink to this POST TITLE">Admin Menu</a></h2>
					</header>
					
					<content>
						<p>
							<table align="center" cellpadding="10" cellspacing="2" width="10">
								<tr>
									<td ><img src="https://cse3501project.herokuapp.com/admin/img/1.PNG" height='60px' width='60px'></td>
									<td><img src="https://cse3501project.herokuapp.com/admin/img/msg.JPG"  height='60px' width='60px'></td>
									<td><img src="https://cse3501project.herokuapp.com/admin/img/upload.png"  height='60px' width='60px'></td>
									<td><img src="https://cse3501project.herokuapp.com/admin/img/user.JPG"  height='60px' width='60px'></td></tr>
								<tr>
									<td><a href="https://cse3501project.herokuapp.com/admin/m_arti.php">Manage Articles</a></td>
									<td><a href="https://cse3501project.herokuapp.com/admin/sendmsg.php">Send Message</a></td>
									<td><a href="https://cse3501project.herokuapp.com/admin/upload.php">Upload Articles</a></td>
									<td><a href="https://cse3501project.herokuapp.com/admin/m_user.php">Manage User</a></td>
</tr>

</table>

						</p>
						</content>
					
				</article>

			</div>
<aside class="top-sidebar">
					<article>
					<h2>Welcome: <?php echo $_SESSION['name']/*Echo the username */ ?></h2>
					<li><a href="https://cse3501project.herokuapp.com/admin/logout.php">Logout</a></li>
					
					<p></p>
				    </article>
				</aside>	
		</div>
			
				
	</div>
	
	<footer class="mainFooter">
		<p>CSE3501 Project</p>
	</footer>

</body>
</html>
