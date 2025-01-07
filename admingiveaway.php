
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
    <h1>Giveaway</h1>
        <section>
            
            <h3>Users submited for the giveaway</h3>
            
            
    
<table>
    <thead>
        <tr>
            
            <th>Name</th>
            
            <th>PhoneNumber</th>
          
        </tr>
    </thead>
    <tbody>
        
    </tbody>


            <?php 
include 'inc/connection.php';

$sql="SELECT * FROM giveaway";

$result=mysqli_query($con,$sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
           
            <td>" . $row['db_name'] . "</td>
          
            
            <td>" . $row['db_phonenumber'] . "</td>
         
          </tr>";
}










?>
</table>

</body>
</html>
