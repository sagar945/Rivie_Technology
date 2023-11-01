<?php include 'common/header.php'?>
<?php include 'common/connection.php'?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect data from the form
    $products = $_POST["products"];
    $insName = $_POST["insName"]; // Ensure the correct case 'insName'
    $phn_no = $_POST["phn_no"];
    $email = $_POST["email"];
    $city = $_POST["city"];
    $state = $_POST["state"];

    // Insert the data into the database
    $sql = "INSERT INTO register_form (products, insName, phn_no, email, city, state) 
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Assuming phn_no is an integer, you need to specify the correct data types for binding
    $stmt->bind_param("ssisss", $products, $insName, $phn_no, $email, $city, $state);

    if ($stmt->execute()) {
        echo '<script>alert("Data has been submitted successfully!");</script>';
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>





<style>
.flip-card {
  background-color: transparent;
  width: 340px;
  height: 200px;
  perspective: 1000px;

}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  border-radius: 20px;

}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  border-radius: 20px;
}

.flip-card-front {
  background-color: #E5F3FD;
  color: black;
}

.flip-card-back {
  background-color: lightgray;
  color: black;
  transform: rotateY(180deg);
}

.btnpurple
{
    background-color: #FEA9AE;
}

.btnpurple:hover
{
    background-color: skyblue;
}

.disc
{
    font-size: 60px;
    width: 50%;
    font-family: "Noto", sans JP;
    margin-left: 3%;

}

.regisbtn
{
     border: 3px solid #ffffdf;
     background-color: #ff9900ad;
     width: 150px;
     height: 50px;
     color: #fff;
}

.regisbtn:hover
{
    color: #fff;
    background-color: #E31837;
}

.paragraph
{
    width: 55%;
    font: bolder;
    font-size: 19px;
    font-family: "Poppins";
    color: #484848;
    margin-left: 3%;

}

#myBtn {
/*  display: none;*/
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #FF8000;
  color: white;
  cursor: pointer;
  padding: 20px;
  border-radius: 44px;
}

#myBtn:hover {
  background-color: skyblue;
}

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

    .whatsapp_float1 {
      position: fixed;
      width: 60px;
      height: 60px;
      bottom: 40px;
      left: 20px;
      color: #fff;
      text-align: center;
/*      box-shadow: 2px 2px 3px #999;*/
      z-index: 100;
    }
    .fa-brands
    {
        color: darkorange;
        font-size: 50px;
    }
   /* .whatsapp-icon {
      margin-top: 16px;
    }*/

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


/*Animated Card Bootstrap*/

.item{
  padding-left:5px;
  padding-right:5px;
}
/*.item-card{
  transition:0.5s;
  cursor:pointer;
}*/
.item-card-title{  
  font-size:15px;
  transition:1s;
  cursor:pointer;
}
.item-card-title i{  
  font-size:15px;
  transition:1s;
  cursor:pointer;
  color:#ffa710
}
.card-title i:hover{
  transform: scale(1.25) rotate(100deg); 
  color:#18d4ca;
  
}
/*.card:hover{
  transform: scale(1.05);
  box-shadow: 10px 10px 15px rgba(0,0,0,0.3);
}*/
.card-text{
  height:80px;
}

.owner
{
    color: #ffb648;
    font-size: 12px;
    line-height: 25px;
    text-transform: uppercase;
    font-family: Poppins;
    font-style: normal;
    font-weight: 500;
    letter-spacing: 2px;
}
.card::before {
  transform-origin: left top;
}
.card::after {
  transform-origin: right bottom;
}
.card:hover::before, .card:hover::after, .card:focus::before, .card:focus::after {
  transform: scale3d(1, 1, 1);
}

/* Testimonials CSS */
.sliderr
{
    height: 500px;
    background-color: #272D3C;
}

.sliderr
{
    color: #ffffff;
    font-size: 30px;
    line-height: 40px;
    text-transform: none;
    font-family: Noto Sans JP;
    font-style: normal;
    font-weight: 500;
    letter-spacing: 0px;

}
.card-main {
    background-color: #272D3C;
    color: #fff;
    padding: 50px;
}

.card-0 {
    color: #fff;
    background-color: #272D3C;
    position: relative;
    margin-left: 70px;
    border-radius: 10px;
    min-height: 412px;
}

.img img
{
    margin-left: 37%;
}

