
<!-- FOOTER -->
<footer class="bg-white shadow-inner mt-auto p-4 text-center text-gray-600">
© 2026 Admin Dashboard. All rights reserved.
</footer>

<!-- ANIMATIONS -->
<style>
@keyframes fadeIn {
from { opacity: 0; }
to { opacity: 1; }
}

@keyframes slideIn {
from { opacity: 0; transform: translateY(20px); }
to { opacity: 1; transform: translateY(0); }
}

.animate-fadeIn { animation: fadeIn 1s ease-in-out; }
.animate-slideIn { animation: slideIn 0.8s ease-in-out; }
</style>

<!-- SIDEBAR TOGGLE SCRIPT -->
<script>
const sidebar = document.getElementById('sidebar');
const toggleBtn = document.getElementById('sidebarToggle');

toggleBtn.addEventListener('click', () => {
sidebar.classList.toggle('-translate-x-full');
});
</script>

</body>
</html>