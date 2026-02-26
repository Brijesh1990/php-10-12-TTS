<?php 
$mainurl="http://localhost/php-10-12-tts/advanced-php/mvc/blinkit-app/admin/";
$baseurl="http://localhost/php-10-12-tts/advanced-php/mvc/blinkit-app/admin/assets/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Login</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gray-100 flex items-center justify-center px-4">

<div class="w-full max-w-6xl bg-white shadow-2xl rounded-3xl overflow-hidden 
            grid grid-cols-1 md:grid-cols-2">

  <!-- LEFT GRID (Branding Section) -->
  <div class="hidden md:flex flex-col justify-center items-center 
              bg-yellow-400 p-12 relative animate-fadeIn">

      <h1 class="text-5xl font-extrabold text-black mb-6 tracking-tight">
        Admin Panel
      </h1>

      <p class="text-black text-lg text-center mb-10 max-w-md">
        Manage products, orders, customers and analytics in one powerful dashboard.
      </p>

      <div class="bg-black text-yellow-400 px-6 py-3 rounded-full font-semibold animate-pulse">
        Secure Access Only
      </div>

      <!-- Decorative Circle -->
      <div class="absolute -bottom-20 -right-20 w-72 h-72 bg-black/10 rounded-full"></div>
  </div>


  <!-- RIGHT GRID (Login Form Section) -->
  <div class="p-8 md:p-14 flex flex-col justify-center animate-slideIn">

      <h2 class="text-3xl font-bold text-gray-900 mb-2">
        Welcome Back 👋
      </h2>
      <p class="text-gray-500 mb-8">
        Login to access the admin dashboard
      </p>

      <form class="space-y-6">

          <div>
              <label class="block text-sm font-semibold text-gray-700">
                  Admin Email
              </label>
              <input type="email"
                class="mt-2 w-full rounded-lg border border-gray-300 px-4 py-3
                       focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400
                       transition duration-300"
                placeholder="admin@example.com"
                required>
          </div>

          <div>
              <label class="block text-sm font-semibold text-gray-700">
                  Password
              </label>
              <input type="password"
                class="mt-2 w-full rounded-lg border border-gray-300 px-4 py-3
                       focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400
                       transition duration-300"
                placeholder="Enter password"
                required>
          </div>

          <div class="flex items-center justify-between text-sm">
              <label class="flex items-center gap-2">
                  <input type="checkbox" class="accent-yellow-500">
                  Remember me
              </label>
              <a href="#" class="text-yellow-500 font-medium hover:underline">
                  Forgot password?
              </a>
          </div>

          <button type="submit"
            class="w-full bg-black text-yellow-400 font-semibold py-3 rounded-lg
                   hover:bg-yellow-400 hover:text-black
                   transition duration-300 transform hover:scale-105">
              Login to Dashboard
          </button>

      </form>

  </div>

</div>


<!-- Animations -->
<style>
@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}

@keyframes slideIn {
  from { opacity: 0; transform: translateX(50px); }
  to { opacity: 1; transform: translateX(0); }
}

.animate-fadeIn {
  animation: fadeIn 1s ease-in-out;
}

.animate-slideIn {
  animation: slideIn 0.8s ease-in-out;
}
</style>

</body>
</html>