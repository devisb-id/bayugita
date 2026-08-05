<?php
/**
 * Layout: special_offers — cards from the special-offer CPT.
 *
 * @package Bayugita
 */

$heading = get_sub_field( 'heading_text' );
$intro   = get_sub_field( 'intro' );
$offers  = get_sub_field( 'selected_offers' ); // post object (special-offer) multiple

if ( empty( $offers ) ) {
	$q      = new WP_Query( array( 'post_type' => 'special-offer', 'posts_per_page' => 4, 'ignore_sticky_posts' => true ) );
	$offers = $q->posts;
}
if ( empty( $offers ) ) {
	return;
}
// Backgrounded sections need internal padding; transparent ones use top-margin only.
$has_bg  = '' !== bayugita_bg_class( (string) get_sub_field( 'section_background' ) );
$spacing = $has_bg
	? 'mt-16 md:mt-20 py-16 md:py-20 xl:mt-28 xl:py-28'
	: 'mt-16 md:mt-20 xl:mt-28';
?>
<section<?php echo bayugita_section_atts( $spacing ); // phpcs:ignore ?> data-aos="fade-up">
	<div class="delimiter">
		<div class="text-center">
			<?php bayugita_the_heading( $heading, get_sub_field( 'heading_tag' ), 'font-playfair' ); ?>
			<?php if ( $intro ) : ?>
				<div class="mx-auto mt-4 max-w-2xl leading-relaxed"><?php echo wp_kses_post( $intro ); ?></div>
			<?php endif; ?>
		</div>

		<div class="mx-auto mt-12 grid max-w-5xl grid-cols-1 gap-10 md:grid-cols-2">
			<?php foreach ( $offers as $post ) : setup_postdata( $post ); ?>
				<button type="button" data-modal-open="modal-offer-<?php the_ID(); ?>" class="group flex h-full cursor-pointer flex-col text-left">
					<div class="aspect-[4/3] overflow-hidden">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'full', array( 'class' => 'h-full w-full object-cover transition-transform duration-500 group-hover:scale-105', 'loading' => 'lazy' ) ); ?>
						<?php endif; ?>
					</div>
					<div class="mt-6 flex flex-1 flex-col text-center">
						<h3 class="font-playfair !text-xl"><?php the_title(); ?></h3>
						<p class="mx-auto mt-3 max-w-md leading-relaxed"><?php echo esc_html( get_the_excerpt() ); ?></p>
						<span class="text-brand mt-4 inline-flex items-center justify-center gap-1"><?php esc_html_e( 'View Offer', 'bayugita' ); ?> <iconify-icon icon="ph:arrow-right"></iconify-icon></span>
					</div>
				</button>
			<?php endforeach; wp_reset_postdata(); ?>
		</div>
	</div>
</section>

<?php
// Modals live OUTSIDE the section: an ancestor with `transform` (data-aos)
// would trap position:fixed and clip the modal to the section box.
$default_booking = bayugita_option( 'booking_url', 'https://booking.luxsomanagement.com/?ownerid=156681&propid=337373' );
foreach ( $offers as $post ) :
	setup_postdata( $post );
	$description = get_field( 'offer_description' );
	$benefits    = get_field( 'offer_benefits' );
	$terms       = get_field( 'offer_terms' );
	$book_btn     = get_field( 'offer_book_button' );
	?>
	<div id="modal-offer-<?php the_ID(); ?>" class="modal">
		<div class="modal__content !max-w-4xl !p-0" data-lenis-prevent>
			<button type="button" data-modal-close class="text-dark absolute top-4 right-4 z-10 flex size-10 cursor-pointer items-center justify-center bg-white/80 transition-opacity hover:opacity-70" aria-label="<?php esc_attr_e( 'Close', 'bayugita' ); ?>">
				<iconify-icon icon="ph:x" class="text-xl"></iconify-icon>
			</button>
			<div class="grid grid-cols-1 md:grid-cols-2">
				<div class="h-56 w-full md:h-full md:min-h-[30rem]">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'full', array( 'class' => 'h-full w-full object-cover', 'loading' => 'lazy' ) ); ?>
					<?php endif; ?>
				</div>
				<div class="flex flex-col p-8 xl:p-10">
					<h3 class="font-playfair text-2xl leading-snug font-normal xl:text-3xl"><?php the_title(); ?></h3>
					<?php if ( $description ) : ?>
						<div class="prose-basic mt-4 leading-relaxed"><?php echo wp_kses_post( $description ); ?></div>
					<?php endif; ?>
					<?php if ( $benefits ) : ?>
						<ul class="mt-6 flex flex-col gap-3">
							<?php foreach ( $benefits as $benefit ) : ?>
								<li class="flex items-start gap-3">
									<iconify-icon icon="ph:check-circle-fill" class="!text-brand mt-0.5 shrink-0 !text-lg"></iconify-icon>
									<span><?php echo esc_html( $benefit['text'] ?? '' ); ?></span>
								</li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
					<?php if ( $terms ) : ?>
						<p class="text-brand mt-6 text-sm italic"><?php echo esc_html( $terms ); ?></p>
					<?php endif; ?>
					<div class="mt-8">
						<?php
						if ( ! empty( $book_btn['button_label'] ) ) {
							bayugita_render_button( $book_btn, 'btn-primary', 'ph:arrow-right' );
						} else {
							printf(
								'<a href="%1$s" target="_blank" rel="noopener noreferrer" class="btn-primary group w-fit">%2$s <iconify-icon icon="ph:arrow-right" class="group-hover:animate-bounce-right"></iconify-icon></a>',
								esc_url( $default_booking ),
								esc_html__( 'Book Now', 'bayugita' )
							);
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endforeach; wp_reset_postdata(); ?>
