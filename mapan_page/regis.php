<?php 
require "conn.php";

if(isset($_POST['submit'])){

    global $koneksi;
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $email = strtolower( stripcslashes(($_POST['email'])));
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);
    $passwordku = mysqli_real_escape_string($koneksi, $_POST['passwordku']);

    // cek username sudah terdaftar atau belum
    $cek_user = mysqli_query($koneksi,"SELECT username FROM users WHERE email = '$email' ");
    if(mysqli_fetch_assoc($cek_user)){ //if true maka tidak boleh
        echo "<script>
                alert('username sudah digunakan, gunakan username lain!');
            </script>";
        header("Location:regis.php");
        return false;
    }

    if( $password == $passwordku ){
        // enkripsi password
        global $password;
        $password = password_hash($password,PASSWORD_DEFAULT);
        global $koneksi;
        mysqli_query($koneksi, "INSERT INTO users VALUES(null, '$username', '$email', '$password')");
    
        echo "<script>
                alert('Register Success!');
            </script>";
    }
    else if( $password !== $passwordku ){
        echo "<script>
                alert('Maaf, password tidak sesuai');
            </script>";
    }

}

?>  


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="16x16" href="R.jpg">
    <title>Register</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200">
    <div class="h-screen flex items-center justify-center">
        <div class="w-full md:w-4/6 bg-white p-24 leading-normal shadow-2xl">
            <div class="text-4xl text-center font-light mb-20">
            <h1>Register First</h1>
            </div>
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
                    <label for="passwordku">Confirm Password : </label><br>
                    <input type="password" name="passwordku" id="passwordku" required class="border-2 border-blue-200 rounded-md w-full"> 
                    <br><br>
                    <button type="submit" name="submit" class="bg-blue-400 shadow-xl hover:bg-blue-500 mt-5 p-1.5 border-2 border-blue-400 text-gray-100 rounded-md float-left">Register</button>

                    <button type="reset" class="bg-red-400 shadow-xl hover:bg-red-500 mt-5 p-1.5 border-2 border-red-400 text-gray-100 rounded-md float-left ml-5">Reset</button>

                </form>
                
            </div>
            <a href="lomgin.php" class="bg-green-400 shadow-xl hover:bg-green-500 mt-5 p-1.5 border-2 border-green-400 text-gray-100 rounded-md float-left ml-5">
                <button>Go To Login</button>
            </a>
        </div>
    </div>    
    
</body>
</html>
