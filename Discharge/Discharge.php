<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Discharge.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script>
      var date = new Date();
	  var year = date.getFullYear();
	  var month = date.getMonth()+1;
	  var todayDate = String(date.getDate()).pedStart(2,'0');
	  var datePattern = year+ '-'+month+ '-'+todayDate;
	  document.getElementById("date-picker").value = datePattern;
</script>
 <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<body>
    <div class="disform">
        <h1><i class="fas fa-hospital-user"></i> Discharge Form</h1>
</div>


<div class="main">
    
        <form method="get">
            <div id="name">
                <h2 class="name">Patient </h2>
                <input class="firstname" type="text" name="first_name"placeholder="enter first name"><br>
                <label class="firstlabel">first name</label>
				
                <input class="lastname" type="text" name="last_name" placeholder="enter last name"><br>
                <label class="lastlabel">last name</label>
            </div>
			
			<h2 class="name">Date admitted</h2>
			  <input class="date" type="date" name="date">
			  
            <h2 class="name">Password </h2>
            <input class="company" type="Password" name="Password" placeholder="enter password">
			
            <h2 class="name">Email</h2>
           <input class="email" type="email" name="email" placeholder="enter email">
		   
		   <h2 class="name">Address</h2>
           <input class="Address" type="Address" name="Address" placeholder="enter address">
		   
		   
            <select class="option" name="city">
                <option disabled="disabled" selected="selected">City</option>
                <option>London</option>
                <option>Paris</option>
                <option>Cairo</option>
				<option>Tokyo</option>
                <option>Delhi</option>
                <option>Istanbul</option>
				 <option>Another</option>
            </select>
		   
            <h2 class="name">Contact Number</h2>
			<br>
			<br>
             <input class="Code" type="text" name="Zip_code">
            <label class="area-code">Zip Code</label>
			
            <input class="number" type="text" name="phone"placeholder="enter phone number  ">
            <label class="phone-number">Phone Number</label>
    
    
            <h2 class="name">Gender</h2>
	         
            <select class="option" name="gender">
                <option disabled="disabled" selected="selected"></option>
                <option>Male</option>
                <option>Female</option>
                
            </select> 
              
			  <br>
			 
			  
			<h2 class="name">Reason for admission</h2>
			<br>
			<br>
           <input class="Reason" type="Reason" name="Reason" placeholder="enter reason for admission">
              
			 <h2 class="name">Diagnosis at admission</h2>
			 <br>
			<br>
           <input class="Diagnosis" type="Diagnosis" name="Diagnosis" placeholder="enter diagnosis at admission"> 
		   <h2 class="name">Treatment Discription</h2>
		   <br>
			<br>
		   <textarea class="comment" name="comment" placeholder="Please Describe the treatment taken"></textarea>
			  
            <h2 id="coustomer">Do you agree our Terms?</h2>
             <label class="radio">
                <input class="radio-one" type="radio" checked="checked" name="rdiobtn">
                <span class="checkmark"></span>
                Yes
            </label>
    
            <label class="radio">
                <input class="radio-two" type="radio" name="rdiobtn">
                <span class="checkmark"></span>
                No
            </label>
    
            <button    type="submit">Submit</button>
    
    
        </form>
</div>
</body>
</html>