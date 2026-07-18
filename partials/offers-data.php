<?php
// Shared by the home page section and special-offers.php.
// Each offer renders as a card plus a matching modal keyed by 'id'.
$booking_url = 'https://booking.privatehomesandvillas.com/availvillas.html?villaid=BayuGitaEstate#_gl=1*tknxhq*_gcl_au*MTQ5ODYwMjY0OC4xNzgwOTk4Njcy';

$special_offers = [
  [
    'id' => 'stay-longer',
    'title' => 'Stay Longer, Save More',
    'image' => 'assets/images/detail-living.webp',
    'alt' => 'Bayu Gita Beachfront living room',
    'excerpt' => 'Enjoy exclusive savings on extended stays at Bayu Gita. The longer you stay, the more you save &mdash; perfect for an unforgettable villa living in Ketewel.',
    'description' => 'Extend your escape and enjoy exclusive value on longer stays at the villa. Ideal for families, groups, or guests seeking a more immersive Bali experience, this offer combines comfort, privacy, and enhanced value for extended holidays.',
    'benefits' => [
      'Special rates for extended stays',
      'More time to enjoy full villa facilities',
      'Ideal for families and group getaways',
      'Flexible and relaxed luxury living',
    ],
    'terms' => 'Applicable for stays of 5 nights or more.',
  ],
  [
    'id' => 'early-bird',
    'title' => 'Early Bird Privilege',
    'image' => 'assets/images/detail-master-suite.webp',
    'alt' => 'Bayu Gita Beachfront master suite',
    'excerpt' => 'Plan ahead and unlock special rates when you book in advance, along with priority access to your preferred dates across the Bayu Gita estate.',
    'description' => 'Plan your stay in advance and enjoy exclusive preferred rates along with priority access to peak dates, ensuring seamless bookings with optimal value for your Bali holiday.',
    'benefits' => [
      'Preferential rates for advance bookings',
      'Priority access to peak dates',
      'Greater availability for preferred periods',
      'Stress-free holiday planning',
    ],
    'terms' => 'Recommended for bookings made 30&ndash;60 days prior to arrival.',
  ],
];
