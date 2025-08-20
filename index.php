<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PetCare - Welcome</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body>

  <?php require('header.php'); ?>

  <div class="banner">
    <img src="img/banner.png" alt="banner">
  </div>

  <div class="adopt-card">
    <h2>Your New Best Friend Awaits. Start the Adoption Journey!</h2>
    <button onclick="document.location='adoption.php'">Adopt a Pet</button>
  </div>

  <div id="about-us" class="why-adopt">
    <div>
      <h2>Why Adopt a Pet?</h2>
      <p>Adopting a pet not only brings joy and companionship into your life, but it also saves lives. When you adopt,
        you give a homeless animal a second chance at life and provide them with a loving forever home. Every pet
        deserves a chance to be loved, so consider adoption today!</p>
      <button onclick="location.href='adoption.php'">Adopt Now</button>
    </div>

    <img src="img/adopt.jpg" alt="Why Adopt Image">
  </div>

  <div id="accessories" class="accessories">
    <div>
      <h2>Find the Perfect Accessories for Your Pet</h2>
      <p>Explore our wide range of pet accessories to keep your furry friends happy and healthy. From cozy beds and
        interactive toys to stylish collars and nutritious treats, we have everything you need to pamper your pets.</p>
      <p>Whether you have a playful pup, a curious cat, or a cuddly rabbit, our accessories are designed to meet their
        unique needs and preferences. Shop now and make your pet's life even more enjoyable!</p>
      <button onclick="location.href='accessories.php'">Shop Now</button>
    </div>
    <img src="img/accessorie.jpg" alt="Accessories Image">
  </div>

  <div id="donate" class="donate">
    <div>
      <h2>Support Our Mission</h2>
      <p>Your donation helps us provide care, shelter, and medical treatment to pets in need. By donating, you become a
        vital part of our mission to save and improve the lives of animals.</p>
      <p>Whether it's a one-time contribution or a monthly pledge, every donation helps us make a difference in the
        lives of pets awaiting their forever homes.</p>
      <p>Together, we can give these animals the love and care they deserve. Please consider making a donation today!
      </p>
      <button onclick="location.href='donate.php'">Donate Now</button>
    </div>
    <img src="img/donate2.jpg" alt="donate Image">
  </div>

  <div id="resources" class="resources">
    <div>
      <h2>Discover Pet Care Resources</h2>
      <p>At PetCare, we offer a variety of resources to support pet owners in providing the best care for their furry
        companions. Our resources aim to empower pet owners and strengthen the bond with their pets.</p>
      <p>Explore our collection of resources to find valuable information on pet health, behavior, training, nutrition,
        and more. Whether you're a new pet parent or a seasoned enthusiast, PetCare is your go-to destination for all
        things pet-related!</p>
      <button onclick="location.href='resources.php'">Explore Resources</button>
    </div>
    <img src="https://plus.unsplash.com/premium_photo-1661962953196-3b2c3633c535?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjF8fHBldCUyMGNhcmV8ZW58MHwxfDB8fHww" alt="care Image">
  </div>

  <div id="about" class="about">
    <div>
      <h2>About Us</h2>
      <p>At PetCare, our mission is to advocate for the well-being of animals and promote responsible pet ownership. We
        provide a platform that connects loving homes with pets in need, creating harmonious and fulfilling
        companionships.</p>
      <p>Whether you're looking to adopt a new furry friend or seeking accessories for your beloved pet, PetCare is here
        to help. Join us in fostering a community that cherishes and respects every animal!</p>
      <button onclick="location.href='about.php'">Learn More</button>
    </div>
    <img src="img/about.jpg" alt="about Image">
  </div>
  <br><br><br><br><br>

  <?php require('footer.php'); ?>
</body>

</html>