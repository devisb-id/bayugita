# Villa Bayu Gita

Marketing website for **Villa Bayu Gita** — two luxury villas (Bayu Gita Beachfront &
Bayu Gita Residence) on Pabean Beach, Ketewel, on Bali's south-east coast.

Built as a lightweight static site using **PHP includes** (for shared layout partials) and
**Tailwind CSS v4**, with scroll animations, sliders, a lightbox gallery, and smooth page
transitions.

## Tech Stack

| Concern         | Tool                                                          |
| --------------- | ------------------------------------------------------------ |
| Templating      | Plain PHP (`include` partials — no framework)                |
| Styling         | [Tailwind CSS v4](https://tailwindcss.com) (CLI)             |
| Fonts           | Playfair Display (headings) + Roboto (body), self-hosted     |
| Icons           | [Iconify](https://iconify.design) (`<iconify-icon>`)         |
| Scroll reveal   | [AOS](https://michalsnik.github.io/aos/)                      |
| Sliders         | [Swiper](https://swiperjs.com)                               |
| Smooth scroll   | [Lenis](https://lenis.darkroom.engineering/)                 |
| Animations      | [GSAP](https://gsap.com) (page transitions, mobile nav)      |
| Photo lightbox  | [lightGallery](https://www.lightgalleryjs.com) (gallery page)|
| Dev tooling     | concurrently, browser-sync, Prettier                         |

## Requirements

- **PHP** 8.x (uses the built-in server; no database)
- **Node.js** 18+ and npm (for the Tailwind CLI and dev tooling)

## Getting Started

```bash
# 1. Install dev dependencies
npm install

# 2. Build the CSS at least once
npm run build

# 3. Start the dev environment
npm run dev
```

`npm run dev` runs three processes together:

1. PHP built-in server on `http://localhost:8890`
2. Tailwind CLI in `--watch` mode (recompiles `output.css` on change)
3. browser-sync proxy with live reload on **`http://localhost:3002`** ← open this one

## npm Scripts

| Script           | Description                                                              |
| ---------------- | ------------------------------------------------------------------------ |
| `npm run dev`    | PHP server + Tailwind watch + browser-sync live reload (port **3002**)   |
| `npm run serve`  | PHP server on port `3004` + Tailwind watch (no live reload)              |
| `npm run watch`  | Tailwind `--watch` only                                                  |
| `npm run build`  | Build minified `assets/styles/output.css` (run before committing/deploy) |
| `npm run format` | Format `.php`, `.css`, `.js` with Prettier (+ Tailwind class sorting)    |

> **Note:** the `dev` script's browser-sync `--files` list watches `index.php`,
> `partials/**`, and the built CSS/JS. When editing other root pages (e.g.
> `villa-detail.php`), a manual refresh may be needed, or add the file to the
> `--files` list in `package.json`.

## Project Structure

```
.
├── index.php             # Homepage
├── villa-detail.php      # Bayu Gita Beachfront villa detail
├── gallery.php           # Photo gallery (lightGallery + pagination)
├── floorplan.php         # Beachfront & Residence floorplans
├── location.php          # Location, distances & things to do
│
├── partials/             # Shared PHP includes
│   ├── header.php        #   nav (desktop + mobile drawer)
│   ├── footer.php        #   footer
│   ├── contact-modal.php #   enquiry modal
│   ├── whatsapp-float.php#   floating WhatsApp button
│   └── page-transition.php  # page transition overlay
│
└── assets/
    ├── styles/
    │   ├── input.css     # Tailwind source + @theme tokens (EDIT THIS)
    │   └── output.css    # Compiled CSS (generated — do not edit)
    ├── scripts/script.js # Site behaviour (sliders, modals, nav, parallax, accordions)
    ├── images/           # WebP images
    ├── fonts/            # Playfair Display + Roboto (.ttf)
    ├── aos/  swiper/  iconify-design/   # Vendored libraries
    └── videos/
```

## Working with Pages

Each root `.php` file is a full page that pulls in shared layout via `include`:

```php
<?php $page = 'home'; ?>
...
<?php include 'partials/header.php'; ?>
...
<?php include 'partials/footer.php'; ?>
<?php include 'partials/contact-modal.php'; ?>
```

The `$page` variable at the top is used by `header.php` to mark the active nav item.

## Styling

- Edit **`assets/styles/input.css`** only — `output.css` is generated.
- The `@theme` block defines the design tokens (brand colours, fonts, radii, custom
  utilities like `.btn-primary`, `.delimiter`, `.accordion-slide`, `.btn-paginate`).
- Run `npm run build` (or keep `npm run watch` running) after CSS changes.

### Layout convention

Page-width content uses the `.delimiter` wrapper (max width + horizontal padding).
Content blocks that are visually narrower than full width (intro paragraphs, data grids,
forms) are constrained with `max-w-*` + `mx-auto` so they stay aligned and harmonious.

## Images

Source images are migrated from the legacy site and converted to **WebP**. Naming is
prefixed by page/purpose, e.g. `detail-*` (villa detail), `gallery-beach-*` /
`gallery-res-*` (gallery), `floorplan-*`, `location-*`.

## Deployment

This is a static PHP site (no build step beyond CSS). To deploy:

1. Run `npm run build` to produce the minified `assets/styles/output.css`.
2. Upload the project files to any PHP-capable host (`*.php`, `partials/`, `assets/`).

Source MP4 videos and `node_modules/` are git-ignored.
