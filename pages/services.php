<?php
$page_title = 'Services – VitrineSHOOT | Photo, Vidéo, Design & Branding';
$page_desc  = 'Découvrez tous nos services créatifs : shooting photo professionnel, clips vidéo, design graphique, logo, branding, community management et couverture d\'événements.';
$current_page = 'services';
require_once '../includes/header.php';
?>

<!-- PAGE HEADER -->
<div class="page-header">
  <div class="container">
    <div class="breadcrumb-custom mb-3 reveal">
      <a href="<?= SITE_URL ?>/index.php">Accueil</a>
      <span class="sep">/</span>
      <span>Services</span>
    </div>
    <div class="section-tag reveal"><i class="bi bi-grid-fill"></i> Ce que nous offrons</div>
    <h1 class="page-header-title reveal">Nos <span class="text-gradient">Services</span></h1>
    <p style="color:var(--gray);max-width:600px;font-size:1.05rem;" class="reveal">
      Une offre complète de services créatifs pour couvrir tous vos besoins en communication visuelle, de la photo au branding en passant par la vidéo.
    </p>
  </div>
</div>

<div class="gradient-divider"></div>

<!-- PHOTO SERVICES -->
<section class="section-padding">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <div class="section-tag"><i class="bi bi-camera-fill"></i> Photographie</div>
      <h2 class="section-title">Services <span class="text-gradient">Photo</span></h2>
    </div>
    <div class="row g-4">
      <?php
      $photo_services = [
        ['icon'=>'bi-person-fill','title'=>'Shooting Portrait','desc'=>'Portraits professionnels et artistiques capturés avec un sens aigu de la lumière et de la mise en scène pour sublimer votre personnalité.','tags'=>['Studio','Extérieur','Retouche incluse']],
        ['icon'=>'bi-building','title'=>'Photographie Corporate','desc'=>'Photos de dirigeants, équipes, locaux et événements d\'entreprise pour une communication professionnelle et impactante.','tags'=>['Team building','Portraits CEO','Locaux']],
        ['icon'=>'bi-balloon-heart-fill','title'=>'Photographie de Mariage','desc'=>'Immortalisez les plus beaux moments de votre grand jour avec un regard artistique unique et discret, pour des souvenirs éternels.','tags'=>['Cérémonie','Réception','Album luxe']],
        ['icon'=>'bi-box-seam-fill','title'=>'Photo Produits','desc'=>'Mettez en valeur vos produits avec des photos packshot et lifestyle de haute qualité, idéales pour e-commerce et catalogues.','tags'=>['E-commerce','Packshot','Lifestyle']],
        ['icon'=>'bi-music-note-beamed','title'=>'Photographie d\'Artistes','desc'=>'Séances photo créatives pour musiciens, comédiens, mannequins : construisez votre image artistique avec impact.','tags'=>['Presse','Réseaux sociaux','Promo']],
        ['icon'=>'bi-trophy-fill','title'=>'Couverture Événements','desc'=>'Conférences, concerts, galas, anniversaires : chaque instant de vos événements mémorisé avec talent et discrétion.','tags'=>['Live','Gala','Conférence']],
      ];
      foreach ($photo_services as $i => $s): ?>
      <div class="col-lg-4 col-md-6 reveal delay-<?= ($i % 3) + 1 ?>">
        <div class="service-card h-100">
          <div class="service-icon service-icon-green"><i class="bi <?= $s['icon'] ?>"></i></div>
          <h4><?= $s['title'] ?></h4>
          <p><?= $s['desc'] ?></p>
          <div class="d-flex flex-wrap gap-2 mt-3">
            <?php foreach($s['tags'] as $tag): ?>
            <span style="background:rgba(22,163,74,0.1);border:1px solid rgba(22,163,74,0.2);color:var(--green);padding:3px 10px;border-radius:50px;font-size:0.73rem;font-weight:600;"><?= $tag ?></span>
            <?php endforeach; ?>
          </div>
          <a href="<?= SITE_URL ?>/pages/contact.php" class="service-link mt-3">Demander un devis <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div class="gradient-divider"></div>

