
<!-- MAIN CONTENT -->
<main class="flex-1 ml-0 md:ml-5 p-6 space-y-6 transition-all duration-300">

<div class="max-w-3xl mx-auto bg-white shadow-lg rounded-2xl p-6 md:p-8">

<h2 class="text-2xl font-bold text-gray-800 mb-6">Change Password</h2>
<form method="post" class="space-y-6">
<!-- Category Name -->
<div>
<label class="block text-sm font-medium text-gray-700 mb-2">
Old Password
</label>
<input 
type="password" name="opass" 
placeholder="Enter Old Password"
class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
>
</div>
<div>
<label class="block text-sm font-medium text-gray-700 mb-2">
New Password
</label>
<input 
type="password" name="npass" 
placeholder="Enter New Password"
class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
>
</div>
<div>
<label class="block text-sm font-medium text-gray-700 mb-2">
Confirmed Password
</label>
<input 
type="password" name="cpass" 
placeholder="Enter Confirmed Password"
class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
>
</div>
<!-- Buttons -->
<div class="flex flex-col sm:flex-row gap-4 sm:justify-end">
<button 
type="reset"
class="px-6 py-3 rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-100 transition"
>
Cancel
</button>

<button 
type="submit"
class="px-6 py-3 rounded-lg bg-blue-600 text-white hover:bg-blue-700 transition"
>
change Password
</button>
</div>

</form>
</div>

</main>
</div>
