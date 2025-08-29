<?php include 'react/components/DepartmentHeader.php'; ?>

<script type="text/babel">
    // Create the main App component that includes the DepartmentHeader
    App = function() {
        return (
            <DepartmentHeader 
                department="home" 
                title="Koshish Family" 
                backLink="/" 
            />
        );
    };
</script>


<!-- /////////////////////////////////////////////////////////////////////////////////////////////////
                            START SECTION 2 - THE INTRO SECTION  
/////////////////////////////////////////////////////////////////////////////////////////////////////-->

<section id="home" class="intro-section" 
  style="position: relative; background: url('images/event/event-4.jpg') no-repeat center center/cover; color: white; padding: 100px 0;">
  
  <!-- Overlay -->
  <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; 
              background: rgba(0,0,0,0.); z-index: 1;"></div>

  <div class="container" style="position: relative; z-index: 2;">
    <div class="row align-items-center text-white">
      <!-- START THE CONTENT FOR THE INTRO  -->
      <div class="col-md-6 intros text-start">
        <h1 class="display-2">
          <span class="display-2--intro">Hey! We're Koshish Family</span>
          <span class="display-2--description lh-base">
            A Family for the Underprivileged. Dedicated towards helping children gain education and their overall skills 
          </span>
        </h1>
        <p>Volunteer and make a difference in the life of people those who are in need</p>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSd091F7yX0SJMDXT_eLybLfdX69u54_kKmCAwFaqCqXjuo-Dw/viewform" target="_blank" style="text-decoration: none;">
          <button type="button" class="rounded-pill btn-rounded bg-primary">Join our Team</button>
        </a>
      </div>
    </div>
  </div>

  <!-- Wave Shape -->
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="position: relative; z-index: 2;">
    <path fill="#ffffff" fill-opacity="1" 
          d="M0,160L48,176C96,192,192,224,288,208C384,192,480,128,576,133.3C672,139,768,213,864,202.7C960,192,1056,96,1152,74.7C1248,53,1344,107,1392,133.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
    </path>
  </svg>
</section>

<!-- //////////////////////////////////////////////////////////////////////////////////////////////
                             START SECTION 3 - THE CAMPANIES SECTION  
////////////////////////////////////////////////////////////////////////////////////////////////////-->

  <!-- <section id="campanies" class="campanies">
    <div class="container">
      <div class="row text-center">
        <h4 class="fw-bold lead mb-3">Trusted by campanies like</h4>
        <div class="heading-line mb-5"></div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-lg-2">
          <div class="campanies__logo-box shadow-sm">
            <img src="images/campanies/campany-1.png" alt="Campany 1 logo" title="Campany 1 Logo" class="img-fluid">
          </div>
        </div>
        <div class="col-md-4 col-lg-2">
          <div class="campanies__logo-box shadow-sm">
            <img src="images/campanies/campany-2.png" alt="Campany 2 logo" title="Campany 2 Logo" class="img-fluid">
          </div>
        </div>
        <div class="col-md-4 col-lg-2">
          <div class="campanies__logo-box shadow-sm">
            <img src="images/campanies/campany-3.png" alt="Campany 3 logo" title="Campany 3 Logo" class="img-fluid">
          </div>
        </div>
        <div class="col-md-4 col-lg-2">
          <div class="campanies__logo-box shadow-sm">
            <img src="images/campanies/campany-4.png" alt="Campany 4 logo" title="Campany 4 Logo" class="img-fluid">
          </div>
        </div>
        <div class="col-md-4 col-lg-2">
          <div class="campanies__logo-box shadow-sm">
            <img src="images/campanies/campany-5.png" alt="Campany 5 logo" title="Campany 5 Logo" class="img-fluid">
          </div>
        </div>
        <div class="col-md-4 col-lg-2">
          <div class="campanies__logo-box shadow-sm">
            <img src="images/campanies/campany-6.png" alt="Campany 6 logo" title="Campany 6 Logo" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section> -->

<!-- //////////////////////////////////////////////////////////////////////////////////////////////
                         START SECTION 4 - THE SERVICES  
