<?php $page = 'weddings'; ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Weddings & Events - Villa Bayu Gita, Bali</title>
  <meta
    name="description"
    content="Villa Bayu Gita's stunning beachside setting and luxurious outdoor living areas make it an ideal venue for romantic weddings and celebrations for up to 30 guests on Bali's south-east coast." />
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
      <section class="relative w-full overflow-hidden">
        <div class="slider-hero absolute inset-0">
          <div class="swiper h-full">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="relative h-full w-full">
                  <img
                    src="assets/images/wedding-hero.webp"
                    alt="Villa Bayu Gita - Beachfront Wedding"
                    class="h-full w-full object-cover"
                  />
                </div>
              </div>
              <div class="swiper-slide">
                <div class="relative h-full w-full">
                  <img
                    src="assets/images/wedding-1.webp"
                    alt="Villa Bayu Gita - Wedding Celebration"
                    class="h-full w-full object-cover"
                  />
                </div>
              </div>
            </div>
          </div>
          <!-- Hero Navigation Arrows -->
          <button
            class="btn-hero-prev absolute top-1/2 left-6 z-20 flex -translate-y-1/2 cursor-pointer items-center justify-center text-white transition-opacity hover:opacity-70 xl:left-12"
          >
            <iconify-icon icon="ph:arrow-left" class="!text-2xl !text-white"></iconify-icon>
          </button>
          <button
            class="btn-hero-next absolute top-1/2 right-6 z-20 flex -translate-y-1/2 cursor-pointer items-center justify-center text-white transition-opacity hover:opacity-70 xl:right-12"
          >
            <iconify-icon icon="ph:arrow-right" class="!text-2xl !text-white"></iconify-icon>
          </button>
          <!-- Hero Pagination -->
          <div
            class="btn-hero-indicator absolute right-0 !bottom-8 left-0 z-20 mx-auto flex w-full max-w-24 gap-2 xl:max-w-28"
          ></div>
        </div>
        <!-- Hero height spacer (no overlay text) -->
        <div class="pointer-events-none relative z-10 py-52 md:py-72 xl:py-96"></div>
      </section>

      <!-- Intro -->
      <section data-aos="fade-up" class="mt-16 md:mt-20 xl:mt-28">
        <div class="mx-auto w-full max-w-5xl px-6">
          <div class="text-center">
            <h1>The Weddings</h1>
          </div>
          <div class="mx-auto mt-10 max-w-4xl text-center md:mt-12">
            <p class="leading-relaxed">
              Bayu Gita&rsquo;s stunning beachside location and abundance of luxurious outdoor
              living areas make it an ideal venue for romantic weddings and other special
              celebrations for up to 30 guests.
            </p>
            <p class="mt-6 leading-relaxed">
              We can recommend expert event organisers, florists, decorators and caterers so you
              can focus on relaxing and celebrating with your guests.
            </p>
          </div>
          <!-- Capacity facts -->
          <div class="mt-10 flex flex-col items-center justify-center gap-8 sm:flex-row sm:gap-16 md:mt-12">
            <div class="flex items-center gap-5">
              <div class="bg-brand-50 flex size-14 shrink-0 items-center justify-center">
                <iconify-icon icon="ph:armchair" class="!text-brand !text-2xl"></iconify-icon>
              </div>
              <div class="text-left">
                <h3>Seated</h3>
                <p class="mt-1 leading-relaxed">Up to 30 guests</p>
              </div>
            </div>
            <div class="flex items-center gap-5">
              <div class="bg-brand-50 flex size-14 shrink-0 items-center justify-center">
                <iconify-icon icon="ph:users-three" class="!text-brand !text-2xl"></iconify-icon>
              </div>
              <div class="text-left">
                <h3>Standing</h3>
                <p class="mt-1 leading-relaxed">Up to 30 guests</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Gallery Grid -->
      <section data-aos="fade-up" class="mt-16 md:mt-20 xl:mt-28">
        <div class="delimiter">
          <h2 class="text-center">Moments at Bayu Gita</h2>
          <div
            class="mt-10 grid auto-rows-[16rem] grid-cols-1 gap-3 md:mt-12 md:auto-rows-[20rem] md:grid-cols-3 xl:auto-rows-[24rem]"
          >
            <div class="overflow-hidden md:col-span-2">
              <img
                src="assets/images/wedding-3.webp"
                alt="Villa Bayu Gita - Wedding Celebration"
                class="parallax w-full object-cover"
                loading="lazy"
              />
            </div>
            <div class="overflow-hidden">
              <img
                src="assets/images/wedding-engagement.webp"
                alt="Villa Bayu Gita - Engagement"
                class="parallax w-full object-cover"
                loading="lazy"
              />
            </div>
            <div class="overflow-hidden">
              <img
                src="assets/images/wedding-flowers.webp"
                alt="Villa Bayu Gita - Wedding Flowers"
                class="parallax w-full object-cover"
                loading="lazy"
              />
            </div>
            <div class="overflow-hidden md:col-span-2">
              <img
                src="assets/images/wedding-1.webp"
                alt="Villa Bayu Gita - Wedding by the Pool"
                class="parallax w-full object-cover"
                loading="lazy"
              />
            </div>
          </div>

          <!-- Event guidelines downloads -->
          <div class="mt-10 flex flex-wrap items-center justify-center gap-4 md:mt-12">
            <a
              href="assets/pdfs/bayu-gita-event-guidelines.pdf"
              target="_blank"
              rel="noopener noreferrer"
              class="btn-secondary group inline-flex items-center gap-2"
            >
              <iconify-icon icon="ph:file-pdf"></iconify-icon>
              Event Guidelines for Villa Bayu Gita
            </a>
            <a
              href="assets/pdfs/general-event-guidelines.pdf"
              target="_blank"
              rel="noopener noreferrer"
              class="btn-secondary group inline-flex items-center gap-2"
            >
              <iconify-icon icon="ph:file-pdf"></iconify-icon>
              General Guidelines for Events
            </a>
          </div>
        </div>
      </section>

      <!-- CTA -->
      <section data-aos="fade-up" class="mt-16 mb-16 md:mt-20 md:mb-20 xl:mt-28 xl:mb-28">
        <div class="mx-auto w-full max-w-3xl px-6 text-center">
          <h2>Plan Your Celebration</h2>
          <p class="mx-auto mt-4 max-w-xl leading-relaxed">
            Get in touch with our team to check availability and start planning your wedding or
            special event at Villa Bayu Gita.
          </p>
          <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
            <a href="rates.php" class="btn-primary group">
              Check Availability
              <iconify-icon
                icon="ph:arrow-right"
                class="group-hover:animate-bounce-right"
              ></iconify-icon>
            </a>
            <a
              href="https://booking.privatehomesandvillas.com/availvillas.html?villaid=BayuGitaEstate#_gl=1*1ltdhsd*_gcl_au*MTQ5ODYwMjY0OC4xNzgwOTk4Njcy"
              target="_blank"
              rel="noopener noreferrer"
              class="btn-secondary"
            >
              Enquire Now
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
