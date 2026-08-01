# Panduan Implementasi Flexible Content per Halaman

Cara pakai: buat **Page** baru di WP admin → di field **Page Sections** klik **Add Section** → pilih layout sesuai urutan tabel di bawah → isi field → **Publish**.

Legenda field wajib tiap layout (selalu ada):
- **BG** = `section_background` (default/white/cream/brand/gray/dark)
- **ID** = `section_id` (opsional, untuk anchor link `#nama`)
- **Heading** = `heading_text` + `heading_tag` (h1–h6, default h2)

Prefiks warna palette: `cream`=krem lembut, `brand`=biru muda brand, `gray`=abu section band, `dark`=latar gelap teks putih.

> Referensi desain asli tiap section: lihat file di `static-file/<nama>.php`.

---

## 1. Home  → `static-file/index.php`
Slug: `home` (set sebagai front page di Settings → Reading).

| # | Layout | Isi utama | Catatan |
|---|--------|-----------|---------|
| 1 | `hero_slider` | 3 slide gambar (hero-1/2/3) | tanpa overlay title |
| 2 | `split_content` | layout **Image Left**, heading "Welcome to Bayu Gita", body, tombol "Learn More" | |
| 3 | `card_grid` | kolom **2**, 2 kartu villa (Beachfront & Residence): image, eyebrow "6 Bedroom Villa", title, text, link_label "Discover More", link → page villa | |
| 4 | `special_offers` | BG **gray**, heading "Special Offers", pilih CPT offer (kosongkan = otomatis 4 terbaru) | |
| 5 | `featured_stories` | heading "Featured Stories", kolom **4**, pilih post (kosong = 4 terbaru), tombol "See All Stories" | |
| 6 | `guest_reviews` | BG **gray**, heading "Guest Reviews", isi repeater review (quote/dates/villa), `show_filters` = off | |
| 7 | `map_section` | heading "Location", eyebrow "Ketewel, Bali", intro, embed Google Maps | |

---

## 2. Beachfront (The Villa)  → `static-file/villa-detail.php`
Slug: `beachfront`. **Residence pakai susunan sama**, konten berbeda.

| # | Layout | Isi utama | Catatan |
|---|--------|-----------|---------|
| 1 | `hero_slider` | 3 slide (detail-hero/ocean-view/path-pond) | |
| 2 | `intro_text` | style **Centered**, heading "About Bayu Gita Beachfront", body 3 paragraf | |
| 3 | `split_content` | **Image Left**, heading "Villa Layout & Keyplan", body, additional = **Accordion** (isi floorplan + tombol download) | atau pakai `image_grid` style framed utk floorplan+download |
| 4 | `split_content` | heading "The Bedrooms", additional = **Accordion** (Master, Guest 1–4) | |
| 5 | `feature_columns` | BG **gray**, heading "Living & Dining", wide image, 2 kolom (Indoor/Outdoor) | |
| 6 | `feature_columns` | heading "Pool & Outdoor Spaces", wide image, 2 kolom | tanpa BG gray |
| 7 | `split_content` | **Image Left**, heading "Gym & Wellness", body, additional Accordion (Massage/Scrub/Reflexology) | |
| 8 | `split_content` | **Image Right**, heading "Location & Surroundings", body | |
| 9 | `image_separator` | 1 gambar banner 16:7 (path-pond) | |
| 10 | `icon_grid` | heading "Villa Facts", kolom **3**, 14 item (icon+title+text) | icon: `ph:map-pin`, `ph:users-three`, `ph:swimming-pool`, dst |

---

## 3. Residence (The Villa)  → `static-file/villa-detail.php`
Slug: `residence`. Salin susunan **Beachfront** di atas, ganti konten & gambar (3 Bedroom Villa).

---

## 4. Experiences  → `static-file/experiences.php`
Slug: `experiences`.

| # | Layout | Isi utama | Catatan |
|---|--------|-----------|---------|
| 1 | `hero_image` | 1 gambar parallax (experience-dining-hero) | bukan slider |
| 2 | `intro_text` | style **Centered**, heading "Experiences", body | |
| 3 | `split_content` | **Image Left**, ID `dining`, heading "Dining Experience", tombol "Discover Dining" | |
| 4 | `split_content` | **Image Right**, BG **gray**, ID `spa`, heading "Wellness & Spa", additional Accordion, tombol "Discover the Spa" | |
| 5 | `split_content` | **Image Left**, ID `families`, heading "Family-friendly", tombol "Discover Families" | |
| 6 | `feature_columns` | BG **gray**, ID `beyond`, heading "Life Beyond the Villa", wide image, kolom **3** | |
| 7 | `card_grid` | kolom **3**, heading "Additional Services", 3 kartu icon (bukan image) + link "Learn More" | |
| 8 | `cta_banner` | `show_divider` on, heading "Plan Your Stay", tombol "Book Now" (external) | |

