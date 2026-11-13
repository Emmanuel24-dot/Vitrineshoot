<?php
$page_title = 'Blog – VitrineSHOOT | Conseils Photo, Vidéo & Design';
$page_desc  = 'Conseils et astuces en photographie, vidéo, branding, design et communication digitale par les experts de VitrineSHOOT.';
$current_page = 'blog';
require_once '../includes/header.php';

$articles = [
  ['cat'=>'Photographie','icon'=>'bi-camera-fill','color'=>'var(--green)','date'=>'10 Juin 2026','read'=>'5 min','title'=>'10 secrets pour des portraits d\'exception en studio','excerpt'=>'La photographie de portrait en studio est un art qui demande maîtrise de la lumière, sens de la mise en scène et relation privilégiée avec le sujet. Voici les 10 techniques que nos photographes utilisent quotidiennement.','author'=>'Afi Mensah'],
  ['cat'=>'Vidéo','icon'=>'bi-film','color'=>'var(--red)','date'=>'5 Juin 2026','read'=>'7 min','title'=>'Tendances clips vidéo 2026 : ce qui cartonne sur les réseaux','excerpt'=>'L\'univers du clip vidéo évolue à une vitesse vertigineuse. Entre cinématographie verticale, IA générative et narration ultra-courte, voici les grandes tendances à adopter pour 2026.','author'=>'Eric Bamba'],
  ['cat'=>'Branding','icon'=>'bi-palette-fill','color'=>'var(--red)','date'=>'1 Juin 2026','read'=>'6 min','title'=>'Comment créer une identité visuelle forte pour votre startup','excerpt'=>'Une identité visuelle cohérente est le fondement de toute stratégie de marque réussie. Découvrez les étapes incontournables pour construire une image qui inspire confiance et se démarque.','author'=>'Yves Traoré'],
  ['cat'=>'Social Media','icon'=>'bi-phone-fill','color'=>'var(--green)','date'=>'28 Mai 2026','read'=>'4 min','title'=>'Instagram 2026 : algorithme, Reels et stratégies gagnantes','excerpt'=>'L\'algorithme Instagram a encore changé. Nous décryptons pour vous les nouvelles règles du jeu et vous donnons les stratégies concrètes pour faire croître votre compte en 2026.','author'=>'Nina Coulibaly'],
  ['cat'=>'Événements','icon'=>'bi-camera-video-fill','color'=>'var(--red)','date'=>'20 Mai 2026','read'=>'5 min','title'=>'Captation d\'événements : les équipements essentiels en 2026','excerpt'=>'Entre caméras mirrorless 6K, stabilisateurs motorisés et drones ultra-compacts, voici le matériel indispensable pour couvrir professionnellement tout type d\'événement.','author'=>'Eric Bamba'],
  ['cat'=>'Design','icon'=>'bi-vector-pen','color'=>'var(--red)','date'=>'15 Mai 2026','read'=>'8 min','title'=>'Typographie et psychologie : choisir la bonne police pour sa marque','excerpt'=>'La typographie est bien plus qu\'une question esthétique. Chaque police véhicule des émotions et des valeurs. Apprenez à choisir celle qui parle à votre audience cible.','author'=>'Yves Traoré'],
];
?>

<!-- PAGE HEADER -->
<div class="page-header">
  <div class="container">
    <div class="breadcrumb-custom mb-3 reveal">
      <a href="<?= SITE_URL ?>/index.php">Accueil</a>
      <span class="sep">/</span>
      <span>Blog</span>
    </div>
    <div class="section-tag reveal"><i class="bi bi-newspaper"></i> Actualités & Conseils</div>
    <h1 class="page-header-title reveal">Notre <span class="text-gradient">Blog</span></h1>
    <p style="color:var(--gray);max-width:600px;font-size:1.05rem;" class="reveal">
      Conseils pratiques, tendances créatives et inspirations pour vos projets photo, vidéo, design et communication.
    </p>
  </div>
</div>

<div class="gradient-divider"></div>

