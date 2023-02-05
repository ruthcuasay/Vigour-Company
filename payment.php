
<style>
	.input_box button {
  display: inline-block;
  background-color: #172B34;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;
  margin-left: 120px;
  margin-bottom: 25px;
  border: none;  
  cursor: pointer;  
  width: 20%;  
  opacity: 0.9; 
  border-radius: 25px; 
  letter-spacing: 2px;
  text-align: center;

}

.input_box button:hover {
    cursor: pointer;
    background-color: #21cdd3;
}

</style>

<?php 
	$fname = $_POST['fname'];
	$card = $_POST['card'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$dd = $_POST['dd'];
	$mm = $_POST['mm'];
	$yyyy = $_POST['yyyy'];
	$gender = $_POST['gender'];
	$cnum = $_POST['cnum'];
	$amount = $_POST['amount'];

	$servername= "localhost";
	$uname="root";
	$pw="";
	$dbname="member";

$conn=mysqli_connect($servername,$uname,$pw,$dbname);

$sql= "INSERT INTO payment (fname, card, email, address, dd, mm, yyyy, gender, cnum, amount ) VALUES ('$fname','$card','$email','$address','$dd','$mm','$yyyy','$gender','$cnum','$amount')";
if (mysqli_query($conn, $sql)) {
echo "";
} 
?>

        
<html>
<head>
<title></title>
<body>
  <link rel="stylesheet" type="text/css" href="hompage.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />



<header>
    <div class="container">
      

      <nav>

        <ul>
          <li><h1><span style="color:#172B34">Vigour </span><span style="color:#21cdd3"> Company</span></h1></li>
          <li><a href="index.html">Home</a></li>
          <li><a href="front.html">Anatomy</a></li>
          <li><a href="nutrition2.html">Nutrition Guide</a></li>
          <li><a href="videos.html">Videos</a></li>
          <li><a href="gallery2.html">Gallery</a></li>
          <li><a href="registration.html">Booking</a></li>
         
    
        </ul>
      </nav>
    </div>
    </header>



<img class="desc" src="image2.jpg">

<h1 class="title">What is Vigour Company?</h1>
<div class="description">

<p style="text-indent: 50px">They've been running their business for almost 3 years and it's been going well so far, there are only a few problems that cannot be avoided. Vigour Gym is located at 143 J.P Rizal Ave., Calauan Laguna, and 38 G.Medel St., San Pablo City. The goal of this company is to help children become physically fit and for awareness. This business is unique because children are the target here, we want to help them to enhance their bones and muscles. We considered starting a business for kids since we've noticed that they're more focused on technology these days, and we want them to be able to participate in physical activities. It's not easy at first, but after you get the hang of it, it's a lot easier.</p>

<p style="text-indent: 50px">This company is capable of providing high-quality facilities for children. The staff is very accommodating and respectful. This fitness center will also guarantee that all of the equipment is safe for youngsters/children. The service they can offer is for the children to be physically fit, to respect their health, and to form bonds with other kids.</p> </div>

<!-----service section start----------->
  <div class="service">
    <div class="title">
      <h2></h2>
    </div>

    <div class="box">
      <div class="card">
     <i class="fa fa-check-square" aria-hidden="true"></i>
        <h5>Mission</h5>
        <div class="pra">
          <p>To positively change the physical health of children by providing quality fitness experience.</p>

          
        </div>
      </div>

      <div class="card">
        <i class="fa fa-eye" aria-hidden="true"></i>
        <h5>Vision</h5>
        <div class="pra">
          <p>By providing quality fitness facilities, we aim to make our gym for kids as one of the most outstanding fitness studio in the Philippines. Also, promoting children's physical health and fitness, as well as raising awareness about children's physical health.</p>

          
        </div>
      </div>

      <div class="card">
       <i class="fa fa-podcast" aria-hidden="true"></i>
        <h5>Goals</h5>
        <div class="pra">
          <p>To provide quality fitness facilities and positively change the physical health of children.</p>

          
        </div>
      </div>
    </div>
  </div>





 
</body>
</html>