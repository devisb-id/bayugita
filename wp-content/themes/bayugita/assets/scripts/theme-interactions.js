/**
 * Bayu Gita — SCF section interactions.
 * Ports the per-page inline scripts (gallery lightbox + pagination, rates tabs,
 * review filter) from the static prototype. All handlers no-op when their markup
 * is absent, so it is safe to load globally.
 */
(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', function () {
    initPhotoGallery();
    initVideoGallery();
    initRatesTable();
    initReviewFilter();
  });

  /* ---------- Photo gallery: lightGallery + client pagination ---------- */
  function initPhotoGallery() {
    var grid = document.getElementById('photo-gallery');
    if (!grid) return;

    if (typeof lightGallery !== 'undefined') {
      lightGallery(grid, {
        speed: 400,
        plugins: typeof lgZoom !== 'undefined' ? [lgZoom] : [],
        selector: 'a',
        download: false,
        counter: false,
        getCaptionFromTitleOrAlt: false,
      });
    }

    var PER_PAGE = 12;
    var items = Array.prototype.slice.call(grid.querySelectorAll('a'));
    if (items.length <= PER_PAGE) return;

    var totalPages = Math.ceil(items.length / PER_PAGE);
    var pager = document.createElement('div');
    pager.className = 'mt-10 flex items-center justify-center gap-2';
    grid.parentNode.insertBefore(pager, grid.nextSibling);

    function show(page) {
      var start = (page - 1) * PER_PAGE;
      items.forEach(function (el, i) {
        el.style.display = i >= start && i < start + PER_PAGE ? '' : 'none';
      });
      Array.prototype.forEach.call(pager.children, function (btn) {
        btn.classList.toggle('active', parseInt(btn.dataset.page, 10) === page);
      });
      window.scrollTo({ top: grid.offsetTop - 120, behavior: 'smooth' });
    }

    for (var p = 1; p <= totalPages; p++) {
      var btn = document.createElement('button');
      btn.className = 'btn-paginate';
      btn.dataset.page = p;
      btn.textContent = p;
      btn.addEventListener('click', function () {
        show(parseInt(this.dataset.page, 10));
      });
      pager.appendChild(btn);
    }
    show(1);
  }

  /* ---------- Video gallery: lightGallery video ---------- */
  function initVideoGallery() {
    var grid = document.getElementById('video-gallery');
    if (!grid || typeof lightGallery === 'undefined') return;
    lightGallery(grid, {
      speed: 400,
      plugins: typeof lgVideo !== 'undefined' ? [lgVideo] : [],
      selector: 'a',
      download: false,
      counter: false,
      autoplayFirstVideo: false,
    });
  }

  /* ---------- Rates: villa tabs + per-villa year tabs ---------- */
  function initRatesTable() {
    var villaTabs = document.querySelectorAll('.rate-villa-tab');
    if (!villaTabs.length) return;

    var villaPanels = document.querySelectorAll('.rate-villa-panel');
    var descs = document.querySelectorAll('.rate-villa-desc');

    function activate(nodes, match) {
      nodes.forEach(function (n) {
        var on = n.dataset.villa === match;
        n.classList.toggle('active', on);
        n.classList.toggle('hidden', !on && !n.classList.contains('rate-villa-tab'));
      });
    }

    villaTabs.forEach(function (tab) {
      tab.addEventListener('click', function () {
        var villa = tab.dataset.villa;
        villaTabs.forEach(function (t) { t.classList.toggle('active', t === tab); });
        villaPanels.forEach(function (p) { p.classList.toggle('hidden', p.dataset.villa !== villa); });
        descs.forEach(function (d) { d.classList.toggle('hidden', d.dataset.villa !== villa); });
      });
    });

    // Year tabs are scoped inside each villa panel.
    villaPanels.forEach(function (panel) {
      var yearTabs = panel.querySelectorAll('.rate-year-tab');
      var yearPanels = panel.querySelectorAll('.rate-panel');
      yearTabs.forEach(function (yt) {
        yt.addEventListener('click', function () {
          var year = yt.dataset.year;
          yearTabs.forEach(function (t) { t.classList.toggle('active', t === yt); });
          yearPanels.forEach(function (yp) { yp.classList.toggle('hidden', yp.dataset.year !== year); });
        });
      });
    });
  }

  /* ---------- Guest reviews: villa filter + pagination ---------- */
  function initReviewFilter() {
    var tabs = document.querySelectorAll('.review-tab');
    var grid = document.getElementById('reviews-grid');
    if (!tabs.length || !grid) return;

    var PER_PAGE = 9;
    var cards = Array.prototype.slice.call(grid.querySelectorAll('.review-card'));
    var villa = 'all';
    var page = 1;

    var pager = document.createElement('nav');
    pager.className = 'mt-12 flex items-center justify-center gap-2 md:mt-16';
    grid.parentNode.insertBefore(pager, grid.nextSibling);

    function matches() {
      return cards.filter(function (c) { return villa === 'all' || c.dataset.villa === villa; });
    }

    function render() {
      var list = matches();
      var totalPages = Math.max(1, Math.ceil(list.length / PER_PAGE));
      if (page > totalPages) page = 1;
      cards.forEach(function (c) { c.style.display = 'none'; });
      list.slice((page - 1) * PER_PAGE, page * PER_PAGE).forEach(function (c) { c.style.display = ''; });

      pager.innerHTML = '';
      if (totalPages <= 1) return;
      for (var i = 1; i <= totalPages; i++) {
        (function (n) {
          var b = document.createElement('button');
          b.className = 'btn-paginate' + (n === page ? ' active' : '');
          b.textContent = n;
          b.addEventListener('click', function () { page = n; render(); });
          pager.appendChild(b);
        })(i);
      }
    }

    tabs.forEach(function (btn) {
      btn.addEventListener('click', function () {
        tabs.forEach(function (t) { t.classList.toggle('active', t === btn); });
        villa = btn.dataset.tab;
        page = 1;
        render();
      });
    });

    render();
  }
})();
