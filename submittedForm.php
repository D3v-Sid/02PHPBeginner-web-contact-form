<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
    <title>Submitted </title>
</head>
<body>
        <!-- Nav -->
    <nav class="container-fluid">
      <ul>
        <li><a href="./" class="contrast" onclick="event.preventDefault()"><strong>Brand</strong></a></li>
      </ul>
    </nav>

 <main class="container-fluid">

     <h1>Thanks for your submission <?php echo  ucfirst( $_POST["firstname"]) ?>  </h1>

     <article class="grid">
      <div class="container-fluid">
            <h3> Let's Recap </h3>
            <div class="grid">
                <p>
                    <?php
                echo " <b> firstname : </b> ".$_POST["firstname"]."<br>";
                echo "<b> lastname : </b>".$_POST["lastname"]."<br>";
                echo "<b> email : </b>".$_POST["email"]."<br>";
                echo "<b> issue : </b>".$_POST["issue"]."<br>";
                echo "<b> message : </b>".$_POST["message"]."<br>";
                ?>
                </p>
    
            </div>
            <?php

            ?>
            <a href="#" class="contrast" role="button">Edit</a>
            <a href="#" role="button">Send</a>
        </div>
       <div class="hero-image"></div>     
    </article>  


 </main>    
</body>
</html>


<style>
.hero-image {
    height: 100%;
    width: 100%;
    background-color: #374956;
    background-image: url("https://source.unsplash.com/cRJAFh6LqbE/1000x1200");
    background-position: center;
    background-size: cover;
}
</style>
