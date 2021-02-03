<?php 

session_start();

if( !isset($_SESSION["lomgin"]) ){
    header("Location: lomgin.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="16x16" href="72x72.png">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>MAPAN PAGE</title>
    <style>
        .isi2{
        width: 400%;
        }
    </style>
</head>
<body class="font-sans overflow-hidden">

    <nav class="flex justify-between bg-gradient-to-r from-yellow-400 to-yellow-600">

        <div>
            <div class="sm:px-2 md:px-5 md:py-2 items-center">
                <img src="72x72.png" alt="Mie Mapan" class="mr-5">
            </div>
        </div>

        <div class="my-auto">
            <a href="index.php" class="text-md font-bold text-red-600 md:text-xl font-bold text-red-600">MAPAN GROUP</a>
        </div>

        <div class="sm:px-5 md:px-5 md:py-1 items-center text-gray-700 md:text-xl my-auto">
            <a href="https://mapan.delivery/"><i class="fas fa-shopping-cart" class="float-right"></i></a>
        </div>
    </nav>

    <!-- sidebar -->
    <div class="container w-24 md:w-40 h-screen bg-yellow-400 pl-3 text-red-800 md:text-xl float-left">
        <ul>
            <li class="border-t border-opacity-50 border-yellow-800 hover:bg-yellow-600 text-gray-800 py-5"><a href="index.php"><i class="fas fa-home pr-1 md:pr-5"></i>Home</a></li>
            <li class="border-t border-opacity-50 border-yellow-800 hover:bg-yellow-600 py-5"><a href="https://www.miemapan.com/"><i class="fas fa-user-circle pr-1 md:pr-5"></i>Profile</a></li>
            <li class="border-t border-opacity-50 border-yellow-800 hover:bg-yellow-600 py-5"><a href="contact.php"><i class="fas fa-phone-alt pr-1 md:pr-5"></i>Contact</a></li>
            <li class="border-t border-opacity-50 border-yellow-800 hover:bg-yellow-600 py-5"><a href="https://mapan.delivery/"><i class="fas fa-shopping-cart pr-1 md:pr-5"></i>Order</a></li>
            <li class="border-t border-b border-opacity-50 border-yellow-800 hover:bg-yellow-600 py-5"><a href="logout.php"><i class="fas fa-sign-out-alt pr-1 md:pr-5"></i>Logout</a></li>
        </ul>
    </div>

    <div class="float-left bg-gray-100 w-9/12 md:w-10/12">
        <div class="mt-5 pl-5 text-gray-600 text-md md:text-lg">
            Home > <span class="text-blue-200 text-md md:text-lg">Home</span>
        </div>
    </div>

    <div class="float-left">
        <div class="mt-5 pl-5 text-gray-800 text-lg md:text-xl">
            Selamat Datang DI Halaman Utama
        </div>

        <div class="mt-5 pl-5 text-gray-900 text-md md:text-lg mb-10 md:mb-2">
            Menu Kami : 
        </div>
    </div>

    <div class="utama overflow-hidden w-8/12 md:w-9/12">
        <div class="isi w-3/4 md:w-1/3 h-full mx-auto overflow-hidden">
            <div class="isi2" id="slide">
                <div class="isi_gambar w-1/4 float-left" >
                <img id="slide" class="w-full float-left" src="d1.jpg">
                </div>
                <div class="isi_gambar w-1/4 float-left">
                <img id="slide" class="w-full float-left" src="d3.jpg">
                </div>
                <div class="isi_gambar w-1/4 float-left">
                <img id="slide" class="w-full float-left" src="d4.jpg">
                </div>
                <div class="isi_gambar w-1/4 float-left">
                <img id="slide" class="w-full float-left" src="d5.jpg">
                </div>
            </div>
        
        </div>
    
    </div>

    <div class="clear-both"></div>

<script src="script.js"></script>
</body>
</html>