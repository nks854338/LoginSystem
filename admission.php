<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    *{
      padding: 0;
      margin: 0;
    }
    .admission {
      display: flex;
      justify-content: space-evenly;
      padding: 8vmin;
    }

    .admission_h3 {
      font-size: 5.5vmin;
    }

    .admission{
      display: flex;
      justify-content: space-evenly;
      height: 70vh;
    }

    .adPara{
      font-size: 2.7vmin;
      margin: 3vmin;
    }

    span{
      color:cornflowerblue;
      font-size: 4vmin;
    }

    .image{
      height: 70vh;
    }

    .image img{
      height: 100%;
    }
  </style>
  <title>Admission</title>
</head>

<body>
  <?php require_once('partials/_nav.php') ?>
  <section class="admission">
    <div class="adBox">
      <h3 class="admission_h3">Admissions</h3>
      <br>
      <p class="adPara">
        Ready to embark on your journey towards a rewarding career in healthcare and technology? Admissions to
        Infinity College are now open for undergraduate students passionate about making a difference in the world.
        Join our vibrant community of learners and innovators, where you'll have access to unparalleled resources,
        personalized mentorship, and hands-on learning experiences. Apply today and take the first step towards
        realizing your potential at Infinity College.
      </p>
      <p class="adPara">
      <span> Your Potential: </span> Infinity College, we believe in nurturing the talents and aspirations of our students. Our medical and technical undergraduate programs are designed to provide you with a solid foundation for success in your chosen field. Join our vibrant community of learners and embark on a transformative journey towards realizing your full potential.
      </p>
      <p class="adPara">
      <span>Personalized Learning: </span>At Infinity College, we understand that every student is unique. That's why we offer personalized support and guidance to help you navigate your academic journey. Our dedicated faculty and staff are committed to providing individualized attention, ensuring that you receive the support you need to excel academically and personally.
      </p>
      <p class="adPara"> 
      <span>Community of Excellence: </span>Join a dynamic community of learners and innovators at Infinity College. Here, you'll be surrounded by like-minded peers who share your passion for making a difference in the world. With access to a network of alumni and professionals in the field, you'll have endless opportunities to collaborate, grow, and succeed. Take the first step towards a brighter future with Infinity College.
      </p>
    </div>
    <div class="image">
      <img src="image_7.png" height="200vh">
    </div>
  </section>

</body>

</html>