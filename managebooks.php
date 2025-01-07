



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
                <li><a href="books.html" class="nav-link">Books</a></li>
               
                <li><a href="loginuser.php" class="nav-link">Log Out</a></li>
            </ul>
        </nav>
        
    </header>


    <main>
    <h1>Manage Books</h1>
        <section>
            <h2>Books List</h2>
            <h3>please press on your book title to check your informations</h3>
            
    
<table>
    <thead>
        <tr>
            
            <th>Title</th>
            
            <th>Author</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
    </thead>
    <tbody>
        
    </tbody>


            <?php 
include 'inc/connection.php';

$sql="SELECT * FROM books";

$result=mysqli_query($con,$sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
           
            <td><a href=bookdetails.php?ID=".$row['id'].">" . $row['db_title'] . "</a></td>
          
            
            <td>" . $row['db_author'] . "</td>
            <td><img src='img/edit.jpg' width=35px</td>
             <td><a href=delete.php?ID=".$row['id']."><img src='img/delete.png' width=35px></a></td>
          </tr>";
}










?>
</table>
<h2>please press on your book title to check your informations</h2>
    </main>
    <footer>
        <p>&copy; 2024 Book Tracker</p>
    </footer>
</body>
</html>
