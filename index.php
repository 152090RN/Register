<!DOCTYPE html>
<html>
<head>
    <title>User Registration Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <h2>User Registration Form</h2>

    <form method="POST" action="process.php">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>

        <label for="age">Age:</label>
        <input type="number" name="age" id="age" required><br><br>

        <label for="message">Message:</label>
        <input type="text" name="message" id="message" required><br><br>


        <input type="submit" value="Submit">
    </form>

    <h2>Registered Users</h2>

    <?php
    // Include your code to display data from the database here.
    // You can include the code from your "display.php" or similar script.
    require_once('display.php');
    ?>
</body>
</html>
