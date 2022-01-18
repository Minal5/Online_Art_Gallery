<?php
$insert =false;
if(isset($_POST['name'])){
    //Set connection variables
    $server ="localhost";
    $username ="root";
    $password ="";
    
    //Create a database connection
    $con =mysqli_connect($server,$username,$password);
    
    //Check for connection success
    if(!$con){
        die("connection to this database failed due to".mysqli_connect_error());
    
    }
    //echo "Success connecting to db";
    
    //Collect post variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $sql="INSERT INTO `art`.`contact` (`name`, `email`, `phone`, `message`) VALUES ('$name', '$email', '$phone', '$message');";
    

   //Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        //flag for successful insertion
        $insert=true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    
    //Close the database connection
    $con->close();
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Art Gallery</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="phone.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
</head>

<body>
    <nav id="navbar">
        <div id="logo">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2sSg_4Z8c-tiSp8H0F7txZlnlnWInGGotWA&usqp=CAU" alt="OnlineArtGallery.com">
        </div>
        <ul>
            <li class="item"><a href="#home">Home</a></li>
            <li class="item"><a href="#services-container">Gallery</a></li>
            <li class="item"><a href="OAG_About_Us.html" target="_blank">About Us</a></li>
            <li class="item"><a href="#contact">Contact Us</a></li>
            <li class="item"><a href="#cart">Cart</a></li>
            <li class="item"><a href="OAG_Login.html">Register</a></li>
            <li class="item"><a href="#login">Log in</a></li>
            
        </ul>
    </nav>

    <section id="home">
        <h1 class="h-primary">Welcome to Online Art Gallery.</h1>
        <p>Online Art Gallery provides a platform for the artists to sell their art work and  </p>
        <p>for the customers to buy art work of their interests. </p>
        
    </section>

    <section id="services-container">
        <h1 class="h-primary center">Gallery</h1>
        <div id="gallery" >
            <div class="box">
                <img src="image/Architecture.jpg" alt="">
                <h2 class="h-secondary center">Architecture</h2>
                <p class="center">Price:500$</p>
                <p class="center">Type:<a href="https://en.wikipedia.org/wiki/Architecture" target="_blank">Architecture</a></p>
                <button class="btn">Add to cart</button>
            </div>
            <div class="box">
                <img src="image/sketch.jpg" alt="">
                <h2 class="h-secondary center">Sketch</h2>
                <p class="center">Price:140$</p>
                <p class="center">Type:<a href="https://www.britannica.com/art/sketch-art" target="_blank">Sketch</a></p>
                <button class="btn">Add to cart</button>
            </div>
            <div class="box">
                <img src="image/oil_pastel.jpg" alt="">
                <h2 class="h-secondary center">Oil Pastel</h2>
                <p class="center">Price:161$</p>
                <p class="center">Type:<a href="https://en.wikipedia.org/wiki/Drawing" target="_blank">Drawing</a></p>
                <button class="btn">Add to cart</button>
            </div>
            <div class="box">
                <img src="image/drawing.jpg" alt="">
                <h2 class="h-secondary center">Drawing</h2>
                <p class="center">Price:110$</p>
                <p class="center">Type:<a href="https://en.wikipedia.org/wiki/Drawing" target="_blank">Drawing</a></p>
                <button class="btn">Add to cart</button>
            </div>
            <div class="box">
                <img src="image/graphic_design.jpg" alt="">
                <h2 class="h-secondary center">Graphic design</h2>
                <p class="center">Price:95$</p>
                <p class="center">Type:<a href="https://en.wikipedia.org/wiki/Graphic_design" target="_blank">Graphic Design</a></p>
                <button class="btn">Add to cart</button>
            </div>
            
            
        </div>
        <div id="gallery1">
            <div class="box">
                <img src="image/illustration.jfif" alt="">
                <h2 class="h-secondary center">Illustration</h2>
                <p class="center">Price:170$</p>
                <p class="center">Type:<a href="https://en.wikipedia.org/wiki/Illustration" target="_blank">Illustration</a></p>
                <button class="btn">Add to cart</button>
            </div>
            <div class="box">
                <img src="image/mandala.jfif" alt="">
                <h2 class="h-secondary center">Mandala art</h2>
                <p class="center">Price:150$</p>
                <p class="center">Type:<a href="https://en.wikipedia.org/wiki/Mandala" target="_blank">Mandala art</a></p>
                <button class="btn">Add to cart</button>
            </div>
            <div class="box">
                <img src="image/doodle.jpg" alt="">
                <h2 class="h-secondary center">Doodle pattern</h2>
                <p class="center">Price:100$</p>
                <p class="center">Type:<a href="https://en.wikipedia.org/wiki/Mandala" target="_blank">Mandala art</a></p>
                <button class="btn">Add to cart</button>
            </div>
            <div class="box">
                <img src="image/Modern_art.jfif" alt="">
                <h2 class="h-secondary center">Modern Art</h2>
                <p class="center">Price:120$</p>
                <p class="center">Type:<a href="https://en.wikipedia.org/wiki/Modern_art" target="_blank">Modern Art</a></p>
                <button class="btn">Add to cart</button>
            </div>
            <div class="box">
                <img src="image/sculpture.jpg" alt="">
                <h2 class="h-secondary center">Sculpture</h2>
                <p class="center">Price:670$</p>
                <p class="center">Type:<a href="https://en.wikipedia.org/wiki/Sculpture" target="_blank">Sculpture</a></p>
                <button class="btn">Add to cart</button>
            </div>
            <br>
        </div>
    </section>
    
    <section id="contact">
        <h1 class="h-primary center">Contact Us</h1>
        <div id="contact-box">
        <form action="index.php" method="post">
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" name="email" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number: </label>
                    <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
                </div>
                <div class="form-group">
                    <label for="message">Message: </label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>

                </div>
                <button class="btn">Request</button> 
            </form>
        </div>
        <!-- <script src="artgallery.js"></script> -->
    </section>

    <footer>
        <div class="center">
            Copyright &copy; www.OnlineArtGallery.com. All rights reserved!
        </div>
    </footer>
</body>

</html>
