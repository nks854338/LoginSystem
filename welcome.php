<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


  <title>Web development project</title>

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

    /* header start */
    header {
      background-color: rgb(0, 0, 0);
      box-shadow: 0 5px 10px rgb(35, 33, 33);
      padding: 0px 3%;
      display: flex;
      align-items: center;
      justify-content: space-between;
      z-index: -1;
      text-decoration: none;
    }

    header .logo {
      font-family: cursive;
      font-weight: bolder;
      font-size: 27px;
      color: white;
      text-decoration: none;
    }

    header .navbar ul {
      list-style: none;
      padding: 0px;
      margin: 0px;
    }

    header .navbar ul li {
      position: relative;
      float: left;
      text-decoration: none;
    }

    header .navbar ul li a {
      font-size: 20px;
      padding: 20px;
      color: white;
      display: block;
      background-color: rgb(0, 0, 0);
      text-decoration: none;
    }

    header .navbar ul li a:hover {
      background-color: #333;
      color: #fff;
    }

    header .navbar ul li ul {
      position: absolute;
      left: 0;
      width: 170px;
      background: black;
      display: none;
    }

    header .navbar ul li ul li {
      width: 100%;
      border-top: 1px solid black;
      text-decoration: none;
    }

    header .navbar ul li ul li ul {
      left: 170px;
      top: 0;
    }

    header .navbar ul li:focus-within>ul,
    header .navbar ul li:hover>ul {
      display: initial;
    }

    #menu-bar {
      display: none;
    }

    header label {
      font-size: 20px;
      color: #333;
      cursor: pointer;
      display: none;
    }

    .button{
      padding: 9px 40px;
      border-radius: 25px;
      background-color: #ffffff;
      font-size: 3vmin;
    }

    .button a{
      color: black;
      text-decoration: none;
      font-weight: 700;
    }






    @media(max-width:1430px) {
      header .logo {
        font-size: 23px;
      }

      header .navbar ul li a {
        font-size: 15px;
      }

      .button {
        padding: 7px 17px;
        font-size: 15px;
      }


    }


    @media(max-width:1150px) {

      header .logo {
        font-size: 20px;
      }

      header .navbar ul li a {
        font-size: 13px;
      }
    }


    @media(max-width:1080px) {

      header .logo {
        font-size: 18px;
      }

      header .navbar ul li a {
        font-size: 15px;
      }

      .button {
        padding: 7px 15px;
        font-size: 15px;
      }


    }



    @media(max-width:1060px) {

      header {
        padding: 0px 5%;
      }

      header label {
        display: initial;
      }

      header .logo {
        font-size: 15px;
      }

      header .navbar {
        position: absolute;
        top: 12%;
        left: 0;
        right: 0;
        background: #fff;
        border-top: 1px solid #333;
        display: none;
      }

      header .navbar ul li {
        width: 100%;
      }

      header .navbar ul li ul {
        position: relative;
        width: 100%;
      }

      header .navbar ul li ul li {
        background: #eee;
      }

      header .navbar ul li ul li ul {
        width: 100%;
        left: 0;
      }

      #menu-bar:checked~.navbar {
        display: initial;
      }

      .button {
        display: none;
      }

      button:hover {
        cursor: pointer;
      }
    }

    /* header end */


    .fir-sec {
      margin: 50px;
      color: #eee;
    }

    #carouselExampleIndicators {
      z-index: -1;
    }

    .h5 {
      margin: 20px;
    }

    .fourth_section {
      margin: 3%;
    }

    .fifth_section {
      margin: 30px;
    }

    .third-div {
      margin: 5%;
    }

    .html,
    .css,
    .js {
      margin: 50px;
      list-style: square;
    }

    .hello {
      display: flex;
      justify-content: space-around;
    }

    img {
      max-height: 100%;
      max-width: 100%;
    }

    .img-1,
    .img-2 {
      max-width: 100%;
      max-height: 100%;
    }

    .a,
    .b,
    .c {
      margin: 1.5%;
    }


    footer {
      padding: 3% 20%;
      background-color: black;
      color: white;
      font-size: 20px;
      text-align: center;
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





    @media(max-width:1060px) {
      .html,
      .css,
      .js {
        font-size: 14px;
      }

      .h5 {
        font-size: 17px;
      }

    }



    @media(max-width:900px) {
      .second_section,
      .third_section {
        margin: 20px;
      }

      .second-h3,
      .third-h3,
      .fifth-h3 {
        font-size: 26px;
      }

      .second-p,
      .third-p,
      .fifth-p {
        font-size: 14px;
      }

      footer {
        font-size: 16px;
      }
    }

    @media(max-width:790px) {

      .second_section,
      .third_section {
        margin: 17px;
      }

      .second-h3,
      .third-h3,
      .fifth-h3 {
        font-size: 22px;
      }

      .second-p,
      .third-p,
      .fifth-p {
        font-size: 12px;
      }

      .h4-1,
      .h4-2,
      .h4-3,
      .h4-4 {
        font-size: 15px;
      }

      footer {
        font-size: 13px;
      }
    }


    @media(max-width:450px) {
      .second_section,
      .third_section {
        margin: 17px;
      }

      .third-h3, .fifth_section{
        margin: 0;
      } 

      .second-h3,
      .third-h3,
      .fifth-h3 {
        font-size: 17px;
      }

      .fifth-h3{
        margin-left:7px ;
      }

      .second-p,
      .third-p,
      .fifth-p {
        font-size: 11px;
      }

      .img-1,
      .img-2 {
        max-width: 380px;
        max-height: 0px;
      }

      .h5 {
        font-size: 8px;
        margin-top: 0px;
      }

      .h4-1,
      .h4-2,
      .h4-3,
      .h4-4 {
        font-size: 12px;
      }

      .html,
    .css,
    .js {
      margin-top: 10px;
      margin-bottom: 10px;
    }

      .html li, .css li, .js li{
        font-size: 9px;
      } 

      footer {
        font-size: 10px;
      }
    }
  </style>


</head>

<body>
<header>
    <a href="#" class="logo"><img src="https://webdevglobal.com/images/logo.png" height="70px">WebDev GLOBAL</a>

    <input type="checkbox" id="menu-bar">
    <label for="menu-bar"><i class="fa-solid fa-bars" style="color: #ffffff;"></i></label>

    <nav class="navbar">
      <ul>

        <li><a href="/web/login_system/welcome.php">Home</a></li>
        <li><a href="/web/login_system/html.php">HTML</a></li>
        <li><a href="/web/login_system/css.php">CSS</a></li>
        <li><a href="/web/login_system/js.php">JavaScript</a></li>
        <li><a href="/web/login_system/database.php">Database +</a>
          <ul>
            <li><a href="https://www.w3schools.com/mysql/mysql_rdbms.asp">Relational DB</a></li>
            <li><a href="https://www.ibm.com/topics/nosql-databases">NO SQL +</a>
              <ul>
                <li><a href="https://www.w3schools.com/mongodb/">MangoDB</a></li>
                <li><a href="https://www.ibm.com/topics/redis">Redis</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Couchbase_Server">Couchbase</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="php-project.html">PHP</a></li>
        </li>
      </ul>
    </nav>


    <div class="button">
        <a href="/web/login_system/logout.php">Logout</a>
    </div>
  </header>
  <main>
    <section class="first_section">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
            aria-label="Slide 4"></button>
        </div>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://cdn.pixabay.com/photo/2017/01/22/12/07/imac-1999636_1280.png" class="d-block w-100"
              alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://cdn.pixabay.com/photo/2016/11/29/08/41/apple-1868496_1280.jpg" class="d-block w-100"
              alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://cdn.pixabay.com/photo/2015/05/26/23/52/technology-785742_1280.jpg"
              class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://cdn.pixabay.com/photo/2015/07/15/08/16/web-845803_1280.jpg"
              class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://cdn.pixabay.com/photo/2021/06/20/14/41/website-6351151_1280.jpg"
              class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <section class="second_section">
      <div>
        <h3 class="second-h3">What is Web development</h3>
        <br>
        <p class="second-p">Web development is the work involved in developing a website for the Internet (World Wide
          Web) or an intranet (a private network). Web development can range from developing a simple single static page
          of plain text to complex web applications, electronic businesses, and social network services.
        </p>
      </div>

      <div class="img-second">
        <img src="https://chennaiwebdesign.in/assets/img/services1/s118.png" class="img-1">
      </div>
    </section>

    <section class="third_section">
      <div class="img-third">
        <img src="https://cdn.pixabay.com/photo/2019/10/09/07/28/development-4536630_1280.png" class="img-2">
      </div>

      <div class="third-div">
        <h3 class="third-h3">Structuring the web</h3>
        <br>
        <p class="third-p"> To build websites, you should know about HTML — the fundamental technology used to define
          the structure of a webpage. HTML is used to specify whether your web content should be recognized as a
          paragraph, list, heading, link, image, multimedia player, form, or one of many other available elements or
          even a new element that you define.</p>
      </div>

    </section>
    <section class="fifth_section">
      <div>
        <h3 class="fifth-h3">Topics covered</h3>
        <br>
        <h5 class="h5">The following is a list of all the topics we cover in the learning page.</h5>

        <ul>
          <h4 class="h4-1">Getting started with the web</h4>
          <p class="fifth-p">Provides a practical introduction to web development for complete beginners.</p>

          <div class="html">
            <h4 class=h4-2><a href="html.html">HTML </a>— Structuring the web</h4>
            <li class="li-1">HTML is the language that we use to structure the different parts of our content and define
              what their meaning or purpose is. This topic teaches HTML in detail.
            </li>
          </div>

          <div class="css">
            <h4 class=h4-3><a href="css.html">CSS</a> — Styling the web</h4>
            <li id="li-2">+CSS is the language that we use to control our web content's style and layout, as well as
              adding behavior like animation. This topic provides comprehensive coverage of CSS.
            </li>
          </div>

          <div class="js">
            <h4 class="h4-4"><a href="javascript.html">JavaScript</a> — Dynamic client-side scripting</h4>
            <li id="li-3">JavaScript is the scripting language used to add dynamic functionality to web pages. This
              topic teaches all the essentials needed to become comfortable with writing and understanding
              JavaScript.
            </li>
          </div>
        </ul>
      </div>
    </section>

    <section class="fourth_section">
      <div class="hello"> <!--Div inside div-->
        <div class="a">
          <p style="color: rgb(7, 37, 138);"><a href="https://www.w3schools.com/html/html_images.asp"
              style="color: rgb(7, 37, 138);"><img
                src="https://play-lh.googleusercontent.com/RslBy1o2NEBYUdRjQtUqLbN-ZM2hpks1mHPMiHMrpAuLqxeBPcFSAjo65nQHbTA53YYn"
                class="img-3"></a></p>
        </div>
        <div class="b">
          <p style="color:aliceblue"><a href="https://www.w3schools.com/css/" style="color:aliceblue;"><img
                src="https://play-lh.googleusercontent.com/RTAZb9E639F4JBcuBRTPEk9_92I-kaKgBMw4LFxTGhdCQeqWukXh74rTngbQpBVGxqo"
                class="img-4"></a></p>
        </div>
        <div class="c">
          <p style="color:  rgb(7, 37, 138);"><a href="https://www.w3schools.com/js/"
              style="color:  rgb(7, 37, 138);"><img
                src="https://play-lh.googleusercontent.com/PAPuQveK8eeVwh7M4vccotAFPOJI0sENMWxnFe9RDt-_63SfVRiLUNXcpJ-8iHuVng"
                class="img-5"></a></p>
        </div>
      </div>
    </section>

  </main>


  <footer>
    Contact us: nks854338@gmail.com
  </footer>








  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>


</body>

</html>