



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
            </ul>
        </nav>
        
    </header>


    <main>
    <h1>Manage Books</h1>
        <section>
            <h2>Books List</h2>
            
    
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
           
            <td>" . $row['db_title'] . "</td>
            
            <td>" . $row['db_author'] . "</td>
            <td><img src='img/edit.jpg' width=35px</td>
             <td><a href=delete.php?ID=".$row['id']."><img src='img/delete.png' width=35px></a></td>
          </tr>";
}










?>
</table>
    </main>
    <footer>
        <p>&copy; 2024 Book Tracker</p>
    </footer>
</body>
</html>
