<?php include 'common/header.php'?>
<?php include 'common/connection.php'?>




<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect data from the form
    $uname = $_POST["uname"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Insert the data into the database
    $sql = "INSERT INTO contact_form (uname, email, subject, message) 
            VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $uname, $email, $subject, $message);

    if ($stmt->execute()) {
        echo "Data submitted successfully!";
        
        // Send an email
        $to = "sg8966277@gmail.com"; // Replace with the recipient's email address
        $subject = "New Contact Form Submission";
        $headers = "From: " . $email;
        $message = "Name: $uname\nEmail: $email\nSubject: $subject\nMessage: $message";
        
        if (mail($to, $subject, $message, $headers)) {
            echo "Email sent successfully!";
        } else {
            echo "Error sending email.";
        }
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the database connection
    $stmt->close();
}

// Close the database connection
$conn->close();
?>


<style>
    .whatsapp_float {
      position: fixed;
      width: 60px;
      height: 60px;
      bottom: 40px;
      right: 40px;
      background-color: #25d366;
      color: #fff;
      border-radius: 50px;
      text-align: center;
      font-size: 30px;
      box-shadow: 2px 2px 3px #999;
      z-index: 100;
    }
    .whatsapp-icon {
      margin-top: 16px;
    }

    /* for mobile */
    @media screen and (max-width: 767px){
      .whatsapp-icon {
        margin-top: 10px;
      }
      .whatsapp_float {
        width: 40px;
        height: 40px;
        bottom: 20px;
        right: 10px;
        font-size: 22px;
      }
    }

    @media (max-width: 576px) {
    .carousel-caption h4 {
        font-size: 18px;
        font-weight: 500 !important;
    }

    .carousel-caption h1 {
        font-size: 30px;
        font-weight: 600 !important;
    }
}

.carousel-control-prev,
.carousel-control-next {
    width: 10%;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    width: 3rem;
    height: 3rem;
}

.bg-hero {
    background: url(../img/carousel-1.jpg) top right no-repeat;
    background-size: cover;
}

@media (min-width: 991.98px) {
    .banner {
        position: relative;
        margin-top: -90px;
        z-index: 1;
    }
}
</style>

  <a href="https://wa.me/917417270429" target="_blank" class="whatsapp_float">
  <i class="fab fa-whatsapp whatsapp-icon"></i>
  <h6 style="color: darkorange;">Ask Anything!</h6>
</a>
   <!-- Header Start -->
    <div class="container-fluid py-5 mb-5" style="background-color: #FFD580;">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Contact Us</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class=" bg-white text-center text-primary px-3">Contact Us</h6>
                <h1 class="mb-5">Contact For Any Query</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h5>Contact us today.</h5>
                    <p class="mb-4">Here are some suggestions for what you may say in place of "Contact Us": Send Us a Message. Send an email. Make Contact</p>
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Our New York Office</h5>
                            <p class="mb-0">B/1008 freshia, AG Road near teerth town, Opp. Stanza living, Baner-411021.
</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Mobile</h5>
                            <p class="mb-0">+91 8208468714</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Email</h5>
                            <p class="mb-0">info@your business.com</p>
                        </div>
                    </div>
                </div>
               
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <form action="" method="post">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                <label for="name">Your Name</label>
                                <input type="text" name="uname"  class="form-control"placeholder="Your Name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                            <label for="email">Your Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Your Email"  required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <label for="subject">Subject</label>
                                    <input type="text" name="subject" class="form-control"  placeholder="Subject" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                             <label for="message">Message</label>
                            <textarea name="message" class="form-control" placeholder="Leave a message here" required style="height: 150px"></textarea>
                            </div>
                            </div>
                            <div class="col-12">
                    <button type="submit" class="btn btn-primary w-100 py-3">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
    <img decoding="async"  width="1200" height="306" src="https://rivietechnology.com/wp-content/uploads/2020/06/map.jpg" class="attachment-full size-full wp-image-386" alt="m" loading="lazy" srcset="https://rivietechnology.com/wp-content/uploads/2020/06/map.jpg 1900w, https://rivietechnology.com/wp-content/uploads/2020/06/map-600x191.jpg 600w, https://rivietechnology.com/wp-content/uploads/2020/06/map-300x96.jpg 300w, https://rivietechnology.com/wp-content/uploads/2020/06/map-1024x327.jpg 1024w, https://rivietechnology.com/wp-content/uploads/2020/06/map-768x245.jpg 768w, https://rivietechnology.com/wp-content/uploads/2020/06/map-1536x490.jpg 1536w, https://rivietechnology.com/wp-content/uploads/2020/06/map-700x223.jpg 700w" sizes="(max-width: 1900px) 100vw, 1900px">
    </div>
    <br>
    <!-- Contact End -->

    <?php include 'common/footer.php'?>