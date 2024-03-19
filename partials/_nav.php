<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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

    header {
      background-color: rgb(0, 0, 0);
      box-shadow: 0 5px 10px rgb(35, 33, 33);
      padding: 0px 3%;
      height: 13vmin;
      display: flex;
      justify-content: space-between;
      text-align: center;
      z-index: -1;
      text-decoration: none;
      align-items: center;
    }

    header .logo {
      display: flex;
      align-items: center;
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


    .button1 a,
    .button2 a {
      color: #1e1d1d;
      text-decoration: none;
      font-weight: 800;
    }

    .button1 {
      padding: 10px 20px;
      background-color: #eee;
      color: #333;
      font-size: 17px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 30px;
      border-bottom-right-radius: 0px;
      border-top-left-radius: 30px;
      border: #333 2px 2px;
    }

    .button2 {
      padding: 10px 28px;
      background-color: #eee;
      color: #1e1d1d;
      font-size: 17px;
      border-top-right-radius: 30px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 30px;
      border-top-left-radius: 0px;
    }





    @media(max-width:1430px) {
      header .logo {
        font-size: 23px;
      }

      header .navbar ul li a {
        font-size: 15px;
      }

      .button1 {
        padding: 7px 17px;
        font-size: 15px;
      }

      .button2 {
        padding: 7px 24px;
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

      .button1 {
        padding: 7px 15px;
        font-size: 15px;
      }

      .button2 {
        padding: 7px 22px;
        font-size: 14px;
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
  </style>
</head>

<body>

<header>
    <a href="#" class="logo">
      <img src="https://res.cloudinary.com/liaison-inc/image/upload/s--_GsbBC_z--/c_fill,f_webp,h_400,q_auto,w_400/v1/tutors/user-media/prod/approved/provider/5c603f35fff0fd211a21c2b3/profile/OKZXm5XbQ/New%20Logo%20Infinity%20Learning.PNG" height="70px">
      Infinity Academy
    </a>

    <input type="checkbox" id="menu-bar">
    <label for="menu-bar"><i class="fa-solid fa-bars" style="color: #ffffff;"></i></label>

    <nav class="navbar">
      <ul>

        <li><a href="index.php">Home</a></li>
        <li><a href="About.php">About</a></li>
        <li><a href="programs.php">Programs+</a>
          <ul>
            <li><a href="https://www.w3schools.com/mysql/mysql_rdbms.asp">Medical</a></li>
            <li><a href="https://www.ibm.com/topics/nosql-databases">Enginnering +</a>
              <ul>
                <li><a href="https://www.w3schools.com/mongodb/">IT</a></li>
                <li><a href="https://www.ibm.com/topics/redis">Electrical</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Couchbase_Server">Aerospace</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="admission.php">Admissions</a></li>
        <li><a href="campus_life.php">Campus Life</a></li>
        <li><a href="contact.php">Contact</a></li>
        </li>
      </ul>
    </nav>
    <div class="button">
      <button class="button1">
        <a target="_blank" href="register.php">Register</a>
      </button>
      <button class="button2">
        <a target="_blank" href="login.php">Login</a>
      </button>
    </div>

  </header>
</body>

</html>