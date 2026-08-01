<!-- Special Offer Modals -->
<!-- Requires $special_offers and $booking_url from partials/offers-data.php -->
<?php foreach ($special_offers as $offer) : ?>
<div id="modal-offer-<?php echo $offer['id']; ?>" class="modal">
  <div class="modal__content !max-w-4xl !p-0" data-lenis-prevent>
    <button
      type="button"
      data-modal-close
      class="text-dark absolute top-4 right-4 z-10 flex size-10 cursor-pointer items-center justify-center bg-white/80 transition-opacity hover:opacity-70"
      aria-label="Close"
    >
      <iconify-icon icon="ph:x" class="text-xl"></iconify-icon>
    </button>
    <div class="grid grid-cols-1 md:grid-cols-2">
      <!-- Image -->
      <div class="h-56 w-full md:h-full md:min-h-[30rem]">
        <img
          src="<?php echo $offer['image']; ?>"
          alt="<?php echo $offer['alt']; ?>"
          class="h-full w-full object-cover"
          loading="lazy"
        />
      </div>
      <!-- Content -->
      <div class="flex flex-col p-8 xl:p-10">
        <h3 class="font-playfair text-2xl leading-snug font-normal xl:text-3xl">
          <?php echo $offer['title']; ?>
        </h3>
        <p class="mt-4 leading-relaxed">
          <?php echo $offer['description']; ?>
        </p>
        <ul class="mt-6 flex flex-col gap-3">
          <?php foreach ($offer['benefits'] as $benefit) : ?>
          <li class="flex items-start gap-3">
            <iconify-icon
              icon="ph:check-circle-fill"
              class="!text-brand mt-0.5 shrink-0 !text-lg"
            ></iconify-icon>
            <?php echo $benefit; ?>
          </li>
          <?php endforeach; ?>
        </ul>
        <p class="text-brand mt-6 text-sm italic"><?php echo $offer['terms']; ?></p>
        <div class="mt-8">
          <a
            href="<?php echo $booking_url; ?>"
            target="_blank"
            rel="noopener noreferrer"
            class="btn-primary group w-fit"
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
  </div>
</div>
<?php endforeach; ?>
