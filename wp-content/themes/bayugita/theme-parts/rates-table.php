<?php
/**
 * Layout: rates_table — villa tabs → year tabs → rate tables + availability + terms.
 *
 * Data model (SCF repeaters):
 *   heading_text, availability_url
 *   discounts (repeater): text
 *   villas (repeater): villa_key, villa_name, villa_description,
 *     years (repeater): year, rows (repeater): period, price, price10, min_nights, inclusions
 *   inclusions_list (repeater): icon, text
 *   terms_content (wysiwyg)
 *
 * @package Bayugita
 */

$heading   = get_sub_field( 'heading_text' );
$avail_url = get_sub_field( 'availability_url' );
$villas    = get_sub_field( 'villas' );
if ( empty( $villas ) ) {
	return;
}
$discounts  = get_sub_field( 'discounts' );
$inclusions = get_sub_field( 'inclusions_list' );
$terms      = get_sub_field( 'terms_content' );
?>
<section<?php echo bayugita_section_atts( 'mb-16 md:mb-20 xl:mb-28 pt-36 md:pt-40 xl:pt-48' ); // phpcs:ignore ?> data-aos="fade-up">
	<div class="delimiter">
		<div class="text-center">
			<?php bayugita_the_heading( $heading, get_sub_field( 'heading_tag' ), 'font-playfair' ); ?>
		</div>

		<?php if ( $discounts ) : ?>
			<!-- Discounts callout -->
			<div class="mx-auto mt-10 max-w-4xl border border-gray-200 bg-gray-50 p-6 md:mt-12 md:p-8">
				<div class="flex items-start gap-4">
					<div class="bg-brand-50 flex size-12 shrink-0 items-center justify-center">
						<iconify-icon icon="ph:tag" class="!text-brand !text-2xl"></iconify-icon>
					</div>
					<div>
						<h3><?php esc_html_e( 'Discounts', 'bayugita' ); ?></h3>
						<ul class="mt-3 space-y-2 leading-relaxed">
							<?php foreach ( $discounts as $d ) : ?>
								<li class="flex gap-2">
									<iconify-icon icon="ph:check" class="!text-brand mt-1 shrink-0"></iconify-icon>
									<?php echo esc_html( $d['text'] ?? '' ); ?>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
			</div>
		<?php endif; ?>

		<!-- Villa tabs -->
		<div class="mx-auto mt-10 flex max-w-4xl flex-col gap-2 sm:flex-row" role="tablist">
			<?php foreach ( $villas as $i => $v ) : $key = sanitize_title( $v['villa_key'] ?: $v['villa_name'] ); ?>
				<button class="rate-villa-tab flex-1 border border-gray-200 px-6 py-3 <?php echo 0 === $i ? 'active' : ''; ?>" data-villa="<?php echo esc_attr( $key ); ?>"><?php echo esc_html( $v['villa_name'] ); ?></button>
			<?php endforeach; ?>
		</div>

		<!-- Villa descriptions -->
		<div class="mx-auto mt-6 max-w-3xl text-center">
			<?php foreach ( $villas as $i => $v ) : $key = sanitize_title( $v['villa_key'] ?: $v['villa_name'] ); ?>
				<p class="rate-villa-desc <?php echo 0 === $i ? '' : 'hidden'; ?>" data-villa="<?php echo esc_attr( $key ); ?>"><?php echo wp_kses_post( $v['villa_description'] ?? '' ); ?></p>
			<?php endforeach; ?>
		</div>

		<!-- Availability bar -->
		<div class="mx-auto mt-4 max-w-4xl border border-gray-200 bg-white p-6 md:p-8">
			<div class="grid grid-cols-1 gap-4 md:grid-cols-[1fr_1fr_auto] md:items-end">
				<div>
					<label for="check-in" class="text-dark-500 mb-2 block text-sm font-medium"><?php esc_html_e( 'Check-in', 'bayugita' ); ?></label>
					<input type="date" id="check-in" class="focus:border-brand w-full border border-gray-300 px-4 py-3 text-sm focus:outline-none" />
				</div>
				<div>
					<label for="check-out" class="text-dark-500 mb-2 block text-sm font-medium"><?php esc_html_e( 'Check-out', 'bayugita' ); ?></label>
					<input type="date" id="check-out" class="focus:border-brand w-full border border-gray-300 px-4 py-3 text-sm focus:outline-none" />
				</div>
				<a href="<?php echo esc_url( $avail_url ?: '#' ); ?>" target="_blank" rel="noopener noreferrer" class="btn-primary group justify-center"><?php esc_html_e( 'Check Availability', 'bayugita' ); ?> <iconify-icon icon="ph:arrow-right" class="group-hover:animate-bounce-right"></iconify-icon></a>
			</div>
		</div>

		<!-- Rate tables per villa/year -->
		<?php
		foreach ( $villas as $vi => $v ) :
			$key   = sanitize_title( $v['villa_key'] ?: $v['villa_name'] );
			$years = $v['years'] ?? array();
			if ( empty( $years ) ) {
				continue;
			}
			?>
			<div class="rate-villa-panel <?php echo 0 === $vi ? '' : 'hidden'; ?>" data-villa="<?php echo esc_attr( $key ); ?>">
				<div class="mt-8 flex justify-center gap-2">
					<?php foreach ( $years as $yi => $y ) : ?>
						<button class="rate-year-tab border border-gray-200 px-4 py-2 <?php echo 0 === $yi ? 'active' : ''; ?>" data-year="<?php echo esc_attr( $y['year'] ); ?>"><?php echo esc_html( $y['year'] ); ?></button>
					<?php endforeach; ?>
				</div>
				<?php foreach ( $years as $yi => $y ) : $rows = $y['rows'] ?? array(); ?>
					<div class="rate-panel mx-auto mt-8 max-w-5xl <?php echo 0 === $yi ? '' : 'hidden'; ?>" data-year="<?php echo esc_attr( $y['year'] ); ?>">
						<div class="overflow-x-auto border border-gray-200">
							<table class="w-full min-w-[48rem]">
								<thead class="bg-brand-50">
									<tr>
										<th class="px-4 py-3 text-left"><?php esc_html_e( 'Period', 'bayugita' ); ?></th>
										<th class="px-4 py-3 text-left"><?php esc_html_e( 'IDR / Night *', 'bayugita' ); ?></th>
										<th class="px-4 py-3 text-left"><?php esc_html_e( 'IDR / Night (10+ Nights) *', 'bayugita' ); ?></th>
										<th class="px-4 py-3 text-left"><?php esc_html_e( 'Min Nights', 'bayugita' ); ?></th>
										<th class="px-4 py-3 text-left"><?php esc_html_e( 'Inclusions', 'bayugita' ); ?></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ( $rows as $row ) : ?>
										<tr class="border-t border-gray-200">
											<td class="px-4 py-3"><?php echo esc_html( $row['period'] ?? '' ); ?></td>
											<td class="px-4 py-3"><?php echo esc_html( $row['price'] ?? '' ); ?></td>
											<td class="px-4 py-3"><?php echo esc_html( $row['price10'] ?? '' ); ?></td>
											<td class="px-4 py-3"><?php echo esc_html( $row['min_nights'] ?? '' ); ?></td>
											<td class="px-4 py-3">
												<?php if ( $inclusions ) : ?>
													<button type="button" data-modal-open="modal-inclusions" class="text-brand cursor-pointer underline-offset-4 hover:underline"><?php echo esc_html( $row['inclusions'] ?? '' ); ?></button>
												<?php else : ?>
													<?php echo esc_html( $row['inclusions'] ?? '' ); ?>
												<?php endif; ?>
											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
								<tfoot class="bg-brand-50">
									<tr><td colspan="5" class="px-4 py-3 text-sm"><?php esc_html_e( '* All inclusive rates.', 'bayugita' ); ?></td></tr>
								</tfoot>
							</table>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endforeach; ?>
		</div>

		<?php if ( $terms ) : ?>
			<div class="mt-6 text-center">
				<button type="button" data-modal-open="modal-terms" class="text-brand cursor-pointer underline underline-offset-4"><?php esc_html_e( 'Read our terms & conditions', 'bayugita' ); ?></button>
			</div>
		<?php endif; ?>
	</div>

	<?php if ( $inclusions ) : ?>
		<div id="modal-inclusions" class="modal">
			<div class="modal__content" data-lenis-prevent>
				<button data-modal-close class="absolute top-6 right-6 cursor-pointer"><iconify-icon icon="ph:x" class="!text-dark text-2xl"></iconify-icon></button>
				<h2><?php esc_html_e( 'What&rsquo;s Included', 'bayugita' ); ?></h2>
				<ul class="mt-6 space-y-3">
					<?php foreach ( $inclusions as $inc ) : ?>
						<li class="flex items-start gap-3">
							<iconify-icon icon="<?php echo esc_attr( $inc['icon'] ?: 'ph:check' ); ?>" class="!text-brand mt-0.5 !text-xl shrink-0"></iconify-icon>
							<span class="leading-relaxed"><?php echo esc_html( $inc['text'] ?? '' ); ?></span>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	<?php endif; ?>

	<?php if ( $terms ) : ?>
		<div id="modal-terms" class="modal">
			<div class="modal__content !max-w-3xl" data-lenis-prevent>
				<button data-modal-close class="absolute top-6 right-6 cursor-pointer"><iconify-icon icon="ph:x" class="!text-dark text-2xl"></iconify-icon></button>
				<h2><?php esc_html_e( 'Terms and Conditions', 'bayugita' ); ?></h2>
				<div class="prose-basic mt-6 space-y-4 leading-relaxed"><?php echo wp_kses_post( $terms ); ?></div>
			</div>
		</div>
	<?php endif; ?>
</section>
