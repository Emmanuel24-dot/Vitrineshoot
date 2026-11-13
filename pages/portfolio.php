<?php
$page_title = 'Portfolio – VitrineSHOOT | Nos Réalisations Créatives';
$page_desc  = 'Découvrez notre portfolio : photos professionnelles, clips vidéo, logos, affiches, branding et couvertures d\'événements réalisés par VitrineSHOOT.';
$current_page = 'portfolio';
require_once '../includes/header.php';
?>

<!-- PAGE HEADER -->
<div class="page-header">
  <div class="container">
    <div class="breadcrumb-custom mb-3 reveal">
      <a href="<?= SITE_URL ?>/index.php">Accueil</a>
      <span class="sep">/</span>
      <span>Portfolio</span>
    </div>
    <div class="section-tag reveal"><i class="bi bi-images"></i> Nos réalisations</div>
    <h1 class="page-header-title reveal">Notre <span class="text-gradient">Portfolio</span></h1>
    <p style="color:var(--gray);max-width:600px;font-size:1.05rem;" class="reveal">
      Explorez nos réalisations : chaque projet raconte une histoire unique créée avec passion et expertise.
    </p>
  </div>
</div>

<div class="gradient-divider"></div>

<!-- PORTFOLIO -->
<section class="section-padding">
  <div class="container">
    <!-- Filters -->
    <div class="portfolio-filter reveal mb-5">
      <button class="filter-btn active" data-filter="*">Tout voir</button>
      <button class="filter-btn" data-filter="photo"><i class="bi bi-camera-fill me-1"></i>Photos</button>
      <button class="filter-btn" data-filter="video"><i class="bi bi-film me-1"></i>Clips Vidéo</button>
      <button class="filter-btn" data-filter="logo"><i class="bi bi-vector-pen me-1"></i>Logos</button>
      <button class="filter-btn" data-filter="design"><i class="bi bi-palette-fill me-1"></i>Affiches</button>
      <button class="filter-btn" data-filter="branding"><i class="bi bi-shield-fill-check me-1"></i>Branding</button>
      <button class="filter-btn" data-filter="events"><i class="bi bi-balloon-heart-fill me-1"></i>Événements</button>
    </div>

    <!-- Grid -->
    <div class="portfolio-grid">
      <?php
      $portfolio = [
        // Photos
        ['cat'=>'photo','title'=>'Portrait Artistique — Studio Noir','sub'=>'Shooting Photo','icon'=>'bi-camera-fill','bg1'=>'rgba(22,163,74,0.3)','bg2'=>'rgba(10,15,30,0.9)'],
        ['cat'=>'photo','title'=>'Corporate Team Shooting','sub'=>'Photo Corporate','icon'=>'bi-briefcase-fill','bg1'=>'rgba(249,115,22,0.2)','bg2'=>'rgba(10,15,30,0.85)'],
        ['cat'=>'photo','title'=>'Mariage Romantique','sub'=>'Photographie de Mariage','icon'=>'bi-balloon-heart-fill','bg1'=>'rgba(220,38,38,0.2)','bg2'=>'rgba(10,15,30,0.85)'],
        ['cat'=>'photo','title'=>'Packshot Cosmétiques','sub'=>'Photo Produits','icon'=>'bi-box-seam-fill','bg1'=>'rgba(22,163,74,0.15)','bg2'=>'rgba(10,15,30,0.9)'],
        // Video
        ['cat'=>'video','title'=>'Clip Afrobeat — Skyfire','sub'=>'Réalisation Clip Vidéo','icon'=>'bi-music-note-beamed','bg1'=>'rgba(249,115,22,0.3)','bg2'=>'rgba(10,15,30,0.9)'],
        ['cat'=>'video','title'=>'Film Institutionnel TechCorp','sub'=>'Vidéo Corporate','icon'=>'bi-play-btn-fill','bg1'=>'rgba(220,38,38,0.2)','bg2'=>'rgba(10,15,30,0.85)'],
        ['cat'=>'video','title'=>'Motion Design — Logo Reveal','sub'=>'Motion Design','icon'=>'bi-layers-fill','bg1'=>'rgba(22,163,74,0.2)','bg2'=>'rgba(10,15,30,0.9)'],
        // Logos
        ['cat'=>'logo','title'=>'Logo TechVision Pro','sub'=>'Création de Logo','icon'=>'bi-vector-pen','bg1'=>'rgba(249,115,22,0.2)','bg2'=>'rgba(10,15,30,0.85)'],
        ['cat'=>'logo','title'=>'Logo Restaurant Saveurs','sub'=>'Création de Logo','icon'=>'bi-cup-hot-fill','bg1'=>'rgba(220,38,38,0.2)','bg2'=>'rgba(10,15,30,0.9)'],
        ['cat'=>'logo','title'=>'Logo Cabinet Médical','sub'=>'Création de Logo','icon'=>'bi-heart-pulse-fill','bg1'=>'rgba(22,163,74,0.2)','bg2'=>'rgba(10,15,30,0.85)'],
        // Design
        ['cat'=>'design','title'=>'Affiche Festival Urban','sub'=>'Design Affiche','icon'=>'bi-megaphone-fill','bg1'=>'rgba(22,163,74,0.2)','bg2'=>'rgba(10,15,30,0.9)'],
        ['cat'=>'design','title'=>'Flyer Concert Gospel','sub'=>'Design Flyer','icon'=>'bi-music-note-list','bg1'=>'rgba(249,115,22,0.2)','bg2'=>'rgba(10,15,30,0.85)'],
        // Branding
        ['cat'=>'branding','title'=>'Branding Café Pure','sub'=>'Identité Visuelle Complète','icon'=>'bi-cup-fill','bg1'=>'rgba(220,38,38,0.2)','bg2'=>'rgba(10,15,30,0.9)'],
        ['cat'=>'branding','title'=>'Branding Agence Immo','sub'=>'Brand Identity','icon'=>'bi-house-fill','bg1'=>'rgba(22,163,74,0.2)','bg2'=>'rgba(10,15,30,0.85)'],
        // Events
        ['cat'=>'events','title'=>'Conférence Internationale CI','sub'=>'Couverture Événement','icon'=>'bi-people-fill','bg1'=>'rgba(249,115,22,0.2)','bg2'=>'rgba(10,15,30,0.9)'],
        ['cat'=>'events','title'=>'Gala de Fin d\'Année','sub'=>'Couverture Événement','icon'=>'bi-trophy-fill','bg1'=>'rgba(220,38,38,0.2)','bg2'=>'rgba(10,15,30,0.85)'],
        ['cat'=>'events','title'=>'Concert Live Festival','sub'=>'Couverture Concert','icon'=>'bi-music-note-beamed','bg1'=>'rgba(22,163,74,0.2)','bg2'=>'rgba(10,15,30,0.9)'],
        ['cat'=>'events','title'=>'Anniversaire Luxe','sub'=>'Couverture Événement','icon'=>'bi-balloon-heart-fill','bg1'=>'rgba(249,115,22,0.2)','bg2'=>'rgba(10,15,30,0.85)'],
      ];
      foreach ($portfolio as $i => $p): ?>
      <div class="portfolio-item reveal" data-category="<?= $p['cat'] ?>">
        <div style="width:100%;height:100%;background:linear-gradient(135deg,<?= $p['bg1'] ?>,<?= $p['bg2'] ?>);display:flex;flex-direction:column;align-items:center;justify-content:center;gap:12px;border:1px solid var(--border);border-radius:var(--radius);">
          <i class="bi <?= $p['icon'] ?>" style="font-size:3rem;color:white;opacity:0.35;"></i>
          <span style="font-size:0.75rem;color:rgba(255,255,255,0.2);text-transform:uppercase;letter-spacing:0.1em;">Image de projet</span>
        </div>
        <div class="portfolio-overlay">
          <div class="portfolio-info">
            <h5><?= $p['title'] ?></h5>
            <span><?= $p['sub'] ?></span>
          </div>
        </div>
        <div class="portfolio-item-icon"><i class="bi bi-zoom-in"></i></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="section-padding-sm bg-dark-2" style="border-top:1px solid var(--border);">
  <div class="container text-center reveal">
    <h2 class="section-title mb-3">Votre projet dans notre <span class="text-gradient">portfolio</span></h2>
    <p style="color:var(--gray);margin-bottom:32px;">Devenez notre prochain client satisfait. Contactez-nous pour discuter de votre projet.</p>
    <a href="<?= SITE_URL ?>/pages/contact.php" class="btn-primary-custom me-3">
      <i class="bi bi-send-fill"></i><span>Démarrer un projet</span>
    </a>
    <a href="<?= SITE_URL ?>/pages/pricing.php" class="btn-outline-custom">
      <i class="bi bi-tag-fill"></i><span>Voir les tarifs</span>
    </a>
  </div>
</section>

<?php require_once '../includes/footer.php'; ?>
