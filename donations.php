<?php
$current_page = basename($_SERVER['PHP_SELF']);
$current_dir  = basename(dirname($_SERVER['PHP_SELF']));
$title = "Donate to Onyemachi Foundation – Support Education, Healthcare and Empowerment";
$description = "Your donation helps Onyemachi Foundation provide education, healthcare services, youth empowerment, and community development across Africa. Give today and make a lasting impact in the lives of children, youths, and families.";
$keywords = "Donate Onyemachi Foundation, support Nigerian charity, give to NGO Africa, education donations Nigeria, healthcare donations Africa, empowerment charity support, nonprofit fundraising Nigeria";
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

    

    <!-- return button -->
    <a href="index.php" class="return-btn d-inline-flex align-items-center shadow">
      <i class="fa-solid fa-arrow-left"></i>
      Return to Home
    </a>

  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
