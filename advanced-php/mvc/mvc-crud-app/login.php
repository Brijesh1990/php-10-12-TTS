<!-- bvalidator -->
<script>
  $(document).ready(function(){
    $("#login").bValidator();
  })
</script> 

<style>
body {
  background: linear-gradient(135deg, #0d6efd, #6610f2);
  min-height: 100vh;
}

/* Left Section */
.info-box {
  color: #fff;
  padding: 50px;
  animation: fadeInLeft 1s ease;
}

.info-box h1 {
  font-weight: bold;
}

.info-box ul li {
  margin-bottom: 10px;
}

/* Right Form */
.form-box {
  background: #fff;
  border-radius: 10px;
  padding: 30px;
  animation: fadeInRight 1s ease;
  box-shadow: 0 5px 20px rgba(0,0,0,0.2);
}

/* Animations */
@keyframes fadeInLeft {
  from {opacity: 0; transform: translateX(-50px);}
  to {opacity: 1; transform: translateX(0);}
}

@keyframes fadeInRight {
  from {opacity: 0; transform: translateX(50px);}
  to {opacity: 1; transform: translateX(0);}
}

/* Button hover */
.btn-success:hover {
  transform: scale(1.05);
  transition: 0.3s;
}

/* Mobile spacing */
@media(max-width:768px){
  .info-box {
    text-align: center;
    padding: 30px;
  }
}
</style>
</head>

<body>

<div class="container">
  <div class="row align-items-center min-vh-100">

    <!-- LEFT SIDE -->
    <div class="col-md-6 d-none d-md-block">
      <div class="info-box">
        <h1>Why Join Us?</h1>
        <p class="mt-3">Create your account and enjoy amazing benefits:</p>

        <ul class="mt-4">
          <li>✔ Fast & Secure Shopping</li>
          <li>✔ Exclusive Discounts & Offers</li>
          <li>✔ Track Your Orders Easily</li>
          <li>✔ Wishlist & Save Products</li>
        </ul>
      </div>
    </div>

    <!-- RIGHT SIDE -->
    <div class="col-md-6 col-12">
      <div class="form-box">

        <h3 class="text-center mb-3">Login with Us</h3>

        <form id="login" method="post" enctype="multipart/form-data">

        
          <input type="email" name="email" class="form-control mb-3" placeholder="Email" data-bvalidator="required,email">

          <input type="password" name="password" class="form-control mb-3" placeholder="Password" data-bvalidator="required,minlen[3],maxlen[10]">

       
          <button type="submit" class="btn btn-success w-100">Login</button>

        </form>

      </div>
    </div>

  </div>
</div>
