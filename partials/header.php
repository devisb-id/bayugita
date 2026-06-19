<!-- Header -->
<header class="header-scrolled fixed top-0 right-0 left-0 z-50 transition-all duration-300">
  <div class="w-full">
    <div class="delimiter">
      <div
        class="header-border grid w-full grid-cols-[1fr_auto_1fr] items-center border-b border-white/20 py-4"
      >
        <!-- Logo (left) -->
        <a href="index.php" class="justify-self-start">
          <img
            src="assets/images/logo.webp"
            alt="Villa Bayu Gita"
            class="h-7 w-auto xl:h-10"
            loading="eager"
          />
        </a>
        <!-- Nav (center) -->
        <nav class="hidden items-center justify-center gap-5 xl:flex 2xl:gap-7">
          <a
            href="index.php"
            class="xl:!text-sm text-sm tracking-wider text-white <?php echo (isset($page) && $page === 'home') ? 'active' : 'hover:text-white/70'; ?>"
          >
            Home
          </a>
          <!-- Explore -->
          <div class="group/nav relative py-4">
            <button
              class="xl:!text-sm flex cursor-pointer items-center gap-1 text-sm tracking-wider text-white/80 hover:text-white"
            >
              Explore
              <iconify-icon icon="ph:caret-down" class="!text-xs !text-white/80"></iconify-icon>
            </button>
            <div
              class="invisible absolute top-full left-1/2 z-50 min-w-56 -translate-x-1/2 translate-y-2 bg-white opacity-0 shadow-md transition-all duration-200 group-hover/nav:visible group-hover/nav:translate-y-0 group-hover/nav:opacity-100"
            >
              <a href="villa-detail.php" class="text-dark hover:bg-brand-50 block px-5 py-3 text-sm">Bayu Gita Beachfront</a>
              <a href="villa-detail.php" class="text-dark hover:bg-brand-50 block px-5 py-3 text-sm">Bayu Gita Residence</a>
            </div>
          </div>
          <!-- Gallery -->
          <div class="group/nav relative py-4">
            <button
              class="xl:!text-sm flex cursor-pointer items-center gap-1 text-sm tracking-wider text-white/80 hover:text-white"
            >
              Gallery
              <iconify-icon icon="ph:caret-down" class="!text-xs !text-white/80"></iconify-icon>
            </button>
            <div
              class="invisible absolute top-full left-1/2 z-50 min-w-56 -translate-x-1/2 translate-y-2 bg-white opacity-0 shadow-md transition-all duration-200 group-hover/nav:visible group-hover/nav:translate-y-0 group-hover/nav:opacity-100"
            >
              <a href="gallery.php" class="text-dark hover:bg-brand-50 block px-5 py-3 text-sm">Photo Gallery</a>
              <a href="floorplan.php" class="text-dark hover:bg-brand-50 block px-5 py-3 text-sm">Floorplan</a>
            </div>
          </div>
          <!-- Location -->
          <a href="location.php" class="xl:!text-sm text-sm tracking-wider text-white/80 hover:text-white">
            Location
          </a>
          <!-- Weddings -->
          <a href="weddings.php" class="xl:!text-sm text-sm tracking-wider text-white/80 hover:text-white">
            Weddings
          </a>
          <!-- Retreats -->
          <a href="retreats.php" class="xl:!text-sm text-sm tracking-wider text-white/80 hover:text-white">
            Retreats
          </a>
          <!-- Experience -->
          <div class="group/nav relative py-4">
            <button
              class="xl:!text-sm flex cursor-pointer items-center gap-1 text-sm tracking-wider text-white/80 hover:text-white"
            >
              Experience
              <iconify-icon icon="ph:caret-down" class="!text-xs !text-white/80"></iconify-icon>
            </button>
            <div
              class="invisible absolute top-full left-1/2 z-50 min-w-56 -translate-x-1/2 translate-y-2 bg-white opacity-0 shadow-md transition-all duration-200 group-hover/nav:visible group-hover/nav:translate-y-0 group-hover/nav:opacity-100"
            >
              <a href="staff.php" class="text-dark hover:bg-brand-50 block px-5 py-3 text-sm">Staff</a>
              <a href="dining.php" class="text-dark hover:bg-brand-50 block px-5 py-3 text-sm">Dining</a>
              <a href="families.php" class="text-dark hover:bg-brand-50 block px-5 py-3 text-sm">Families</a>
              <a href="spa.php" class="text-dark hover:bg-brand-50 block px-5 py-3 text-sm">Spa</a>
              <a href="concierge.php" class="text-dark hover:bg-brand-50 block px-5 py-3 text-sm">Concierge</a>
            </div>
          </div>
          <!-- Reviews -->
          <div class="group/nav relative py-4">
            <button
              class="xl:!text-sm flex cursor-pointer items-center gap-1 text-sm tracking-wider text-white/80 hover:text-white"
            >
              Reviews
              <iconify-icon icon="ph:caret-down" class="!text-xs !text-white/80"></iconify-icon>
            </button>
            <div
              class="invisible absolute top-full left-1/2 z-50 min-w-56 -translate-x-1/2 translate-y-2 bg-white opacity-0 shadow-md transition-all duration-200 group-hover/nav:visible group-hover/nav:translate-y-0 group-hover/nav:opacity-100"
            >
              <a href="guest-review.php" class="text-dark hover:bg-brand-50 block px-5 py-3 text-sm">Guest Review</a>
              <a href="press.php" class="text-dark hover:bg-brand-50 block px-5 py-3 text-sm">Press</a>
            </div>
          </div>
          <!-- Rates -->
          <a href="rates.php" class="xl:!text-sm text-sm tracking-wider text-white/80 hover:text-white">
            Rates
          </a>
        </nav>
        <!-- CTA (right) -->
        <div class="hidden items-center justify-self-end xl:flex">
          <a
            href="https://booking.privatehomesandvillas.com/availvillas.html?villaid=BayuGitaEstate#_gl=1*tknxhq*_gcl_au*MTQ5ODYwMjY0OC4xNzgwOTk4Njcy"
            target="_blank"
            rel="noopener noreferrer"
            class="btn-primary"
          >
            Enquire
          </a>
        </div>
        <button
          id="mobile-navbar-open"
          class="col-start-3 flex size-10 cursor-pointer items-center justify-end justify-self-end text-white xl:hidden"
        >
          <iconify-icon icon="ph:list" class="text-2xl !text-white"></iconify-icon>
        </button>
      </div>
    </div>
  </div>
