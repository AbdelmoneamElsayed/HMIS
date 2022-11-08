<!DOCTYPE html>
<html>
    
    <head>
       
        <link rel="stylesheet" href="admin_login.css">
        <link rel="stylesheet" href="../../fontawesome-free-5.15.4-web/css/all.css">
    </head>
    <body>
    
    <div class="center">
    
      <h1> <i class="fas fa-user-shield"></i>  Admin Login</h1> 
        <form method="POST" action="login.php">
        
        <div class="txt_field">
           <input type="text" required name="username">
            <span></span>
            <label> <i class="fas fa-user"></i>       UserName</label>
            
            
            </div>
        
        <div class="txt_field">
           <input type="password"  required  name="password">
            <span></span>
            <label>  <i class="fas fa-key"></i>      Password</label>
           
            
            </div>
           <label>
             <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
         
           <input type="submit" value="Login">
      
        
        </form>
        
        
        </div>
    
    
    </body>
    <footer><span>&#169;</span>2021 All Rights rserved|made by Admin</footer>
</html