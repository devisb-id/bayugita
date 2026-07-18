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
          <!-- The Villa -->
          <div class="group/nav relative py-4">
            <button
              class="xl:!text-sm flex cursor-pointer items-center gap-1 text-sm tracking-wider text-white <?php echo (isset($page) && ($page === 'beachfront' || $page === 'residence' || $page === 'villa')) ? 'active' : 'hover:text-white/70'; ?>"
            >
              The Villa
              <iconify-icon icon="ph:caret-down" class="!text-xs !text-white/80"></iconify-icon>
            </button>
            <div
              class="invisible absolute top-full left-1/2 z-50 min-w-56 -translate-x-1/2 translate-y-2 bg-white opacity-0 shadow-md transition-all duration-200 group-hover/nav:visible group-hover/nav:translate-y-0 group-hover/nav:opacity-100"
            >
              <a href="villa-detail.php" class="text-dark hover:bg-brand-50 block px-5 py-3 text-sm">Bayu Gita Beachfront</a>
              <a href="villa-detail.php" class="text-dark hover:bg-brand-50 block px-5 py-3 text-sm">Bayu Gita Residence</a>
            </div>
          </div>
          <a
            href="experiences.php"
            class="xl:!text-sm text-sm tracking-wider text-white <?php echo (isset($page) && $page === 'experiences') ? 'active' : 'hover:text-white/70'; ?>"
          >
            Experiences
          </a>
          <!-- Special Events -->
          <div class="group/nav relative py-4">
            <button
              class="xl:!text-sm flex cursor-pointer items-center gap-1 text-sm tracking-wider text-white <?php echo (isset($page) && ($page === 'weddings' || $page === 'retreats' || $page === 'special-events')) ? 'active' : 'hover:text-white/70'; ?>"
            >
              Special Events
              <iconify-icon icon="ph:caret-down" class="!text-xs !text-white/80"></iconify-icon>
            </button>
            <div
              class="invisible absolute top-full left-1/2 z-50 min-w-56 -translate-x-1/2 translate-y-2 bg-white opacity-0 shadow-md transition-all duration-200 group-hover/nav:visible group-hover/nav:translate-y-0 group-hover/nav:opacity-100"
            >
              <a href="weddings.php" class="text-dark hover:bg-brand-50 block px-5 py-3 text-sm">Weddings</a>
              <a href="retreats.php" class="text-dark hover:bg-brand-50 block px-5 py-3 text-sm">Corporate Retreats</a>
            </div>
          </div>
          <a
            href="gallery.php"
            class="xl:!text-sm text-sm tracking-wider text-white <?php echo (isset($page) && ($page === 'gallery' || $page === 'floorplan')) ? 'active' : 'hover:text-white/70'; ?>"
          >
            Gallery
          </a>
          <a
            href="special-offers.php"
            class="xl:!text-sm text-sm tracking-wider text-white <?php echo (isset($page) && $page === 'special-offers') ? 'active' : 'hover:text-white/70'; ?>"
          >
            Special Offers
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
            Book Now
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
      <!-- The Villa -->
      <div class="mobile-nav-group">
        <button
          class="mobile-nav-toggle text-dark-500 hover:text-brand flex w-full cursor-pointer items-center justify-between py-3 text-left text-sm"
        >
          The Villa
          <iconify-icon icon="ph:caret-down" class="mobile-nav-caret !text-base"></iconify-icon>
        </button>
        <div class="mobile-nav-panel hidden flex-col gap-1 pl-4">
          <a href="villa-detail.php" class="text-dark-500 hover:text-brand py-2 text-sm">Bayu Gita Beachfront</a>
          <a href="villa-detail.php" class="text-dark-500 hover:text-brand py-2 text-sm">Bayu Gita Residence</a>
        </div>
      </div>
      <a href="experiences.php" class="text-dark hover:text-brand py-3 text-sm">Experiences</a>
      <!-- Special Events -->
      <div class="mobile-nav-group">
        <button
          class="mobile-nav-toggle text-dark-500 hover:text-brand flex w-full cursor-pointer items-center justify-between py-3 text-left text-sm"
        >
          Special Events
          <iconify-icon icon="ph:caret-down" class="mobile-nav-caret !text-base"></iconify-icon>
        </button>
        <div class="mobile-nav-panel hidden flex-col gap-1 pl-4">
          <a href="weddings.php" class="text-dark-500 hover:text-brand py-2 text-sm">Weddings</a>
          <a href="retreats.php" class="text-dark-500 hover:text-brand py-2 text-sm">Corporate Retreats</a>
        </div>
      </div>
      <a href="gallery.php" class="text-dark hover:text-brand py-3 text-sm">Gallery</a>
      <a href="special-offers.php" class="text-dark hover:text-brand py-3 text-sm">Special Offers</a>
    </nav>
    <div id="mobile-navbar-divider" class="divider my-6"></div>
    <div id="mobile-navbar-auth">
      <a
        href="https://booking.privatehomesandvillas.com/availvillas.html?villaid=BayuGitaEstate#_gl=1*tknxhq*_gcl_au*MTQ5ODYwMjY0OC4xNzgwOTk4Njcy"
        target="_blank"
        rel="noopener noreferrer"
        class="btn-primary w-full"
      >
        Book Now
      </a>
    </div>
  </div>
</div>