**Sub-halaman experiences** (opsional, halaman terpisah): Concierge, Dining, Spa, Families, Staff — lihat §12.

---

## 5. Special Events — Weddings  → `static-file/weddings.php`
Slug: `weddings`.

| # | Layout | Isi utama | Catatan |
|---|--------|-----------|---------|
| 1 | `hero_slider` | 2 slide (wedding-hero, wedding-1) | |
| 2 | `facts_list` | heading "The Weddings", subtitle 2 paragraf, **columns** (1/2/3/4), rows (Seated=Up to 30 guests, Standing=Up to 30 guests, Ceremonies=Beachfront & garden, Receptions=Dinners & cocktail, Styling=Florists & decorators) | `label`=kiri, `value`=kanan; atur jumlah kolom via **columns** |
| 3 | `cta_banner` | tombol download 2 (button_type **download**: event guidelines PDF) — atau taruh di facts_list | button download = PDF |
| 4 | `image_grid` | style **Asymmetric**, heading "Moments at Bayu Gita", 4 gambar | |
| 5 | `divider` | — | |
| 6 | `cta_banner` | heading "Plan Your Celebration", tombol "Check Availability" + "Enquire Now" | tombol 2 = modal enquiry (external/#) |

---

## 6. Special Events — Events  → `static-file/events.php`
Slug: `events`.

| # | Layout | Isi utama | Catatan |
|---|--------|-----------|---------|
| 1 | `hero_image` | 1 gambar (retreats-hero) | |
| 2 | `cta_banner` | tombol download PDF (guidelines) | atau skip |
| 3 | `split_content` | **Image Right**, heading "Events", body | |
| 4 | `split_content` | **Image Left**, body (tanpa heading) | |
| 5 | `divider` | — | |
| 6 | `cta_banner` | heading "Plan Your Retreat", tombol "Check Availability" + "Enquire Now" | |

---

## 7. Gallery  → `static-file/gallery.php`
Slug: `gallery`.

| # | Layout | Isi utama | Catatan |
|---|--------|-----------|---------|
| 1 | `photo_gallery` | heading "Photo Gallery", intro, upload semua foto ke field Gallery | lightbox + pagination otomatis (>12 foto) |
| 2 | `video_gallery` | heading "Video Gallery", intro, repeater video (file webm + poster + title) | |
| 3 | `cta_banner` | heading "Looking for the Floorplan?", tombol "View Floorplan" | |

---

## 8. Special Offers  → `static-file/special-offers.php`
Slug: `special-offers`. **Isi offer di CPT dulu** (menu Special Offers → Add New: judul, konten, featured image, excerpt).

| # | Layout | Isi utama | Catatan |
|---|--------|-----------|---------|
| 1 | `intro_text` | heading "Special Offers", intro | |
| 2 | `special_offers` | pilih offer (kosong = semua) | kartu link ke single offer |

---

## 9. Location  → `static-file/location.php`
Slug: `location`.

| # | Layout | Isi utama | Catatan |
|---|--------|-----------|---------|
| 1 | `hero_slider` | 2 slide (location-hero, location-scenery) | |
| 2 | `intro_text` | style **Centered**, heading "The Locale", body 2 paragraf | |
| 3 | `image_separator` | 1 gambar 16:7 (location-scenery) | |
| 4 | `facts_list` | heading "Distances", 8 rows (icon+nama+jarak) | |
| 5 | `accordion_list` | BG **gray**, heading "Things to Do", kolom **2**, 8 accordion | |
| 6 | `image_grid` | style **2 Columns**, 2 gambar (ulun-danu, waterbom) | |
| 7 | `map_section` | embed Google Maps (opsional) | |

---

## 10. Page (halaman generik)  → template `page.php`
Halaman biasa apa pun. Susun bebas dari layout mana saja. Kalau **Page Sections dikosongkan**, otomatis fallback ke editor WordPress (judul + konten biasa) di dalam `.delimiter`.

Contoh halaman statis sederhana (mis. "About", "Privacy"):
| # | Layout | Isi |
|---|--------|-----|
| 1 | `intro_text` | style **Column**, heading + body WYSIWYG |

---

## 11. Contact Us  → `static-file/contact-us.php`
Slug: `contact-us`. **Buat form dulu** di plugin (CF7/WPForms), salin shortcode-nya.

| # | Layout | Isi utama | Catatan |
|---|--------|-----------|---------|
| 1 | `contact_form` | heading "Get In Touch", `form_shortcode` = `[contact-form-7 id="..."]`, address_text, social_links (Instagram/Facebook/TripAdvisor) | |
| 2 | `map_section` | embed Google Maps | |

---

## 12. Halaman tambahan (sub-experiences & lain-lain)

| Halaman | File referensi | Susunan singkat |
|---------|----------------|-----------------|
| **Concierge** | `concierge.php` | `hero_image` → `intro_text` (centered) → `intro_text` (column, body panjang) |
| **Dining** | `dining.php` | `hero_image` → `intro_text` → `image_separator` → `intro_text` (column) |
| **Spa** | `spa.php` | `hero_image` → `split_content` (Image Right, heading di kolom teks) → `image_separator` → `icon_grid` "On the Menu" (kolom 2) |
| **Families** | `families.php` | `hero_image` → `intro_text` → `split_content` (Image Right) → `split_content` (Image Left) |
| **Staff** | `staff.php` | `hero_image` → `intro_text` → `image_grid` (2 Columns) → `icon_grid` "The Team" (kolom 2, 7 item) |
| **Floorplan** | `floorplan.php` | `intro_text` → `image_grid` (style **Framed**, 2 blok + download) → `cta_banner` "View Photo Gallery" |
| **Press** | `press.php` | `intro_text` → `card_grid` (kolom 3, kartu image + eyebrow publikasi + title + link ke PDF) |
| **Featured Stories (listing)** | `featured-stories.php` | `intro_text` → `featured_stories` (kolom 4, semua post) |
| **Guest Reviews (full)** | `guest-review.php` | `intro_text` → `guest_reviews` (`show_filters` **on**, isi semua review) |
| **Rates** | `rates.php` | `rates_table` (villa→year→rows, discounts, availability_url, inclusions_list, terms_content) |

**Story detail** (`featured-stories-detail.php`) = otomatis pakai `single.php` (post biasa: judul + featured image + konten).
**Offer detail** = otomatis pakai `single-special-offer.php`.

---

## Tips isi field

- **Button 3 kondisi**: `button_type` = Internal (pilih page) / External (isi URL, auto `target=_blank`) / Download (upload file, auto atribut `download`).
- **Image**: selalu return array → alt & srcset otomatis. Isi Alt Text di Media Library.
- **Icon**: pakai nama Iconify, mis. `ph:swimming-pool`, `ph:map-pin`, `ri:whatsapp-fill`. Cari di https://icon-sets.iconify.design.
- **Heading tag**: atur `h1` hanya 1× per halaman (biasanya hero/intro pertama), sisanya `h2`/`h3` untuk SEO.
- **Anchor**: isi `section_id` (mis. `dining`) → bisa dilink `/experiences/#dining`.
- **BG dark**: teks otomatis putih. Cocok untuk CTA/section penutup.
- **Jumlah kolom (grid)**: layout dengan daftar/kartu punya pengaturan kolom sendiri —
  `facts_list` (1–4), `card_grid` (2–4), `icon_grid` (2–3), `accordion_list` (1–2),
  `feature_columns` (2–3), `featured_stories` (3–4). Semua responsif: mobile selalu 1 kolom, jumlah yang dipilih berlaku dari breakpoint `md`/`xl`.

## Global (sekali saja) — menu Site Settings
Isi: logo, favicon, partner logo, WhatsApp, booking URL, alamat footer, sosmed, terms/privacy URL, copyright, **enquiry form shortcode** (untuk modal Get In Touch di header).

## Menu navigasi
Appearance → Menus → buat menu, assign ke lokasi **Primary Menu**. Struktur dropdown:
- Home
- The Villa ▸ Beachfront, Residence
- Experiences
- Special Events ▸ Weddings, Events
- Gallery
- Special Offers

Item yang punya anak (submenu) otomatis jadi dropdown (walker sudah handle markup-nya).
