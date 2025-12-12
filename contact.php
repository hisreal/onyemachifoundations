<?php
$current_page = basename($_SERVER['PHP_SELF']);
$current_dir  = basename(dirname($_SERVER['PHP_SELF']));
$title = "Contact Onyemachi Foundation – Reach Our Team Today";
$description = "Get in touch with Onyemachi Foundation for enquiries, partnerships, volunteer opportunities, or support. Our team is committed to responding and working with individuals, donors, and communities to drive meaningful change.";
$keywords = "Contact Onyemachi Foundation, NGO contact Nigeria, charity enquiries Africa, partner with NGO, volunteer opportunities Nigeria, foundation support, nonprofit communication Africa";
?>
<?php require_once 'includes/header.php';?>

<section class="py-5">
  <div class="container">

    <!-- heading -->
    <div class="text-center mb-5">
          <h2 class="sec-title text-center">
            Get in Touch
            </h2>
     
      <p class="text-muted mb-0">
        Whether you want to volunteer, partner with us, or make a donation,
        we would love to hear from you.
      </p>
    </div>

    <div class="row g-4">

      <!-- left column -->
      <div class="col-lg-6">

        <!-- contact info card -->
        <div class="contact-card p-4 mb-4">
          <h5 class="fw-bold mb-4">Contact Information</h5>

          <div class="d-flex align-items-start mb-3">
            <div class="contact-icon-circle">
              <i class="fa-solid fa-location-dot"></i>
            </div>
            <div>
              <div class="fw-semibold">Headquarters</div>
              <div class="text-muted">-------------</div>
            </div>
          </div>

          <div class="d-flex align-items-start mb-3">
            <div class="contact-icon-circle">
              <i class="fa-solid fa-phone"></i>
            </div>
            <div>
              <div class="fw-semibold">Phone</div>
              <div class="text-muted">-------------</div>
            </div>
          </div>

          <div class="d-flex align-items-start">
            <div class="contact-icon-circle">
              <i class="fa-solid fa-envelope"></i>
            </div>
            <div>
              <div class="fw-semibold">Email</div>
              <div style="font-size: 14px" class="text-muted">contact@onyemachifoundation.com</div>
            </div>
          </div>
        </div>

        <!-- bank details card -->
        <!--<div class="bank-card p-4">
          <h5 class="fw-bold mb-2">Bank Transfer Details</h5>
          <p class="mb-4">
            Direct donations can be made to our official account.
          </p>

          <table class="table table-borderless mb-0">
            <tbody>
              <tr>
                <td>Bank Name:</td>
                <td class="text-end">Zenith Bank</td>
              </tr>
              <tr>
                <td>Account Name:</td>
                <td class="text-end text-info">Martins Vincent Otse Initiative</td>
              </tr>
              <tr>
                <td>Account Number:</td>
                <td class="text-end">1313679008</td>
              </tr>
            </tbody>
          </table>
        </div>-->

      </div>

      <!-- right column: form -->
      <div class="col-lg-6">
            <div class="contact-form-v2 contact-page-form form-card p-4 mb-4">
                 
                            <form action="" method="POST" class="contact-form">

                                <div class="row">
                                     <h5 class="fw-bold mb-4">Send us a Message</h5>
                                    <div class="form-group style-border col-12">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                    </div>
                                    <div class="form-group style-border col-12">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
                                    </div>
                                   
                                    <div class="form-group style-border col-12">
                                        <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Type Your Message"></textarea>
                                    </div>
                                    <div class="form-btn col-12">
                                        <button class="th-btn">Send Message</button>
                                    </div>
                                </div>
                                <p class="form-messages mb-0 mt-3"></p>
                            </form>
                        
        </div>
      </div>

    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
