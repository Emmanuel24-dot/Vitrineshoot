<?php
$page_title = 'Témoignages – VitrineSHOOT | Avis de nos Clients';
$page_desc  = 'Découvrez ce que disent nos clients de VitrineSHOOT : avis authentiques sur nos services de photographie, vidéo, design et branding.';
$current_page = 'testimonials';
require_once '../includes/header.php';

$testimonials = [
  ['name'=>'Kofi Mensah','role'=>'PDG, TechStart CI','stars'=>5,'color'=>'#16A34A','service'=>'Branding Complet','text'=>'VitrineSHOOT a complètement transformé notre image de marque. Les shootings étaient d\'une qualité exceptionnelle et l\'équipe est très professionnelle. Notre chiffre d\'affaires a augmenté de 40% depuis la refonte de notre identité visuelle. Je les recommande vivement à toutes les entreprises ambitieuses !'],
  ['name'=>'Aya Touré','role'=>'Artiste Musicale','stars'=>5,'color'=>'#F97316','service'=>'Clip Musical','text'=>'Mon clip vidéo a été réalisé avec une créativité et un professionnalisme incroyables. Plus d\'un million de vues en quelques semaines ! L\'équipe a parfaitement compris ma vision artistique et l\'a sublimée. Je referai appel à eux pour mon prochain album sans hésiter.'],
  ['name'=>'Jean-Baptiste N\'Dri','role'=>'Directeur Marketing, FoodChain','stars'=>5,'color'=>'#DC2626','service'=>'Identité Visuelle','text'=>'Notre identité visuelle est maintenant cohérente et impactante sur tous nos supports. Le branding réalisé par l\'équipe de VitrineSHOOT a boosté notre notoriété de manière significative. Nos clients reconnaissent immédiatement notre marque et ça, c\'est inestimable.'],
  ['name'=>'Fatou Diallo','role'=>'Organisatrice d\'événements, EventPro','stars'=>5,'color'=>'#16A34A','service'=>'Couverture Événement','text'=>'La couverture photo et vidéo de notre conférence internationale était parfaite. Chaque moment important a été capturé avec élégance et professionnalisme. Les livrables ont été remis dans les délais avec une qualité qui a bluffé tous nos partenaires internationaux.'],
  ['name'=>'Marc Adou','role'=>'Entrepreneur & Influenceur','stars'=>5,'color'=>'#F97316','service'=>'Community Management','text'=>'Logo, site web, réseaux sociaux : VitrineSHOOT a tout géré de A à Z avec un résultat au-delà de mes espérances. Mon Instagram est passé de 2 000 à 25 000 abonnés en 6 mois grâce à leur community management. Je suis un client à vie !'],
  ['name'=>'Sophie Kambou','role'=>'Directrice, École Excellence','stars'=>5,'color'=>'#DC2626','service'=>'Shooting Photo Corporate','text'=>'Les photos de notre journée portes ouvertes sont magnifiques. Très bonne équipe, réactive et créative. Nous travaillons maintenant ensemble sur l\'identité visuelle complète de l\'école. L\'investissement en vaut vraiment la peine !'],
  ['name'=>'Abdoulaye Sow','role'=>'PDG, Groupe Sow Industries','stars'=>5,'color'=>'#16A34A','service'=>'Pack Entreprise','text'=>'Depuis que nous travaillons avec VitrineSHOOT sur un contrat mensuel, notre communication est à un niveau que je n\'aurais jamais imaginé atteindre. Équipe réactive, créative et toujours à l\'écoute de nos besoins spécifiques.'],
  ['name'=>'Mariam Kone','role'=>'Mariée, Promotion 2026','stars'=>5,'color'=>'#F97316','service'=>'Pack Mariage','text'=>'Notre mariage a été magnifiquement immortalisé par VitrineSHOOT. Les photos sont tellement belles que nous avons du mal à croire que c\'est nous ! L\'équipe était discrète mais présente aux bons moments. L\'album luxe est notre trésor pour la vie.'],
  ['name'=>'Honoré Gnaglo','role'=>'Manager Artistique','stars'=>5,'color'=>'#DC2626','service'=>'Production Vidéo','text'=>'Nous travaillons avec VitrineSHOOT depuis 2 ans pour tous nos projets audiovisuels. Chaque clip est meilleur que le précédent. Leur créativité et leur maîtrise technique font d\'eux les meilleurs de Côte d\'Ivoire dans ce domaine.'],
];
?>

<!-- PAGE HEADER -->
<div class="page-header">
  <div class="container">
    <div class="breadcrumb-custom mb-3 reveal">
      <a href="<?= SITE_URL ?>/index.php">Accueil</a>
      <span class="sep">/</span>
      <span>Témoignages</span>
    </div>
    <div class="section-tag reveal"><i class="bi bi-chat-quote-fill"></i> Ce qu'ils disent de nous</div>
    <h1 class="page-header-title reveal">Nos Clients <span class="text-gradient">témoignent</span></h1>
    <p style="color:var(--gray);max-width:600px;font-size:1.05rem;" class="reveal">
      La satisfaction de nos clients est notre plus grande fierté. Découvrez leurs expériences avec VitrineSHOOT.
    </p>
  </div>
