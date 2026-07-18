<?php
$page = 'home';

// Set to false to hide the Special Offers section on the home page
$show_special_offers = true;

require 'partials/offers-data.php';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Villa Bayu Gita - Sanur 9 Bedroom Luxury Villa, Bali</title>
  <meta
    name="description"
    content="Bayu Gita comprises two stunning villas in the tranquil coastal village of Ketewel on Bali's south-east coast, offering accommodation for up to 18 adults with private pools, ocean views, and full villa staff." />
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
                    src="assets/images/hero-1.webp"
                    alt="Villa Bayu Gita Beachfront - Extraordinary Ocean View"
                    class="h-full w-full object-cover"
                  />
                </div>
              </div>
              <div class="swiper-slide">
                <div class="relative h-full w-full">
                  <img
                    src="assets/images/hero-2.webp"
                    alt="Villa Bayu Gita Beachfront - Pool and Deck"
                    class="h-full w-full object-cover"
                  />
                </div>
              </div>
              <div class="swiper-slide">
                <div class="relative h-full w-full">
                  <img
                    src="assets/images/hero-3.webp"
                    alt="Villa Bayu Gita Residence - Poolside at Night"
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

      <!-- Welcome Section -->
      <section data-aos="fade-up" class="mt-16 md:mt-20 xl:mt-28">
        <div class="mx-auto w-full max-w-6xl px-6">
          <div class="flex flex-col items-center gap-10 md:flex-row md:gap-12 xl:gap-20">
            <!-- Image -->
            <div class="w-full md:w-1/2">
              <div class="aspect-[4/5] overflow-hidden">
                <img
                  src="assets/images/beachfront.webp"
                  alt="Villa Bayu Gita Beachfront Poolside"
                  class="parallax w-full object-cover object-left"
                  loading="lazy"
                />
              </div>
            </div>
            <!-- Text Content -->
            <div class="flex w-full flex-col justify-center md:w-1/2">
              <h1 class="font-playfair text-3xl leading-snug xl:text-4xl">
                Welcome to,<br />Bayu Gita
              </h1>
              <p class="mt-6 leading-relaxed">
                Bayu Gita comprises two stunning villas in the tranquil coastal village of Ketewel
                on Bali's south-east coast. The villas can be rented separately or together,
                providing accommodation for up to 18 adults.
              </p>
              <p class="mt-4 leading-relaxed">
                Six-bedroom Bayu Gita Beachfront faces Pabean Beach, a renowned surf spot, with
                awe-inspiring views over the Badung Straits, a home cinema, hi-tech gym, games
                room, an enormous swimming pool plus two plunge pools.
              </p>
              <p class="mt-4 leading-relaxed">
                Just 100 metres inland, three-bedroom Bayu Gita Residence lies within a private
                walled tropical garden and boasts its own 11-metre swimming pool and garden gazebo
                with jacuzzi.
              </p>
              <a href="#villas" class="btn-primary group mt-8 w-fit">
                Learn More
                <iconify-icon
                  icon="ph:arrow-right"
                  class="group-hover:animate-bounce-right"
                ></iconify-icon>
              </a>
            </div>
          </div>
        </div>
      </section>

      <!-- Our Two Exceptional Villas -->
      <section id="villas" data-aos="fade-up" class="mt-16 md:mt-20 xl:mt-28">
        <div class="delimiter">
          <div class="text-center">
            <h2 class="font-playfair text-3xl xl:text-4xl">Our Two<br />Exceptional Villas</h2>
            <p class="mx-auto mt-4 max-w-2xl leading-relaxed">
              Relax and unwind in the luxury of our villas, available to rent separately or
              together for the ultimate Bali group getaway.
            </p>
          </div>
          <div class="mt-12 grid grid-cols-1 gap-8 md:grid-cols-2 xl:mt-16 xl:gap-12">
            <!-- Bayu Gita Beachfront -->
            <div class="group">
              <div class="relative aspect-[4/3] overflow-hidden">
                <img
                  src="assets/images/beachfront.webp"
                  alt="Bayu Gita Beachfront"
                  class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                  loading="lazy"
                />
              </div>
              <div class="mt-6 px-2 text-center md:px-4">
                <h3 class="font-playfair text-xl font-normal xl:text-2xl">Bayu Gita Beachfront</h3>
                <p class="text-brand mt-1 text-sm font-medium tracking-wider uppercase">
                  6 Bedroom Villa
                </p>
                <p class="mt-3 leading-relaxed">
                  Facing Pabean Beach with awe-inspiring ocean views, this villa offers a home
                  cinema, hi-tech gym, games room, an enormous swimming pool plus two plunge
                  pools, and stunning indoor and outdoor living spaces.
                </p>
                <a
                  href="villa-detail.php"
                  class="text-brand mt-6 inline-flex items-center gap-1 text-sm font-medium"
                >
                  Discover More
                  <iconify-icon icon="ph:arrow-right" class="!text-brand"></iconify-icon>
                </a>
              </div>
            </div>
            <!-- Bayu Gita Residence -->
            <div class="group">
              <div class="relative aspect-[4/3] overflow-hidden">
                <img
                  src="assets/images/residence.webp"
                  alt="Bayu Gita Residence"
                  class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                  loading="lazy"
                />
              </div>
              <div class="mt-6 px-2 text-center md:px-4">
                <h3 class="font-playfair text-xl font-normal xl:text-2xl">Bayu Gita Residence</h3>
                <p class="text-brand mt-1 text-sm font-medium tracking-wider uppercase">
                  3 Bedroom Villa
                </p>
                <p class="mt-3 leading-relaxed">
                  Just 100 metres inland with a rural charm of its own, this contemporary villa
                  lies within a private walled tropical garden and boasts its own 11-metre
                  swimming pool and garden gazebo with jacuzzi.
                </p>
                <a
                  href="villa-detail.php"
                  class="text-brand mt-6 inline-flex items-center gap-1 text-sm font-medium"
                >
                  Discover More
                  <iconify-icon icon="ph:arrow-right" class="!text-brand"></iconify-icon>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Special Offers -->
      <?php if ($show_special_offers) : ?>
      <section
        id="special-offers"
        data-aos="fade-up"
        class="mt-16 bg-gray-100 py-16 md:mt-20 md:py-20 xl:mt-28 xl:py-28"
      >
        <div class="delimiter">
          <div class="text-center">
            <h2 class="font-playfair text-3xl xl:text-4xl">Special Offers</h2>
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
      <?php endif; ?>

      <!-- Featured Stories -->
      <section id="stories" data-aos="fade-up" class="mt-16 md:mt-20 xl:mt-28">
        <div class="delimiter">
          <div class="flex flex-col gap-6 md:flex-row md:items-center md:justify-between">
            <h2 class="font-playfair text-3xl xl:text-4xl">Featured Stories</h2>
            <a href="featured-stories.php" class="btn-primary group w-fit shrink-0">
              See All Stories
              <iconify-icon
                icon="ph:arrow-right"
                class="group-hover:animate-bounce-right"
              ></iconify-icon>
            </a>
          </div>
          <div class="mt-12 grid grid-cols-1 gap-8 sm:grid-cols-2 xl:mt-16 xl:grid-cols-4 xl:gap-10">
            <!-- Story 1 -->
            <a href="featured-stories-detail.php" class="group flex h-full flex-col">
              <div class="aspect-[4/3] overflow-hidden">
                <img
                  src="assets/images/detail-ocean-view.webp"
                  alt="Inside Villa Bayu Gita Beachfront"
                  class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                  loading="lazy"
                />
              </div>
              <div class="mt-6 flex flex-1 flex-col">
                <h3 class="font-playfair text-lg font-normal leading-snug xl:text-xl">
                  Inside Villa Bayu Gita: Ketewel&rsquo;s Icon of Beachfront Luxury
                </h3>
                <p class="mt-3 leading-relaxed">
                  Facing the Badung Straits with awe-inspiring ocean views, Bayu Gita Beachfront has
                  become the definition of luxury on Bali&rsquo;s south-east coast.
                </p>
                <span
                  class="text-brand mt-6 inline-flex items-center gap-1 text-sm font-medium"
                >
                  Discover More
                  <iconify-icon
                    icon="ph:arrow-right"
                    class="!text-brand transition-transform group-hover:translate-x-1"
                  ></iconify-icon>
                </span>
              </div>
            </a>
            <!-- Story 2 -->
            <a href="featured-stories-detail.php" class="group flex h-full flex-col">
              <div class="aspect-[4/3] overflow-hidden">
                <img
                  src="assets/images/experience-dining-1.webp"
                  alt="Moments Made to be Savoured at Villa Bayu Gita"
                  class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                  loading="lazy"
                />
              </div>
              <div class="mt-6 flex flex-1 flex-col">
                <h3 class="font-playfair text-lg font-normal leading-snug xl:text-xl">
                  Moments Made to be Savoured
                </h3>
                <p class="mt-3 leading-relaxed">
                  How sustainable and aesthetic dining enhances wellness travel &mdash; culinary
                  experiences designed to promote mindfulness at the villa.
                </p>
                <span
                  class="text-brand mt-6 inline-flex items-center gap-1 text-sm font-medium"
                >
                  Discover More
                  <iconify-icon
                    icon="ph:arrow-right"
                    class="!text-brand transition-transform group-hover:translate-x-1"
                  ></iconify-icon>
                </span>
              </div>
            </a>
            <!-- Story 3 -->
            <a href="featured-stories-detail.php" class="group flex h-full flex-col">
              <div class="aspect-[4/3] overflow-hidden">
                <img
                  src="assets/images/detail-outdoor.webp"
                  alt="Private Dining at Villa Bayu Gita"
                  class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                  loading="lazy"
                />
              </div>
              <div class="mt-6 flex flex-1 flex-col">
                <h3 class="font-playfair text-lg font-normal leading-snug xl:text-xl">
                  Private Dining, Reimagined
                </h3>
                <p class="mt-3 leading-relaxed">
                  The evolution of exclusive culinary services in luxury travel, and the modern
                  shift in hospitality that brings the restaurant to your villa.
                </p>
                <span
                  class="text-brand mt-6 inline-flex items-center gap-1 text-sm font-medium"
                >
                  Discover More
                  <iconify-icon
                    icon="ph:arrow-right"
                    class="!text-brand transition-transform group-hover:translate-x-1"
                  ></iconify-icon>
                </span>
              </div>
            </a>
            <!-- Story 4 -->
            <a href="featured-stories-detail.php" class="group flex h-full flex-col">
              <div class="aspect-[4/3] overflow-hidden">
                <img
                  src="assets/images/experience-staff-1.webp"
                  alt="A Curated Villa Dining Experience at Villa Bayu Gita"
                  class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                  loading="lazy"
                />
              </div>
              <div class="mt-6 flex flex-1 flex-col">
                <h3 class="font-playfair text-lg font-normal leading-snug xl:text-xl">
                  A Curated Villa Dining Experience
                </h3>
                <p class="mt-3 leading-relaxed">
                  Personalised fine dining: how a dedicated villa team turns every meal into the
                  ultimate luxury guest experience.
                </p>
                <span
                  class="text-brand mt-6 inline-flex items-center gap-1 text-sm font-medium"
                >
                  Discover More
                  <iconify-icon
                    icon="ph:arrow-right"
                    class="!text-brand transition-transform group-hover:translate-x-1"
                  ></iconify-icon>
                </span>
              </div>
            </a>
          </div>
        </div>
      </section>

      <!-- Guest Reviews -->
      <section
        id="reviews"
        data-aos="fade-up"
        class="mt-16 overflow-hidden bg-gray-100 py-16 md:mt-20 md:py-20 xl:mt-28 xl:py-28"
      >
        <div class="delimiter">
          <div class="mx-auto max-w-6xl text-center">
            <h2>Guest Reviews</h2>
            <div class="relative mt-12 flex items-center">
              <!-- Navigation Left -->
              <button class="btn-review-prev btn-primary z-10 shrink-0 !p-2">
                <iconify-icon icon="ph:arrow-left" class="text-lg !text-white"></iconify-icon>
              </button>
              <!-- Slider -->
              <div class="slider-reviews mx-auto flex-1 overflow-hidden">
                <div class="swiper">
                  <div class="swiper-wrapper">
                    <!-- Review 1 -->
                    <div class="swiper-slide">
                      <div class="mx-auto max-w-4xl px-4 xl:px-12">
                        <iconify-icon
                          icon="ph:quotes-fill"
                          class="!text-brand mb-6 !text-5xl md:!text-6xl"
                        ></iconify-icon>
                        <p class="font-playfair text-dark text-lg leading-relaxed md:text-xl xl:text-2xl">
                          What an amazing stay. From the moment we walked in, the stress melted
                          away. The spaces are beautiful, the garden is breathtaking, and
                          everything is meticulously maintained. We stayed for 12 days and only
                          ate the local specialties on the menu&mdash;we would love to take the
                          chefs with us.
                        </p>
                        <div class="mt-8">
                          <p class="text-dark font-medium">March 30th, 2026 - April 10th, 2026</p>
                          <p class="text-brand mt-1 font-medium">Jan D, Czech Republic</p>
                        </div>
                      </div>
                    </div>
                    <!-- Review 2 -->
                    <div class="swiper-slide">
                      <div class="mx-auto max-w-4xl px-4 xl:px-12">
                        <iconify-icon
                          icon="ph:quotes-fill"
                          class="!text-brand mb-6 !text-5xl md:!text-6xl"
                        ></iconify-icon>
                        <p class="font-playfair text-dark text-lg leading-relaxed md:text-xl xl:text-2xl">
                          Our stay at the villa was unforgettable. The property is stunning and so
                          comfortable, but it's the team who made it so special. Every need was
                          taken care of, and the team got to know each family member. We have
                          loved our time here and will miss you all.
                        </p>
                        <div class="mt-8">
                          <p class="text-dark font-medium">December 13th, 2025 - December 16th, 2025</p>
                          <p class="text-brand mt-1 font-medium">Leonie F, Australia</p>
                        </div>
                      </div>
                    </div>
                    <!-- Review 3 -->
                    <div class="swiper-slide">
                      <div class="mx-auto max-w-4xl px-4 xl:px-12">
                        <iconify-icon
                          icon="ph:quotes-fill"
                          class="!text-brand mb-6 !text-5xl md:!text-6xl"
                        ></iconify-icon>
                        <p class="font-playfair text-dark text-lg leading-relaxed md:text-xl xl:text-2xl">
                          We can't even begin to describe what an amazing trip we had to Bali and
                          our wonderful stay at Villa Bayugita. The villa is beautiful, the rooms
                          are very comfortable, and the swimming pool is such a delight. The chef
                          truly deserves three Michelin stars.
                        </p>
                        <div class="mt-8">
                          <p class="text-dark font-medium">August 4th, 2025 - August 13th, 2025</p>
                          <p class="text-brand mt-1 font-medium">Laurent G, France</p>
                        </div>
                      </div>
                    </div>
                    <!-- Review 4 -->
                    <div class="swiper-slide">
                      <div class="mx-auto max-w-4xl px-4 xl:px-12">
                        <iconify-icon
                          icon="ph:quotes-fill"
                          class="!text-brand mb-6 !text-5xl md:!text-6xl"
                        ></iconify-icon>
                        <p class="font-playfair text-dark text-lg leading-relaxed md:text-xl xl:text-2xl">
                          What a beautiful stay at Villa Bayugita. The perfect spot for our family
                          of 11 and a 60th birthday celebration. The food was always fresh and
                          tasted divine. The staff are not only friendly and attentive but also
                          shared stories and smiles all day.
                        </p>
                        <div class="mt-8">
                          <p class="text-dark font-medium">September 13th, 2025 - September 18th, 2025</p>
                          <p class="text-brand mt-1 font-medium">Muriel B, United States</p>
                        </div>
                      </div>
                    </div>
                    <!-- Review 5 -->
                    <div class="swiper-slide">
                      <div class="mx-auto max-w-4xl px-4 xl:px-12">
                        <iconify-icon
                          icon="ph:quotes-fill"
                          class="!text-brand mb-6 !text-5xl md:!text-6xl"
                        ></iconify-icon>
                        <p class="font-playfair text-dark text-lg leading-relaxed md:text-xl xl:text-2xl">
                          Bayugita is a wonderful and beautiful place. We had a very pleasant stay.
                          The staff were so kind and welcoming. We love to come back again.
                        </p>
                        <div class="mt-8">
                          <p class="text-dark font-medium">March 23rd, 2026 - March 30th, 2026</p>
                          <p class="text-brand mt-1 font-medium">Alexandre J M M, United States</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Navigation Right -->
              <button class="btn-review-next btn-primary z-10 shrink-0 !p-2">
                <iconify-icon icon="ph:arrow-right" class="text-lg !text-white"></iconify-icon>
              </button>
            </div>
          </div>
        </div>
      </section>

      <!-- Map Section -->
      <section id="location" data-aos="fade-up" class="mt-16 md:mt-20 xl:mt-28">
        <div class="delimiter">
          <div class="mx-auto max-w-3xl text-center">
            <h2 class="font-playfair text-3xl xl:text-4xl">Location</h2>
            <p class="text-brand mt-4 text-sm font-medium tracking-wider uppercase">
              Ketewel, Bali&rsquo;s South-East Coast
            </p>
            <p class="mt-4 leading-relaxed">
              Villa Bayu Gita sits on Pabean Beach in the tranquil coastal village of Ketewel, with
              spectacular views towards Sanur, Nusa Penida and the mountains of east Bali. Ubud is a
              30-minute drive away, while the markets of Sukawati lie just 7km to the north.
            </p>
            <a
              href="location.php"
              class="text-brand mt-6 inline-flex items-center gap-1 text-sm font-medium"
            >
              Explore the Area
              <iconify-icon icon="ph:arrow-right" class="!text-brand"></iconify-icon>
            </a>
          </div>
        </div>
        <div class="mt-12 h-80 w-full xl:mt-16 xl:h-[28rem]">
          <iframe
            src="https://www.google.com/maps?q=-8.6278326,115.3006666&hl=en&z=14&output=embed"
            width="100%"
            height="100%"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
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
