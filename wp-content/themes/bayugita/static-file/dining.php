<?php $page = 'dining'; ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>The Dining - Villa Bayu Gita, Bali</title>
  <meta
    name="description"
    content="Bayu Gita's chef and cook prepare daily breakfast, lunch, snacks and dinner from an extensive suggestion menu of Asian and international home-style dishes, with vegetarian and children's options." />
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
    <main>

      <!-- Hero Section -->
      <section class="relative h-[60vh] w-full overflow-hidden md:h-[70vh] xl:h-[80vh]">
        <img
          src="assets/images/experience-dining-hero.webp"
          alt="Villa Bayu Gita - The Dining"
          class="parallax w-full object-cover"
        />
      </section>

      <!-- Intro -->
      <section data-aos="fade-up" class="mt-16 md:mt-20 xl:mt-28">
        <div class="mx-auto w-full max-w-5xl px-6">
          <div class="text-center">
            <h1>The Dining</h1>
          </div>
          <div class="mx-auto mt-10 max-w-4xl text-center md:mt-12">
            <p class="leading-relaxed">
              Bayu Gita&rsquo;s chef and cook are at your service to prepare daily breakfast, lunch,
              snacks and dinner.
            </p>
          </div>
        </div>
      </section>

      <!-- Full Width Image -->
      <section data-aos="fade-up" class="mt-16 md:mt-20 xl:mt-28">
        <div class="aspect-[16/7] w-full overflow-hidden">
          <img
            src="assets/images/experience-dining-1.webp"
            alt="Villa Bayu Gita - In-Villa Dining"
            class="parallax w-full object-cover"
            loading="lazy"
          />
        </div>
      </section>

      <!-- Body -->
      <section data-aos="fade-up" class="mt-16 mb-16 md:mt-20 md:mb-20 xl:mt-28 xl:mb-28">
        <div class="mx-auto w-full max-w-4xl px-6">
          <p class="leading-relaxed">
            The villas offer an extensive suggestion menu of delicious home-style meals featuring
            Asian and international dishes to cater to all tastes, with an excellent selection of
            vegetarian and children&rsquo;s options. The chef is also more than happy to tailor
            meals to accommodate any special dietary requirements and a stay is not complete without
            sampling his pepes ikan (fish steamed in banana leaf), satay ayam (chicken satay on
            bamboo skewers) or pisang goreng (fried banana) with ice cream.
          </p>
          <p class="mt-6 leading-relaxed">
            Groceries and beverages are charged at cost price plus 20%++ handling fee. Guests will be
            requested to provide grocery money in advance, and the staff will do the shopping and
            keep the receipts for reference. To make the most of the kitchen and give staff time to
            shop, it is a good idea to plan meals the evening before.
          </p>
        </div>
      </section>

    </main>

    <?php include 'partials/footer.php'; ?>

  </div>

  <script src="assets/aos/aos.js" defer></script>
  <script src="assets/swiper/swiper-bundle.min.js" defer></script>
  <script src="assets/iconify-design/iconify.min.js" defer></script>
  <script src="https://unpkg.com/lenis@1.1.5/dist/lenis.min.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" defer></script>
  <script src="assets/scripts/script.js" defer></script>
</body>

</html>
