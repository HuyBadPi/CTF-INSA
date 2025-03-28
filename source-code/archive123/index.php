<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ./../login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Admin Template</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<body class="bg-gray-100 font-family-karla flex">

    <aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
        <div class="p-6">
            <a href="index.php" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">INSA</a>
        </div>
        <nav class="text-white text-base font-semibold pt-3">
            <a href="#" data-url="home.php" class="menu-item flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-sticky-note mr-3"></i>
                Home
            </a>
            <a href="#" data-url="tables.php" class="menu-item flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-table mr-3"></i>
                Tables
            </a>
            <a href="#" data-url="admin.php" class="menu-item flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-align-left mr-3"></i>
                Admin
            </a>
            <a href="#" data-url="tabs.php" class="menu-item flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-tablet-alt mr-3"></i>
                Nouvelles
            </a>
            <a href="#" data-url="calendar.php" class="menu-item flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-calendar mr-3"></i>
                Calendrier
            </a>
        </nav>

    </aside>

    <div class="relative w-full flex flex-col h-screen overflow-y-hidden">
        
            <!-- Desktop Header -->
    <header class="w-full items-center bg-white py-2 px-6 hidden sm:flex">
        <div class="w-1/2"></div>
        <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
            <button @click="isOpen = !isOpen"
                class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none">
                <img src="https://source.unsplash.com/uJ8LNVCBjFQ/400x400">
            </button>
            <button x-show="isOpen" @click="isOpen = false"
                class="h-full w-full fixed inset-0 cursor-default"></button>
            <div x-show="isOpen" class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-16">
                <a href="#" class="block px-4 py-2 account-link hover:text-white">Account</a>
                <a href="#" class="block px-4 py-2 account-link hover:text-white">Support</a>
                <a href="#" class="block px-4 py-2 account-link hover:text-white">Sign Out</a>
            </div>
        </div>
    </header>

    <!-- Mobile Header & Nav -->
    <header x-data="{ isOpen: false }" class="w-full bg-sidebar py-5 px-6 sm:hidden">
        <div class="flex items-center justify-between">
            <a href="index.php" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">INSA</a>
            <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
                <i x-show="!isOpen" class="fas fa-bars"></i>
                <i x-show="isOpen" class="fas fa-times"></i>
            </button>
        </div>

        <!-- Dropdown Nav -->
        <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">

            <a href="home.php"
                class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                <i class="fas fa-sticky-note mr-3"></i>
                Home
            </a>
            <a href="tables.php"
                class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                <i class="fas fa-table mr-3"></i>
                Tables
            </a>
            <a href="admin.php"
                class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                <i class="fas fa-align-left mr-3"></i>
                Admin
            </a>
            <a href="tabs.php" class="flex items-center active-nav-link text-white py-2 pl-4 nav-item">
                <i class="fas fa-tablet-alt mr-3"></i>
                Nouvelles
            </a>
            <a href="calendar.php"
                class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                <i class="fas fa-calendar mr-3"></i>
                Calendrier
            </a>
            <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                <i class="fas fa-cogs mr-3"></i>
                Support
            </a>
            <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                <i class="fas fa-user mr-3"></i>
                My Account
            </a>
            <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                <i class="fas fa-sign-out-alt mr-3"></i>
                Sign Out
            </a>

        </nav>
        <!-- <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
            <i class="fas fa-plus mr-3"></i> New Report
        </button> -->
    </header>

        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                <div id="dynamic-content">
                    <!-- Nội dung sẽ được thay thế tại đây -->
                </div>

                <!-- Content goes here! -->
            </main>

            <footer class="w-full bg-white text-right p-4">
                Built by <a target="_blank" href="https://github.com/HuyBadPi" class="underline">HuyBadPi</a>
            </footer>
        </div>

    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            // Bắt sự kiện khi nhấn vào menu
            $('.menu-item').click(function (e) {
                e.preventDefault(); // Ngăn chặn hành động mặc định

                // Lấy URL từ thuộc tính data-url
                let url = $(this).data('url');

                // Gửi AJAX để tải nội dung
                $.ajax({
                    url: url, // Tệp PHP xử lý nội dung
                    method: 'GET',
                    success: function (data) {
                        // Thay thế nội dung trong div
                        $('#dynamic-content').html(data);
                    },
                    error: function () {
                        alert('Có lỗi xảy ra khi tải nội dung.');
                    }
                });
            });
        });
    </script>
</body>

</html>