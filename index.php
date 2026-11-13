<?php
$page_title = 'VitrineSHOOT – Agence Créative Premium | Photo, Vidéo & Design';
$page_desc  = 'Agence créative spécialisée en photographie professionnelle, clips vidéo, design graphique, branding et community management. Donnez vie à votre vision.';
$current_page = 'home';
require_once 'includes/header.php';
?>

<!-- ═══════════════════════════════════════
     HERO SECTION
════════════════════════════════════════ -->
<section class="hero-section">
  <div class="hero-shapes">
    <div class="shape shape-1"></div>
    <div class="shape shape-2"></div>
    <div class="shape shape-3"></div>
  </div>

  <div class="hero-video-bg">
    <div class="hero-img-fallback" style="background: linear-gradient(135deg, #0a0f1e 0%, #111827 40%, #0f2b1a 100%);"></div>
  </div>
  <div class="hero-overlay"></div>

  <div class="container hero-content">
    <div class="row align-items-center min-vh-100 py-5">
      <div class="col-lg-7">
        <div class="hero-eyebrow">
          <span class="dot"></span>
          Agence Créative Premium
          <span class="dot"></span>
        </div>

        <h1 class="hero-title animate-fade-up">
          Votre vision,<br>
          <span class="text-gradient">notre passion</span><br>
          créative<span class="text-red">.</span>
        </h1>

        <p class="hero-desc animate-fade-up" style="animation-delay:0.2s">
          Nous capturons l'instant parfait, créons des identités visuelles puissantes et racontons vos histoires à travers la photo, la vidéo et le design. Excellence et créativité au service de votre marque.
        </p>

        <div class="hero-cta animate-fade-up" style="animation-delay:0.4s">
          <a href="pages/contact.php?service=shooting" class="btn-primary-custom">
            <i class="bi bi-camera-fill"></i><span>Réserver un shooting</span>
          </a>
          <a href="pages/contact.php?service=devis" class="btn-red-custom">
            <i class="bi bi-file-earmark-text-fill"></i><span>Demander un devis</span>
          </a>
          <a href="pages/portfolio.php" class="btn-outline-custom">
            <i class="bi bi-play-circle-fill"></i><span>Voir le portfolio</span>
          </a>
        </div>

        <div class="hero-stats animate-fade-up" style="animation-delay:0.6s">
          <div>
            <div class="hero-stat-num"><span data-count="350" data-suffix="+">0+</span></div>
            <div class="hero-stat-label">Clients satisfaits</div>
          </div>
          <div style="width:1px;background:var(--border);"></div>
          <div>
            <div class="hero-stat-num"><span data-count="820" data-suffix="+">0+</span></div>
            <div class="hero-stat-label">Projets réalisés</div>
          </div>
          <div style="width:1px;background:var(--border);"></div>
          <div>
            <div class="hero-stat-num"><span data-count="8" data-suffix=" ans">0 ans</span></div>
            <div class="hero-stat-label">D'expérience</div>
          </div>
          <div style="width:1px;background:var(--border);"></div>
          <div>
            <div class="hero-stat-num"><span data-count="15" data-suffix="+">0+</span></div>
            <div class="hero-stat-label">Experts créatifs</div>
          </div>
        </div>
      </div>

      <div class="col-lg-5 d-none d-lg-flex justify-content-center align-items-center">
        <div style="position:relative;width:100%;max-width:440px;">
          <!-- Main visual placeholder -->
          <div class="float" style="
            width:100%;
            aspect-ratio:3/4;
            border-radius:24px;
            background:linear-gradient(135deg, rgba(22,163,74,0.2) 0%, rgba(220,38,38,0.1) 100%);
            border:1px solid var(--border);
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:8rem;
            position:relative;
            overflow:hidden;
          ">
            <i class="bi bi-camera2" style="color:rgba(22,163,74,0.5);"></i>
            <div style="position:absolute;inset:0;background:linear-gradient(to top, rgba(10,15,30,0.9) 0%, transparent 60%);"></div>
            <div style="position:absolute;bottom:24px;left:24px;right:24px;">
              <div style="font-size:0.8rem;color:rgba(255,255,255,0.6);margin-bottom:6px;">Projet récent</div>
              <div style="font-weight:700;color:white;font-size:1rem;">Shooting Corporate Abidjan</div>
              <div style="color:var(--green);font-size:0.83rem;font-weight:600;">Voir le projet →</div>
            </div>
          </div>

          <!-- Floating card 1 -->
          <div style="
            position:absolute; top:-20px; right:-30px;
            background:rgba(10,15,30,0.9); border:1px solid var(--border);
            border-radius:14px; padding:14px 18px; backdrop-filter:blur(10px);
            display:flex; align-items:center; gap:12px; min-width:160px;
          ">
            <div style="width:40px;height:40px;background:rgba(22,163,74,0.2);border-radius:10px;display:flex;align-items:center;justify-content:center;color:var(--green);font-size:1.1rem;">
              <i class="bi bi-star-fill"></i>
            </div>
            <div>
              <div style="font-size:1.2rem;font-weight:800;color:white;line-height:1;">4.9 / 5</div>
              <div style="font-size:0.75rem;color:var(--gray);">Note moyenne</div>
            </div>
          </div>

          <!-- Floating card 2 -->
          <div style="
            position:absolute; bottom:20px; left:-30px;
            background:linear-gradient(135deg,rgba(220,38,38,0.15),rgba(220,38,38,0.1));
            border:1px solid rgba(220,38,38,0.2);
            border-radius:14px; padding:14px 18px; backdrop-filter:blur(10px);
          ">
            <div style="font-size:0.75rem;color:rgba(255,255,255,0.6);margin-bottom:4px;">Projets ce mois</div>
            <div style="font-size:1.6rem;font-weight:800;color:var(--red);line-height:1;">+24 <span style="font-size:0.85rem;color:var(--gray)">livraisons</span></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="hero-scroll-indicator">
    <div class="scroll-wheel"><div class="scroll-dot"></div></div>
    <span>Défiler</span>
  </div>
