<?php
$page = 'experiences';

// Toggle the "Plan Your Stay" CTA section
$showPlanYourStay = true;

// Additional services cards
$services = [
  [
    'icon' => 'ph:map-trifold',
    'title' => 'Tours &amp; Experiences',
    'text' => 'Rice terrace tours, temple visits, cooking classes, rafting, diving and bike tours &mdash; our concierge arranges it all, from equipment hire to the smallest detail.',
    'link' => 'concierge.php',
  ],
  [
    'icon' => 'ph:fork-knife',
    'title' => 'In-Villa Dining',
    'text' => 'A private chef and cook prepare breakfast, lunch, snacks and dinner from an extensive suggestion menu, tailored to any dietary requirement.',
    'link' => 'dining.php',
  ],
  [
    'icon' => 'ph:car-simple',
    'title' => 'Transport &amp; Car Rental',
    'text' => 'A car and driver are on hand for airport transfers and days out, with vehicle hire arranged on request for exploring Bali at your own pace.',
    'link' => 'concierge.php',
  ],
];
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Experiences - Villa Bayu Gita, Bali</title>
  <meta
    name="description"
    content="Experiences at Villa Bayu Gita - private chef dining, in-villa spa treatments, family-friendly facilities, concierge-curated tours and life beyond the villa on Bali's south-east coast." />
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
          src="assets/images/experience-dining-hero.webp"
          alt="Villa Bayu Gita - Experiences"
          class="parallax w-full object-cover"
        />
      </section>

      <!-- Intro -->
      <section data-aos="fade-up" class="mt-16 md:mt-20 xl:mt-28">
        <div class="mx-auto w-full max-w-5xl px-6">
          <div class="text-center">
            <h1>Experiences</h1>
          </div>
          <div class="mx-auto mt-10 max-w-4xl text-center md:mt-12">
            <p class="leading-relaxed">
              One of the finest aspects of a stay at Bayu Gita is the attention to detail given by
              the dedicated team. From meals prepared by your private chef to spa treatments carried
              out in complete privacy, every part of your stay is shaped around you &mdash; a true
              home away from home on Bali&rsquo;s south-east coast.
            </p>
          </div>
        </div>
      </section>

      <!-- Dining Experience -->
      <section id="dining" data-aos="fade-up" class="mt-16 md:mt-20 xl:mt-28">
        <div class="mx-auto w-full max-w-6xl px-6">
          <div class="flex flex-col items-center gap-10 md:flex-row md:gap-12 xl:gap-20">
            <!-- Image -->
            <div class="w-full md:w-1/2">
              <div class="aspect-[4/5] overflow-hidden">
                <img
                  src="assets/images/experience-dining-1.webp"
                  alt="Villa Bayu Gita - Dining Experience"
                  class="parallax w-full object-cover"
                  loading="lazy"
                />
              </div>
            </div>
            <!-- Text -->
            <div class="flex w-full flex-col justify-center md:w-1/2">
              <h2>Dining Experience</h2>
              <p class="mt-6 leading-relaxed">
                Bayu Gita&rsquo;s chef and cook are at your service to prepare daily breakfast,
                lunch, snacks and dinner. The villas offer an extensive suggestion menu of delicious
                home-style meals featuring Asian and international dishes to cater to all tastes,
                with an excellent selection of vegetarian and children&rsquo;s options.
              </p>
              <p class="mt-4 leading-relaxed">
                The chef is more than happy to tailor meals to accommodate any special dietary
                requirements, and a stay is not complete without sampling his pepes ikan (fish
                steamed in banana leaf), satay ayam (chicken satay on bamboo skewers) or pisang
                goreng (fried banana) with ice cream.
              </p>
              <a href="dining.php" class="btn-primary group mt-8 w-fit">
                Discover Dining
                <iconify-icon
                  icon="ph:arrow-right"
                  class="group-hover:animate-bounce-right"
                ></iconify-icon>
              </a>
            </div>
          </div>
        </div>
      </section>

      <!-- Wellness & Spa Treatments -->
      <section
        id="spa"
        data-aos="fade-up"
        class="mt-16 bg-gray-100 py-16 md:mt-20 md:py-20 xl:mt-28 xl:py-28"
      >
        <div class="mx-auto w-full max-w-6xl px-6">
          <div class="flex flex-col items-center gap-10 md:flex-row-reverse md:gap-12 xl:gap-20">
            <!-- Image -->
            <div class="w-full md:w-1/2">
              <div class="aspect-[4/5] overflow-hidden">
                <img
                  src="assets/images/experience-spa-1.webp"
                  alt="Villa Bayu Gita - Wellness and Spa"
                  class="parallax w-full object-cover"
                  loading="lazy"
                />
              </div>
            </div>
            <!-- Text -->
            <div class="flex w-full flex-col justify-center md:w-1/2">
              <h2>Wellness &amp; Spa Treatments</h2>
              <p class="mt-6 leading-relaxed">
                Indulge in a rejuvenating wellness experience within the privacy of the villa, where
                relaxation and balance are thoughtfully integrated into your stay. Guests can enjoy the
                option to arrange in-villa spa treatments, massages, and holistic therapies tailored to
                individual preferences.
              </p>
              <p class="mt-4 leading-relaxed">
                We can recommend deluxe treatments carried out in the privacy of the villa by fully
                trained therapists from a reputable local spa (extra charges will apply). Here&rsquo;s
                a sample of what&rsquo;s on the menu:
              </p>

              <!-- Menu Accordion -->
              <div class="mt-8">
                <div class="accordion-item border-b border-gray-300 pb-4">
                  <div class="accordion-trigger flex cursor-pointer items-center justify-between">
                    <h3 class="uppercase">Massage</h3>
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
                        Release built up tension with a traditional Balinese massage by the pool or in
                        the relaxation bal&eacute;. A combination of gentle stretches, acupressure and
                        aromatherapy oils stimulates the flow of blood, oxygen and energy around your
                        body, leaving you totally relaxed.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item mt-6 border-b border-gray-300 pb-4">
                  <div class="accordion-trigger flex cursor-pointer items-center justify-between">
                    <h3 class="uppercase">Foot Reflexology</h3>
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
                        A natural healing art based on the principle that reflexes in the feet
                        correspond to every part of the body. Through applied pressure on these
                        reflexes, tension is relieved and circulation improved, leaving you feeling
                        balanced.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item mt-6 border-b border-gray-300 pb-4">
                  <div class="accordion-trigger flex cursor-pointer items-center justify-between">
                    <h3 class="uppercase">Body Scrub</h3>
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
                        A full body scrub exfoliates and hydrates your skin, leaving it soft and smooth.
                        A rejuvenating scrub combines an abrasive material such as salt, coffee, rice
                        bran or pecan hulls with essential oils to remove impurities and make your skin
                        glow.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item mt-6 border-b border-gray-300 pb-4">
                  <div class="accordion-trigger flex cursor-pointer items-center justify-between">
                    <h3 class="uppercase">Manicure/Pedicure</h3>
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
                        Our hands and feet work hard for us every day but rarely get the attention they
                        deserve. Treat them to a manicure or pedicure, which usually comes with the
                        added bonus of a quick hand or foot massage.
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <a href="spa.php" class="btn-primary group mt-8 w-fit">
                Discover the Spa
                <iconify-icon
                  icon="ph:arrow-right"
                  class="group-hover:animate-bounce-right"
                ></iconify-icon>
              </a>
            </div>
          </div>
        </div>
      </section>

      <!-- Family-friendly Experiences -->
      <section id="families" data-aos="fade-up" class="mt-16 md:mt-20 xl:mt-28">
        <div class="mx-auto w-full max-w-6xl px-6">
          <div class="flex flex-col items-center gap-10 md:flex-row md:gap-12 xl:gap-20">
            <!-- Image -->
            <div class="w-full md:w-1/2">
              <div class="aspect-[4/5] overflow-hidden">
                <img
                  src="assets/images/experience-families-1.webp"
                  alt="Villa Bayu Gita - Family-friendly Experiences"
                  class="parallax w-full object-cover"
                  loading="lazy"
                />
              </div>
            </div>
            <!-- Text -->
            <div class="flex w-full flex-col justify-center md:w-1/2">
              <h2>Family-friendly Experiences</h2>
              <p class="mt-6 leading-relaxed">
                The family friendly advantages of a villa holiday are many, including access to your
                own private facilities and the freedom to use them whenever you want. Knowing that
                the kids can run around happily, independently and safely is a real plus &mdash; and
                one that means parents are certain to have a more relaxed holiday too.
              </p>
              <p class="mt-4 leading-relaxed">
                The Beachfront villa offers a choice of pools and a well-stocked home cinema, while
                Bayu Gita Residence&rsquo;s media room, toys, games and pool will keep kids well
                amused too. Our friendly staff make children feel as welcome as adults, and
                full-time babysitting can be arranged for a small extra cost. Parents will need to be
                vigilant on the beach, as the water is not suitable for swimming.
              </p>
              <a href="families.php" class="btn-primary group mt-8 w-fit">
                Discover Families
                <iconify-icon
                  icon="ph:arrow-right"
                  class="group-hover:animate-bounce-right"
                ></iconify-icon>
              </a>
            </div>
          </div>
        </div>
      </section>

      <!-- Life Beyond the Villa -->
      <section id="beyond" data-aos="fade-up" class="mt-16 bg-gray-100 py-16 md:mt-20 md:py-20 xl:mt-28 xl:py-28">
        <div class="delimiter">
          <div class="text-center">
            <h2>Life Beyond the Villa</h2>
            <p class="mx-auto mt-4 max-w-3xl leading-relaxed">
              Step beyond the villa gates and discover Bali&rsquo;s south-east coast. Ketewel remains
              refreshingly unhurried &mdash; Ubud lies a 30-minute drive away, the arts and crafts
              markets of Sukawati just 7km north, and Pabean Beach waits at your doorstep.
            </p>
          </div>
          <div class="mt-12 aspect-[16/7] overflow-hidden xl:mt-16">
            <img
              src="assets/images/location-scenery.webp"
              alt="Villa Bayu Gita - Life Beyond the Villa"
              class="parallax w-full object-cover"
              loading="lazy"
            />
          </div>
          <div class="mx-auto mt-10 grid max-w-6xl grid-cols-1 gap-8 md:mt-12 md:grid-cols-3 md:gap-10">
            <div>
              <h3 class="!text-lg md:!text-xl">Cultural Bali</h3>
              <p class="mt-3 leading-relaxed">
                Witness the Balinese way of life on a concierge-curated tour &mdash; picturesque rice
                terraces, the famous Batukaru and Taman Ayun temples, or the art centre of Ubud with
                photo stops at Tegalalang Rice Terraces.
              </p>
            </div>
            <div>
              <h3 class="!text-lg md:!text-xl">Adventure &amp; Ocean</h3>
              <p class="mt-3 leading-relaxed">
                White water rafting, snorkelling and scuba diving are all close at hand. Join a bike
                tour, take a surfing lesson on Pabean Beach, charter a yacht, or tee off at one of
                Bali&rsquo;s top golf courses.
              </p>
            </div>
            <div>
              <h3 class="!text-lg md:!text-xl">Markets &amp; Temples</h3>
              <p class="mt-3 leading-relaxed">
                Sukawati&rsquo;s arts and crafts market sits 7km north, with better quality goods in
                Ubud (art), Celuk (silverware) and Mas (woodwork) &mdash; all within an easy drive of
                the villa.
              </p>
            </div>
          </div>
          <div class="mt-12 flex justify-center xl:mt-16">
            <a href="location.php" class="btn-secondary group">
              Explore the Area
              <iconify-icon icon="ph:arrow-right"></iconify-icon>
            </a>
          </div>
        </div>
      </section>

      <!-- Additional Services -->
      <section
        id="services"
        data-aos="fade-up"
        class="mt-16 md:mt-20 xl:mt-28"
      >
        <div class="delimiter">
          <div class="text-center">
            <h2>Additional Services</h2>
            <p class="mx-auto mt-4 max-w-2xl leading-relaxed">
              Enhance your stay with a curated selection of in-villa services designed to elevate
              comfort, convenience and personalised experiences. Our team is here to assist with
              everything you need for a seamless stay in Bali.
            </p>
          </div>
          <div class="mx-auto mt-12 grid max-w-6xl grid-cols-1 gap-8 md:grid-cols-3 xl:mt-16 xl:gap-10">
            <?php foreach ($services as $service) : ?>
            <a href="<?php echo $service['link']; ?>" class="group flex h-full flex-col bg-white border border-gray-200 p-8 transition-shadow hover:shadow-md xl:p-10">
              <iconify-icon icon="<?php echo $service['icon']; ?>" class="!text-brand !text-3xl"></iconify-icon>
              <h3 class="mt-6 !text-lg md:!text-xl"><?php echo $service['title']; ?></h3>
              <p class="mt-3 leading-relaxed"><?php echo $service['text']; ?></p>
              <div class="mt-6 flex flex-1 items-end">
                <span class="text-brand inline-flex items-center gap-1 text-sm font-medium">
                  Learn More
                  <iconify-icon
                    icon="ph:arrow-right"
                    class="!text-brand transition-transform group-hover:translate-x-1"
                  ></iconify-icon>
                </span>
              </div>
            </a>
            <?php endforeach; ?>
          </div>
        </div>
      </section>
<!-- CTA: Plan Your Stay -->
      <?php if ($showPlanYourStay) : ?>
      <section data-aos="fade-up" class="mt-16 bg-gray-100 py-16 md:mt-20 md:py-20 xl:mt-28 xl:py-28">
        <div class="delimiter">
          <div class="divider"></div>
          <div class="mx-auto mt-16 max-w-3xl text-center md:mt-20 xl:mt-28">
            <h2>Plan Your Stay</h2>
            <p class="mx-auto mt-4 max-w-xl leading-relaxed">
              Tell our team what you have in mind and we will shape the villa, the menu and the days
              around your group.
            </p>
            <div class="mt-8 flex justify-center">
              <a
                href="https://booking.privatehomesandvillas.com/availvillas.html?villaid=BayuGitaEstate#_gl=1*tknxhq*_gcl_au*MTQ5ODYwMjY0OC4xNzgwOTk4Njcy"
                target="_blank"
                rel="noopener noreferrer"
                class="btn-primary group"
              >
                Book Now
                <iconify-icon
                  icon="ph:arrow-right"
                  class="group-hover:animate-bounce-right"
                ></iconify-icon>
              </a>
            </div>
          </div>
        </div>
      </section>
      <?php endif; ?>
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