<!-- ARTICLES -->
<section class="section-padding">
  <div class="container">
    <!-- Featured article -->
    <div class="reveal mb-5">
      <div style="background:linear-gradient(135deg,rgba(22,163,74,0.15),rgba(249,115,22,0.08));border:1px solid rgba(22,163,74,0.2);border-radius:var(--radius);overflow:hidden;">
        <div class="row g-0">
          <div class="col-lg-5">
            <div style="height:100%;min-height:300px;background:linear-gradient(135deg,rgba(22,163,74,0.3),rgba(10,15,30,0.9));display:flex;align-items:center;justify-content:center;font-size:5rem;color:var(--green);opacity:0.5;">
              <i class="bi bi-camera-fill"></i>
            </div>
          </div>
          <div class="col-lg-7 p-4 p-lg-5 d-flex flex-column justify-content-center">
            <div style="display:inline-flex;align-items:center;gap:8px;margin-bottom:16px;">
              <span style="background:var(--green);color:white;font-size:0.7rem;font-weight:700;padding:4px 12px;border-radius:50px;text-transform:uppercase;">Article vedette</span>
              <span style="font-size:0.8rem;color:var(--gray);">10 Juin 2026 · 5 min de lecture</span>
            </div>
            <h2 style="font-size:1.5rem;font-weight:800;margin-bottom:16px;line-height:1.3;">10 secrets pour des portraits d'exception en studio</h2>
            <p style="color:var(--gray);line-height:1.8;margin-bottom:24px;font-size:0.9rem;">La photographie de portrait en studio est un art qui demande maîtrise de la lumière, sens de la mise en scène et relation privilégiée avec le sujet. Voici les 10 techniques que nos photographes utilisent quotidiennement pour créer des images inoubliables.</p>
            <div style="display:flex;align-items:center;gap:16px;">
              <div style="width:40px;height:40px;border-radius:50%;background:rgba(22,163,74,0.2);display:flex;align-items:center;justify-content:center;font-weight:700;color:var(--green);">AM</div>
              <div>
                <div style="font-weight:700;font-size:0.88rem;">Afi Mensah</div>
                <div style="font-size:0.78rem;color:var(--gray);">Directrice Photo</div>
              </div>
              <a href="#" class="btn-primary-custom ms-auto" style="padding:10px 20px;font-size:0.85rem;">
                <span>Lire l'article</span> <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Filter tags -->
    <div class="d-flex flex-wrap gap-2 mb-4 reveal">
      <span class="filter-btn active" style="cursor:default;">Tous</span>
      <?php foreach(['Photographie','Vidéo','Branding','Design','Social Media','Événements'] as $tag): ?>
      <span style="padding:6px 16px;border-radius:50px;border:1px solid var(--border);color:var(--gray);font-size:0.83rem;"><?= $tag ?></span>
      <?php endforeach; ?>
    </div>

    <!-- Grid -->
    <div class="row g-4">
      <?php foreach ($articles as $i => $a): ?>
      <div class="col-lg-4 col-md-6 reveal delay-<?= ($i % 3) + 1 ?>">
        <div class="blog-card h-100">
          <div class="blog-img" style="background:linear-gradient(135deg,<?= str_replace('var(--green)','rgba(22,163,74,0.2)',str_replace('var(--red)','rgba(249,115,22,0.2)',str_replace('var(--red)','rgba(220,38,38,0.2)',$a['color']))) ?>,var(--dark-3));">
            <div style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;font-size:4rem;color:<?= $a['color'] ?>;opacity:0.4;">
              <i class="bi <?= $a['icon'] ?>"></i>
            </div>
            <div class="blog-category"><?= $a['cat'] ?></div>
          </div>
          <div class="blog-body d-flex flex-column h-100">
            <div class="blog-meta">
              <span><i class="bi bi-calendar3"></i> <?= $a['date'] ?></span>
              <span><i class="bi bi-clock"></i> <?= $a['read'] ?></span>
              <span><i class="bi bi-person-fill"></i> <?= $a['author'] ?></span>
            </div>
            <h5 class="blog-title"><?= $a['title'] ?></h5>
            <p class="blog-excerpt flex-grow-1"><?= $a['excerpt'] ?></p>
            <a href="#" class="blog-read-more mt-auto">Lire l'article <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Load more -->
    <div class="text-center mt-5 reveal">
      <button class="btn-outline-custom" onclick="this.innerHTML='<i class=\'bi bi-check-circle-fill me-2\'></i>Plus d\'articles bientôt !'">
        <i class="bi bi-plus-circle-fill"></i><span>Charger plus d'articles</span>
      </button>
    </div>
  </div>
</section>

<!-- NEWSLETTER -->
<section class="section-padding-sm bg-dark-2" style="border-top:1px solid var(--border);">
  <div class="container">
    <div class="reveal" style="background:linear-gradient(135deg,rgba(22,163,74,0.1),rgba(249,115,22,0.06));border:1px solid rgba(22,163,74,0.2);border-radius:var(--radius);padding:50px;text-align:center;">
      <i class="bi bi-envelope-heart-fill" style="font-size:2.5rem;color:var(--green);margin-bottom:16px;display:block;"></i>
      <h3 class="section-title mb-3">Restez <span class="text-gradient">inspiré</span></h3>
      <p style="color:var(--gray);max-width:450px;margin:0 auto 28px;font-size:0.9rem;line-height:1.8;">
        Recevez nos meilleurs articles, conseils créatifs et actualités chaque semaine directement dans votre boîte mail.
      </p>
      <form class="d-flex gap-3 justify-content-center flex-wrap" onsubmit="return false;">
        <input type="email" placeholder="Votre adresse email" class="form-control form-control-custom" style="max-width:320px;">
        <button type="submit" class="btn-primary-custom">
          <i class="bi bi-send-fill"></i><span>S'abonner</span>
        </button>
      </form>
      <p style="font-size:0.78rem;color:rgba(255,255,255,0.3);margin-top:12px;">Sans spam. Désabonnement en 1 clic.</p>
    </div>
  </div>
</section>

<?php require_once '../includes/footer.php'; ?>
