<?php
/**
 * Show Social Medias
 *
 * @package WordPress
 * @subpackage Skeleton
 * @since 1.0
 * @version 1.0
 */

?>
	<ul class="Navigation Navigation--menu--contactPoints Contacts is-animating u-marginTop--inter Navigation-items u-flexJustifyContentCenter u-sizeAuto">
		<li class="Navigation-items-item Item u-displayFlex u-flexAlignCenter is-animating">
			<?php if( wp_is_mobile() ): ?>
			<a href="#" class="u-displayFlex u-flexAlignItemsCenter">
				<svg class="SocialBar-item-icon u-icon iconPhone u-displayInlineBlock is-animating">
					<use xlink:href="#iconPhone"></use>
				</svg>
				<span class="Value u-marginLeft--inter--half--px">(85) 3333-3333</span>
			</a>
			<?php else: ?>

				<svg class="SocialBar-item-icon u-icon iconPhone u-displayInlineBlock is-animating">
					<use xlink:href="#iconPhone"></use>
				</svg>
				<span class="Value">(85) 3333-3333</span>

			<?php endif; ?>
			
		</li>
	</ul>