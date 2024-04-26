<?php
include 'db.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $donation = $_POST['donation'];
    $address = $_POST['address'];
    $message = $_POST['text'];
    
    if(!empty($name) && !empty($phone)&&!empty($donation) && !empty($address)&&!empty($message)){
        //insert data into database
        $sql="INSERT INTO `contact` ( `name`, `phone`, `fund`, `address`, `message`) VALUES ('$name', '$phone', '$donation', '$address', '$address')";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo "<script>alert('inserted successfully')</script>";
           
            
        }
        else{
            die("Error".mysqli_error($conn));
        }
}
        }

else{
    // echo "<script>alert('enter all  fields')</script>";
}






?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Convent Foundation
    </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="img/don/salary.png" type="image/x-icon">
</head>

<body>
    <div class="fixed-top">

        <header>
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <a class="navbar-brand" href="#home">Manukhta Di Sewa Foundation</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost/donation/admin.php">Admin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#donation">Donations</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#mission-id">Missions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        <div class="cont-sec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>Contact No : <a href="tel: +9230059****59">+91 8847699856</a></p>
                    </div>
                    <div class="col-lg-6">
                        <div class="social">
                            <a href="https://www.facebook.com/"><img src="img/icons/facebook.png" alt="facebook"></a>
                            <a href="https://www.instagram.com/"><img src="img/icons/instagram.png" alt="inatagram"></a>
                            <a href="https://www.youtube.com/"><img src="img/icons/youtube.png" alt="youtube"></a>
                           
                            <a href="#"><img src="img/icons/gmail.png" alt="gnail"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <section class="home-sec" id="home">
        <div class="container">
            <div class="home-content">
                <div class="row">
                    <div class="col-lg-6 align-item-center">
                        <div class="home-info">
                            <h1>Alone we can do little, together we can do so much</h1>
                            <h2>We <span>Manukhta di sewa foundation</span> manage wastage for needy peoples</h2>
                            <p>Make a difference today: donate to Manukhta di sewa and help improve lives.</p>
                            <div class="buttons">
                                <a href="#contact" class="btn1">Donate now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-first order-lg-last">
                        <div class="img-sec">
                            <img src="img/manukh.jpeg" alt="home-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="don-sec" id="donation">
        <div class="container">
            <div class="heading">
                <h2>We Manage Wastage or Donation like..</h2>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="don-box">
                        <img src="img/don/clothing.png" alt="img">
                        <h3>Clothes</h3>
                        <p>Give your clothes a second chance: donate them today and help make a difference.</p>
                        <a href="#contact" class="btn1">Donate Now</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="don-box">
                        <img src="img/don/sneakers.png" alt="img">
                        <h3>Footware</h3>
                        <p>Step up and make a difference: donate your footwear today and help those in need.</p>
                        <a href="#contact" class="btn1">Donate Now</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="don-box">
                        <img src="img/don/salary.png" alt="img">
                        <h3>Fund</h3>
                        <p>Your donation can make a world of difference: give today to support our cause and help those in need.</p>
                        <a href="#contact" class="btn1">Donate Now</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="don-box">
                        <img src="img/don/gadgets.png" alt="img">
                        <h3>Gadgets</h3>
                        <p>Unlock the power of giving: donate your gadgets today and help bridge the digital divide for those in need.</p>
                        <a href="#contact" class="btn1">Donate Now</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="don-box">
                        <img src="img/don/book.png" alt="img">
                        <h3>Stationary</h3>
                        <p>Make a mark in someone's life: donate your stationery today and help provide educational resources for those in need.</p>
                        <a href="#contact" class="btn1">Donate Now</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="don-box">
                        <img src="img/don/shopping-bag.png" alt="img">
                        <h3>Food</h3>
                        <p>Feed a hungry mouth today: donate food and help fight hunger in your community.</p>
                        <a href="#contact" class="btn1">Donate Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mission" id="mission-id">
        <div class="container">
            <div class="heading">
                <h2>Our Missions</h2>
                <p>We have delivered <span>Wastage</span> or <span>Donations</span> to needy Peoples</p>
            </div>
            <div class="gallery-sec">
                <div class="container">
                    <div class="image-container">
                        <div class="image"><img src="img/miss/1.jpg" alt="img"></div>
                        <div class="image"><img src="img/miss/2.jpg" alt="img"></div>
                        <div class="image"><img src="img/miss/3.jpg" alt="img"></div>
                        <div class="image"><img src="img/miss/4.jpg" alt="img"></div>
                        <div class="image"><img src="img/miss/5.jpg" alt="img"></div>
                        <div class="image"><img src="img/miss/6.jpg" alt="img"></div>
                    </div>
                </div>
                <div class="pop-image">
                    <span>&times;</span>
                    <img src="img/gallery/1.jpg" alt="gallery-img">
                </div>
                </di v>
            </div>
    </section>

    <section class="about-sec" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 about-img">
                    <img src="img/manukh.jpeg" alt="about">
                </div>
                <div class="col-lg-8 order-first order-lg-last">
                    <div class="heading">
                        <h2>What We Do & Why We Do</h2>
                    </div>
                    <p>At [Welfare Foundation Name], we believe that everyone deserves the chance to live a healthy and fulfilling life. Our mission is to improve the lives of people in need by providing access to basic necessities such as food, shelter, education, and healthcare. We work tirelessly to identify the most pressing needs in our community and develop programs and initiatives to address those needs. </p>
                    <p>Through our fundraising efforts and the generous support of our donors, we are able to make a positive impact on the lives of thousands of people every year. Whether it's providing a warm meal to someone in need or helping a child receive an education, we are dedicated to making a difference in our community and beyond.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="about-sec" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 about-img">
                <img src="img/donate.jpeg" alt="about">
            </div>
            <div class="col-lg-8 order-first order-lg-last">
                <div class="heading">
                    <h2>Donate Us</h2>
                </div>
                <!-- Replace text with an image -->
                <img src="img/qr.jpeg" alt="your image" class="img-fluid">
            </div>
        </div>
    </div>
