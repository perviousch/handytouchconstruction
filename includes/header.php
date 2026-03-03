<?php
require_once __DIR__ . '/functions.php';

$siteName = "Handy Touch Construction Ltd";
$tagline  = "Build smart. Deliver safely.";
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title><?= e($siteName) ?><?= isset($pageTitle) ? " — " . e($pageTitle) : "" ?></title>
  <meta name="description" content="Construction, project management, and safety equipment supply." />
  <link rel="stylesheet" href="<?= e(url('assets/css/style.css?v=8')) ?>" />
</head>
<body>
  <a class="skip-link" href="#main">Skip to content</a>

  <header class="site-header">
    <div class="container header-inner">
      <a class="brand" href="<?= e(url('index.php')) ?>">
        <span class="brand-mark">
          <img src="<?= e(url('logo.png')) ?>" alt="Handy Touch Construction logo" loading="eager" />
        </span>
        <span class="brand-text">
          <strong><?= e($siteName) ?></strong>
          <small><?= e($tagline) ?></small>
        </span>
      </a>

      <button class="nav-toggle" aria-label="Open menu" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>

      <nav class="nav" data-nav>
        <a href="<?= e(url('about.php')) ?>">About</a>
        <a href="<?= e(url('services.php')) ?>">Services</a>
        <a href="<?= e(url('safety-supplies.php')) ?>">Safety Supply</a>
        <a href="<?= e(url('portfolio.php')) ?>">Portfolio</a>
        <a class="btn btn-sm" href="<?= e(url('contact.php')) ?>">Get a Quote</a>
      </nav>
    </div>
  </header>

  <div class="progress" aria-hidden="true"><span class="progress-bar" data-progress></span></div>

  <main id="main">
