<?php $page = 'contact-us'; ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Contact Us - Villa Bayu Gita, Bali</title>
  <meta
    name="description"
    content="Get in touch with the Villa Bayu Gita team for enquiries, bookings and anything you need to plan your stay on Bali's south-east coast." />
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
      <!-- Contact Form -->
      <section data-aos="fade-up">
        <div class="mx-auto w-full max-w-2xl px-6">
          <div class="text-center">
            <h1>Get In Touch With Us</h1>
          </div>
          <div class="form mt-10 md:mt-12">
            <div class="mb-6">
              <label>Full Name</label>
              <input type="text" placeholder="Enter your first name..." />
            </div>
            <div class="mb-6 grid grid-cols-1 gap-6 md:grid-cols-2">
              <div>
                <label>Email</label>
                <input type="email" placeholder="Enter your email..." />
              </div>
              <div>
                <label>Phone Number</label>
                <input type="text" placeholder="Enter your phone number..." />
              </div>
            </div>
            <div class="mb-6">
              <label>Message</label>
              <textarea placeholder="Enter your message..."></textarea>
            </div>
            <button class="btn-primary group cursor-pointer">
              Send Message
              <iconify-icon
                icon="ph:paper-plane-tilt"
                class="group-hover:animate-bounce-right"
              ></iconify-icon>
            </button>
          </div>
          <!-- Address & Social -->
          <div class="mt-12 text-center md:mt-16">
            <p class="leading-relaxed">
              Bayu Gita Estate, Jalan Pantai Pabean, Banjar Pabean Ketewel, Kecamatan Sukawati,
              Kabupaten Gianyar, Bali, Indonesia 80582
            </p>
            <div class="mt-6 flex items-center justify-center gap-3">
              <a
                href="#"
                target="_blank"
                rel="noopener noreferrer"
                class="flex size-8 items-center justify-center border border-gray-300 text-gray-600 hover:border-gray-400"
              >
                <iconify-icon icon="ri:instagram-fill"></iconify-icon>
              </a>
              <a
                href="#"
                target="_blank"
                rel="noopener noreferrer"
                class="flex size-8 items-center justify-center border border-gray-300 text-gray-600 hover:border-gray-400"
              >
                <iconify-icon icon="ri:facebook-fill"></iconify-icon>
              </a>
              <a
                href="https://www.tripadvisor.com/Hotel_Review-g2283825-d7010672-Reviews-Villa_Bayu_Gita-Ketewel_Sukawati_Bali.html"
                target="_blank"
                rel="noopener noreferrer"
                class="flex size-8 items-center justify-center border border-gray-300 text-gray-600 hover:border-gray-400"
              >
                <iconify-icon icon="simple-icons:tripadvisor"></iconify-icon>
              </a>
            </div>
          </div>
        </div>
      </section>

      <!-- Map Section -->
      <section class="mt-16 mb-16 md:mt-20 md:mb-20 xl:mt-28 xl:mb-28">
        <div class="h-80 w-full xl:h-[28rem]">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.2!2d115.16!3d-8.68!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zOMKwNDAnNDguMCJTIDExNcKwMDknMzYuMCJF!5e0!3m2!1sen!2sid!4v1"
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