</section>


        <!-- Contact Section -->
        <section class="contact-section" id="contact">
            <div class="container">
                <div class="heading">
                    <h2>Connect With Us</h2>
                    <p>Fill this form, our team will collect your <span>Donation</span> or <span>Wastage</span> from your place.</p>
                </div>
                <div class="row">
                    <div class="col-lg-12 mt-5">
                        <form class="contact-form" action="index.php" method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-control" placeholder="Your Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input type="text" name="phone" class="form-control" placeholder="Mobile No.">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <select name="donation" id="donation">
                                                        <option value="">Choose Donation or Wastage</option>
                                                        <option value="food">Food</option>
                                                        <option value="clothes">Clothes</option>
                                                        <option value="footware">Footware</option>
                                                        <option value="books">Books</option>
                                                        <option value="fund">Fund</option>
                                                        <option value="gadget">Ele. Gadgets</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="address" placeholder="Address">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" name="text" id="" cols="90" rows="1" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <button type="submit" name="submit" class="btn btn-primary"> Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <button class="btn btn-success" onclick="openWhatsApp()">Chat With Us</button>
                    </div>
                </div>
            </div>
        </section>

    <footer>
        <div class="container">
            <div class="row">

                <div class="col-lg-4">
                    <div class="col-one">
                        <h4>Manukhta Di Sewa foundation</h4>
                        <p>Address : 3, Near IT Park, GT Road, Ludhiana 141010 </p>
                        <p>Contact No : <a href="tel: +91 8847699856">+91 8847699856</a></p>
                        <p>Email : <a href="mailto:foundation@makhutadisewa.com">foundation@makhutadisewa.com</a></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-two">
                        <h4>Important Links</h4>
                        <ul>
                            <li><a href="#home">Home</a></li>
                            <li><a href="http://localhost/donation/admin.php">Admin</a></li>
                            <li><a href="#donation">Donations</a></li>
                            <li><a href="#mission-id">Missions</a></li>
                            <li><a href="#about">About us</a></li>
                            <li><a href="#contact">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-one">
                        <h4>Social Media</h4>
                        <div class="social">
                            <a href="#"><img src="img/icons/facebook.png" alt="facebook"></a>
                            <a href="https://www.instagram.com/" link="https://instagram.com"><img src="img/icons/instagram.png" alt="inatagram"></a>
                            <a href="#"><img src="img/icons/youtube.png" alt="youtube"></a>
                           
                            <a href="#"><img src="img/icons/gmail.png" alt="gnail"></a>
                        </div>
                        <p>Copyright &copy; 2023 | All Right Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<script>
    function openWhatsApp() {
    // Specify the phone number including country code
    var phoneNumber = "918847699856";

    // Create the WhatsApp URL with the phone number
    var whatsappURL = "https://wa.me/" + phoneNumber;

    // Open the WhatsApp chat window in a new tab
    window.open(whatsappURL, "_blank");
}
</script>
    <script src="js/script.js"></script>
    
</body>

</html>