</section>

<div class="gradient-divider"></div>

<!-- ═══════════════════════════════════════
     À PROPOS RAPIDE
════════════════════════════════════════ -->
<section class="section-padding bg-dark-2">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6 reveal-left">
        <div class="section-tag"><i class="bi bi-info-circle-fill"></i> Qui sommes-nous ?</div>
        <h2 class="section-title">Une agence créative<br><span class="text-gradient">passionnée et experte</span></h2>
        <p class="section-subtitle mb-4">
          Fondée avec la passion de sublimer vos projets, VitrineSHOOT est une agence créative à plein service qui allie technique, art et stratégie pour propulser votre image au sommet.
        </p>
        <div class="row g-3 mb-4">
          <div class="col-6">
            <div class="value-card">
              <div class="value-icon"><i class="bi bi-bullseye"></i></div>
              <div><h6 style="font-size:0.9rem;font-weight:700;margin-bottom:4px;">Mission</h6><p style="font-size:0.8rem;color:var(--gray);margin:0;">Donner vie à vos visions créatives</p></div>
            </div>
          </div>
          <div class="col-6">
            <div class="value-card">
              <div class="value-icon" style="background:rgba(220,38,38,0.15);color:var(--red);"><i class="bi bi-eye-fill"></i></div>
              <div><h6 style="font-size:0.9rem;font-weight:700;margin-bottom:4px;">Vision</h6><p style="font-size:0.8rem;color:var(--gray);margin:0;">Leader créatif en Afrique francophone</p></div>
            </div>
          </div>
          <div class="col-6">
            <div class="value-card">
              <div class="value-icon" style="background:rgba(220,38,38,0.15);color:var(--red);"><i class="bi bi-gem"></i></div>
              <div><h6 style="font-size:0.9rem;font-weight:700;margin-bottom:4px;">Excellence</h6><p style="font-size:0.8rem;color:var(--gray);margin:0;">Qualité premium sans compromis</p></div>
            </div>
          </div>
          <div class="col-6">
            <div class="value-card">
              <div class="value-icon" style="background:rgba(255,255,255,0.08);color:white;"><i class="bi bi-people-fill"></i></div>
              <div><h6 style="font-size:0.9rem;font-weight:700;margin-bottom:4px;">Équipe</h6><p style="font-size:0.8rem;color:var(--gray);margin:0;">15+ experts créatifs dévoués</p></div>
            </div>
          </div>
        </div>
        <a href="pages/about.php" class="btn-primary-custom">
          <i class="bi bi-arrow-right-circle-fill"></i><span>En savoir plus</span>
        </a>
      </div>
      <div class="col-lg-6 reveal-right">
        <div class="row g-3">
          <div class="col-6">
            <div style="border-radius:16px;overflow:hidden;height:200px;background:linear-gradient(135deg,rgba(22,163,74,0.3),rgba(22,163,74,0.1));display:flex;align-items:center;justify-content:center;font-size:4rem;border:1px solid var(--border);">
              <i class="bi bi-camera-fill" style="color:var(--green);opacity:0.7;"></i>
            </div>
          </div>
          <div class="col-6">
            <div style="border-radius:16px;overflow:hidden;height:200px;background:linear-gradient(135deg,rgba(220,38,38,0.3),rgba(220,38,38,0.1));display:flex;align-items:center;justify-content:center;font-size:4rem;border:1px solid var(--border);">
              <i class="bi bi-film" style="color:var(--red);opacity:0.7;"></i>
            </div>
          </div>
          <div class="col-12">
            <div style="border-radius:16px;overflow:hidden;height:160px;background:linear-gradient(135deg,rgba(220,38,38,0.2),rgba(10,15,30,0.8));display:flex;align-items:center;justify-content:center;gap:30px;border:1px solid var(--border);">
              <i class="bi bi-palette-fill" style="color:var(--red);font-size:3rem;opacity:0.7;"></i>
              <div>
                <div style="font-size:1.2rem;font-weight:800;color:white;">Design & Branding</div>
                <div style="color:var(--gray);font-size:0.85rem;">Identité visuelle complète</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════
     STATS
