<?php
$pageTitle = "Contact";
require_once __DIR__ . "/includes/header.php";
?>

<section class="page-hero contact-page-hero">
  <div class="container">
    <div class="reveal">
      <h1>Inquiries</h1>
      <p class="lead">Tell us what you need — we’ll keep it simple and respond fast.</p>
    </div>
  </div>
</section>

<section class="section contact-section">
  <div class="container">
    <div class="split">
      <div class="reveal">
        <h2>Request a quote</h2>
        <form class="form" method="post" action="<?= e(url('contact-submit.php')) ?>" novalidate>
          <div class="form-row">
            <label>Full name</label>
            <input name="name" type="text" placeholder="Your name" required />
          </div>

          <div class="form-row">
            <label>Phone</label>
            <input name="phone" type="tel" placeholder="+260..." required />
          </div>

          <div class="form-row">
            <label>Email (optional)</label>
            <input name="email" type="email" placeholder="name@email.com" />
          </div>

          <div class="form-row">
            <label>Inquiry type</label>
            <select name="type" required>
              <option value="">Select</option>
              <option>Pre-Construction</option>
              <option>General Construction</option>
              <option>Construction Management</option>
              <option>Program Management</option>
              <option>Project Management</option>
              <option>Design & Build</option>
              <option>Safety Equipment Supply</option>
            </select>
          </div>

          <div class="form-row">
            <label>Message</label>
            <textarea name="message" rows="5" placeholder="Short details: location, scope, timeline..." required></textarea>
          </div>

          <div class="form-row">
            <label class="check">
              <input type="checkbox" name="consent" value="1" required />
              <span>I confirm these details are correct.</span>
            </label>
          </div>

          <button class="btn" type="submit">Send Inquiry</button>
          <p class="tiny muted">No long paragraphs. Just the essentials.</p>
        </form>
      </div>

      <div class="reveal" data-delay="120">
        <div class="card card-soft">
          <h3>Direct contact</h3>
          <p class="muted">
            Lusaka, Zambia<br>
            +260 962 317 515<br>
            +260 976 227 477<br>
            +260 953 544 695
          </p>
          <div class="img-placeholder">
            <img src="<?= e(url('exteriorwalldesign.png')) ?>" alt="Office and project location visual" loading="lazy" />
          </div>
          <p class="tiny muted">Update email + address here when ready.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . "/includes/footer.php"; ?>