.carousel-indicators li {
    cursor: pointer;
    border-radius: 50% !important;
    width: 10px;
    height: 10px;
}


.open-quotes {

    margin-left: 130px;
    margin-top: 100px;
}


.close-quotes {
    margin-bottom: 100px;
    margin-right: 60px
}

@media screen and (max-width: 600px) {
    .card-main {
        padding: 50px 10px;
    }

    .card-0 {
        min-height: 432px;
    }

    .profile {
        top: 24%;
    }

    .profile-pic {
        width: 90px;
        height: 90px;
    }

    .open-quotes {
        margin-left: 100px;
    }

    .content {
        margin-left: 120px;
        margin-right: 50px;
    }

    .close-quotes {
        margin-right: 30px
    }
}




</style>

  <a href="https://wa.me/917417270429" target="_blank" class="whatsapp_float">
  <i class="fab fa-whatsapp whatsapp-icon"></i>
  <h6 style="color: darkorange;">Ask Anything!</h6>
</a>

<div class="fadeInUp">
 <a href="index.php" target="_blank" class="fadeInUp animated data-bs-slide whatsapp_float1">
<i class="fa-brands fa-rocketchat"></i>
<h6>Book Demo</h6>
</a>

</div>

 <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100 h-100" src="Images/11.jpg" alt="Image">
                    <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">
                        <div class="text-start">
                            <!-- <h4 class="pt-3" style="color: #FFBE30; font-size: 12px;">ONLINE COURSES</h4> -->
                            <h4 class="disc animated slideInDown"><b>A Wide Range of Online Exam Solutions.</b></h4>
                             <p class="paragraph text-dark">A wide range of online exam solutions refers to a comprehensive suite of tools, platforms, and services that cater to the various aspects of conducting exams and assessments in a digital format.</p>
                                <a href="slide1.php" class="btn btnpurple ml-5 py-md-3 px-md-5 me-3  animated slideInLeft">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100 h-100" src="Images/2.jpg" alt="Image">
                    <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">
                        <div class="text-start">
                            <!-- <h5 class="pt-3" style="color: #FFBE30;">ONLINE COURSES</h5> -->
                           <h4 class="disc animated slideInDown"><b>A Printing and Offline Solutions</b>
                           </h4>
                                <p class="paragraph text-dark">A wide range of offline and printing solutions refers to a diverse set of tools, technologies, and services that cater to various aspects of creating, designing, and producing printed materials offline, without the need for an active internet connection. </p>
                                <a href="slide2.php" class="btn btnpurple ml-5 py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="w-100 h-100"  src="Images/3.jpg" alt="Image">
                    <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">
                        <div class="text-start">
                            <!-- <h5 class="pt-3" style="color: #FFBE30;">ONLINE COURSES</h5> -->
                            <h4 class="disc animated slideInDown"><b>Class Organisation Suit</b></h4>
                                <p class="paragraph text-dark">"Class Organization Suite" refers to a comprehensive collection of resources, and solutions that are designed to help manage various aspects of classroom organization. </p>
                                <a href="slide3.php" class="btn btnpurple ml-5 py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
 

      
   <!-- Essential facts Starts -->
   
   <?php  
       if(isset( $_SESSION['email']))
       { 
   ?>
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h3><u>Essential Fast Facts</u></h3>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="illustration/illustration/High Quality.jfif" width="400" alt="High">
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h3 class="mb-0">High Quality</h3>
                        <div class="mb-3">
                            <p class="text-center">A We endeavour for 'excellence' by providing tailored solutions & services that best satisfies the vice.</p>
                            <p class="text-center">Our passion for constant improvement in providing superior solutions & security is our aim to earn the trust of, and build long relationships with our customers. We achieved through hard-work, dedication, honesty and high-quality services.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="illustration/illustration/Amazing Result.jpg" alt="Amazing Result" width="400" style="height: 254px;">
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h3 class="mb-0">Amazing Result</h3>
                        <div class="mb-3">
                            <p>The application manages the information about various students along with the course they opted in different years, the marks secured by the distinctive students in various subjects in different exams:</p>
                            <ul>
                                <li>View results of tests and exams online</li>
                                <li>Search test and exam scores with valid test ID</li>
                                <li>Download report of the results</li>
                                <li>Request for re-evaluation</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="illustration/illustration/Best Pricing.jpg" alt="Best Pricing" style="height: 255px;">
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h3 class="mb-0">Best Pricing</h3>
                        <div class="mb-3">
                            <p>We provide educational solution services at the best price. <a href="contact.php">Kindly connect with us</a> to know more.</p>
                            <p>When selling a product or service, a firm can employ a number of different pricing tactics. Senior executives must first identify the company to decide the best pricing strategy for it.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="illustration/illustration/Innovative.jpg" alt="Innovative">
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h3 class="mb-0">Innovative</h3>
                        <div class="mb-3">
                            <p>Technological innovations are having a significant impact on educational systems at all levels. Online courses, teaching aids, educational software, social networking tools, and other emerging technologies are disrupting the traditional classroom environment.
                            Understanding the effects that technological innovations have on students and teachers is critical to developing strategies and techniques to manage and use technology in education.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="illustration/illustration/Team Work.jfif" width="400" alt="Team Work" style="height: 240px;">
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h3 class="mb-0">Team Work</h3>
                        <div class="mb-3">
                            <p>Creativity forms the backbone of everything we do at Identity – inventing creative solutions to even the most random of tasks is what makes us special.</p>
                            <p>We are home to a strong pool of exceptional creatives with bucket loads of experience in providing educational software services, all of whom bring something different to the table.</p>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="illustration/illustration/Support.jfif" width="400" alt="Support" style="height: 240px;">
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h3 class="mb-0">Support</h3>
                        <div class="mb-3">
                            <p>Our way of doing business is to approach each client exclusively. Working with you, we gain an understanding of your requirements.
                            As an educational software solution provider, we provide our clients with the best services available 24/7. This enables us to earn their trust and complete projects with full spirit, blending our innovative concepts to make our services advanced, adequate, and accessible.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php }
    else{

  
?>
<div class="container-xxl py-5">
        <div class="container mt-3">
           <div class="row" style="margin-left: 15px; align-items: center;">
            <div class="col-sm-2">
                <a href="8,9,10foundation.php"><img src="illustration/illustration/8,9,10.png" alt="8th 9th n 10th foundation" width="150"></a>
            </div>

            <div class="col-sm-2">
                 <a href="NEET.php"><img src="illustration/illustration/NEET.png" alt="NEET" width="150"></a>
            </div>

            <div class="col-sm-2">
                <a href="JEE.php"> <img src="illustration/illustration/JEE.png" alt="Jee Main & Advance" width="150"></a>
            </div>


            <div class="col-sm-2">
                 <a href="MHTCET_KCET_EAMCET.php"><img src="illustration/illustration/MHTCET.png" alt="EAM-CET" width="150"></a>
            </div>

            <div class="col-sm-2">
                <a href="OMR.php"> <img src="illustration/illustration/OMR.png" alt="OMR" width="150"></a>
            </div>


            <div class="col-sm-2">
                <a href="class_manage.php"> <img src="illustration/illustration/class mangement.png" alt="OMR" width="150"></a>
            </div>            
           </div> 
        </div>
    </div> 


<?php  } ?>

 <!-- Essential facts End -->
 <div class="container-xxl py-3">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h3 class="mb-0 pt-5">Essential Fast Facts</h3>
        </div>
        <div class="row g-4 justify-content-center ">
            <div class="col-lg-4 col-md-6 wow fadeInUp pt-5" data-wow-delay="0.1s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="illustration/illustration/high_quality.jpg" width="400" alt="High">
                    </div>
                        <div class="flip-card">
                          <div class="flip-card-inner">
                             <div class="flip-card-front">
                                <h3 class="mb-0"><u>High Quality</u></h3>
                                <p class="text-center pt-3">A We endeavour for 'excellence' by providing tailored solutions & services that best satisfies the vice.</p>
                                <button class="btn btn-muted bg-white">Read More &rarr;</button>

                            </div>
                            <div class="flip-card-back pt-3">                            
                              <p>Our passion for constant improvement in providing superior solutions & security is our aim to earn the trust of, and build long relationships with our customers. We achieved through hard-work, dedication, honesty and high-quality services.</p> 
                            </div>
                          </div>
                        </div>                  
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="illustration/illustration/Amazing Result.jpg" alt="Amazing Result" width="400" style="height: 254px;">
                    </div>
                         <div class="flip-card">
                          <div class="flip-card-inner">
                             <div class="flip-card-front">
                                <h3 class="mb-0"><u>Amazing Result</u></h3>
                                <p class="text-center pt-3">The application manages the information about various students along with the course they opted in different years.</p>
                                <button class="btn btn-muted bg-white">Read More &rarr;</button>
                            </div>
                            <div class="flip-card-back pt-3">                            
                              <p>The marks secured by the distinctive students in various subjects in different exams: View results of tests and exams online, Search test and exam scores with valid test ID ,Download report of the results,Request for re-evaluation.</p> 
                            </div>
                          </div>
                        </div>    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="illustration/illustration/Best Pricing.jpg" alt="Best Pricing" style="height: 255px;">
                    </div>
                    <div class="flip-card">
                          <div class="flip-card-inner">
                             <div class="flip-card-front">
                                <h3 class="mb-0"><u>Best Pricing</u></h3>
                                <p class="text-center pt-3">We provide educational solution services at the best price. <a href="contact.php">Kindly connect with us</a> to know more.</p>
                                <button class="btn btn-muted bg-white">Read More &rarr;</button>
                            </div>
                            <div class="flip-card-back pt-3">                            
                              <p>When selling a product or service, a firm can employ a number of different pricing tactics. Senior executives must first identify the company to decide the best pricing strategy for it.</p> 
                            </div>
                          </div>
                        </div>    
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-xxl">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="illustration/illustration/Innovative.jpg" alt="Innovative">
                    </div>
                    <div class="flip-card">
                          <div class="flip-card-inner">
                             <div class="flip-card-front">
                                <h3 class="mb-0"><u>Innovative</u></h3>
                                <p class="text-center">Technological innovations are having a significant impact on educational systems at all levels. Online courses, teaching aids, educational software, social networking tools.</p>
                                <button class="btn btn-muted bg-white">Read More &rarr;</button>
                            </div>
                            <div class="flip-card-back pt-3">                            
                              <p>And other emerging technologies are disrupting the traditional classroom environmentUnderstanding the effects that technological. Innovations have on students and teachers is critical to developing strategies and techniques to manage and use technology in education.</p> 
                            </div>
                          </div>
                        </div>  
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="illustration/illustration/teamwork.jpg" width="400" alt="Team Work" style="height: 240px;">
                    </div>
                           <div class="flip-card">
                          <div class="flip-card-inner">
                             <div class="flip-card-front">
                                <h3 class="mb-0"><u>Team Work</u></h3>
                                <p class="text-center ">Creativity forms the backbone of everything we do at Identity – inventing creative solutions to even the most random of tasks is what makes us special</p>
                                <button class="btn btn-muted bg-white">Read More &rarr;</button>
                            </div>
                            <div class="flip-card-back pt-3">                            
                              <p>We are home to a strong pool of exceptional creatives with bucket loads of experience in providing educational software services, all of whom bring something different to the table.</p> 
                            </div>
                          </div>
                        </div>  
                </div>
            </div>
        
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="illustration/illustration/support.jpg" width="400" alt="Support" style="height: 240px;">
                    </div>
                      <div class="flip-card">
                          <div class="flip-card-inner">
                             <div class="flip-card-front">
                                <h3 class="mb-0"><u>Support</u></h3>
                                <p class="text-center pt-3">Our way of doing business is to approach each client exclusively. Working with you, we gain an understanding of your requirements.</p>
                                <button class="btn btn-muted bg-white">Read More &rarr;</button>
                            </div>
                            <div class="flip-card-back pt-3">                            
                              <p>As an educational software solution provider, we provide our clients with the best services available 24/7. This enables us to earn their trust and complete projects with full spirit, blending our innovative concepts to make our services advanced, adequate, and accessible.</p> 
                            </div>
                          </div>
                        </div>  
                </div>
            </div>
        </div>
    </div>