════════════════════════════════════════ -->
<section class="section-padding-sm" style="background:linear-gradient(135deg, rgba(22,163,74,0.08) 0%, rgba(220,38,38,0.05) 100%); border-top:1px solid var(--border); border-bottom:1px solid var(--border);">
  <div class="container">
    <div class="row g-0">
      <div class="col-6 col-md-3 reveal">
        <div class="stat-item">
          <div class="stat-number"><span data-count="350" data-suffix="+">0+</span></div>
          <div class="stat-label">Clients satisfaits</div>
        </div>
      </div>
      <div class="col-6 col-md-3 reveal delay-1">
        <div class="stat-item" style="border-left:1px solid var(--border);">
          <div class="stat-number"><span data-count="820" data-suffix="+">0+</span></div>
          <div class="stat-label">Projets livrés</div>
        </div>
      </div>
      <div class="col-6 col-md-3 reveal delay-2">
        <div class="stat-item" style="border-left:1px solid var(--border);">
          <div class="stat-number"><span data-count="8" data-suffix=" ans">0 ans</span></div>
          <div class="stat-label">D'expérience</div>
        </div>
      </div>
      <div class="col-6 col-md-3 reveal delay-3">
        <div class="stat-item" style="border-left:1px solid var(--border);">
          <div class="stat-number"><span data-count="15" data-suffix="+">0+</span></div>
          <div class="stat-label">Experts créatifs</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════
     SERVICES PRINCIPAUX
