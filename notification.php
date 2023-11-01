<?php include 'common/header.php'?>

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
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Notification</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                           <li class="breadcrumb-item text-white active" aria-current="page"><a href="contact.php">Contact</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
               <h1 class="section-title bg-white text-center text-primary px-3 mb-5">Notification</h1>
            </div>
            <div class="row g-4">
                    <form>
                    <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" placeholder="Select Your Branch">
                                    <label for="Branch">Branch</label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" placeholder="Select Your Batch">
                                    <label for="batch">Batch</label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" placeholder="Select Your Division">
                                    <label for="division">Division</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" placeholder="Select Your Standard">
                                    <label for="Standard">Standard</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" placeholder="Select Your Exam">
                                    <label for="ExamPattern">Exam</label>
                                </div>
                            </div>

                            <div class="col-6">
                                <button class="btn btn-primary" type="submit">Push Notification</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-6">
                <button class="btn btn-primary" type="submit">Custom Notification</button>
              </div>
            </div>
        </div>
    </div>
 
    <!-- Contact End -->

    <?php include 'common/footer.php'?>