<main class="ml-0 md:ml-5 p-6 space-y-6 transition-all duration-300">

  <div class="bg-white shadow-lg rounded-2xl p-6">
    
    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">
      <h2 class="text-2xl font-bold text-gray-800">Manage Categories</h2>

      <div class="flex flex-col sm:flex-row gap-3">
        <input 
          type="text" 
          placeholder="Search categories..."
          class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none w-full sm:w-64"
        >
        <button class="px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
          + Add Category
        </button>
      </div>
    </div>

    <!-- Table Wrapper (Responsive Scroll) -->
    <div class="overflow-x-auto">
      <table class="min-w-full border border-gray-200 rounded-lg overflow-hidden">
        
        <!-- Table Head -->
        <thead class="bg-gray-100 text-gray-700 text-sm uppercase">
          <tr>
            <th class="px-6 py-3 text-left">#</th>
            <th class="px-6 py-3 text-left">Image</th>
            <th class="px-6 py-3 text-left">Category Name</th>
            <th class="px-6 py-3 text-left">Slug</th>
            <th class="px-6 py-3 text-left">Status</th>
            <th class="px-6 py-3 text-center">Actions</th>
          </tr>
        </thead>

        <!-- Table Body -->
        <tbody class="divide-y divide-gray-200 text-gray-700 text-sm">

          <tr class="hover:bg-gray-50 transition">
            <td class="px-6 py-4">1</td>
            <td class="px-6 py-4">
              <img src="https://via.placeholder.com/40" 
                   class="w-10 h-10 rounded-lg object-cover" />
            </td>
            <td class="px-6 py-4 font-medium">Electronics</td>
            <td class="px-6 py-4">electronics</td>
            <td class="px-6 py-4">
              <span class="px-3 py-1 text-xs font-medium rounded-full bg-green-100 text-green-700">
                Active
              </span>
            </td>
            <td class="px-6 py-4 text-center">
              <div class="flex justify-center gap-3">
                <button class="px-3 py-1 text-xs bg-yellow-100 text-yellow-700 rounded-md hover:bg-yellow-200 transition">
                  Edit
                </button>
                <button class="px-3 py-1 text-xs bg-red-100 text-red-700 rounded-md hover:bg-red-200 transition">
                  Delete
                </button>
              </div>
            </td>
          </tr>

          <tr class="hover:bg-gray-50 transition">
            <td class="px-6 py-4">2</td>
            <td class="px-6 py-4">
              <img src="https://via.placeholder.com/40" 
                   class="w-10 h-10 rounded-lg object-cover" />
            </td>
            <td class="px-6 py-4 font-medium">Fashion</td>
            <td class="px-6 py-4">fashion</td>
            <td class="px-6 py-4">
              <span class="px-3 py-1 text-xs font-medium rounded-full bg-red-100 text-red-700">
                Inactive
              </span>
            </td>
            <td class="px-6 py-4 text-center">
              <div class="flex justify-center gap-3">
                <button class="px-3 py-1 text-xs bg-yellow-100 text-yellow-700 rounded-md hover:bg-yellow-200 transition">
                  Edit
                </button>
                <button class="px-3 py-1 text-xs bg-red-100 text-red-700 rounded-md hover:bg-red-200 transition">
                  Delete
                </button>
              </div>
            </td>
          </tr>

        </tbody>
      </table>
    </div>

    <!-- Pagination -->
    <div class="flex flex-col sm:flex-row justify-between items-center mt-6 gap-4">
      <p class="text-sm text-gray-600">Showing 1 to 2 of 10 results</p>

      <div class="flex gap-2">
        <button class="px-3 py-1 border rounded-md text-sm hover:bg-gray-100">Previous</button>
        <button class="px-3 py-1 bg-blue-600 text-white rounded-md text-sm">1</button>
        <button class="px-3 py-1 border rounded-md text-sm hover:bg-gray-100">2</button>
        <button class="px-3 py-1 border rounded-md text-sm hover:bg-gray-100">Next</button>
      </div>
    </div>

  </div>

</main>