</header>

<!-- Mobile Navbar -->
<div id="mobile-navbar-overlay" class="fixed inset-0 z-[59] hidden bg-black/50"></div>
<div
  id="mobile-navbar-content"
  class="bg-background fixed top-0 right-0 bottom-0 z-[60] hidden w-80 max-w-[85vw] flex-col"
>
  <div class="flex w-full items-center justify-end px-6 py-4">
    <button
      id="mobile-navbar-close"
      class="text-dark flex size-10 cursor-pointer items-center justify-center"
    >
      <iconify-icon icon="ph:x" class="text-2xl"></iconify-icon>
    </button>
  </div>
  <div class="flex flex-1 flex-col px-6 py-4">
    <nav id="mobile-navbar-menu" class="flex flex-col gap-1">
      <a href="index.php" class="text-dark hover:text-brand py-3 text-sm">Home</a>

      <!-- Explore -->
      <div class="mobile-nav-group">
        <button
          class="mobile-nav-toggle text-dark-500 hover:text-brand flex w-full cursor-pointer items-center justify-between py-3 text-left text-sm"
        >
          Explore
          <iconify-icon icon="ph:caret-down" class="mobile-nav-caret !text-base"></iconify-icon>
        </button>
        <div class="mobile-nav-panel hidden flex-col gap-1 pl-4">
          <a href="villa-detail.php" class="text-dark-500 hover:text-brand py-2 text-sm">Bayu Gita Beachfront</a>
          <a href="villa-detail.php" class="text-dark-500 hover:text-brand py-2 text-sm">Bayu Gita Residence</a>
        </div>
      </div>

      <!-- Gallery -->
      <div class="mobile-nav-group">
        <button
          class="mobile-nav-toggle text-dark-500 hover:text-brand flex w-full cursor-pointer items-center justify-between py-3 text-left text-sm"
        >
          Gallery
          <iconify-icon icon="ph:caret-down" class="mobile-nav-caret !text-base"></iconify-icon>
        </button>
        <div class="mobile-nav-panel hidden flex-col gap-1 pl-4">
          <a href="gallery.php" class="text-dark-500 hover:text-brand py-2 text-sm">Photo Gallery</a>
          <a href="floorplan.php" class="text-dark-500 hover:text-brand py-2 text-sm">Floorplan</a>
        </div>
      </div>

      <!-- Location -->
      <a href="location.php" class="text-dark-500 hover:text-brand py-3 text-sm">Location</a>

      <!-- Weddings -->
      <a href="weddings.php" class="text-dark-500 hover:text-brand py-3 text-sm">Weddings</a>

      <!-- Retreats -->
      <a href="retreats.php" class="text-dark-500 hover:text-brand py-3 text-sm">Retreats</a>

      <!-- Experience -->
      <div class="mobile-nav-group">
        <button
          class="mobile-nav-toggle text-dark-500 hover:text-brand flex w-full cursor-pointer items-center justify-between py-3 text-left text-sm"
        >
          Experience
          <iconify-icon icon="ph:caret-down" class="mobile-nav-caret !text-base"></iconify-icon>
        </button>
        <div class="mobile-nav-panel hidden flex-col gap-1 pl-4">
          <a href="staff.php" class="text-dark-500 hover:text-brand py-2 text-sm">Staff</a>
          <a href="dining.php" class="text-dark-500 hover:text-brand py-2 text-sm">Dining</a>
          <a href="families.php" class="text-dark-500 hover:text-brand py-2 text-sm">Families</a>
          <a href="spa.php" class="text-dark-500 hover:text-brand py-2 text-sm">Spa</a>
          <a href="concierge.php" class="text-dark-500 hover:text-brand py-2 text-sm">Concierge</a>
        </div>
      </div>

      <!-- Reviews -->
      <div class="mobile-nav-group">
        <button
          class="mobile-nav-toggle text-dark-500 hover:text-brand flex w-full cursor-pointer items-center justify-between py-3 text-left text-sm"
        >
          Reviews
          <iconify-icon icon="ph:caret-down" class="mobile-nav-caret !text-base"></iconify-icon>
        </button>
        <div class="mobile-nav-panel hidden flex-col gap-1 pl-4">
          <a href="guest-review.php" class="text-dark-500 hover:text-brand py-2 text-sm">Guest Review</a>
          <a href="press.php" class="text-dark-500 hover:text-brand py-2 text-sm">Press</a>
        </div>
      </div>

      <!-- Rates -->
      <a href="rates.php" class="text-dark-500 hover:text-brand py-3 text-sm">Rates</a>
    </nav>
    <div id="mobile-navbar-divider" class="divider my-6"></div>
    <div id="mobile-navbar-auth">
      <a
        href="https://booking.privatehomesandvillas.com/availvillas.html?villaid=BayuGitaEstate#_gl=1*tknxhq*_gcl_au*MTQ5ODYwMjY0OC4xNzgwOTk4Njcy"
        target="_blank"
        rel="noopener noreferrer"
        class="btn-primary w-full"
      >
        Enquire
      </a>
    </div>
  </div>
</div>
