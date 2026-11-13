<?php
$page_title = 'Tarifs – VitrineSHOOT | Formules et Prix';
$page_desc  = 'Découvrez nos formules et tarifs : Shooting Basic, Shooting Premium, Pack Mariage, Clip Vidéo, Branding Complet et Offres Entreprise.';
$current_page = 'pricing';
require_once '../includes/header.php';
?>

<!-- PAGE HEADER -->
<div class="page-header">
  <div class="container">
    <div class="breadcrumb-custom mb-3 reveal">
      <a href="<?= SITE_URL ?>/index.php">Accueil</a>
      <span class="sep">/</span>
      <span>Tarifs</span>
    </div>
    <div class="section-tag reveal"><i class="bi bi-tag-fill"></i> Nos formules</div>
    <h1 class="page-header-title reveal">Tarifs <span class="text-gradient">transparents</span></h1>
    <p style="color:var(--gray);max-width:600px;font-size:1.05rem;" class="reveal">
      Des formules claires et flexibles pour tous vos projets créatifs. Aucune surprise, qualité garantie.
    </p>
  </div>
</div>

<div class="gradient-divider"></div>

<!-- PHOTO PRICING -->
<section class="section-padding">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <div class="section-tag"><i class="bi bi-camera-fill"></i> Photographie</div>
      <h2 class="section-title">Formules <span class="text-gradient">Photo</span></h2>
    </div>
    <div class="row g-4 justify-content-center">
      <?php
      $photo_plans = [
        ['icon'=>'bi-camera','name'=>'Shooting Basic','price'=>'150','unit'=>' 000 FCFA','desc'=>'Idéal pour un portrait ou shooting individuel rapide','features'=>[
          ['ok'=>true,'text'=>'2 heures de shooting'],
          ['ok'=>true,'text'=>'20 photos retouchées HD'],
          ['ok'=>true,'text'=>'Livraison en 48h'],
          ['ok'=>true,'text'=>'1 tenue incluse'],
          ['ok'=>true,'text'=>'Galerie privée en ligne'],
          ['ok'=>false,'text'=>'Maquillage/coiffure'],
          ['ok'=>false,'text'=>'Drone'],
        ],'featured'=>false,'color'=>'green'],
        ['icon'=>'bi-stars','name'=>'Shooting Premium','price'=>'280','unit'=>' 000 FCFA','desc'=>'La formule complète pour un shooting professionnel','features'=>[
          ['ok'=>true,'text'=>'Journée complète (8h)'],
          ['ok'=>true,'text'=>'60 photos retouchées HD'],
          ['ok'=>true,'text'=>'Livraison en 72h'],
          ['ok'=>true,'text'=>'3 tenues incluses'],
          ['ok'=>true,'text'=>'Galerie privée en ligne'],
          ['ok'=>true,'text'=>'Maquillage/coiffure inclus'],
          ['ok'=>false,'text'=>'Drone'],
        ],'featured'=>true,'color'=>'orange'],
        ['icon'=>'bi-balloon-heart-fill','name'=>'Pack Mariage','price'=>'650','unit'=>' 000 FCFA','desc'=>'Immortalisez chaque instant de votre grand jour','features'=>[
          ['ok'=>true,'text'=>'Couverture complète (12h)'],
          ['ok'=>true,'text'=>'300+ photos retouchées'],
          ['ok'=>true,'text'=>'Livraison en 7 jours'],
          ['ok'=>true,'text'=>'2 photographes'],
          ['ok'=>true,'text'=>'Album photo luxe inclus'],
          ['ok'=>true,'text'=>'Drone inclus'],
          ['ok'=>true,'text'=>'Clip vidéo 3min inclus'],
        ],'featured'=>false,'color'=>'red'],
      ];
      foreach ($photo_plans as $i => $plan): ?>
      <div class="col-lg-4 col-md-6 reveal delay-<?= $i + 1 ?>">
        <div class="pricing-card <?= $plan['featured'] ? 'featured' : '' ?> h-100">
          <?php if($plan['featured']): ?><div class="featured-badge">POPULAIRE</div><?php endif; ?>
          <div class="pricing-icon" style="<?= $plan['color']==='orange' ? 'background:rgba(249,115,22,0.15);color:var(--red)' : ($plan['color']==='red' ? 'background:rgba(220,38,38,0.15);color:var(--red)' : '') ?>">
            <i class="bi <?= $plan['icon'] ?>"></i>
          </div>
          <div class="pricing-name"><?= $plan['name'] ?></div>
          <div class="pricing-price"><?= $plan['price'] ?><span><?= $plan['unit'] ?></span></div>
          <p class="pricing-desc"><?= $plan['desc'] ?></p>
          <div class="pricing-features">
            <?php foreach($plan['features'] as $f): ?>
            <div class="pricing-feature <?= !$f['ok'] ? 'unavailable' : '' ?>">
              <i class="bi <?= $f['ok'] ? 'bi-check-circle-fill' : 'bi-x-circle-fill' ?>"></i>
              <?= $f['text'] ?>
            </div>
            <?php endforeach; ?>
          </div>
          <a href="<?= SITE_URL ?>/pages/contact.php?plan=<?= urlencode($plan['name']) ?>" class="<?= $plan['featured'] ? 'btn-orange-custom' : 'btn-primary-custom' ?> w-100 justify-content-center">
            <i class="bi bi-calendar-check-fill"></i><span>Réserver</span>
          </a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div class="gradient-divider"></div>

