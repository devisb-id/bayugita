<?php $page = 'beachfront'; ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Bayu Gita Beachfront - 6 Bedroom Beachfront Villa, Bali</title>
  <meta
    name="description"
    content="Bayu Gita Beachfront is a six-bedroom luxury villa facing Pabean Beach in Ketewel, Bali, with an 18-metre pool, two plunge pools, home cinema, games room, gym and full villa staff for up to 12 guests." />
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
                    src="assets/images/detail-hero.webp"
                    alt="Bayu Gita Beachfront - Pool and Deck"
                    class="h-full w-full object-cover"
                  />
                </div>
              </div>
              <div class="swiper-slide">
                <div class="relative h-full w-full">
                  <img
                    src="assets/images/detail-ocean-view.webp"
                    alt="Bayu Gita Beachfront - Ocean View"
                    class="h-full w-full object-cover"
                  />
                </div>
              </div>
              <div class="swiper-slide">
                <div class="relative h-full w-full">
                  <img
                    src="assets/images/detail-path-pond.webp"
                    alt="Bayu Gita Beachfront - Path Across Pond"
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

      <!-- About the Villa -->
      <section data-aos="fade-up" class="mt-16 md:mt-20 xl:mt-28">
        <div class="mx-auto w-full max-w-5xl px-6">
          <div class="text-center">
            <h1>About<br />Bayu Gita Beachfront</h1>
          </div>
          <div class="mx-auto mt-10 max-w-4xl text-center md:mt-12">
            <p class="leading-relaxed">
              Bayu Gita Beach Front will mesmerize and charm even the most indifferent of souls.
              Watching the mist that shrouds the distant island of Nusa Lembongan gently lift as
              the sun rises; taking in the changing colour of the ocean as daylight turns to dusk;
              slipping into the refreshing water of the 18-metre pool for a leisurely swim, or
              relaxing in the shallows of a private plunge pool &ndash; who could fail to be
              captivated?
            </p>
            <p class="mt-6 leading-relaxed">
              With six spacious bedrooms, an ultra-comfortable air-conditioned cinema with a curated
              selection of movies to choose from, a billiards table and dart board in the games
              room, and a well-equipped gym where guests can work up an appetite to enjoy the
              delicious meals prepared by your personal chef, Bayu Gita Beach Front has everything
              and more to keep the whole family happy.
            </p>
            <p class="mt-6 leading-relaxed">
              The villa is located in a quaint seaside village where fisherman head out in
              traditional boats to net their daily catch, while kids run along the beachfront.
              Despite the many and varied attractions at the villa, guests wanting to explore can
              avail themselves of a car and driver to visit the best that Bali has to offer: the art
              and culture of Ubud and the charming, laid-back beachside caf&eacute;s and restaurants
              of Sanur are both within an easy drive, and the boutiques and bustling streets of
              Seminyak are not much further away.
            </p>
          </div>
          <!-- Villa Layout & Keyplan Accordion -->
          <div class="mx-auto mt-16 max-w-4xl border-b border-gray-200 pb-6 md:mt-20">
            <div id="accordion-toggle" class="flex cursor-pointer items-center justify-between">
              <h3>Villa Layout &amp; Keyplan</h3>
              <span class="btn-primary !p-2">
                <iconify-icon
                  icon="ph:caret-down"
                  class="text-lg !text-white transition-transform duration-300"
                ></iconify-icon>
              </span>
            </div>
            <div id="accordion-content" class="accordion-slide">
              <div class="w-full">
                <p class="mt-6 leading-relaxed">
                  A stunning walkway over a fish pond leads past the dining room and into the large
                  vestibule area. The villa&rsquo;s ground floor houses two bedrooms, the kitchen,
                  and a lounge that opens widely onto the garden. The garden boasts an enormous
                  swimming pool with jacuzzi, an outdoor lounge, a covered dining and bar area, and a
                  boardwalk. Stairs from the vestibule lead downstairs to the gym, cinema and games
                  room and upstairs to two more bedrooms. The villa&rsquo;s two master bedrooms, both
                  with plunge pools, can be accessed from the vestibule or from a separate gate at
                  the main entrance.
                </p>
                <img
                  src="assets/images/detail-floorplan.webp"
                  alt="Bayu Gita Beachfront Layout &amp; Keyplan"
                  class="mt-8 h-auto w-full"
                  loading="lazy"
                />
                <div class="mt-8 text-center">
                  <a
                    href="assets/images/detail-floorplan.webp"
                    download
                    class="btn-secondary group inline-flex"
                  >
                    <iconify-icon icon="ph:download-simple" class="!text-brand"></iconify-icon>
                    Download in High Resolution
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Bedrooms Section -->
      <section data-aos="fade-up" class="mt-16 md:mt-20 xl:mt-28">
        <div class="delimiter">
          <h2 class="text-center">The Bedrooms</h2>
          <div class="mt-10 grid grid-cols-1 gap-6 md:mt-12 md:grid-cols-2">
            <div class="aspect-[4/3] overflow-hidden">
              <img
                src="assets/images/detail-master-suite.webp"
                alt="Bayu Gita Beachfront - Master Suite"
                class="parallax w-full object-cover"
                loading="lazy"
              />
            </div>
            <div class="aspect-[4/3] overflow-hidden">
              <img
                src="assets/images/detail-bedroom-upstairs.webp"
                alt="Bayu Gita Beachfront - Upstairs Guest Bedroom"
                class="parallax w-full object-cover"
                loading="lazy"
              />
            </div>
          </div>
          <div class="mx-auto mt-10 max-w-4xl text-center md:mt-12">
            <p class="leading-relaxed">
              Bayu Gita Beach Front offers six spacious bedrooms, each thoughtfully appointed with
              air conditioning, satellite television and ensuite bathrooms. From two private master
              suites set away from the main house, to ground-floor and first-floor guest rooms with
              their own decks and garden outlooks, every room is designed for restful, family-friendly
              comfort.
            </p>
          </div>
          <!-- Bedroom Accordions -->
          <div class="mx-auto mt-10 max-w-4xl md:mt-12">
            <!-- Master bedrooms -->
            <div class="accordion-item border-b border-gray-200 pb-4">
              <div class="accordion-trigger flex cursor-pointer items-center justify-between">
                <h3>Master bedrooms</h3>
                <span class="btn-primary !p-2">
                  <iconify-icon
                    icon="ph:caret-down"
                    class="text-lg !text-white transition-transform duration-300"
                  ></iconify-icon>
                </span>
              </div>
              <div class="accordion-slide">
                <div class="w-full">
                  <p class="mt-6 leading-relaxed">
                    The villa boasts two master bedrooms set privately away from the main house. Both
                    of these spacious king-bedded rooms have their own plunge pool, a furnished
                    outdoor living area, an indoor lounge room with satellite television as well as
                    enormous ensuite bathrooms featuring indoor and outdoor shower and bath.
                  </p>
                </div>
              </div>
            </div>
            <!-- Guest bedroom 1 -->
            <div class="accordion-item mt-6 border-b border-gray-200 pb-4">
              <div class="accordion-trigger flex cursor-pointer items-center justify-between">
                <h3>Guest bedroom 1</h3>
                <span class="btn-primary !p-2">
                  <iconify-icon
                    icon="ph:caret-down"
                    class="text-lg !text-white transition-transform duration-300"
                  ></iconify-icon>
                </span>
              </div>
              <div class="accordion-slide">
                <div class="w-full">
                  <p class="mt-6 leading-relaxed">
                    This ground floor bedroom, accessed via a hallway of merbau-wood shutters, has
                    twin beds, making it ideal for families (the beds can also be conveniently joined
                    together to form a king). The room is equipped with a television and features
                    marble floors, a dressing area and sliding doors which lead, via a small dressing
                    area, to an ensuite bathroom with sunken granite bathtub and shower.
                  </p>
                </div>
              </div>
            </div>
            <!-- Guest bedroom 2 -->
            <div class="accordion-item mt-6 border-b border-gray-200 pb-4">
              <div class="accordion-trigger flex cursor-pointer items-center justify-between">
                <h3>Guest bedroom 2</h3>
                <span class="btn-primary !p-2">
                  <iconify-icon
                    icon="ph:caret-down"
                    class="text-lg !text-white transition-transform duration-300"
                  ></iconify-icon>
                </span>
              </div>
              <div class="accordion-slide">
                <div class="w-full">
                  <p class="mt-6 leading-relaxed">
                    On the other side of the hallway, also accessed via a shuttered walkway, lies the
                    second guest bedroom which features a king-size bed, writing desk with lovely
                    views overlooking palm trees, television, marble floors and sliding doors which
                    open onto a wooden deck overlooking the swimming pool and garden, and offering
                    the best sunrise views. The bathroom is accessed by sliding doors via a small
                    dressing area and features a sunken granite bathtub and a shower.
                  </p>
                </div>
              </div>
            </div>
            <!-- Guest bedrooms 3 and 4 -->
            <div class="accordion-item mt-6 border-b border-gray-200 pb-4">
              <div class="accordion-trigger flex cursor-pointer items-center justify-between">
                <h3>Guest bedrooms 3 and 4</h3>
                <span class="btn-primary !p-2">
                  <iconify-icon
                    icon="ph:caret-down"
                    class="text-lg !text-white transition-transform duration-300"
                  ></iconify-icon>
                </span>
              </div>
              <div class="accordion-slide">
                <div class="w-full">
                  <p class="mt-6 leading-relaxed">
                    The two first-floor guest bedrooms are accessed via a wooden staircase. Guest
                    bedroom 3 is also furnished with twin beds that can be joined together to make a
                    king, while guest bedroom 4 has a king-size bed. Both rooms are equipped with a
                    television, dressing room and ensuite bathroom with shower. Bedroom 3 has a wooden
                    deck surrounded by stunning bougainvillea and with views over the rice paddies,
                    while bedroom 4&rsquo;s deck is furnished with a daybed.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Living & Dining Areas Section -->
      <section
        data-aos="fade-up"
        class="mt-16 bg-gray-100 py-16 md:mt-20 md:py-20 xl:mt-28 xl:py-28"
      >
        <div class="delimiter">
          <h2 class="text-center">Living &amp; Dining Areas</h2>
          <div class="mt-10 aspect-[16/7] overflow-hidden md:mt-12">
            <img
              src="assets/images/detail-living.webp"
              alt="Bayu Gita Beachfront - Living &amp; Dining Areas"
              class="parallax w-full object-cover"
              loading="lazy"
            />
          </div>
          <div class="mx-auto mt-10 md:mt-12">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 md:gap-12">
              <div>
                <h3 class="!text-lg md:!text-xl">Indoor living</h3>
                <p class="mt-4 leading-relaxed">
                  Bayu Gita has plenty of indoor living areas where you can either relax and take in
                  the views. The living room has a traditional pitched rattan roof and is surrounded
                  by glass doors, which can be opened to allow guests to luxuriate on the comfortable
                  sofas, cooled by sea breezes. More glass doors in the dining room slide open to
                  create a lovely sense of space, while a stunning teak table for 14 overlooks a
                  hanging wall garden.
                </p>
                <p class="mt-6 leading-relaxed">
                  There&rsquo;s no better place to catch up on the latest movies than Bayu
                  Gita&rsquo;s state-of-the-art 10-seat cinema. Relax in air-conditioned comfort on
                  the leather couches and watch one of the movies on offer. The games room, which
                  looks onto the hanging wall garden, comes with a billiard table, darts and bar and
                  is the ideal spot to spend fun-filled hours. If you feel the need to keep in shape
                  the gym comes equipped with machines and weights.
                </p>
              </div>
              <div>
                <h3 class="!text-lg md:!text-xl">Outdoor living</h3>
                <p class="mt-4 leading-relaxed">
                  With views like these, you&rsquo;ll want to take advantage of Bayu Gita&rsquo;s
                  outdoor living areas. The bar and dining area is perfect for enjoying an early
                  morning breakfast or sipping cocktails as the sun sets over the Indian Ocean. The
                  covered bal&eacute;, furnished with sofas, can easily accommodate 10 people, and
                  the dining table can seat 14.
                </p>
                <p class="mt-6 leading-relaxed">
                  The enormous swimming pool and jacuzzi, ornamented by beautiful Balinese statues
                  and water features, is edged with eight sun loungers shaded by umbrellas. And in
                  the garden there&rsquo;s yet another sitting area for those wanting to watch the
                  action from a peaceful distance.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Pool & Outdoor Spaces Section -->
      <section data-aos="fade-up" class="mt-16 md:mt-20 xl:mt-28">
        <div class="delimiter">
          <h2 class="text-center">Pool &amp; Outdoor Spaces</h2>
          <div class="mt-10 aspect-[16/7] overflow-hidden md:mt-12">
            <img
              src="assets/images/detail-outdoor.webp"
              alt="Bayu Gita Beachfront - Pool &amp; Outdoor Spaces"
              class="parallax w-full object-cover"
              loading="lazy"
            />
          </div>
          <div class="mx-auto mt-10 md:mt-12">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 md:gap-12">
              <div>
                <p class="leading-relaxed">
                  At the heart of the villa lies an enormous 18-metre swimming pool with a jacuzzi,
                  ornamented by beautiful Balinese statues and water features and edged with eight
                  sun loungers shaded by umbrellas. Two private plunge pools, one for each master
                  suite, offer a more secluded place to cool off and unwind.
                </p>
              </div>
              <div>
                <p class="leading-relaxed">
                  A covered bal&eacute; furnished with sofas, an outdoor bar and dining area, and a
                  garden boardwalk lead down towards Pabean Beach, a renowned surf spot facing the
                  Badung Straits. Whether watching fishing boats slip out at dawn or the ocean change
                  colour at dusk, the outdoor spaces are made for unhurried, beachfront living.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Gym & Wellness Section -->
      <section data-aos="fade-up" class="mt-16 md:mt-20 xl:mt-28">
        <div class="mx-auto w-full max-w-6xl px-6">
          <div class="grid grid-cols-1 items-stretch gap-10 md:grid-cols-2 md:gap-12">
            <!-- Left Image -->
            <div class="min-h-[32rem] overflow-hidden md:min-h-[48rem]">
              <img
                src="assets/images/detail-bedroom-back.webp"
                alt="Bayu Gita Beachfront - Gym &amp; Wellness"
                class="parallax w-full object-cover"
                loading="lazy"
              />
            </div>
            <!-- Right Content -->
            <div class="flex flex-col justify-center py-4 md:py-8">
              <h2>Gym &amp; Wellness</h2>
              <p class="mt-6 leading-relaxed">
                Fitness fans will appreciate the villa&rsquo;s well-equipped gym, fitted with
                machines and weights, the perfect way to work up an appetite for the delicious meals
                prepared by your personal chef. After a workout, unwind with a soothing in-villa spa
                treatment carried out in complete privacy by professional therapists (extra cost
                applies). Here is a sample of what&rsquo;s on the menu:
              </p>
              <!-- Wellness Accordions -->
              <div class="mt-8">
                <!-- Massage -->
                <div class="accordion-item border-b border-gray-200 pb-4">
                  <div class="accordion-trigger flex cursor-pointer items-center justify-between">
                    <h3>Massage</h3>
                    <span class="btn-primary !p-2">
                      <iconify-icon
                        icon="ph:caret-down"
                        class="text-lg !text-white transition-transform duration-300"
                      ></iconify-icon>
                    </span>
                  </div>
                  <div class="accordion-slide">
                    <div class="w-full">
                      <p class="mt-4 leading-relaxed">
                        Release built-up tension with a traditional Balinese massage by the pool or
                        in the privacy of your room. A combination of gentle stretches, acupressure
                        and aromatherapy oils stimulates the flow of blood, oxygen and energy around
                        your body, leaving you totally relaxed in no time.
                      </p>
                    </div>
                  </div>
                </div>
                <!-- Body Scrub -->
                <div class="accordion-item mt-4 border-b border-gray-200 pb-4">
                  <div class="accordion-trigger flex cursor-pointer items-center justify-between">
                    <h3>Body scrub</h3>
                    <span class="btn-primary !p-2">
                      <iconify-icon
                        icon="ph:caret-down"
                        class="text-lg !text-white transition-transform duration-300"
                      ></iconify-icon>
                    </span>
                  </div>
                  <div class="accordion-slide">
                    <div class="w-full">
                      <p class="mt-4 leading-relaxed">
                        An invigorating full-body exfoliation using natural Balinese ingredients to
                        remove dead skin cells, leaving your skin feeling silky smooth and
                        rejuvenated.
                      </p>
                    </div>
                  </div>
                </div>
                <!-- Foot Reflexology -->
                <div class="accordion-item mt-4 border-b border-gray-200 pb-4">
                  <div class="accordion-trigger flex cursor-pointer items-center justify-between">
                    <h3>Foot reflexology</h3>
                    <span class="btn-primary !p-2">
                      <iconify-icon
                        icon="ph:caret-down"
                        class="text-lg !text-white transition-transform duration-300"
                      ></iconify-icon>
                    </span>
                  </div>
                  <div class="accordion-slide">
                    <div class="w-full">
                      <p class="mt-4 leading-relaxed">
                        A soothing foot massage targeting pressure points to relieve tension, improve
                        circulation and promote overall well-being &ndash; perfect after a long day
                        exploring Bali&rsquo;s beaches and attractions.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Location & Surroundings Section -->
      <section data-aos="fade-up" class="mt-16 md:mt-20 xl:mt-28">
        <div class="mx-auto w-full max-w-6xl px-6">
          <div class="grid grid-cols-1 items-stretch gap-10 md:grid-cols-2 md:gap-12">
            <!-- Image (appears first on mobile) -->
            <div class="order-first min-h-[32rem] overflow-hidden md:order-last md:min-h-[48rem]">
              <img
                src="assets/images/detail-ocean-view.webp"
                alt="Bayu Gita Beachfront - Location &amp; Surroundings"
                class="parallax w-full object-cover"
                loading="lazy"
              />
            </div>
            <!-- Content -->
            <div class="flex flex-col justify-center py-4 md:py-8">
              <h2>Location &amp; Surroundings</h2>
              <p class="mt-6 leading-relaxed">
                Bayu Gita Beach Front sits directly on Pabean Beach in the quaint seaside village of
                Ketewel, on Bali&rsquo;s south-east coast, where fishermen still head out in
                traditional boats and children run along the sand. Awe-inspiring views stretch across
                the Badung Straits towards the distant island of Nusa Lembongan.
              </p>
              <p class="mt-6 leading-relaxed">
                Despite its tranquil setting, the villa keeps you within easy reach of Bali&rsquo;s
                highlights. With a car and driver on hand, the art and culture of Ubud and the
                laid-back beachside caf&eacute;s and restaurants of Sanur are both a short drive away,
                while the boutiques and bustling streets of Seminyak are not much further.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- Full Width Image -->
      <section class="mt-16 md:mt-20 xl:mt-28">
        <div class="aspect-[16/7] w-full overflow-hidden">
          <img
            src="assets/images/detail-path-pond.webp"
            alt="Bayu Gita Beachfront - Path Across the Pond"
            class="parallax w-full object-cover"
            loading="lazy"
          />
        </div>
      </section>

      <!-- Villa Facts Section -->
      <section data-aos="fade-up" class="my-16 md:my-20 xl:my-28">
        <div class="delimiter">
          <h2 class="text-center">Villa Facts</h2>
          <div
            class="mt-10 grid grid-cols-1 gap-8 md:mt-12 md:grid-cols-2 md:gap-10 xl:grid-cols-3"
          >
            <div class="flex items-start gap-5">
              <div class="bg-brand-50 flex size-14 shrink-0 items-center justify-center">
                <iconify-icon icon="ph:map-pin" class="!text-brand !text-2xl"></iconify-icon>
              </div>
              <div>
                <h3>Location</h3>
                <p class="mt-2 leading-relaxed">
                  Pabean Beach, Ketewel village, Gianyar, Bali, Indonesia.
                </p>
              </div>
            </div>
            <div class="flex items-start gap-5">
              <div class="bg-brand-50 flex size-14 shrink-0 items-center justify-center">
                <iconify-icon icon="ph:users-three" class="!text-brand !text-2xl"></iconify-icon>
              </div>
              <div>
                <h3>Capacity</h3>
                <p class="mt-2 leading-relaxed">
                  12 people (6 bedrooms: 4 with king beds and 2 with twins convertible to kings).
                </p>
              </div>
            </div>
            <div class="flex items-start gap-5">
              <div class="bg-brand-50 flex size-14 shrink-0 items-center justify-center">
                <iconify-icon icon="ph:couch" class="!text-brand !text-2xl"></iconify-icon>
              </div>
              <div>
                <h3>Living Areas</h3>
                <p class="mt-2 leading-relaxed">
                  Indoor living and dining room; games room; outdoor dining, bar and lounge area;
                  home cinema.
                </p>
              </div>
            </div>
            <div class="flex items-start gap-5">
              <div class="bg-brand-50 flex size-14 shrink-0 items-center justify-center">
                <iconify-icon icon="ph:swimming-pool" class="!text-brand !text-2xl"></iconify-icon>
              </div>
              <div>
                <h3>Pool</h3>
                <p class="mt-2 leading-relaxed">
                  Main pool: 18m x 8m. 0.8m&ndash;1.65m depth; 2 plunge pools.
                </p>
              </div>
            </div>
            <div class="flex items-start gap-5">
              <div class="bg-brand-50 flex size-14 shrink-0 items-center justify-center">
                <iconify-icon
                  icon="ph:user-circle-gear"
                  class="!text-brand !text-2xl"
                ></iconify-icon>
              </div>
              <div>
                <h3>Staff</h3>
                <p class="mt-2 leading-relaxed">
                  Shared with Bayu Gita Residence: villa manager; private chef and cook;
                  housekeeping; garden and pool maintenance; security and driver. Additional staff
                  (babysitters, masseuses) available on request.
                </p>
              </div>
            </div>
            <div class="flex items-start gap-5">
              <div class="bg-brand-50 flex size-14 shrink-0 items-center justify-center">
                <iconify-icon icon="ph:fork-knife" class="!text-brand !text-2xl"></iconify-icon>
              </div>
              <div>
                <h3>Dining</h3>
                <p class="mt-2 leading-relaxed">
                  A suggestion menu of Western, Asian, vegetarian and children&rsquo;s dishes.
                  Requests accommodated (including special diets). Grocery cost is charged a 20%
                  handling fee which is subject to service and tax at the prevailing rate.
                </p>
              </div>
            </div>
            <div class="flex items-start gap-5">
              <div class="bg-brand-50 flex size-14 shrink-0 items-center justify-center">
                <iconify-icon icon="ph:wifi-high" class="!text-brand !text-2xl"></iconify-icon>
              </div>
              <div>
                <h3>Communication</h3>
                <p class="mt-2 leading-relaxed">WiFi internet access.</p>
              </div>
            </div>
            <div class="flex items-start gap-5">
              <div class="bg-brand-50 flex size-14 shrink-0 items-center justify-center">
                <iconify-icon icon="ph:monitor-play" class="!text-brand !text-2xl"></iconify-icon>
              </div>
              <div>
                <h3>Entertainment</h3>
                <p class="mt-2 leading-relaxed">
                  Satellite TV; surround-sound system; portable Bluetooth speaker; 10-seat home
                  cinema.
                </p>
              </div>
            </div>
            <div class="flex items-start gap-5">
              <div class="bg-brand-50 flex size-14 shrink-0 items-center justify-center">
                <iconify-icon icon="ph:barbell" class="!text-brand !text-2xl"></iconify-icon>
              </div>
              <div>
                <h3>Gym</h3>
                <p class="mt-2 leading-relaxed">
                  The villa&rsquo;s gym is well equipped with machines and weights.
                </p>
              </div>
            </div>
            <div class="flex items-start gap-5">
              <div class="bg-brand-50 flex size-14 shrink-0 items-center justify-center">
                <iconify-icon icon="ph:baby" class="!text-brand !text-2xl"></iconify-icon>
              </div>
              <div>
                <h3>For Families</h3>
                <p class="mt-2 leading-relaxed">
                  Bayu Gita Beach Front is exceptionally well equipped for families. Facilities
                  include: baby cot; high chair; games and toys.
                </p>
              </div>
            </div>
            <div class="flex items-start gap-5">
              <div class="bg-brand-50 flex size-14 shrink-0 items-center justify-center">
                <iconify-icon icon="ph:flower-lotus" class="!text-brand !text-2xl"></iconify-icon>
              </div>
              <div>
                <h3>Spa</h3>
                <p class="mt-2 leading-relaxed">
                  In-villa treatments selected from a comprehensive spa menu can be carried out by
                  professional beauty therapists (extra cost applies).
                </p>
              </div>
            </div>
            <div class="flex items-start gap-5">
              <div class="bg-brand-50 flex size-14 shrink-0 items-center justify-center">
                <iconify-icon icon="ph:car" class="!text-brand !text-2xl"></iconify-icon>
              </div>
              <div>
                <h3>Transport</h3>
                <p class="mt-2 leading-relaxed">
                  Car and driver available for 8 hours at a special rate of USD45++/day (excluding
                  petrol).
                </p>
              </div>
            </div>
            <div class="flex items-start gap-5">
              <div class="bg-brand-50 flex size-14 shrink-0 items-center justify-center">
                <iconify-icon icon="ph:champagne" class="!text-brand !text-2xl"></iconify-icon>
              </div>
              <div>
                <h3>Weddings &amp; Events</h3>
                <p class="mt-2 leading-relaxed">
                  A superb venue for hosting weddings and events. Celebrations for up to 30 seated
                  guests can be arranged with prior notice.
                </p>
              </div>
            </div>
            <div class="flex items-start gap-5">
              <div class="bg-brand-50 flex size-14 shrink-0 items-center justify-center">
                <iconify-icon icon="ph:wrench" class="!text-brand !text-2xl"></iconify-icon>
              </div>
              <div>
                <h3>Additional Facilities</h3>
                <p class="mt-2 leading-relaxed">
                  Full back-up diesel-powered generator; barbecue; safety deposit box in each
                  bedroom.
                </p>
              </div>
            </div>
            <div class="flex items-start gap-5">
              <div class="bg-brand-50 flex size-14 shrink-0 items-center justify-center">
                <iconify-icon icon="ph:ruler" class="!text-brand !text-2xl"></iconify-icon>
              </div>
              <div>
                <h3>Property Area</h3>
                <p class="mt-2 leading-relaxed">960sqm (villa); 3,065sqm (land).</p>
              </div>
            </div>
          </div>
          <!-- CTA -->
          <div class="mt-12 flex flex-wrap items-center justify-center gap-4 md:mt-16">
            <a href="rates.php" class="btn-primary group">
              Check Availability
              <iconify-icon
                icon="ph:arrow-right"
                class="group-hover:animate-bounce-right"
              ></iconify-icon>
            </a>
            <button
              type="button"
              data-modal-open="modal-enquiry"
              class="btn-secondary cursor-pointer"
            >
              Enquire Now
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
