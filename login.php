<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Book Tracker</title>
    <link rel="stylesheet" href="logincss.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">📚 Book Tracker</div>
        </nav>
    </header>

    <main>
        <section class="login-section">
            <h2>Admin Login</h2>
            <form action="login_action.php" method="post" class="login-form">
                <label for="email">Email:</label>
                <input type="email" id="email" name="txtemail" placeholder="Enter your username" required>
                
                <label for="password">Password:</label>
                <input type="password" id="password" name="txtpassword" placeholder="Enter your password" required>
                
                <button type="submit" class="button login">Login</button>
            </form>
            
         
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Book Tracker. Admin Access Only.</p>
    </footer>
</body>
</html>
