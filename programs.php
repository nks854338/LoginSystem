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

    .second_section,
    .third_section {
      justify-content: space-between;
      display: flex;
      margin: 50px;
      align-items: center;
    }

    .second-h3,
    .third-h3,
    .fifth-h3 {
      font-size: 40px;
    }

    .second-p,
    .third-p,
    .fifth-p {
      font-size: 20px;
    }

    .third-div {
      margin: 5%;
    }

    img {
      max-height: 100%;
      max-width: 100%;
    }

    .img-1,
    .img-2 {
      height: 100%;
      width: 100%;
    }


    @media(max-width:1150px) {

      .second_section,
      .third_section {
        margin: 30px;
      }

      .second-h3,
      .third-h3,
      .fifth-h3 {
        font-size: 30px;
      }

      .second-p,
      .third-p,
      .fifth-p {
        font-size: 15px;
      }
    }

    @media(max-width:450px) {

      .second_section,
      .third_section {
        margin: 17px;
      }

      .third-h3 {
        margin: 0;
      }

      .second-h3,
      .third-h3,
      {
      font-size: 17px;
    }

    .second-p,
    .third-p,
    .fifth-p {
      font-size: 11px;
    }



    }
  </style>

  <title>Programs</title>
</head>

<body>
  <?php require_once ('partials/_nav.php') ?>
  <section class="second_section">
    <div class="program_box">
      <h3 class="second-h3">
        Computer Science Program:
      </h3>
      <br>
      <p class="second-p">
      The Computer Science program at Infinity College empowers students with the knowledge and skills needed to
        thrive in the rapidly evolving field of technology. From programming languages to artificial intelligence and
        cybersecurity, our curriculum covers a wide range of topics to ensure students are well-equipped for success
        in the digital age. With access to cutting-edge labs and industry partnerships, students have the opportunity
        to engage in real-world projects and internships, preparing them for exciting careers in software development,
        data science, and beyond.
      </p>
    </div>

    <div class="img-second">
      <img src="https://chennaiwebdesign.in/assets/img/services1/s118.png" class="img-1">
    </div>
  </section>

  <section class="
  ection-second">
    <div class="img-second">
      <img src="https://cdn.pixabay.com/photo/2014/04/02/10/53/microscope-304824_1280.png" class="img-2" 
        height="10vh">
    </div>

    <div class="third-div">
      <h3 class="third-h3">
      Medical Program:
      </h3>
      <br>
      <p class="third-p">
      At Infinity College, our medical program offers a comprehensive curriculum designed to prepare students for a
        rewarding career in healthcare. With a focus on evidence-based practice and clinical skills development,
        students gain hands-on experience through internships and practical training. Our world-class faculty and
        state-of-the-art facilities ensure that students receive the highest quality education, preparing them to
        excel in fields such as medicine, nursing, and allied health professions.
      </p>
    </div>

  </section>

  <section class="second_section">
    <div>
      <h3 class="second-h3">
        Electrical Program:
      </h3>
      <br>
      <p class="second-p">
        At Infinity College, our Electrical Engineering program offers a dynamic curriculum that blends theoretical
        knowledge with practical applications. Students learn the fundamentals of electricity, electronics, and power
        systems, gaining hands-on experience through laboratory experiments and project-based learning. With a focus
        on innovation and sustainability, our program prepares students for careers in diverse industries such as
        renewable energy, telecommunications, and automation.
      </p>
    </div>

    <div class="img-second">
      <img src="https://cdn.pixabay.com/photo/2020/03/11/15/15/engineer-4922423_1280.jpg" class="img-3">
    </div>
  </section>

  <section class="second_section">
    <div class="img-third">
      <img src="https://cdn.pixabay.com/photo/2013/07/12/13/52/rocket-147466_640.png" class="img-4"
        height="100%">
    </div>

    <div class="third-div">
      <h3 class="third-h3">Aerospace Program:</h3>
      <br>
      <p class="third-p">
        The Aerospace Engineering program at Infinity College is designed for students passionate about exploring the
        boundaries of flight and space exploration. Through a combination of classroom instruction and hands-on
        projects, students learn the principles of aerodynamics, propulsion, and spacecraft design. With access to
        cutting-edge simulation software and research facilities, students have the opportunity to collaborate on
        groundbreaking projects and prepare for careers in aerospace engineering, aviation, and space technology.
      </p>
    </div>
  </section>

</body>

</html>