</div>
 

<!-- Testimonials Section Start here -->

<div class="container-fluid sliderr mt-5 px-2 px-md-4 py-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10 col-lg-9 col-xl-8">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card border-0 card-0">   
                             <div class="active">
                            <div class="img">
                            <img src="Images/testimonia1.png" width="200" alt="">
                           </div>
                            </div> 
                            <p class="card-text mt-5 content">" Education is the manifestation of the perfection already in man."
                             </p>     
                               <h5 class="owner text-center">"Swami Vivekanand"</h5>                        
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card border-0 card-0">
                            <div class="active">
                            <div class="img">
                            <img src="Images/testimonia1.png" width="200" alt="">
                           </div>
                            </div> 
                               <p class="card-text mt-5 content">" Educationis not the learning of facts, but the training of the mind to think!"
                             </p>
                              <h5 class="owner text-center">"Albert Einstein"</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card border-0 card-0"> 
                              <div class="active">
                            <div class="img">
                            <img src="Images/testimonia1.png" width="200" alt="">
                           </div>
                            </div>                                  
                               <p class="card-text mt-3  content">" Education Confidence and Hard work is the best medicine to kill the disease called failure. It will make you successful person."
                               </p>
                                <h5 class="owner text-center mt-5" >"A.P.J. ABDUL KALAM"</h5>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

