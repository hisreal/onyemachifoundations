<?php
$current_page = basename($_SERVER['PHP_SELF']);
$current_dir  = basename(dirname($_SERVER['PHP_SELF']));
$title = "Our Projects | Onyemachi Foundation - Education, Healthcare and Community Impact";
$description = "Explore ongoing and completed projects by Onyemachi Foundation. From school support and medical outreach to skills empowerment and rural development, our initiatives create measurable impact in communities across Africa.";
$keywords = "Onyemachi Foundation projects, NGO projects Africa, charity work Nigeria, education projects Africa, healthcare outreach projects, empowerment initiatives Nigeria, community development projects";
?>
<?php require_once 'includes/header.php';?>

<section class="py-5" style="background:#f9fbfc; min-height: 75vh;">
  <div class="container text-center">

    <!-- top icon -->
    <div class="coming-icon-wrapper mb-4">
      <i class="fa-solid fa-hammer"></i>
    </div>

    <!-- heading -->
    <h1 style="font-weight: 900" class=" display-5 mb-2">Coming Soon</h1>

    <h4 class="fw-semibold mb-4" style="color:#006b72;">
      We are documenting our impact.
    </h4>

    <p class="text-muted mb-5" style="max-width:700px; margin:auto; line-height:1.7;">
      Our team is currently compiling detailed case studies, timelines,
      and success stories from our ongoing initiatives across Nigeria.
      This page will be updated shortly with comprehensive project data.
    </p>

    <!-- return button -->
    <a href="index.php" class="return-btn d-inline-flex align-items-center shadow">
      <i class="fa-solid fa-arrow-left"></i>
      Return to Home
    </a>

  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
