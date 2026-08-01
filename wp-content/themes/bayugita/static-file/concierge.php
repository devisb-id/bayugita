<?php $page = 'concierge'; ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Concierge - Villa Bayu Gita, Bali</title>
  <meta
    name="description"
    content="The Villa Bayu Gita concierge team can suggest, book and arrange dining, adventures, cultural tours, in-villa services and more to make your Bali holiday truly memorable." />
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
          src="assets/images/experience-concierge-hero.webp"
          alt="Villa Bayu Gita - Concierge"
          class="parallax w-full object-cover"
        />
      </section>

      <!-- Intro -->
      <section data-aos="fade-up" class="mt-16 md:mt-20 xl:mt-28">
        <div class="mx-auto w-full max-w-5xl px-6">
          <div class="text-center">
            <h1>Concierge</h1>
          </div>
          <div class="mx-auto mt-10 max-w-4xl text-center md:mt-12">
            <p class="leading-relaxed">
              Staying at an elite haven comes with the innumerable benefits of Concierge services.
              Our able team is at your service to suggest, book and arrange for all those things which
              will go a long way in making your Bali holiday memorable. Get in touch with the
              Concierge for restaurant recommendations and reservations. If you want to try your hand
              at making local dishes, a cooking class can also be arranged for you.
            </p>
          </div>
        </div>
      </section>

      <!-- Body -->
      <section data-aos="fade-up" class="mt-16 mb-16 md:mt-20 md:mb-20 xl:mt-28 xl:mb-28">
        <div class="mx-auto w-full max-w-4xl px-6">
          <p class="leading-relaxed">
            Adventure-seekers will love white water rafting, snorkeling or scuba diving in and around
            the island. We can rent equipment on your behalf, book a training session (if required)
            and make all necessary arrangements. Experience the outdoors by joining a bike tour or
            taking a surfing lesson. For a touch of indulgence, hire a luxury yacht to go sailing in
            the high waters, with decadent refreshments served on board. Or just spend a satisfying
            day on the greens, teeing off at one of Bali&rsquo;s top golf courses.
          </p>
          <p class="mt-6 leading-relaxed">
            Experience and witness the Balinese way of life by booking a Concierge-curated Cultural
            Experience. The full day Tabanan tour drives you through Bali&rsquo;s picturesque rice
            terraces and includes visits to the famous Batukaru Temple and Taman Ayun Temple. A
            special Balinese lunch in a magical setting, not open to the general public, is included
            in the tour. Or you could head towards the cultural capital of Ubud which gives a glimpse
            into the local lifestyle as well as the art centre of Ubud. It allows photo-ops at
            Tegalalang Rice Terraces as well as a stop at the gorgeous Batuan Temple. A must-do for
            art-aficionados.
          </p>
          <p class="mt-6 leading-relaxed">
            The Concierge can also arrange for a range of services at your villa. Pamper yourself with
            a massage by the pool by a professional therapist or work on those abs with a personal
            trainer. Whatever it is that gets you going, it can all be arranged. From small things
            like your favourite foods and beverages pre-stocked in the villa when you arrive to
            traditional Balinese performers or even street artists putting up a show for you, at elite
            havens, we go the extra mile to ensure all your wishes are fulfilled.
          </p>
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
