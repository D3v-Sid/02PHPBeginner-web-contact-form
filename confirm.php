<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
    <title>Confirm </title>
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
                <div>
                    <?php
                        $firstname = htmlentities($_POST["firstname"]);
                        $lastname = htmlentities($_POST["lastname"]);
                        $email = htmlentities( filter_var($_POST["email"]), FILTER_SANITIZE_EMAIL);
                        $issue = htmlentities($_POST["issue"]);
                        $message = $_POST["message"];
                        
                echo " <b> firstname : </b> ".$firstname."<br>";
                echo "<b> lastname : </b>".$lastname."<br>";
                echo "<b> email : </b>".$email."<br>";
                echo "<b> issue : </b>".$issue."<br>";
                echo "<b> message : </b>  <div>".$message."</div>";
                ?>
                </div>
    
            </div>
            <?php

            ?>
            <footer>
              <a 
              href="#"
              onclick= "history.back(-1)";  
              class="contrast" 
              role="button">Edit</a>
              <a 
              href="#" 
              onclick="handleModal()"
              role="button">Send</a>
            </footer>
        </div>
       <div class="hero-image"></div>     
    </article>  
 </main>   

         <!-- MODAL  -->
 <dialog open id="modal" class="hidden">
  <article>
    <h3>Thanks for your submission</h3>
    <p>
      We appreciate you contacting us. 
      One of our colleagues will get back in touch with you soon!

    </p>
    <footer>
      <a href="/index.php"> 
        <button onclick=handleModal() class="contrast"> Have a great day! </button>
      </a>
    </footer>
  </article>
</dialog>
 
 
    <script>
      const modal= document.getElementById("modal")

      function handleModal(){
      console.log(modal.classList);
      modal.classList.toggle("hidden");
      }
    </script>

</body>
</html>


<style>

article {
  padding: 1rem;
  overflow: hidden;
}
.hero-image {
    height: 100%;
    width: 100%;
    background-color: #374956;
    background-image: url("https://source.unsplash.com/cRJAFh6LqbE/1000x1200");
    background-position: center;
    background-size: cover;
}
.hidden{
  display: none;
}


</style>

