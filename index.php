<?php
    //php variables ty BRO CODE
    $header ="ZORO NAVIGATIONS";
    $name = "Roronoa Zoro";
    $nickname = "The Explorer";
    $slogan ="The World’s Finest Navigator — Wherever You Go, Perfectly Guided.";

    $aboutMe = "He has been travelling his whole life and have become the greatest Navigator the world has ever known.";
    $photo = "zorotheNAV.jpg";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ZORO NAVIGATIONS - LANDING PAGE</title>
</head>

<body>

<header>
    <div class="title"> <?php echo $header; ?></div>
    <nav>
        <a href="#">HOME</a>
        <a href="#">EXPEDITIONS</a>
        <a href="#">JOIN THE CREW!</a>
    </nav>
</header>

<section class="hero">
    <div class="about">
        <h1> <?php echo $slogan; ?> </h1>
        <p> <?php echo $name . " also known as ". $nickname . ". " . $aboutMe; ?> </p>
        <a href="#" class="btn">JOIN THE CREW NOW!</a>
    </div>    
    <img src= "<?php echo $photo; ?>" alt="Photo">
</section>


<footer>
    <p>&copy; <?php echo date("Y"); ?> <?php echo $header; ?></p>
</footer>

</body>


</html>