<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
  header("location: index.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Accessories</title>
    <link rel="stylesheet" href="css/accessories.css">
</head>

<body>
    <?php require('header.php'); ?>

    <div class="container">
        <!-- Navigation Bar -->
        <nav class="vertical-navbar">
            <ul>
                <li class="dropdown"><a href="#dogfood" class="dropbtn">Dog Food</a></li>
                <li class="dropdown"><a href="#catfood" class="dropbtn">Cat Food</a></li>
                <li class="dropdown"><a href="#Accessories" class="dropbtn">Accessories</a>
                    <div class="dropdown-content">
                        <a href="#b&b">Bows & Bandanas</a>
                        <a href="#b&m">Beds & Mats</a>
                        <a href="#b&f">Bowls & Feeders</a>
                        <a href="#Apparels">Apparels</a>
                        <a href="#Toys">Toys</a>
                        <a href="#LCH">Leashes, Collars & Harness</a>
                    </div>
                </li>
                <li class="dropdown"><a href="#Healthcare" class="dropbtn">Healthcare</a>
                    <div class="dropdown-content">
                        <a href="#Gs">Grooming Supplies</a>
                        <a href="#F&T">Fleas & Ticks</a>
                        <a href="#T&C">Training & Cleaning</a>
                    </div>
                </li>
            </ul>
        </nav>

        <div class="accessories-content">
            <h1 id="dogfood">Dog Food</h1>
            <p>Discover a wide range of nutritious options for your furry friend.</p>

            <div class="acc-list">
                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/products/Banberry_288x288.jpg?v=1628059317"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 150.00</h2>
                        <p>Waggy Zone Doggy Ice-Cream Banberry</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/products/Mango_288x288.jpg?v=1628055967"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 99.00</h2>
                        <p>Waggy Zone Doggy Ice-Cream Magnifera (mango)</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/files/61i2JaWYtTL._SX522_522x653.jpg?v=1693807515"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 520.00</h2>
                        <p>Pedigree Pro Senior, Dry Dog Food</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/files/biscrok_288x288.png?v=1690888093"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 15.00</h2>
                        <p>Pedigree Biscrok Lamb Biscuit</p><br>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/files/41IlYhdNpML_288x288.jpg?v=1695111183"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 70.00</h2>
                        <p>Wanpy Soft Salmon Sticks</p><br>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/products/01_1800x1800.jpg?v=1643289571"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 110.00</h2>
                        <p>ThePetNest X Fresh For Paws- Vegetable Stew</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/files/61MUa6YBguL._SL1280_1800x1800.jpg?v=1690804739"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 135.00</h2>
                        <p>JerHigh Meat As Meal Chicken Recipe Dog Treat</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/files/419KxE_SjiL._SY300_SX300_300x300.jpg?v=1693899715"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 590.00</h2>
                        <p>Canine Creek Adult Dry Dog Food</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/products/peanutbuttersmall_1800x1800.jpg?v=1645607674"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 225.00</h2>
                        <p>ThePetNest X Fresh For Paws- Peanut Butter</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/files/41hgSzD2bqL._SX522_522x522.jpg?v=1693900502"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 300.00</h2>
                        <p>Purpet Biscuits</p><br>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/files/71w1SewiM2L._SY879_PIbundle-3_TopRight_0_0_SX533SY879SH20_533x879.jpg?v=1693208825"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 199.00</h2>
                        <p>First Bark Chic Wrap Pineapple & Chicken Wrap</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/files/41GgR5VmlfL._SX300_SY300_QL70_FMwebp_288x288.webp?v=1691743704"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 335.00</h2>
                        <p>Dogaholic Milky Chews Knotted Bone Dog Treat</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

            </div>

            <h1 id="catfood">Cat Food</h1>
            <p>Spoil your feline companion with our premium selection of food.</p>

            <div class="acc-list">
                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/files/ShebaRichPremiumChickenWithTunaInGravyAdultWetCatFood-70gPacks_1800x1800.webp?v=1693906878"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 25.00</h2>
                        <p>Sheba Rich Premium Chicken With Tuna In Gravy</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/files/51DBI0OqOqL._SX522_522x522.jpg?v=1693908611"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 100.00</h2>
                        <p>Sheba Premium Wet Cat Food Food, Tuna Fillets in Jelly</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/files/61tJAIhYFYL._SX522__1_522x522.jpg?v=1693228927"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 495.00</h2>
                        <p>Whiskas Adult Ocean Fish Flavour</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/files/61u4au5zU6L._SL1000_1800x1800.jpg?v=1690895157"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 120.00</h2>
                        <p>Temptations Creamy Purrrr-ee Cat Treats</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/files/61_9lBCS9zL._SX679_679x679.jpg?v=1690896809"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 150.00</h2>
                        <p>Temptations Cat Treat, Savoury Salmon Flavour</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/products/1_13_1800x1800.jpg?v=1681464724"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 149.00</h2>
                        <p>Catfest Meat Sticks Lamb For Cats</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/files/Screenshot2023-08-177.51.19PM_499x497.png?v=1692282196"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 125.00</h2>
                        <p>Kittos Purr-Fect Salmon Rings Cat Treats</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/files/gnawlers-creamy-treats-pack-of-20-tubes_224x288.jpg?v=1692948994"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 425.00</h2>
                        <p>Gnawlers Creamy Treats Pack Of 20 Tubes</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/files/Royal-Canin-Indoor-27-_-Cat-Dry-Food_1800x1800.webp?v=1694682447"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 1,710.00</h2>
                        <p>Royal Canin Indoor 27</p><br>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/files/126_636x910.webp?v=1693906538"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 25.00</h2>
                        <p>Purepet Real Chicken And Liver In Gravy</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/files/Screenshot2023-08-283.47.26PM_303x366.png?v=1693218110"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 50.00</h2>
                        <p>Whiskas Tasty Mix Seafood Cocktail & Wakame Seaweed</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/files/51jCp_baYcL._SX522_522x522.jpg?v=1693811271"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 2,070.00</h2>
                        <p>Royal Canin Persian Adult Cat</p><br>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>
            </div>

            <h1 id="Accessories">Accessories</h1>
            <p>Explore a variety of accessories for your beloved pets.</p><br>
            <h2 id="b&b">Bows & Bandanas</h2>
            <div class="acc-list">
                <div class="product-card">
                    <img src="https://www.petsy.online/cdn/shop/products/Sunnysideup_41_652x652.png?v=1616151198"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 175.00</h2>
                        <p>Petsy Bow Dogs - Floral Delight</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://www.petsy.online/cdn/shop/products/6_493d2078-d7f0-4de5-b630-bce2e4c9eeb1_652x652.jpg?v=1643262664"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 125.00</h2>
                        <p>Petsy Bow For Cats & Dogs - Orange Geometric</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://www.petsy.online/cdn/shop/products/HarryPotterBandana-DoggyDobbyBandanaDogBandana_2_652x652.jpg?v=1637470908"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 399.00</h2>
                        <p>Harry Potter Dog Bandana - Doggy Dobby</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://www.petsy.online/cdn/shop/products/HarryPotterBandana-WoofyWizardDogBandana_652x652.jpg?v=1637470678"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 399.00</h2>
                        <p>Harry Potter Dog Bandana - Woofy Wizard</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://www.petsy.online/cdn/shop/products/1_b8dc95b3-a4b8-4863-a831-e349ab597c4d_652x652.jpg?v=1637216153"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 399.00</h2>
                        <p>Mutt Of Course Dog Bandana - When's the Next Meal</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://www.petsy.online/cdn/shop/products/8_9c98b990-4669-4344-8569-dbf7de20f2d7_652x652.jpg?v=1637216626"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 399.00</h2>
                        <p>Mutt Of Course Dog Bandana - I'm The Best Wingman</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://www.petsy.online/cdn/shop/products/Shipsinassortedstylesdependingonstockavailability_21_652x652.jpg?v=1669596255"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 299.00</h2>
                        <p>Mutt Of Course Bow Tie for Dogs - Green Plaid (Limited Christmas Edition)</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://www.petsy.online/cdn/shop/products/26_bc4b8da2-3105-43d7-a091-dd6abf8bb230_652x652.jpg?v=1646905471"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 299.00</h2>
                        <p>Mutt Of Course Dogs Bowtie - Gin and Tonic</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>
            </div>
            <h2 id="b&m">Pet Furniture</h2>
            <div class="acc-list">
                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/products/CoraDogSofa-10_1800x1800.jpg?v=1605785638"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 20,999.00</h2>
                        <p>ThePetNest X Dogily Racoa Dog Sofa</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/products/Tiste_1800x1800.jpg?v=1605788317"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 18,999.00</h2>
                        <p>ThePetNest X Dogily Titse Dog Sofa</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/products/AngelineDogSofa_1800x1800.jpg?v=1605787459"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 21,999.00</h2>
                        <p>ThePetNest X Dogily Angel Dog Sofa Large</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/products/Samson2_1800x1800.jpg?v=1607688942"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 17,999.00</h2>
                        <p>ThePetNest X Dogily Samson Pet Sofa</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/products/Brazil_1800x1800.jpg?v=1605789215"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 18,999.00</h2>
                        <p>ThePetNest X Dogily Open Ended Pet Bed</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/products/Danzy1_1_1800x1800.jpg?v=1605517223"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 12,999.00</h2>
                        <p>ThePetNest X Dogily Danzy Pet Sofa</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/products/Boxy_6a275fd5-9157-4c2d-b8fc-b46105c59a02_1800x1800.jpg?v=1605788739"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 20,999.00</h2>
                        <p>ThePetNest x Dogily Boxy Pet Sofa With Storage Drawer</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/products/Baran_Dog_Sofa_1800x1800.jpg?v=1605789143"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 16,999.00</h2>
                        <p>ThePetNest X Dogily Baran Dog Sofa</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>
            </div>
            <h2 id="b&f">Bowls & Feeders</h2>
            <div class="acc-list">
                <div class="product-card">
                    <img src="https://supertails.com/cdn/shop/files/Frame23_66cfd461-c672-4506-b335-59a67fffb6a7_1800x1800.png?v=1706100412"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 1,699.00</h2>
                        <p>Outward Hound Fun/Slow Feeder for Dogs (Teal)</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://supertails.com/cdn/shop/files/image32_1800x1800.png?v=1706099755"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 1,244.00</h2>
                        <p>M Pets Poppy Food Measuring Scoop</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://www.petsy.online/cdn/shop/products/ProductImages_20.png?v=1620117872"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 1,499.00</h2>
                        <p>M-Pets Nile Water Dispenser For Dogs - 3000ml</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://www.petsy.online/cdn/shop/products/5Z1A2747_2048x2048_7f7577d8-8c03-438d-a8b0-1832a19484f7_652x652.jpg?v=1664874305"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 200.00</h2>
                        <p>Basil Dog Bowls - Melamine Solid Colours</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://www.petsy.online/cdn/shop/products/1_1bfd50cc-dfec-4503-824b-35cd77c626d5_652x652.jpg?v=1638437390"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 1,743.00</h2>
                        <p>Nina Ottosson by Outward Hound Smart Interactive Puzzle for Puppies - Tornado</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://www.petsy.online/cdn/shop/products/1_9fa84a3e-f5b8-4cda-a63a-ac1c37c41710_652x652.jpg?v=1638436887"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 1,084.00</h2>
                        <p>Nina Ottosson by Outward Hound Smart Interactive Puzzle for Puppies - Beginner</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://www.petsy.online/cdn/shop/products/1_b77c0a04-c023-40f0-b9b9-e34a1d591540_652x652.png?v=1619355577"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 2,316.00</h2>
                        <p>Nina Ottosson by Outward Hound Twister Dog Puzzle - Level 3 (Advanced)</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://www.petsy.online/cdn/shop/products/GreenDoubleBowl_295x295.jpg?v=1600328637"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 250.00</h2>
                        <p>M-Pets Plastic Double Bowl - Green</p><br>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>
            </div>
            <h2 id="Apparels">Apparels</h2>
            <div class="acc-list">
                <div class="product-card">
                    <img src="https://headsupfortails.com/cdn/shop/products/HUFTPoloT-ShirtForDog-Blue.jpg?v=1660816163"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 699.00</h2>
                        <p>HUFT Polo T-Shirt For Dog - Blue</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://headsupfortails.com/cdn/shop/files/DSC_2845-Edit_fe622157-ab32-40ec-96b2-4ca1aabd43f0.jpg?v=1698667172"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 3,599.00</h2>
                        <p>HUFT Personalised Dog Lehenga - Yellow & Red</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://headsupfortails.com/cdn/shop/products/HUFTTreatsAndChillT-ShirtForDog-DeepCoral.jpg?v=1661337074"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 699.00 </h2>
                        <p>HUFT Treats And Chill T-Shirt For Dog - Deep Coral</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://headsupfortails.com/cdn/shop/products/HUFTX_MarvelCaptainAmericaT-ShirtForDogs.jpg?v=1661337188"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 629.00</h2>
                        <p>HUFT X©Marvel Captain America T-Shirt For Dogs</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://headsupfortails.com/cdn/shop/products/DSC_5433-Edit.jpg?v=1671297757"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 974.00</h2>
                        <p>HUFT Best Dog Ever Pet Sweatshirt - Yellow</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://headsupfortails.com/cdn/shop/products/4_1_293f0c68-389f-4def-9571-cd47a57f321c.jpg?v=1578381389"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 639.00</h2>
                        <p>HUFT Polo Dog T-Shirt - Red</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://headsupfortails.com/cdn/shop/files/DSC_1309-Edit_5f569ade-c71a-445f-80a3-ed3e476c982f.jpg?v=1697176684"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 1,214.00</h2>
                        <p>HUFT Colour Block Hoodie Sweatshirt For Pets- Black</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://headsupfortails.com/cdn/shop/products/HUFTFloralDogDress.jpg?v=1638519226"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 999.00</h2>
                        <p>HUFT Floral Dog Dress</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://headsupfortails.com/cdn/shop/files/DSC_0671-Edit_4089592e-e890-4d76-9aa8-32f423e33688.jpg?v=1697176153"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 1,399.00</h2>
                        <p>HUFT Radiant Rudolph Sweater For Dogs - Blue</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://headsupfortails.com/cdn/shop/products/DSC_0133-Edit_1.jpg?v=1668402797"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 2,159.00</h2>
                        <p>HUFT Tweedle Dee Dog Jacket - Multicolour</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://headsupfortails.com/cdn/shop/files/DSC_7899-Edit.jpg?v=1700206129"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 1,799.00</h2>
                        <p>Dash Dog Puffer Dog Jacket - Aqua & Coral</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://headsupfortails.com/cdn/shop/products/DSC_9073-Edit.jpg?v=1695891826"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 974.00</h2>
                        <p>HUFT Less Talkie More Walkie Pet Sweatshirt - Navy</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>
            </div>
            <h2 id="Toys">Toys</h2>
            <div class="acc-list">
                <div class="product-card">
                    <img src="https://headsupfortails.com/cdn/shop/files/DSC_6529.jpg?v=1706769814"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 799.00</h2>
                        <p>HUFT Swirly Strong Infinity Toy for Dog</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://headsupfortails.com/cdn/shop/products/KONGExtremeChewInteractiveDogToy.jpg?v=1663044019"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 769.00</h2>
                        <p>KONG Extreme Chew Interactive Dog Toy</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://headsupfortails.com/cdn/shop/files/4047974359686_1.jpg?v=1704884087"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 825.00</h2>
                        <p>Trixie Bird With Animal Sound & Elastic Neck Plush Dog Toy - Green - 30 cm</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://headsupfortails.com/cdn/shop/products/KONGCozieTupperSheepPlushDogToy-Medium_25e94857-bcb1-4cc8-9aa5-4ed996288f56.jpg?v=1662979356"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 1,149.00</h2>
                        <p>KONG Cozie Tupper Sheep Plush Dog Toy - Medium</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://headsupfortails.com/cdn/shop/files/DSC_6533.jpg?v=1706768803"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 649.00</h2>
                        <p>HUFT Swirly Strong Ball Toy for Dog</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://headsupfortails.com/cdn/shop/products/TrixieDumbbellVinylDogSqueakerToy-AssortedColours.jpg?v=1662983703"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 324.00</h2>
                        <p>Trixie Dumbbell Vinyl Dog Squeaker Toy - Assorted Colours</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://headsupfortails.com/cdn/shop/files/DSC_6525.jpg?v=1706773481"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 549.00</h2>
                        <p>HUFT Basics Multivibes Squeaky Toy For Dog</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://headsupfortails.com/cdn/shop/products/KONGClassicGoodieBoneDogChewToy.jpg?v=1665814676"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 1,449.00</h2>
                        <p>KONG Classic Goodie Bone Dog Chew Toy</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>
            </div>
            <h2 id="LCH">Leashes, Collars & Harness</h2>
            <div class="acc-list">
                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/files/blackotherplatforms1_1800x1800.png?v=1691668490"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 1,099.00</h2>
                        <p>Zoomiez Tuff Leash Rope Dog Leash - Black</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/files/71gYQYiVH3L._SX522_522x522.jpg?v=1692281938"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 360.00</h2>
                        <p>SmartyPet Dog 25 mm Nylon Harness & Leash Set Dog</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/files/51zCuczvmXL._SX679_679x679.jpg?v=1689244896"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 599.00</h2>
                        <p>Zoomiez Swirl Printed Dog Collar</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/files/51O97CVFzAL._SX679_679x679.jpg?v=1689162611"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 949.00</h2>
                        <p>Zoomiez Printed H-Harness For Dogs - Swirl</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/products/SX1_1800x1800.jpg?v=1680081599"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 3,250.00</h2>
                        <p>TRUELOVE Floral No Pull Pet Harness - Saxony Blue</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/products/617Z-Rd0V5L._SX679_679x679.jpg?v=1688624329"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 1,599.00</h2>
                        <p>Zoomiez Hands-Free Dog Leash</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/products/G1_1_1800x1800.jpg?v=1680076874"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 2,000.00</h2>
                        <p>TRUELOVE HARNESS WITH REFLECTIVE FABRIC - Gray</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/files/Untitleddesign_38_288x288.webp?v=1692002418"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 1,645.00</h2>
                        <p>Trixie - Comfort Soft Touring Harness Black</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>
            </div>

            <h1 id="Healthcare">Healthcare</h1>
            <p>Ensure the well-being of your pets with our healthcare products.</p><br>
            <h2 id="Gs">Grooming Supplies</h2>
            <div class="acc-list">
                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/files/51XIj8cJG-L._SX679_288x288.jpg?v=1695130157"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 399.00</h2>
                        <p>GO PET Professional Dog Nail Cutter (S/L)</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/files/71RWckdybgL._SX450_450x439.jpg?v=1695129841"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 1,299.00</h2>
                        <p>Go Pet - Deshedding Comb (L/XL)</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://headsupfortails.com/cdn/shop/files/Tick_FleaRelife_1_-1.jpg?v=1708074903&width=1445"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 399.00</h2>
                        <p>HUFT Natural Tick & Flea Repellent Shampoo for Dogs</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://headsupfortails.com/cdn/shop/products/hufttickpowder.jpg?v=1648037929"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 199.00</h2>
                        <p>HUFT Natural Anti Tick and Flea Powder for Dogs & Cats</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://headsupfortails.com/cdn/shop/files/BarkingBloomBox.jpg?v=1701846384"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 599.00</h2>
                        <p>HUFT Barking Bloom Dog Perfume - 100 ml</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://headsupfortails.com/cdn/shop/files/HUFTNarrowToothCombForPets.jpg?v=1685450943"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 449.00</h2>
                        <p>HUFT Narrow Tooth Comb For Pets</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://headsupfortails.com/cdn/shop/files/HUFTPetGroomingFingerGlove-Orange_cc431215-20d5-45ba-b6b2-fad2208ae9de.jpg?v=1704859924"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 499.00</h2>
                        <p>HUFT Pet Grooming Finger Glove - Orange</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://headsupfortails.com/cdn/shop/products/IMG_8605.jpg?v=1656506762"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 1,299.00</h2>
                        <p>HUFT Microfibre Towel For Pets - Blue</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>
            </div>
            <h2 id="F&T">Fleas & Ticks</h2>
            <div class="acc-list">
                <div class="product-card">
                    <img src="https://headsupfortails.com/cdn/shop/products/TropiCleanNaturalFlea_TickDogShampoo_MaximumStrength.jpg?v=1677827609"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 1,187.00</h2>
                        <p>TropiClean Natural Flea & Tick Dog Shampoo (Maximum Strength)</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://headsupfortails.com/cdn/shop/products/BayerKiltixTickCollarforSmall_MediumDogs.jpg?v=1637322356"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 800.00</h2>
                        <p>Bayer Kiltix Tick Collar for Small & Medium Dogs</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/files/41Xo-X4kyJL._SX466_466x422.jpg?v=1695129477"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 2,100.00</h2>
                        <p>Nexgard Afoxolaner chewable 1 Tablet (68 mg)</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/files/51Dp01GHOYL._SX466_e386588f-fef3-4215-8687-40fbe93797a4_466x432.jpg?v=1695129357"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 2,400.00</h2>
                        <p>Nexgard Afoxolaner chewable 1 Tablet (136 mg)</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/files/61dv6biNpWL._SY679_507x679.jpg?v=1695064841"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 150.00</h2>
                        <p>Skyworm Puppy Dewormer Suspension</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://shop.thepetnest.com/cdn/shop/files/SAVAHEALTHCAREFIPROFORTFORDOGSWITH10TO20KGBODYWEIGHT-400x400_288x288.jpg?v=1692277867"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 350.00</h2>
                        <p>Savavet Fiprofort Plus Spot On For Dogs Over 10 to 20 Kgs</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://headsupfortails.com/cdn/shop/products/DSC01s748-Edit.jpg?v=1650357761"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 942.00</h2>
                        <p>HUFT Anti-Tick and Flea Mini Kit For Dogs</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://headsupfortails.com/cdn/shop/products/HimalayaErinaEPTick_FleaDogPowder-150g.jpg?v=1637924402"
                        alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 206.00</h2>
                        <p>Himalaya Erina EP Tick & Flea Dog Powder - 150 g</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>
            </div>
            <h2 id="T&C">Training & Cleaning</h2>
            <div class="acc-list">
                <div class="product-card">
                    <img src="https://headsupfortails.com/cdn/shop/products/TrixieDogBarrierWood-65-108x50cm_607e161d-4f77-4e0b-bcca-ed0395467cc7.jpg?v=1646033434" alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 5,355.00</h2>
                        <p>Trixie Dog Barrier Wood - 65-108 x 50 cm</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://headsupfortails.com/cdn/shop/products/TrixieNappyPuppyPad-40x60cm-Packof50.jpg?v=1638270345" alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 1,665.00</h2>
                        <p>Trixie Nappy Puppy Pad - 40 x 60cm - Pack of 50</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://headsupfortails.com/cdn/shop/products/TrixieDogAgilityObstacles-_PylonandPoles.jpg?v=1594836249" alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 2,785.00</h2>
                        <p>Trixie Dog Agility Obstacles - Pylon and Poles</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://headsupfortails.com/cdn/shop/products/BramtonOut_HousetrainingAidforPuppies-500ml.jpg?v=1638600426" alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 795.00</h2>
                        <p>Bramton Out! Housetraining Aid for Puppies - 500 ml</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://headsupfortails.com/cdn/shop/products/M-PetsWasteScoopKit-Black_Blue-10wastebagswithHandles.png?v=1638330491" alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 799.00</h2>
                        <p>M-Pets Waste Scoop Kit - Black & Blue - 10 waste bags with Handles</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://headsupfortails.com/cdn/shop/products/TrixiePoopBagswithLemonScent_Yellow.jpg?v=1638262855" alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 165.00</h2>
                        <p>Trixie Poop Bags with Lemon Scent, Yellow</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://headsupfortails.com/cdn/shop/products/TrixieDogPoopBagswithRoseScent-Pink.png?v=1638330541" alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 175.00</h2>
                        <p>Trixie Dog Poop Bags with Rose Scent - Pink</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <img src="https://headsupfortails.com/cdn/shop/products/Skout_sHonorUrineandOdourDestroyer-1035ml.jpg?v=1638271609" alt="Product Image">
                    <div class="product-info">
                        <h2>₹ 1,599.00</h2>
                        <p>Skout's Honor Urine and Odour Destroyer - 1035 ml</p>
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require('footer.php'); ?>
</body>

</html>