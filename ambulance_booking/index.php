<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emergency Ambulance Hiring Portal</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <!-- Navbar -->
    <header>
    <nav style="background-color: #7c7c7c;" class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSaRb4hOvNYdYBwpB8_GWl-vMHYEFJajhjnw&s" width="30" height="30" class="d-inline-block align-top" alt="">
            Emergency
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin/admin_signup.php">Admin</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0 bg-light" type="submit">Search</button>
            </form>
        </div>
    </nav>
    </header>
            
    <!-- Hero Section -->
    <main>
        <section class="hero text-center">
          <div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <!-- Slide 1 -->
                    <div class="carousel-item active" style="background-image: url('assets/img/slide/slide-4.jpg');">
                        <!-- <div class="container">
                            <h2>Welcome to <span>Emergency Ambulance Hiring Portal</span></h2>
                            <a href="book.php" class="btn-get-started scrollto">Hire Ambulance</a>
                        </div> -->
                    </div>
            
                    <!-- Slide 2 -->
                    <div class="carousel-item" style="background-image: url('assets/img/slide/slide-7.jpg');">
                        <!-- <div class="container">
                            <h2>Welcome to <span>Emergency Ambulance Hiring Portal</span></h2>
                            <a href="#about" class="btn-get-started scrollto">Read More</a>
                        </div> -->
                    </div>
            
                    <!-- Slide 3 -->
                    <div class="carousel-item" style="background-image: url('assets/img/slide/slide-6.jpg');">
                        <!-- <div class="container">
                            <h2>Welcome to <span>Emergency Ambulance Hiring Portal</span></h2>
                            <a href="#about" class="btn-get-started scrollto">Read More</a>
                        </div> -->
                    </div>
                </div>
            
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            
          </div>
            <br><br>
            <h1>Emergency Ambulance Hiring Portal</h1>
            <p>Get immediate medical assistance with our 24/7 ambulance services</p>

            
            <a href="book.php" class="btn btn-primary">Book Now</a>
        </section>

        <!-- Features Section -->
        <section class="features text-center my-5">
            <h2>Our Services</h2>
            <div class="row">
                <div class="col-md-4">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_M8vSmHcxpWFw4T_9ozhnriaHcOOcOpOK0Q&s" alt="Ambulance Icon">
                    <h3>Ambulance Services</h3>
                    <p>Get immediate medical assistance with our 24/7 ambulance services</p>
                </div>
                <div class="col-md-4">
                    <img src="https://cdn-icons-png.flaticon.com/512/4939/4939112.png" alt="Doctor Icon">
                    <h3>Medical Team</h3>
                    <p>Our team of experienced doctors and paramedics are always ready to help</p>
                </div>
                <div class="col-md-4">
                    <img src="https://cdn-icons-png.flaticon.com/512/535/535239.png" alt="Location Icon">
                    <h3>Wide Coverage</h3>
                    <p>We cover a wide range of areas to ensure you get help wherever you are</p>
                </div>
            </div>
        </section>

        


        <!-- Admin Module Links -->
        <section class="admin-module text-center">
            <h2>Admin Panel</h2>
            <br><br>
            
                    <a href="admin/admin_signup.php" class="btn btn-info">Go to admin Panel</a>
                
        </section>

        <!-- About Us Section -->
         <div id="about">
        <section class="about-us text-center my-5">
            <h2>About Us</h2>
            <p>We are dedicated to providing reliable and immediate ambulance services to ensure that you receive the medical assistance you need when it matters most. Our experienced medical team is available 24/7 to respond to emergencies and transport patients safely and efficiently.</p>
            <p>With a fleet of well-equipped ambulances and a commitment to excellence, we aim to be your trusted partner in emergency medical care.</p>
            <a href="about.php" class="btn btn-primary">Learn More</a>
        </section>
        </div>


        <!-- Call to Action Section -->
        <section class="call-to-action text-center my-5">
            <h2>Need Emergency Assistance?</h2>
            <p>Call us now at <a href="tel:+1234567890">+1234567890</a> or book online</p>
            <a href="book.php" id="booknow" class="btn btn-primary">Book Now</a>
        </section>

        <!-- create a small contact us form with css -->
                    <!-- Contact Us Section -->
        <div id ="contact">
        <section class="container my-5">
            <h2 class="text-center mb-4">Contact Us</h2>
            <form>
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="message">Your Message</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Write your message here" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Send Message</button>
            </form>
        </section>
        </div>

        <!-- Call to Action Section
        <section class="call-to-action text-center my-5">
            <h2>Need Emergency Assistance?</h2>
            <p>Call us now at <a href="tel:+1234567890">+1234567890</a> or book online</p>
            <a href="book.php" class="btn btn-primary">Book Now</a>
        </section> -->

    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2023 Emergency Ambulance Hiring Portal. All Rights Reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