════════════════════════════════════════ -->
<section class="section-padding">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <div class="section-tag"><i class="bi bi-grid-fill"></i> Nos Services</div>
      <h2 class="section-title">Ce que nous faisons<br><span class="text-gradient">avec excellence</span></h2>
      <p class="section-subtitle mx-auto">De la captation à la création, nous couvrons tous vos besoins en communication visuelle et créative.</p>
    </div>

    <div class="row g-4">
      <?php
      $services = [
        ['icon'=>'bi-camera2','color'=>'green','title'=>'Shooting Photo Pro','desc'=>'Portraits, corporate, produits et événements capturés avec un regard artistique unique.'],
        ['icon'=>'bi-camera-video-fill','color'=>'red','title'=>'Clips & Vidéos','desc'=>'Clips musicaux cinématiques et vidéos institutionnelles qui captivent et marquent les esprits.'],
        ['icon'=>'bi-palette-fill','color'=>'red','title'=>'Design Graphique','desc'=>'Logos, affiches, flyers et supports de communication au design percutant et mémorable.'],
        ['icon'=>'bi-shield-fill-check','color'=>'white','title'=>'Identité Visuelle','desc'=>'Branding complet : charte graphique, couleurs, typographies pour une image cohérente.'],
        ['icon'=>'bi-people-fill','color'=>'green','title'=>'Community Mgmt','desc'=>'Gestion de vos réseaux sociaux avec du contenu engageant qui fédère votre communauté.'],
        ['icon'=>'bi-balloon-heart-fill','color'=>'red','title'=>'Couverture Événements','desc'=>'Mariages, concerts, conférences : nous capturons chaque instant précieux de vos événements.'],
        ['icon'=>'bi-play-btn-fill','color'=>'red','title'=>'Motion Design','desc'=>'Animations et effets visuels dynamiques pour des contenus numériques qui se démarquent.'],
        ['icon'=>'bi-printer-fill','color'=>'white','title'=>'Impression & Print','desc'=>'Cartes de visite, bannières, bâches : vos supports print conçus et produits avec soin.'],
      ];
      foreach ($services as $i => $s): ?>
      <div class="col-lg-3 col-md-4 col-sm-6 reveal delay-<?= ($i % 4) + 1 ?>">
        <div class="service-card">
          <div class="service-icon service-icon-<?= $s['color'] ?>">
            <i class="bi <?= $s['icon'] ?>"></i>
          </div>
          <h4><?= $s['title'] ?></h4>
          <p><?= $s['desc'] ?></p>
          <a href="pages/services.php" class="service-link">Découvrir <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center mt-5 reveal">
      <a href="pages/services.php" class="btn-primary-custom">
        <i class="bi bi-grid-3x3-gap-fill"></i><span>Voir tous nos services</span>
      </a>
    </div>
  </div>
</section>

<div class="gradient-divider"></div>

<!-- ═══════════════════════════════════════
     PORTFOLIO APERÇU
════════════════════════════════════════ -->
<section class="section-padding bg-dark-2">
  <div class="container">
    <div class="row align-items-end mb-5">
      <div class="col-lg-7 reveal-left">
        <div class="section-tag"><i class="bi bi-images"></i> Portfolio</div>
        <h2 class="section-title">Nos réalisations<br><span class="text-gradient">qui parlent d'elles-mêmes</span></h2>
      </div>
      <div class="col-lg-5 text-lg-end reveal-right">
        <a href="pages/portfolio.php" class="btn-outline-custom">
          <i class="bi bi-grid-1x2-fill"></i><span>Tout voir</span>
        </a>
      </div>
    </div>

    <div class="portfolio-grid">
      <?php
      $portfolio_items = [
        ['cat'=>'photo','title'=>'Portrait Studio','sub'=>'Shooting photo','bg'=>'rgba(22,163,74,0.2)','icon'=>'bi-camera-fill'],
        ['cat'=>'video','title'=>'Clip Musical Urban','sub'=>'Réalisation vidéo','bg'=>'rgba(220,38,38,0.2)','icon'=>'bi-film'],
        ['cat'=>'design','title'=>'Brand Identity CafePure','sub'=>'Design graphique','bg'=>'rgba(220,38,38,0.2)','icon'=>'bi-palette-fill'],
        ['cat'=>'events','title'=>'Mariage Élégan\'t','sub'=>'Couverture événement','bg'=>'rgba(255,255,255,0.05)','icon'=>'bi-balloon-heart-fill'],
        ['cat'=>'logo','title'=>'Logo TechVision','sub'=>'Création de logo','bg'=>'rgba(22,163,74,0.15)','icon'=>'bi-vector-pen'],
        ['cat'=>'photo','title'=>'Corporate Shooting','sub'=>'Photo corporate','bg'=>'rgba(220,38,38,0.15)','icon'=>'bi-briefcase-fill'],
      ];
      foreach ($portfolio_items as $item): ?>
      <div class="portfolio-item reveal" data-category="<?= $item['cat'] ?>">
        <div style="width:100%;height:100%;background:<?= $item['bg'] ?>;display:flex;flex-direction:column;align-items:center;justify-content:center;font-size:3.5rem;border:1px solid var(--border);border-radius:var(--radius);">
          <i class="bi <?= $item['icon'] ?>" style="opacity:0.5;color:white;"></i>
        </div>
        <div class="portfolio-overlay">
          <div class="portfolio-info">
            <h5><?= $item['title'] ?></h5>
            <span><?= $item['sub'] ?></span>
          </div>
        </div>
        <div class="portfolio-item-icon"><i class="bi bi-zoom-in"></i></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════
     PROCESS / WHY US
