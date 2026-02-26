<?php 
$mainurl="http://localhost/php-10-12-tts/advanced-php/mvc/blinkit-app/admin/";
$baseurl="http://localhost/php-10-12-tts/advanced-php/mvc/blinkit-app/admin/assets/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

<!-- HEADER -->
<header class="bg-white shadow-md flex items-center justify-between px-6 py-4 fixed top-0 w-full z-30">
<div class="flex items-center gap-4">
<!-- Hamburger Button -->
<button id="sidebarToggle" class="md:hidden text-gray-700 focus:outline-none">
<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="M4 6h16M4 12h16M4 18h16"/>
</svg>
</button>
<h1 class="text-2xl font-bold text-gray-800">Admin Dashboard</h1>
</div>

<div class="flex items-center gap-4">
<div class="hidden md:flex items-center gap-2 bg-gray-200 rounded-full px-3 py-1">
<span class="text-gray-700 font-medium">Admin</span>
<img src="https://i.pravatar.cc/40" alt="avatar" class="w-8 h-8 rounded-full">
</div>
</div>
</header>
