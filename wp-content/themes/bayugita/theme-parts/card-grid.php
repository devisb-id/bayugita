<?php
/**
 * Layout: card_grid — repeater cards (image/icon + title + text + link).
 *
 * @package Bayugita
 */

$heading = get_sub_field( 'heading_text' );
$intro   = get_sub_field( 'intro' );
$cards   = get_sub_field( 'cards' );
$cols    = get_sub_field( 'columns' ); // 2 | 3 | 4
if ( empty( $cards ) ) {
	return;
}
$grid = array(
	'2' => 'md:grid-cols-2',
	'3' => 'md:grid-cols-3',
	'4' => 'sm:grid-cols-2 xl:grid-cols-4',
);
$grid_class = $grid[ $cols ] ?? 'md:grid-cols-3';
?>
<section<?php echo bayugita_section_atts( 'mt-16 md:mt-20 xl:mt-28' ); // phpcs:ignore ?> data-aos="fade-up">
	<div class="delimiter">
		<?php if ( $heading || $intro ) : ?>
			<div class="text-center">
				<?php bayugita_the_heading( $heading, get_sub_field( 'heading_tag' ), 'font-playfair' ); ?>
				<?php if ( $intro ) : ?>
					<p class="mx-auto mt-4 max-w-2xl leading-relaxed"><?php echo esc_html( $intro ); ?></p>
				<?php endif; ?>
			</div>
		<?php endif; ?>

		<div class="mt-12 grid grid-cols-1 gap-8 <?php echo esc_attr( $grid_class ); ?> md:mt-16 xl:gap-10">
			<?php
			foreach ( $cards as $card ) :
				$href  = bayugita_button_url( $card['link'] ?? array() );
				$tag   = $href ? 'a' : 'div';
				$attrs = $href ? ' href="' . esc_url( $href ) . '"' : '';
				?>
				<<?php echo $tag; // phpcs:ignore ?> class="group flex h-full flex-col overflow-hidden text-center"<?php echo $attrs; // phpcs:ignore ?>>
					<?php if ( ! empty( $card['image'] ) ) : ?>
						<div class="aspect-[4/3] overflow-hidden">
							<?php bayugita_the_image( $card['image'], 'h-full w-full object-cover transition-transform duration-500 group-hover:scale-105' ); ?>
						</div>
					<?php elseif ( ! empty( $card['icon'] ) ) : ?>
						<div class="border border-gray-200 bg-white p-8">
							<iconify-icon icon="<?php echo esc_attr( $card['icon'] ); ?>" class="!text-brand !text-3xl"></iconify-icon>
						</div>
					<?php endif; ?>
					<div class="mt-6 flex flex-1 flex-col">
						<?php if ( ! empty( $card['eyebrow'] ) ) : ?>
							<p class="text-brand tracking-wider uppercase"><?php echo esc_html( $card['eyebrow'] ); ?></p>
						<?php endif; ?>
						<h3 class="font-playfair mt-1 !text-xl"><?php echo esc_html( $card['title'] ?? '' ); ?></h3>
						<?php if ( ! empty( $card['text'] ) ) : ?>
							<p class="mx-auto mt-3 max-w-md leading-relaxed"><?php echo esc_html( $card['text'] ); ?></p>
						<?php endif; ?>
						<?php if ( ! empty( $card['link_label'] ) ) : ?>
							<span class="text-brand mt-4 inline-flex items-center justify-center gap-1"><?php echo esc_html( $card['link_label'] ); ?> <iconify-icon icon="ph:arrow-right"></iconify-icon></span>
						<?php endif; ?>
					</div>
				</<?php echo $tag; // phpcs:ignore ?>>
			<?php endforeach; ?>
		</div>
	</div>
</section>