<!-- VIDEO PRICING -->
<section class="section-padding bg-dark-2">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <div class="section-tag"><i class="bi bi-camera-video-fill"></i> Production Vidéo</div>
      <h2 class="section-title">Formules <span class="text-gradient">Vidéo</span></h2>
    </div>
    <div class="row g-4 justify-content-center">
      <?php
      $video_plans = [
        ['icon'=>'bi-phone-fill','name'=>'Clip Court','price'=>'350','unit'=>' 000 FCFA','desc'=>'Clip ou vidéo courte de 1 à 2 minutes','features'=>[
          ['ok'=>true,'text'=>'1-2 minutes finales'],
          ['ok'=>true,'text'=>'Tournage 1 journée'],
          ['ok'=>true,'text'=>'Montage professionnel'],
          ['ok'=>true,'text'=>'Color grading inclus'],
          ['ok'=>true,'text'=>'1 round de révisions'],
          ['ok'=>false,'text'=>'Drone'],
          ['ok'=>false,'text'=>'Effets spéciaux avancés'],
        ],'featured'=>false,'color'=>'green'],
        ['icon'=>'bi-film','name'=>'Clip Pro','price'=>'600','unit'=>' 000 FCFA','desc'=>'Production complète avec effets et drone','features'=>[
          ['ok'=>true,'text'=>'3-5 minutes finales'],
          ['ok'=>true,'text'=>'Tournage 2-3 jours'],
          ['ok'=>true,'text'=>'Montage avancé'],
          ['ok'=>true,'text'=>'Color grading cinéma'],
          ['ok'=>true,'text'=>'Drone inclus'],
          ['ok'=>true,'text'=>'3 rounds de révisions'],
          ['ok'=>true,'text'=>'Effets spéciaux de base'],
        ],'featured'=>true,'color'=>'orange'],
        ['icon'=>'bi-play-btn-fill','name'=>'Production Cinéma','price'=>'1 200','unit'=>' 000 FCFA','desc'=>'Production haute gamme avec équipe complète','features'=>[
          ['ok'=>true,'text'=>'Court-métrage jusqu\'à 10min'],
          ['ok'=>true,'text'=>'Équipe complète (8 pers.)'],
          ['ok'=>true,'text'=>'Caméra cinema 4K/6K'],
          ['ok'=>true,'text'=>'Drone + rig spécialisé'],
          ['ok'=>true,'text'=>'Effets VFX inclus'],
          ['ok'=>true,'text'=>'Mix audio professionnel'],
          ['ok'=>true,'text'=>'Révisions illimitées'],
        ],'featured'=>false,'color'=>'red'],
      ];
      foreach ($video_plans as $i => $plan): ?>
      <div class="col-lg-4 col-md-6 reveal delay-<?= $i + 1 ?>">
        <div class="pricing-card <?= $plan['featured'] ? 'featured' : '' ?> h-100">
          <?php if($plan['featured']): ?><div class="featured-badge">POPULAIRE</div><?php endif; ?>
          <div class="pricing-icon" style="<?= $plan['color']==='orange' ? 'background:rgba(249,115,22,0.15);color:var(--red)' : ($plan['color']==='red' ? 'background:rgba(220,38,38,0.15);color:var(--red)' : '') ?>">
            <i class="bi <?= $plan['icon'] ?>"></i>
          </div>
          <div class="pricing-name"><?= $plan['name'] ?></div>
          <div class="pricing-price"><?= $plan['price'] ?><span><?= $plan['unit'] ?></span></div>
          <p class="pricing-desc"><?= $plan['desc'] ?></p>
          <div class="pricing-features">
            <?php foreach($plan['features'] as $f): ?>
            <div class="pricing-feature <?= !$f['ok'] ? 'unavailable' : '' ?>">
              <i class="bi <?= $f['ok'] ? 'bi-check-circle-fill' : 'bi-x-circle-fill' ?>"></i>
              <?= $f['text'] ?>
            </div>
            <?php endforeach; ?>
          </div>
          <a href="<?= SITE_URL ?>/pages/contact.php?plan=<?= urlencode($plan['name']) ?>" class="<?= $plan['featured'] ? 'btn-orange-custom' : 'btn-primary-custom' ?> w-100 justify-content-center">
            <i class="bi bi-calendar-check-fill"></i><span>Réserver</span>
          </a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div class="gradient-divider"></div>

