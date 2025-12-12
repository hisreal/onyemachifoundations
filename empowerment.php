<?php
$current_page = basename($_SERVER['PHP_SELF']);
$current_dir  = basename(dirname($_SERVER['PHP_SELF']));
$title = "Empowerment Initiative| Onyemachi Foundation - Transforming Communities Through Action";
$description = "Learn about the core initiatives of Onyemachi Foundation, including education support, medical missions, youth empowerment, skillbuilding programs, and community welfare efforts aimed at creating sustainable change.";
$keywords = "Onyemachi Foundation initiatives, NGO initiatives Africa, education initiative Nigeria, empowerment programs Africa, healthcare initiative Nigeria, nonprofit community initiatives, charity programs Africa";
?>
<?php require_once 'includes/header.php';?>

<section style="background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), 
             url('assets/img/initiatives/empower.jpg');" class="hero-banner2">
  <div class="container">
    <div class="hero-content2">

     

      <!-- heading and subtitle -->
      <h1 class="display-4 fw-bold mb-3 text-white">
        Empowerment
      </h1>

      <p style="font-size: 14px" class="fs- mb-4 text-white">
      We empower youths, women, and families through skills acquisition, entrepreneurship
       training, small business support, and leadership development.
      </p>

      <!-- share button -->
      <!--<button class="hero-share d-inline-flex align-items-center">
        <i class="bi bi-share"></i>
        Share
      </button>-->

    </div>
  </div>
</section>



   <section class="py-5">
    <div class="container">
        <div class="row g-4">
            <!-- main content -->
            <div class="col-lg-8">

                <p class="mb-3">
             Sustainable change begins when individuals gain the skills and resources to support themselves.
            At Onyemachi Foundation, we equip youths and families in Nigeria and South Africa with skills, resources, and opportunities
            for financial independence, with a vision to impact the entire African continent.
                </p>

               

                <!-- why section -->
                <h3 style="font-weight: 900" class="mb-3">The Need for Empowerment</h3>
                <p class="mb-4">
              Many individuals in underserved communities lack access to economic opportunities, vocational 
              training, and the support needed to start or grow a business. This leads to cycles of unemployment,
               dependency, and limited growth.
                </p>
                <p class="mb-4"> Empowerment provides a pathway out of poverty. When people gain skills, confidence, and financial independence, they uplift not only themselves but their families and entire communities.
                     It becomes the foundation for long-term stability, leadership, and community transformation.</p>

                <!-- objectives -->
                <h3 style="font-weight: 900" class="mb-3">Our Approach</h3>
                <!--<p class="mb-4">
                   
                </p>-->

                <div class="row g-3 mb-5">
                     <div class="col-md-6">
                            <div class="objective-card h-100">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="objective-icon">
                                        <i class="fa-solid fa-circle-check"></i>
                                    </div>
                                    <h6 class="fw-semibold mb-1">Skills Acquisition Programs</h6>
                                </div>

                                <p class="text-muted mb-0 mt-1">
                                 We provide hands-on training in vocational and digital skills to help individuals become employable or start their own businesses
                                </p>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="objective-card h-100">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="objective-icon">
                                        <i class="fa-solid fa-circle-check"></i>
                                    </div>
                                    <h6 class="fw-semibold mb-1">Entrepreneurship & Business Training</h6>
                                </div>

                                <p class="text-muted mb-0 mt-1">
                                 We offer workshops on business development, financial literacy, marketing, and leadership to nurture confident entrepreneurs
                                </p>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="objective-card h-100">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="objective-icon">
                                        <i class="fa-solid fa-circle-check"></i>
                                    </div>
                                    <h6 class="fw-semibold mb-1">Small Business Support</h6>
                                </div>

                                <p class="text-muted mb-0 mt-1">
                                    We assist startups and micro-enterprises with resources, tools, and sometimes seed funding to help them grow sustainably.
                                </p>

                            </div>
                        </div>

                          <div class="col-md-6">
                            <div class="objective-card h-100">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="objective-icon">
                                        <i class="fa-solid fa-circle-check"></i>
                                    </div>
                                    <h6 class="fw-semibold mb-1">Youth & Women Empowerment Initiatives</h6>
                                </div>

                                <p class="text-muted mb-0 mt-1">
                                    We create targeted programs that support women and young people in unlocking their full potential.
                                 </p>
                            </div>
                        </div>
                </div>

              <!-- call to action banner -->
                <div class="cta-banner p-4 p-md-5">
                    <div class="row align-items-center">
                        <div class="col-md-9 mb-3 mb-md-0">
                            <h5 class="fw-bold mb-2 text-white">Join Us</h5>
                            <p class="text-white">
                               Help us build a future where more Africans can thrive independently.
                                You can partner with us, donate, volunteer your expertise, or support a training program. 
                                Together, we can empower dreams and build stronger communities.
                            </p>
                        </div>
                          <div class="btn-wrap mt-30">
                                <a href="contact.php" class="th-btn">Visit Contribution Page<i class="fas fa-arrow-up-right ms-2"></i></a>
                         </div>
                        
                    </div>
                </div>

            </div>

            <!-- sidebar -->
            <div class="col-lg-4">
                <div class="sidebar-card p-4 mb-4 ">
                    <h6 class="fw-bold mb-3">Other Initiatives</h6>
                   <ul class="list-unstyled sidebar-list mb-3">
                        <li>
                            <a href="education.php">
                                <i class="fa-solid fa-circle-check me-2 text-theme"></i>
                                Education
                            </a>
                        </li>
                        <li>
                            <a href="healthcare.php">
                                <i class="fa-solid fa-circle-check me-2 text-theme"></i>
                                Healthcare
                            </a>
                        </li>
                    </ul>

                    <hr>
                    <h6 class="fw-bold mt-3 mb-1">Need Help</h6>
                    <p class="text-muted mb-2">
                        Contact us for more information about this specific program.
                    </p>
                    <a href="#" class="fw-semibold text-theme text-decoration-none">
                        Contact Us
                        <span class="ms-1">&rarr;</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>