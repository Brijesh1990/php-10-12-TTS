
<!-- content section -->
<section class="py-10 bg-gray-50">
  <div class="max-w-5xl mx-auto px-6">
    <h2 class="text-4xl font-bold text-gray-900 text-center">
      Frequently Asked Questions
    </h2>
    <p class="text-gray-600 text-center mt-3">
      Everything you need to know about Blinkit-style service & operations.
    </p>

    <div class="mt-10 space-y-4">

      <!-- FAQ Item 1 -->
      <div class="border border-gray-200 rounded-xl bg-white shadow-sm">
        <button
          onclick="toggleFaq(1)"
          class="w-full flex items-center justify-between px-5 py-4 text-left"
        >
          <span class="text-lg font-semibold text-gray-800">
            How fast is the delivery?
          </span>
          <span id="icon-1" class="text-gray-600 text-xl">+</span>
        </button>
        <div id="faq-1" class="hidden px-5 pb-4 text-gray-600">
          Delivery typically arrives within **10 minutes**, depending on your
          location and availability.
        </div>
      </div>

      <!-- FAQ Item 2 -->
      <div class="border border-gray-200 rounded-xl bg-white shadow-sm">
        <button
          onclick="toggleFaq(2)"
          class="w-full flex items-center justify-between px-5 py-4 text-left"
        >
          <span class="text-lg font-semibold text-gray-800">
            What locations do you serve?
          </span>
          <span id="icon-2" class="text-gray-600 text-xl">+</span>
        </button>
        <div id="faq-2" class="hidden px-5 pb-4 text-gray-600">
          We currently operate in all major metro cities and expanding rapidly.
        </div>
      </div>

      <!-- FAQ Item 3 -->
      <div class="border border-gray-200 rounded-xl bg-white shadow-sm">
        <button
          onclick="toggleFaq(3)"
          class="w-full flex items-center justify-between px-5 py-4 text-left"
        >
          <span class="text-lg font-semibold text-gray-800">
            How do I apply for a job?
          </span>
          <span id="icon-3" class="text-gray-600 text-xl">+</span>
        </button>
        <div id="faq-3" class="hidden px-5 pb-4 text-gray-600">
          Visit the careers page and apply online for any open positions.
        </div>
      </div>

      <!-- FAQ Item 4 -->
      <div class="border border-gray-200 rounded-xl bg-white shadow-sm">
        <button
          onclick="toggleFaq(4)"
          class="w-full flex items-center justify-between px-5 py-4 text-left"
        >
          <span class="text-lg font-semibold text-gray-800">
            What payment methods are accepted?
          </span>
          <span id="icon-4" class="text-gray-600 text-xl">+</span>
        </button>
        <div id="faq-4" class="hidden px-5 pb-4 text-gray-600">
          We accept UPI, credit/debit cards, netbanking, and cash on delivery (COD).
        </div>
      </div>

      <!-- FAQ Item 5 -->
      <div class="border border-gray-200 rounded-xl bg-white shadow-sm">
        <button
          onclick="toggleFaq(5)"
          class="w-full flex items-center justify-between px-5 py-4 text-left"
        >
          <span class="text-lg font-semibold text-gray-800">
            How do refunds work?
          </span>
          <span id="icon-5" class="text-gray-600 text-xl">+</span>
        </button>
        <div id="faq-5" class="hidden px-5 pb-4 text-gray-600">
          Refunds are processed instantly for UPI and within 2–5 days for cards.
        </div>
      </div>

    </div>
  </div>
</section>

<!-- FAQ Toggle Script -->
<script>
  function toggleFaq(id) {
    const content = document.getElementById(`faq-${id}`);
    const icon = document.getElementById(`icon-${id}`);

    const isOpen = !content.classList.contains("hidden");

    document
      .querySelectorAll('[id^="faq-"]')
      .forEach((el) => el.classList.add("hidden"));
    document
      .querySelectorAll('[id^="icon-"]')
      .forEach((el) => (el.innerHTML = "+"));

    if (!isOpen) {
      content.classList.remove("hidden");
      icon.innerHTML = "−";
    }
  }
</script>
