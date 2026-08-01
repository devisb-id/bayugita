<?php
// Enquiry modal — opened by [data-modal-open="modal-enquiry"]
// Requires $countries from partials/enquiry-data.php
if (!isset($countries)) {
  require __DIR__ . '/enquiry-data.php';
}
?>
<div id="modal-enquiry" class="modal">
  <div class="modal__content !max-w-3xl" data-lenis-prevent>
    <button
      data-modal-close
      class="hover:border-brand hover:text-brand absolute top-6 right-6 flex size-11 cursor-pointer items-center justify-center border border-gray-300 text-dark transition-all"
    >
      <iconify-icon icon="ph:x" class="text-2xl"></iconify-icon>
    </button>

    <div class="text-center">
      <h2>Get In Touch With Us</h2>
      <p class="mx-auto mt-4 max-w-xl leading-relaxed">
        We&rsquo;d love to hear from you. Whether you&rsquo;re planning a visit or have an enquiry
        about the villa, our team is on hand to assist.
      </p>
    </div>

    <form class="form mt-10 space-y-8" action="#" method="post">
      <!-- Full Name -->
      <div>
        <label for="enquiry-name">Full Name</label>
        <input type="text" id="enquiry-name" name="name" placeholder="Enter your full name..." />
      </div>

      <!-- Email + Phone -->
      <div class="grid gap-6 md:grid-cols-2">
        <div>
          <label for="enquiry-email">Email</label>
          <input type="email" id="enquiry-email" name="email" placeholder="Enter your email..." />
        </div>
        <div>
          <label for="enquiry-phone">Phone Number</label>
          <input type="tel" id="enquiry-phone" name="phone" placeholder="Enter your phone number..." />
        </div>
      </div>

      <!-- Country + Passport Country -->
      <div class="grid gap-6 md:grid-cols-2">
        <div>
          <label for="enquiry-country">Country</label>
          <select id="enquiry-country" name="country">
            <option value="" selected>Select your country</option>
            <?php foreach ($countries as $country): ?>
              <option value="<?php echo htmlspecialchars($country); ?>"><?php echo htmlspecialchars($country); ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div>
          <label for="enquiry-passport">Passport Country</label>
          <select id="enquiry-passport" name="passport_country">
            <option value="" selected>Select your passport country</option>
            <?php foreach ($countries as $country): ?>
              <option value="<?php echo htmlspecialchars($country); ?>"><?php echo htmlspecialchars($country); ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>

      <!-- Additional Information (toggle) -->
      <div class="accordion-item">
        <button
          type="button"
          class="accordion-trigger flex w-full cursor-pointer items-center gap-2 text-left"
        >
          <span class="text-dark text-sm underline">Additional Information</span>
          <iconify-icon icon="ph:caret-down" class="!text-dark text-base transition-transform"></iconify-icon>
        </button>

        <div class="accordion-slide">
          <div class="pt-6">
        <!-- Dates -->
        <div class="grid gap-6 md:grid-cols-2">
          <div>
            <label for="enquiry-arrival">Arrival Date</label>
            <input type="date" id="enquiry-arrival" name="arrival_date" />
          </div>
          <div>
            <label for="enquiry-departure">Departure Date</label>
            <input type="date" id="enquiry-departure" name="departure_date" />
          </div>
        </div>

        <!-- Flexible / function -->
        <div class="mt-6 space-y-3">
          <label class="flex cursor-pointer items-center gap-3 text-sm">
            <input type="checkbox" name="dates_flexible" class="accent-brand size-4 shrink-0" />
            <span>Dates are flexible?</span>
          </label>
          <label class="flex cursor-pointer items-start gap-3 text-sm leading-relaxed">
            <input type="checkbox" name="function_intended" class="accent-brand mt-0.5 size-4 shrink-0" />
            <span>Do you intend to hold a function (wedding, special party, etc) during your stay?</span>
          </label>
        </div>

        <!-- Guests -->
        <div class="mt-6 grid gap-6 md:grid-cols-3">
          <div>
            <label for="enquiry-adult">Adult</label>
            <select id="enquiry-adult" name="adult">
              <option value="" selected>Select adult</option>
              <?php for ($i = 1; $i <= 20; $i++): ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
              <?php endfor; ?>
            </select>
          </div>
          <div>
            <label for="enquiry-children">Children</label>
            <select id="enquiry-children" name="children">
              <option value="" selected>Select children</option>
              <?php for ($i = 0; $i <= 20; $i++): ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
              <?php endfor; ?>
            </select>
          </div>
          <div>
            <label for="enquiry-infants">Infants</label>
            <select id="enquiry-infants" name="infants">
              <option value="" selected>Select infants</option>
              <?php for ($i = 0; $i <= 20; $i++): ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
              <?php endfor; ?>
            </select>
          </div>
        </div>
          </div>
        </div>
      </div>

      <!-- Message -->
      <div>
        <label for="enquiry-message">Message</label>
        <textarea id="enquiry-message" name="message" placeholder="Enter your request or message..."></textarea>
      </div>

      <!-- Consent -->
      <label class="flex cursor-pointer items-start gap-3 text-sm leading-relaxed">
        <input type="checkbox" name="consent" required class="accent-brand mt-0.5 size-4 shrink-0" />
        <span>
          I have read and accept the
          <a href="https://luxsomanagement.com/privacy-policy/" target="_blank" rel="noopener noreferrer" class="text-brand hover:underline">Privacy Policy</a> and
          <a href="https://luxsomanagement.com/terms-conditions/" target="_blank" rel="noopener noreferrer" class="text-brand hover:underline">Terms and Conditions</a>.
        </span>
      </label>

      <button type="submit" class="btn-primary">Send Message</button>
    </form>
  </div>
</div>
