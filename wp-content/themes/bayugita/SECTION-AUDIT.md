# Bayu Gita — Section Audit & Flexible Content Plan (FASE 1)

Hasil scan 20 halaman `static-file/` + 10 partial. Tujuan: satu Flexible Content `page_sections` (SCF) yang bisa menyusun semua halaman via kombinasi layout.

> Catatan penting: file `scf-structure.json` yang ada di root **ternyata sudah berupa page-builder untuk site ini** (18 layout). Saya pakai sebagai kerangka format + naming, lalu tambahkan aturan wajib kamu (heading selector, button group 3-kondisi, background palette, `section_id`) yang belum ada di referensi. Backup → `scf-structure.example.json`.

---

## 1. Inventaris Section per Halaman

| Halaman | Section (urut) |
|---|---|
| **index** | hero slider · welcome split(image-left) · 2 villa cards · special offers(rel) · featured stories(rel) · guest reviews slider · location + map |
| **villa-detail** | hero slider · about (intro + accordion + download) · bedrooms (image grid + accordion) · living&dining (band + wide img + 2col) · pool (wide img + 2col) · gym (tall img + content + accordion) · location&surroundings (tall img + content) · full-width image banner · villa facts (icon grid) |
| **experiences** | hero image · intro · dining split · spa split(reversed)+accordion · families split · life-beyond (band + wide img + 3col) · services (icon card grid) · plan-your-stay CTA |
| **concierge** | hero image · intro · text column |
| **dining** | hero image · intro · wide image band · text column |
| **spa** | hero image · intro split(image-right) · wide image band · on-the-menu (icon grid) |
| **families** | hero image · intro · split(image-right) · split(image-left) |
| **weddings** | hero slider · intro + facts list + download buttons · gallery grid · divider · CTA banner |
| **events** | hero image · download buttons · split · split · divider · CTA banner |
| **staff** | hero image · intro · image pair grid · team (icon grid) |
| **rates** | rates tabbed table (villa/year tabs + availability bar + tables + modals) |
| **special-offers** | intro · offers card grid(rel) + modals |
| **contact-us** | contact form + address/social · map |
| **location** | hero slider · intro · wide image band · distances (facts list) · things-to-do (band + accordion 2col) · attractions (image grid) |
| **press** | intro · press cards grid |
| **featured-stories** | intro · story cards grid(rel) · pagination |
| **featured-stories-detail** | article header · article hero image · article body(wysiwyg) · more stories(rel) · back CTA |
| **guest-review** | intro · filter tabs · reviews grid(rel) · pagination |
| **floorplan** | intro · 2 floorplan blocks (framed image + download) · CTA |
| **gallery** | intro · photo gallery(lightbox+pagination) · video gallery · CTA |

Partials (global, bukan section): `header` (nav 6 item + 2 dropdown + CTA), `footer` (brand/address/CTA/logo/social/policy), `whatsapp-float`, `enquiry-modal` (form + `$countries`), `page-transition`.

---

## 2. Keputusan Konsolidasi (mirip → 1 layout)

| Section mirip | Digabung jadi | Cara membedakan |
|---|---|---|
| Welcome, dining, spa, families, events, gym splits | **`split_content`** | select `layout` = image_left / image_right / text_only; + optional accordion / icon_list |
| Intro centered (semua page) + article body + text column | **`intro_text`** | heading opsional + WYSIWYG body + select alignment/width |
| Living&dining, pool, life-beyond | **`feature_columns`** | heading + wide image opsional + repeater kolom teks (2/3 col) |
| Wide image band (dining/spa/location scenery, villa banner) | **`image_separator`** | 1 image full-width, opsi ratio |
| Staff pair, location attractions, weddings gallery, floorplan blocks | **`image_grid`** | select style (2-col / asymmetric / framed+caption+download) |
| Villa facts, spa menu, staff team | **`icon_grid`** | repeater icon+title+text, select 2/3 col |
| Weddings facts, location distances, rates inclusions | **`facts_list`** | repeater label/value (+icon opsional) |
| Index villas, experiences services, press cards | **`card_grid`** | repeater card (image/icon + title + text + button) |
| Weddings CTA, events CTA, plan-your-stay, floorplan/gallery CTA, back-to-stories, download rows | **`cta_banner`** | heading + text + repeater button (button group) |
| Location things-to-do, standalone accordions | **`accordion_list`** | repeater accordion + opsi 1/2 kolom |
| Index/contact/location map | **`map_section`** | embed code / iframe |