///////////////////////////////////////////////////////////////////////////////////////////////////-->
<section id="services" class="services">
  <div class="container">
    <div class="row text-center">
      <h1 class="display-3 fw-bold">Our Kids</h1>
      <div class="heading-line mb-1"></div>
    </div>
  <!-- START THE DESCRIPTION CONTENT  -->
    <div class="row pt-2 pb-2 mt-0 mb-3">
      <div class="col-md-6 border-right">
        <div class="bg-white p-3">
          <h2 class="fw-bold text-capitalize text-center">
            Know our Kids
          </h2>
        </div>
      </div>
      <div class="col-md-6">
        <div class="bg-white p-4 text-start">
          <p class="fw-light">
            Meet our most senior and oldest kids.
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- START THE CONTENT FOR THE SERVICES  -->
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
        <div class="services__content">
          <h3 class="display-3--title mt-1">Bharti</h3>
          <p class="lh-lg">
            A college going smart and sweet intelligent girl with a very creative mind. Being the eldest she is always up for any responsibilities and us growing really gracefully.
          </p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
        <div class="services__pic">
          <img src="<?= base_url() ?>images/kids/bharti.jpeg" alt="Bharti" class="img-fluid border-round-right">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-start">
        <div class="services__pic">
          <img src="<?= base_url() ?>images/kids/arjun.jpeg" alt="Arjun" class="img-fluid border-round-left">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
        <div class="services__content">
          <h3 class="display-3--title mt-1">Arjun</h3>
          <p class="lh-lg">
            Arjun, a quite, shy and soft hearted boy always ready to help. Smile is his trademark and it suits him the most. Starting his new phase of life after 12th let's wish a lot of luck.
          </p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
        <div class="services__content">
          <h3 class="display-3--title mt-1">Ramesh</h3>
          <p class="lh-lg">
            Ramesh our mechanical boy and ITI student. Love, Respect, Leadership and Cooperativeness is what makes him loved by all and genuineness is what lies in his heart.
          </p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
        <div class="services__pic">
          <img src="<?= base_url() ?>images/kids/ramesh.jpeg" alt="Ramesh" class="img-fluid border-round-right">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-start">
        <div class="services__pic">
          <img src="<?= base_url() ?>images/kids/reena.jpeg" alt="Arjun" class="img-fluid border-round-left">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
        <div class="services__content">
          <h3 class="display-3--title mt-1">Reena</h3>
          <p class="lh-lg">
            Our shy girl Reena currently studying in class 9th.A very sweet and simple kid with a very attractive aura which makes her loved by all.She dreams big and hope they'll become true.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ////////////////////////////////////////////////////////////////////////////////////////////////
                               START SECTION 5 - THE TIMELINE 
