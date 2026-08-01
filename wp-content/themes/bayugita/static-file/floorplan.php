<?php $page = 'floorplan'; ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Floorplan - Villa Bayu Gita, Bali</title>
  <meta
    name="description"
    content="View and download the floorplans for Villa Bayu Gita - the detailed villa layout and keyplan for Bayu Gita Beachfront and Bayu Gita Residence." />
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

      <!-- Floorplan -->
      <section data-aos="fade-up">
        <div class="delimiter">
          <h1
            class="font-playfair text-dark text-center text-3xl font-normal md:text-4xl xl:text-5xl"
          >
            Floorplan
          </h1>
          <p class="mx-auto mt-4 max-w-2xl text-center leading-relaxed">
            Explore the layout and keyplan of Villa Bayu Gita. Both villas can be rented separately
            or together, providing accommodation for up to 18 adults.
          </p>

          <!-- Bayu Gita Beachfront -->
          <div class="mx-auto mt-12 max-w-5xl md:mt-16">
            <div class="text-center">
              <h2 class="!text-xl md:!text-2xl xl:!text-3xl">Bayu Gita Beachfront</h2>
              <p class="text-brand mt-1 text-sm font-medium tracking-wider uppercase">
                6 Bedroom Villa
              </p>
            </div>
            <div class="mt-8 overflow-hidden border border-gray-200 bg-white p-4 md:p-8">
              <img
                src="assets/images/floorplan-beachfront.webp"
                alt="Bayu Gita Beachfront Floorplan &amp; Keyplan"
                class="mx-auto h-auto w-full"
                loading="lazy"
              />
            </div>
            <div class="mt-8 text-center">
              <a
                href="assets/images/floorplan-beachfront.webp"
                download="Bayu Gita Beachfront - Floorplan.webp"
                class="btn-secondary group inline-flex"
              >
                <iconify-icon icon="ph:download-simple" class="!text-brand"></iconify-icon>
                Download in High Resolution
              </a>
            </div>
          </div>

          <!-- Divider -->
          <div class="mx-auto mt-16 max-w-5xl md:mt-20">
            <div class="divider"></div>
          </div>

          <!-- Bayu Gita Residence -->
          <div class="mx-auto mt-16 max-w-5xl md:mt-20">
            <div class="text-center">
              <h2 class="!text-xl md:!text-2xl xl:!text-3xl">Bayu Gita Residence</h2>
              <p class="text-brand mt-1 text-sm font-medium tracking-wider uppercase">
                3 Bedroom Villa
              </p>
            </div>
            <div class="mt-8 overflow-hidden border border-gray-200 bg-white p-4 md:p-8">
              <img
                src="assets/images/floorplan-residence.webp"
                alt="Bayu Gita Residence Floorplan &amp; Keyplan"
                class="mx-auto h-auto w-full"
                loading="lazy"
              />
            </div>
            <div class="mt-8 text-center">
              <a
                href="assets/images/floorplan-residence.webp"
                download="Bayu Gita Residence - Floorplan.webp"
                class="btn-secondary group inline-flex"
              >
                <iconify-icon icon="ph:download-simple" class="!text-brand"></iconify-icon>
                Download in High Resolution
              </a>
            </div>
          </div>
        </div>
      </section>

      <!-- Gallery CTA -->
      <section data-aos="fade-up" class="mt-16 mb-16 md:mt-20 md:mb-20 xl:mt-28 xl:mb-28">
        <div class="mx-auto w-full max-w-3xl px-6 text-center">
          <h2>Explore the Villa in Pictures</h2>
          <p class="mx-auto mt-4 max-w-xl leading-relaxed">
            Browse our photo gallery to see the indoor and outdoor living spaces, bedrooms, pools
            and beachfront setting of both villas.
          </p>
          <div class="mt-8 flex justify-center">
            <a href="gallery.php" class="btn-primary group">
              View Photo Gallery
              <iconify-icon
                icon="ph:arrow-right"
                class="group-hover:animate-bounce-right"
              ></iconify-icon>
            </a>
          </div>
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
