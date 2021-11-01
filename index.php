<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="display.css">
    <title>YOLO</title>
  </head>
  <body>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "ticketinfo");
        if($_POST){
          $firstname = $_POST["fname"];
          $lastname =  $_POST["lname"];
          $username = $_POST["user"];
          $email = $_POST["mail"];
          $pw = $_POST["pw"];
          $phone = $_POST["num"];
          $sql = "INSERT INTO register (FirstName,SecondName,Username,Email,PW,Phone) VALUES ('$firstname','$lastname', '$username', '$email', '$pw', '$phone');";
          $result = mysqli_query($conn, $sql);
          if ($result) {
          echo '<script>alert("Registered!!")</script>';
          }
          else {
          echo '<script>alert("Not Registered. Please Try again!!")</script>';
          }
        }

      ?>
    <section class="homediv">
  <div >
   <div>
     <ul class="navlinks vnav">
        <li><img src="./images/yolo.png"></li>
        <li><a class="active" href="index.html" >Home</a></li>
        <li><a href="#about" >About</a></li>
        <li><a href="#concert" >Concerts</a></li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#news">Contact</a></li>
      </ul>
    </div>
  <div class="burger">
    <img src="./icons/menu.png" alt="">
  </div>
      <div class="centerdiv">
        <span>The best</span>
        <h1>MUSIC BAND EVER</h1>
        <p>"Live Love Dance"</p>
      </div>
      <div class="ticketlink">
        <a class="a2"href="#register">Register</a>
        <a class="a1" href="./ticket.php">Buy Tickets</a>
      </div>
    </div>
  </section>
  <div class="aboutsection" id="about">
    <div class="firsthalf">
      <span>About Us</span>
      <p>YOLO, is Asia’s Premiere Electronic Dance Music (EDM) Festival, and is ranked amongst the world’s biggest music
        concerts. Started in 2007 as a 3 day music festival in Goa, YOLO has grown to become an aspirational lifestyle
        brand boasting an eclectic mix of music, entertainment, experiences and celebration that has seeded music
        tourism in India.<br>YOLO has brought together renowned different artists from accross the world entertains
        dance and music lovers.</p>
    </div>
    <div class="sechalf">
      <img src="./images/about.png">
    </div>
  </div>
  <div class="concert" id="concert">
    <div class="firsthalfcon">
      <span>Upcoming Concerts</span>
      <p>This December, the festival is finally returning to its homeland, Goa, after having its last two editions in
        Pune.
      <ul>
        <li>DJ Snake – 27 Dec.</li>
        <li>The Chainsmokers – 28 Dec.</li>
        <li>Flume (DJ Set) – 28 Dec.</li>
        <li>Martin Garrix – 29 Dec.</li>
      </ul>
      </p>
    </div>
    <div class="sechalfcon">
      <img src="./images/up.jpg">
    </div>
  </div>
  
  <div class="gallery" id="gallery">
    <div class="firsthalfgal">
      <div class="img1">
      <img src="./images/gallery1.jpg">
      <img src="./images/gallery2.jpg">
      </div>
      <div class="img2">
      <img src="./images/gallery3.jpg">
      <img src="./images/gallery4.jpg">
      </div>
    </div>
    <div class="sechalfgal">
      <span>Gallery</span>
      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using.
      </p>
    </div>
  </div>

  <div class="contact" id="register">
    <form method="POST" action="index.php">
      <h1>Register </h1>
      <input type="text" class="fn" name="fname" placeholder="First Name" size="35">
      <input type="text"  name="lname" placeholder="Last Name" size="35"><br><br>
      <input type="text"  name="user" placeholder="Username" size="80"><br><br>
      <input type="email" name="mail" placeholder="Email" size="80"><br><br>
      <input type="password" name="pw" placeholder="Password" size="80"><br><br>
      <input type="tel"  name="num" placeholder="Your phone" size="80"><br><br>  
      <button class="send">submit</button>
    </form><hr>
  <div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d33320.439084890444!2d76.91424026040148!3d28.618379394031365!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc73772bbaa9a49e2!2sEco+Adventure+Camp!5e0!3m2!1sen!2sin!4v1513756881934" width="60%" height="200"></iframe>
    
    
  </div>
  <div>
    <ul class="loca">
      <li> <img src="./icons/loc.png">Goa,Maharashtra</li>
      <li> <img src="./icons/call.png">+914567367789</li>
      <li> <img src="./icons/email.png">YOLO123@gmail.com</li>
    </ul>
  </div>
  <div>
    <ul class="social">
      <li><img src="./icons/fb.png"></li>
      <li><img src="./icons/tw.png"></li>
      <li><img src="./icons/lin(2).png"></li>
    </ul>
  </div>
</body>
</html>