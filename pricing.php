
<?php include 'common/header.php'?>


<style>  
.card {
  box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.08), 0 3px 6px 0 rgba(0, 0, 0, 0.03);
  border-right: 1px #dde0e2 solid;
  border-radius: 4px 4px 0 0;
  position: relative;
  background-color: white;
  color: #56575b;
  margin: 5px 0;

  .plan-name {
    padding: 13px 0;
    border-bottom: 1px #eff0f2 solid;
    text-align: center;
    text-transform: uppercase;
    font-size: 16px;
    color: #464c50;
    font-family: "Open sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
    letter-spacing: 1px;
  }

  .plan-description {
    padding: 15px;
    line-height: normal;
    min-height: 175px;
    font-size: 14px;
    line-height: 18px;
  }

  .plan-price sub {
    text-transform: none;
    font-size: 16px;
    bottom: 0;
  }

  .plan-price {
    color: #56575b;
    font-family: "Open sans";
    font-size: 34px;
    text-transform: uppercase;
    line-height: 50px;
  }

  sub {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline;
  }

  .plan-description.specs {
    min-height: 200px;
    line-height: 20px;
  }

  .plan-cta {
    position: absolute;
    bottom: 0px;
    left: 0;
    width: 100%;
    text-align: center;
    padding: 0 15px;
    min-height: 95px;
    &:hover a {
      opacity: 0.8;
      color: #fff;
      text-decoration: none;
    }
  }
  .button,
  .button-primary {
    background: #2a5bd7;
    border-radius: 8px;
    font-size: inherit;
    color: white;
    transition: background 100ms linear;
    text-decoration: none;
    line-height: normal;
    outline: none !important;
    padding: 0.6em 1em;
  }
}

.text
{
  text-shadow: 2px 2px lightblue;
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
                    <h1 class="display-3 text-white animated slideInDown">About Pricing</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-primary justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page"><a class="text-white" href="pricing.php">Pricing</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    
<!-- =========================================================
 ----------- Bootstrap Pricing Cards -------------------------
 ========================================================= -->
 <section>
  <h1 class=" text text-center mt-3 bg-light">Our Best Pricing</h1>
  <div class="container bg-light">
    <div class="row">
      <!-- <div class="col-md-6 col-lg-3">
        <div class="card">
          <div class="card-body">
            <div class="plan-name">
              Lite Plan </div>
            <div class="plan-description">
              <div class="plan-price month">
                $19<sub> / month</sub></div>
              <p>Great for personal users and the self-employed who are considering analytics and need branding.</p>
            </div>
            <div class="plan-description specs">

              1,000 Branded Links<br> 1+ User Seats<br> 1+ Custom Domains </div>
            <div class="plan-cta">
              <p><a class="button" href="#" data-open="get-pro-modal" aria-controls="get-pro-modal" aria-haspopup="true" tabindex="0">Get Started</a></p>
            </div>
          </div>
        </div>
      </div> -->

      <div class="col-md-8 col-lg-4 ">
        <div class="card">
          <div class="card-body">
            <div class="plan-name text-danger">
              Basic Plan </div>
            <div class="plan-description">
              <div class="plan-price month">
              $27<sub> / month</sub></div>
              <p>Completely Mobile-Optimized Website. <br>Powerful Website Metrics <br>Free Included Custom Domain <br> Easy Annual Purchase <br> Dedicated Customer Support</p>
            </div>
            <div class="plan-cta">
            <button type="button" class="btn btn-info" href="#" data-open="get-pro-modal" aria-controls="get-pro-modal" aria-haspopup="true" tabindex="0">Purchase</ button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-8 col-lg-4">
        <div class="card">
          <div class="card-body">
            <div class="plan-name text-info">
              Standard Plan </div>
            <div class="plan-description">
              <div class="plan-price month">
              $57<sub> / month</sub></div>
              <p>Completely Mobile-Optimized Website. <br>Powerful Website Metrics <br> Free Included Custom Domain <br>Easy Annual Purchase <br>Dedicated Customer Support <br>Access on mobile and TV.</p>
            </div>
             <div class="plan-cta">
            <button type="button" class="btn btn-info" href="#" data-open="get-pro-modal" aria-controls="get-pro-modal" aria-haspopup="true" tabindex="0">Purchase</button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-8 col-lg-4">
        <div class="card">
          <div class="card-body">
            <div class="plan-name text-secondary">
              Ultra Plus Plan </div>
            <div class="plan-description">
              <div class="plan-price month">
                $87<sub> / month</sub></div>
              <p>Completely Mobile-Optimized Website. <br>Powerful Website Metrics <br>Free Included Custom Domain <br> Easy Annual Purchase <br> Dedicated Customer Support <br>Access on mobile and TV <br>Certificate of Completion.</p>
            </div>
            <div class="plan-cta">
            <button type="button" class="btn btn-info" href="#" data-open="get-pro-modal" aria-controls="get-pro-modal" aria-haspopup="true" tabindex="0">Purchase</button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- ./container-->
</section>

    
<div class="container-xxl">
    <div class="container-fluid bg-light text-center">
        <div class="row">
            <div class="col-lg-12 col-md-4 wow fadeInUp" data-wow-delay="0.1s">
             <div class="position-relative">
             <h6 class="section-title bg-white text-start text-primary pe-3 p-3 mt-3">Online Plateform</h6>
                    <h1 class="mb-4">Register now and save.</h1>
                 <p class="mb-4">Yes, online certifications granted by recognised universities or institutions are recognised by and accepted by employers.</p>
                 <button type="button" class="btn btn-danger p-3 rounded-circle">Register Now</button>
                </div>
            </div>
        </div>
    </div>
</div>

        

    <?php include 'common/footer.php'?>