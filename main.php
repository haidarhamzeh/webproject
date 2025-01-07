<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Book Tracker</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

<header>
    <nav class="navbar">
        <div class="logo">📚 Book Tracker</div>
        <ul class="nav-links">
           
          
            <li><a href="loginuser.php" class="nav-link">Log Out</a></li>
            <li><a href="books.html" class="nav-link">Books</a></li>
            <li><a href="searchhtml.html" class="nav-link">search</a></li>
        </ul>
    </nav>
</header>

<section class="welcome-section">
            <h2>Welcome To Haidar's Library </h2>
            <p>This Library contains best books for 2024 year.</p>
        </section>

<main>
    <class="image1">
    <section class="top-section">
        <div class="book-highlight">
            <img src="img/women1.webp" alt="Top Sold Book">
            <p class="top-book-desc">Top 1 Sold Book 🎉 🎆</p>
        </div>
        <div class="why-us">
            <h3>Why Us?</h3>
            <p>We provide an extensive collection of books, personalized recommendations, and fast delivery services that make us your ideal choice!
            <br>Extensive Collection: Access a vast and diverse selection of books, ranging from classics to modern bestsellers.
<br>Expert Staff: Our knowledgeable and friendly team is always ready to help with personalized recommendations.
<br>Comfortable Environment: Enjoy a cozy and inspiring space designed for readers and learners alike.
<br>Community Events: Participate in engaging workshops, book clubs, and author meet-and-greets.
<br>Affordable Membership: Benefit from cost-effective plans tailored to fit every budget.
<br>Digital Resources: Access eBooks, audiobooks, and online tools to complement your reading experience.
            </p>
        </div>
    </section>
    <div class="arrow-container">
   <div class="arrow-left"></div>
   <div class="arrow-right"></div>
   <p class="arrow-text">Press here for free books</p>
</div>

<!-- Existing Blue Box Button -->
<div class="blue-book"></div>

    <section class="interactive-book">
  <div class="book-shape" onclick="openPopup()">📖</div>
</section>
<div id="popup" class="popup hidden">
  <p>You made the best choice by choosing us! Please check before buying if we are doing any giveaways so you don’t have to pay money if it’s what you already want to buy. Best regards.</p>
  <button onclick="closePopup()">Close</button>
</div>
<script src="script.js"></script>
< class="books-section">
<section class="books-section">
   <img src="img/brown1.jpg" alt="Book 1" class="books-image">
   <img src="img/brown2.jpg" alt="Book 2" class="books-image">
   <img src="img/brown3.jpg" alt="Book 3" class="books-image">
</section>
<form action="giveaway_action.php"  method="post">
<div class="user-form">
name: <input type="text" name="txtname" >
phonenumber: <input type="int" name="txtphonenumber" >
<button type="submit" class="button add">submit</button>
   </div>

</form>




    <section class="celebrity-quote">
        <div class="quote-box">
            <img src="img/author.jpeg" alt="Celebrity">
            <p>"Reading is the gateway to endless possibilities!"</p>
            <p>- John Doe</p>
        </div>
    </section>

    <section class="reviews">
        <h3>Reviews</h3>
        <div class="review-box">
            <div class="review">
              
                <p><strong>User1:</strong> "Amazing collection and fast service!"</p>
            </div>
            <div class="review">
               
                <p><strong>User2:</strong> "Loved the personalized recommendations."</p>
            </div>
        </div>
        <div class="leave-review">
        <form action="review_action.php"  method="post">
        name: <input type=varchar name="txtname" ><br><br>
        review: <input type=text  name="txtreview" ><br><br>
            <button>Submit Review</button>
        </div>
    </section>

    <section class="goodbye">
        <p>Thank you for visiting! See you again soon!</p>
    </section>
</main>

<div>
    <div class="footers">
    <p>&copy; 2024 Book Tracker | Your gateway to knowledge</p></div>
</footer>

<script src="script.js"></script>
</body>

</html>