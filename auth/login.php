<?php

session_start();
// include './conn.php';
include '../db/conn.php';

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
        $_SESSION['role'] = $user['role'];
        $_SESSION['username'] = $user['username'];


        // echo  $_SESSION['role'];
        // header("Location: dashboard.php");

        if ($_SESSION['role'] === "admin") {
            // echo "hello admin";
            // echo  $_SESSION['role'];

            header("Location: ../admins/dashboard.php
            ");
        }else{
            // echo "not admin";
            header("Location: ../writers/dashboard.php");
        }
        exit;
    } else {
        echo "Invalid credentials";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="w-full max-w-md bg-white rounded-xl shadow-lg p-8 space-y-6">
        <h2 class="text-2xl font-bold text-center text-gray-800">Login Form</h2>

        <form action="" method="POST" class="space-y-5">

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" name="email" id="email"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input type="password" name="password" id="password"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <button type="submit"
                class="w-full bg-blue-600 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-700 transition duration-200">
                Submit
            </button>
        </form>

        <a href="register.php"><p>Not registered, click here to register</p></a>
    </div>

</body>

</html>