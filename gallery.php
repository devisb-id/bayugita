<?php
$page = 'gallery';

$gallery = [
  // Bayu Gita Beachfront
  ['gallery-beach-01.webp', 'Bayu Gita Beachfront - Beachfront Haven'],
  ['gallery-beach-02.webp', 'Bayu Gita Beachfront - Pool Area by the Beach'],
  ['gallery-beach-03.webp', 'Bayu Gita Beachfront - Pool Area Overlooking the Ocean'],
  ['gallery-beach-04.webp', 'Bayu Gita Beachfront - Relaxing Living Area'],
  ['gallery-beach-05.webp', 'Bayu Gita Beachfront - Airy Dining Area'],
  ['gallery-beach-06.webp', 'Bayu Gita Beachfront - Opulent Master Suite One'],
  ['gallery-beach-07.webp', 'Bayu Gita Beachfront - Master Suite One Plunge Pool'],
  ['gallery-beach-08.webp', 'Bayu Gita Beachfront - Cinema Room'],
  ['gallery-beach-09.webp', 'Bayu Gita Beachfront - Billiards Room'],
  ['gallery-beach-10.webp', 'Bayu Gita Beachfront - Restful Master Suite Two'],
  ['gallery-beach-11.webp', 'Bayu Gita Beachfront - Master Suite Two Plunge Pool'],
  ['gallery-beach-12.webp', 'Bayu Gita Beachfront - Downstairs Front Bedroom'],
  ['gallery-beach-13.webp', 'Bayu Gita Beachfront - Upstairs Front Bedroom'],
  ['gallery-beach-14.webp', 'Bayu Gita Beachfront - Downstairs Ensuite'],
  ['gallery-beach-15.webp', 'Bayu Gita Beachfront - Modern Luxury Beachfront Villa'],
  ['gallery-beach-16.webp', 'Bayu Gita Beachfront - Living Area Pocket Pond'],
  ['gallery-beach-17.webp', 'Bayu Gita Beachfront - Fantastic Beach Views'],
  ['gallery-beach-18.webp', 'Bayu Gita Beachfront - Renowned Surfing Beach'],
  ['gallery-beach-19.webp', 'Bayu Gita Beachfront - Serene Villa at Nightfall'],
  // Bayu Gita Residence
  ['gallery-res-01.webp', 'Bayu Gita Residence - Relaxing Pool Area'],
  ['gallery-res-02.webp', 'Bayu Gita Residence - Sun Loungers by the Pool'],
  ['gallery-res-03.webp', 'Bayu Gita Residence - Tranquil Pool'],
  ['gallery-res-04.webp', 'Bayu Gita Residence - Cool and Restful Bale'],
  ['gallery-res-05.webp', 'Bayu Gita Residence - Pathway to the Pool'],
  ['gallery-res-06.webp', 'Bayu Gita Residence - Airy Living Area'],
  ['gallery-res-07.webp', 'Bayu Gita Residence - Cosy Media Room'],
  ['gallery-res-08.webp', 'Bayu Gita Residence - Cool Dining Area by the Pool'],
  ['gallery-res-09.webp', 'Bayu Gita Residence - Opulent Bedroom One'],
  ['gallery-res-10.webp', 'Bayu Gita Residence - Bedroom One Ensuite'],
  ['gallery-res-11.webp', 'Bayu Gita Residence - Restful Bedroom Three'],
  ['gallery-res-12.webp', 'Bayu Gita Residence - Bedroom Two Ensuite'],
  ['gallery-res-13.webp', 'Bayu Gita Residence - Relaxing Bedroom Two'],
  ['gallery-res-14.webp', 'Bayu Gita Residence - Bedroom Two from the Ensuite'],
  ['gallery-res-15.webp', 'Bayu Gita Residence - Lovely Bedroom Two'],
  ['gallery-res-16.webp', 'Bayu Gita Residence - Bedroom Three Ensuite'],
  ['gallery-res-17.webp', 'Bayu Gita Residence - Airy Balcony'],
  ['gallery-res-18.webp', 'Bayu Gita Residence - Alfresco Dining'],
  ['gallery-res-19.webp', 'Bayu Gita Residence - Jacuzzi by the Pool'],
  ['gallery-res-20.webp', 'Bayu Gita Residence - Relaxing Pool Area with Bale'],
  ['gallery-res-21.webp', 'Bayu Gita Residence - Hallway'],
  ['gallery-res-22.webp', 'Bayu Gita Residence - Living Area'],
  ['gallery-res-23.webp', 'Bayu Gita Residence - Thai Details Abound'],
  ['gallery-res-24.webp', 'Bayu Gita Residence - Serene Villa at Twilight'],
];

