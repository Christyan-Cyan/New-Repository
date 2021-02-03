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
</head>
<body class="font-sans overflow-hidden">

    <nav class="flex justify-between bg-gradient-to-r from-yellow-400 to-yellow-600">

        <div>
            <div class="sm:px-2 md:px-5 md:py-2 items-center">
                <img src="72x72.png" alt="Mie Mapan" class="mr-5">
            </div>
        </div>

        <div class="my-auto">
            <a href="index.php" class="text-md font-bold text-red-600 md:text-xl font-bold text-red-600 hover:text-red-800">MAPAN GROUP</a>
        </div>
        
        <div class="sm:px-5 md:px-5 md:py-1 items-center text-gray-700 hover:text-gray-900 md:text-xl my-auto">
            <a href="https://mapan.delivery/"><i class="fas fa-shopping-cart" class="float-right"></i></a>
        </div>
    </nav>

    <!-- sidebar -->
    <div class="container w-24 md:w-40 h-screen bg-yellow-400 pl-3 text-red-800 md:text-xl float-left">
        <ul>
            <li class="border-t border-opacity-50 border-yellow-800 hover:bg-yellow-600 py-5"><a href="index.php"><i class="fas fa-home pr-1 md:pr-5"></i>Home</a></li>
            <li class="border-t border-opacity-50 border-yellow-800 hover:bg-yellow-600 py-5"><a href="https://www.miemapan.com/"><i class="fas fa-user-circle pr-1 md:pr-5"></i>Profile</a></li>
            <li class="border-t border-opacity-50 border-yellow-800 hover:bg-yellow-600 text-gray-800 py-5"><a href="contact.php"><i class="fas fa-phone-alt pr-1 md:pr-5"></i>Contact</a></li>
            <li class="border-t border-opacity-50 border-yellow-800 hover:bg-yellow-600 py-5"><a href="https://mapan.delivery/"><i class="fas fa-shopping-cart pr-1 md:pr-5"></i>Order</a></li>
            <li class="border-t border-b border-opacity-50 border-yellow-800 hover:bg-yellow-600 py-5"><a href="logout.php"><i class="fas fa-sign-out-alt pr-1 md:pr-5"></i>Logout</a></li>
        </ul>
    </div>

    <div class="float-left bg-gray-100 w-9/12 md:w-10/12">
        <div class="mt-5 pl-5 text-gray-600 text-md md:text-lg">
            Home > <span class="text-blue-200 text-md md:text-lg">Contact</span>
        </div>
    </div>

    <div class="float-left">
        <div class="mt-5 pl-5 text-gray-800 text-md md:text-xl">
            Contact Page
        </div>

        <div class="mt-5 pl-5 text-gray-900 text-sm md:text-lg mb-10 md:mb-2">
            Jika Anda punya pertanyaan, langsung saja hubungi Kami :
        </div>
    </div>
    <br><br><br><br><br><br><br>
    <div class="contact">
        <div class="float-left pl-5">
            <div class="text-red-600 shadow-xl text-md md:text-xl font-bold bg-gradient-to-r from-red-300 to-gray-200 hover:text-gray-700 mb-5 w-full border border-red-600 rounded-full">
                <a href="mailto:info@miemapan.com" class="pr-2"><i class="fas fa-envelope pr-1 pl-2 pb-2"></i>E-MAIL</a>
            </div>
            <div class="text-green-500 shadow-xl text-md md:text-xl font-bold bg-gradient-to-r from-green-200 to-gray-200 hover:text-gray-700 mb-5 w-full border border-green-500 rounded-full">
                <a href="https://wa.me/6282261095858" class="pr-2"><i class="fab fa-whatsapp pr-1 pl-2 pb-2"></i>WhatsApp</a>
            </div>
            <div class="text-blue-600 shadow-xl text-md md:text-xl font-bold bg-gradient-to-r from-blue-300 to-gray-200 hover:text-gray-700 mb-5 w-full border border-blue-600 rounded-full">
                <a href="https://www.facebook.com/miemapan" class="pr-2"><i class="fab fa-facebook pr-1 pl-2 pb-2"></i>Facebook</a>
            </div>
            <div class="text-pink-800 shadow-xl text-md md:text-xl font-bold bg-gradient-to-r from-pink-300 to-purple-300 hover:text-gray-700 mb-5 w-full border border-pink-800 rounded-full">
                <a href="https:///www.instagram.com/miemapan" class="pr-2"><i class="fab fa-instagram-square pr-1 pl-2 pb-2"></i>Instagram</a>
            </div>
            <div class="text-red-500 shadow-xl text-md md:text-xl font-bold bg-gradient-to-r from-red-300 to-gray-200  hover:text-gray-700 mb-5 w-full border border-red-500 rounded-full">
                <a href="https://youtube.com/channel/UCjVuFONroRSF5lp_f_pNv8w" class="pr-2"><i class="fab fa-youtube pr-1 pl-2 pb-2"></i>Youtube</a>
            </div>
        </div>
    </div>

    <div class="clear-both"></div>

</body>
</html>