════════════════════════════════════════ -->
<section class="section-padding">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <div class="section-tag"><i class="bi bi-award-fill"></i> Notre Processus</div>
      <h2 class="section-title">Pourquoi nous choisir<span class="text-red"> ?</span></h2>
      <p class="section-subtitle mx-auto">Un processus créatif structuré pour des résultats qui dépassent vos attentes à chaque fois.</p>
    </div>

    <div class="row g-4">
      <?php
      $steps = [
        ['num'=>'01','icon'=>'bi-chat-dots-fill','color'=>'green','title'=>'Consultation','desc'=>'Nous écoutons votre vision, vos objectifs et vos contraintes pour définir ensemble la stratégie créative idéale.'],
        ['num'=>'02','icon'=>'bi-lightbulb-fill','color'=>'red','title'=>'Conception','desc'=>'Notre équipe créative développe des concepts personnalisés alignés avec votre identité de marque.'],
        ['num'=>'03','icon'=>'bi-camera-fill','color'=>'red','title'=>'Réalisation','desc'=>'Shooting, tournage, design ou motion : nous exécutons avec précision, talent et passion créative.'],
        ['num'=>'04','icon'=>'bi-check-circle-fill','color'=>'white','title'=>'Livraison','desc'=>'Fichiers HD livrés dans les délais convenus avec un suivi post-production et des retouches incluses.'],
      ];
      foreach ($steps as $i => $step): ?>
      <div class="col-lg-3 col-md-6 reveal delay-<?= $i + 1 ?>">
        <div class="service-card text-center">
          <div style="font-size:3rem;font-weight:900;color:rgba(22,163,74,0.15);line-height:1;margin-bottom:16px;font-family:var(--font-heading);"><?= $step['num'] ?></div>
          <div class="service-icon service-icon-<?= $step['color'] ?> mx-auto mb-3" style="margin-bottom:16px;">
            <i class="bi <?= $step['icon'] ?>"></i>
          </div>
          <h4><?= $step['title'] ?></h4>
          <p><?= $step['desc'] ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div class="gradient-divider"></div>

<!-- ═══════════════════════════════════════
     TÉMOIGNAGES
════════════════════════════════════════ -->
<section class="section-padding bg-dark-2">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <div class="section-tag"><i class="bi bi-chat-quote-fill"></i> Témoignages</div>
      <h2 class="section-title">Ce que disent<br><span class="text-gradient">nos clients</span></h2>
    </div>

    <div class="row g-4">
      <?php
      $testimonials = [
        ['name'=>'Kofi Mensah','role'=>'PDG, TechStart CI','stars'=>5,'color'=>'#16A34A','text'=>'VitrineSHOOT a complètement transformé notre image de marque. Les shootings étaient d\'une qualité exceptionnelle et l\'équipe est très professionnelle. Je les recommande vivement !'],
        ['name'=>'Aya Touré','role'=>'Artiste Musicale','stars'=>5,'color'=>'#DC2626','text'=>'Mon clip vidéo a été réalisé avec une créativité et un professionnalisme incroyables. Plus d\'un million de vues en quelques semaines ! Merci VitrineSHOOT.'],
        ['name'=>'Jean-Baptiste N\'Dri','role'=>'Directeur Marketing, FoodChain','stars'=>5,'color'=>'#DC2626','text'=>'Notre identité visuelle est maintenant cohérente et impactante. Le branding réalisé par leur équipe a boosté notre notoriété de manière significative.'],
        ['name'=>'Fatou Diallo','role'=>'Organisatrice d\'événements','stars'=>5,'color'=>'#16A34A','text'=>'La couverture photo et vidéo de notre conférence internationale était parfaite. Chaque moment a été capturé avec élégance et professionnalisme.'],
        ['name'=>'Marc Adou','role'=>'Entrepreneur','stars'=>5,'color'=>'#DC2626','text'=>'Logo, site web, réseaux sociaux : VitrineSHOOT a tout géré de A à Z. Résultat : une identité forte et un community management qui booste mes ventes.'],
        ['name'=>'Sophie Kambou','role'=>'Directrice d\'école','stars'=>5,'color'=>'#DC2626','text'=>'Les photos de notre journée portes ouvertes sont magnifiques. Très bonne équipe, réactive et créative. Nous travaillons maintenant sur l\'identité visuelle complète.'],
      ];
      foreach ($testimonials as $i => $t): ?>
      <div class="col-lg-4 col-md-6 reveal delay-<?= ($i % 3) + 1 ?>">
        <div class="testimonial-card">
          <div class="testimonial-stars">
            <?php for($s=0;$s<$t['stars'];$s++): ?><i class="bi bi-star-fill"></i><?php endfor; ?>
          </div>
          <p class="testimonial-text"><?= $t['text'] ?></p>
          <div class="testimonial-author">
            <div class="testimonial-avatar-placeholder" style="background:<?= $t['color'] ?>20;color:<?= $t['color'] ?>;">
              <?= strtoupper(substr($t['name'], 0, 1)) ?>
            </div>
            <div>
              <div class="author-name"><?= $t['name'] ?></div>
              <div class="author-role"><?= $t['role'] ?></div>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center mt-5 reveal">
      <a href="pages/testimonials.php" class="btn-outline-custom">
        <i class="bi bi-chat-left-quote-fill"></i><span>Tous les avis</span>
      </a>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════
     APERÇU TARIFS
