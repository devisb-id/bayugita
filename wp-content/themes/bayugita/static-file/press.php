<?php $page = 'press'; ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Press - Villa Bayu Gita, Bali</title>
  <meta
    name="description"
    content="Villa Bayu Gita in the press - featured in FRV Bali, MAXX-brides and The West Australian as one of Bali's most majestic luxury villas." />
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

      <!-- Press -->
      <section data-aos="fade-up" class="mb-16 md:mb-20 xl:mb-28">
        <div class="delimiter">
          <div class="text-center">
            <h1
              class="font-playfair text-dark text-3xl font-normal md:text-4xl xl:text-5xl"
            >
              Press
            </h1>
            <p class="mx-auto mt-4 max-w-2xl leading-relaxed">
              Villa Bayu Gita has been featured in leading travel and lifestyle publications.
            </p>
          </div>

          <div class="mt-12 grid grid-cols-1 items-stretch gap-8 md:mt-16 md:grid-cols-3 md:gap-10">
            <!-- FRV Bali -->
            <a
              href="assets/pdfs/press-frv-bali.pdf"
              target="_blank"
              rel="noopener noreferrer"
              class="group flex h-full flex-col overflow-hidden border border-gray-200 bg-white transition-shadow hover:shadow-md"
            >
              <div class="flex flex-1 items-center justify-center overflow-hidden bg-gray-50 p-4 md:p-6">
                <img
                  src="assets/images/press-frv-bali.webp"
                  alt="FRV Bali - Bali's Most Majestic Villa"
                  class="h-auto w-full transition-transform duration-500 group-hover:scale-[1.02]"
                  loading="lazy"
                />
              </div>
              <div class="flex flex-col p-8 text-center">
                <p class="text-brand text-sm font-medium tracking-wider uppercase">FRV Bali</p>
                <h3 class="mt-2">Bali&rsquo;s Most Majestic Villa</h3>
                <span
                  class="text-brand mt-4 inline-flex items-center justify-center gap-1 text-sm font-medium"
                >
                  Read Article
                  <iconify-icon
                    icon="ph:arrow-right"
                    class="transition-transform group-hover:translate-x-1"
                  ></iconify-icon>
                </span>
              </div>
            </a>
            <!-- MAXX-brides -->
            <a
              href="assets/pdfs/press-maxx-brides.pdf"
              target="_blank"
              rel="noopener noreferrer"
              class="group flex h-full flex-col overflow-hidden border border-gray-200 bg-white transition-shadow hover:shadow-md"
            >
              <div class="flex flex-1 items-center justify-center overflow-hidden bg-gray-50 p-4 md:p-6">
                <img
                  src="assets/images/press-maxx-brides.webp"
                  alt="MAXX-brides - 5 Villas to Say I Do"
                  class="h-auto w-full transition-transform duration-500 group-hover:scale-[1.02]"
                  loading="lazy"
                />
              </div>
              <div class="flex flex-col p-8 text-center">
                <p class="text-brand text-sm font-medium tracking-wider uppercase">MAXX-brides</p>
                <h3 class="mt-2">5 Villas to Say &ldquo;I Do&rdquo;</h3>
                <span
                  class="text-brand mt-4 inline-flex items-center justify-center gap-1 text-sm font-medium"
                >
                  Read Article
                  <iconify-icon
                    icon="ph:arrow-right"
                    class="transition-transform group-hover:translate-x-1"
                  ></iconify-icon>
                </span>
              </div>
            </a>
            <!-- The West Australian -->
            <a
              href="assets/pdfs/press-west-australian.pdf"
              target="_blank"
              rel="noopener noreferrer"
              class="group flex h-full flex-col overflow-hidden border border-gray-200 bg-white transition-shadow hover:shadow-md"
            >
              <div class="flex flex-1 items-center justify-center overflow-hidden bg-gray-50 p-4 md:p-6">
                <img
                  src="assets/images/press-west-australian.webp"
                  alt="The West Australian - Living it up in Luxury"
                  class="h-auto w-full transition-transform duration-500 group-hover:scale-[1.02]"
                  loading="lazy"
                />
              </div>
              <div class="flex flex-col p-8 text-center">
                <p class="text-brand text-sm font-medium tracking-wider uppercase">
                  The West Australian
                </p>
                <h3 class="mt-2">Living it up in Luxury</h3>
                <span
                  class="text-brand mt-4 inline-flex items-center justify-center gap-1 text-sm font-medium"
                >
                  Read Article
                  <iconify-icon
                    icon="ph:arrow-right"
                    class="transition-transform group-hover:translate-x-1"
                  ></iconify-icon>
                </span>
              </div>
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
