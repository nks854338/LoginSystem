<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="google-site-verification" content="llZHxPuw_hrET1haCO6q7Jt96C3u8XgPMgZF16p7vlk" /><!--verfication code-->

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


  <title>My Collage</title>

  <style>
    * {
      margin: 0%;
      padding: 0%;
      box-sizing: border-box;
      font-family: Arial, Helvetica, sans-serif;
      text-decoration: none;
    }

    body {
      background-color: white;
      font-family: 'Poppins', sans-serif;
    }

    .first_section {
      color: #ffffff;
    }

    .first_section h5 {
      color: #ffffff;
      font-size: 4.5vmin;
    }

    .first_section p {
      color: #ffffff;
      font-size: 3vmin;
    }


    #carouselExampleIndicators {
      z-index: -1;
    }

    .h5 {
      margin: 20px;
    }

   
    .fifth_section {
      margin: 30px;
    }







    @media(max-width:450px) {

      .fifth_section {
        margin: 0;
      }


      .fifth-h3 {
        font-size: 17px;
      }

      .fifth-h3 {
        margin-left: 7px;
      }


  
    }
  </style>


</head>

<body>
  <?php require_once('partials/_nav.php') ?>

  <main>
    <section class="first_section">
      <div id="carouselExampleDark" class="carousel carousel-dark slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="image_1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Technological Innovations</h5>
              <p>Shape the future with our cutting-edge courses in technology and engineering..</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="image_2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Digital Innovation and IT</h5>
              <p>Dive into the digital age with courses in IT, software development, and the latest in technology trends.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="image_4.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Future-Focused Tech Education</h5>
              <p>Providing a solid foundation in emerging technologies to equip students for success in the digital age.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="image_4.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Innovative Learning</h5>
              <p>Discover a dynamic educational environment merging medical expertise with technological prowess.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="image_4.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>TechGenius Academy</h5>
              <p>Unlock the potential of aspiring technologists to become future visionaries.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <?php require_once('About.php') ?>
    <?php require_once('programs.php') ?>
    <?php require_once('campus_life.php') ?>
    <?php require_once('admission.php') ?>
  </main>
  <?php require_once('footer.php') ?>





  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <script>

    function nonRegiter() {

      alert("Please register or login first");
    }

  </script>


</body>

</html>
