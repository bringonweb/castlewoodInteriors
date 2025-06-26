<?php
// Set the HTTP response status to 404
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page Not Found - Castlewood Interiors</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/404.css">
  <link rel="stylesheet" href="css/footer.css">
</head>

<body>



  <!-- 404 Content -->
  <main class="error-content">
    <div class="container error-container">
      <div class="error-number">404</div>
      <h1 class="error-title">Page Not Found</h1>
      <p class="error-message">The page you're looking for doesn't exist or has been moved. We'll redirect you back to
        our homepage shortly.</p>
      <a href="index.php" class="btn">Return to Homepage</a>
      <div class="countdown">Redirecting in <span id="countdown">5</span> seconds...</div>
    </div>
  </main>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="js/404.js"></script>
</body>

</html>