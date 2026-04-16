
<!-- bvalidator -->
<script>
  $(document).ready(function(){
    $("#contact").bValidator();
  })
</script> 
<div class="container my-5">
  <h2 class="text-center mb-5">Contact Us</h2>

  <div class="row g-4">

    <!-- Left Grid: Address + Map -->
    <div class="col-md-6">
      <div class="card p-4 shadow-sm">

        <h4>Our Office</h4>
        <p class="mb-2"><strong>Address:</strong></p>
        <p>
          123 Business Street,<br>
          Ahmedabad, Gujarat,<br>
          India
        </p>

        <p><strong>Email:</strong> info@myshop.com</p>
        <p><strong>Phone:</strong> +91 9876543210</p>

        <!-- Google Map -->
        <iframe 
          src="https://maps.google.com/maps?q=Ahmedabad&t=&z=13&ie=UTF8&iwloc=&output=embed"
          width="100%" 
          height="250" 
          class="mt-3">
        </iframe>

      </div>
    </div>

    <!-- Right Grid: Contact Form -->
    <div class="col-md-6">
      <div class="card p-4 shadow-sm">

        <h4>Send Message</h4>

        <form method="post" id="contact">
          <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" data-bvalidator="required,alpha" class="form-control" placeholder="Enter your name">
          </div>

          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" data-bvalidator="required,email" class="form-control" placeholder="Enter your email">
          </div>

          
          <div class="mb-3">
            <label class="form-label">Phone</label>
            <input type="text" name="phone" data-bvalidator="required,minlen[10],maxlen[10],digit" class="form-control" placeholder="Enter your phone">
          </div>

          <div class="mb-3">
            <label class="form-label">Subject</label>
            <input type="text" name="subject" data-bvalidator="required" class="form-control" placeholder="Subject">
          </div>

          <div class="mb-3">
            <label class="form-label">Message</label>
            <textarea class="form-control" data-bvalidator="required,alpha" name="message" rows="4" placeholder="Write your message"></textarea>
          </div>

          <button type="submit" name="btn_contact" class="btn btn-primary w-100">Send Message</button>
        </form>

      </div>
    </div>

  </div>
</div>

