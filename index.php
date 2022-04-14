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
            <h1>How can we help you ? </h1>
            <article class="grid">
                <div class="container-fluid">
                        <form action="submittedForm.php" method="POST">
                            <div class="grid">
                                <!-- FIRSTNAME -->
                                <label for="firstname"> First name
                                    <input type="text" id="firstname" name="firstname" placeholder="First name" required>
                                </label>
                                <!-- LASTNAME -->
                                <label for="lastname">Last name
                                    <input type="text" id="lastname" name="lastname" placeholder="Last name" required>
                                </label>
                            </div>
                                <!-- EMAIL -->
                            <label for="email">Email address
                                <input type="email" id="email" name="email" placeholder="Email address" required>
                            </label>
                                <!-- ISSUE -->
                            <label for="issue">Issue
                                <select id="issue" name="issue" required>
                                    <option value="" selected>Select your issue</option>
                                    <option value="Query">Query</option>
                                    <option value="Feedback">Feedback</option>
                                    <option value="Complaint">Complaint</option>
                                    <option value="Other">Other</option>
                                </select>
                            </label>
                            <!-- FREE TEXT -->
                            <label for="message">Your message
                                <textarea  id="message" name="message" required></textarea>
                            </label>

                            <input type="submit" value="submit">
                        </form>
            
                </div>
                </div>
                <div class="hero-image"></div>     
            </article>  
        </main>    
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
    background-image: url("https://source.unsplash.com/mdADGzyXCVE/1000x1200");
    background-position: center;
    background-size: cover;
}
</style>
