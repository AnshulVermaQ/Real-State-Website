<?php
include "connection.php";
if(isset($_post["firstName"])){
    $firstname = $_POST["firstName"];
    $lastname =$_POST["lastName"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $sql  = "INSERT INTO `realstate`.`register` (`id`, `firstname`, `lastname`, `phone`, `email`) VALUES ( '$firstname', '$lastname', '$phone', '$email')";
    if($con->query($sql)){
        echo "<script>alert('Submitted successfully')</script>";
        }else{
          echo "ERROR: $sql";
        }
        $con->close();
      }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Open+Sans&family=Roboto+Slab:wght@700&family=Roboto:wght@500&family=Rubik+Doodle+Shadow&family=Rubik+Doodle+Triangles&family=Rubik+Lines&family=Rubik+Maps&family=Work+Sans:wght@300&display=swap" rel="stylesheet">
   <link href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Open+Sans&family=Roboto+Slab:wght@700&family=Roboto:wght@300&family=Rubik+Doodle+Shadow&family=Rubik+Doodle+Triangles&family=Rubik+Lines&family=Rubik+Maps&family=Work+Sans:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofGJzfuXOsAFiCgpiD4S+L4ahD9zfcjz" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Open+Sans&family=Roboto+Slab:wght@700&family=Roboto:wght@300&family=Rubik+Doodle+Shadow&family=Rubik+Doodle+Triangles&family=Rubik+Lines&family=Rubik+Maps&family=Work+Sans:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofGJzfuXOsAFiCgpiD4S+L4ahD9zfcjz" crossorigin="anonymous">
  <link href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/fontawesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="NEW_INTEGRITY_HASH" crossorigin="anonymous">

<link rel="stylesheet" href  = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
     <link rel = "stylesheet" href = "index21.css">
     <link rel  = "stylesheet" href="index.css">
     <link rel   = "stylesheet" href  = "home21.css">
     <style>
        .photos-con{
            justify-content: end;
            align-items: end;
            display: flex;
            margin-left: 1200px;
            margin-right: 250px;
            font-weight: 700;
            
        }
        .photos-con button{
            height:45px;
            width:150px;
            background-color: palegreen;
        }
        .photos-con1{
            justify-content: end;
            align-items: end;
            display: flex;
            margin-left: 1200px;
            margin-right:100px;
            font-weight: 700;
            
        }
        .photos-con1 button{
            height:45px;
            width:150px;
            background-color: palegreen;
        }
        #rating-con{
            height:25vh;
            width:100%;
            background-color: antiquewhite;
        }
        
        #rating-con img{
            height:100%;
            width:100%;
            
        }
     </style>

    <title>realstate.com</title>
   
</head>
<body>
  <div id="nav">
    <img src = "real-estate.png" width = "150px" height="70px">
  
<a href="index.php">Home</a>
    <a href="#rent">Rent</a>
    
    <a href="About">About us</a>
    <a href="#contact us">Contact us</a>
    <a href="#contact us">Login</a>
</div>

    <br><br>

    <div id = "home1">
        <div id = "pic11">
            <img src = "b1.webp">
        </div>
       <div id = "pic">
        <div class  = "pics">
            <img src = "banglore.webp">
           </div>
           
           <div class  = "pics1">
            <img src = "banglore2.webp">
           </div>
    
       </div>
    
    </div>
    <div class="photos-con">
        <a href = "more"><button >more images</button></a>
       
    </div>
    
    <div class="head">Mana Verdant</div>  <div class="head2"></div>

    <div id = "info">
        <div id = "info1">
           <br> <div class = "norm">
                By BHS Developer<br>
                <i class="fa-solid fa-location-dot" style="color: #62667f;"></i>

                Jakkur, Bangalore
<br><br><br>
 <i class="fa-regular fa-circle-check" style="color: #12d929;"></i>    Ready to move<br><br><br>
 <div class = "price">
    ₹ 1.05 Cr to 1.54 Cr
 </div><br>
 3BHK Flat
            </div>


        </div>
       <div id = "info2">
        
          
       </div>
        </div><br>
        <div class="photos-con1">
             <a href = "more"><button > <i class="fa-solid fa-phone"></i>Request a Call </button></a>
           
        </div><br>
        <div id="rating-con">
            <img src = "banglore rating.png">
        </div><br><br>
        <a href = "https://www.google.com/maps/place/Jakkur,+Bengaluru,+Karnataka/@13.0630941,77.6125414,15.48z/data=!4m6!3m5!1s0x3bae19d098cf5f57:0xb09c6fd4b35cb14f!8m2!3d13.0631411!4d77.6206769!16s%2Fg%2F11gbf990lj?entry=ttu"><div id = "map" >
          <img src = "banglore map.png">
        </div></a><br><br><br><br><br>
        <div class  = "formm">
            Looking for Property
        </div>
        <br><br>
        <form id="dynamicForm" action = "index.php" method = "post">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" required>
          
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" required>
          
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
          
            <input type="submit" value="Submit">
            <p class="confirmation" id="confirmationMessage"></p>
          </form><br><br>
        <div class="head1">Disclaimer</div>
        <div id = "disclaimer">
            <p>RealState has endeavoured to ascertain the requirement of RERA registration. However, the advertiser claims that there is no requirement for such registration. Users are cautioned accordingly.

                RealState acts merely as a medium for posting information and content. It is clarified that the data available on the website is not physically verified and hence no representation or warranty is expressly or impliedly given to its accuracy in any form. The User is advised to do thorough research and due diligence before making any decision regarding investment. Nothing contained on the platform shall deem to constitute legal advice, solicitation, invitation etc. in any form whatsoever.</p>
        </div><br><br><br><br>
        <div id = "footer">
          <div class = "f1">
              <h3>About us</h3><br>
              <p>Real State is India's largest Integrated real estate marketplace, with category leadership presence across multiple touchpoints of consumer home ownership journey. With Urbanisation and rising disposable incomes as the core theme, Real State, with 7mn+ monthly traffic and ~USD 3bn+ GTV, is the largest and asset light proxy play to the growing residential demand story of India. One of the few Indian start ups to taste global success with presence in 100+ cities across 9 countries, Real State is at the forefront of tech adoption in the sector, with multiple patents across VR/AI domains.</p>
          </div>
          <div class = "f1">
                                <h3>Quick Links</h3><br>
              <div class = "foot">
                  <li><a href = "#">About Us</a></li><br>
                  <li><a href = "#">Contact Us</a></li><br>
                  <li><a href = "#">Services</a></li><br>
                  <li><a href = "#">Terms & Conditions</a></li><br>
                  <li><a href = "#">Privacy Policy</a></li><br>
              </div>
          </div>
          <div class = "f1">
              <h3>Connect With Us</h3><br><br>
              <p style="color:azure">Write to us at</p>
              <div class = "foot1"><a href = "#">connect@realstate.com</a></div><br><br>
              <p style="color:azure">Call us on, toll free number</p>
              <div class = "foot1"><a href = "#">1800 XXXX XXXX </a></div><br><br>
              <p style="color:azure">Follow us on</p><br>
              <div class="icons">
                  <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
                  <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                </div>
          </div>
      </div>
      <div class = "copy">
          <h5>&copy; 2023 realstate.com | All rights are reserved </h5>
      </div>
       
        
    
    
</body>
<script src ="scripthome.js"></script>
</html>