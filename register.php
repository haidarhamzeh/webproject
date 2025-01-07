<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Book Tracker</title>
    <link rel="stylesheet" href="registercss.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">📚 Book Tracker</div>
           
        </nav>
    </header>

    <main>
        <section class="register-section">
            <h2>Create an Account</h2>
            <p>Fill out the form below to register and access Book Tracker.</p>

            <form action="register_action.php" method="post" class="register-form">
                <label for="username">Username</label>
                <input type="text" id="username" name="txtusername" placeholder="Enter your username" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="txtemail" placeholder="Enter your email" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="txtpassword" placeholder="Enter your password" required>

                <button type="submit" class="button register">Register</button>
            </form>

            <div class="login-option">
                <p>Already have an account? <a href="loginuser.php">Login here</a>.</p>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Book Tracker. All Rights Reserved.</p>
    </footer>
</body>
</html>
