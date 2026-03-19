<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Animated Registration Form</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

  <style>
    body {
      background: linear-gradient(135deg, #4facfe, #00f2fe);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .form-container {
      background: #fff;
      border-radius: 15px;
      padding: 30px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.2);
      animation: fadeInUp 1s ease;
    }

    .form-control:focus {
      box-shadow: 0 0 10px rgba(0,123,255,0.5);
      border-color: #007bff;
      transition: 0.3s;
    }

    .btn-custom {
      background: linear-gradient(45deg, #007bff, #00c6ff);
      border: none;
      transition: 0.3s;
    }

    .btn-custom:hover {
      transform: scale(1.05);
      background: linear-gradient(45deg, #0056b3, #0096c7);
    }
  </style>
  <!-- call javascript -->
 <script src="js/validation.js"></script>  
</head>
<body>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-8 form-container animate__animated animate__fadeInUp">

      <h3 class="text-center mb-4">Registration Form</h3>

      <form method="post" name="frm" action="welcome.php" onsubmit="return valid(this.value)">
        <div class="row">

          <!-- Left Column -->
          <div class="col-md-6 animate__animated animate__fadeInLeft">
            <div class="mb-3">
              <label class="form-label">First Name</label>
              <input type="text" name="fname" class="form-control" placeholder="Enter first name">
            </div>

            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" name="email" class="form-control" placeholder="Enter email">
            </div>

            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" name="pass" class="form-control" placeholder="Enter password">
            </div>
          </div>

          <!-- Right Column -->
          <div class="col-md-6 animate__animated animate__fadeInRight">
            <div class="mb-3">
              <label class="form-label">Last Name</label>
              <input type="text" name="lname" class="form-control" placeholder="Enter last name">
            </div>

            <div class="mb-3">
              <label class="form-label">Phone</label>
              <input type="tel" name="phone" class="form-control" placeholder="Enter phone number">
            </div>

            <div class="mb-3">
              <label class="form-label">Confirm Password</label>
              <input type="password" name="cpass" class="form-control" placeholder="Confirm password">
            </div>
          </div>

        </div>

        <!-- Submit -->
        <div class="text-center mt-3">
          <button type="submit" class="btn btn-custom px-5 py-2 text-white">
            Register
          </button>
        </div>

      </form>

    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>