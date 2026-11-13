<?php
$page_title = 'FAQ – VitrineSHOOT | Questions Fréquentes';
$page_desc  = 'Toutes les réponses à vos questions sur nos services de photographie, vidéo, design et branding chez VitrineSHOOT.';
$current_page = 'faq';
require_once '../includes/header.php';

$faqs = [
  'Photographie & Shooting' => [
    ['q'=>'Comment se passe un shooting photo avec VitrineSHOOT ?','a'=>'Tout commence par une consultation gratuite pour comprendre votre besoin et votre vision. Nous préparons ensuite un moodboard et un planning de shooting. Le jour J, notre équipe arrive avec tout l\'équipement nécessaire. Après le shooting, nous sélectionnons les meilleures prises et les retouchons professionnellement avant de vous les livrer dans les délais convenus.'],
    ['q'=>'Combien de temps après le shooting reçois-je mes photos ?','a'=>'Pour un shooting basique, livraison sous 48h. Pour un pack premium ou corporate, comptez 3 à 5 jours ouvrables. Pour un mariage, le délai est de 7 à 10 jours ouvrables. Nous pouvons proposer une livraison express (sous 24h) avec un supplément.'],
    ['q'=>'Dois-je apporter ma tenue ou proposez-vous un service de stylisme ?','a'=>'Vous choisissez généralement vos tenues selon le concept défini ensemble. Cependant, nous travaillons avec des stylistes partenaires que nous pouvons recommander. Pour nos packs premium, un service de conseil en image est inclus.'],
    ['q'=>'Prenez-vous en charge les shootings en extérieur ?','a'=>'Absolument ! Nous réalisons des shootings en studio mais également en extérieur (plage, jardin, urban, etc.). En cas d\'intempéries, nous reportons le shooting sans frais supplémentaires.'],
  ],
  'Production Vidéo' => [
    ['q'=>'Quel est le délai de livraison pour un clip vidéo ?','a'=>'Pour un clip court (1-2 min), comptez 7 à 10 jours après la fin du tournage. Pour une production plus complexe, le délai varie entre 15 et 30 jours selon la complexité des effets et du montage. Ces délais incluent un ou plusieurs rounds de révisions.'],
    ['q'=>'Proposez-vous des prestations de drone ?','a'=>'Oui ! Nous disposons d\'opérateurs de drones certifiés avec des équipements 4K. Les prises de vue aériennes sont disponibles dans certains de nos packs vidéo ou en option supplémentaire selon votre projet.'],
    ['q'=>'Combien de révisions sont incluses dans mon contrat vidéo ?','a'=>'Selon votre formule : Pack Clip Court = 1 révision, Pack Clip Pro = 3 révisions, Pack Production Cinéma = révisions illimitées. Chaque révision supplémentaire hors contrat est facturée selon notre tarif en vigueur.'],
    ['q'=>'Pouvez-vous filmer en dehors d\'Abidjan ?','a'=>'Oui, nous intervenons partout en Côte d\'Ivoire et dans la sous-région (Ghana, Sénégal, Bénin, etc.). Des frais de déplacement s\'appliquent selon la distance. Contactez-nous pour un devis personnalisé.'],
  ],
  'Design & Branding' => [
    ['q'=>'Combien de propositions de logo reçois-je ?','a'=>'Selon votre formule : Logo Essential = 3 concepts, Logo Premium = 5 concepts, Branding Complet = 8 concepts. Pour chaque concept, nous présentons le logo en contexte (carte de visite, façade, etc.) pour vous aider à visualiser le rendu final.'],
    ['q'=>'Quels formats de fichiers me serez remis pour mon logo ?','a'=>'Vous recevez vos fichiers en formats vectoriels (AI, SVG, PDF) et en formats d\'image (PNG avec transparence, JPG). Toutes les variantes couleur, noir/blanc et inversé sont incluses. Vous êtes propriétaire total de votre logo.'],
    ['q'=>'Proposez-vous le service d\'impression pour mes supports ?','a'=>'Oui ! Nous avons des partenaires imprimeurs de confiance et pouvons gérer toute votre chaîne de production print : de la conception à l\'impression et à la livraison. Demandez un devis groupé design + print.'],
    ['q'=>'Que comprend exactement un Branding Complet ?','a'=>'Le Branding Complet inclut : création du logo et variantes, charte graphique complète (60+ pages), brand book, palette de couleurs, typographies, templates réseaux sociaux (12 formats), supports print (carte de visite, en-tête, signature email, kakémono), guide d\'utilisation et révisions illimitées.'],
  ],
  'Community Management' => [
    ['q'=>'Quelles plateformes gérez-vous ?','a'=>'Nous gérons Instagram, Facebook, TikTok, LinkedIn, YouTube et Twitter/X. Nous recommandons généralement de nous concentrer sur 2 à 3 plateformes stratégiques plutôt que d\'être présent partout sans efficacité.'],
    ['q'=>'Comment fonctionne la création de contenu pour mes réseaux ?','a'=>'Chaque mois, nous vous proposons un calendrier éditorial détaillé pour validation. Nous créons ensuite tous les visuels (photos, vidéos, stories, reels) et les textes (légendes, hashtags) avant de programmer et publier à l\'heure optimale. Vous avez un tableau de bord pour suivre vos statistiques en temps réel.'],
    ['q'=>'Puis-je approuver le contenu avant publication ?','a'=>'Absolument ! Dans notre processus, vous validez le calendrier éditorial mensuel et chaque contenu avant publication. Nous utilisons des outils de gestion collaborative pour faciliter vos retours.'],
  ],
  'Paiement & Général' => [
    ['q'=>'Quels modes de paiement acceptez-vous ?','a'=>'Nous acceptons les virements bancaires, Mobile Money (Orange Money, MTN MoMo, Wave), espèces et chèques. Pour les entreprises, nous émettons des factures officielles.'],
    ['q'=>'Est-il possible de payer en plusieurs fois ?','a'=>'Oui ! Pour les projets supérieurs à 150 000 FCFA, nous proposons un paiement en 2 fois : 50% à la signature du devis, 50% à la livraison. Pour les gros projets, un plan de paiement personnalisé peut être établi.'],
    ['q'=>'Proposez-vous des devis gratuits ?','a'=>'Oui, tous nos devis sont gratuits et sans engagement. Nous nous engageons à vous fournir un devis détaillé sous 24h après réception de votre demande. Vous pouvez nous contacter par téléphone, WhatsApp, email ou via notre formulaire en ligne.'],
    ['q'=>'Y a-t-il des frais cachés dans vos tarifs ?','a'=>'Non, nous croyons en la transparence totale. Le prix indiqué dans votre devis est le prix final, sauf si des modifications majeures de la demande initiale sont souhaitées en cours de projet, auquel cas un avenant vous sera soumis pour validation.'],
  ],
];
?>

