<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    * {
      padding: 0;
      margin: 0;
    }


    .hello {
      display: flex;
      justify-content: space-around;
    }

    img {
      max-height: 100%;
      max-width: 100%;
    }

    .a,
    .b,
    .c {
      margin: 1.5%;
    }

    .fourth_section {
      margin: 3%;
    }

    .campus_life_h3 {
      text-align: center;
      font-size: 8vmin;
      padding-top: 6vmin;
    }

    .campus_life {
      background-color: #334a71;
      color: #ffffff;
    }

    .third-p {
      font-size: 3vmin;
      padding: 2vmin 0vmin;
    }

    .third-div {}
  </style>
  <title>Campus life</title>
</head>

<body>
  <?php require_once ('partials/_nav.php') ?>
  <div class="campus_life">
    <h3 class="campus_life_h3">Campus life</h3>
    <div class="third-div">
      <p class="third-p">
        At Infinity College, campus life is dynamic and enriching. Students immerse themselves in a vibrant community
        where they engage in academic pursuits and extracurricular activities alike. From attending lectures and lab
        sessions to participating in student organizations and cultural events, there's always something exciting
        happening on campus


      <p class="third-p">
        Our campus facilities are equipped with modern amenities to support students' academic and recreational needs.
        With well-equipped laboratories, libraries, and sports facilities, students have access to resources that
        foster their holistic development. Whether studying late in the library or playing sports with friends, the
        campus provides a conducive environment for learning and personal growth.
      </p>
      <p class="third-p">
        Infinity College values diversity and inclusion, creating a welcoming atmosphere where students from various
        backgrounds thrive. Through collaborative projects and community initiatives, students forge lasting
        connections and develop leadership skills. With support from faculty and staff, students navigate their
        academic journey while enjoying a fulfilling college experience.
      </p>
    </div>
    <section class="fourth_section">
      <div class="hello"> <!--Div inside div-->
        <div class="a">
          <p style="color: rgb(7, 37, 138);"><a href="https://www.w3schools.com/html/html_images.asp"
              style="color: rgb(7, 37, 138);"><img src="image_10.jpg" class="img-3"></a></p>
        </div>
        <div class="b">
          <p style="color:aliceblue"><a href="https://www.w3schools.com/css/" style="color:aliceblue;"><img
                src="image_11.jpg" class="img-4"></a></p>
        </div>
        <div class="c">
          <p style="color:  rgb(7, 37, 138);"><a href="https://www.w3schools.com/js/"
              style="color:  rgb(7, 37, 138);"><img src="image_9.jpg" class="img-5"></a></p>
        </div>
      </div>
    </section>
  </div>

</body>

</html>