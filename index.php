<?php
// echo "hello world";
// variables
// $name = "james nyabera";
// $isMarried = "No";
// hello name, how are you doing?
// echo 'hello ' . $name . ', how are you doing?';
// echo "hello $name, how are you doing?";
// echo "$age <br>";
// echo($age . '<br>');

// $age = 45;
// // casting
// $age = (int) $age;
// var_dump($age);


// functions
// function greet($name){
//     return "Hello $name <br>";
// }
// // call
// echo greet("james nyabera");
// echo greet('simon kabu');
// echo greet('jediel kimani');
// echo greet('goerge meli');


// scope
// $oldBalance = 1000;
// function calculateBalance($withdraw)
// {
//     global $oldBalance;
//     $balance = $oldBalance - $withdraw;
//     return $balance;    
// }

// echo calculateBalance(200);
// echo 'new balance is ' . calculateBalance(200);

// // arrays
// $fruits = ["oranges","lemons","mangoes","apples","lemons","mangoes","apples" ];
// // echo $fruits[1];
// // print_r($fruits);
// // loops
// foreach($fruits as $fruit){
//     echo "<li> $fruit <br> </li>";
// }
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
echo "You entered: $username : $email : $password";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST" class="max-w-md mx-auto p-6 bg-white rounded-xl shadow-md space-y-6">
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Username</label>
            <input type="text" name="username" id="name"
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
            <input type="email" name="email" id="email"
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">password</label>
            <input type="password" name="password" id="password"
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <button type="submit"
            class="w-full bg-blue-600 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-700 transition duration-200">
            Submit
        </button>
    </form>

</body>


</html>