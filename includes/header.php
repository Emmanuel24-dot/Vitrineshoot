<?php
if (!defined('SITE_ROOT')) define('SITE_ROOT', rtrim(dirname(dirname(__FILE__)), '/\\'));
if (!defined('SITE_URL')) {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    define('SITE_URL', $protocol . '://' . $_SERVER['HTTP_HOST'] . '/Vitrineshoot');
}

$page_title    = isset($page_title)    ? $page_title    : 'VitrineSHOOT – Agence Créative Premium';
$page_desc     = isset($page_desc)     ? $page_desc     : 'Agence spécialisée en photographie professionnelle, shooting photo, réalisation de clips vidéo, design graphique, branding, community management et couverture d\'événements.';
$page_keywords = isset($page_keywords) ? $page_keywords : 'photographie, shooting photo, clip vidéo, design graphique, branding, logo, identité visuelle, community management, couverture événement';
$current_page  = isset($current_page)  ? $current_page  : '';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= htmlspecialchars($page_desc) ?>">
  <meta name="keywords" content="<?= htmlspecialchars($page_keywords) ?>">
  <meta name="robots" content="index, follow">
  <meta property="og:title" content="<?= htmlspecialchars($page_title) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($page_desc) ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= SITE_URL ?>">
  <meta name="twitter:card" content="summary_large_image">
  <title><?= htmlspecialchars($page_title) ?></title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="<?= SITE_URL ?>/assets/css/style.css" rel="stylesheet">
</head>
<body>

<!-- LOADER -->
<div id="loader">
  <div class="loader-logo text-gradient">VS<span style="color:var(--red)">.</span></div>
  <div class="loader-bar"><div class="loader-progress"></div></div>
  <div style="font-size:0.75rem;color:var(--gray);letter-spacing:0.1em;text-transform:uppercase;">Chargement...</div>
</div>

<!-- NAVBAR -->
<nav id="mainNav" class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="<?= SITE_URL ?>/index.php">
      <div class="brand-logo">VS</div>
      <span>Vitrine<span class="brand-vs">SHOOT</span><span class="brand-dot">.</span></span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav align-items-lg-center gap-lg-1">
        <li class="nav-item"><a class="nav-link <?= $current_page === 'home' ? 'active' : '' ?>" href="<?= SITE_URL ?>/index.php">Accueil</a></li>
        <li class="nav-item"><a class="nav-link <?= $current_page === 'about' ? 'active' : '' ?>" href="<?= SITE_URL ?>/pages/about.php">À propos</a></li>
        <li class="nav-item"><a class="nav-link <?= $current_page === 'services' ? 'active' : '' ?>" href="<?= SITE_URL ?>/pages/services.php">Services</a></li>
        <li class="nav-item"><a class="nav-link <?= $current_page === 'portfolio' ? 'active' : '' ?>" href="<?= SITE_URL ?>/pages/portfolio.php">Portfolio</a></li>
        <li class="nav-item"><a class="nav-link <?= $current_page === 'pricing' ? 'active' : '' ?>" href="<?= SITE_URL ?>/pages/pricing.php">Tarifs</a></li>
        <li class="nav-item"><a class="nav-link <?= $current_page === 'blog' ? 'active' : '' ?>" href="<?= SITE_URL ?>/pages/blog.php">Blog</a></li>
        <li class="nav-item"><a class="nav-link <?= $current_page === 'testimonials' ? 'active' : '' ?>" href="<?= SITE_URL ?>/pages/testimonials.php">Avis</a></li>
        <li class="nav-item"><a class="nav-link <?= $current_page === 'faq' ? 'active' : '' ?>" href="<?= SITE_URL ?>/pages/faq.php">FAQ</a></li>
        <li class="nav-item ms-lg-2">
          <a class="btn-primary-custom" href="<?= SITE_URL ?>/pages/contact.php">
            <i class="bi bi-envelope-fill"></i><span>Contact</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