<!-- BRANDING PRICING -->
<section class="section-padding">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <div class="section-tag"><i class="bi bi-shield-fill-check"></i> Design & Branding</div>
      <h2 class="section-title">Formules <span class="text-gradient">Branding</span></h2>
    </div>
    <div class="row g-4 justify-content-center">
      <?php
      $brand_plans = [
        ['icon'=>'bi-vector-pen','name'=>'Logo Essential','price'=>'75','unit'=>' 000 FCFA','desc'=>'Logo professionnel avec 3 propositions','features'=>[
          ['ok'=>true,'text'=>'3 concepts de logo'],
          ['ok'=>true,'text'=>'Format vectoriel (AI/SVG)'],
          ['ok'=>true,'text'=>'Versions couleur/noir'],
          ['ok'=>true,'text'=>'2 révisions incluses'],
          ['ok'=>false,'text'=>'Charte graphique'],
          ['ok'=>false,'text'=>'Brand book'],
        ],'featured'=>false,'color'=>'green'],
        ['icon'=>'bi-palette-fill','name'=>'Branding Starter','price'=>'200','unit'=>' 000 FCFA','desc'=>'Logo + identité visuelle de base','features'=>[
          ['ok'=>true,'text'=>'Logo premium + variantes'],
          ['ok'=>true,'text'=>'Palette de couleurs'],
          ['ok'=>true,'text'=>'Typographies choisies'],
          ['ok'=>true,'text'=>'Charte graphique 20p.'],
          ['ok'=>true,'text'=>'Carte de visite incluse'],
          ['ok'=>false,'text'=>'Brand book complet'],
        ],'featured'=>true,'color'=>'orange'],
        ['icon'=>'bi-shield-fill-check','name'=>'Branding Complet','price'=>'500','unit'=>' 000 FCFA','desc'=>'Identité complète, du logo au brand book','features'=>[
          ['ok'=>true,'text'=>'Logo premium + 10 variantes'],
          ['ok'=>true,'text'=>'Charte graphique 60p.'],
          ['ok'=>true,'text'=>'Brand book complet'],
          ['ok'=>true,'text'=>'Templates réseaux sociaux'],
          ['ok'=>true,'text'=>'Supports print (5 types)'],
          ['ok'=>true,'text'=>'Révisions illimitées'],
        ],'featured'=>false,'color'=>'red'],
      ];
      foreach ($brand_plans as $i => $plan): ?>
      <div class="col-lg-4 col-md-6 reveal delay-<?= $i + 1 ?>">
        <div class="pricing-card <?= $plan['featured'] ? 'featured' : '' ?> h-100">
          <?php if($plan['featured']): ?><div class="featured-badge">POPULAIRE</div><?php endif; ?>
          <div class="pricing-icon" style="<?= $plan['color']==='orange' ? 'background:rgba(249,115,22,0.15);color:var(--red)' : ($plan['color']==='red' ? 'background:rgba(220,38,38,0.15);color:var(--red)' : '') ?>">
            <i class="bi <?= $plan['icon'] ?>"></i>
          </div>
          <div class="pricing-name"><?= $plan['name'] ?></div>
          <div class="pricing-price"><?= $plan['price'] ?><span><?= $plan['unit'] ?></span></div>
          <p class="pricing-desc"><?= $plan['desc'] ?></p>
          <div class="pricing-features">
            <?php foreach($plan['features'] as $f): ?>
            <div class="pricing-feature <?= !$f['ok'] ? 'unavailable' : '' ?>">
              <i class="bi <?= $f['ok'] ? 'bi-check-circle-fill' : 'bi-x-circle-fill' ?>"></i>
              <?= $f['text'] ?>
            </div>
            <?php endforeach; ?>
          </div>
          <a href="<?= SITE_URL ?>/pages/contact.php?plan=<?= urlencode($plan['name']) ?>" class="<?= $plan['featured'] ? 'btn-orange-custom' : 'btn-primary-custom' ?> w-100 justify-content-center">
            <i class="bi bi-calendar-check-fill"></i><span>Commencer</span>
          </a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ENTERPRISE -->
