<?php
$page = 'reviews';
require 'partials/reviews-data.php';

$beach = array_values(array_filter($reviews, fn($r) => $r['villa'] === 'beach'));
$residence = array_values(array_filter($reviews, fn($r) => $r['villa'] === 'residence'));
$all = $reviews;

// Render a single review card
function review_card($r)
{
    echo '<figure class="review-card flex flex-col border border-gray-200 bg-white p-8" data-villa="' . $r['villa'] . '">';
    echo '<iconify-icon icon="ph:quotes-fill" class="!text-brand-200 !text-3xl"></iconify-icon>';
    echo '<blockquote class="mt-4 flex-1 leading-relaxed">' . $r['quote'] . '</blockquote>';
    echo '<figcaption class="text-brand mt-6 text-sm font-medium tracking-wider uppercase">' . $r['dates'] . '</figcaption>';
    echo '</figure>';
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Guest Reviews - Villa Bayu Gita, Bali</title>
  <meta
    name="description"
    content="Read what guests have to say about their stay at Villa Bayu Gita - heartfelt reviews praising the beautiful villas, attentive staff and unforgettable Bali experiences." />
  <link rel="icon" href="assets/images/favicon.webp" type="image/webp" />
  <link rel="stylesheet" href="assets/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="assets/aos/aos.css" />
  <link rel="stylesheet" href="assets/styles/output.css" />
</head>

<body>

  <?php include 'partials/page-transition.php'; ?>

  <!-- Page Content -->
  <div class="page-content">

    <?php include 'partials/header.php'; ?>

    <?php include 'partials/whatsapp-float.php'; ?>

    <!-- Main Content -->
    <main class="pt-36 md:pt-40 xl:pt-48">

      <!-- Guest Reviews -->
      <section data-aos="fade-up" class="mb-16 md:mb-20 xl:mb-28">
        <div class="delimiter">
          <div class="text-center">
            <h1
              class="font-playfair text-dark text-3xl font-normal md:text-4xl xl:text-5xl"
            >
              Guest Reviews
            </h1>
            <p class="mx-auto mt-4 max-w-2xl leading-relaxed">
              Read what our guests have to say about their stay at Villa Bayu Gita.
            </p>
          </div>

          <!-- Tabs -->
          <div class="mx-auto mt-10 flex max-w-3xl flex-col gap-2 sm:flex-row md:mt-12" role="tablist">
            <button
              type="button"
              data-tab="all"
              class="review-tab flex-1 cursor-pointer border border-gray-200 px-5 py-3 text-sm tracking-wider transition-colors"
            >
              All Reviews
            </button>
            <button
              type="button"
              data-tab="beach"
              class="review-tab flex-1 cursor-pointer border border-gray-200 px-5 py-3 text-sm tracking-wider transition-colors"
            >
              Bayu Gita Beachfront
            </button>
            <button
              type="button"
              data-tab="residence"
              class="review-tab flex-1 cursor-pointer border border-gray-200 px-5 py-3 text-sm tracking-wider transition-colors"
            >
              Bayu Gita Residence
            </button>
          </div>

          <!-- Review grid -->
          <div
            id="reviews-grid"
            class="mt-10 grid grid-cols-1 gap-8 md:mt-12 md:grid-cols-2 md:gap-10 xl:grid-cols-3"
          >
            <?php foreach ($all as $r) review_card($r); ?>
          </div>

          <!-- Pagination -->
          <nav
            id="reviews-pagination"
            class="mt-12 flex items-center justify-center gap-2 md:mt-16"
            aria-label="Pagination"
          ></nav>
        </div>
      </section>

    </main>

    <?php include 'partials/footer.php'; ?>

  </div>

  <script>
    // Static review tabs. Shows the first 9 cards of the active tab.
    // Pagination is decorative only (static, non-functional).
    (function () {
      const PER_PAGE = 9;
      const tabs = document.querySelectorAll('.review-tab');
      const cards = Array.from(document.querySelectorAll('.review-card'));
      const pager = document.getElementById('reviews-pagination');
      const TAB_ON = ['border-brand', 'bg-brand', 'text-white'];
      const TAB_OFF = ['text-dark-500', 'hover:bg-brand-50', 'hover:text-brand'];
      const PG_ON = ['border-brand', 'bg-brand', 'text-white'];
      const PG_OFF = ['text-dark-500', 'border-gray-200'];

      let villa = 'all';

      const matches = () =>
        cards.filter((c) => villa === 'all' || c.dataset.villa === villa);

      function render() {
        const list = matches();
        cards.forEach((c) => (c.style.display = 'none'));
        list.slice(0, PER_PAGE).forEach((c) => (c.style.display = ''));
        renderPager(Math.max(1, Math.ceil(list.length / PER_PAGE)));
      }

      function pagerItem(label, opts) {
        // Static, non-interactive pagination items (display only)
        const el = document.createElement('span');
        el.className =
          'flex size-10 items-center justify-center border text-sm ' +
          (opts.active ? PG_ON.join(' ') : PG_OFF.join(' ')) +
          (opts.muted ? ' opacity-40' : '');
        el.innerHTML = label;
        return el;
      }

      function renderPager(totalPages) {
        pager.innerHTML = '';
        if (totalPages <= 1) return;
        pager.appendChild(
          pagerItem('<iconify-icon icon="ph:caret-left"></iconify-icon>', { muted: true }),
        );
        for (let i = 1; i <= totalPages; i++) {
          pager.appendChild(pagerItem(String(i), { active: i === 1 }));
        }
        pager.appendChild(
          pagerItem('<iconify-icon icon="ph:caret-right"></iconify-icon>', {}),
        );
      }

      function setTab(btn) {
        tabs.forEach((t) => {
          t.classList.remove(...TAB_ON);
          t.classList.add(...TAB_OFF);
        });
        btn.classList.remove(...TAB_OFF);
        btn.classList.add(...TAB_ON);
      }

      tabs.forEach((btn) => {
        btn.addEventListener('click', () => {
          setTab(btn);
          villa = btn.dataset.tab;
          render();
        });
      });

      if (tabs.length) {
        setTab(tabs[0]);
        render();
      }
    })();
  </script>

  <script src="assets/aos/aos.js" defer></script>
  <script src="assets/swiper/swiper-bundle.min.js" defer></script>
  <script src="assets/iconify-design/iconify.min.js" defer></script>
  <script src="https://unpkg.com/lenis@1.1.5/dist/lenis.min.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" defer></script>
  <script src="assets/scripts/script.js" defer></script>
</body>

</html>
