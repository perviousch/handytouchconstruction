<?php
$pageTitle = "Safety Equipment Supply";
require_once __DIR__ . "/includes/header.php";
?>

<section class="page-hero">
  <div class="container">
    <div class="reveal">
      <h1>Safety Equipment Supply</h1>
      <p class="lead">PPE and site safety essentials — supplied fast, documented properly.</p>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="split">
      <div class="reveal">
        <h2>What we supply</h2>
        <p class="muted">
          We support safe work culture with reliable safety equipment supply—ideal for contractors,
          sites, schools, factories, and facility maintenance teams.
        </p>

        <div class="chips">
          <span class="chip">Hard hats</span>
          <span class="chip">Hi-vis wear</span>
          <span class="chip">Safety boots</span>
          <span class="chip">Gloves</span>
          <span class="chip">Goggles</span>
          <span class="chip">Harnesses</span>
          <span class="chip">Reflective cones</span>
          <span class="chip">Fire extinguishers</span>
        </div>

        <a class="btn" href="<?= e(url('contact.php')) ?>">Request a Safety Quote</a>
      </div>

      <div class="reveal" data-delay="120">
        <div class="img-placeholder tall">
          <img src="<?= e(url('Safety-Equipment.png')) ?>" alt="Safety equipment showcase" loading="lazy" />
        </div>
      </div>
    </div>

    <div class="section-head reveal" style="margin-top:28px;">
      <h2>Featured categories</h2>
      <p class="muted">Hover to feel the motion — clean, not flat.</p>
    </div>

    <div class="cards">
      <div class="card reveal">
        <h3>PPE</h3>
        <p class="muted">Head, eye, hand, and foot protection.</p>
        <div class="img-placeholder"><img src="<?= e(url('worksafetyequipment.jpg')) ?>" alt="Personal protective equipment related image" loading="lazy" /></div>
      </div>

      <div class="card reveal" data-delay="60">
        <h3>Working at Height</h3>
        <p class="muted">Harnesses, lanyards, lifelines, anchors.</p>
        <div class="img-placeholder"><img src="<?= e(url('constructionman2.png')) ?>" alt="Working at height safety image" loading="lazy" /></div>
      </div>

      <div class="card reveal" data-delay="120">
        <h3>Site Control</h3>
        <p class="muted">Cones, barriers, signs, demarcation.</p>
        <div class="img-placeholder"><img src="<?= e(url('safetygoggles1.png')) ?>" alt="Site control and demarcation image" loading="lazy" /></div>
      </div>

      <div class="card reveal" data-delay="180">
        <h3>Fire & Emergency</h3>
        <p class="muted">Extinguishers, first aid, evacuation essentials.</p>
        <div class="img-placeholder"><img src="<?= e(url('worksafetyequipment2.jpg')) ?>" alt="Fire and emergency safety image" loading="lazy" /></div>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . "/includes/footer.php"; ?>
