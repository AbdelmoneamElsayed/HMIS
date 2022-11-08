<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" href="../fontawesome-free-5.15.4-web/css/all.css">
<style>
* {
  box-sizing: border-box;
}
    body{
        background-color: #f2f6fa;
    }
.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 20;
  left: 0;
  background-color: #00a4e4 ;
  overflow-x: hidden;
  padding-top: 50px;
    
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #fff;
  display: block;
font-family:Times New Roman;
     margin-bottom: 50px;

}

.sidenav a:hover {
  color: #371777 ;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 25px; /* Increased text to enable scrolling */
  padding: 0px 10px;

}
.addr h1{
font-family:forte;
color:#428bca;
}



.container {
  position: relative;
 
  margin: 0 px;
float: right;
  width: 70%;



}
 h2{
color: #464646;
     
     margin-left: 10px;
 }
    a{
         text-decoration-color: #464646;
    }
.container img {vertical-align: middle;}

container .content {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 40%;
  padding: 10px;

}

</style>
</head>
<body>


<div class="sidenav">
 
 <a href="diagnostic.php"><i class="fas fa-stethoscope"></i>Diagnostic</a>
  <a href="brain.php"><i class="fas fa-brain"></i> Brain</a>
  <a href="Oncology.php"><i class="fas fa-lungs"></i> Oncolog</a>
  <a href="surgery.php"><i class="fas fa-heartbeat"></i> Surgery</a>
</div>

<div class="main">
<div class="addr">
  <h1>BMC Medical Images : Diagnostic</h1>
</div>



<div class="row">
 

<div class="container">
 <a href="tinelsign.php"><h2>     Tinel Sign</h2></a>
  <img src="img/d1.jpg" alt="Notebook" style="width:50%;">
  <div class="content">
    
     
  </div>
</div>




<div class="container">
 <a href="phalenmaneuver.php"><h2>Phalen maneuver </h2></a> 
  <img src="img/d2.jpg" alt="Notebook" style="width:50%;">
  <div class="content">
  </div>
</div>

<div class="container">
 <a href="Atrophy.php"><h2>Atrophy of thenar muscle </h2></a> 
  <img src="img/d3.jpg" alt="Notebook" style="width:50%;">
  <div class="content">
  </div>
</div>


</div>
    </div>
</body>
</html>
