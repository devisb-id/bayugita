<?php
$page = 'location';

$distances = [
  ['ph:storefront', 'Sukawati Art Market', '9 km'],
  ['ph:paw-print', 'Bali Safari & Marine Park', '11.5 km'],
  ['ph:umbrella', 'Sanur', '12 km'],
  ['ph:martini', 'Seminyak', '24 km'],
  ['ph:waves', 'Waterbom Bali', '24.5 km'],
  ['ph:sun-horizon', 'Kuta', '26 km'],
  ['ph:airplane-tilt', 'Ngurah Rai Airport (DPS)', '27 km'],
  ['ph:anchor', 'Blue Lagoon Padang Bai', '32 km'],
];

$activities = [
  [
    'Surfing',
    'The stretch of beach between Sanur and Ketewel is well known as a surfer&rsquo;s heaven (especially in East Coast Season, which runs from November to May, when the winds turn offshore on this side of the island), but beginners should be aware of strong, swirling currents. Good breaks can be found in front of the Grand Bali and Sanur Beach Hotels.',
  ],
  [
    'Horse Riding',
    'Saba Bay Horse Riding has a special horse-riding track (suitable for beginners) on a beautiful black sandy beach overlooking the Indian Ocean and Nusa Penida Island.',
  ],
  [
    'Golf',
    'Golf enthusiasts might want to travel further afield to Bali Golf and Country Club in Nusa Dua for 18-hole courses.',
  ],
  [
    'Temples',
    'Ubud and the villages in the surrounding area contain dozens of examples of beautiful Hindu temples. Most temples are free to visit or ask for a small donation. Proper attire is required, although many temples will loan or rent a sarong for your visit. Pura Penataran Asih in nearby Pejeng is a charming temple containing the largest bronze kettle drum in the world. Pura Besakih on the slopes of Mount Agung is Bali&rsquo;s most sacred temple site &ndash; a complex of 23 temples that can be explored on a day trip from Ubud.',
  ],
  [
    'Shopping & Markets',
    'If you are a bold and brave bargain hunter, a shopping spree at one of Denpasar&rsquo;s markets, within the heart of Bali&rsquo;s bustling provincial capital, is an exciting and rewarding experience. About 7km north of Ketewel is the village of Sukawati, famous for its cheap local arts and crafts market, although better quality goods can be found in Ubud (art), Celuk (silverware) and Mas (woodwork), all within an easy drive of the villa.',
  ],
  [
    'Family Attractions',
    'Other family attractions to enjoy in the area include the Bali Safari & Marine Park and the Bali Bird and Reptile Park.',
  ],
  [
    'Kite Festival',
    'An annual international kite festival takes place at Padang Galak beach (just north of Sanur) every mid-year. Traditional Balinese giant kites up to ten metres in length are made and flown competitively by teams from different villages around Bali. Originally, these kites were intended to send a message to the Hindu Gods to create abundant crops and harvests.',
  ],
  [
    'Waterbom Bali',
    'Covering 3.8 hectares of tropical parkland in Kuta, Waterbom Bali has 16 water slides (including The Climax with its 360-degree loop) to entertain the young and the young at heart. A great family day out, but go early to beat the crowds.',
  ],
];
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Location - Villa Bayu Gita, Ketewel, Bali</title>
  <meta
    name="description"
    content="Villa Bayu Gita sits on Pabean Beach in Ketewel on Bali's south-east coast, with spectacular views towards Sanur, Nusa Penida and the mountains of east Bali. Ubud is a 30-minute drive away." />
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
                    src="assets/images/location-hero.webp"
                    alt="Villa Bayu Gita - The Ocean"
                    class="h-full w-full object-cover"
                  />
                </div>
              </div>
              <div class="swiper-slide">
                <div class="relative h-full w-full">
                  <img
                    src="assets/images/location-scenery.webp"
                    alt="Villa Bayu Gita - Coastal Scenery"
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

      <!-- The Locale -->
      <section data-aos="fade-up" class="mt-16 md:mt-20 xl:mt-28">
        <div class="mx-auto w-full max-w-5xl px-6">
          <div class="text-center">
            <h1>The Locale</h1>
          </div>
          <div class="mx-auto mt-10 max-w-4xl text-center md:mt-12">
            <p class="leading-relaxed">
              Villa Bayu Gita is blessed with spectacular views extending towards the beaches of
              Sanur and Nusa Dua, the islands of Lembongan, Ceningan and Penida, and the mountains
              of east Bali, and is well known by surfers, who come here to enjoy breaks which are
              far less crowded than those of Kuta or Uluwatu.
            </p>
            <p class="mt-6 leading-relaxed">
              The charming and laid-back seaside town of Sanur is a short drive (10km from the
              villa). Here you will find caf&eacute;s, restaurants, beachside bars, calm swimming
              waters and a boardwalk where you can enjoy a leisurely stroll or a bicycle ride. Also
              within easy reach of Bayu Gita are several villages renowned for their locally produced
              arts and crafts, silverware and woodwork, as well as the Bali Safari & Marine Park and
              Bali Bird Park. Bali&rsquo;s cultural hub, Ubud, is a mere thirty-minute drive away.
            </p>
          </div>
        </div>
      </section>

      <!-- Scenery Full Width Image -->
      <section data-aos="fade-up" class="mt-16 md:mt-20 xl:mt-28">
        <div class="aspect-[16/7] w-full overflow-hidden">
          <img
            src="assets/images/location-scenery.webp"
            alt="Villa Bayu Gita - Coastal Scenery towards Sanur and Nusa Penida"
            class="parallax w-full object-cover"
            loading="lazy"
          />
        </div>
      </section>

      <!-- Distances -->
      <section data-aos="fade-up" class="mt-16 md:mt-20 xl:mt-28">
        <div class="delimiter">
          <h2 class="text-center">Distances</h2>
          <p class="mx-auto mt-4 max-w-2xl text-center leading-relaxed">
            Approximate driving distances from Villa Bayu Gita to popular destinations around Bali.
          </p>
          <div
            class="mx-auto mt-10 grid max-w-4xl grid-cols-1 gap-x-10 gap-y-0 md:mt-12 md:grid-cols-2"
          >
            <?php foreach ($distances as [$icon, $name, $dist]): ?>
            <div class="flex items-center justify-between gap-4 border-b border-gray-200 py-5">
              <div class="flex items-center gap-4">
                <iconify-icon icon="<?php echo $icon; ?>" class="!text-brand !text-2xl"></iconify-icon>
                <span class="text-dark"><?php echo $name; ?></span>
              </div>
              <span class="text-brand font-medium whitespace-nowrap"><?php echo $dist; ?></span>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <!-- Things to Do -->
      <section
        data-aos="fade-up"
        class="mt-16 bg-gray-100 py-16 md:mt-20 md:py-20 xl:mt-28 xl:py-28"
      >
        <div class="delimiter">
          <!-- Intro -->
          <div class="mx-auto max-w-3xl text-center">
            <h2>Things to Do</h2>
            <p class="mt-6 leading-relaxed">
              Bayu Gita&rsquo;s manager will have a wealth of information about nearby places of
              interest and will help arrange transport and make any bookings required. Do also ask
              the staff about the local area &ndash; many of them live nearby and can give an
              interesting insight into some of the fascinating aspects of Bali life. In the meantime,
              here is a taste of the many and varied activities on offer within reach of the villas.
            </p>
          </div>
          <!-- Activity accordions: 2 independent columns, single-open -->
          <div
            class="mx-auto mt-10 grid max-w-6xl grid-cols-1 items-start gap-x-10 md:mt-12 md:grid-cols-2"
            data-accordion-single
          >
            <?php
            // Split into 2 columns keeping left-right reading order per row
            $columns = [[], []];
            foreach ($activities as $i => $activity) {
              $columns[$i % 2][] = $activity;
            }
            foreach ($columns as $column): ?>
            <div class="flex flex-col">
              <?php foreach ($column as [$title, $body]): ?>
              <div class="accordion-item mb-4 border-b border-gray-200 pb-4">
                <div class="accordion-trigger flex cursor-pointer items-center justify-between">
                  <h3><?php echo $title; ?></h3>
                  <span class="btn-primary !p-2">
                    <iconify-icon
                      icon="ph:caret-down"
                      class="text-lg !text-white transition-transform duration-300"
                    ></iconify-icon>
                  </span>
                </div>
                <div class="accordion-slide">
                  <div class="w-full">
                    <p class="mt-4 leading-relaxed"><?php echo $body; ?></p>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <!-- Attractions Images -->
      <section data-aos="fade-up" class="mt-16 md:mt-20 xl:mt-28">
        <div class="grid grid-cols-1 gap-2 md:grid-cols-2 md:gap-3">
          <div class="aspect-[4/3] overflow-hidden md:aspect-[16/11]">
            <img
              src="assets/images/location-ulun-danu.webp"
              alt="Pura Ulun Danu Beratan Temple, Bali"
              class="parallax w-full object-cover"
              loading="lazy"
            />
          </div>
          <div class="aspect-[4/3] overflow-hidden md:aspect-[16/11]">
            <img
              src="assets/images/location-waterbom.webp"
              alt="Waterbom Bali"
              class="parallax w-full object-cover"
              loading="lazy"
            />
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