/////////////////////////////////////////////////////////////////////////////////////////////////////-->
<section id="timeline" class="timeline">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 230">
    <path fill="#fff" fill-opacity="1" d="M0,96L48,128C96,160,192,224,288,213.3C384,203,480,117,576,117.3C672,117,768,203,864,202.7C960,203,1056,117,1152,117.3C1248,117,1344,203,1392,245.3L1440,288L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
  </svg>
  
  <div class="container">
    <div class="row text-center">
      <h1 class="display-3 fw-bold">Our Journey</h1>
      <hr style="width: 100px; height: 3px; " class="mx-auto">
      <p class="lead pt-1">The Evolution of Koshish Family</p>
    </div>
    
    <div class="row">
      <div class="col-lg-12">
        <div class="timeline-slider">
          <?php
          $timelineData = [
            ["year" => 2012, "title" => "प्रारंभिक (Beginning)", "details" => "Journey started with teaching One kid. Raised Funds for him by selling handmade cards outside College canteen. Gave our efforts a name 'Koshish'"],
            ["year" => 2013, "title" => "इक्शणा ( Vision)", "details" => "Created a Vision of providing education for the underprivileged kids, added more kids and members to Koshish and made it a family."],
            ["year" => 2014, "title" => "साक्षरता (Education)", "details" => "Started Sending all kids to school taking care of their basic necessities and started celebrating major festivals likes Holi, Diwali, Rakhi, etc."],
            ["year" => 2015, "title" => "उदय (Rise)", "details" => "Became a fully organized team, recruiting members from all over the city running campaigns like Installation of Dustbins, Distribution Drives and Craft Events."],
            ["year" => 2016, "title" => "संवर्धनम् (Care)", "details" => "Took one step ahead in taking responsibilities of our kids' health, hygiene, and sanitation. Started organizing Health and Dental Camps for Kids and members."],
            ["year" => 2017, "title" => "वितरणम् (Distribution)", "details" => "Visited Orphanage for the first time. Started organizing fruits and clothes distribution drives"],
            ["year" => 2018, "title" => "सफलता ( Success)", "details" => "First batch of Kids completed their board exams. Planned Kids Annual Trips to Museums, Zoos, etc"],
            ["year" => 2019, "title" => "सहकारिन् ( Collaboration )", "details" => "Collaboration with other NGOs and societies to help the needy and grow in the process"],
            ["year" => 2020, "title" => "आलम्बन ( Foundation)", "details" => "First Kid sent for Graduation fully sponsored by Koshish Family. Organized Digital classes during Covid Pandemic for all our kids."],
            ["year" => 2021, "title" => "प्रयुक्तिः ( Event)", "details" => "Awareness Sessions, Summer Camps, Art n Craft Competitions, Yoga Sessions started on a regular basis."],
            ["year" => 2022, "title" => "पाठशाला ( Aashiyana)", "details" => "Koshish Family Completed 10 years. \"Aashiyana\" a place to study and grow with full amenities was created for Koshish Kids"],
            ["year" => 2023, "title" => "पञ्चिका ( Registered)", "details" => "Koshish Family is registered with high hopes of improving lives with the mission to get formal education for all underprivileged Koshish Kids"],
          ];

          foreach ($timelineData as $index => $item): ?>
            <div class="timeline-item" onclick="openModal(<?= $index ?>)">
              <div class="timeline-img" style="background-image: url('<?= base_url() ?>images/timeline/<?= $item['year'] ?>.jpg');"></div>
              <div class="timeline-content">
                <h2 class="timeline-year"><?= $item['year'] ?></h2>
                <h3 class="timeline-title"><?= $item['title'] ?></h3>
                <p class="timeline-description"><?= substr($item['details'], 0, 100) ?>...</p>
                <a class="btn-more" href="javascript:void(0)">Read More</a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>

  <div id="timelineModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <img id="modalImage" src="" alt="Year Image" class="img-fluid mb-3">
      <h2 id="modalYear" class="text-center"></h2>
      <h3 id="modalTitle" class="text-center mb-3"></h3>
      <p id="modalDetails" class="text-justify"></p>
    </div>
  </div>

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 230">
    <path fill="#fff" fill-opacity="1" d="M0,96L48,128C96,160,192,224,288,213.3C384,203,480,117,576,117.3C672,117,768,203,864,202.7C960,203,1056,117,1152,117.3C1248,117,1344,203,1392,245.3L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
  </svg>
</section>


<!-- /////////////////////////////////////////////////////////////////////////////////////////////////
                       START SECTION 6 - THE FAQ 
//////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!-- <section id="faq" class="faq">
  <div class="container">
    <div class="row text-center">
      <h1 class="display-3 fw-bold text-uppercase">faq</h1>
      <div class="heading-line"></div>
      <p class="lead">frequently asked questions, get knowledge befere hand</p>
    </div>
    <div class="row mt-5">
      <div class="col-md-12">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item shadow mb-3">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                What are the main features?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item shadow mb-3">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                do i have to pay again after trial
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item shadow mb-3">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            How can I get started after trial?
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item shadow mb-3">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Can I be refunded if am not satisfied?
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////
                              START SECTION 7 - THE PORTFOLIO  
//////////////////////////////////////////////////////////////////////////////////////////////////////-->

<section id="portfolio" class="portfolio">
  <div class="container">
    <div class="row text-center mt-5">
      <h1 class="display-3 fw-bold text-capitalize">Events</h1>
      <div class="heading-line"></div>
      <p class="lead">
        Events by Koshish Family
      </p>
    </div>
    <!-- FILTER BUTTONS  -->
    <!-- <div class="row mt-5 mb-4 g-3 text-center">
      <div class="col-md-12">
        <button class="btn btn-outline-primary" type="button">All</button>
        <button class="btn btn-outline-primary" type="button">websites</button>
        <button class="btn btn-outline-primary" type="button">design</button>
        <button class="btn btn-outline-primary" type="button">mockup</button>
      </div>
    </div> -->

    <!-- START THE PORTFOLIO ITEMS  -->
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-box shadow">
          <img src="<?= base_url() ?>images/event/event-1.jpg" alt="Event 1 image" title="Event 1 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>Valentines Day Stall</h4>
              <p>February 2023</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-box shadow">
          <img src="<?= base_url() ?>images/event/event-2.jpg" alt="Event 2 image" title="Event 2 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>Clothes Distribution Drive</h4>
              <p>February 2023</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-box shadow">
          <img src="<?= base_url() ?>images/event/event-3.jpg" alt="Event 3 image" title="Event 3 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>Clothes Distribution Drive</h4>
              <p>November 2022</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-box shadow">
          <img src="<?= base_url() ?>images/event/event-4.jpg" alt="Event 4 image" title="Event 4 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>Youthopia</h4>
              <p>November 2022</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-box shadow">
          <img src="<?= base_url() ?>images/event/event-5.jpg" alt="Event 5 image" title="Event 5 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>Teachers Day</h4>
              <p>September 2022</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-box shadow">
          <img src="<?= base_url() ?>images/event/event-6.jpg" alt="Event 6 image" title="Event 6 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>Diwali Stall</h4>
              <p>October 2022</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-box shadow">
          <img src="<?= base_url() ?>images/event/event-7.jpg" alt="Event 7 image" title="Event 7 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>Chat Pooja</h4>
              <p>October 2022</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-box shadow">
          <img src="<?= base_url() ?>images/event/event-8.jpg" alt="Event 8 image" title="Event 8 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>Youthopia</h4>
              <p>April 2022</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-box shadow">
          <img src="<?= base_url() ?>images/event/event-9.jpg" alt="Event 9 image" title="Event 9 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>Mussorie Trip</h4>
              <p>January 2022</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////
              START SECTION 8 - GET STARTED  
