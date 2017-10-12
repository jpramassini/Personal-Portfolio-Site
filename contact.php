<!DOCTYPE html>

<html>

  <head>

    <title>JP Ramassini</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="mystyle.css" />

    <link href="https://fonts.googleapis.com/css?family=Libre+Barcode+39+Text" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700,900i" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>

  <body class="body-no-margin">

    <nav>

      <ul class="navbar">

        <li class="navbarlink">
          <a href="index.html">Home</a>
        </li>
        <li class="navbarlink">
          <a href="aboutme.html">About Me</a>
        </li>
        <li class="navbarlink">
          <a href="projects.html">My Projects</a>
        </li>
        <li class="navbarlink">
          <a href="contact.php">Contact</a>
        </li>

      </ul>
    </nav>

    <div class="bg50">
      <p class="upperleftheader">
        CONTACT ME
      </p>

      <p class="general-text">
        Fill out this form to send me an email. I'll get back to you as soon as I can.
      </p>
    </div>

    <div class=rightside>

      <form action="contactform.php" method="post">

        Name:<br>
        <input type="text" id="name" name="name"><br> E-mail:
        <br>
        <input type="text" id="email" name="email"><br> Message:
        <br>
        <textarea type="text" id="message" name="message"></textarea>
        <br>
        <div class="g-recaptcha" data-sitekey="6LffFzQUAAAAAKK-k1VMrYgd5_3gVXNd9FyHntA8"></div>
        <input type="submit" id="submit" name="submit" value="Submit">
      </form>
    </div>

  </body>


</html>