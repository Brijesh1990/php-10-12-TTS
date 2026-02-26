
<!-- login form modal -->
<el-dialog>
<dialog id="dialog" aria-labelledby="dialog-title" class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent top-0   mt-5">
<el-dialog-backdrop class="fixed inset-0 bg-gray-300 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

<div tabindex="0" class="w-1/2 mx-auto mt-15 min-h-full rounded-2xl items-end justify-center p-10 text-center focus:outline-none sm:items-center sm:p-0">

<el-dialog-panel class="relative transform overflow-hidden rounded-3xl bg-white text-left shadow-xl transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">

<div class="bg-white p-15 px-4 pt-5 pb-4 sm:p-0 sm:pb-0">
<div class="sm:flex sm:items-start">

<div class="mt-3 text-center p-10 sm:mt-0 sm:ml-4 sm:text-left">
<h3 id="dialog-title" class="font-semibold text-gray-900 text-4xl">Login Form</h3>
<div class="mt-2 ">


<section class="w-full min-h-screen flex items-center justify-center  px-4 py-10">

<div class="bg-white shadow-2xl rounded-2xl 
grid grid-cols-1 md:grid-cols-2 overflow-hidden">

<!-- Left Grid (Animated Welcome Section) -->
<div class="hidden md:flex flex-col justify-center items-center 
bg-gradient-to-br from-green-700 to-green-600 
text-white p-10 animate-fadeIn">

<h2 class="text-4xl font-bold mb-4">Welcome Back 👋</h2>
<p class="text-center mb-6">
Login to continue your journey with us.
</p>

<img src="https://illustrations.popsy.co/white/mobile-login.svg"
class="w-64 animate-float"
alt="Login Illustration">
</div>

<!-- Right Grid (Login Form) -->
<div class="p-8 md:p-12 animate-slideIn">

<h3 class="text-3xl font-bold text-gray-800 mb-6 text-center md:text-left">
Login Account
</h3>

<form class="space-y-5">

<div>
<label for="login_email"
class="block text-sm font-medium text-gray-700">
Email Address
</label>
<input type="email" id="login_email"
class="mt-1 w-full border border-gray-300 rounded-md px-3 py-2
focus:ring-2 focus:ring-red-400 focus:border-red-400
transition duration-300"
placeholder="you@example.com" required />
</div>

<div>
<label for="login_password"
class="block text-sm font-medium text-gray-700">
Password
</label>
<input type="password" id="login_password"
class="mt-1 w-full border border-gray-300 rounded-md px-3 py-2
focus:ring-2 focus:ring-red-400 focus:border-red-400
transition duration-300"
placeholder="Enter your password" required />
</div>

<div>
<input type="submit"
class="w-full bg-red-500 text-white font-semibold py-2 rounded-md
hover:bg-red-600 transition duration-300 transform hover:scale-105 cursor-pointer"
value="Login" />
</div>

<div class="text-sm text-center text-gray-600">
Don’t have an account?
<a href="<?php echo $mainurl;?>register"
class="text-red-500 font-medium hover:underline">
Create account
</a>
</div>

</form>

</div>

</div>

</section>

</div>
</div>
</div>
</div>
<div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
<button type="button" command="close" commandfor="dialog" class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-red-500 sm:ml-3 sm:w-auto">Deactivate</button>
<button type="button" command="close" commandfor="dialog" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-xs inset-ring inset-ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button>
</div>
</el-dialog-panel>
</div>
</dialog>
</el-dialog>

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
  0%,100% { transform: translateY(0); }
  50% { transform: translateY(-12px); }
}

.animate-fadeIn {
  animation: fadeIn 1s ease-in-out;
}

.animate-slideIn {
  animation: slideIn 0.8s ease-in-out;
}

.animate-float {
  animation: float 3s ease-in-out infinite;
}
</style>