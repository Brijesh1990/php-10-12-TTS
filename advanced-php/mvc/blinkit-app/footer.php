
<!-- create a footer of blinkit -->
 <footer class="bg-gray-100 mt-10 py-10">
  <div class="max-w-7xl mx-auto px-4">
    <!-- Top Section -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 text-gray-700">
      <!-- About -->
      <div>
        <h3 class="font-semibold text-lg mb-3">About Blinkit</h3>
        <ul class="space-y-2 text-sm">
          <li><a href="<?php echo $mainurl;?>about-us" class="hover:text-black">About us</a></li>
          <li><a href="<?php echo $mainurl;?>careers" class="hover:text-black">Careers</a></li>
          <li><a href="<?php echo $mainurl;?>press" class="hover:text-black">Press</a></li>
        </ul>
      </div>
      <!-- Categories -->
      <div>
        <h3 class="font-semibold text-lg mb-3">Categories</h3>
        <ul class="space-y-2 text-sm">
          <li><a href="<?php echo $mainurl;?>products" class="hover:text-black">Fruits & Vegetables</a></li>
          <li><a href="<?php echo $mainurl;?>products" class="hover:text-black">Dairy & Bakery</a></li>
          <li><a href="<?php echo $mainurl;?>products" class="hover:text-black">Snacks & Beverages</a></li>
        </ul>
      </div>

      <!-- Customer Help -->
      <div>
        <h3 class="font-semibold text-lg mb-3">Customer Help</h3>
        <ul class="space-y-2 text-sm">
          <li><a href="<?php echo $mainurl;?>faq" class="hover:text-black">FAQ</a></li>
          <li><a href="<?php echo $mainurl;?>privacy" class="hover:text-black">Privacy Policy</a></li>
          <li><a href="<?php echo $mainurl;?>terms" class="hover:text-black">Terms & Conditions</a></li>
        </ul>
      </div>

      <!-- Social -->
      <div>
        <h3 class="font-semibold text-lg mb-3">Follow Us</h3>
        <div class="flex items-center space-x-4 text-2xl text-gray-600">
          <i class="fa fa-facebook hover:text-blue-600"></i>
          <i class="fa fa-twitter hover:text-blue-400"></i>
          <i class="fa fa-instagram hover:text-pink-500"></i>
          <i class="fa fa-whatsapp hover:text-green-500"></i>
          <i class="fa fa-snapchat hover:text-yellow-500"></i>
        </div>
      </div>

    </div>

    <!-- Divider -->
    <div class="border-t border-gray-300 my-6"></div>

    <!-- Bottom Section -->
    <div class="text-center text-sm text-gray-600">
      &copy; 2024 Blinkit. All rights reserved.
    </div>
  </div>
</footer>


<!-- modal js -->
 <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
<!-- simple JS for toggler -->
<script>
  const menuBtn = document.getElementById("menuToggle");
  const mobileMenu = document.getElementById("mobileMenu");

  menuBtn.addEventListener("click", () => {
    mobileMenu.classList.toggle("hidden");
  });
</script>
</body>
</html>