<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SAAS</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="./css/styles.css">

  <!-- Responsive CSS -->
  <link rel="stylesheet" href="./css/responsive-styles.css">
</head>

<body>
  <!-- Header Nav -->
  <?php include('./blocks/header.php'); ?>

  <div class="hero-img" id="hero-img"></div>

  <main>
    <!-- Hero section -->
    <?php include('./blocks/hero-section.php') ?>


    <!-- Highlight section -->
    <?php include('./blocks/highlight-section.php') ?>

    <!-- Media section -->
    <?php include('./blocks/media.php'); ?>
  </main>

  <!-- Footer section -->
  <?php include('./blocks/footer.php') ?>

  <!-- JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="./js/ajax.js"></script>
</body>

</html>