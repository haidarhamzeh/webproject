



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Books</title>
    <link rel="stylesheet" href="userlist.css">
  
</head>
<body>




  
    <header>
    
        
    </header>


    <main>
    <h1>Sold Books</h1>
        <section>
            <h2>Here is the List of what users bought </h2>
          
            
    
<table>
    <thead>
        <tr>
            
            <th>Book title</th>
            
            <th>
                author
            </th>
            
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
           
          </tr>";
}










?>

</table>
<a href="admin.html" class="back-button">Back</a>

  
</body>
</html>
