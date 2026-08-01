<?php
$page = 'special-offers';
require 'partials/offers-data.php';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Special Offers - Villa Bayu Gita, Bali</title>
  <meta
    name="description"
    content="Special offers at Villa Bayu Gita - preferential rates for extended stays and early bird bookings at our beachfront villa estate in Ketewel, Bali." />
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

      <!-- Special Offers -->
      <section data-aos="fade-up" class="mb-16 md:mb-20 xl:mb-28">
        <div class="delimiter">
          <div class="text-center">
            <h1>Special Offers</h1>
            <p class="mx-auto mt-4 max-w-2xl leading-relaxed">
              Enhance your stay with thoughtfully curated offers designed to provide greater value,
              flexibility, and an even more rewarding villa experience in the heart of Bali.
            </p>
          </div>
          <div class="mx-auto mt-12 grid max-w-5xl grid-cols-1 gap-10 md:grid-cols-2 xl:mt-16 xl:gap-12">
            <?php foreach ($special_offers as $offer) : ?>
            <div class="flex h-full flex-col">
              <div class="aspect-[4/3] overflow-hidden">
                <img
                  src="<?php echo $offer['image']; ?>"
                  alt="<?php echo $offer['alt']; ?>"
                  class="h-full w-full object-cover"
                  loading="lazy"
                />
              </div>
              <div class="mt-6 flex flex-1 flex-col text-center">
                <h3 class="font-playfair text-xl font-normal xl:text-2xl">
                  <?php echo $offer['title']; ?>
                </h3>
                <p class="mx-auto mt-3 max-w-md leading-relaxed">
                  <?php echo $offer['excerpt']; ?>
                </p>
                <div class="mt-6 flex flex-1 items-end justify-center">
                  <button
                    type="button"
                    data-modal-open="modal-offer-<?php echo $offer['id']; ?>"
                    class="group text-brand inline-flex cursor-pointer items-center gap-1 text-sm font-medium"
                  >
                    View Offer
                    <iconify-icon
                      icon="ph:arrow-right"
                      class="!text-brand transition-transform group-hover:translate-x-1"
                    ></iconify-icon>
                  </button>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <?php include 'partials/offers-modals.php'; ?>

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
