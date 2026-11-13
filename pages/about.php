<?php
$page_title = 'À propos – VitrineSHOOT | Notre Histoire & Équipe';
$page_desc  = 'Découvrez l\'histoire, la mission, la vision et l\'équipe passionnée de VitrineSHOOT, votre agence créative premium.';
$current_page = 'about';
require_once '../includes/header.php';
?>

<!-- PAGE HEADER -->
<div class="page-header">
  <div class="container">
    <div class="breadcrumb-custom mb-3 reveal">
      <a href="<?= SITE_URL ?>/index.php">Accueil</a>
      <span class="sep">/</span>
      <span>À propos</span>
    </div>
    <div class="section-tag reveal"><i class="bi bi-info-circle-fill"></i> Notre histoire</div>
    <h1 class="page-header-title reveal"><span class="text-gradient">Qui sommes-nous ?</span></h1>
    <p style="color:var(--gray);max-width:550px;font-size:1.05rem;" class="reveal">Une agence créative passionnée, fondée sur l'excellence et l'amour du travail bien fait.</p>
  </div>
</div>

<div class="gradient-divider"></div>

<!-- HISTOIRE -->
<section class="section-padding">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6 reveal-left">
        <div class="about-img-wrapper" style="height:500px;background:linear-gradient(135deg,rgba(22,163,74,0.2),rgba(10,15,30,0.9));border:1px solid var(--border);border-radius:var(--radius);">
          <div style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;flex-direction:column;gap:20px;">
            <i class="bi bi-camera2" style="font-size:6rem;color:var(--green);opacity:0.6;"></i>
            <div style="text-align:center;">
              <div style="font-size:1.2rem;font-weight:700;color:white;">Studio VitrineSHOOT</div>
              <div style="color:var(--gray);font-size:0.9rem;">Abidjan, Côte d'Ivoire</div>
            </div>
          </div>
          <div class="about-img-badge">
            <div class="about-badge-num">8+</div>
            <div class="about-badge-text">Années<br>d'expérience</div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 reveal-right">
        <div class="section-tag"><i class="bi bi-book-fill"></i> Notre histoire</div>
        <h2 class="section-title">Née d'une passion<br><span class="text-gradient">pour la création</span></h2>
        <p style="color:var(--gray);line-height:1.9;margin-bottom:20px;">
          VitrineSHOOT a été fondée en 2018 par une équipe de photographes, vidéastes et designers passionnés avec une vision commune : rendre l'excellence créative accessible à tous, des entrepreneurs aux grandes entreprises.
        </p>
        <p style="color:var(--gray);line-height:1.9;margin-bottom:20px;">
          Partis de rien, nous avons bâti notre réputation sur la qualité irréprochable de nos livraisons, notre sens du détail et notre capacité à comprendre les besoins de chaque client pour créer des contenus qui leur ressemblent vraiment.
        </p>
        <p style="color:var(--gray);line-height:1.9;margin-bottom:32px;">
          Aujourd'hui, avec plus de 820 projets réalisés et 350 clients satisfaits à travers l'Afrique francophone, VitrineSHOOT s'impose comme la référence en matière de créativité visuelle premium.
        </p>
        <div class="row g-3">
          <div class="col-6">
            <div style="padding:20px;background:rgba(22,163,74,0.1);border:1px solid rgba(22,163,74,0.2);border-radius:12px;text-align:center;">
              <div style="font-size:2rem;font-weight:900;color:var(--green);">2018</div>
              <div style="font-size:0.8rem;color:var(--gray);">Année de fondation</div>
            </div>
          </div>
          <div class="col-6">
            <div style="padding:20px;background:rgba(249,115,22,0.1);border:1px solid rgba(249,115,22,0.2);border-radius:12px;text-align:center;">
              <div style="font-size:2rem;font-weight:900;color:var(--red);">15+</div>
              <div style="font-size:0.8rem;color:var(--gray);">Experts créatifs</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MISSION / VISION / VALEURS -->
