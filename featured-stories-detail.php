<?php
$page = 'stories';

// Static related stories shown below the article
$more_stories = [
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
];
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Inside Villa Bayu Gita: Ketewel's Icon of Beachfront Luxury - Villa Bayu Gita, Bali</title>
  <meta
    name="description"
    content="Facing the Badung Straits with awe-inspiring ocean views, Bayu Gita Beachfront has become the definition of luxury on Bali's south-east coast." />
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

      <!-- Article Header -->
      <section data-aos="fade-up">
        <div class="delimiter">
          <div class="mx-auto max-w-3xl text-center">
            <p class="text-brand text-sm font-medium tracking-wider uppercase">Featured Story</p>
            <h1 class="mt-4 leading-snug">
              Inside Villa Bayu Gita: Ketewel&rsquo;s Icon of Beachfront Luxury
            </h1>
            <p class="mt-6 leading-relaxed">
              Facing the Badung Straits with awe-inspiring ocean views, Bayu Gita Beachfront has
              become the definition of luxury on Bali&rsquo;s south-east coast.
            </p>
          </div>
        </div>
      </section>

      <!-- Article Hero Image -->
      <section data-aos="fade-up" class="mt-12 xl:mt-16">
        <div class="delimiter">
          <div class="aspect-[16/9] w-full overflow-hidden">
            <img
              src="assets/images/detail-ocean-view.webp"
              alt="Villa Bayu Gita Beachfront - Ocean View"
              class="parallax w-full object-cover"
              loading="lazy"
            />
          </div>
        </div>
      </section>

      <!-- Article Body -->
      <section data-aos="fade-up" class="mt-12 xl:mt-16">
        <div class="delimiter">
          <div class="mx-auto max-w-3xl">
            <p class="leading-relaxed">
              There is a moment, just after you pass through the gates of Bayu Gita Beachfront, when
              the sound of the outside world drops away and is replaced by something else entirely:
              the steady rhythm of the Badung Straits breaking on Pabean Beach. It is the sound the
              villa was built around, and it is the reason guests return year after year.
            </p>

            <h2 class="mt-12">A Villa Shaped by the Ocean</h2>
            <p class="mt-4 leading-relaxed">
              Six-bedroom Bayu Gita Beachfront faces Pabean Beach, a renowned surf spot, with
              awe-inspiring views over the Badung Straits towards Sanur, Nusa Penida and the
              mountains of east Bali. The living spaces open directly onto an enormous swimming
              pool, and two plunge pools sit tucked into quieter corners of the garden for those who
              prefer their swim in solitude.
            </p>
            <p class="mt-4 leading-relaxed">
              Inside, the villa is anything but a retreat from modern comforts. A home cinema, a
              hi-tech gym and a games room mean that the days when the weather turns are as full as
              the ones spent under the sun. It is a rare balance &mdash; a villa that feels open to
              the elements yet complete in itself.
            </p>

            <!-- Inline Image -->
            <div class="mt-12 aspect-[16/9] overflow-hidden">
              <img
                src="assets/images/detail-living.webp"
                alt="Villa Bayu Gita Beachfront - Living Space"
                class="h-full w-full object-cover"
                loading="lazy"
              />
            </div>

            <h2 class="mt-12">The Team Behind the Stay</h2>
            <p class="mt-4 leading-relaxed">
              Ask any guest what they remember most, and the answer is rarely the architecture. It
              is the team. A full villa staff &mdash; chefs, butlers, housekeepers and a dedicated
              villa manager &mdash; anticipate rather than react, learning how each family takes
              their coffee by the second morning. Meals are cooked to order, from Balinese
              specialities to the dishes children ask for by name.
            </p>
            <p class="mt-4 leading-relaxed">
              &ldquo;The staff are not only friendly and attentive but also shared stories and
              smiles all day,&rdquo; wrote one guest after a family celebration at the villa. It is
              a sentiment echoed across years of reviews, and it is the part of Bayu Gita that no
              photograph quite captures.
            </p>

            <h2 class="mt-12">Room for Everyone</h2>
            <p class="mt-4 leading-relaxed">
              Just 100 metres inland, three-bedroom Bayu Gita Residence lies within a private walled
              tropical garden and boasts its own 11-metre swimming pool and garden gazebo with
              jacuzzi. Rented alongside the Beachfront villa, the estate accommodates up to 18
              adults &mdash; enough for the multi-generational gatherings, milestone birthdays and
              quiet corporate retreats that fill its calendar.
            </p>
            <p class="mt-4 leading-relaxed">
              Ketewel itself remains refreshingly unhurried. Ubud is a 30-minute drive away, the
              arts and crafts markets of Sukawati sit 7km to the north, and the beach in front of
              the villa belongs, for most of the day, to the surfers and to you.
            </p>

          </div>
        </div>
      </section>

      <!-- More Stories -->
      <section data-aos="fade-up" class="mt-16 md:mt-20 xl:mt-28">
        <div class="delimiter">
          <div class="text-center">
            <h2 class="font-playfair text-3xl xl:text-4xl">More Stories</h2>
          </div>
          <div class="mt-12 grid grid-cols-1 gap-8 md:grid-cols-3 xl:mt-16 xl:gap-10">
            <?php foreach ($more_stories as $story) : ?>
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
                <p class="mt-3 leading-relaxed"><?php echo $story['excerpt']; ?></p>
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
        </div>
      </section>

      <!-- Back to Stories -->
      <section data-aos="fade-up" class="mt-16 mb-16 md:mt-20 md:mb-20 xl:mt-28 xl:mb-28">
        <div class="delimiter">
          <div class="mx-auto max-w-3xl text-center">
            <a href="featured-stories.php" class="btn-secondary group">
              <iconify-icon icon="ph:arrow-left"></iconify-icon>
              Back to Stories
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
