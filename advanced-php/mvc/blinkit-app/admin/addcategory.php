
<!-- MAIN CONTENT -->
<main class="flex-1 ml-0 md:ml-5 p-6 space-y-6 transition-all duration-300">
  
  <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-2xl p-6 md:p-8">
    
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Add Category</h2>

    <form class="space-y-6">

      <!-- Category Name -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">
          Category Name
        </label>
        <input 
          type="text" 
          placeholder="Enter category name"
          class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
        >
      </div>

      <!-- Description -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">
          Description
        </label>
        <textarea 
          rows="4"
          placeholder="Enter category description"
          class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
        ></textarea>
      </div>

      <!-- Status & Image (Responsive Grid) -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        
        <!-- Status -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2">
            Status
          </label>
          <select 
            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
          >
            <option value="">Select status</option>
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
          </select>
        </div>

        <!-- Image Upload -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2">
            Category Image
          </label>
          <input 
            type="file"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-50 focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
          >
        </div>

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
          Save Category
        </button>
      </div>

    </form>
  </div>

</main>
</div>