<section class="section-padding bg-dark-2">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <div class="section-tag"><i class="bi bi-stars"></i> Nos fondations</div>
      <h2 class="section-title">Mission, Vision & <span class="text-gradient">Valeurs</span></h2>
    </div>

    <div class="row g-4">
      <div class="col-lg-4 reveal delay-1">
        <div class="service-card text-center h-100" style="border-top:3px solid var(--green);">
          <div class="service-icon service-icon-green mx-auto mb-4" style="width:80px;height:80px;font-size:2rem;">
            <i class="bi bi-bullseye"></i>
          </div>
          <h3 style="font-size:1.4rem;margin-bottom:16px;">Notre Mission</h3>
          <p style="color:var(--gray);line-height:1.9;">
            Donner vie aux visions créatives de nos clients en produisant des contenus visuels d'exception — photos, vidéos et designs — qui renforcent leur image, touchent leur audience et propulsent leur croissance.
          </p>
        </div>
      </div>
      <div class="col-lg-4 reveal delay-2">
        <div class="service-card text-center h-100" style="border-top:3px solid var(--red);">
          <div class="service-icon service-icon-orange mx-auto mb-4" style="width:80px;height:80px;font-size:2rem;">
            <i class="bi bi-eye-fill"></i>
          </div>
          <h3 style="font-size:1.4rem;margin-bottom:16px;">Notre Vision</h3>
          <p style="color:var(--gray);line-height:1.9;">
            Devenir l'agence créative de référence en Afrique francophone, reconnue pour l'excellence de ses productions, l'innovation de ses approches et l'impact durable de ses créations sur les marques.
          </p>
        </div>
      </div>
      <div class="col-lg-4 reveal delay-3">
        <div class="service-card text-center h-100" style="border-top:3px solid var(--red);">
          <div class="service-icon service-icon-red mx-auto mb-4" style="width:80px;height:80px;font-size:2rem;">
            <i class="bi bi-heart-fill"></i>
          </div>
          <h3 style="font-size:1.4rem;margin-bottom:16px;">Nos Valeurs</h3>
          <p style="color:var(--gray);line-height:1.9;">
            Excellence, créativité, intégrité, réactivité et passion. Ces valeurs guident chacune de nos décisions et se reflètent dans chaque projet que nous livrons à nos précieux clients.
          </p>
        </div>
      </div>
    </div>

    <!-- Values list -->
    <div class="row g-3 mt-4">
      <?php
      $values = [
        ['icon'=>'bi-gem','color'=>'green','title'=>'Excellence','desc'=>'Nous ne livrons que notre meilleur travail, toujours.'],
        ['icon'=>'bi-lightbulb-fill','color'=>'orange','title'=>'Innovation','desc'=>'Nous repoussons les limites créatives à chaque projet.'],
        ['icon'=>'bi-shield-check','color'=>'red','title'=>'Intégrité','desc'=>'Honnêteté et transparence dans toutes nos relations.'],
        ['icon'=>'bi-clock-fill','color'=>'white','title'=>'Ponctualité','desc'=>'Vos délais sont sacrés. Nous livrons toujours à temps.'],
        ['icon'=>'bi-people-fill','color'=>'green','title'=>'Collaboration','desc'=>'Votre succès est notre succès. Nous travaillons ensemble.'],
        ['icon'=>'bi-graph-up-arrow','color'=>'orange','title'=>'Impact','desc'=>'Chaque création doit générer des résultats mesurables.'],
      ];
      foreach ($values as $i => $v): ?>
      <div class="col-md-4 col-sm-6 reveal delay-<?= ($i % 3) + 1 ?>">
        <div class="value-card">
          <div class="value-icon" style="<?= $v['color']==='orange' ? 'background:rgba(249,115,22,0.15);color:var(--red)' : ($v['color']==='red' ? 'background:rgba(220,38,38,0.15);color:var(--red)' : ($v['color']==='white' ? 'background:rgba(255,255,255,0.08);color:white' : '')) ?>">
            <i class="bi <?= $v['icon'] ?>"></i>
          </div>
          <div>
            <h6 style="font-size:0.95rem;font-weight:700;margin-bottom:4px;color:white;"><?= $v['title'] ?></h6>
            <p style="font-size:0.83rem;color:var(--gray);margin:0;"><?= $v['desc'] ?></p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ÉQUIPE -->
