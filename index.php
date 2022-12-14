<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $message = $_POST['message'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name','$email','$number','$message')") or die('query failed');

   if($insert){
      $message = 'message envoyé!';
   }else{
      $message = 'échec de l\'envoi du message!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Bureau Des Études BDE | Accueil</title>

   <!-- image icon -->
   <link rel="shortcut icon" href="images/bde-logo.png" type="image/x-icon">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center justify-content-between">
         <a href="#home" class="logo">BDE-ESTIAM<span>.</span></a>

         <nav class="nav">
            <a href="#home">accueil</a>
            <a href="#about">à propos</a>
            <a href="#services">services</a>
            <a href="#gallery">galerie</a>
            <!-- <a href="#activities">nos activités</a> -->
            <a href="#calendar">calendrier</a>
            <a href="#contact">contact</a>
         </nav>

         <a href="#contact" class="link-btn">se connecter</a>

         <div id="menu-btn" class="fas fa-bars"></div>

      </div>

   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="container">

      <div class="row min-vh-100 align-items-center">
         <div class="content text-center text-md-left">
            <h3>animer la vie de nos étudiants, notre priorité</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
               Obcaecati nisi adipisci accusantium deserunt aspernatur corporis quia culpa suscipit?
               Officiis vitae incidunt quo error magni est dolor fugiat, deleniti consequatur voluptate.</p>
            <a href="#contact" class="link-btn">En savoir plus >></a>
         </div>
      </div>

   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <div class="container">

      <div class="row align-items-center">

         <div class="col-md-6 image">
            <img src="images/pic1.jpg" class="w-100 mb-5 mb-md-0" alt="">
         </div>

         <div class="col-md-6 content">
            <span>À propos du Bureau Des Études</span>
            <h3>Rendre la vie estudiantine plus animée</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores sequi, enim cupiditate earum repellendus non aspernatur expedita accusantium, neque repellat reiciendis minus alias cumque illo eum eos facilis, incidunt omnis.</p>
            <a href="#contact" class="link-btn">En savoir plus >></a>
         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="process" id="services">

   <h1 class="heading">Les services du BDE-ESTIAM</h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/s1.png" alt="">
         <h3>service 1</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque beatae repellat amet quas quae necessitatibus.</p>
      </div>

      <div class="box">
         <img src="images/s2.png" alt="">
         <h3>service 2</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque beatae repellat amet quas quae necessitatibus.</p>
      </div>

      <div class="box">
         <img src="images/s3.png" alt="">
         <h3>service 3</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque beatae repellat amet quas quae necessitatibus.</p>
      </div>

      <div class="box">
         <img src="images/s4.png" alt="">
         <h3>service 4</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque beatae repellat amet quas quae necessitatibus.</p>
      </div>

      <div class="box">
         <img src="images/s5.png" alt="">
         <h3>service 5</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque beatae repellat amet quas quae necessitatibus.</p>
      </div>

      <div class="box">
         <img src="images/s6.png" alt="">
         <h3>service 6</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque beatae repellat amet quas quae necessitatibus.</p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- reviews section starts  -->

<section class="reviews" id="reviews">

   <h1 class="heading"> notre équipe à votre disposition </h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/pic5.png" alt="">
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Quentin RAILLARD</h3>
         <span>membre</span>
      </div>

      <div class="box">
         <img src="images/pic4.png" alt="">
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Salwa ADJAR</h3>
         <span>membre</span>
      </div>

      <div class="box">
         <img src="images/pic4.png" alt="">
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Daniel AGUILERA DEFILLON</h3>
         <span>membre</span>
      </div>

   </div>

</section>

<!-- reviews section ends -->

<!-- gallery section starts  -->

<section class="process" id="gallery">

   <h1 class="heading"> Notre Galerie </h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/g1.jpeg" alt="">
      </div>

      <div class="box">
         <img src="images/g2.jpg" alt="">
      </div>

      <div class="box">
         <img src="images/g3.jpeg" alt="">
      </div>

      <div class="box">
         <img src="images/g4.jpg" alt="">
      </div>

      <div class="box">
         <img src="images/g5.jpg" alt="">
      </div>

      <div class="box">
         <img src="images/g6.jpg" alt="">
      </div>

      <div class="box">
         <img src="images/g7.jpeg" alt="">
      </div>

      <div class="box">
         <img src="images/g8.jpeg" alt="">
      </div>

      <div class="box">
         <img src="images/g9.jpg" alt="">
      </div>

      <div class="box">
         <img src="images/g10.jpg" alt="">
      </div>

      <div class="box">
         <img src="images/g13.jpg" alt="">
      </div>

      <div class="box">
         <img src="images/g12.jpg" alt="">
      </div>

   </div>

</section>

<!-- gallery section ends -->

<!-- events section starts  -->

<section class="services" id="calendar">

<h1 class="heading">notre calendrier d'évènements</h1>

<div class="box-container container">

   <div class="box">
      <img src="images/calendar-icon.png" alt="">
      <h3>8 Décembre 2022</h3>
      <p>À l'occasion de la Fête des lumières, nous organisons une rencontre inter-classe à l'Exalto de Bellecour... <a href="#">Voir plus</a></p>
   </div>

   <div class="box">
      <img src="images/calendar-icon.png" alt="">
      <h3>23 Décembre 2022</h3>
      <p>À l'occasion de réveillon de la Fête de Nöel, nous organisons une rencontre générale avec tous les étudiants de l'ECEMA à... <a href="#">Voir plus</a></p>
   </div>

   <div class="box">
      <img src="images/calendar-icon.png" alt="">
      <h3>1<sup>er</sup> Janvier 2023</h3>
      <p>À l'occasion du nouvel an, nous organisons Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum vel... <a href="#">Voir plus</a></p>
   </div>

   <div class="box">
      <img src="images/calendar-icon.png" alt="">
      <h3>11 Février 2023</h3>
      <p>À l'occasion de la fête de la jeunesse, nous organisons Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum vel... <a href="#">Voir plus</a></p>
   </div>

   <div class="box">
      <img src="images/calendar-icon.png" alt="">
      <h3>14 Février 2023</h3>
      <p>À l'occasion de la Saint-Valentin, nous organisons Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum vel... <a href="#">Voir plus</a></p>
   </div>

   <div class="box">
      <img src="images/calendar-icon.png" alt="">
      <h3>8 mars 2023</h3>
      <p>À l'occasion de la journée internationale de la femme, nous organisons Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum vel... <a href="#">Voir plus</a></p>
   </div>

   <div class="box">
      <img src="images/calendar-icon.png" alt="">
      <h3>23 mars 2023</h3>
      <p>À l'occasion de la fête de Pâques, nous organisons Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum vel... <a href="#">Voir plus</a></p>
   </div>

</div>

</section>

<!-- calendar section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading">Besoin d'aide ? contactez-nous.</h1>

   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <?php 
         if(isset($message)){
            echo '<p class="message">'.$message.'</p>';
         }
      ?>
      <span>nom(s) :</span>
      <input type="text" name="name" placeholder="entrez votre nom" class="box" required>
      <span>email :</span>
      <input type="email" name="email" placeholder="entrez votre email" class="box" required>
      <span>numéro de téléphone :</span>
      <input type="number" name="number" placeholder="entrez votre numéro de téléphone" class="box" required>
      <span>Votre message :</span>
      <textarea name="message" id="" cols="30" rows="10" placeholder="Saisir votre message..." class="box"></textarea>
      <input type="submit" value="Envoyer" name="submit" class="link-btn">
   </form>  

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container container">
      
      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>nos contacts</h3>
         <p>+33 1 82 83 75 00</p>
         <p>+33 4 28 29 25 75</p>
      </div>
      
      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>nos adresses</h3>
         <p>paris, france - 12345</p>
         <p>lyon, france - 12345</p>
         <p>metz, france - 12345</p>
         <p>saint-denis, france - 12345</p>
      </div>

      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>liens rapides</h3>
         <p><a href="">Accueil</a></p>
         <p>À propos</p>
         <p>Services</p>
         <p>Galeries</p>
         <p>Activités</p>
         <p>Calendrier</p>
         <p>Nous contacter</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>Contactez directement nos campus</h3>
         <p>paris@estiam.com</p>
         <p>lyon@estiam.com</p>
         <p>metz@estiam.com</p>
         <p>bourges@estiam.com</p>
      </div>

   </div>

   <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?>. Made by <span>group 13</span></div>

</section>

<!-- footer section ends -->










<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>