<section class="section-padding-sm bg-dark-2" style="border-top:1px solid var(--border);">
  <div class="container">
    <div class="reveal" style="background:linear-gradient(135deg,rgba(22,163,74,0.15),rgba(249,115,22,0.08));border:1px solid rgba(22,163,74,0.3);border-radius:var(--radius);padding:50px;text-align:center;">
      <div class="section-tag mx-auto mb-4"><i class="bi bi-building"></i> Offre Entreprise</div>
      <h2 class="section-title mb-4">Solutions <span class="text-gradient">sur mesure</span> pour entreprises</h2>
      <p style="color:var(--gray);max-width:600px;margin:0 auto 32px;line-height:1.8;">
        Vous êtes une entreprise avec des besoins récurrents ? Bénéficiez d'un contrat mensuel personnalisé incluant un chef de projet dédié, des tarifs préférentiels et une disponibilité prioritaire.
      </p>
      <div class="row g-3 justify-content-center mb-4">
        <?php
        $enterprise_features = ['Manager dédié','Tarifs négociés','Disponibilité prioritaire','Contrat mensuel','Facturation adaptée','Reporting détaillé'];
        foreach ($enterprise_features as $f): ?>
        <div class="col-auto">
          <span style="background:rgba(22,163,74,0.12);border:1px solid rgba(22,163,74,0.25);color:var(--green-light);padding:8px 16px;border-radius:50px;font-size:0.85rem;font-weight:600;display:inline-flex;align-items:center;gap:6px;">
            <i class="bi bi-check-circle-fill" style="font-size:0.8rem;"></i><?= $f ?>
          </span>
        </div>
        <?php endforeach; ?>
      </div>
      <a href="<?= SITE_URL ?>/pages/contact.php?plan=entreprise" class="btn-primary-custom me-3">
        <i class="bi bi-telephone-fill"></i><span>Discuter de votre projet</span>
      </a>
      <a href="mailto:contact@vitrineshoot.com" class="btn-outline-custom">
        <i class="bi bi-envelope-fill"></i><span>Envoyer un email</span>
      </a>
    </div>
  </div>
</section>

<!-- NOTE -->
<section class="section-padding-sm" style="border-top:1px solid var(--border);">
  <div class="container text-center reveal">
    <i class="bi bi-info-circle" style="font-size:2rem;color:var(--green);margin-bottom:16px;display:block;"></i>
    <h4 style="font-size:1.1rem;margin-bottom:12px;">Bon à savoir</h4>
    <p style="color:var(--gray);max-width:700px;margin:0 auto;line-height:1.9;font-size:0.9rem;">
      Tous nos tarifs sont indicatifs et peuvent être adaptés selon la complexité de votre projet. Un devis personnalisé et gratuit vous sera fourni sous 24h après consultation. Les tarifs sont en Francs CFA (FCFA). Des options de paiement en plusieurs fois sont disponibles.
    </p>
  </div>
</section>

<?php require_once '../includes/footer.php'; ?>