<!-- VIDEO SERVICES -->
<section class="section-padding bg-dark-2">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <div class="section-tag"><i class="bi bi-camera-video-fill"></i> Production Vidéo</div>
      <h2 class="section-title">Services <span class="text-gradient">Vidéo</span></h2>
    </div>
    <div class="row g-4">
      <?php
      $video_services = [
        ['icon'=>'bi-music-note-list','title'=>'Clips Musicaux','desc'=>'Des clips cinématiques qui captivent votre audience et donnent vie à votre musique avec une réalisation artistique de haut niveau.','tags'=>['4K','Cinématique','Effets spéciaux']],
        ['icon'=>'bi-camera-video-fill','title'=>'Captation Vidéo','desc'=>'Captation multi-caméras de vos événements, conférences, concerts et cérémonies avec un rendu professionnel impeccable.','tags'=>['Multi-cam','Live stream','HD/4K']],
        ['icon'=>'bi-scissors','title'=>'Montage Vidéo','desc'=>'Montage professionnel, color grading, effets visuels et sonorisation pour un rendu final qui dépasse vos attentes.','tags'=>['Color grading','Étalonnage','Son']],
        ['icon'=>'bi-building-fill','title'=>'Vidéo Institutionnelle','desc'=>'Présentez votre entreprise, vos valeurs et votre équipe à travers des films corporate engageants et professionnels.','tags'=>['Film entreprise','Interview','Drone']],
        ['icon'=>'bi-play-btn-fill','title'=>'Motion Design','desc'=>'Animations, génériques, effets visuels et vidéos explicatives animées pour un contenu dynamique et moderne.','tags'=>['2D/3D','Animations','Explainer']],
        ['icon'=>'bi-broadcast-pin','title'=>'Vidéo Réseaux Sociaux','desc'=>'Reels Instagram, TikTok, YouTube Shorts optimisés pour maximiser l\'engagement et la visibilité de votre contenu.','tags'=>['Reels','TikTok','Shorts']],
      ];
      foreach ($video_services as $i => $s): ?>
      <div class="col-lg-4 col-md-6 reveal delay-<?= ($i % 3) + 1 ?>">
        <div class="service-card h-100">
          <div class="service-icon service-icon-orange"><i class="bi <?= $s['icon'] ?>"></i></div>
          <h4><?= $s['title'] ?></h4>
          <p><?= $s['desc'] ?></p>
          <div class="d-flex flex-wrap gap-2 mt-3">
            <?php foreach((is_array($s['tags']) ? $s['tags'] : explode(',', $s['tags'])) as $tag): ?>
            <span style="background:rgba(249,115,22,0.1);border:1px solid rgba(249,115,22,0.2);color:var(--red);padding:3px 10px;border-radius:50px;font-size:0.73rem;font-weight:600;"><?= trim($tag) ?></span>
            <?php endforeach; ?>
          </div>
          <a href="<?= SITE_URL ?>/pages/contact.php" class="service-link mt-3" style="color:var(--red);">Demander un devis <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div class="gradient-divider"></div>

<!-- DESIGN SERVICES -->
<section class="section-padding">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <div class="section-tag"><i class="bi bi-palette-fill"></i> Design & Branding</div>
      <h2 class="section-title">Services <span class="text-gradient">Graphiques</span></h2>
    </div>
    <div class="row g-4">
      <?php
      $design_services = [
        ['icon'=>'bi-vector-pen','title'=>'Création de Logo','desc'=>'Un logo unique, mémorable et intemporel qui incarne l\'âme de votre marque et se démarque dans votre secteur.','tags'=>['Vectoriel','Multi-formats','Variations']],
        ['icon'=>'bi-shield-fill-check','title'=>'Identité Visuelle','desc'=>'Charte graphique complète : logo, couleurs, typographies, patterns et guidelines pour une image de marque cohérente.','tags'=>['Charte','Brand book','Guidelines']],
        ['icon'=>'bi-megaphone-fill','title'=>'Affiches Publicitaires','desc'=>'Affiches grand format, banners et visuels publicitaires percutants qui attirent l\'œil et communiquent efficacement.','tags'=>['Grand format','Digital','Print']],
        ['icon'=>'bi-file-earmark-text-fill','title'=>'Flyers & Brochures','desc'=>'Supports print élégants et impactants : flyers, brochures, catalogues et dépliants au design professionnel.','tags'=>['A5/A4','Recto-verso','Finitions']],
        ['icon'=>'bi-briefcase-fill','title'=>'Branding Complet','desc'=>'Stratégie de marque complète : positionnement, identité, guidelines et déploiement sur tous vos supports.','tags'=>['Stratégie','Naming','Déploiement']],
        ['icon'=>'bi-printer-fill','title'=>'Print & Communication','desc'=>'Cartes de visite, kakémonos, bâches, roll-up et tous supports de communication imprimés de qualité professionnelle.','tags'=>['Cartes','Kakémono','Roll-up']],
      ];
      foreach ($design_services as $i => $s): ?>
      <div class="col-lg-4 col-md-6 reveal delay-<?= ($i % 3) + 1 ?>">
        <div class="service-card h-100">
          <div class="service-icon service-icon-red"><i class="bi <?= $s['icon'] ?>"></i></div>
          <h4><?= $s['title'] ?></h4>
          <p><?= $s['desc'] ?></p>
          <div class="d-flex flex-wrap gap-2 mt-3">
            <?php foreach($s['tags'] as $tag): ?>
            <span style="background:rgba(220,38,38,0.1);border:1px solid rgba(220,38,38,0.2);color:var(--red);padding:3px 10px;border-radius:50px;font-size:0.73rem;font-weight:600;"><?= $tag ?></span>
            <?php endforeach; ?>
          </div>
          <a href="<?= SITE_URL ?>/pages/contact.php" class="service-link mt-3" style="color:var(--red);">Demander un devis <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- DIGITAL SERVICES -->
