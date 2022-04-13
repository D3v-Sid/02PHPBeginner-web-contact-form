<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
    <title>Submitted ! </title>
</head>
<body>

 <main class="container">

     <h1>Thanks for your submission <?php echo  ucfirst( $_POST["firstname"]) ?> ! </h1>
     <article>
         <header> <h3> Let's Recap </h3> </header>
         <div class="grid">
             <p>
                <?php
            echo "firstname : ".$_POST["firstname"]."<br>";
            echo "lastname : ".$_POST["lastname"]."<br>";
            ?>
             </p>
  
         </div>
         <?php
            echo "email : ".$_POST["email"]."<br>";
            echo "issue : ".$_POST["issue"]."<br>";
            echo "message : ".$_POST["message"]."<br>";
        ?>
        <br>
        <a href="#" class="contrast" role="button">Edit</a>
        <a href="#" role="button">Send</a>
           
    </article>  


 </main>







    
</body>
</html>


