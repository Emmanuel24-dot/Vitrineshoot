<?php
$page_title = 'Contact – VitrineSHOOT | Devis & Réservation';
$page_desc  = 'Contactez VitrineSHOOT pour réserver un shooting, demander un devis ou discuter de votre projet créatif. Réponse garantie sous 24h.';
$current_page = 'contact';

$success_msg = '';
$error_msg   = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = htmlspecialchars(trim(isset($_POST['name'])    ? $_POST['name']    : ''));
    $email   = htmlspecialchars(trim(isset($_POST['email'])   ? $_POST['email']   : ''));
    $phone   = htmlspecialchars(trim(isset($_POST['phone'])   ? $_POST['phone']   : ''));
    $service = htmlspecialchars(trim(isset($_POST['service']) ? $_POST['service'] : ''));
    $budget  = htmlspecialchars(trim(isset($_POST['budget'])  ? $_POST['budget']  : ''));
    $message = htmlspecialchars(trim(isset($_POST['message']) ? $_POST['message'] : ''));

    if (empty($name) || empty($email) || empty($message)) {
        $error_msg = 'Veuillez remplir tous les champs obligatoires.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_msg = 'Veuillez entrer une adresse email valide.';
    } else {
        $to      = 'contact@vitrineshoot.com';
        $subject = "Nouveau contact VitrineSHOOT – $name";
        $body    = "Nom : $name\nEmail : $email\nTéléphone : $phone\nService : $service\nBudget : $budget\n\nMessage :\n$message";
        $headers = "From: noreply@vitrineshoot.com\r\nReply-To: $email";
        // mail($to, $subject, $body, $headers); // décommenter en production
        $success_msg = 'Merci ' . $name . ' ! Votre message a bien été envoyé. Nous vous répondrons sous 24h.';
    }
}

$plan_preset    = htmlspecialchars(isset($_GET['plan'])    ? $_GET['plan']    : '');
$service_preset = htmlspecialchars(isset($_GET['service']) ? $_GET['service'] : '');
require_once '../includes/header.php';
?>

<!-- PAGE HEADER -->
<div class="page-header">
  <div class="container">
    <div class="breadcrumb-custom mb-3 reveal">
      <a href="<?= SITE_URL ?>/index.php">Accueil</a>
      <span class="sep">/</span>
      <span>Contact</span>
    </div>
    <div class="section-tag reveal"><i class="bi bi-envelope-fill"></i> Parlons de votre projet</div>
    <h1 class="page-header-title reveal">Contactez-<span class="text-gradient">nous</span></h1>
    <p style="color:var(--gray);max-width:600px;font-size:1.05rem;" class="reveal">
      Un projet en tête ? Discutons-en ! Nous répondons à toutes vos demandes sous 24h.
    </p>
  </div>
</div>

<div class="gradient-divider"></div>

