<?php
$pageTitle = "Home";
require_once __DIR__ . "/includes/header.php";
?>

<section class="hero">
  <div class="container hero-grid">
    <div class="reveal">
      <p class="pill">Construction • Project Management • Safety Supply</p>
      <h1>We deliver projects that feel calm, controlled, and safe.</h1>
      <p class="lead">
        From pre-construction planning to on-site execution, we focus on quality, schedule and cost discipline.
      </p>

      <div class="hero-actions">
        <a class="btn" href="<?= e(url('contact.php')) ?>">Request a Quote</a>
        <a class="btn btn-ghost" href="<?= e(url('portfolio.php')) ?>">View Project Gallery</a>
      </div>

      <div class="hero-metrics">
        <div class="metric">
          <strong>Safety-first</strong>
          <span class="muted">Site culture & compliance</span>
        </div>
        <div class="metric">
          <strong>Full delivery</strong>
          <span class="muted">Plan → Build → Handover</span>
        </div>
        <div class="metric">
          <strong>Transparent</strong>
          <span class="muted">Clear reporting & control</span>
        </div>
      </div>
    </div>

    <div class="hero-media reveal" data-delay="120">
      <div class="media-card hero-media-card">
        <div class="img-placeholder hero-image-frame">
          <img src="<?= e(url('constructionman2.png')) ?>" alt="Construction team on-site work" loading="eager" />
        </div>
        <div class="media-caption">
          <span class="dot"></span>
          <p class="muted">Project showcase with site-focused visuals and delivery quality.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head reveal">
      <h2>What we offer</h2>
      <p class="muted">Simple categories, clear outcomes.</p>
    </div>

    <div class="cards">
      <a class="card reveal" href="<?= e(url('services.php')) ?>">
        <h3>Pre-Construction</h3>
        <p class="muted">Budgeting, scheduling, feasibility, and practical planning.</p>
        <span class="card-link">Explore</span>
      </a>

      <a class="card reveal" data-delay="60" href="<?= e(url('services.php#general')) ?>">
        <h3>General Construction</h3>
        <p class="muted">On-site delivery with hands-on supervision and quality control.</p>
        <span class="card-link">Explore</span>
      </a>

      <a class="card reveal" data-delay="120" href="<?= e(url('services.php#management')) ?>">
        <h3>Management Services</h3>
        <p class="muted">Construction, program, and project management support.</p>
        <span class="card-link">Explore</span>
      </a>

      <a class="card reveal" data-delay="180" href="<?= e(url('safety-supplies.php')) ?>">
        <h3>Safety Equipment Supply</h3>
        <p class="muted">PPE and site safety essentials — reliable, ready, compliant.</p>
        <span class="card-link">Explore</span>
      </a>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="split">
      <div class="reveal">
        <h2>Built on trust, teamwork, and integrity</h2>
        <p class="muted">
          We aim to “think, demand and deliver safety” and build strong client relationships through
          honest execution and continuous improvement.
        </p>
        <p class="tiny muted">
          (Values and service scope are taken from the company profile.)
        </p>
      </div>

      <div class="reveal" data-delay="120">
        <div class="mini-gallery">
          <div class="img-placeholder"><img src="<?= e(url('building2.png')) ?>" alt="Building project image one" loading="lazy" /></div>
          <div class="img-placeholder"><img src="<?= e(url('constructionman1.jpg')) ?>" alt="Construction supervision image" loading="lazy" /></div>
          <div class="img-placeholder"><img src="<?= e(url('building3.png')) ?>" alt="Building project image two" loading="lazy" /></div>
          <div class="img-placeholder"><img src="<?= e(url('interior.png')) ?>" alt="Interior construction image" loading="lazy" /></div>
          <div class="img-placeholder is-plain"><img src="<?= e(url('safetygoggles1.png')) ?>" alt="Safety goggles image" loading="lazy" /></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container cta reveal">
    <div>
      <h2>Tell us what you’re building.</h2>
      <p class="muted">We’ll respond with a clear next step and a practical plan.</p>
    </div>
    <a class="btn" href="<?= e(url('contact.php')) ?>">Start an Inquiry</a>
  </div>
</section>

<?php require_once __DIR__ . "/includes/footer.php"; ?>
