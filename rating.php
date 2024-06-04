<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #97ebee;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 20px auto;
    background-color: #ffffff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

#reviews {
    margin-bottom: 20px;
}

.review {
    border-bottom: 1px solid #ccc;
    padding-bottom: 10px;
    margin-bottom: 10px;
}

#addReviewForm {
    text-align: center;
}

input,
textarea,
button {
    margin-bottom: 10px;
}

    </style>
    <link rel = "stylesheet" href="index.css">
    <title>Project Review and Rating</title>
</head>
<body>
    <div id="nav">
        <img src = "real-estate.png" width = "150px" height="70px">
      
    <a href="index.php">Home</a>
        <a href="#rent">Rent</a>
        <a href="#buy">Buy Property</a>
        <a href="About">About us</a>
        <a href="#contact us">Contact us</a>
        <a href="#contact us">Login</a>
    </div>
<br>
    <div class="container">
        <h1>Project Review and Rating</h1>
        <br>
        <div id="reviews">
            <!-- Reviews will be dynamically added here -->
        </div>

        <div id="addReviewForm">
            <label for="username">Username:</label>
            <input type="text" id="username" placeholder="Enter yor Username">

            <label for="rating">Rating:</label>
            <input type="number" id="rating" min="1" max="5" placeholder="Enter your rating">

            <br><label for="comment">Comment:</label>
            <textarea id="comment" placeholder="Enter Your Comment"></textarea>

            <button onclick="addReview()">Submit Review</button>
        </div>
    </div>
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
    <script >
        var reviews = [
    { username: 'Vishwas Tripathi', rating: 4, comment: 'Great project!' },
    { username: 'Raj Mishra', rating: 5, comment: 'Excellent work!' },
    { username: 'Ankit Singh Chouhan', rating: 3, comment: 'Good effort.' }

];


function addReview() {
    var username = document.getElementById('username').value;
    var rating = document.getElementById('rating').value;
    var comment = document.getElementById('comment').value;

    if (username && rating && comment) {
        // Create a new review object
        var review = {
            username: username,
            rating: rating,
            comment: comment
        };

        // Add the review to the array
        reviews.push(review);

        // Update the reviews section
        displayReviews();

        // Clear the form fields
        document.getElementById('username').value = '';
        document.getElementById('rating').value = '';
        document.getElementById('comment').value = '';
    } else {
        alert('Please fill in all fields.');
    }
}

function displayReviews() {
    var reviewContainer = document.getElementById('reviews');
    reviewContainer.innerHTML = ''; // Clear existing reviews

    // Iterate through the reviews array and display each review
    for (var i = 0; i < reviews.length; i++) {
        var reviewElement = document.createElement('div');
        reviewElement.className = 'review';
        reviewElement.innerHTML = '<strong>' + reviews[i].username + '</strong> - Rating: ' + reviews[i].rating + '<p>' + reviews[i].comment + '</p>';

        reviewContainer.appendChild(reviewElement);
    }
}

// Initial display of reviews
displayReviews();

    </script>
</body>
</html>
