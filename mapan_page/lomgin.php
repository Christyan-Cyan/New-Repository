<?php 
session_start();

require "conn.php";

if(isset($_POST["lomgin"])){

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $check = mysqli_query($koneksi, "SELECT * FROM users WHERE email = '$email'");

    if(mysqli_num_rows($check) > 0 ){

        $bamris = mysqli_fetch_assoc($check);
        if(password_verify($password, $bamris["password"])){

            // semsion
            $_SESSION["lomgin"] = true;

            header("Location: index.php");
            exit;
        }
    }

    $error = true;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="16x16" href="L.jpg">
    <title>Login</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200">

    <div class="h-screen flex mditems-center justify-center">
            <div class="w-full md:w-4/6 bg-white p-24 leading-normal shadow-2xl">

            <div class="text-4xl text-center font-light mb-20">
                <h1>Login</h1>
            </div>

            <?php if( isset($error) ) : ?>
                <p class="text-red-300 bg-red-100 p-2 italic mb-10 text-center">email/password salah, silahkan masukkan ulang</p>
            <?php endif; ?>

            <div class="justify-center">

                <form action="" method="post">

                    <label for="username">Username : </label><br>
                    <input type="text" name="username" id="username" required class="border-2 border-blue-200 rounded-md w-full">
                    <br><br>
                    <label for="email">Email : </label><br>
                    <input type="email" name="email" id="email" required placeholder="myemail@gmail.com" class="placeholder-gray-400 border-2 border-blue-200 rounded-md w-full">
                    <br><br>
                    <label for="password">Password : </label><br>
                    <input type="password" name="password" id="password" required class="border-2 border-blue-200 rounded-md w-full">
                    <br><br>     
                    <button type="submit" name="lomgin" class="bg-green-400 shadow-xl hover:bg-green-500 mt-5 p-1.5 border-2 border-green-400 text-gray-100 rounded-md float-left">Login</button>
                            
                    <button type="reset" class="bg-red-400 shadow-xl hover:bg-red-500 mt-5 p-1.5 border-2 border-red-400 text-gray-100 rounded-md float-left ml-5">Reset</button> 
                        
                </form>

            </div>

            <a href="regis.php" class="bg-blue-400 shadow-xl active:bg-blue-600 hover:bg-blue-500 mt-5 p-1.5 border-2 border-blue-400 text-gray-100 rounded-md float-left ml-5">
                <button>Register First</button>
            </a>
        </div>
    </div>
    
</body>
</html>
