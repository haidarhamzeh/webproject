



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
    <h1>Users reviews</h1>
        <section>
            <h2>users reviews to our services </h2>
          
            
    
<table>
    <thead>
        <tr>
            
            <th>Username</th>
            
            <th>The Review</th>
            
        </tr>
    </thead>
    <tbody>
        
    </tbody>


            <?php 
include 'inc/connection.php';

$sql="SELECT * FROM reviews";

$result=mysqli_query($con,$sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
           
            <td>" . $row['db_name'] . "</td>
          
            
            <td>" . $row['db_review'] . "</td>
           
          </tr>";
}










?>

</table>
<a href="admin.html" class="back-button">Back</a>

  
</body>
</html>
