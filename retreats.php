<?php $page = 'retreats'; ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Corporate Retreats - Villa Bayu Gita, Bali</title>
  <meta
    name="description"
    content="Two exceptional villas comprise the Villa Bayu Gita complex, accommodating 18 adults, making it a great venue for large corporate gatherings and retreats on Bali's south-east coast." />
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
          src="assets/images/retreats-hero.webp"
          alt="Villa Bayu Gita - Corporate Retreats"
          class="parallax w-full object-cover"
        />
      </section>

      <!-- Group 1: Content + Image -->
      <section data-aos="fade-up" class="mt-16 md:mt-20 xl:mt-28">
        <div class="mx-auto w-full max-w-6xl px-6">
          <div class="grid grid-cols-1 items-stretch gap-10 md:grid-cols-2 md:gap-12">
            <!-- Content -->
            <div class="flex flex-col justify-center py-4 md:py-8">
              <h1>Corporate Retreats</h1>
              <p class="mt-6 leading-relaxed">
                Two exceptional villas comprise the Villa Bayu Gita complex, accommodating a total of
                18 adults, making it a great venue for large corporate gatherings.
              </p>
              <p class="mt-6 leading-relaxed">
                Bayu Gita Beachfront, the larger of the two villas with six bedrooms, is also
                blessed with the bulk of the facilities. The living room is awash with sunlight, and
                with a cool breeze that is always likely thanks to the location of the villa, it
                makes a great location for cocktails and conversations after a long day of corporate
                meetings.
              </p>
            </div>
            <!-- Image -->
            <div class="min-h-[28rem] overflow-hidden md:min-h-[40rem]">
              <img
                src="assets/images/retreats-pool-bar.webp"
                alt="Villa Bayu Gita Beachfront - Pool and Bar"
                class="parallax w-full object-cover"
                loading="lazy"
              />
            </div>
          </div>
        </div>
      </section>

      <!-- Group 2: Image + Content -->
      <section data-aos="fade-up" class="mt-16 md:mt-20 xl:mt-28">
        <div class="mx-auto w-full max-w-6xl px-6">
          <div class="grid grid-cols-1 items-stretch gap-10 md:grid-cols-2 md:gap-12">
            <!-- Image (appears first on mobile, first on desktop) -->
            <div class="min-h-[28rem] overflow-hidden md:min-h-[40rem]">
              <img
                src="assets/images/retreats-sitting.webp"
                alt="Villa Bayu Gita Beachfront - Sitting and Dining Area"
                class="parallax w-full object-cover"
                loading="lazy"
              />
            </div>
            <!-- Content -->
            <div class="flex flex-col justify-center py-4 md:py-8">
              <p class="leading-relaxed">
                Beyond a small hallway, in which additional chairs can be put for extra participants
                who want to hear a speaker in the living or dining room, is the dining area which
                consists of long glass windows and a dining table for 10. The dining area can be
                used as a boardroom for corporate meetings. A television can be brought into the room
                for presentations. The space is private and comfortable, and reminiscent of real
                boardrooms with ample space and light.
              </p>
              <p class="mt-6 leading-relaxed">
                Your team members will benefit not just from rest and relaxation in the spacious
                bedrooms but from all the activities on offer and facilities that include a private
                gym, games room, billiards table, jacuzzi and luxuriously-appointed cinema. Outdoor
                activities can be arranged around the 18-metre swimming pool, with the island of Nusa
                Lembongan in the distance offering breathtaking vistas. For the ultimate corporate
                retreat, this is the place to be.
              </p>
              <p class="mt-6 leading-relaxed">
                Meanwhile, Bayu Gita Residence, the estate&rsquo;s three-bedroom villa includes a spa
                and several living spaces for both serious meetings and informal breakout sessions.
              </p>
              <p class="mt-6 leading-relaxed">
                To find out more, get in touch with our team and discuss how Villa Bayu Gita can
                fulfill your corporate event needs.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- Retreat CTA -->
      <section data-aos="fade-up" class="mt-16 mb-16 md:mt-20 md:mb-20 xl:mt-28 xl:mb-28">
        <div class="mx-auto w-full max-w-3xl px-6 text-center">
          <h2>Plan Your Corporate Retreat</h2>
          <p class="mx-auto mt-4 max-w-xl leading-relaxed">
            Get in touch with our team to check availability and discuss how Villa Bayu Gita can
            fulfill your corporate event needs.
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
