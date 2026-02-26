
<!-- MAIN LAYOUT -->
<div class="flex flex-1 pt-16">
<!-- SIDEBAR -->
<aside id="sidebar" class="bg-white shadow-md w-64 md:w-64 h-screen fixed md:relative top-0 left-0 transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out z-20">

<nav class="flex flex-col p-6 gap-2">

  <!-- Dashboard -->
  <a href="#" class="flex items-center gap-3 text-gray-700 hover:bg-gray-100 px-3 py-2 rounded-lg transition">
    🏠 Dashboard
  </a>

  <!-- Products Dropdown -->
  <div class="flex flex-col">
    <button onclick="toggleDropdown('productsDropdown')" class="flex justify-between items-center gap-3 w-full text-gray-700 hover:bg-gray-100 px-3 py-2 rounded-lg transition focus:outline-none">
      📦 Products
      <svg id="productsArrow" class="w-4 h-4 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
      </svg>
    </button>

    <!-- Dropdown Links -->
    <div id="productsDropdown" class="ml-4 mt-1 flex flex-col gap-1 hidden">
      <a href="#" class="px-3 py-2 rounded-lg hover:bg-gray-100 text-gray-700 transition">➕ Add Product</a>
      <a href="#" class="px-3 py-2 rounded-lg hover:bg-gray-100 text-gray-700 transition">📝 Manage Products</a>
    </div>
  </div>

  <!-- Other Sidebar Links -->
  <a href="#" class="flex items-center gap-3 text-gray-700 hover:bg-gray-100 px-3 py-2 rounded-lg transition">🛒 Orders</a>
  <a href="#" class="flex items-center gap-3 text-gray-700 hover:bg-gray-100 px-3 py-2 rounded-lg transition">👤 Customers</a>
  <a href="#" class="flex items-center gap-3 text-gray-700 hover:bg-gray-100 px-3 py-2 rounded-lg transition">📊 Analytics</a>
</nav>

</aside>


<script>
function toggleDropdown(id) {
  const dropdown = document.getElementById(id);
  const arrow = document.getElementById(id + "Arrow");

  if (dropdown.classList.contains('hidden')) {
    dropdown.classList.remove('hidden');
    arrow.classList.add('rotate-180'); // Arrow rotates down
  } else {
    dropdown.classList.add('hidden');
    arrow.classList.remove('rotate-180'); // Arrow back up
  }
}
</script>