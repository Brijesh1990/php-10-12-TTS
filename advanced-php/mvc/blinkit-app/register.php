<section class="min-h-screen flex items-center justify-center bg-gray-100 px-4 py-10">
  <div class="max-w-6xl w-full bg-white rounded-xl shadow-lg overflow-hidden grid grid-cols-1 md:grid-cols-2">
    
    <!-- Left Side -->
    <div class="hidden md:flex flex-col justify-center items-center bg-green-700 text-white p-10 animate-fadeIn">
      <h2 class="text-4xl font-bold mb-4">Welcome Back!</h2>
      <p class="text-lg text-center mb-6">
        Create your account and start your journey with us.
      </p>
      <img src="https://illustrations.popsy.co/white/work-from-home.svg" 
           class="w-72 animate-float" alt="Register Illustration">
    </div>

    <!-- Right Side Form -->
    <div class="p-8 md:p-12 animate-slideIn">
      <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Create Account</h2>

      <form class="space-y-4">
        
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
          <input type="email" id="email"
            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:ring-2 focus:ring-red-400 focus:border-red-400 transition duration-300"
            placeholder="you@example.com" required />
        </div>

        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
          <input type="password" id="password"
            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:ring-2 focus:ring-red-400 focus:border-red-400 transition duration-300"
            placeholder="Enter your password" required />
        </div>

        <div>
          <label for="confirm_password" class="block text-sm font-medium text-gray-700">Confirm Password</label>
          <input type="password" id="confirm_password"
            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:ring-2 focus:ring-red-400 focus:border-red-400 transition duration-300"
            placeholder="Confirm your password" required />
        </div>

        <div>
          <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
          <input type="text" id="phone"
            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:ring-2 focus:ring-red-400 focus:border-red-400 transition duration-300"
            placeholder="Enter your phone number" required />
        </div>

        <div>
          <input type="submit"
            class="w-full bg-red-500 text-white font-semibold py-2 rounded-md hover:bg-red-600 transition duration-300 transform hover:scale-105 cursor-pointer"
            value="Register" />
        </div>

        <div class="text-center text-sm text-gray-600">
          Already have an account?
          <a href="<?php echo $mainurl;?>login" class="text-red-500 font-medium hover:underline">Login</a>
        </div>

      </form>
    </div>

  </div>
</section>

<!-- Animations -->
<style>
@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}
@keyframes slideIn {
  from { opacity: 0; transform: translateX(40px); }
  to { opacity: 1; transform: translateX(0); }
}
@keyframes float {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-10px); }
}

.animate-fadeIn {
  animation: fadeIn 1s ease-in-out;
}
.animate-slideIn {
  animation: slideIn 1s ease-in-out;
}
.animate-float {
  animation: float 3s ease-in-out infinite;
}
</style>