<section class="section-padding">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <div class="section-tag"><i class="bi bi-people-fill"></i> L'équipe</div>
      <h2 class="section-title">Des talents au service<br><span class="text-gradient">de votre créativité</span></h2>
      <p class="section-subtitle mx-auto">Une équipe pluridisciplinaire unie par la passion du beau et l'exigence du résultat.</p>
    </div>

    <div class="row g-4">
      <?php
      $team = [
        ['name'=>'Désiré Konan','role'=>'Directeur Créatif & Fondateur','init'=>'DK','color'=>'#16A34A','icon'=>'bi-camera-fill'],
        ['name'=>'Afi Mensah','role'=>'Directrice Photo & Vidéo','init'=>'AM','color'=>'#F97316','icon'=>'bi-camera-video-fill'],
        ['name'=>'Yves Traoré','role'=>'Directeur Artistique & Design','init'=>'YT','color'=>'#DC2626','icon'=>'bi-palette-fill'],
        ['name'=>'Nina Coulibaly','role'=>'Responsable Community Mgmt','init'=>'NC','color'=>'#16A34A','icon'=>'bi-people-fill'],
        ['name'=>'Eric Bamba','role'=>'Vidéaste & Motion Designer','init'=>'EB','color'=>'#F97316','icon'=>'bi-film'],
        ['name'=>'Sandrine Ouattara','role'=>'Chargée de Communication','init'=>'SO','color'=>'#DC2626','icon'=>'bi-megaphone-fill'],
      ];
      foreach ($team as $i => $m): ?>
      <div class="col-lg-4 col-md-6 reveal delay-<?= ($i % 3) + 1 ?>">
        <div class="team-card">
          <div class="team-placeholder" style="background:linear-gradient(135deg,<?= $m['color'] ?>20,<?= $m['color'] ?>10);">
            <div style="width:100px;height:100px;border-radius:50%;background:<?= $m['color'] ?>25;display:flex;align-items:center;justify-content:center;border:3px solid <?= $m['color'] ?>40;">
              <span style="font-size:2.5rem;font-weight:900;color:<?= $m['color'] ?>;"><?= $m['init'] ?></span>
            </div>
          </div>
          <div class="team-info">
            <div class="team-name"><?= $m['name'] ?></div>
            <div class="team-role" style="color:<?= $m['color'] ?>;"><?= $m['role'] ?></div>
            <div class="social-links justify-content-center mt-3">
              <a href="#" class="social-link li" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
              <a href="#" class="social-link ig" title="Instagram"><i class="bi bi-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="section-padding-sm bg-dark-2" style="border-top:1px solid var(--border);">
  <div class="container text-center reveal">
    <h2 class="section-title mb-3">Prêt à collaborer<span class="text-orange"> ?</span></h2>
    <p style="color:var(--gray);margin-bottom:32px;">Rejoignez notre famille de clients satisfaits et donnez vie à vos projets créatifs.</p>
    <a href="<?= SITE_URL ?>/pages/contact.php" class="btn-primary-custom me-3">
      <i class="bi bi-send-fill"></i><span>Nous contacter</span>
    </a>
    <a href="<?= SITE_URL ?>/pages/portfolio.php" class="btn-outline-custom">
      <i class="bi bi-images"></i><span>Voir le portfolio</span>
    </a>
  </div>
</section>

<?php require_once '../includes/footer.php'; ?>