<section class="section-padding">
  <div class="container">
    <div class="row g-5">

      <!-- Contact info -->
      <div class="col-lg-4 reveal-left">
        <div class="section-tag"><i class="bi bi-geo-alt-fill"></i> Retrouvez-nous</div>
        <h3 style="font-size:1.4rem;font-weight:800;margin-bottom:28px;line-height:1.3;">
          On est là pour<br><span class="text-gradient">vous aider</span>
        </h3>

        <div class="contact-info-item">
          <div class="contact-info-icon"><i class="bi bi-geo-alt-fill"></i></div>
          <div class="contact-info-text">
            <h6>Adresse</h6>
            <p>123 Rue de la Créativité<br>Plateau, Abidjan<br>Côte d'Ivoire</p>
          </div>
        </div>

        <div class="contact-info-item">
          <div class="contact-info-icon"><i class="bi bi-telephone-fill"></i></div>
          <div class="contact-info-text">
            <h6>Téléphone</h6>
            <a href="tel:+2250000000000">+225 00 00 00 00 00</a><br>
            <a href="tel:+2250000000001">+225 00 00 00 00 01</a>
          </div>
        </div>

        <div class="contact-info-item">
          <div class="contact-info-icon" style="background:rgba(37,211,102,0.15);color:#25d366;"><i class="bi bi-whatsapp"></i></div>
          <div class="contact-info-text">
            <h6>WhatsApp</h6>
            <a href="https://wa.me/2250000000000" target="_blank">+225 00 00 00 00 00</a>
          </div>
        </div>

        <div class="contact-info-item">
          <div class="contact-info-icon"><i class="bi bi-envelope-fill"></i></div>
          <div class="contact-info-text">
            <h6>Email</h6>
            <a href="mailto:contact@vitrineshoot.com">contact@vitrineshoot.com</a><br>
            <a href="mailto:devis@vitrineshoot.com">devis@vitrineshoot.com</a>
          </div>
        </div>

        <!-- Horaires -->
        <div style="background:rgba(31,41,55,0.5);border:1px solid var(--border);border-radius:12px;padding:24px;margin-top:8px;">
          <h6 style="font-size:0.85rem;font-weight:700;text-transform:uppercase;letter-spacing:0.08em;margin-bottom:16px;color:white;display:flex;align-items:center;gap:8px;">
            <i class="bi bi-clock-fill" style="color:var(--green);"></i> Horaires d'ouverture
          </h6>
          <table class="hours-table w-100">
            <tr><td>Lundi – Vendredi</td><td class="hours-open">08:00 – 19:00</td></tr>
            <tr><td>Samedi</td><td class="hours-open">09:00 – 17:00</td></tr>
            <tr><td>Dimanche</td><td class="hours-closed">Fermé</td></tr>
          </table>
        </div>

        <!-- Réseaux sociaux -->
        <div style="margin-top:24px;">
          <h6 style="font-size:0.85rem;color:rgba(255,255,255,0.6);margin-bottom:12px;">Suivez-nous</h6>
          <div class="social-links">
            <a href="#" class="social-link fb" title="Facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="social-link ig" title="Instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="social-link yt" title="YouTube"><i class="bi bi-youtube"></i></a>
            <a href="#" class="social-link wa" title="WhatsApp"><i class="bi bi-whatsapp"></i></a>
            <a href="#" class="social-link tk" title="TikTok"><i class="bi bi-tiktok"></i></a>
            <a href="#" class="social-link li" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>

      <!-- Formulaire -->
      <div class="col-lg-8 reveal-right">
        <div class="contact-form-card">
          <h3 style="font-size:1.4rem;font-weight:800;margin-bottom:8px;">Envoyez-nous un message</h3>
          <p style="color:var(--gray);font-size:0.88rem;margin-bottom:28px;">Décrivez votre projet et nous vous répondrons sous 24h avec un devis personnalisé.</p>

          <?php if ($success_msg): ?>
          <div style="background:rgba(22,163,74,0.12);border:1px solid rgba(22,163,74,0.3);border-radius:10px;padding:16px 20px;margin-bottom:24px;color:var(--green);display:flex;align-items:center;gap:12px;">
            <i class="bi bi-check-circle-fill" style="font-size:1.2rem;flex-shrink:0;"></i>
            <span><?= $success_msg ?></span>
          </div>
          <?php endif; ?>

          <?php if ($error_msg): ?>
          <div style="background:rgba(220,38,38,0.1);border:1px solid rgba(220,38,38,0.3);border-radius:10px;padding:16px 20px;margin-bottom:24px;color:var(--red);display:flex;align-items:center;gap:12px;">
            <i class="bi bi-exclamation-circle-fill" style="font-size:1.2rem;flex-shrink:0;"></i>
            <span><?= $error_msg ?></span>
          </div>
          <?php endif; ?>

          <form method="POST" action="" id="contactForm">
            <div class="row g-4">
              <div class="col-md-6">
                <label class="form-label-custom">Nom complet <span style="color:var(--red);">*</span></label>
                <input type="text" name="name" class="form-control form-control-custom" placeholder="Votre nom complet" required>
              </div>
              <div class="col-md-6">
                <label class="form-label-custom">Adresse email <span style="color:var(--red);">*</span></label>
                <input type="email" name="email" class="form-control form-control-custom" placeholder="votre@email.com" required>
              </div>
              <div class="col-md-6">
                <label class="form-label-custom">Téléphone / WhatsApp</label>
                <input type="tel" name="phone" class="form-control form-control-custom" placeholder="+225 00 00 00 00 00">
              </div>
              <div class="col-md-6">
                <label class="form-label-custom">Service souhaité</label>
                <select name="service" class="form-control form-control-custom" style="cursor:pointer;">
                  <option value="" <?= !$service_preset && !$plan_preset ? '' : '' ?>>Choisir un service...</option>
                  <option value="shooting-photo" <?= $service_preset === 'shooting' ? 'selected' : '' ?>>Shooting photo</option>
                  <option value="mariage">Photographie de mariage</option>
                  <option value="clip-video">Réalisation de clip vidéo</option>
                  <option value="film-corporate">Film institutionnel</option>
                  <option value="motion-design">Motion design</option>
                  <option value="logo">Création de logo</option>
                  <option value="identite-visuelle">Identité visuelle / Branding</option>
                  <option value="affiches-design">Affiches / Flyers</option>
                  <option value="community-management">Community management</option>
                  <option value="evenement">Couverture d'événement</option>
                  <option value="devis" <?= $service_preset === 'devis' || $plan_preset === 'entreprise' ? 'selected' : '' ?>>Devis personnalisé</option>
                  <option value="autre">Autre</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label-custom">Budget estimé</label>
                <select name="budget" class="form-control form-control-custom" style="cursor:pointer;">
                  <option value="">Budget indicatif...</option>
                  <option value="moins-100k">Moins de 100 000 FCFA</option>
                  <option value="100k-300k">100 000 – 300 000 FCFA</option>
                  <option value="300k-600k">300 000 – 600 000 FCFA</option>
                  <option value="600k-1m">600 000 – 1 000 000 FCFA</option>
                  <option value="plus-1m">Plus de 1 000 000 FCFA</option>
                  <option value="a-definir">À définir ensemble</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label-custom">Formule souhaitée</label>
                <input type="text" name="plan" class="form-control form-control-custom" placeholder="Ex: Pack Mariage, Logo Essential..." value="<?= $plan_preset ?>">
              </div>
              <div class="col-12">
                <label class="form-label-custom">Votre message <span style="color:var(--red);">*</span></label>
                <textarea name="message" class="form-control form-control-custom" rows="5" placeholder="Décrivez votre projet : date souhaitée, lieu, nombre de personnes, vos attentes..." required></textarea>
              </div>
              <div class="col-12">
                <div style="display:flex;align-items:flex-start;gap:10px;margin-bottom:4px;">
                  <input type="checkbox" id="rgpd" name="rgpd" required style="margin-top:4px;accent-color:var(--green);">
                  <label for="rgpd" style="font-size:0.83rem;color:var(--gray);line-height:1.6;cursor:pointer;">
                    J'accepte que mes données soient utilisées pour traiter ma demande conformément à la <a href="#" style="color:var(--green);">politique de confidentialité</a> de VitrineSHOOT.
                  </label>
                </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn-primary-custom w-100 justify-content-center py-4" style="font-size:1rem;">
                  <i class="bi bi-send-fill"></i><span>Envoyer ma demande</span>
                </button>
                <p style="font-size:0.78rem;color:rgba(255,255,255,0.3);text-align:center;margin-top:12px;">
                  <i class="bi bi-lock-fill" style="color:var(--green);"></i> Formulaire sécurisé · Réponse sous 24h garantie
                </p>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MAP -->
