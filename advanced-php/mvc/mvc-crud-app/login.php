
<!-- bvalidator -->
<script>
  $(document).ready(function(){
    $("#login").bValidator();
  })
</script> 
<div class="container">
  <div class="row justify-content-center align-items-center vh-80 mt-5">
    <div class="col-md-4">
      <div class="card p-4">
        <h3 class="text-center mb-3">Login</h3>
        <form method="post" id="login">
          <input type="email" name="email" data-bvalidator="required,email" class="form-control mb-3" placeholder="Email">

          <input type="password" name="password" data-bvalidator="required,minlen[3],maxlen[10]" class="form-control mb-3" placeholder="Password">
          
          <button type="submit" name="btn_login" class="btn btn-primary w-100">Login</button>
        </form>

      </div>
    </div>
  </div>
</div>
