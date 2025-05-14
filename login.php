<?php

session_start();
// include './conn.php';
include './conn.php';

// login
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $sql = "SELECT * FROM register WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    // all users with the email provided
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // check specific user from array
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['email'] = $user['email'];
        $_SESSION['username'] = $user['username'];
        header("Location: dashboard.php");
        exit;
    }else{
        echo "Invalid credentials";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <br><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">

        <button type="submit">Login</button>

    </form>
</body>

</html>