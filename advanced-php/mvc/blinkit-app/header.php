<?php 
$mainurl="http://localhost/php-10-12-tts/advanced-php/mvc/blinkit-app/";
$baseurl="http://localhost/php-10-12-tts/advanced-php/mvc/blinkit-app/assets/";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>Blinkit App :: delivered in 10 minutes </title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<!-- tailwinds css -->
<link rel='stylesheet' type='text/css' media='screen' href="<?php echo $baseurl;?>css/style.css">
<!-- font address  -->
 <link rel='stylesheet' type='text/css' media='screen' href="<?php echo $baseurl;?>css/font-awesome.css">
<!-- tailwind js -->
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
<header class="bg-white shadow top-0  z-50 sticky">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Top row -->
    <div class="flex items-center justify-between py-4">
      <!-- Logo -->
      <div class="flex items-center gap-3">
        <a href="<?php echo $mainurl;?>"<h1 class="font-bold text-3xl sm:text-4xl">
          <span class="text-yellow-400">Blink</span
          ><span class="text-green-600">it</span>
        </h1></a>
      </div>

      <!-- Desktop / Tablet search -->
      <div class="hidden md:block flex-1 mx-6">
        <input
          type="text"
          placeholder="Search for products..."
          class="border border-gray-300 rounded-full px-4 py-2 w-full focus:outline-none focus:ring-2 focus:ring-yellow-400"
        />
      </div>

      <!-- Desktop / Tablet buttons -->
      <div class="hidden md:flex items-center gap-3">
        <button command="show-modal" commandfor="dialog"
          class="bg-green-600 text-black px-4 py-2 rounded-full hover:bg-green-700"
        >
          Login
        </button>
        <button command="show-modal" commandfor="dialog1"
          class="bg-yellow-400 text-black px-4 py-2 rounded-full hover:bg-yellow-500"
        >
          Cart 🛒 (0)
        </button>
      </div>

      <!-- Mobile toggler -->
      <button
        id="menuToggle"
        class="md:hidden inline-flex items-center justify-center p-2 rounded-md border border-gray-200 hover:bg-gray-100"
        aria-label="Toggle menu"
      >
        <!-- simple hamburger icon -->
        <svg
          class="h-6 w-6"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>

    <!-- Mobile dropdown menu -->
    <div id="mobileMenu" class="md:hidden space-y-3 pb-4 hidden">
      <!-- search box -->
      <div>
        <input
          type="text"
          placeholder="Search for products..."
          class="border border-gray-300 rounded-full px-4 py-2 w-full focus:outline-none focus:ring-2 focus:ring-yellow-400"
        />
      </div>

      <!-- login & cart buttons -->
      <div class="flex flex-col xs:flex-row gap-3">
        <button command="show-modal" commandfor="dialog"
          class="bg-green-600 text-white px-4 py-2 rounded-full hover:bg-green-700 w-full"
        >
          Login
        </button>
        <button command="show-modal" commandfor="dialog1"
          class="bg-yellow-400 text-white px-4 py-2 rounded-full hover:bg-yellow-500 w-full"
        >
          Cart
        </button>
      </div>
    </div>
  </div>
</header>
