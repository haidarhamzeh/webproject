



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Books</title>
    <link rel="stylesheet" href="managebookcss.css">
</head>
<body>

  
    <header>
    <nav class="navbar">
            <div class="logo">📚 Book Tracker</div>
            <ul class="nav-links">
                <li><a href="main.php" class="nav-link">Home</a></li>
                <li><a href="addbook.php" class="nav-link">Add Book</a></li>
                <li><a href="managebooks.php" class="nav-link">Manage Books</a></li>
                <li><a href="login.php" class="nav-link">Log Out</a></li>
            </ul>
        </nav>
        
    </header>


    <main>
    <h1>Manage Books</h1>
        <section>
            <h2>Books List</h2>
            



            <?php 
include 'inc/connection.php';
$artID=$_GET['ID'];

$sql="SELECT * FROM books WHERE id='$artID'";

$result=mysqli_query($con,$sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "
           Your book:
              ". $row['db_title'] . "<br>
           The Author:
           ". $row['db_author'] . "<br>
           Your PhoneNumber:
           " . $row['db_phoneNumber'] . "<br><br><br>
            
           Below are the details of your submission.<br>
            If you notice any incorrect information,  please return to the Manage Books page, delete your purchase,and resubmit with the correct details. 
            Should you encounter any other issues, such as technical difficulties,<br>
            do not hesitate to contact us via email. We’re here to assist you.";
}










?>
</table>
    </main>
    <footer>
        <p>&copy; 2024 Book Tracker</p>
    </footer>
</body>
</html>
