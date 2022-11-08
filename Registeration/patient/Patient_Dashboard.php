<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Patient-Dashboard</title>
	<link rel="stylesheet" href="../../fontawesome-free-5.15.4-web/css/all.css">
    <link rel="stylesheet" href="Dashboard.css">
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2> HMS </h2>
        <ul>
     <li><a href="Patient_Dashboard.php"><i class="fas fa-qrcode"></i> Dashboard </a></li>
	 <li><a href="../../Website/medical-zone/appointment.php"><i class="fas fa-edit"></i> Book Appointment </a></li>
	 <li><a href="patient-log/Inpatient.php"><i class="fas fa-align-justify"></i> Patient Log </a></li>
	 <li><a href="../../Patient-History/Medical_history.php"><i class="fas fa-file-medical"></i> Patient History </a></li>
   </ul> 
        <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="main_content">
        <div class="header">Hospital Management System</div>  
    </div>
</div>

    <div class="center">
      <div class="header">
       <h2> PATIENT | DASHBOARD </h2>
	
	 <div class="row">
    <div class="column">
      <div class="card">
	   <h1><i class="fas fa-smile-beam"></i></h1>
      <h3>My Profile</h3>
    <a href="#">Total visits:10</a> 					
    </div>
  </div>


  <div class="column">
    <div class="card">
       <h1><i class="far fa-calendar-check"></i></h1>
       <h3>My Appointments</h3>
       <a href="#">Total:6</a> 
    </div>
  </div>
  
  
  <div class="column">
    <div class="card">
      <h1><i class="far fa-address-book"></i></h1>
      <h3>Book My Appointment</h3>
      <a href="../../Website/medical-zone/appointment.php">Book Appointment</a> 
    </div>
  </div>
  
  
</div>
	
        </div>
    </div>
</body>
    
    <footer><a href="../Doctor/doctor_login.php" class="iconbtn"><i class="fas fa-arrow-right"></i></a>	</footer>
</html>