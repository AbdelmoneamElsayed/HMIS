<!DOCTYPE html>
 <html lang="en">   
    <head>
         <meta charset="utf-8">
		 <meta name="discription" content="Hospital Website">
		<title>Doctor Login</title>
        <link rel="stylesheet" href="doctor_login.css">
                <link rel="stylesheet" href="../../fontawesome-free-5.15.4-web/css/all.css">
    </head>
    <body>
    
    <div class="center">
    
      <h1> <i class="fas fa-user-md"></i>  Doctor Login</h1> 
        <form method="get" action="Dashboard Doctor Screen.php">
        
        <div class="txt_field">
           <input type="text" required>
            <span></span>
            <label> <i class="fas fa-user"></i>       UserName</label>
            
            
            </div>
        
        <div class="txt_field">
           <input type="password"  required  >
            <span></span>
            <label>  <i class="fas fa-key"></i>      Password</label>
           
            
            </div>
           
		   <span class="psw"><a href="FORGOT2.php">Forgot password?</a></span>
		   
		   
           <label>Remember me</label>
			<input type="checkbox">
			
			
            
           <input type="submit" value="Login">
           <br>
		   <br>
		   <span class = "create" > Don’t have an account yet? <a href="Reg-doc.php">Create an account</a> </span>
		    <a href="../Admin/Admin_login.php" class="iconbtn"><i class="fas fa-arrow-right"></i></a>
        </form>
        
        
        </div>
    
    
    </body>
    <footer><span>&#169;</span>2021 All Rights rserved|made by Admin</footer>
</html>