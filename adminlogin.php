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
			<li><a href="https://cse3501project.herokuapp.com/register.html">Registration</a></li>
			<li ><a href="https://cse3501project.herokuapp.com/userlogin.php">UserLogin</a></li>
			<li class="active"><a href="https://cse3501project.herokuapp.com/adminlogin.php">AdminLogin</a></li>			
	</ul></nav>
	</header>
		
	<div class="mainContent1">
		<div class="content">	
				<article class="topcontent1">	
					<header>
						<h2><a href="#" rel="bookmark" title="Permalink to this POST TITLE"> Admin Login</a></h2>
					</header>
					
					
					<content>
						<p>		  
          <form name="s" action="check_login.php" method="POST" onsubmit="return valid()">
            <table align="center" cellpadding="" cellspacing="" width="">
              <tr> 
                <td colspan="2" align="center"><font size="2"><b>
                  </b></font></td>
              </tr>
              <tr> 
                <td><font face="Courier New" size="+1"><strong>UserName</strong></font></td>
                <td><input type="text" name="username" id="username" class="b"></td>
              </tr>
              <tr> 
                <td><font face="Courier New" size="+1"><strong>Password</strong></font></td>
                <td><input type="password" name="password" id="username" class="b"></td>
              </tr>
	      <tr> 
                <td><font face="Courier New" size="+1"><strong>OTP</strong></font></td>
                <td><input type="text" name="otp" id="otp" class="b"></td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp; <button type="button" id="sotp" name="sotp" class="b">Send OTP</button></td>
              </tr>
               <tr> 
                <td><input type="submit" name="s" value="Submit" class="b1" > 
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                  <input type="reset" name="r" value="Clear" class="b1"></td>
                    </tr>
             
            </table>
          </form>
        </div>
		</p>
	</content>
	</article>
	</div>
	</div>
	
	<footer class="mainFooter">
		<p>CSE3501 Project</p>
	</footer>

</body>
</html>
