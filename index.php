<?php
include "connection.php";
if(isset($_post["submit"])){
    $firstname = $_POST["firstName"];
    $lastname =$_POST["lastName"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $sql  = "INSERT INTO `realstate`.`register` (`firstname`, `lastname`, `phone`, `email`) VALUES ( '$firstname', '$lastname', '$phone', '$email')";
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Martian+Mono:wght@800&family=Montserrat:wght@800&family=Oswald:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>realstate.com</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    
    <div id="nav">
        <img src = "real-estate.png" width = "150px" height="70px">
      
    <a href="#home">Home</a>
        <a href="rentindex.php">Rent</a>
        <a href="About">About us</a>
        <a href="#contact us">Contact us</a>
        <a href="login.php">Login</a>
    </div>
    
   <div id = "page1">
   <video controls autoplay loop muted  src ="video1.mp4"></video>
   </div>
   <br><br><br><br>
    <div class="top1">Top Localities in India</div><br>
   
    <div id = "Allcards">
        <div class  = "cards" id = "cards1">
       <a href  ="index21.php" ><img src = "pic2.webp"></a>
          <a href  = "index21.php">  4BHK House
            <div class = "det">
            80Lakh to 85Lakh | 3000sqft
            </div>
            Bhawarkua, Indore
        </a>
        </div>

        
        
        <div class  = "cards" id = "cards2">
         <a href = "home1.php"> <img src = "home1.jpg"></a>  
            <a href  = "home1.php">  5BHK House
                <div class = "det">
                    80Lakh | 2500sqft
                </div>
                Sai Villa, Vrindavan
            </a>
        </div>
        <div class  = "cards" id = "cards3">
          <a href = "home2.php"> <img src = "home2.jpg"></a> 
            <a href  = "home2.php">  3BHK House
                <div class = "det">
                  60Lakh | 1740sqft
                </div>
                Neugi Nagar,Panji
            </a>
        </div>
       

        </div>
        <br><br><br>
        
    <div id = "Allcards1">
        <div class  = "cards" id = "cards4">
        <a href = "home3.php">    <img src = "home3.webp"></a>
            <a href  = "home3.php">  7BHK House
                <div class = "det">
                    2.2Crore | 3500sqft
                </div>
            Vijay Nagar, Indore
            </a>
        </div>
        <div class  = "cards" id = "cards5">
            <a href ="home4.php"> <img src ="home4.webp"></a>
            <a href  = "home4.php">  6BHK House
                <div class = "det">
                    1.5Crore | 3200sqft
                </div>
               Chanakyapuri,New Delhi
            </a>
        </div>
        <div class  = "cards" id = "cards6">
           <a href = "home5.php"> <img src = "home5.jpg"></a>
            <a href  = "home5.php">  8BHK House
                <div class = "det">
                    4Crore | 4250sqft
                </div>
                Rajendra Nagar, Lucknow
            </a>
        </div>
       

    </div><br><br><br><br>
    
    <br><br><br><br><br>
    <div class="top">Our Premium Projects</div><br>
    <div id = "projects">
    
       <div class  = "cardd">
        <img src="cons1.jpg">
       </div>
       <div class = "cardd">
        <img src = "cons2.jpg">
       </div>
       <div class  = "cardd">
        <img src = "cons3.jpg">
       </div>
       <div class = "cardd" >
        
        <img src = "cons4.png">
       </div>
       <div class  = "cardd">
        <img src = "cons5.jpg">
       </div>
    </div>
    <br><br><br>
    <div class="top1">Insights & Tools</div><br>
 
  <div id = "projects1">
    
    <div class  = "cardd1">
   <a href = "rates.php">
    <img src="rates.png">
   </a>
    </div>
    <div class = "cardd1">
        <a href = "https://www.google.com/maps/@24.6184131,78.9019738,6.02z?entry=ttu">
            <img src="heatmap.png">
           </a>
    </div>
    <div class  = "cardd1">
        <a href = "valuation.php">
            <img src="valuation.png">
           </a>
    </div>
    <div class = "cardd1">
        <a href = "rating.php">
            <img src="review.png">
           </a>
    </div>
    
 </div>
 <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br> 
 <div class="top1">Hot Selling Projects in India</div><br>
 <div id = "selling">
    <div class  = "cad">
        <a href = "city2.php"><img src="c1.webp"></a>
        <a href  = "city2.php">  TVS Emrald Lake Shore,<br>Chennai
            <div class = "det">
                ₹ 41.90 Lac to 97.90 Lac
            </div>
            Plot | SQFT,Saleable<br><br>
                    <button type="submit">Details</button>
        </a>
    </div>
    <div class  = "cad">
        <a href = "city1.php"><img src="h1.webp"></a>
        <a href  = "city1.php">  The Prestige City<br>Rajendra Nagar,Hyderabad
            <div class = "det">
                ₹ 76.64 Lac to 2.23 Cr
            </div>
            2,3,4 BHK's | (Saleable)<br><br>
                       <button type="submit">Details</button>
        </a>
    </div>
    <div class  = "cad">
        <a href = "city3.php"><img src="m1.webp"></a>
        <a href  = "city3.php">  Kalpataru Srishti Namaah<br>Mira Road, Mumbai
            
            <div class = "det">
                ₹ 79.00 Lac to 2.02 Cr
            </div>
            2,3,4 BHK's | (Saleable)
        <br><br>
                       <button type="submit">Details</button>
        </a>
    </div>
    <div class  = "cad">
        <a href = "city4.php"><img src="b1.webp"></a>
        <a href  = "city4.php"> Mana Verdant<br> Jakkur, Bangalore
            <div class = "det">
                ₹ 1.05 Cr to 1.54 Cr
            </div>
            2,3,4 BHK's | (Saleable)
            <br><br>

                       <button type="submit">Details</button>
        </a>
    </div>
   
 </div>
 <br><br> <br><br> <br><br>
 <div id = "make">
    <img src = "make.png">
 </div><br><br> <br><br> <br><br>
 <div class="top1">Everything you Need at One Place</div><br><br>
 <div class="top2">In-House Services</div><br>
 
 <div id ="services">
    <div class = "service">
    <a href = "homeloan.php"><img src = "homeloan.png"></a>
    </div>
    <div class = "service">
       <a href  = "interior.php"><img src  = "homeIn.png"></a>
       
       
    </div>
    <div class = "service">
        <a href = "legal services.php"><img src = "legal.png"></a>
    </div>
 </div>
 <br>
 <div id ="services">
    <div class = "service">
    <a href  = "mangement.php"><img src = "propman.png"></a>
    </div>
    <div class = "service">
       <a href = "escrow.php"> <img src = "escrow.png"></a>
    </div>
    <div class = "service">
        <a href = "rentagreement.php"><img src = "online.png"></a>
    </div>
 </div>
 <br>
 <div id ="services">
    <div class = "service">
    <img src = "rentgen.png">
    </div>
    <div class = "service">
        <a href = "sell and rent.php"><img src = "sell.png"></a>
    </div>
    <div class = "service">
        <img src = "title.png">
    </div>
 </div>
 <br>
 <div id ="services">
    <div class = "service">
    <img src = "litigation.png">
    </div>
    <div class = "service">
        <a href="valuation.php"><img src = "value.png"></a>
    </div>
    <div class = "service">
        <img src = "pReg.png">
    </div>
 </div>
 <br><br><br><br><br><br>
 <div id = "staff-Con">
    <img src="staff1.png" height="100%" width="100%">
 </div>
 <br><br>
 <br><br>
<br><br>
<div id = "operate">
    <img src = "Screenshot 2023-12-17 194447.png">
</div>
<br><br><br><br><br>
<div class = "top3">Buy, Sell And Rent Property In India</div><br><br>
<div class ="des">Welcome to realstate.com, where we redefine the real estate experience. Whether you're buying, selling, or renting, our dedicated team is committed to making your journey seamless and enjoyable. From strategic property sales and diverse rental listings to personalized buyer representation and hassle-free property management, we offer comprehensive services tailored to your unique needs. With our expert insights, cutting-edge technology, and client-centric approach, realstate.com is your trusted partner in unlocking a world of real estate possibilities. Explore our website or contact us today to embark on a new era of real estate excellence.</div>
<br><br><br><br><br><br>
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

</html>