// Video files go in assets/videos/ as WebM (MP4 is gitignored); 'poster' is the grid thumbnail.
// All three slots share one sample video for now.
$videos = [
  ['file' => 'villa-tour.webm', 'poster' => 'gallery-beach-15.webp', 'title' => 'Bayu Gita Beachfront - Villa Tour'],
  ['file' => 'villa-tour.webm', 'poster' => 'gallery-beach-03.webp', 'title' => 'Bayu Gita Beachfront - Pool &amp; Ocean Views'],
  ['file' => 'villa-tour.webm', 'poster' => 'gallery-res-01.webp', 'title' => 'Bayu Gita Residence - Villa Tour'],
];

$per_page = 12;
$total_pages = (int) ceil(count($gallery) / $per_page);
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Gallery - Villa Bayu Gita, Bali</title>
  <meta
    name="description"
    content="Explore the gallery of Villa Bayu Gita - browse images and videos of Bayu Gita Beachfront and Bayu Gita Residence, two luxury villas on Bali's south-east coast." />
  <link rel="icon" href="assets/images/favicon.webp" type="image/webp" />
  <link rel="stylesheet" href="assets/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="assets/aos/aos.css" />
  <link rel="stylesheet" href="assets/styles/output.css" />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/css/lightgallery-bundle.min.css" />
</head>

