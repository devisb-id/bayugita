# Bayu Gita — Flexible Content Documentation (Final)

Konversi 20 halaman static → satu SCF Flexible Content `page_sections` (22 layout). Setiap layout = 1 file di `theme-parts/`, di-load `page.php`/`front-page.php` via `get_row_layout()`.

## Bugfix (audit lanjutan)
- **`<main>` ganda**: `index/single/archive/search/404.php` membuka `<main>` sendiri padahal `header.php` sudah buka & `footer.php` tutup → nested main (invalid HTML). Diganti `<div id="main">` + padding `pt-36`.
- **card-grid link mati**: field `link` = button group (internal/external/download) tapi template cek `$link['url']` (tak pernah ada). Ditambah helper `bayugita_button_url()`, dipakai di card-grid.

## Keputusan arsitektur (disetujui)
- **Stories** → WP post biasa (`featured_stories` pakai `post_object`/query).
- **Reviews** → repeater di dalam `guest_reviews`.
- **Special Offers** → CPT `special-offer` (`special_offers` pakai `post_object`).
- **Rates** → layout `rates_table` (repeater villa→year→row).
- **Form** → slot shortcode (CF7/WPForms) di `contact_form` + enquiry modal.
- **Menu** → WP nav menu native + `Bayugita_Nav_Walker` (markup match header static).

## File yang dibuat/diubah
```
style.css                         header tema WP (Bayu Gita)
functions.php                     setup, menu, enqueue, CPT, options page
inc/template-functions.php        helper: heading, bg palette, section atts, button, image, option
inc/class-bayugita-nav-walker.php walker dropdown header
header.php / footer.php           reproduksi partial static + dynamic settings
front-page.php / page.php         loader flexible content
theme-parts/*.php (22)            satu file per layout
template-parts/global/*.php       page-transition, whatsapp-float, enquiry-modal (shortcode)
template-parts/content*.php       loop parts standar (blog)
assets/                           disalin dari static-file/ (css/js/img/font/pdf/video)
scf-structure.json                field group final (import-ready)
scf-structure.example.json        backup referensi lama
```

## Aturan field wajib (diterapkan ke semua layout)
- **Heading selector**: `heading_text` + `heading_tag` (select h1–h6, default h2). Render via `bayugita_the_heading()` — tag di-whitelist.
- **Button 3-kondisi**: group `button` = `button_label` + `button_type` (internal/external/download) + field kondisional (`button_internal_link` page_link / `button_external_url` url / `button_download_file` file). Render via `bayugita_render_button()`. Multi-button = repeater `buttons`.
- **Background palette**: `section_background` (select) → class via `bayugita_bg_class()`: default / white / cream(`bg-brand-25`) / brand(`bg-brand-50`) / gray(`bg-gray-100`) / dark(`bg-dark text-white`).
- **Anchor**: `section_id` (text) → `id="..."` di wrapper.
- **Image**: semua return `array` (srcset + alt via `bayugita_the_image()`).

## Daftar layout & field utama

| Layout | Field kunci (selain bg/id/heading) |
|---|---|
| `hero_slider` | `slides`(repeater image), `overlay_title` |
| `hero_image` | `image`, `overlay_title` |
| `hero_video` | `video_type`, `video_file`, `youtube_url`, `overlay_title` |
| `intro_text` | `layout_style`(centered/column), `eyebrow`, `body`(wysiwyg) |
| `split_content` | `layout_selection`(L/R/text), `main_image`, `body`, `additional_content_type`(accordion/icon_list), `buttons` |
| `feature_columns` | `wide_image`, `column_layout`(2/3), `columns`(title+text) |
| `image_separator` | `aspect_ratio`(16:7/16:9/21:9), `image` |
| `image_grid` | `display_style`(two_col/asymmetric/framed), `images`(image+title+eyebrow+download_file) |
| `card_grid` | `intro`, `columns`(2/3/4), `cards`(image/icon+title+text+link button) |
| `icon_grid` | `grid_layout`(2/3), `items`(icon+title+text) |
| `facts_list` | `subtitle`, `rows`(icon+label+value) |
| `accordion_list` | `intro`, `columns`(1/2), `items`(title+content) |
| `featured_stories` | `columns`(3/4), `stories`(post_object), `button` |
| `guest_reviews` | `intro`, `show_filters`, `reviews`(quote+dates+villa) |
| `special_offers` | `intro`, `selected_offers`(post_object special-offer) |
| `cta_banner` | `text`, `show_divider`, `buttons` |
| `map_section` | `eyebrow`, `intro`, `map_embed_code` |
| `contact_form` | `form_shortcode`, `address_text`, `social_links`(icon+url) |
| `photo_gallery` | `intro`, `gallery_images`(gallery) |
| `video_gallery` | `intro`, `videos`(file+poster+title) |
| `rates_table` | `availability_url`, `villas`→`years`→`rows` |
| `divider` | — |

