<?php if(isset($cart_messages) && count($cart_messages) > 0) { ?>
	<?php foreach((array)$cart_messages as $cart_message) { ?>
	  <span class="cart_message"><?php echo $cart_message; ?></span>
	<?php } ?>
<?php } ?>

<?php if(wpsc_cart_item_count() > 0): ?>
    <div class="shoppingcart">
	
	<span class="shoppingcart-total">
		<?php _e('Total', 'tokokoo'); ?> 
		<span class="shoppingcart-total-widget"><?php echo wpsc_cart_total_widget( false, false ,false ); ?></span>
		<!-- <small><?php _e( 'excluding shipping and tax', 'tokokoo' ); ?></small> -->
	</span>
	
	<table>
		<tbody>
		<?php while(wpsc_have_cart_items()): wpsc_the_cart_item(); ?>
		
		<tr>
			<td class="firstcol wpsc_product_image wpsc_product_image_<?php echo wpsc_the_cart_item_key(); ?>">
			 <?php if('' != wpsc_cart_item_image()): ?>
				<img src="<?php echo wpsc_cart_item_image(43, 43); ?>" alt="<?php echo wpsc_cart_item_name(); ?>" title="<?php echo wpsc_cart_item_name(); ?>" class="product_image" />
			 <?php else:
			 /* I dont think this gets used anymore,, but left in for backwards compatibility */
			 ?>
				<div class="item_no_image">
				   <a href="<?php echo wpsc_the_product_permalink(); ?>">
				   <span><?php _e('No Image','tokokoo'); ?></span>

				   </a>
				</div>
			<?php endif; ?>
			</td>
			<td colspan='2' class='product-name'>
				<a href="<?php echo wpsc_cart_item_url(); ?>"><?php echo wpsc_cart_item_name(); ?></a>
				<span><?php echo wpsc_cart_item_quantity(); ?></span>
			</td>
			<td><?php echo wpsc_cart_item_price(); ?></td>
			<td class="cart-widget-remove">
				<form action="" method="post" class="adjustform">
				<input type="hidden" name="quantity" value="0" />
				<input type="hidden" name="key" value="<?php echo wpsc_the_cart_item_key(); ?>" />
				<input type="hidden" name="wpsc_update_quantity" value="true" />
				<input class="remove_button" type="submit" />
				</form>
			</td>
		</tr>	
		<?php endwhile; ?>
		
		</tbody>
		<tfoot>
			<tr>
				<td id='cart-widget-links' colspan="5">
					<a target="_parent" href="<?php echo get_option('shopping_cart_url'); ?>" title="<?php _e('Checkout', 'tokokoo'); ?>" class="gocheckout"><?php _e('Checkout', 'tokokoo'); ?></a>
					<form action="" method="post" class="wpsc_empty_the_cart">
						<input type="hidden" name="wpsc_ajax_action" value="empty_cart" />
							<a target="_parent" href="<?php echo htmlentities(add_query_arg('wpsc_ajax_action', 'empty_cart', remove_query_arg('ajax')), ENT_QUOTES, 'UTF-8'); ?>" class="emptycart" title="<?php _e('Empty Your Cart', 'tokokoo'); ?>"><?php _e('Clear cart', 'tokokoo'); ?></a>
					</form>
				</td>
			</tr>
		</tfoot>
	</table>
	</div><!--close shoppingcart-->		
<?php else: ?>
	<p class="empty">
		<?php _e('Your shopping cart is empty', 'tokokoo'); ?><br />
		<a target="_parent" href="<?php echo get_option('product_list_url'); ?>" class="visitshop" title="<?php _e('Visit Shop', 'tokokoo'); ?>"><?php _e('Visit the shop', 'tokokoo'); ?></a>	
	</p>
<?php endif; ?>

<?php
wpsc_google_checkout();


?>