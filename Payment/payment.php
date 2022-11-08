<!DOCTYPE html>
 <html lang="en">   
    <head>
         <meta charset="utf-8">
		 <meta name="discription" content="Hospital Website">
		<title>Payment</title>
        <link rel="stylesheet" href="payment.css">
        <link rel="stylesheet" href="../fontawesome-free-5.15.4-web/css/all.css">
    </head>
    <body style="background-image: url('../Registeration/images/backgroundpatiennt.png');">
        <div class="app-container">
            <div class="top-box">
          <P><span class="left-icon">&#x2190;</span>CheckOut<span class="right-icon">&#xb7;&#xb7;&#xb7;</span></P>  
           </div> 
        <div class="middle-box">
            <h1>1599<span>$</span></h1>
            <P>Pay to the hospital</P>
            </div>
           <div class="bottom-box">
            <button type="button" class="payment-option"> Pay With PayPal</button>
            <button type="button" class="payment-option"> Pay Using Net Banking</button>
            <div class="card-details">
               <p>Pay Using credit or debit card</p>
               <div class="card-num-feild">
               <label>Card Number</label><br>
               <input type="text" class="card-num" placeholder="xxxx-xxxx-xxxx-xxxx">
               
               
               </div>
               <div class="date-feild">
               <label>Expiry Date</label><br>
               <input type="text" class="date-feild" placeholder="mm">
               <input type="text" class="date-feild" placeholder="yyyy">
               
               </div>
               <div class="cvc-feild">
               <label>CVC</label><br>
               <input type="password" class="cvc-feild" placeholder="xxx">
               
               
               </div>
               <div class="name-feild">
               <label>Card Holder Name</label><br>
               <input type="text" class="name-feild" placeholder="Full Name">
               <button type="button" class="pay-btn">Pay Now</button>
               
               </div>
                </div>
            </div>
        </div>
     </body>
</html>