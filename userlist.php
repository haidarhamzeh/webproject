



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
    <h1>UserList</h1>
        <section>
            <h2>The users that are loged in to our system </h2>
          
            
    
<table>
    <thead>
        <tr>
            
            <th>Username</th>
            
            <th>Email</th>
            
        </tr>
    </thead>
    <tbody>
        
    </tbody>


            <?php 
include 'inc/connection.php';

$sql="SELECT * FROM users";

$result=mysqli_query($con,$sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
           
            <td>" . $row['db_username'] . "</td>
          
            
            <td>" . $row['db_email'] . "</td>
           
          </tr>";
}










?>

</table>
<a href="admin.html" class="back-button">Back</a>

  
</body>
</html>