════════════════════════════════════════ -->
<section class="section-padding">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <div class="section-tag"><i class="bi bi-tag-fill"></i> Nos Formules</div>
      <h2 class="section-title">Des tarifs adaptés<br><span class="text-gradient">à chaque besoin</span></h2>
      <p class="section-subtitle mx-auto">Des formules transparentes pour tous vos projets créatifs, de la startup à la grande entreprise.</p>
    </div>

    <div class="row g-4 justify-content-center">
      <?php
      $plans = [
        ['icon'=>'bi-camera','name'=>'Shooting Basic','price'=>'150','unit'=>'/séance','desc'=>'Idéal pour portraits et photos individuelles','color'=>'green','features'=>['2h de shooting','20 photos retouchées','Livraison en 48h','1 tenue','Format HD'],'featured'=>false],
        ['icon'=>'bi-stars','name'=>'Pack Premium','price'=>'350','unit'=>'/projet','desc'=>'La solution complète pour votre projet','color'=>'red','features'=>['Journée entière','100 photos HD','Clip vidéo 2min','Livrables en 5j','2 retouches gratuites'],'featured'=>true],
        ['icon'=>'bi-building','name'=>'Pack Entreprise','price'=>'Sur devis','unit'=>'','desc'=>'Contrats sur mesure pour sociétés','color'=>'red','features'=>['Services illimités','Manager dédié','Priorité planning','SLA garanti','Facturation mensuelle'],'featured'=>false],
      ];
      foreach ($plans as $i => $plan): ?>
      <div class="col-lg-4 col-md-6 reveal delay-<?= $i + 1 ?>">
        <div class="pricing-card <?= $plan['featured'] ? 'featured' : '' ?>" style="height:100%;">
          <?php if($plan['featured']): ?><div class="featured-badge">POPULAIRE</div><?php endif; ?>
          <div class="pricing-icon" style="<?= $plan['color']==='red' ? 'background:rgba(220,38,38,0.15);color:var(--red);' : '' ?>">
            <i class="bi <?= $plan['icon'] ?>"></i>
          </div>
          <div class="pricing-name"><?= $plan['name'] ?></div>
          <div class="pricing-price"><?= $plan['price'] ?><span><?= $plan['unit'] ?></span></div>
          <p class="pricing-desc"><?= $plan['desc'] ?></p>
          <div class="pricing-features">
            <?php foreach($plan['features'] as $f): ?>
            <div class="pricing-feature"><i class="bi bi-check-circle-fill"></i><?= $f ?></div>
            <?php endforeach; ?>
          </div>
          <a href="pages/contact.php?plan=<?= urlencode($plan['name']) ?>" class="<?= $plan['featured'] ? 'btn-red-custom' : 'btn-primary-custom' ?> w-100 justify-content-center">
            <i class="bi bi-envelope-fill"></i><span>Réserver maintenant</span>
          </a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center mt-4 reveal">
      <a href="pages/pricing.php" class="btn-outline-custom">
        <i class="bi bi-list-ul"></i><span>Voir tous les tarifs</span>
      </a>
    </div>
  </div>
