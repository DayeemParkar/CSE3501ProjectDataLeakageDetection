<!DOCTYPE html>
<html lang="en">
<head>
	<title>Data Leakage Detection</title>
	<meta charset="utf-8" />
	
	<link rel="stylesheet" href="https://cse3501project.herokuapp.com/stylesheet.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body class="body">
	
	<header class="mainHeader">
		<nav><ul>
			<li ><a href="https://cse3501project.herokuapp.com">Home</a></li>
			<li><a href="https://cse3501project.herokuapp.com/register1.php">Registration</a></li>
			<li class="active"><a href="https://cse3501project.herokuapp.com/userlogin.php">UserLogin</a></li>
			<li ><a href="https://cse3501project.herokuapp.com/adminlogin.php">AdminLogin</a></li>			
	</ul></nav>
	</header>
		
	<div class="mainContent1">
		<div class="content">	
				<article class="topcontent1">	
					<header>
						<h2><a href="#" rel="bookmark" title="Permalink to this POST TITLE"> User Login</a></h2>
					</header>
					
					<content>
						<p>		  
          <form name="s" action="check_login_user.php" method="POST" onsubmit="return valid()">
            <table align="center" cellpadding="" cellspacing="" width="">
              <tr> 
                <td colspan="2" align="center"><font size="2"><b>
                  </b></font></td>
              </tr>
              <tr> 
                <td><font face="Courier New" size="+1"><strong>UserId</strong></font></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="username" id="username" class="b"></td>
              </tr>
              <tr> 
                <td><font face="Courier New" size="+1"><strong>Password</strong></font></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp; <input type="password" name="password" id="username" class="b"></td>
              </tr>
               <tr> 
                <td><td><input type="submit" name="s" value="submit" class="b1" > 
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                  <input type="reset" name="r" value="clear" class="b1"></td>
                    </tr>  
            </table>
	    <p align="center" style="color:red">*Credentials for testing:<br>UserId - a1<br>Password - a1P</p>
          </form>
        </div>
   		</p>
		</content>			
		</article>
		</div>
	</div>
	
	<footer class="mainFooter">
		<p>CSE3501 Project </p>
	</footer>

</body>
</html>
