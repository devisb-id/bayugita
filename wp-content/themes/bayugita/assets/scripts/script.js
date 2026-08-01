document.addEventListener('DOMContentLoaded', function () {
  const AOS_CONFIG = {
    once: true,
    duration: 800,
    easing: 'ease-out-cubic',
    offset: 50,
  };

  // Page Transition
  const pageTransition = {
    wrapper: document.querySelector('.page-transition'),
    overlay: document.querySelector('.page-transition__overlay'),
    content: document.querySelector('.page-transition__content'),
    logo: document.querySelector('.page-transition__logo'),
    dots: document.querySelectorAll('.page-transition__dot'),
    pageContent: document.querySelector('.page-content'),
  };

  const resetPageTransition = () => {
    if (pageTransition.wrapper) {
      gsap.killTweensOf([
        pageTransition.overlay,
        pageTransition.content,
        pageTransition.logo,
        pageTransition.dots,
        pageTransition.pageContent,
      ]);

      gsap.set(pageTransition.overlay, { y: '-100%' });
      gsap.set(pageTransition.content, { opacity: 0 });
      gsap.set(pageTransition.logo, { scale: 1, opacity: 0 });
      gsap.set(pageTransition.dots, { opacity: 0.5, scale: 1 });

      if (pageTransition.pageContent) {
        pageTransition.pageContent.classList.add('revealed');
        pageTransition.pageContent.classList.remove('no-transition');
        gsap.set(pageTransition.pageContent, { clearProps: 'all' });
      }

      document.body.style.overflow = '';
    }
  };

  window.addEventListener('pageshow', (event) => {
    if (event.persisted) {
      resetPageTransition();
      AOS.refresh();
    }
  });

  const navEntry = performance.getEntriesByType('navigation')[0];
  const isReloadOrBackForward =
    navEntry && (navEntry.type === 'reload' || navEntry.type === 'back_forward');
  const isInternalNavigation =
    !isReloadOrBackForward &&
    document.referrer &&
    new URL(document.referrer).origin === window.location.origin;

  if (!pageTransition.wrapper || !isInternalNavigation) {
    AOS.init(AOS_CONFIG);
  }

  if (pageTransition.wrapper) {
    const pageEnter = () => {
      document.body.style.overflow = 'hidden';

      gsap.set(pageTransition.overlay, { y: '0%' });
      gsap.set(pageTransition.content, { opacity: 1 });
      gsap.set(pageTransition.logo, { scale: 1, opacity: 1 });

      gsap
        .timeline({
          onComplete: () => {
            document.body.style.overflow = '';
          },
        })
        .to(pageTransition.content, {
          opacity: 0,
          duration: 0.3,
          ease: 'power2.in',
        })
        .to(
          pageTransition.overlay,
          {
            y: '-100%',
            duration: 0.6,
            ease: 'power3.inOut',
          },
          '-=0.1',
        )
        .add(() => {
          if (pageTransition.pageContent) {
            pageTransition.pageContent.classList.add('revealed');
          }
          AOS.init(AOS_CONFIG);
        })
        .fromTo(
          pageTransition.pageContent,
          { y: 30, opacity: 0 },
          {
            y: 0,
            opacity: 1,
            duration: 0.8,
            ease: 'power3.out',
            clearProps: 'transform',
          },
          '-=0.05',
        );
    };

    if (isInternalNavigation) {
      pageEnter();
    } else if (pageTransition.pageContent) {
      pageTransition.pageContent.classList.add('no-transition');
    }

    const animateDots = () =>
      gsap.to(pageTransition.dots, {
        opacity: 1,
        scale: 1.3,
        duration: 0.4,
        stagger: { each: 0.15, repeat: -1, yoyo: true },
        ease: 'power2.inOut',
      });

    const pageLeave = (url) => {
      document.body.style.overflow = 'hidden';

      gsap.set(pageTransition.overlay, { y: '100%' });
      gsap.set(pageTransition.content, { opacity: 0 });
      gsap.set(pageTransition.logo, { scale: 0.5, opacity: 0 });
      gsap.set(pageTransition.dots, { opacity: 0.5, scale: 1 });

      gsap
        .timeline({ onComplete: () => (window.location.href = url) })
        .to(pageTransition.overlay, {
          y: '0%',
          duration: 0.5,
          ease: 'power3.inOut',
        })
        .to(pageTransition.content, { opacity: 1, duration: 0.3 }, '-=0.2')
        .to(
          pageTransition.logo,
          {
            scale: 1,
            opacity: 1,
            duration: 0.4,
            ease: 'back.out(1.7)',
          },
          '-=0.2',
        )
        .add(() => animateDots(), '-=0.1');
    };

    document.addEventListener('click', (e) => {
      const link = e.target.closest('a[href$=".php"]');
      if (!link) return;

      const href = link.getAttribute('href');
      if (
        href &&
        !href.startsWith('#') &&
        !href.startsWith('http') &&
        !href.startsWith('mailto') &&
        !href.startsWith('tel')
      ) {
        e.preventDefault();
        pageLeave(href);
      }
    });
  }

  // Lenis Smooth Scroll
  // Smooth the desktop wheel only; leave touch to the native browser.
  // syncTouch breaks scroll on Android, so we don't set it (defaults false).
  const lenis = new Lenis({
    duration: 1.1,
    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
  });

  // Parallax with Intersection Observer
  const lerp = (a, b, t) => a + (b - a) * t;
  const parallaxElements = document.querySelectorAll('.parallax');
  // Img is 120% tall; translate stays within the 10% buffer each side.
  const PARALLAX_OVERFLOW = 0.1;

  if (parallaxElements.length > 0) {
    const items = Array.from(parallaxElements).map((el) => ({
      el,
      speed: parseFloat(el.dataset.speed) || 0.25,
      y: 0,
      target: 0,
      isVisible: false,
    }));

    const parallaxObserver = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          const item = items.find((i) => i.el === entry.target);
          if (item) item.isVisible = entry.isIntersecting;
        });
      },
      { rootMargin: '100px' },
    );

    items.forEach((item) => parallaxObserver.observe(item.el));

    const updateParallax = () => {
      const vh = window.innerHeight;
      for (const it of items) {
        if (!it.isVisible) continue;
        const r = it.el.getBoundingClientRect();
        // Safe travel each side; subtract it.y to measure layout pos (no feedback).
        const maxShift = r.height * (PARALLAX_OVERFLOW / (1 + 2 * PARALLAX_OVERFLOW));
        const fromCenter = r.top + r.height / 2 - it.y - vh / 2;
        const shift = -fromCenter * it.speed;
        it.target = Math.max(-maxShift, Math.min(maxShift, shift));
      }
    };

    const applyParallax = (it) => {
      it.el.style.transform = `translate3d(0, ${it.y.toFixed(2)}px, 0)`;
    };

    const tick = () => {
      let moved = false;
      for (const it of items) {
        if (!it.isVisible) continue;
        it.y = lerp(it.y, it.target, 0.1);
        applyParallax(it);
        moved = true;
      }
      return moved;
    };

    updateParallax();
    items.forEach((it) => {
      it.y = it.target;
      applyParallax(it);
    });

    // Update on any scroll source + resize.
    lenis.on('scroll', updateParallax);
    window.addEventListener('scroll', updateParallax, { passive: true });
    window.addEventListener('resize', updateParallax);

    const raf = (time) => {
      lenis.raf(time);
      updateParallax();
      tick();
      requestAnimationFrame(raf);
    };
    requestAnimationFrame(raf);
  } else {
    const raf = (time) => {
      lenis.raf(time);
      requestAnimationFrame(raf);
    };
    requestAnimationFrame(raf);
  }

  // Mobile Navbar
  const mobileNavbar = {
    overlay: document.getElementById('mobile-navbar-overlay'),
    content: document.getElementById('mobile-navbar-content'),
    open: document.getElementById('mobile-navbar-open'),
    close: document.getElementById('mobile-navbar-close'),
    menu: document.getElementById('mobile-navbar-menu'),
    divider: document.getElementById('mobile-navbar-divider'),
    auth: document.getElementById('mobile-navbar-auth'),
  };

  if (mobileNavbar.content && mobileNavbar.open && mobileNavbar.overlay) {
    const menuItems = Array.from(mobileNavbar.menu?.children || []);
    const animatedItems = [...menuItems, mobileNavbar.divider, mobileNavbar.auth].filter(Boolean);

    const showNavbar = () => {
      gsap.set(mobileNavbar.content, { x: '100%' });
      gsap.set(mobileNavbar.overlay, { opacity: 0 });
      gsap.set(animatedItems, { opacity: 0, x: 20 });
      gsap.set(mobileNavbar.close, { opacity: 0, scale: 0.8 });

      mobileNavbar.overlay.classList.remove('hidden');
      mobileNavbar.content.classList.remove('hidden');
      mobileNavbar.content.classList.add('flex');
      document.body.style.overflow = 'hidden';

      const closeIcon = mobileNavbar.close.querySelector('iconify-icon');
      if (closeIcon) {
        const iconName = closeIcon.getAttribute('icon');
        closeIcon.setAttribute('icon', '');
        requestAnimationFrame(() => closeIcon.setAttribute('icon', iconName));
      }

      gsap
        .timeline()
        .to(mobileNavbar.overlay, { opacity: 1, duration: 0.2, ease: 'power2.out' })
        .to(mobileNavbar.content, { x: '0%', duration: 0.3, ease: 'power3.out' }, '-=0.15')
        .to(
          mobileNavbar.close,
          { opacity: 1, scale: 1, duration: 0.2, ease: 'back.out(1.7)', clearProps: 'all' },
          '-=0.2',
        )
        .to(
          animatedItems,
          {
            x: 0,
            opacity: 1,
            duration: 0.25,
            stagger: 0.03,
            ease: 'power2.out',
            clearProps: 'all',
          },
          '-=0.15',
        );
    };

    const hideNavbar = () => {
      gsap
        .timeline({
          onComplete: () => {
            mobileNavbar.content.classList.remove('flex');
            mobileNavbar.content.classList.add('hidden');
            mobileNavbar.overlay.classList.add('hidden');
            document.body.style.overflow = '';
            gsap.set([...animatedItems, mobileNavbar.close], { clearProps: 'all' });
          },
        })
        .to(mobileNavbar.close, { opacity: 0, scale: 0.8, duration: 0.2, ease: 'power2.in' })
        .to(
          animatedItems,
          { x: 20, opacity: 0, duration: 0.2, stagger: 0.02, ease: 'power2.in' },
          '-=0.1',
        )
        .to(mobileNavbar.content, { x: '100%', duration: 0.3, ease: 'power3.in' }, '-=0.1')
        .to(mobileNavbar.overlay, { opacity: 0, duration: 0.2, ease: 'power2.in' }, '-=0.2');
    };

    mobileNavbar.open.addEventListener('click', showNavbar);
    mobileNavbar.close.addEventListener('click', hideNavbar);
    mobileNavbar.overlay.addEventListener('click', hideNavbar);

    // Mobile nav accordion groups
    const navToggles = document.querySelectorAll('.mobile-nav-toggle');

    const closeGroup = (toggle) => {
      const panel = toggle.closest('.mobile-nav-group')?.querySelector('.mobile-nav-panel');
      if (!panel) return;
      panel.style.height = `${panel.scrollHeight}px`;
      requestAnimationFrame(() => {
        panel.style.height = '0px';
      });
      toggle.classList.remove('mobile-nav-toggle--open');
    };

    const openGroup = (toggle) => {
      const panel = toggle.closest('.mobile-nav-group')?.querySelector('.mobile-nav-panel');
      if (!panel) return;
      panel.classList.remove('hidden');
      panel.classList.add('flex');
      panel.style.height = '0px';
      requestAnimationFrame(() => {
        panel.style.height = `${panel.scrollHeight}px`;
      });
      toggle.classList.add('mobile-nav-toggle--open');
    };

    navToggles.forEach((toggle) => {
      const panel = toggle.closest('.mobile-nav-group')?.querySelector('.mobile-nav-panel');
      if (!panel) return;

      panel.addEventListener('transitionend', (e) => {
        if (e.propertyName !== 'height') return;
        if (toggle.classList.contains('mobile-nav-toggle--open')) {
          panel.style.height = 'auto';
        } else {
          panel.classList.add('hidden');
          panel.classList.remove('flex');
          panel.style.height = '';
        }
      });

      toggle.addEventListener('click', () => {
        const isOpen = toggle.classList.contains('mobile-nav-toggle--open');

        navToggles.forEach((other) => {
          if (other !== toggle && other.classList.contains('mobile-nav-toggle--open')) {
            closeGroup(other);
          }
        });

        if (isOpen) {
          closeGroup(toggle);
        } else {
          openGroup(toggle);
        }
      });
    });
  }

  // Swiper Configuration
  const swiperDefaults = {
    speed: 1000,
    grabCursor: true,
    watchSlidesProgress: true,
    observer: true,
    observeParents: true,
    resizeObserver: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
  };

  // Hero Slider - Fade Effect
  const heroContainer = document.querySelector('.slider-hero');
  if (heroContainer) {
    const heroSwiper = heroContainer.querySelector('.swiper');
    if (heroSwiper) {
      const heroSection = heroContainer.closest('section');

      new Swiper(heroSwiper, {
        effect: 'fade',
        fadeEffect: { crossFade: true },
        speed: 1000,
        loop: true,
        grabCursor: false,
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        },
        pagination: {
          el: heroSection.querySelector('.btn-hero-indicator'),
          clickable: true,
        },
        navigation: {
          prevEl: heroContainer.querySelector('.btn-hero-prev'),
          nextEl: heroContainer.querySelector('.btn-hero-next'),
        },
      });
    }
  }

  const sliders = [
    {
      selector: '.slider-reviews',
      navigationSelectors: { prev: '.btn-review-prev', next: '.btn-review-next' },
      loop: true,
      breakpoints: {
        0: { slidesPerView: 1, spaceBetween: 0 },
      },
    },
  ];

  sliders.forEach(({ selector, navigationSelectors, loop, breakpoints }) => {
    document.querySelectorAll(selector).forEach((container) => {
      const swiperEl = container.querySelector('.swiper');
      if (!swiperEl) return;

      const swiperConfig = { ...swiperDefaults, breakpoints };

      if (navigationSelectors) {
        const prevEl = document.querySelector(navigationSelectors.prev);
        const nextEl = document.querySelector(navigationSelectors.next);
        if (prevEl && nextEl) swiperConfig.navigation = { prevEl, nextEl };
      }

      if (loop !== undefined) swiperConfig.loop = loop;

      new Swiper(swiperEl, swiperConfig);
    });
  });

  // Modal System
  const openModal = (modal) => {
    modal.classList.add('active');
    document.body.style.overflow = 'hidden';
  };

  const closeModal = (modal) => {
    modal.classList.remove('active');
    document.body.style.overflow = '';
  };

  document.addEventListener('click', (e) => {
    const openBtn = e.target.closest('[data-modal-open]');
    if (openBtn) {
      const modal = document.getElementById(openBtn.getAttribute('data-modal-open'));
      if (modal) openModal(modal);
      return;
    }

    const closeBtn = e.target.closest('[data-modal-close]');
    if (closeBtn) {
      const modal = closeBtn.closest('.modal');
      if (modal) closeModal(modal);
      return;
    }

    if (e.target.classList.contains('modal')) {
      closeModal(e.target);
    }
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      const activeModal = document.querySelector('.modal.active');
      if (activeModal) closeModal(activeModal);
    }
  });

  // Accordions
  const layoutToggle = document.getElementById('accordion-toggle');
  const layoutContent = document.getElementById('accordion-content');
  const layoutIcon = layoutToggle?.querySelector('iconify-icon');

  if (layoutToggle && layoutContent) {
    layoutToggle.addEventListener('click', function () {
      const isOpen = layoutContent.classList.contains('open');
      if (isOpen) {
        layoutContent.classList.remove('open');
        if (layoutIcon) layoutIcon.style.transform = 'rotate(0deg)';
      } else {
        layoutContent.classList.add('open');
        if (layoutIcon) layoutIcon.style.transform = 'rotate(180deg)';
      }
    });
  }

  document.querySelectorAll('.accordion-item').forEach(function (item) {
    const trigger = item.querySelector('.accordion-trigger');
    const slide = item.querySelector('.accordion-slide');
    const caret = trigger?.querySelector('iconify-icon');

    if (trigger && slide) {
      trigger.addEventListener('click', function () {
        const isOpen = slide.classList.contains('open');

        // Single-open group: collapse siblings before opening
        const group = item.closest('[data-accordion-single]');
        if (group && !isOpen) {
          group.querySelectorAll('.accordion-item').forEach(function (other) {
            if (other === item) return;
            const otherSlide = other.querySelector('.accordion-slide');
            const otherCaret = other.querySelector('.accordion-trigger iconify-icon');
            otherSlide?.classList.remove('open');
            if (otherCaret) otherCaret.style.transform = 'rotate(0deg)';
          });
        }

        if (isOpen) {
          slide.classList.remove('open');
          if (caret) caret.style.transform = 'rotate(0deg)';
        } else {
          slide.classList.add('open');
          if (caret) caret.style.transform = 'rotate(180deg)';
        }
      });
    }
  });
});
