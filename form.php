<!DOCTYPE html>
<html>
<head>
    <title>Register New User</title>
</head>
<body>
    <h2>Welcome</h2>
    <form method="POST" action="process.php">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="username">Useraname:</label>
        <input type="text" name="username" id="username" required><br><br>

        <label for="Age">Age:</label>
        <input type="Age" name="Age" id="Age" required><br><br>

        <label for="message">Message:</label>
        <textarea name="message" id="message" rows="4" cols="50" required></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
