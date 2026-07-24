<?php $page = 'spa'; ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>The Spa - Villa Bayu Gita, Bali</title>
  <meta
    name="description"
    content="Bring the spa to you at Villa Bayu Gita. Trained therapists from a reputable local spa offer traditional Balinese massage, foot reflexology, body scrubs and manicures in the privacy of the villa." />
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
          src="assets/images/experience-spa-hero.webp"
          alt="Villa Bayu Gita - The Spa"
          class="parallax w-full object-cover"
        />
      </section>

      <!-- Intro + Image -->
      <section data-aos="fade-up" class="mt-16 md:mt-20 xl:mt-28">
        <div class="mx-auto w-full max-w-6xl px-6">
          <div class="grid grid-cols-1 items-stretch gap-10 md:grid-cols-2 md:gap-12">
            <!-- Content -->
            <div class="flex flex-col justify-center py-4 md:py-8">
              <h1>Wellness &amp; Spa Treatments</h1>
              <p class="mt-6 leading-relaxed">
                Indulge in a rejuvenating wellness experience within the privacy of the villa, where
                relaxation and balance are thoughtfully integrated into your stay. Guests can enjoy the
                option to arrange in-villa spa treatments, massages, and holistic therapies tailored to
                individual preferences. We can recommend deluxe treatments carried out by fully trained
                therapists from a reputable local spa (extra charges will apply). Here&rsquo;s a sample
                of what&rsquo;s on the menu:
              </p>
            </div>
            <!-- Image -->
            <div class="min-h-[28rem] overflow-hidden md:min-h-[40rem]">
              <img
                src="assets/images/experience-spa-1.webp"
                alt="Villa Bayu Gita - Relax and Refresh"
                class="parallax w-full object-cover"
                loading="lazy"
              />
            </div>
          </div>
        </div>
      </section>

      <!-- Full Width Image -->
      <section data-aos="fade-up" class="mt-16 md:mt-20 xl:mt-28">
        <div class="aspect-[16/7] w-full overflow-hidden">
          <img
            src="assets/images/experience-spa-2.webp"
            alt="Villa Bayu Gita - Traditional Spa"
            class="parallax w-full object-cover"
            loading="lazy"
          />
        </div>
      </section>

      <!-- Treatments -->
      <section data-aos="fade-up" class="mt-16 mb-16 md:mt-20 md:mb-20 xl:mt-28 xl:mb-28">
        <div class="delimiter">
          <div class="text-center">
            <h2>On the Menu</h2>
          </div>
          <div class="mt-10 grid grid-cols-1 gap-8 md:mt-12 md:grid-cols-2 md:gap-x-12 md:gap-y-10">
            <div class="flex items-start gap-5">
              <div class="bg-brand-50 flex size-14 shrink-0 items-center justify-center">
                <iconify-icon icon="ph:hand-heart" class="!text-brand !text-2xl"></iconify-icon>
              </div>
              <div>
                <h3>Massage</h3>
                <p class="mt-2 leading-relaxed">
                  Release built up tension with a traditional Balinese massage by the pool or in the
                  relaxation bal&eacute;. A combination of gentle stretches, acupressure and
                  aromatherapy oils stimulates the flow of blood, oxygen and energy around your body,
                  leaving you totally relaxed.
                </p>
              </div>
            </div>
            <div class="flex items-start gap-5">
              <div class="bg-brand-50 flex size-14 shrink-0 items-center justify-center">
                <iconify-icon icon="ph:footprints" class="!text-brand !text-2xl"></iconify-icon>
              </div>
              <div>
                <h3>Foot Reflexology</h3>
                <p class="mt-2 leading-relaxed">
                  A natural healing art based on the principle that reflexes in the feet correspond to
                  every part of the body. Through applied pressure on these reflexes, tension is
                  relieved and circulation improved, leaving you feeling balanced.
                </p>
              </div>
            </div>
            <div class="flex items-start gap-5">
              <div class="bg-brand-50 flex size-14 shrink-0 items-center justify-center">
                <iconify-icon icon="ph:sparkle" class="!text-brand !text-2xl"></iconify-icon>
              </div>
              <div>
                <h3>Body Scrub</h3>
                <p class="mt-2 leading-relaxed">
                  A full body scrub exfoliates and hydrates your skin, leaving it soft and smooth. A
                  rejuvenating scrub combines an abrasive material such as salt, coffee, rice bran or
                  pecan hulls with essential oils to remove impurities and make your skin glow.
                </p>
              </div>
            </div>
            <div class="flex items-start gap-5">
              <div class="bg-brand-50 flex size-14 shrink-0 items-center justify-center">
                <iconify-icon icon="ph:hand-soap" class="!text-brand !text-2xl"></iconify-icon>
              </div>
              <div>
                <h3>Manicure/Pedicure</h3>
                <p class="mt-2 leading-relaxed">
                  Our hands and feet work hard for us every day but rarely get the attention they
                  deserve. Treat them to a manicure or pedicure, which usually comes with the added
                  bonus of a quick hand or foot massage.
                </p>
              </div>
            </div>
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
