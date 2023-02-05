<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <link rel="stylesheet" href="member1.css">
   

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>

<?php 
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $bdate = $_POST['bdate'];
    $session = $_POST['session'];
    $gender = $_POST['gender'];
    $code = $_POST['code'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    

    $servername= "localhost";
    $uname="root";
    $pw="";
    $dbname="booking";

$conn=mysqli_connect($servername,$uname,$pw,$dbname);

$sql= "INSERT INTO book (fname, mname, lname, bdate, session, gender, code, address, email ) VALUES ('$fname','$mname','$lname','$bdate','$session','$gender','$code','$address','$email')";
if (mysqli_query($conn, $sql)) {
echo "<br>";
} 
?>


<body>
    <div class="wrapper">
        <h2>Payment Form</h2>
        <hr>
        <form action="payment.php" method="POST">
            <!--Account Information Start-->
            <h4>Account</h4>
            <div class="input_group">
                <div class="input_box">
                    <input type="text" placeholder="Full Name" name="fname" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
                <div class="input_box">
                    <input type="text" placeholder="Name on Card" name= "card" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="email" placeholder="Email Address" name="email" required class="name">
                    <i class="fa fa-envelope icon"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="text" placeholder="Address" name="address" required class="name">
                    <i class="fa fa-map-marker icon" aria-hidden="true"></i>
                </div>
            </div>
            
         


            
            <div class="input_group">
                <div class="input_box">
                    <h4>Date Of Birth</h4>
                    <input type="text" placeholder="DD" name="dd" required class="dob">
                    <input type="text" placeholder="MM" name="mm" required class="dob">
                    <input type="text" placeholder="YYYY" name="yyyy" required class="dob">
                </div>
                <div class="input_box">
                    <h4>Gender</h4>
                    <input type="radio" name="gender" value="M" class="radio" id="b1" checked>
                    <label for="b1">Male</label>
                    <input type="radio" name="gender" value="F" class="radio" id="b2">
                    <label for="b2">Female</label>
                </div>
        
              </div>
         
            <div class="input_group">
                <div class="input_box">
                    <h4>Payment Details</h4>
                    <input type="radio"  class="radio" id="bc1" checked>
                    <label for="bc1"><span> <i class="fa fa-cc-visa" style="margin-right: .5em"></i>Credit Card</span></label>
                    

                     </div>

                 <div class="input_box">
                    <h4>Choose Amount</h4>
                    <input type="radio"  required class="radio" id="bc2" checked>
                    <label for="bc2">1 month - P350</label>
                    
                    <input type="radio"  class="radio" id="bc3" checked>
                     <label for="bc3">3 months - P500</label>
                     
                    <input type="radio"  class="radio" id="bc4" checked>
                     <label for="bc4">1 year - P1200</label>
                
                
             </div>
            </div>

            <div class="input_group">
                <div class="input_box">
                    <input type="tel" name="cnum" class="name"  placeholder="Card Number 1111-2222-3333-4444" required>
                    <i class="fa fa-credit-card icon"></i>
                </div>
            </div>
          
            
            <div class="input_box">
                <input type="number" placeholder="Confirm Amount" name="amount" id= "c" required class="name">
                <i class="fa fa-money icon" aria-hidden="true"></i>
            </div>
            



            <div class="input_group">
                <div class="input_box">
                    <button type="submit" onclick="return confirm('Are you sure you want to proceed?')">Pay Now</a></button>
                     <button onclick="window.location.href='hompage.html'">Cancel</button>
                </div>
            </div>

            
           
                   
                  
                    
               
                   
                    
               

</form>




        </form>
    </div>

</body>

</html>
        