**Global Site Settings** (options page `site-settings`): logo, favicon, partner_logo, whatsapp_number, booking_url, footer_address, footer_brand, social_instagram/facebook/tripadvisor, terms_url, privacy_url, copyright_text, enquiry_form_shortcode.

## Cara import JSON
1. Install plugin **Secure Custom Fields** (atau ACF).
2. WP Admin → **Custom Fields → Tools → Import Field Groups**.
3. Upload `scf-structure.json`. Muncul 2 group: **Page Builder** + **Global Site Settings**.
4. Menu **Site Settings** muncul di sidebar (didaftarkan `functions.php`).
5. Aktifkan theme **Bayu Gita**. Buat menu (Appearance → Menus) untuk lokasi *Primary Menu*.

## Checklist testing per halaman
Buat Page baru, susun `page_sections` sesuai kolom "Section (urut)" di bawah, isi konten, lalu bandingkan dengan `static-file/<page>.php`.

| Page | Susunan layout |
|---|---|
| Home | hero_slider · split_content(image_left) · card_grid(2) · special_offers · featured_stories · guest_reviews · map_section |
| Villa Detail | hero_slider · intro_text · split_content×accordion · feature_columns · feature_columns · split_content · image_separator · icon_grid |
| Experiences | hero_image · intro_text · split_content×3 · feature_columns · card_grid(3) · cta_banner |
| Concierge/Dining/Spa/Families/Staff | hero_image · intro_text · (image_separator / split_content / icon_grid sesuai halaman) |
| Weddings/Events | hero_slider/hero_image · intro_text+facts_list · image_grid · divider · cta_banner |
| Rates | rates_table |
| Special Offers | intro_text · special_offers |
| Contact | contact_form · map_section |
| Location | hero_slider · intro_text · image_separator · facts_list · accordion_list · image_grid |
| Press/Featured Stories | intro_text · card_grid / featured_stories |
| Guest Reviews | intro_text · guest_reviews(show_filters) |
| Floorplan | intro_text · image_grid(framed) · cta_banner |
| Gallery | photo_gallery · video_gallery · cta_banner |

Verifikasi tiap section: heading tag benar, background palette, button 3-kondisi (target/rel/download), image srcset+alt, anchor `section_id`.

## Catatan / batasan
- **JS interaktif**:
  - `assets/scripts/script.js` (dari prototype): swiper hero, accordion, parallax, mobile nav, modal, page-transition.
  - `assets/scripts/theme-interactions.js` (baru): lightGallery photo/video, pagination photo & review, rates villa/year tabs, review filter. Dulu ini inline per-halaman di static — sekarang diport global & aman (no-op bila markup absen).
  - **lightGallery** di-enqueue dari jsDelivr (CSS + core + zoom + video plugin).
- **Form** butuh plugin form; shortcode diisi di field section / Site Settings.
- **Single templates**: `single-special-offer.php` (CPT offer) + `single.php` (story/post) memakai header/footer branded.
- `static-file/` tidak diubah (source of truth). Semua konversi di luar folder itu.

## Yang belum (sadar, di luar scope konversi)
- Offer **modal** di listing (`modal-offer-{id}`) diganti link ke single offer — modal detail belum diport (opsional; bisa ditambah nanti).
- Pagination photo/review kini fully client-side (semua item ter-render lalu di-hide) — untuk galeri sangat besar, pertimbangkan pagination server-side.
- CSS Tailwind: `output.css` dari prototype dipakai apa adanya. Bila menambah class baru di theme-parts yang belum ada di output.css, perlu rebuild Tailwind (`input.css`).
