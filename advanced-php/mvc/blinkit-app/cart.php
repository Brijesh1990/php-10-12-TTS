

<!-- cart  modal -->
<el-dialog>
<dialog id="dialog1" aria-labelledby="dialog-title" class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent top-0   mt-5">
<el-dialog-backdrop class="fixed inset-0 bg-gray-300 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

<div tabindex="0" class="w-1/2 mx-auto mt-25 rounded-2xl min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
<el-dialog-panel class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">

<div class="bg-white rounded-2xl shadow-xl overflow-hidden 
grid grid-cols-1 md:grid-cols-2 
max-w-5xl mx-auto">

<!-- Left Grid (Cart Info Section) -->
<div class="p-8 md:p-12 flex flex-col justify-center animate-slideIn">

<h3 class="font-bold text-gray-900 text-4xl mb-4">
Cart Items
</h3>

<p class="text-gray-500 mb-6">
Your cart is currently empty.
</p>

<div class="space-y-4">

<!-- Login Button -->
<button command="show-modal" commandfor="dialog"
class="w-full bg-green-600 text-white px-5 py-3 rounded-full 
hover:bg-green-700 transition duration-300 
transform hover:scale-105">
Login
</button>

<!-- Go Home Button -->
<a href="<?php echo $mainurl;?>"
class="block text-center w-full bg-red-600 text-white px-5 py-3 
rounded-full hover:bg-red-700 transition duration-300 
transform hover:scale-105">
Go to Home
</a>

</div>
</div>

<!-- Right Grid (Animated Illustration Section) -->
<div class="hidden md:flex items-center justify-center 
bg-gradient-to-br from-red-500 to-orange-500 
p-10 animate-fadeIn">

<img src="https://illustrations.popsy.co/white/shopping-cart.svg"
alt="Empty Cart"
class="w-72 animate-float">
</div>

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
  from { opacity: 0; transform: translateX(-40px); }
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