**Relationship-based (butuh CPT/post):** featured stories, guest reviews, special offers — punya listing + detail + filter/pagination. Mengikuti referensi JSON yang pakai `relationship`/`repeater`.

---

## 3. Daftar Final Layout yang Akan Dibuat (usulan)

Prefix field key: `field_pb_<layout>_<field>`. Semua layout mendapat: `section_background` (palette), `section_id` (anchor). Layout ber-heading mendapat `heading_text` + `heading_tag`.

| # | Layout (`name`) | Fungsi | Sumber section |
|---|---|---|---|
| 1 | `hero_slider` | Swiper multi-image hero (arrows+dots), overlay title opsional | index, villa-detail, weddings, location |
| 2 | `hero_image` | Single parallax full-bleed image hero | experiences, concierge, dining, spa, families, events, staff |
| 3 | `hero_video` | Video hero (upload/YouTube) — asset `villa-tour.webm` ada | (baru, opsional) |
| 4 | `intro_text` | Heading + intro/WYSIWYG (centered / plain column) | semua page intro + article body + text column |
| 5 | `split_content` | 2-col image+text (L/R/text-only) + accordion/icon_list opsional | welcome, dining, spa, families, events, gym, location |
| 6 | `feature_columns` | Heading + wide image opsional + kolom teks 2/3 | living&dining, pool, life-beyond |
| 7 | `image_separator` | Banner image full-width | villa banner, dining/spa/location band |
| 8 | `image_grid` | Grid gambar (2-col / asymmetric / framed+download) | staff, attractions, weddings gallery, floorplan |
| 9 | `photo_gallery` | Lightbox thumbnail grid + pagination | gallery |
| 10 | `video_gallery` | Video cards lightbox | gallery |
| 11 | `card_grid` | Repeater card (image/icon+title+text+button) | villas, services, press |
| 12 | `icon_grid` | Repeater icon+title+text | villa facts, spa menu, team |
| 13 | `facts_list` | Repeater label/value | weddings facts, distances |
| 14 | `accordion_list` | Repeater accordion, 1/2 kolom | location things-to-do |
| 15 | `featured_stories` | Relationship ke story | index, featured-stories, detail related |
| 16 | `guest_reviews` | Reviews slider/grid (+filter tab) | index, guest-review |
| 17 | `special_offers` | Relationship ke offer + modal | index, special-offers |
| 18 | `cta_banner` | Heading + text + button(s) [button group 3-kondisi] | weddings, events, plan-stay, floorplan, gallery, back |
| 19 | `map_section` | Map embed | index, contact, location |
| 20 | `contact_form` | Form kontak (markup + shortcode slot) | contact-us |
| 21 | `rates_table` | Tabbed rate table + availability bar + modals | rates |
| 22 | `divider` | Garis pemisah | weddings, events |

**Field group tambahan:** `Button` (clone, 3-kondisi internal/external/download) · `Global Site Settings` (options page: kontak/WA, address, sosmed, logo, booking link, policy links, copyright).

---

## 4. Ambiguitas — Butuh Keputusan Kamu (sebelum FASE 2)

1. **Stories / Reviews / Offers** → dibangun sebagai **Custom Post Type + relationship** (proper WP, ada listing+detail+filter+pagination asli) ATAU cukup **repeater manual** di dalam section (lebih simpel, tanpa halaman detail dinamis)?
2. **Rates tabbed table + availability checker** (paling kompleks, banyak JS + modal inclusions/terms) → jadikan **1 layout `rates_table`** (data via repeater villa→year→baris) ATAU biarkan sebagai **template halaman khusus** (`page-rates.php`, di luar flexible content)?
3. **Form (contact + enquiry modal)** → SCF tidak bikin form fungsional. Simpan sebagai **shortcode** (mis. Contact Form 7 / WPForms) yang di-embed, ATAU **markup statis** di template part (tanpa backend)?
4. **Dropdown menu header (The Villa / Special Events)** → pakai **WP Menu native** (children jadi submenu, butuh CSS walker) — konfirmasi oke?

Setelah kamu jawab 4 poin ini + approve daftar layout, saya lanjut FASE 2–5 otomatis.
