<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Thank You</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

  <style>
    body {
      background: linear-gradient(135deg, #28a745, #00c851);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      text-align: center;
    }

    .card-box {
      background: rgba(255,255,255,0.1);
      padding: 40px;
      border-radius: 15px;
      backdrop-filter: blur(10px);
      box-shadow: 0 10px 30px rgba(0,0,0,0.3);
    }

    .checkmark {
      font-size: 70px;
      animation: pop 0.6s ease;
    }

    @keyframes pop {
      0% { transform: scale(0); }
      80% { transform: scale(1.2); }
      100% { transform: scale(1); }
    }

    .btn-home {
      margin-top: 20px;
      background: white;
      color: #28a745;
      border: none;
      transition: 0.3s;
    }

    .btn-home:hover {
      transform: scale(1.05);
      background: #f8f9fa;
    }
  </style>
</head>
<body>

<div class="card-box animate__animated animate__fadeInUp">

  <div class="checkmark animate__animated animate__bounceIn">
    ✅
  </div>

  <h1 class="mt-3 animate__animated animate__fadeInDown">
    Thank You!
  </h1>

  <p class="mt-3 animate__animated animate__fadeIn">
    Your registration has been successfully submitted.
  </p>

  <button onclick="goHome()" class="btn btn-home px-4 py-2">
    Go Back Home
  </button>

</div>

<script>
  function goHome() {
    window.location.href = "index.html"; // change if needed
  }
</script>

</body>
</html>