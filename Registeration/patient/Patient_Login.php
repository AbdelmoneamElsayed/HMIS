<!DOCTYPE html>
<html lang="en"  >
<head>
   <meta charset="utf-8">
   <title> Patient Login </title>
   <link rel="stylesheet" href="Login.css">
   <link rel="stylesheet" href="../../fontawesome-free-5.15.4-web/css/all.css">
</head>

<body>

   
	
   <div class="center">
      <h1>  <i class="fas fa-hospital-user"></i> Patient Login</h1> 
        <form method="POST" action="login.php">
        
        <div class="txt_field">
           <input type="text" required name="email">
            <span></span>
            <label> <i class="fas fa-user"></i> Email</label>
            
            
            </div>
        
        <div class="txt_field">
           <input type="password"  required name="password" >
            <span></span>
            <label>  <i class="fas fa-key"></i> Password</label>
            </div>
			
			<span class="psw"><a href="forgot.php">Forgot password?</a></span>
           
            <label>
             <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
           <input type="submit" name= "login" value="Login">
		   <br>
		   <br>
		   <span class = "create" > Don’t have an account yet? <a href="../Register.php">Create an account</a> </span>
		   <br>
       <a href="../Doctor/doctor_login.php" class="iconbtn"><i class="fas fa-arrow-right"></i></a>
        </form>
        </div>
		
    </body>
    <footer><span>&#169;</span>2021 All Rights rserved|made by Admin</footer>
	</html>
