<!-- FOOTER -->
<footer class="mt-0">
  <div class="container py-5">
    <div class="row g-5">
      <!-- Brand -->
      <div class="col-lg-4 col-md-6">
        <div class="footer-brand">
          <span>Vitrine<span class="text-green">SHOOT</span><span class="text-red">.</span></span>
        </div>
        <p class="footer-desc">Votre partenaire créatif pour une identité visuelle forte, des shootings professionnels et une communication percutante. Nous transformons vos visions en réalités visuelles.</p>
        <div class="social-links">
          <a href="#" class="social-link fb" title="Facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="social-link ig" title="Instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="social-link yt" title="YouTube"><i class="bi bi-youtube"></i></a>
          <a href="#" class="social-link wa" title="WhatsApp"><i class="bi bi-whatsapp"></i></a>
          <a href="#" class="social-link tk" title="TikTok"><i class="bi bi-tiktok"></i></a>
          <a href="#" class="social-link li" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <!-- Links -->
      <div class="col-lg-2 col-md-3 col-6">
        <h6 class="footer-heading">Navigation</h6>
        <ul class="footer-links">
          <li><a href="<?= SITE_URL ?>/index.php">Accueil</a></li>
          <li><a href="<?= SITE_URL ?>/pages/about.php">À propos</a></li>
          <li><a href="<?= SITE_URL ?>/pages/services.php">Services</a></li>
          <li><a href="<?= SITE_URL ?>/pages/portfolio.php">Portfolio</a></li>
          <li><a href="<?= SITE_URL ?>/pages/pricing.php">Tarifs</a></li>
          <li><a href="<?= SITE_URL ?>/pages/blog.php">Blog</a></li>
          <li><a href="<?= SITE_URL ?>/pages/faq.php">FAQ</a></li>
          <li><a href="<?= SITE_URL ?>/pages/contact.php">Contact</a></li>
        </ul>
      </div>

      <!-- Services -->
      <div class="col-lg-2 col-md-3 col-6">
        <h6 class="footer-heading">Services</h6>
        <ul class="footer-links">
          <li><a href="<?= SITE_URL ?>/pages/services.php">Shooting photo</a></li>
          <li><a href="<?= SITE_URL ?>/pages/services.php">Clips vidéo</a></li>
          <li><a href="<?= SITE_URL ?>/pages/services.php">Design graphique</a></li>
          <li><a href="<?= SITE_URL ?>/pages/services.php">Création de logo</a></li>
          <li><a href="<?= SITE_URL ?>/pages/services.php">Branding</a></li>
          <li><a href="<?= SITE_URL ?>/pages/services.php">Motion design</a></li>
          <li><a href="<?= SITE_URL ?>/pages/services.php">Community Mgmt</a></li>
          <li><a href="<?= SITE_URL ?>/pages/services.php">Événements</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div class="col-lg-4 col-md-6">
        <h6 class="footer-heading">Contact</h6>
        <div class="footer-contact-item">
          <i class="bi bi-geo-alt-fill"></i>
          <div>123 Rue de la Créativité, Abidjan, Côte d'Ivoire</div>
        </div>
        <div class="footer-contact-item">
          <i class="bi bi-telephone-fill"></i>
          <div><a href="tel:+2250000000000">+225 00 00 00 00 00</a></div>
        </div>
        <div class="footer-contact-item">
          <i class="bi bi-whatsapp"></i>
          <div><a href="https://wa.me/2250000000000">+225 00 00 00 00 00</a></div>
        </div>
        <div class="footer-contact-item">
          <i class="bi bi-envelope-fill"></i>
          <div><a href="mailto:contact@vitrineshoot.com">contact@vitrineshoot.com</a></div>
        </div>
        <div class="footer-contact-item">
          <i class="bi bi-clock-fill"></i>
          <div>Lun–Sam : 08h00 – 19h00</div>
        </div>

        <!-- Newsletter mini -->
        <div class="mt-3">
          <p style="font-size:0.83rem;color:var(--gray);margin-bottom:10px;">Inscrivez-vous à notre newsletter</p>
          <form class="d-flex gap-2" onsubmit="return false;">
            <input type="email" class="form-control form-control-sm" placeholder="Votre email"
              style="background:rgba(31,41,55,0.6);border:1px solid var(--border);color:white;border-radius:8px;">
            <button type="submit" class="btn btn-sm" style="background:var(--green);color:white;border-radius:8px;white-space:nowrap;padding:0 16px;">
              <i class="bi bi-send-fill"></i>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer Bottom -->
  <div class="footer-bottom">
    <div class="container">
      <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
        <div>&copy; <?= date('Y') ?> <strong>VitrineSHOOT</strong>. Tous droits réservés.</div>
        <div class="d-flex gap-4">
          <a href="#" style="color:var(--gray);font-size:0.83rem;" class="hover-green">Mentions légales</a>
          <a href="#" style="color:var(--gray);font-size:0.83rem;">Politique de confidentialité</a>
          <a href="#" style="color:var(--gray);font-size:0.83rem;">CGV</a>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- BACK TO TOP -->
<button id="backToTop" title="Retour en haut">
  <i class="bi bi-arrow-up"></i>
</button>

<!-- WHATSAPP FLOAT -->
<a href="https://wa.me/2250000000000" class="whatsapp-float" target="_blank" rel="noopener noreferrer" title="Chattez sur WhatsApp">
  <i class="bi bi-whatsapp"></i>
</a>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom JS -->
<script src="<?= SITE_URL ?>/assets/js/main.js"></script>
</body>
</html>
