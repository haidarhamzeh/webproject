



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Tracker | Book Collection</title>
    <link rel="stylesheet" href="addbookcss.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">📚 Book Tracker</div>
            <ul class="nav-links">
                <li><a href="main.php" class="nav-link">Home</a></li>
                <li><a href="books.html" class="nav-link">Books</a></li>

                <li><a href="loginuser.php" class="nav-link">Log Out</a></li>
                
            </ul>
        </nav>

    
    </header>
   
</div>

    <main>
        <section class="welcome-section">
            <h2>Welcome</h2>
            <p>Manage your book collection efficiently. Below is an example of books currently in the system:</p>
        </section>

        <section class="book-collection">
            <h2>Book Collection</h2>
            <div class="book-grid">
                <!-- Book 1 -->
                <div class="book-card">
                    <img src="img/mockinbird1.jpg" alt="Book Cover">
                    <h3>To Kill a Mockingbird</h3>
                    <p>Author: Harper Lee</p>
                </div>
                <!-- Book 2 -->
                <div class="book-card">
                    <img src="img/1984.jpg" alt="Book Cover">
                    <h3>1984</h3>
                    <p>Author: George Orwell</p>
                </div>
                <!-- Book 3 -->
                <div class="book-card">
                    <img src="img/Great1.jpg" alt="Book Cover">
                    <h3>The Great Gatsby</h3>
                    <p>Author: F. Scott Fitzgerald</p>
                </div>
                <!-- Book 4 -->
                <div class="book-card">
                    <img src="img/Moby.jpg" alt="Book Cover">
                    <h3>Moby Dick</h3>
                    <p>Author: Herman Melville</p>
                </div>
                <!-- Book 5 -->
                <div class="book-card">
                    <img src="img/Pride.jpg" alt="Book Cover">
                    <h3>Pride and Prejudice</h3>
                    <p>Author: Jane Austen</p>
                </div>
                <!-- Book 6 -->
                <div class="book-card">
                    <img src="img/War.jpg" alt="Book Cover">
                    <h3>War and Peace</h3>
                    <p>Author: Leo Tolstoy</p>
                </div>
                <!-- Book 7 -->
                <div class="book-card">
                    <img src="img/rye2.jpg" alt="Book Cover">
                    <h3>The Catcher in the Rye</h3>
                    <p>Author: J.D. Salinger</p>
                </div>
                <!-- Book 8 -->
                <div class="book-card">
                    <img src="img/crime1.jpg" alt="Book Cover">
                    <h3>Crime and Punishment</h3>
                    <p>Author: Fyodor Dostoevsky</p>
                </div>
                <!-- Book 9 -->
                <div class="book-card">
                    <img src="img/new.jpg" alt="Book Cover">
                    <h3>Brave New World</h3>
                    <p>Author: Aldous Huxley</p>
                </div>
        </section>
        <div class="book-grid">
        <?php
    include 'inc/connection.php';
$sql="SELECT * FROM addbook";

$result=mysqli_query($con,$sql);

while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="book-card">';
        echo '<img src="' . $row['db_image'] . '" alt="Book Cover">';

        echo '<h3> title: '.$row['db_title']. '</h3>';
        echo '<p>Author: ' . $row['db_author'] . '</p>';
        echo '</div>';
    }
    ?>
</div>
  

<section>
            <h2>Add Your Book</h2>
            <form action="addbook_action.php"  method="post">
               
            

                title: <input type=text  name="txttitle" >
                

                author: <input type=text  name="txtauthor" >
                <div class="form-group">
  <label for="bookType">Type:</label>
  <select name="txttype">
  <?php 
include "inc/connection.php";

 $sql="SELECT * FROM booktype";

$result=mysqli_query($con,$sql);

while ($row = mysqli_fetch_assoc($result)){

    
   
    echo"<option>".$row['type_name']."</option>";
} 
?>
  </select>
</div>
                phoneNumber: <input type="int" name="txtphone" >
                <button type="submit" class="button add">Add Book</button>
            </form>
        </section>
        </main>

    <footer>
        <p>&copy; 2024 Book Tracker</p>
    </footer>
</body>
</html>