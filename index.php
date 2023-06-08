<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SAAS</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.7.0.slim.js"
    integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>

  <!-- Styles CSS -->
  <link rel="stylesheet" href="./css/styles.css">
  <!-- Responsive CSS -->
  <link rel="stylesheet" href="./css/responsive-styles.css">

  <!-- Owl Carousel -->
  <link rel="stylesheet" href="./resource/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="./resource/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">

  <!-- mmmenu -->
  <link rel="stylesheet" href="./assets/mmenu.css">

</head>

<body>
  <!-- Header Nav -->
  <?php include('./blocks/header.php'); ?>


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
  <!-- mmenu -->
  <!-- <script src="./js/mmenu.js"></script> -->

  <script src="./js/ajax.js"></script>

  <!-- Owl Carousel -->
  <script src="./resource/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>


</body>

</html>