<body>

  <?php include 'partials/page-transition.php'; ?>

  <!-- Page Content -->
  <div class="page-content">

    <?php include 'partials/header.php'; ?>

    <?php include 'partials/whatsapp-float.php'; ?>

    <!-- Main Content -->
    <main class="pt-36 md:pt-40 xl:pt-48">

      <!-- Photo Gallery -->
      <section data-aos="fade-up">
        <div class="delimiter">
          <h1
            class="font-playfair text-dark text-center text-3xl font-normal md:text-4xl xl:text-5xl"
          >
            Photo Gallery
          </h1>
          <p class="mx-auto mt-4 max-w-2xl text-center leading-relaxed">
            Browse a selection of images from Bayu Gita Beachfront and Bayu Gita Residence, two
            stunning villas set on Bali's tranquil south-east coast.
          </p>
          <div
            id="photo-gallery"
            class="mt-10 grid grid-cols-2 gap-2 md:mt-12 md:grid-cols-4 md:gap-3"
          >
            <?php foreach ($gallery as [$file, $alt]): ?>
            <a href="assets/images/<?php echo $file; ?>" class="group block aspect-[4/3] overflow-hidden"><img src="assets/images/<?php echo $file; ?>" alt="<?php echo htmlspecialchars($alt, ENT_QUOTES); ?>" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy" /></a>
            <?php endforeach; ?>
          </div>
          <!-- Pagination -->
          <?php if ($total_pages > 1): ?>
          <div class="mt-10 flex items-center justify-center gap-2">
            <?php for ($p = 1; $p <= $total_pages; $p++): ?>
            <button class="btn-paginate<?php echo $p === 1 ? ' active' : ''; ?>" data-page="<?php echo $p; ?>"><?php echo $p; ?></button>
            <?php endfor; ?>
          </div>
          <?php endif; ?>
        </div>
      </section>

      <!-- Video Gallery -->
      <section data-aos="fade-up" class="mt-16 md:mt-20 xl:mt-28">
        <div class="delimiter">
          <h2 class="text-center">Video Gallery</h2>
          <p class="mx-auto mt-4 max-w-2xl text-center leading-relaxed">
            Take a closer look at both villas and the stretch of Pabean Beach they call home.
          </p>
          <div
            id="video-gallery"
            class="mt-10 grid grid-cols-1 gap-4 md:mt-12 md:grid-cols-2 xl:grid-cols-3"
          >
            <?php foreach ($videos as $video): ?>
            <a
              data-lg-size="1280-720"
              data-video='{"source": [{"src":"assets/videos/<?php echo $video['file']; ?>", "type":"video/webm"}], "attributes": {"preload": "auto", "controls": true, "autoplay": true, "playsinline": true}}'
              data-poster="assets/images/<?php echo $video['poster']; ?>"
              class="group relative block aspect-video cursor-pointer overflow-hidden"
            >
              <img
                src="assets/images/<?php echo $video['poster']; ?>"
                alt="<?php echo htmlspecialchars($video['title'], ENT_QUOTES); ?>"
                class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                loading="lazy"
              />
              <div
                class="absolute inset-0 flex items-center justify-center bg-black/20 transition-colors group-hover:bg-black/30"
              >
                <div class="bg-brand flex size-10 items-center justify-center xl:size-12">
                  <iconify-icon icon="ph:play-fill" class="text-lg !text-white xl:text-xl"></iconify-icon>
                </div>
              </div>
            </a>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <!-- Floorplan CTA -->
      <section data-aos="fade-up" class="mt-16 mb-16 md:mt-20 md:mb-20 xl:mt-28 xl:mb-28">
        <div class="mx-auto w-full max-w-3xl px-6 text-center">
          <h2>Looking for the Floorplan?</h2>
          <p class="mx-auto mt-4 max-w-xl leading-relaxed">
            View and download the detailed villa layout and keyplan for both Bayu Gita Beachfront
            and Bayu Gita Residence.
          </p>
          <div class="mt-8 flex justify-center">
            <a href="floorplan.php" class="btn-primary group">
              View Floorplan
              <iconify-icon
                icon="ph:arrow-right"
                class="group-hover:animate-bounce-right"
              ></iconify-icon>
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
  <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/lightgallery.min.js" defer></script>
  <script
    src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/plugins/zoom/lg-zoom.min.js"
    defer
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/plugins/video/lg-video.min.js"
    defer
  ></script>
  <script src="assets/scripts/script.js" defer></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      // Photo Gallery lightGallery
      const photoGallery = document.getElementById('photo-gallery');
      if (photoGallery && typeof lightGallery !== 'undefined') {
        lightGallery(photoGallery, {
          speed: 400,
          plugins: [lgZoom],
          selector: 'a',
          download: false,
          counter: false,
          subHtml: false,
          getCaptionFromTitleOrAlt: false,
        });
      }

      // Video Gallery lightGallery
      const videoGallery = document.getElementById('video-gallery');
      if (videoGallery && typeof lightGallery !== 'undefined') {
        lightGallery(videoGallery, {
          speed: 400,
          plugins: [lgVideo],
          selector: 'a',
          download: false,
          counter: false,
          autoplayFirstVideo: true,
          videojs: false,
          gotoNextSlideOnVideoEnd: false,
        });
      }

      // Photo Gallery Pagination
      const ITEMS_PER_PAGE = 12;
      const galleryItems = photoGallery ? Array.from(photoGallery.querySelectorAll('a')) : [];
      const paginateButtons = document.querySelectorAll('.btn-paginate[data-page]');
      const totalPages = Math.ceil(galleryItems.length / ITEMS_PER_PAGE);

      function showPage(page) {
        const start = (page - 1) * ITEMS_PER_PAGE;
        const end = start + ITEMS_PER_PAGE;
        galleryItems.forEach((item, i) => {
          item.style.display = i >= start && i < end ? '' : 'none';
        });
        paginateButtons.forEach((btn) => {
          const btnPage = parseInt(btn.dataset.page);
          btn.classList.toggle('active', btnPage === page);
          btn.style.display = btnPage <= totalPages ? '' : 'none';
        });
        window.scrollTo({ top: 0, behavior: 'smooth' });
      }

      paginateButtons.forEach((btn) => {
        btn.addEventListener('click', () => {
          showPage(parseInt(btn.dataset.page));
        });
      });

      if (galleryItems.length > 0) showPage(1);
    });
  </script>
</body>

</html>
