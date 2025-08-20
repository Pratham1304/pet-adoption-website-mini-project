<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resources</title>
    <style>
        header{
            background-color: #008080;
            color: white;
            text-align: center;
            padding: 20px;
            border-top: 1px solid #004d4d;
        }

        section {
            margin-bottom: 30px;
        }

        .text-content h2 {
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
            color: #333;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            margin: 50px;
        }

        .text-content {
            width: 50%;
            box-sizing: border-box;
            padding: 0 20px;
            margin: auto;
            justify-content: center;
            text-align: justify;
        }

        .video-container {
            width: 50%;
            box-sizing: border-box;
            padding: 0 20px;
            margin-top: 50px;
        }

        video {
            width: 100%;
        }

        .footer{
            width: 80%;
            margin: 50px auto;
            text-align: justify;
            font-weight: 500;
        }
    </style>
</head>

<body>
    <?php require('header.php'); ?>
    <header>
        <h1>How to Take Care of a Puppy</h1>
        <p>Welcome to our comprehensive guide on caring for your new furry friend! Follow these steps to ensure your
            puppy grows up healthy and happy.</p>
    </header>
    <div class="container">
        <section id="intro" class="text-content">
            <h2>1. Introduction</h2>
            <p>Welcoming a new puppy into your home is an exhilarating journey filled with joy and responsibility. As
                you embark on this adventure, it's essential to equip yourself with the knowledge and tools necessary to
                provide the best care for your furry friend. In this comprehensive guide, we'll walk you through the
                various aspects of puppy care, from understanding their basic needs to fostering a strong and loving
                bond. With patience, dedication, and the right guidance, you'll lay the foundation for a lifelong
                companionship that brings immeasurable happiness to both you and your puppy.</p>
        </section>
        <section class="video-container">
            <!-- Embed the video related to the introduction -->
            <video controls>
                <source src="videos/1.mp4" type="video/mp4">
            </video>
        </section>

        <section id="vetVisit" class="video-container">
            <!-- Embed the video related to vet visits -->
            <video controls>
                <source src="videos/2.mp4" type="video/mp4">
            </video>
        </section>
        <section class="text-content">
            <h2>2. Vet Visit</h2>
            <p>The first visit to the veterinarian is a pivotal moment in your puppy's life. Beyond just a routine
                check-up, this initial appointment sets the stage for their overall health and well-being. During this
                visit, your veterinarian will conduct a thorough examination to assess your puppy's physical condition,
                provide essential vaccinations to protect against common diseases, and discuss preventive care measures.
                Additionally, they'll offer valuable advice on nutrition, behavior, and training, empowering you to
                become a confident and responsible pet owner. By prioritizing regular veterinary care, you'll ensure
                that your puppy receives the necessary support to thrive and enjoy a long, happy life by your side.</p>
        </section>

        <section id="deworming" class="text-content">
            <h2>3. Deworming</h2>
            <p>Deworming is a critical component of preventive healthcare for puppies, addressing the common issue of
                intestinal parasites that can threaten their health. Even if your puppy appears healthy, they may still
                harbor internal parasites acquired from their mother or environment. By following a deworming protocol
                recommended by your veterinarian, you'll eliminate these parasites and safeguard your puppy's
                well-being. Regular deworming treatments not only protect your puppy from potential health complications
                but also contribute to their overall growth and development. With proper deworming measures in place,
                you can ensure that your puppy grows into a healthy and happy adult dog, ready to embark on life's
                adventures with vitality and vigor.</p>
        </section>
        <section class="video-container">
            <!-- Embed the video related to deworming -->
            <video controls>
                <source src="videos/3.mp4" type="video/mp4">
            </video>
        </section>

        <section id="vaccination" class="video-container">
            <!-- Embed the video related to vaccinations -->
            <video controls>
                <source src="videos/4.mp4" type="video/mp4">
            </video>
        </section>
        <section class="text-content">
            <h2>4. Vaccination</h2>
            <p>Vaccinations are essential for safeguarding your puppy against a variety of infectious diseases that pose
                significant health risks. During their early stages of life, puppies are particularly vulnerable to
                these diseases, making timely vaccination crucial for their protection. Your veterinarian will devise a
                customized vaccination schedule tailored to your puppy's specific needs, ensuring comprehensive coverage
                against common threats such as parvovirus, distemper, and rabies. By adhering to this schedule and
                keeping up with booster shots as recommended, you'll provide your puppy with the best possible defense
                against potentially life-threatening illnesses. Through vaccination, you'll not only protect your puppy
                but also contribute to the broader community's efforts to maintain public health and safety.</p>
        </section>

        <section id="products" class="text-content">
            <h2>5. Essential Products</h2>
            <p>As you welcome your new puppy into your home, ensuring they have the essential products is paramount to
                their well-being and comfort. From food and water bowls to a cozy bed and stimulating toys, each item
                plays a crucial role in providing a nurturing environment for your furry companion. Food bowls and a
                balanced diet ensure proper nutrition, while a comfortable bed offers a cozy retreat for rest and
                relaxation. Grooming supplies help maintain your puppy's hygiene, while toys provide mental stimulation
                and opportunities for play. By investing in quality products suited to your puppy's needs, you'll lay
                the groundwork for a happy and fulfilling life together, filled with love, joy, and cherished memories.
            </p>
        </section>
        <section class="video-container">
            <!-- Embed the video related to essential products -->
            <video controls>
                <source src="videos/5.mp4" type="video/mp4">
            </video>
        </section>

        <section id="training" class="video-container">
            <!-- Embed the video related to training -->
            <video controls>
                <source src="videos/6.mp4" type="video/mp4">
            </video>
        </section>
        <section class="text-content">
            <h2>6. Training</h2>
            <p>Training is an integral part of your puppy's development, shaping their behavior and fostering a strong
                bond between you and your furry friend. From basic obedience commands like sit and stay to more advanced
                skills such as leash walking and recall, training provides mental stimulation and establishes clear
                communication channels. Positive reinforcement techniques, such as treats and praise, encourage desired
                behaviors while strengthening the bond of trust between you and your puppy. Consistency, patience, and
                understanding are key to successful training, allowing your puppy to learn at their own pace and become
                a well-mannered companion for life's adventures. With dedication and perseverance, you'll unlock your
                puppy's full potential and build a lasting relationship built on mutual respect and love.</p>
        </section>

        <section id="exercise" class="text-content">
            <h2>7. Exercise</h2>
            <p>Regular exercise is vital for your puppy's physical health and mental well-being, promoting strength,
                agility, and overall vitality. Engaging in activities like walks, games, and interactive play sessions
                not only burns off excess energy but also stimulates their mind and strengthens the bond between you and
                your puppy. Outdoor adventures provide opportunities for exploration and socialization, exposing your
                puppy to new sights, sounds, and experiences. Tailoring exercise routines to your puppy's age, breed,
                and energy level ensures that they receive appropriate levels of activity without overexertion. By
                incorporating regular exercise into your daily routine, you'll help your puppy develop healthy habits
                and maintain a balanced lifestyle for years to come.</p>
        </section>
        <section class="video-container">
            <!-- Embed the video related to exercise -->
            <video controls>
                <source src="videos/7.mp4" type="video/mp4">
            </video>
        </section>

        <section id="attention" class="video-container">
            <!-- Embed the video related to giving attention -->
            <video controls>
                <source src="videos/8.mp4" type="video/mp4">
            </video>
        </section>
        <section class="text-content">
            <h2>8. Attention</h2>
            <p>Providing your puppy with love and attention is essential for their emotional well-being and social
                development. Spending quality time together, cuddling, playing, and bonding strengthens your connection
                and builds trust. By being attentive to your puppy's needs and responding with care and affection,
                you'll nurture a deep and lasting bond that enriches both of your lives. Whether it's a gentle belly
                rub, a playful game of fetch, or simply enjoying each other's company, every moment shared strengthens
                the bond between you and your furry companion. Through love, patience, and understanding, you'll create
                a nurturing environment where your puppy feels safe, loved, and cherished, laying the foundation for a
                lifetime of happiness and companionship.</p>
        </section>

        <p class="footer">Remember, every puppy is unique. Pay attention to their individual needs and consult your vet for
            personalized
            advice. If you have any concerns about your puppy's growth or well-being, don't hesitate to seek
            professional help. Congratulations on your new furry family member, and may your journey together be filled
            with joy and companionship!</p>

    </div>



    <?php require('footer.php'); ?>
</body>

</html>