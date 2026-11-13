/* ============================================
   VITRINESHOOT - Main JavaScript
   ============================================ */

document.addEventListener('DOMContentLoaded', function () {

  // ─── LOADER ───
  const loader = document.getElementById('loader');
  if (loader) {
    setTimeout(() => loader.classList.add('hidden'), 1600);
  }

  // ─── NAVBAR SCROLL ───
  const nav = document.getElementById('mainNav');
  if (nav) {
    const handleNavScroll = () => {
      nav.classList.toggle('scrolled', window.scrollY > 50);
    };
    window.addEventListener('scroll', handleNavScroll, { passive: true });
    handleNavScroll();
  }

  // ─── ACTIVE NAV LINK ───
  const currentPath = window.location.pathname.split('/').pop() || 'index.php';
  document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
    const href = link.getAttribute('href');
    if (href && (href === currentPath || (currentPath === '' && href === 'index.php') || (currentPath === 'index.php' && href === 'index.php'))) {
      link.classList.add('active');
    }
  });

  // ─── BACK TO TOP ───
  const backToTop = document.getElementById('backToTop');
  if (backToTop) {
    window.addEventListener('scroll', () => {
      backToTop.classList.toggle('visible', window.scrollY > 400);
    }, { passive: true });
    backToTop.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
  }

  // ─── SCROLL REVEAL ───
  const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        revealObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

  document.querySelectorAll('.reveal, .reveal-left, .reveal-right').forEach(el => {
    revealObserver.observe(el);
  });

  // ─── COUNTER ANIMATION ───
  const counters = document.querySelectorAll('[data-count]');
  if (counters.length > 0) {
    const counterObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          counterObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });

    counters.forEach(counter => counterObserver.observe(counter));
  }

  function animateCounter(el) {
    const target = parseInt(el.getAttribute('data-count'), 10);
    const suffix = el.getAttribute('data-suffix') || '';
    const duration = 2000;
    const step = target / (duration / 16);
    let current = 0;
    const timer = setInterval(() => {
      current += step;
      if (current >= target) {
        current = target;
        clearInterval(timer);
      }
      el.textContent = Math.floor(current) + suffix;
    }, 16);
  }

  // ─── PORTFOLIO FILTER ───
  const filterBtns = document.querySelectorAll('.filter-btn');
  const portfolioItems = document.querySelectorAll('.portfolio-item');

  if (filterBtns.length > 0) {
    filterBtns.forEach(btn => {
      btn.addEventListener('click', function () {
        filterBtns.forEach(b => b.classList.remove('active'));
        this.classList.add('active');

        const filter = this.getAttribute('data-filter');
        portfolioItems.forEach(item => {
          const category = item.getAttribute('data-category');
          if (filter === '*' || category === filter) {
            item.style.display = '';
            item.style.animation = 'fadeInUp 0.4s ease forwards';
          } else {
            item.style.display = 'none';
          }
        });
      });
    });
  }

  // ─── CONTACT FORM ───
  const contactForm = document.getElementById('contactForm');
  if (contactForm) {
    contactForm.addEventListener('submit', function (e) {
      e.preventDefault();
      const btn = this.querySelector('[type="submit"]');
      const originalText = btn.innerHTML;

      btn.disabled = true;
      btn.innerHTML = '<i class="bi bi-hourglass-split me-2"></i>Envoi en cours...';

      setTimeout(() => {
        btn.innerHTML = '<i class="bi bi-check-circle me-2"></i>Message envoyé !';
        btn.style.background = 'linear-gradient(135deg, #16A34A, #0f7a36)';
        contactForm.reset();

        setTimeout(() => {
          btn.disabled = false;
          btn.innerHTML = originalText;
          btn.style.background = '';
        }, 3000);
      }, 1500);
    });
  }

  // ─── SMOOTH HOVER TILT ON CARDS ───
  document.querySelectorAll('.service-card, .pricing-card').forEach(card => {
    card.addEventListener('mousemove', function (e) {
      const rect = this.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      const cx = rect.width / 2;
      const cy = rect.height / 2;
      const rx = (y - cy) / cy * 4;
      const ry = (cx - x) / cx * 4;
      this.style.transform = `translateY(-8px) rotateX(${rx}deg) rotateY(${ry}deg)`;
    });
    card.addEventListener('mouseleave', function () {
      this.style.transform = '';
    });
  });

  // ─── NAVBAR MOBILE CLOSE ON LINK CLICK ───
  const navCollapse = document.getElementById('navbarNav');
  if (navCollapse) {
    document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
      link.addEventListener('click', () => {
        if (window.innerWidth < 992) {
          const bsCollapse = bootstrap.Collapse.getInstance(navCollapse);
          if (bsCollapse) bsCollapse.hide();
        }
      });
    });
  }

  // ─── TESTIMONIALS AUTO-SCROLL ───
  const carousel = document.getElementById('testimonialsCarousel');
  if (carousel) {
    new bootstrap.Carousel(carousel, { interval: 5000, ride: 'carousel' });
  }

  // ─── LAZY IMAGES ───
  const lazyImages = document.querySelectorAll('img[data-src]');
  if (lazyImages.length > 0) {
    const imgObserver = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const img = entry.target;
          img.src = img.dataset.src;
          img.removeAttribute('data-src');
          imgObserver.unobserve(img);
        }
      });
    });
    lazyImages.forEach(img => imgObserver.observe(img));
  }

  // ─── PARALLAX HERO ───
  const heroSection = document.querySelector('.hero-section');
  if (heroSection) {
    window.addEventListener('scroll', () => {
      const scrollY = window.scrollY;
      const heroShapes = heroSection.querySelectorAll('.shape');
      heroShapes.forEach((shape, i) => {
        const speed = 0.1 + i * 0.05;
        shape.style.transform = `translateY(${scrollY * speed}px)`;
      });
    }, { passive: true });
  }

  // ─── PORTFOLIO LIGHTBOX (simple) ───
  document.querySelectorAll('.portfolio-item').forEach(item => {
    item.addEventListener('click', function () {
      const img = this.querySelector('img');
      const title = this.querySelector('.portfolio-info h5');
      if (!img) return;

      const modal = document.createElement('div');
      modal.className = 'portfolio-modal';
      modal.innerHTML = `
        <div class="portfolio-modal-backdrop">
          <div class="portfolio-modal-content">
            <button class="portfolio-modal-close"><i class="bi bi-x-lg"></i></button>
            <img src="${img.src}" alt="${img.alt}">
            ${title ? `<p class="portfolio-modal-title">${title.textContent}</p>` : ''}
          </div>
        </div>
      `;

      const style = document.createElement('style');
      style.textContent = `
        .portfolio-modal { position:fixed; inset:0; z-index:10000; }
        .portfolio-modal-backdrop { background:rgba(0,0,0,0.95); display:flex; align-items:center; justify-content:center; height:100vh; padding:20px; cursor:pointer; }
        .portfolio-modal-content { position:relative; max-width:90vw; max-height:90vh; cursor:default; }
        .portfolio-modal-content img { max-width:100%; max-height:80vh; border-radius:12px; display:block; }
        .portfolio-modal-close { position:absolute; top:-16px; right:-16px; width:40px; height:40px; background:#DC2626; border:none; color:white; border-radius:50%; font-size:1.1rem; cursor:pointer; display:flex; align-items:center; justify-content:center; }
        .portfolio-modal-title { color:white; text-align:center; margin-top:12px; font-weight:600; }
      `;
      document.head.appendChild(style);
      document.body.appendChild(modal);
      document.body.style.overflow = 'hidden';

      const closeModal = () => { modal.remove(); style.remove(); document.body.style.overflow = ''; };
      modal.querySelector('.portfolio-modal-close').addEventListener('click', closeModal);
      modal.querySelector('.portfolio-modal-backdrop').addEventListener('click', function (e) {
        if (e.target === this) closeModal();
      });
      document.addEventListener('keydown', function esc(e) {
        if (e.key === 'Escape') { closeModal(); document.removeEventListener('keydown', esc); }
      });
    });
  });

});
