<?php
$pageTitle = "About";
require_once __DIR__ . "/includes/header.php";
?>

<section class="page-hero">
  <div class="container">
    <div class="reveal">
      <h1>About us</h1>
      <p class="lead">
        Handy Touch Construction Limited was registered and incorporated in Zambia in May 2024.
      </p>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="split">
      <div class="reveal">
        <h2>Company snapshot</h2>
        <p class="muted">
          We provide a full range of pre-construction, construction, and project management services,
          supported by disciplined planning, reporting, and control systems.
        </p>

        <ul class="bullets">
          <li>Pre-construction planning & coordination</li>
          <li>General construction delivery</li>
          <li>Construction / Program / Project management</li>
          <li>Safety-led site culture</li>
        </ul>
      </div>

      <div class="reveal" data-delay="120">
        <div class="img-placeholder tall">
          <img src="<?= e(url('interior.png')) ?>" alt="Handy Touch Construction team project site" loading="lazy" />
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . "/includes/footer.php"; ?>
