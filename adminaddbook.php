<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Submit Data</title>
</head>
<body>
    <h1>Submit Book Information</h1>
    <form action="adminaddbook_action.php" method="POST">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="txttitle" required><br><br>

        <label for="author">Author:</label><br>
        <input type="text" id="author" name="txtauthor" required><br><br>

        <label for="image-url">Image URL:</label><br>
        <input type="url" id="image-url" name="txtimage" placeholder="https://example.com/image.jpg" required><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
