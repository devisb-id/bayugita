<?php
$page = 'stories';

// Static story list; all cards link to the single detail page for now
$stories = [
  [
    'title' => 'Inside Villa Bayu Gita: Ketewel&rsquo;s Icon of Beachfront Luxury',
    'image' => 'assets/images/detail-ocean-view.webp',
    'alt' => 'Villa Bayu Gita Beachfront ocean view',
    'excerpt' => 'Facing the Badung Straits with awe-inspiring ocean views, Bayu Gita Beachfront has become the definition of luxury on Bali&rsquo;s south-east coast.',
  ],
  [
    'title' => 'Moments Made to be Savoured',
    'image' => 'assets/images/experience-dining-1.webp',
    'alt' => 'Dining at Villa Bayu Gita',
    'excerpt' => 'How sustainable and aesthetic dining enhances wellness travel &mdash; culinary experiences designed to promote mindfulness at the villa.',
  ],
  [
    'title' => 'Private Dining, Reimagined',
    'image' => 'assets/images/detail-outdoor.webp',
    'alt' => 'Outdoor dining space at Villa Bayu Gita',
    'excerpt' => 'The evolution of exclusive culinary services in luxury travel, and the modern shift in hospitality that brings the restaurant to your villa.',
  ],
  [
    'title' => 'A Curated Villa Dining Experience',
    'image' => 'assets/images/experience-staff-1.webp',
    'alt' => 'Villa Bayu Gita staff preparing a meal',
    'excerpt' => 'Personalised fine dining: how a dedicated villa team turns every meal into the ultimate luxury guest experience.',
  ],
  [
    'title' => 'A Morning on Pabean Beach',
    'image' => 'assets/images/hero-1.webp',
    'alt' => 'Pabean Beach in front of Villa Bayu Gita',
    'excerpt' => 'The renowned surf spot on the villa&rsquo;s doorstep belongs, for most of the day, to the surfers and to you.',
  ],
  [
    'title' => 'The Art of Balinese Hospitality',
    'image' => 'assets/images/experience-staff-2.webp',
    'alt' => 'Villa Bayu Gita staff welcoming guests',
    'excerpt' => 'Chefs, butlers, housekeepers and a villa manager who anticipate rather than react &mdash; the team behind every stay.',
  ],
  [
    'title' => 'Wellness by the Ocean',
    'image' => 'assets/images/experience-spa-1.webp',
    'alt' => 'Spa treatment at Villa Bayu Gita',
    'excerpt' => 'In-villa spa treatments and yoga sessions timed to the rhythm of the tide on Bali&rsquo;s south-east coast.',
  ],
  [
    'title' => 'Celebrating in Paradise',
    'image' => 'assets/images/wedding-1.webp',
    'alt' => 'Wedding celebration at Villa Bayu Gita',
    'excerpt' => 'From intimate vows to milestone birthdays, why the estate has become a destination for life&rsquo;s biggest moments.',
  ],
  [
    'title' => 'A Villa Built for Families',
    'image' => 'assets/images/experience-families-1.webp',
    'alt' => 'Family enjoying Villa Bayu Gita',
    'excerpt' => 'Home cinema, games room and an enormous pool &mdash; how Bayu Gita keeps every generation happy under one roof.',
  ],
  [
    'title' => 'Beyond the Gates: Exploring Ketewel',
    'image' => 'assets/images/location-scenery.webp',
    'alt' => 'Coastal scenery near Ketewel',
    'excerpt' => 'Ubud is 30 minutes away and the markets of Sukawati just 7km north &mdash; a guide to the villa&rsquo;s unhurried corner of Bali.',
  ],
  [
    'title' => 'The Residence: A Garden Retreat',
    'image' => 'assets/images/residence.webp',
    'alt' => 'Villa Bayu Gita Residence',
    'excerpt' => 'Just 100 metres inland, a private walled tropical garden with an 11-metre pool and a gazebo with jacuzzi.',
  ],
  [
    'title' => 'Working Away From the Office',
    'image' => 'assets/images/retreats-sitting.webp',
    'alt' => 'Retreat setting at Villa Bayu Gita',
    'excerpt' => 'Why Events find their focus at a villa where the meeting room opens onto the Badung Straits.',
  ],
];
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Featured Stories - Villa Bayu Gita, Bali</title>
  <meta
    name="description"
    content="Stories from Villa Bayu Gita - beachfront luxury, curated dining, Balinese hospitality and life on Bali's south-east coast." />
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

      <!-- Featured Stories -->
      <section data-aos="fade-up" class="mb-16 md:mb-20 xl:mb-28">
        <div class="delimiter">
          <div class="text-center">
            <h1>Featured Stories</h1>
            <p class="mx-auto mt-4 max-w-2xl leading-relaxed">
              Dispatches from Bayu Gita &mdash; the villa, the team, the table and the stretch of
              coast we call home.
            </p>
          </div>

          <div class="mt-12 grid grid-cols-1 gap-8 sm:grid-cols-2 md:mt-16 xl:grid-cols-4 xl:gap-10">
            <?php foreach ($stories as $story) : ?>
            <a href="featured-stories-detail.php" class="group flex h-full flex-col">
              <div class="aspect-[4/3] overflow-hidden">
                <img
                  src="<?php echo $story['image']; ?>"
                  alt="<?php echo $story['alt']; ?>"
                  class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                  loading="lazy"
                />
              </div>
              <div class="mt-6 flex flex-1 flex-col">
                <h3 class="font-playfair text-lg leading-snug font-normal xl:text-xl">
                  <?php echo $story['title']; ?>
                </h3>
                <p class="mt-3 leading-relaxed">
                  <?php echo $story['excerpt']; ?>
                </p>
                <div class="mt-6 flex flex-1 items-end">
                  <span class="text-brand inline-flex items-center gap-1 text-sm font-medium">
                    Discover More
                    <iconify-icon
                      icon="ph:arrow-right"
                      class="!text-brand transition-transform group-hover:translate-x-1"
                    ></iconify-icon>
                  </span>
                </div>
              </div>
            </a>
            <?php endforeach; ?>
          </div>

          <!-- Pagination -->
          <div class="mt-12 flex items-center justify-center gap-2 xl:mt-16">
            <button class="btn-paginate !size-9 !min-w-0 !p-0 md:!size-10" aria-label="Previous page">
              <iconify-icon icon="ph:caret-left"></iconify-icon>
            </button>
            <button class="btn-paginate active !size-9 !min-w-0 !p-0 md:!size-10">1</button>
            <button class="btn-paginate !size-9 !min-w-0 !p-0 md:!size-10">2</button>
            <button class="btn-paginate !size-9 !min-w-0 !p-0 md:!size-10">3</button>
            <button class="btn-paginate !size-9 !min-w-0 !p-0 md:!size-10" aria-label="Next page">
              <iconify-icon icon="ph:caret-right"></iconify-icon>
            </button>
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