<!-- PAGE HEADER -->
<div class="page-header">
  <div class="container">
    <div class="breadcrumb-custom mb-3 reveal">
      <a href="<?= SITE_URL ?>/index.php">Accueil</a>
      <span class="sep">/</span>
      <span>FAQ</span>
    </div>
    <div class="section-tag reveal"><i class="bi bi-question-circle-fill"></i> Vos questions</div>
    <h1 class="page-header-title reveal">Questions <span class="text-gradient">Fréquentes</span></h1>
    <p style="color:var(--gray);max-width:600px;font-size:1.05rem;" class="reveal">
      Toutes les réponses à vos questions sur nos services, tarifs et fonctionnement.
    </p>
  </div>
</div>

<div class="gradient-divider"></div>

<!-- FAQ -->
<section class="section-padding">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-9">
        <?php $acc_i = 0; foreach ($faqs as $category => $questions): ?>
        <div class="mb-5 reveal">
          <div class="section-tag mb-4" style="display:inline-flex;">
            <?php
            $cat_icons = [
              'Photographie & Shooting' => 'bi-camera-fill',
              'Production Vidéo' => 'bi-film',
              'Design & Branding' => 'bi-palette-fill',
              'Community Management' => 'bi-people-fill',
              'Paiement & Général' => 'bi-credit-card-fill',
            ];
            ?>
            <i class="bi <?= isset($cat_icons[$category]) ? $cat_icons[$category] : 'bi-question-circle-fill' ?>"></i>
            <?= $category ?>
          </div>

          <div class="accordion faq-accordion" id="faq-<?= $acc_i ?>">
            <?php foreach ($questions as $qi => $faq): ?>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button <?= ($acc_i === 0 && $qi === 0) ? '' : 'collapsed' ?>"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#faq-<?= $acc_i ?>-<?= $qi ?>"
                  aria-expanded="<?= ($acc_i === 0 && $qi === 0) ? 'true' : 'false' ?>">
                  <i class="bi bi-question-circle me-2" style="color:var(--green);flex-shrink:0;"></i>
                  <?= $faq['q'] ?>
                </button>
              </h2>
              <div id="faq-<?= $acc_i ?>-<?= $qi ?>" class="accordion-collapse collapse <?= ($acc_i === 0 && $qi === 0) ? 'show' : '' ?>">
                <div class="accordion-body"><?= $faq['a'] ?></div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
        <?php $acc_i++; endforeach; ?>

        <!-- Still have questions -->
        <div class="reveal" style="background:linear-gradient(135deg,rgba(22,163,74,0.1),rgba(249,115,22,0.06));border:1px solid rgba(22,163,74,0.2);border-radius:var(--radius);padding:40px;text-align:center;">
          <i class="bi bi-headset" style="font-size:2.5rem;color:var(--green);margin-bottom:16px;display:block;"></i>
          <h3 style="font-size:1.3rem;font-weight:700;margin-bottom:12px;">Vous n'avez pas trouvé votre réponse ?</h3>
          <p style="color:var(--gray);margin-bottom:24px;font-size:0.9rem;">Notre équipe est disponible pour répondre à toutes vos questions personnalisées.</p>
          <div class="d-flex gap-3 justify-content-center flex-wrap">
            <a href="<?= SITE_URL ?>/pages/contact.php" class="btn-primary-custom">
              <i class="bi bi-envelope-fill"></i><span>Nous écrire</span>
            </a>
            <a href="https://wa.me/2250000000000" class="btn-red-custom" target="_blank">
              <i class="bi bi-whatsapp"></i><span>WhatsApp</span>
            </a>
            <a href="tel:+2250000000000" class="btn-outline-custom">
              <i class="bi bi-telephone-fill"></i><span>Appeler</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once '../includes/footer.php'; ?>
