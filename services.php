<?php
$pageTitle = "Services";
require_once __DIR__ . "/includes/header.php";
?>

<section class="page-hero">
  <div class="container">
    <div class="reveal">
      <h1>Services</h1>
      <p class="lead">Clear services, professional delivery. No noise.</p>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="service-grid">
      <article class="service-card reveal">
        <h2>Pre-Construction</h2>
        <p class="muted">Studies, advice on methods, schedule + budget control, and team alignment.</p>
        <div class="img-placeholder"><img src="<?= e(url('constructionman1.jpg')) ?>" alt="Pre-construction planning site image" loading="lazy" /></div>
      </article>

      <article id="general" class="service-card reveal" data-delay="60">
        <h2>General Construction</h2>
        <p class="muted">Hands-on supervision from start to finish, with cost and quality control.</p>
        <div class="img-placeholder"><img src="<?= e(url('constructionman2.png')) ?>" alt="General construction site image" loading="lazy" /></div>
      </article>

      <article id="management" class="service-card reveal" data-delay="120">
        <h2>Construction Management</h2>
        <p class="muted">Cost control, scheduling coordination, quality control, and document control.</p>
        <div class="img-placeholder"><img src="<?= e(url('worksafetyequipment2.jpg')) ?>" alt="Construction management interior site image" loading="lazy" /></div>
      </article>

      <article class="service-card reveal" data-delay="180">
        <h2>Program Management</h2>
        <p class="muted">Overseeing the wider program scope beyond site work where required.</p>
        <div class="img-placeholder"><img src="<?= e(url('worksafetyequipment.jpg')) ?>" alt="Program management project image" loading="lazy" /></div>
      </article>

      <article class="service-card reveal" data-delay="240">
        <h2>Project Management</h2>
        <p class="muted">Coordination to deliver on time, on budget, and to the required standard.</p>
        <div class="img-placeholder"><img src="<?= e(url('safetygoggles1.png')) ?>" alt="Project management exterior wall design image" loading="lazy" /></div>
      </article>

      <article class="service-card reveal" data-delay="300">
        <h2>Design & Build</h2>
        <p class="muted">Single-source delivery integrating design + construction for speed and clarity.</p>
        <div class="img-placeholder"><img src="<?= e(url('Safety-Equipment.png')) ?>" alt="Design and build construction image" loading="lazy" /></div>
      </article>
    </div>
  </div>
</section>

<?php require_once __DIR__ . "/includes/footer.php"; ?>