<!-- Testimonials Section end here -->

    <!-- Section: Design Block -->
<!-- <section class="background-radial-gradient jumbotron  overflow-hidden"> -->

<br>
<div class="background pt-5 py-5" style="background-image: url('Images/reg_back.jpg');">
<div class="container px-4  px-md-5 text-center text-lg-start">
  <div class="row gx-lg-5 align-items-center mb-5">
    <div class="col-lg-6 mb-lg-0" style="z-index: 10;">
         <div class="card bg-glass">
        <div class="card-body px-4 py-5 px-md-5">
          <form action="" method="post"> 
            <div class="form-outline">
            <!-- <label class="form-label" for="Product">Product</label> -->
              <input type="text" name="products"  class="form-control" placeholder="Enter Products" required />
            </div>
            <br>

            <div class="form-outline">
                  <!-- <label class="form-label" for="Organization Name">Organization Name</label> -->
              <input type="text" name="insName"  class="form-control" placeholder="Enter Institute Name" required />
            </div>
            <br>
           
            <div class="form-outline">
                 <!-- <label class="form-label" for="Contact Number">Contact Number</label> -->
              <input type="text" name="phn_no"  class="form-control input" placeholder="Enter Contact Number" required />
            </div>
            <br>

            <div class="form-outline">
             <!-- <label class="form-label" for="Email Id">Email Id</label> -->
              <input type="email" name="email"  class="form-control" placeholder="Enter Email Id" required />
            </div>
            <br>

            <div class="form-outline">
                <!-- <label class="form-label" for="City">City</label> -->
              <input type="text" name="city"  class="form-control" placeholder="Enter City" required />
            </div>
            <br>

            <div class="form-outline">
                 <!-- <label class="form-label" for="State">State</label> -->
              <input type="text" name="state"  class="form-control" placeholder="Enter State" required />
            </div>
            <br>
  
           <button type="submit" name="submit" data-hover-background-color="#f15b4e" class="btn regisbtn">Register Now</button>

          </form>
        </div>
      </div>
    </div>
    <div class="col-lg-6 mb-lg-0 position-relative">
        <h2 class=" display-5 fw-bold ls-tight" style="font-size: 40px; font-family: Arial 24;">BOOK A <span style="color:#D30000;">DEMO</span> FOR FREE!</h2>

        <div class="row pt-3">
            <div class="col-lg-1">
            <i class="fa fa-mobile" aria-hidden="true" style="font-size: 45px;border: 10px solid #D30000; background-color: #D30000; border-radius: 50%; color: white;"></i>
            </div>  
             <div class="col-lg-10 justify-content-center">
           <h4>Choose your favourite products</h4>  
           <p>Select as many products as you would like to see.</p> 
            </div>  
        </div> 
        <div class="row pt-3">
            <div class="col-lg-1">
            <i class="fa fa-calendar" aria-hidden="true" style="font-size: 45px;border: 10px solid #D30000; background-color: #D30000; border-radius: 50%; color: white;"></i>
            </div>  
             <div class="col-lg-10 justify-content-center">
           <h4>Book an appointment</h4>  
           <p>Our experts will call you to set date, time & place.</p> 
            </div>  
        </div> 
            <div class="row pt-3">
            <div class="col-lg-1">
            <i class="fa fa-shopping-bag" aria-hidden="true" style="font-size: 45px; border: 10px solid #D30000; background-color: #D30000; border-radius: 50%; color: white;"></i>
            </div>  
             <div class="col-lg-10 justify-content-center">
           <h4>Buy it only if you like it!</h4>  
           <p>&nbsp;&nbsp;Explore features, ask questions & then take the decision.</p> 
            </div>  
        </div>      
    </div>
  </div>
</div>
<!-- </section> -->
</div>
<!-- Section: Design Block -->



        

    <?php include 'common/footer.php'?>