<section class="section-padding-sm bg-dark-2" style="border-top:1px solid var(--border);">
  <div class="container">
    <div class="text-center mb-4 reveal">
      <div class="section-tag"><i class="bi bi-map-fill"></i> Notre localisation</div>
      <h3 class="section-title">Venez nous <span class="text-gradient">rendre visite</span></h3>
    </div>
    <div class="map-wrapper reveal">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.4!2d-4.0234!3d5.3167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNcKwMTknMDAuMSJOIDTCsDAxJzI0LjIiVw!5e0!3m2!1sfr!2sci!4v1234567890"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        title="Localisation VitrineSHOOT"
        style="filter:invert(90%) hue-rotate(180deg);">
      </iframe>
    </div>
  </div>
</section>

<!-- ALTERNATIVES CONTACT -->
<section class="section-padding-sm" style="border-top:1px solid var(--border);">
  <div class="container">
    <div class="row g-4 justify-content-center">
      <div class="col-lg-3 col-md-6 reveal delay-1">
        <div class="service-card text-center">
          <div class="service-icon service-icon-green mx-auto"><i class="bi bi-telephone-fill"></i></div>
          <h5>Appel direct</h5>
          <p style="font-size:0.83rem;color:var(--gray);">Du lun. au sam. de 08h à 19h</p>
          <a href="tel:+2250000000000" class="btn-primary-custom mt-3 w-100 justify-content-center" style="padding:10px;">
            <span>+225 00 00 00 00 00</span>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 reveal delay-2">
        <div class="service-card text-center">
          <div class="service-icon mx-auto" style="background:rgba(37,211,102,0.15);color:#25d366;"><i class="bi bi-whatsapp"></i></div>
          <h5>WhatsApp</h5>
          <p style="font-size:0.83rem;color:var(--gray);">Réponse rapide 7j/7</p>
          <a href="https://wa.me/2250000000000" target="_blank" class="btn-red-custom mt-3 w-100 justify-content-center" style="padding:10px;background:linear-gradient(135deg,#25d366,#128c7e);">
            <span>Chatter maintenant</span>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 reveal delay-3">
        <div class="service-card text-center">
          <div class="service-icon service-icon-orange mx-auto"><i class="bi bi-envelope-fill"></i></div>
          <h5>Email</h5>
          <p style="font-size:0.83rem;color:var(--gray);">Réponse sous 24h garantie</p>
          <a href="mailto:contact@vitrineshoot.com" class="btn-outline-custom mt-3 w-100 justify-content-center" style="padding:10px;">
            <span>Envoyer un email</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once '../includes/footer.php'; ?>
