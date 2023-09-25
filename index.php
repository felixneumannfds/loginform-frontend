
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="form-container">
        <h2>Login:</h2>
        <form action="login.php" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <br>
            <input type="password" name="password" placeholder="Password" required>
            <br>
            <button type="submit">Login</button>
            <a href="registerpage.php">Noch nicht angemeldet ? Kein Problem. Registriere dich kostenfrei
                hier:</a>
        </form>
    </div>

</body>
</html>
