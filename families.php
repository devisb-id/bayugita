<?php $page = 'families'; ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>The Families - Villa Bayu Gita, Bali</title>
  <meta
    name="description"
    content="Bayu Gita is a great villa for families, with a choice of pools, a home cinema, media room, toys and games, plus friendly staff and child equipment to make a family holiday relaxed and easy." />
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
          src="assets/images/experience-families-hero.webp"
          alt="Villa Bayu Gita - The Families"
          class="parallax w-full object-cover"
        />
      </section>

      <!-- Intro -->
      <section data-aos="fade-up" class="mt-16 md:mt-20 xl:mt-28">
        <div class="mx-auto w-full max-w-5xl px-6">
          <div class="text-center">
            <h1>The Families</h1>
          </div>
          <div class="mx-auto mt-10 max-w-4xl text-center md:mt-12">
            <p class="leading-relaxed">
              The family friendly advantages of a villa holiday are many, including access to your
              own private facilities and the freedom to use them whenever you want. Knowing that the
              kids can run around happily, independently and safely, without you having to worry
              about other guests, is a real plus &ndash; and one that means parents are certain to
              have a more relaxed holiday too.
            </p>
          </div>
        </div>
      </section>

      <!-- Group 1: Content + Image -->
      <section data-aos="fade-up" class="mt-16 md:mt-20 xl:mt-28">
        <div class="mx-auto w-full max-w-6xl px-6">
          <div class="grid grid-cols-1 items-stretch gap-10 md:grid-cols-2 md:gap-12">
            <!-- Content -->
            <div class="flex flex-col justify-center py-4 md:py-8">
              <p class="leading-relaxed">
                Bayu Gita is a great villa for families with older children. The Beachfront villa
                offers a choice of pools and a well-stocked home cinema, while Bayu Gita
                Residence&rsquo;s media room, toys, games and pool will keep kids well amused too.
                Younger children will also love the villas, although parents will need to be vigilant
                on the beach as the water is not suitable for swimming.
              </p>
              <p class="mt-6 leading-relaxed">
                The team of friendly staff at Bayu Gita will make children feel as welcome as adults,
                and having these willing helpers on hand gives guests plenty of flexibility and
                freedom to do their own exploring beyond the villa grounds (full-time babysitting
                incurs a small extra cost).
              </p>
            </div>
            <!-- Image -->
            <div class="min-h-[28rem] overflow-hidden md:min-h-[40rem]">
              <img
                src="assets/images/experience-families-1.webp"
                alt="Villa Bayu Gita - Games and Pool Table"
                class="parallax w-full object-cover"
                loading="lazy"
              />
            </div>
          </div>
        </div>
      </section>

      <!-- Group 2: Image + Content -->
      <section data-aos="fade-up" class="mt-16 mb-16 md:mt-20 md:mb-20 xl:mt-28 xl:mb-28">
        <div class="mx-auto w-full max-w-6xl px-6">
          <div class="grid grid-cols-1 items-stretch gap-10 md:grid-cols-2 md:gap-12">
            <!-- Image -->
            <div class="min-h-[28rem] overflow-hidden md:min-h-[40rem]">
              <img
                src="assets/images/experience-families-2.webp"
                alt="Villa Bayu Gita Beachfront - Family Pool"
                class="parallax w-full object-cover"
                loading="lazy"
              />
            </div>
            <!-- Content -->
            <div class="flex flex-col justify-center py-4 md:py-8">
              <p class="leading-relaxed">
                Although the equipped kitchen allows you to prepare meals for fussy eaters or babies
                with ease, staff will happily do this for you &ndash; just talk through your
                requirements and meal schedules with the villa manager or chef and they will take
                care of the rest. Pancakes by the pool for breakfast? Toasties for tea? No problem.
                The chef can customise all meals to suit children&rsquo;s taste buds.
              </p>
              <p class="mt-6 leading-relaxed">
                Don&rsquo;t worry about packing all that cumbersome kids&rsquo; equipment for your
                stay. Just let us know what you need, and anything we don&rsquo;t have in-house (villa
                facilities include a baby cot, highchair, booster seat, games and toys) we can hire on
                your behalf.
              </p>
              <p class="mt-6 leading-relaxed">
                And when the excitement of exploring the villas starts to wear off, check out our
                Things to do page &ndash; there&rsquo;s plenty in the area to keep all the family
                amused throughout the holiday.
              </p>
            </div>
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
