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

    <div class="relative hidden md:flex items-center">
        
        <!-- Profile Button -->
        <div id="profileButton" class="flex items-center gap-2 bg-gray-200 rounded-full px-3 py-1 cursor-pointer">
            <span class="text-gray-700 font-medium">
                <?php echo rtrim($_SESSION["email"],"@gmail.com"); ?>
            </span>
            <img src="https://i.pravatar.cc/40" alt="avatar" class="w-8 h-8 rounded-full">
        </div>

        <!-- Dropdown Menu -->
        <div id="profileDropdown" class="hidden absolute right-0 top-12 w-40 bg-white border rounded-lg shadow-lg">
            <a href="settings.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">
                ⚙️ Settings
            </a>
             <a href="<?php echo $mainurl?>change-password" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">
                🔒 Change password
            </a>
            <a href="<?php echo $mainurl;?>?adminlogout" onclick="return confirm('Are you sure to Logout as Admin ?')" class="block px-4 py-2 text-red-600 hover:bg-gray-100">
                🚪 Logout
            </a>
        </div>

    </div>

</div>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const button = document.getElementById("profileButton");
    const dropdown = document.getElementById("profileDropdown");

    if (button && dropdown) {

        button.addEventListener("click", function (e) {
            e.stopPropagation();
            dropdown.classList.toggle("hidden");
        });

        document.addEventListener("click", function () {
            dropdown.classList.add("hidden");
        });

    }

});
</script>

</header>
