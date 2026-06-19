<?php
$page = 'rates';
require 'partials/rates-data.php';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Rates & Availability - Villa Bayu Gita, Bali</title>
  <meta
    name="description"
    content="View seasonal rates for Villa Bayu Gita Beachfront, Bayu Gita Residence and the full estate. Enjoy early bird and last minute discounts on your luxury Bali villa stay." />
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

      <!-- Rates -->
      <section data-aos="fade-up" class="mb-16 md:mb-20 xl:mb-28">
        <div class="delimiter">
          <div class="text-center">
            <h1
              class="font-playfair text-dark text-3xl font-normal md:text-4xl xl:text-5xl"
            >
              Rates &amp; Availability
            </h1>
          </div>

          <!-- Discounts -->
          <div class="mx-auto mt-10 max-w-4xl border border-gray-200 bg-gray-50 p-6 md:mt-12 md:p-8">
            <div class="flex items-start gap-4">
              <div class="bg-brand-50 flex size-12 shrink-0 items-center justify-center">
                <iconify-icon icon="ph:tag" class="!text-brand !text-2xl"></iconify-icon>
              </div>
              <div>
                <h3>Discounts</h3>
                <ul class="mt-3 space-y-2 leading-relaxed">
                  <li class="flex gap-2">
                    <iconify-icon icon="ph:check" class="!text-brand mt-1 shrink-0"></iconify-icon>
                    Early bird enjoys up to 5% discount when booking 120 days in advance.
                  </li>
                  <li class="flex gap-2">
                    <iconify-icon icon="ph:check" class="!text-brand mt-1 shrink-0"></iconify-icon>
                    Last minute bookings enjoy up to 15% discount when checking in before 02 Jul
                    2026.
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Villa tabs -->
          <div class="mx-auto mt-10 flex max-w-4xl flex-col gap-2 sm:flex-row md:mt-12" role="tablist">
            <?php foreach ($villas as $vkey => $vname): ?>
            <button
              type="button"
              data-villa-tab="<?php echo $vkey; ?>"
              class="rate-villa-tab flex-1 cursor-pointer border border-gray-200 px-5 py-3 text-sm tracking-wider transition-colors"
            >
              <?php echo $vname; ?>
            </button>
            <?php endforeach; ?>
          </div>

          <!-- Villa description (changes per villa tab) -->
          <div class="mx-auto mt-6 max-w-3xl text-center">
            <?php foreach ($villas as $vkey => $vname): ?>
            <p class="rate-villa-desc leading-relaxed" data-villa="<?php echo $vkey; ?>">
              <?php echo $descriptions[$vkey]; ?>
            </p>
            <?php endforeach; ?>
          </div>

          <!-- Availability bar -->
          <div class="mx-auto mt-4 max-w-4xl border border-gray-200 bg-white p-6 md:p-8">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-[1fr_1fr_auto] md:items-end">
              <div>
                <label for="check-in" class="text-dark-500 mb-2 block text-sm font-medium">
                  Check-in
                </label>
                <input
                  type="date"
                  id="check-in"
                  class="w-full border border-gray-300 px-4 py-3 text-sm focus:border-brand focus:outline-none"
                />
              </div>
              <div>
                <label for="check-out" class="text-dark-500 mb-2 block text-sm font-medium">
                  Check-out
                </label>
                <input
                  type="date"
                  id="check-out"
                  class="w-full border border-gray-300 px-4 py-3 text-sm focus:border-brand focus:outline-none"
                />
              </div>
              <a
                href="https://booking.privatehomesandvillas.com/availvillas.html?villaid=BayuGitaEstate#_gl=1*1ltdhsd*_gcl_au*MTQ5ODYwMjY0OC4xNzgwOTk4Njcy"
                target="_blank"
                rel="noopener noreferrer"
                class="btn-primary group justify-center"
              >
                Check Availability
                <iconify-icon
                  icon="ph:arrow-right"
                  class="group-hover:animate-bounce-right"
                ></iconify-icon>
              </a>
            </div>
          </div>

          <!-- Year sub-tabs -->
          <div class="mt-6 flex justify-center gap-2">
            <?php foreach ($years as $yr): ?>
            <button
              type="button"
              data-year-tab="<?php echo $yr; ?>"
              class="rate-year-tab cursor-pointer border border-gray-200 px-4 py-2 text-sm transition-colors"
            >
              <?php echo $yr; ?>
            </button>
            <?php endforeach; ?>
          </div>

          <!-- Rate tables -->
          <div class="mx-auto mt-8 max-w-5xl">
            <?php foreach ($villas as $vkey => $vname): ?>
              <?php foreach ($years as $yr): ?>
              <div
                class="rate-panel"
                data-villa="<?php echo $vkey; ?>"
                data-year="<?php echo $yr; ?>"
              >
                <div class="overflow-x-auto border border-gray-200">
                  <table class="w-full min-w-[48rem] border-collapse text-left text-sm">
                    <thead>
                      <tr class="bg-brand-50 text-dark">
                        <th class="px-4 py-3 font-medium">Period</th>
                        <th class="px-4 py-3 font-medium">IDR / Night *</th>
                        <th class="px-4 py-3 font-medium">IDR / Night (10+ Nights) *</th>
                        <th class="px-4 py-3 font-medium">Min Nights</th>
                        <th class="px-4 py-3 font-medium">Inclusions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($rates[$vkey][$yr] as $row): ?>
                      <tr class="border-t border-gray-200">
                        <td class="px-4 py-3"><?php echo $row['period']; ?></td>
                        <td class="px-4 py-3"><?php echo $row['price']; ?></td>
                        <td class="px-4 py-3"><?php echo $row['price10']; ?></td>
                        <td class="px-4 py-3"><?php echo $row['min']; ?></td>
                        <td class="px-4 py-3">
                          <button
                            data-modal-open="modal-inclusions"
                            class="text-brand inline-flex cursor-pointer items-center gap-1 font-medium"
                          >
                            <iconify-icon icon="ph:file-text"></iconify-icon>
                            <?php echo $row['inclusions']; ?>
                          </button>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                      <tr class="bg-brand-50 border-t border-gray-200">
                        <td colspan="5" class="text-gray px-4 py-3 text-sm">
                          * All inclusive rates.
                        </td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
              <?php endforeach; ?>
            <?php endforeach; ?>

            <!-- Terms link (below table) -->
            <div class="mt-6 text-center">
              <button
                data-modal-open="modal-terms"
                class="text-brand inline-flex cursor-pointer items-center gap-1 text-sm font-medium underline-offset-4 hover:underline"
              >
                Read our terms &amp; conditions
                <iconify-icon icon="ph:arrow-up-right"></iconify-icon>
              </button>
            </div>
          </div>

          <!-- Booking CTA -->
          <div class="mx-auto mt-12 max-w-3xl text-center md:mt-16">
            <p class="leading-relaxed">
              Rates are subject to change and availability. For live availability and a tailored
              quote, please check our booking system or get in touch with our team.
            </p>
            <div class="mt-8 flex justify-center">
              <a
                href="https://booking.privatehomesandvillas.com/availvillas.html?villaid=BayuGitaEstate#_gl=1*1ltdhsd*_gcl_au*MTQ5ODYwMjY0OC4xNzgwOTk4Njcy"
                target="_blank"
                rel="noopener noreferrer"
                class="btn-primary group"
              >
                Enquire Now
                <iconify-icon
                  icon="ph:arrow-right"
                  class="group-hover:animate-bounce-right"
                ></iconify-icon>
              </a>
            </div>
          </div>
        </div>
      </section>

    </main>

    <?php include 'partials/footer.php'; ?>

    <!-- Inclusions Modal -->
    <div id="modal-inclusions" class="modal">
      <div class="modal__content" data-lenis-prevent>
        <button data-modal-close class="absolute top-6 right-6 cursor-pointer">
          <iconify-icon icon="ph:x" class="!text-dark text-2xl"></iconify-icon>
        </button>
        <h2>What&rsquo;s Included</h2>
        <p class="mt-4 leading-relaxed">
          All rates are quoted on an all-inclusive basis. Enjoy the exclusive use of the villa and
          its facilities, along with the flawless service of a full team of staff.
        </p>
        <ul class="mt-6 space-y-3">
          <li class="flex items-start gap-3">
            <iconify-icon icon="ph:swimming-pool" class="!text-brand mt-0.5 !text-xl shrink-0"></iconify-icon>
            <span class="leading-relaxed">Exclusive use of the villa and its private swimming pool</span>
          </li>
          <li class="flex items-start gap-3">
            <iconify-icon icon="ph:wifi-high" class="!text-brand mt-0.5 !text-xl shrink-0"></iconify-icon>
            <span class="leading-relaxed">Unlimited WiFi throughout the villa</span>
          </li>
          <li class="flex items-start gap-3">
            <iconify-icon icon="ph:user-circle" class="!text-brand mt-0.5 !text-xl shrink-0"></iconify-icon>
            <span class="leading-relaxed">Dedicated villa manager</span>
          </li>
          <li class="flex items-start gap-3">
            <iconify-icon icon="ph:cooking-pot" class="!text-brand mt-0.5 !text-xl shrink-0"></iconify-icon>
            <span class="leading-relaxed">Personal chef and well-trained cook</span>
          </li>
          <li class="flex items-start gap-3">
            <iconify-icon icon="ph:coffee" class="!text-brand mt-0.5 !text-xl shrink-0"></iconify-icon>
            <span class="leading-relaxed">Villa attendants and butlers</span>
          </li>
          <li class="flex items-start gap-3">
            <iconify-icon icon="ph:broom" class="!text-brand mt-0.5 !text-xl shrink-0"></iconify-icon>
            <span class="leading-relaxed">Daily housekeeping</span>
          </li>
          <li class="flex items-start gap-3">
            <iconify-icon icon="ph:shield-check" class="!text-brand mt-0.5 !text-xl shrink-0"></iconify-icon>
            <span class="leading-relaxed">24-hour security</span>
          </li>
        </ul>
      </div>
    </div>

    <!-- Terms & Conditions Modal -->
    <div id="modal-terms" class="modal">
      <div class="modal__content !max-w-3xl" data-lenis-prevent>
        <button data-modal-close class="absolute top-6 right-6 cursor-pointer">
          <iconify-icon icon="ph:x" class="!text-dark text-2xl"></iconify-icon>
        </button>
        <h2>Terms and Conditions</h2>
        <div class="mt-6 space-y-4">
          <?php foreach ($terms as [$tag, $text]): ?>
            <?php if ($tag === 'h4'): ?>
            <h3 class="mt-6"><?php echo $text; ?></h3>
            <?php elseif ($tag === 'li'): ?>
            <p class="flex gap-2 leading-relaxed">
              <iconify-icon icon="ph:dot-outline" class="!text-brand mt-1 shrink-0"></iconify-icon>
              <span><?php echo $text; ?></span>
            </p>
            <?php else: ?>
            <p class="leading-relaxed"><?php echo $text; ?></p>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

  </div>

  <script>
    // Rates: villa + year tabs (static data)
    (function () {
      const villaTabs = document.querySelectorAll('.rate-villa-tab');
      const yearTabs = document.querySelectorAll('.rate-year-tab');
      const panels = document.querySelectorAll('.rate-panel');
      const descs = document.querySelectorAll('.rate-villa-desc');
      const ON = ['border-brand', 'bg-brand', 'text-white'];
      const OFF = ['text-dark-500', 'hover:bg-brand-50', 'hover:text-brand', 'border-gray-200'];

      let villa = villaTabs.length ? villaTabs[0].dataset.villaTab : null;
      let year = yearTabs.length ? yearTabs[0].dataset.yearTab : null;

      function setActive(group, attr, value) {
        group.forEach((b) => {
          const on = b.dataset[attr] === value;
          b.classList.toggle('border-brand', on);
          b.classList.toggle('bg-brand', on);
          b.classList.toggle('text-white', on);
          b.classList.toggle('text-dark-500', !on);
          b.classList.toggle('border-gray-200', !on);
          b.classList.toggle('hover:bg-brand-50', !on);
          b.classList.toggle('hover:text-brand', !on);
        });
      }

      function render() {
        panels.forEach((p) => {
          const show = p.dataset.villa === villa && p.dataset.year === year;
          p.style.display = show ? '' : 'none';
        });
        descs.forEach((d) => {
          d.style.display = d.dataset.villa === villa ? '' : 'none';
        });
      }

      villaTabs.forEach((b) =>
        b.addEventListener('click', () => {
          villa = b.dataset.villaTab;
          setActive(villaTabs, 'villaTab', villa);
          render();
        }),
      );
      yearTabs.forEach((b) =>
        b.addEventListener('click', () => {
          year = b.dataset.yearTab;
          setActive(yearTabs, 'yearTab', year);
          render();
        }),
      );

      setActive(villaTabs, 'villaTab', villa);
      setActive(yearTabs, 'yearTab', year);
      render();
    })();
  </script>

  <script src="assets/aos/aos.js" defer></script>
  <script src="assets/swiper/swiper-bundle.min.js" defer></script>
  <script src="assets/iconify-design/iconify.min.js" defer></script>
  <script src="https://unpkg.com/lenis@1.1.5/dist/lenis.min.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" defer></script>
  <script src="assets/scripts/script.js" defer></script>
</body>

</html>