</div>

<div class="gradient-divider"></div>

<!-- STATS RAPIDES -->
<section class="section-padding-sm" style="background:linear-gradient(135deg,rgba(22,163,74,0.06),rgba(249,115,22,0.04));border-bottom:1px solid var(--border);">
  <div class="container">
    <div class="row g-0 text-center">
      <div class="col-6 col-md-3 reveal">
        <div class="stat-item">
          <div class="stat-number" style="font-size:2.5rem;"><span data-count="350" data-suffix="+">0+</span></div>
          <div class="stat-label">Clients satisfaits</div>
        </div>
      </div>
      <div class="col-6 col-md-3 reveal delay-1">
        <div class="stat-item" style="border-left:1px solid var(--border);">
          <div class="stat-number" style="font-size:2.5rem;">4.9<span style="font-size:1.5rem;">/5</span></div>
          <div class="stat-label">Note moyenne</div>
        </div>
      </div>
      <div class="col-6 col-md-3 reveal delay-2">
        <div class="stat-item" style="border-left:1px solid var(--border);">
          <div class="stat-number" style="font-size:2.5rem;"><span data-count="98" data-suffix="%">0%</span></div>
          <div class="stat-label">Clients satisfaits</div>
        </div>
      </div>
      <div class="col-6 col-md-3 reveal delay-3">
        <div class="stat-item" style="border-left:1px solid var(--border);">
          <div class="stat-number" style="font-size:2.5rem;"><span data-count="75" data-suffix="%">0%</span></div>
          <div class="stat-label">Clients fidèles</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TÉMOIGNAGES CAROUSEL -->
<section class="section-padding">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <div class="section-tag"><i class="bi bi-star-fill"></i> Avis vérifiés</div>
      <h2 class="section-title">Ce que disent nos<br><span class="text-gradient">clients satisfaits</span></h2>
    </div>

    <!-- Carousel grande taille -->
    <div id="testimonialsCarousel" class="carousel slide mb-5 reveal" data-bs-ride="carousel">
      <div class="carousel-inner">
        <?php foreach (array_chunk($testimonials, 3) as $gi => $group): ?>
        <div class="carousel-item <?= $gi === 0 ? 'active' : '' ?>">
          <div class="row g-4">
            <?php foreach ($group as $t): ?>
            <div class="col-lg-4 col-md-6">
              <div class="testimonial-card h-100">
                <div class="testimonial-stars">
                  <?php for($s=0;$s<$t['stars'];$s++): ?><i class="bi bi-star-fill"></i><?php endfor; ?>
                  <span style="margin-left:8px;font-size:0.83rem;color:var(--gray);"><?= $t['service'] ?></span>
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
        </div>
        <?php endforeach; ?>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="prev" style="left:-40px;width:40px;height:40px;top:50%;transform:translateY(-50%);background:var(--green);border-radius:50%;opacity:1;">
        <i class="bi bi-chevron-left" style="color:white;font-size:1.2rem;"></i>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="next" style="right:-40px;width:40px;height:40px;top:50%;transform:translateY(-50%);background:var(--green);border-radius:50%;opacity:1;">
        <i class="bi bi-chevron-right" style="color:white;font-size:1.2rem;"></i>
      </button>
    </div>

    <!-- All testimonials grid -->
    <div class="row g-4">
      <?php foreach ($testimonials as $i => $t): ?>
      <div class="col-lg-4 col-md-6 reveal delay-<?= ($i % 3) + 1 ?>">
        <div class="testimonial-card h-100">
          <div class="testimonial-stars">
            <?php for($s=0;$s<$t['stars'];$s++): ?><i class="bi bi-star-fill"></i><?php endfor; ?>
            <span style="margin-left:8px;font-size:0.78rem;color:var(--green);font-weight:600;"><?= $t['service'] ?></span>
          </div>
          <p class="testimonial-text"><?= mb_substr($t['text'], 0, 180) ?>...</p>
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
  </div>
</section>

<!-- CTA -->
<section class="section-padding-sm bg-dark-2" style="border-top:1px solid var(--border);">
  <div class="container text-center reveal">
    <h2 class="section-title mb-3">Rejoignez nos clients <span class="text-gradient">satisfaits</span></h2>
    <p style="color:var(--gray);margin-bottom:32px;">Votre satisfaction sera notre prochaine réussite. Contactez-nous dès aujourd'hui.</p>
    <a href="<?= SITE_URL ?>/pages/contact.php" class="btn-primary-custom me-3">
      <i class="bi bi-send-fill"></i><span>Démarrer un projet</span>
    </a>
    <a href="<?= SITE_URL ?>/pages/pricing.php" class="btn-outline-custom">
      <i class="bi bi-tag-fill"></i><span>Voir les tarifs</span>
    </a>
  </div>
</section>

<?php require_once '../includes/footer.php'; ?>