</section>

<div class="gradient-divider"></div>

<!-- ═══════════════════════════════════════
     BLOG APERÇU
════════════════════════════════════════ -->
<section class="section-padding bg-dark-2">
  <div class="container">
    <div class="row align-items-end mb-5">
      <div class="col-lg-7 reveal-left">
        <div class="section-tag"><i class="bi bi-newspaper"></i> Blog</div>
        <h2 class="section-title">Conseils & tendances<br><span class="text-gradient">créatives</span></h2>
      </div>
      <div class="col-lg-5 text-lg-end reveal-right">
        <a href="pages/blog.php" class="btn-outline-custom">
          <i class="bi bi-arrow-right"></i><span>Tous les articles</span>
        </a>
      </div>
    </div>

    <div class="row g-4">
      <?php
      $articles = [
        ['cat'=>'Photographie','title'=>'10 secrets pour des portraits d\'exception en studio','date'=>'10 Juin 2026','read'=>'5 min','icon'=>'bi-camera-fill','color'=>'var(--green)'],
        ['cat'=>'Branding','title'=>'Comment créer une identité visuelle forte pour votre startup','date'=>'5 Juin 2026','read'=>'7 min','icon'=>'bi-palette-fill','color'=>'var(--red)'],
        ['cat'=>'Vidéo','title'=>'Tendances clip vidéo 2026 : ce qui cartonne sur les réseaux','date'=>'1 Juin 2026','read'=>'6 min','icon'=>'bi-film','color'=>'var(--red)'],
      ];
      foreach ($articles as $i => $a): ?>
      <div class="col-lg-4 col-md-6 reveal delay-<?= $i + 1 ?>">
        <div class="blog-card">
          <div class="blog-img" style="background:linear-gradient(135deg,rgba(22,163,74,0.1) 0%,var(--dark-3) 100%);">
            <div style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;font-size:4rem;color:<?= $a['color'] ?>;opacity:0.4;">
              <i class="bi <?= $a['icon'] ?>"></i>
            </div>
            <div class="blog-category"><?= $a['cat'] ?></div>
          </div>
          <div class="blog-body">
            <div class="blog-meta">
              <span><i class="bi bi-calendar3"></i> <?= $a['date'] ?></span>
              <span><i class="bi bi-clock"></i> <?= $a['read'] ?></span>
            </div>
            <h5 class="blog-title"><?= $a['title'] ?></h5>
            <p class="blog-excerpt">Découvrez les techniques et conseils d'experts pour améliorer vos compétences créatives et rester au sommet de votre domaine en 2026.</p>
            <a href="pages/blog.php" class="blog-read-more">Lire l'article <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════
     CTA FINAL
════════════════════════════════════════ -->
<section class="section-padding" style="background:linear-gradient(135deg, rgba(22,163,74,0.12) 0%, rgba(220,38,38,0.08) 100%); border-top:1px solid var(--border);">
  <div class="container text-center">
    <div class="reveal" style="max-width:700px;margin:0 auto;">
      <div class="section-tag mx-auto"><i class="bi bi-rocket-takeoff-fill"></i> Prêt à démarrer ?</div>
      <h2 class="section-title">Transformons votre vision<br>en <span class="text-gradient">chef-d'œuvre visuel</span></h2>
      <p class="section-subtitle mx-auto">Contactez-nous dès aujourd'hui et obtenez un devis gratuit sous 24h. Notre équipe est prête à donner vie à votre projet.</p>
      <div class="d-flex gap-3 justify-content-center flex-wrap mt-4">
        <a href="pages/contact.php" class="btn-primary-custom">
          <i class="bi bi-send-fill"></i><span>Démarrer un projet</span>
        </a>
        <a href="tel:+2250000000000" class="btn-outline-custom">
          <i class="bi bi-telephone-fill"></i><span>Appeler maintenant</span>
        </a>
        <a href="https://wa.me/2250000000000" class="btn-red-custom" target="_blank">
          <i class="bi bi-whatsapp"></i><span>WhatsApp</span>
        </a>
      </div>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
