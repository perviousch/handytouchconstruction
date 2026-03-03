<?php
$pageTitle = "Portfolio";
require_once __DIR__ . "/includes/header.php";
?>

<section class="page-hero">
  <div class="container">
    <div class="reveal">
      <h1>Project gallery</h1>
      <p class="lead">A layout designed for visuals — add as many images as you want.</p>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="gallery-controls reveal">
      <button class="pill-btn is-active" data-filter="all">All</button>
      <button class="pill-btn" data-filter="buildings">Buildings</button>
      <button class="pill-btn" data-filter="renovation">Renovations</button>
      <button class="pill-btn" data-filter="civil">Civil Works</button>
      <button class="pill-btn" data-filter="maintenance">Maintenance</button>
    </div>

    <div class="masonry">
      <?php for ($i=1; $i<=12; $i++):
        $tag = ["buildings","renovation","civil","maintenance"][($i-1)%4];
        $images = [
          "building1.png",
          "building2.png",
          "building3.png",
          "interior.png",
          "exteriorwalldesign.png",
          "constructionman1.jpg",
          "constructionman2.png",
          "building1.png",
          "building2.png",
          "constructionman2.png",
          "worksafetyequipment.jpg",
          "worksafetyequipment2.jpg"
        ];
        $image = $images[($i-1) % count($images)];
      ?>
        <figure class="tile reveal" data-tag="<?= e($tag) ?>">
          <div class="img-placeholder">
            <img src="<?= e(url($image)) ?>" alt="Project gallery image <?= $i ?>" loading="lazy" />
          </div>
          <figcaption>
            <strong>Project Title <?= $i ?></strong>
            <span class="muted">Category: <?= e(ucfirst($tag)) ?></span>
          </figcaption>
        </figure>
      <?php endfor; ?>
    </div>
  </div>
</section>

<?php require_once __DIR__ . "/includes/footer.php"; ?>