<section class="section-padding bg-dark-2">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <div class="section-tag"><i class="bi bi-phone-fill"></i> Digital & Social Media</div>
      <h2 class="section-title">Services <span class="text-gradient">Digitaux</span></h2>
    </div>
    <div class="row g-4 justify-content-center">
      <?php
      $digital_services = [
        ['icon'=>'bi-people-fill','title'=>'Community Management','desc'=>'Gestion professionnelle de vos pages Facebook, Instagram, TikTok et LinkedIn : stratégie de contenu, publications, interactions et reporting mensuel.','tags'=>['Instagram','Facebook','TikTok','LinkedIn']],
        ['icon'=>'bi-image-fill','title'=>'Création de Contenu','desc'=>'Photos, vidéos, stories, reels et visuels créatifs optimisés pour chaque plateforme et conçus pour maximiser l\'engagement de votre audience.','tags'=>['Stories','Reels','Carrousels','Visuels']],
        ['icon'=>'bi-bar-chart-fill','title'=>'Stratégie Social Media','desc'=>'Audit, stratégie et calendrier éditorial pour développer votre présence en ligne, augmenter votre audience et générer des leads qualifiés.','tags'=>['Audit','Stratégie','Reporting','KPIs']],
      ];
      foreach ($digital_services as $i => $s): ?>
      <div class="col-lg-4 col-md-6 reveal delay-<?= $i + 1 ?>">
        <div class="service-card h-100">
          <div class="service-icon service-icon-white"><i class="bi <?= $s['icon'] ?>"></i></div>
          <h4><?= $s['title'] ?></h4>
          <p><?= $s['desc'] ?></p>
          <div class="d-flex flex-wrap gap-2 mt-3">
            <?php foreach($s['tags'] as $tag): ?>
            <span style="background:rgba(255,255,255,0.07);border:1px solid rgba(255,255,255,0.12);color:rgba(255,255,255,0.7);padding:3px 10px;border-radius:50px;font-size:0.73rem;font-weight:600;"><?= $tag ?></span>
            <?php endforeach; ?>
          </div>
          <a href="<?= SITE_URL ?>/pages/contact.php" class="service-link mt-3">Demander un devis <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="section-padding-sm" style="background:linear-gradient(135deg,rgba(22,163,74,0.1),rgba(249,115,22,0.05));border-top:1px solid var(--border);">
  <div class="container text-center reveal">
    <h2 class="section-title mb-3">Vous avez un projet<span class="text-orange"> ?</span></h2>
    <p style="color:var(--gray);margin-bottom:32px;max-width:500px;margin-left:auto;margin-right:auto;">Parlez-nous de votre projet et obtenez un devis personnalisé gratuitement sous 24h.</p>
    <a href="<?= SITE_URL ?>/pages/contact.php" class="btn-primary-custom me-3">
      <i class="bi bi-file-earmark-text-fill"></i><span>Demander un devis gratuit</span>
    </a>
    <a href="<?= SITE_URL ?>/pages/pricing.php" class="btn-outline-custom">
      <i class="bi bi-tag-fill"></i><span>Voir les tarifs</span>
    </a>
  </div>
</section>

<?php require_once '../includes/footer.php'; ?>
