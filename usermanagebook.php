



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Books</title>
    <link rel="stylesheet" href="managebookcss.css">
  
</head>
<body>




  


    <main>
    <h1>Manage Books</h1>
        <section>
            <h2>You are allowed to delete books</h2>
            <h3>please after deleting a book communicate with your manager about the reason</h3>
            
    
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
             <td><a href=admindelete.php?ID=".$row['id']."><img src='img/delete.png' width=35px></a></td>
             
          </tr>";
}










?>
</table>
<a href="admin.html" class="back-button">Back</a>
</body>
</html>
