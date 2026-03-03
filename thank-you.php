<?php
$pageTitle = "Thank you";
require_once __DIR__ . "/includes/header.php";
?>

<section class="page-hero">
  <div class="container">
    <div class="reveal">
      <h1>Inquiry received</h1>
      <p class="lead">Thanks — we’ll get back to you shortly.</p>
      <a class="btn" href="<?= e(url('index.php')) ?>">Back to Home</a>
    </div>
  </div>
</section>

<?php require_once __DIR__ . "/includes/footer.php"; ?>