/////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<section id="contact" class="get-started">
  <div class="container">
    <div class="row text-center">
      <h1 class="display-3 fw-bold text-capitalize">Connect with US</h1>
      <div class="heading-line"></div>
    </div>

    <!-- START THE CTA CONTENT  -->
    <div class="row text-white">
      <div class="col-12 col-lg-6 gradient shadow p-3">
        <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3441.17911653095!2d78.0773653!3d30.402659600000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3908d7006ff6fbc9%3A0x790977fcca1cf196!2sKoshish%20Aashiyana!5e0!3m2!1sen!2sin!4v1756048964754!5m2!1sen!2sin"></iframe>
      </div>
      <div class="col-12 col-lg-6 bg-white shadow p-3">
        
      </div>
    </div>
  </div>
</section>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
$(document).ready(function(){
  $('.timeline-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    dots: true,
    centerMode: true,
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });
});

function openModal(index) {
  var modal = document.getElementById("timelineModal");
  var span = document.getElementsByClassName("close")[0];
  var timelineData = <?= json_encode($timelineData) ?>;
  var item = timelineData[index];

  document.getElementById("modalYear").textContent = item.year;
  document.getElementById("modalTitle").textContent = item.title;
  document.getElementById("modalDetails").textContent = item.details;
  document.getElementById("modalImage").src = "<?= base_url() ?>images/timeline/" + item.year + ".jpg";

  modal.style.display = "block";

  span.onclick = function() {
    modal.style.display = "none";
  }

  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
}
</script>
<style>
@import url('https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css');
@import url('https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css');

.timeline {
  background-color: #f8f9fa;
}

.timeline-slider {
  max-width: 1000px;
  margin: 0px auto;
}

.timeline-item {
  margin: 0 15px;
  background-color: white;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 4px 6px rgba(0,0,0,0.1);
  transition: all 0.3s ease;
}

.timeline-item:hover {
  transform: translateY(-5px);
  box-shadow: 0 6px 12px rgba(0,0,0,0.15);
}

.timeline-img {
  height: 200px;
  background-size: cover;
  background-position: center;
}

.timeline-content {
  padding: 20px;
}

.timeline-year {
  font-size: 24px;
  font-weight: bold;
  color: var(--bs-primary);
  margin-bottom: 5px;
}

.timeline-title {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 10px;
}

.timeline-description {
  font-size: 14px;
  line-height: 1.5;
  margin-bottom: 15px;
}

.btn-more {
  display: inline-block;
  padding: 8px 16px;
  background-color: var(--bs-primary);
  color: white;
  text-decoration: none;
  border-radius: 4px;
  transition: background-color 0.3s ease;
}

.btn-more:hover {
  background-color: var(--bs-secondary);
}

.modal {
  display: none;
  position: fixed;
  z-index: 1000;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0,0,0,0.4);
}

.modal-content {
  background-color: #fefefe;
  margin: 10% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  max-width: 600px;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

/* Customizing Slick Slider */
.slick-prev:before, .slick-next:before {
  color: var(--bs-primary);
}

.slick-dots li button:before {
  font-size: 12px;
  color: var(--bs-primary);
}

.slick-dots li.slick-active button:before {
  color: var(--bs-cyan);
}
</style>
