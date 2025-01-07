<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type Page | Book Tracker</title>
    <link rel="stylesheet" href="main.css">
    <style>
        .special-link {
            font-size: 2.5rem; /* Makes the words big */
            font-weight: bold; /* Makes the text bold */
            color:rgb(255, 255, 255);
            text-decoration: none; /* Removes underline */
            margin: 10px;
            display: block; /* Ensures each word is on a separate line */
            text-align: center;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .special-link:hover {
            color: #FF5733; /* Changes color on hover */
            transform: scale(1.1); /* Slightly enlarges on hover */
        }

        .form-container {
            text-align: center;
            margin-top: 30px;
        }

        .form-title {
            font-size: 3rem; /* Large font size for the title */
            font-weight: bold;
            color:rgb(255, 255, 255);
            margin-bottom: 20px;
        }

        .input-box {
            width: 50%;
            padding: 10px;
            font-size: 1.2rem;
            border: 2px solid  #5b2017;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .submit-btn {
            padding: 10px 20px;
            font-size: 1.2rem;
            font-weight: bold;
            color: white;
            background-color: #5b2017;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #FF5733;
        }
    </style>
</head>
<body>

<header>
    <nav class="navbar">
        <div class="logo">📚 Book Tracker</div>
        <ul class="nav-links">
            <li><a href="addbook.php" class="nav-link">Add Book</a></li>
            <li><a href="managebooks.php" class="nav-link">Manage Books</a></li>
            <li><a href="logout.php" class="nav-link">Log Out</a></li>
            <li><a href="books.html" class="nav-link">Books</a></li>
        </ul>
    </nav>
</header>

<main>
   

    <div class="form-container">
        <h1 class="form-title">Enter New Type Here</h1>
        <form action="type_action.php" method="POST">
            <input type="text" name="txttype">
            <br>
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
</main>

</body>
</html>
