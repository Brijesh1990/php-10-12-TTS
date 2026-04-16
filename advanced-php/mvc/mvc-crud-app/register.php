<!-- bvalidator -->
<script>
  $(document).ready(function(){
    $("#reg").bValidator();
  })
</script> 
<div class="container">
  <div class="row justify-content-center align-items-center vh-50 mt-5">
    <div class="col-md-5">
      <div class="card p-4">
        <h3 class="text-center mb-3">Register</h3>
        <form id="reg" method="post" enctype="multipart/form-data">
          <input type="file" name="photo" class="form-control mb-3" placeholder="upload photo" data-bvalidator="required">  

          <input type="text" name="fullname" class="form-control mb-3" placeholder="Full Name" data-bvalidator="required,alpha">

          <input type="email" name="email" class="form-control mb-3" placeholder="Email" data-bvalidator="required,email">
          
          <input type="password" name="password" class="form-control mb-3" placeholder="Password" data-bvalidator="required,minlen[3],maxlen[10]">
          
          <input type="password" name="cpassword" class="form-control mb-3" placeholder="Confirm Password" data-bvalidator="required,minlen[3],maxlen[10]">
          
          <input type="text" name="phone" class="form-control mb-3" placeholder="Phone" data-bvalidator="required,minlen[10],maxlen[10],digit">
          
          <textarea name="address" class="form-control mb-3" placeholder="Address" data-bvalidator="required"></textarea>

          <button type="submit" name="btn_register" class="btn btn-success w-100">Register</button>
        </form>

      </div>
    </div>
  </div>
</div>
