<?php
/**
 * Plugin Premium Offer Page
 *
 * @package WP Responsive Recent Post Slider
 * @since 1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<div class="wrap">

	<h2><?php _e( 'WP Responsive Recent Post Slider with', 'wp-responsive-recent-post-slider' ); ?><span class="wpos-epb"> <?php _e( 'Essential Plugin Bundle', 'wp-responsive-recent-post-slider' ); ?></span></h2><br />

	<style>
		.wpos-plugin-pricing-table thead th h2{font-weight: 400; font-size: 2.4em; line-height:normal; margin:0px; color: #2ECC71;}
		.wpos-plugin-pricing-table thead th h2 + p{font-size: 1.25em; line-height: 1.4; color: #999; margin:5px 0 5px 0;}

		table.wpos-plugin-pricing-table{width:100%; text-align: left; border-spacing: 0; border-collapse: collapse; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;}

		.wpos-plugin-pricing-table th, .wpos-plugin-pricing-table td{font-size:14px; line-height:normal; color:#444; vertical-align:middle; padding:12px;}

		.wpos-plugin-pricing-table colgroup:nth-child(1) { width: 31%; border: 0 none; }
		.wpos-plugin-pricing-table colgroup:nth-child(2) { width: 22%; border: 1px solid #ccc; }
		.wpos-plugin-pricing-table colgroup:nth-child(3) { width: 25%; border: 10px solid #2ECC71; }

		/* Tablehead */
		.wpos-plugin-pricing-table thead th {background-color: #fff; background:linear-gradient(to bottom, #ffffff 0%, #ffffff 100%); text-align: center; position: relative; border-bottom: 1px solid #ccc; padding: 1em 0 1em; font-weight:400; color:#999;}
		.wpos-plugin-pricing-table thead th:nth-child(1) {background: transparent;}
		.wpos-plugin-pricing-table thead th:nth-child(3) p{color:#000;}	
		.wpos-plugin-pricing-table thead th p.promo {font-size: 14px; color: #fff; position: absolute; bottom:0; left: -17px; z-index: 1000; width: 100%; margin: 0; padding: .625em 17px .75em; background-color: #ca4a1f; box-shadow: 0 2px 4px rgba(0,0,0,.25); border-bottom: 1px solid #ca4a1f;}
		.wpos-plugin-pricing-table thead th p.promo:before {content: ""; position: absolute; display: block; width: 0px; height: 0px; border-style: solid; border-width: 0 7px 7px 0; border-color: transparent #900 transparent transparent; bottom: -7px; left: 0;}
		.wpos-plugin-pricing-table thead th p.promo:after {content: ""; position: absolute; display: block; width: 0px; height: 0px; border-style: solid; border-width: 7px 7px 0 0; border-color: #900 transparent transparent transparent; bottom: -7px; right: 0;}

		/* Tablebody */
		.wpos-plugin-pricing-table tbody th{background: #fff; border-left: 1px solid #ccc; font-weight: 600;}
		.wpos-plugin-pricing-table tbody th span{font-weight: normal; font-size: 87.5%; color: #999; display: block;}

		.wpos-plugin-pricing-table tbody td{background: #fff; text-align: center;}
		.wpos-plugin-pricing-table tbody td .dashicons{height: auto; width: auto; font-size:30px;}
		.wpos-plugin-pricing-table tbody td .dashicons-no-alt{color: #ff2700;}
		.wpos-plugin-pricing-table tbody td .dashicons-yes{color: #2ECC71;}

		.wpos-plugin-pricing-table tbody tr:nth-child(even) th,
		.wpos-plugin-pricing-table tbody tr:nth-child(even) td { background: #f5f5f5; border: 1px solid #ccc; border-width: 1px 0 1px 1px; }
		.wpos-plugin-pricing-table tbody tr:last-child td {border-bottom: 0 none;}

		/* Table Footer */
		.wpos-plugin-pricing-table tfoot th, .wpos-plugin-pricing-table tfoot td{text-align: center; border-top: 1px solid #ccc;}
		.wpos-plugin-pricing-table tfoot a, .wpos-plugin-pricing-table thead a{font-weight: 600; color: #fff; text-decoration: none; text-transform: uppercase; display: inline-block; padding: 1em 2em; background: #ff2700; border-radius: .2em;}
		
		.wpos-epb{color:#ff2700 !important;}
		
		/* SideBar */
		.wpos-sidebar .wpos-epb-wrap{background:#0055fb; color:#fff; padding:15px;}
		.wpos-sidebar .wpos-epb-wrap  h2{font-size:24px !important; color:#fff; margin:0 0 15px 0; padding:0px !important;}
		.wpos-sidebar .wpos-epb-wrap  h2 span{font-size:20px !important; color:#ffff00 !important;}
		.wpos-sidebar .wpos-epb-wrap ul li{font-size:16px; margin-bottom:8px;}
		.wpos-sidebar .wpos-epb-wrap ul li span{color:#ffff00 !important;}
		.wpos-sidebar .wpos-epb-wrap ul{list-style: decimal inside none;}
		.wpos-sidebar .wpos-epb-wrap b{font-weight:bold !important;}
		.wpos-sidebar .wpos-epb-wrap p{font-size:16px;}
		.wpos-sidebar .wpos-epb-wrap .button-yellow{font-weight: 600;color: #000; text-align:center;text-decoration: none;display:block;padding: 1em 2em;background: #ffff00;border-radius: .2em;}
		.wpos-sidebar .wpos-epb-wrap .button-orange{font-weight: 600;color: #fff; text-align:center;text-decoration: none;display:block;padding: 1em 2em;background: #ff2700;border-radius: .2em;}
	</style>
	
	<div id="poststuff">
		<div id="post-body" class="metabox-holder columns-2">
			<div id="post-body-content">

						<table class="wpos-plugin-pricing-table">
							<colgroup></colgroup>
							<colgroup></colgroup>
							<colgroup></colgroup>
									<thead>
								<tr>
									<th></th>
									<th>
										<h2>Free</h2>
									</th>
									<th>
										<h2 class="wpos-epb">Premium</h2>
										<p>Gain access to <strong>WP Responsive Recent Post Slider</strong> included in <br /><strong class="wpos-epb">Essential Plugin Bundle</strong></p>
										<a href="<?php echo WPRPS_SITE_LINK; ?>/pricing/?utm_source=WP&utm_medium=Post-Slider&utm_campaign=Upgrade-PRO" target="_blank">Buy Now</a>
									</th>
								</tr>
							</thead>

							 <tfoot>
								<tr>
									<th></th>
									<td></td>
									<td><p>Gain access to <strong>WP Responsive Recent Post Slider</strong> included in <br /><strong>Essential Plugin Bundle</strong></p>
									<a href="<?php echo WPRPS_SITE_LINK; ?>/pricing/?utm_source=WP&utm_medium=Post-Slider&utm_campaign=Upgrade-PRO" target="_blank">Buy Now</a></td>
								</tr>
							</tfoot>

							<tbody>
								<tr>
									<th>Designs <span>Designs that make your website better</span></th>
									<td>4</td>
									<td>60+</td>
								</tr>
								<tr>
									<th>Shortcodes <span>Shortcode provide output to the front-end side</span></th>
									<td>2 (Slider and Carousel)</td>
									<td>4 (Slider,  Carousel, Grid Box Slider )</td>
								</tr>
								<tr>
									<th>Shortcode Parameters <span>Add extra power to the shortcode</span></th>
									<td>16</td>
									<td>30+</td>
								</tr>
								<tr>
									<th>Shortcode Generator <span>Play with all shortcode parameters with preview panel. No documentation required!!</span></th>
									<td><i class="dashicons dashicons-no-alt"></i></td>
									<td><i class="dashicons dashicons-yes"></i></td>
								</tr>
								<tr>
									<th>WP Templating Features <span class="subtext">You can modify plugin html/designs in your current theme.</span></th>
									<td><i class="dashicons dashicons-no-alt"> </i></td>
									<td><i class="dashicons dashicons-yes"> </i></td>
								</tr>
								<tr>
									<th>Widgets<span> WordPress Widgets to your sidebars.</span></th>
									<td><i class="dashicons dashicons-no-alt"></i></td>
									<td><i class="dashicons dashicons-yes"></i></td>
								</tr>
								<tr>
									<th>Custom Post Type Support<span>Supports any custom post type</span></th>
									<td>Limited</td>
									<td>Unlimited </td>
								</tr>
								<tr>
									<th>Drag & Drop Post Order Change <span>Arrange your desired post with your desired order and display</span></th>
									<td><i class="dashicons dashicons-no-alt"></i></td>
									<td><i class="dashicons dashicons-yes"></i></td>
								</tr>
								<tr>
									<th>Gutenberg Block Supports <span>Use this plugin with Gutenberg easily</span></th>
									<td><i class="dashicons dashicons-yes"></i></td>
									<td><i class="dashicons dashicons-yes"></i></td>
								</tr>
								<tr>
									<th>Elementor Page Builder Support <em class="wpos-new-feature">New</em> <span>Use this plugin with Elementor easily</span></th>
									<td><i class="dashicons dashicons-no-alt"></i></td>
									<td><i class="dashicons dashicons-yes"></i></td>
								</tr>
								<tr>
									<th>Bevear Builder Support <em class="wpos-new-feature">New</em> <span>Use this plugin with Bevear Builder easily</span></th>
									<td><i class="dashicons dashicons-no-alt"></i></td>
									<td><i class="dashicons dashicons-yes"></i></td>
								</tr>
								<tr>
									<th>SiteOrigin Page Builder Support <em class="wpos-new-feature">New</em> <span>Use this plugin with SiteOrigin easily</span></th>
									<td><i class="dashicons dashicons-no-alt"></i></td>
									<td><i class="dashicons dashicons-yes"></i></td>
								</tr>
								<tr>
									<th>Divi Page Builder Native Support <em class="wpos-new-feature">New</em> <span>Use this plugin with Divi Builder easily</span></th>
									<td><i class="dashicons dashicons-yes"></i></td>
									<td><i class="dashicons dashicons-yes"></i></td>
								</tr>
								<tr>
									<th>Fusion Page Builder (Avada) native support <em class="wpos-new-feature">New</em> <span>Use this plugin with Fusion(Avada) Builder easily</span></th>
									<td><i class="dashicons dashicons-yes"></i></td>
									<td><i class="dashicons dashicons-yes"></i></td>
								</tr>
								<tr>
									<th>WPBakery Page Builder Support <span>Use this plugin with Visual Composer easily</span></th>
									<td><i class="dashicons dashicons-no-alt"></i></td>
									<td><i class="dashicons dashicons-yes"></i></td>
								</tr>
								<tr>
									<th>Image Lazyload <span>Lazyload support for the image.</span></th>
									<td><i class="dashicons dashicons-yes"></i></td>
									<td><i class="dashicons dashicons-yes"></i></td>
								</tr>
								<tr>
									<th>Custom Read More link for Post <span>Redirect post to third party destination if any</span></th>
									<td><i class="dashicons dashicons-no-alt"></i></td>
									<td><i class="dashicons dashicons-yes"></i></td>
								</tr>
									<tr>
									<th>Ignore Sticky Post <span>Ignore sticky post or not</span></th>
									<td><i class="dashicons dashicons-no-alt"></i></td>
									<td><i class="dashicons dashicons-yes"></i></td>
								</tr>
								<tr>
									<th>Display Desired Post <span>Display only the post you want</span></th>
									<td><i class="dashicons dashicons-yes"></i></td>
									<td><i class="dashicons dashicons-yes"></i></td>
								</tr>
								<tr>
									<th>Exclude Some Posts <span>Do not display the posts you want</span></th>
									<td><i class="dashicons dashicons-yes"></i></td>
									<td><i class="dashicons dashicons-yes"></i></td>
								</tr>
								<tr>
									<th>Display Post for Particular Categories <span>Display only the posts with particular category</span></th>
									<td><i class="dashicons dashicons-yes"></i></td>
									<td><i class="dashicons dashicons-yes"></i></td>
								</tr>
								<tr>
									<th>Exclude Some Categories <span>Do not display the posts for particular categories</span></th>
									<td><i class="dashicons dashicons-no-alt"></i></td>
									<td><i class="dashicons dashicons-yes"></i></td>
								</tr>
								<tr>
									<th>Post Order / Order By Parameters <span>Display post according to date, title and etc</span></th>
									<td><i class="dashicons dashicons-no-alt"></i></td>
									<td><i class="dashicons dashicons-yes"></i></td>
								</tr>
								<tr>
									<th>Multiple Slider Parameters <span>Slider parameters like autoplay, number of slide, sider dots and etc.</span></th>
									<td><i class="dashicons dashicons-yes"></i></td>
									<td><i class="dashicons dashicons-yes"></i></td>
								</tr>
								<tr>
									<th>Slider RTL Support <span>Slider supports for RTL website</span></th>
									<td><i class="dashicons dashicons-yes"></i></td>
									<td><i class="dashicons dashicons-yes"></i></td>
								</tr>
								<tr>
									<th>Automatic Update <span>Get automatic  plugin updates </span></th>
									<td>Lifetime</td>
									<td>Yearly OR Lifetime</td>
								</tr>
								<tr>
									<th>Support <span>Get support for plugin</span></th>
									<td>Limited</td>
									<td>1 Year</td>
								</tr>
							</tbody>
						</table>
			</div>	
				<!--Upgrad to Pro HTML -->
					<div id="postbox-container-1" class="postbox-container wpos-sidebar">
						<div class="wpos-epb-wrap">
							<h2><span>Well, What's inside our</span> Essential Plugin Bundle?</h2>
							<ul>
								<li><b>40+ Utility Plugins</b> including <span><?php echo WPRPS_NAME; ?> premium </span> version.</li>
								<li><b>Inbound Marketing</b> with popup anything - a marketing popup tools that makes your visitors engage.</li>
								<li><b>10+ Sliderspack</b> for the best post, image &amp; logo sliders.</li>
								<li><b>Popup Anything a Marketing Popup</b> engage with customers, subscribers, leads and sales with Popup Anything.</li>
							</ul>			
							<p>with the best themes compatibility</b> & at the most <b>competitive price</b> ever the <b>ultimate bundle</b> with all our premium <b>essential plugins</b> in one single bundle.</p>
							<a class="button-yellow button-orange" style="margin-bottom:0px;" href="<?php echo WPRPS_SITE_LINK; ?>/essential-bundle/?utm_source=WP&utm_medium=Post-Slider&utm_campaign=EPB-Upgrade-PRO" target="_blank">Buy Now</a>
						</div>
					</div><!-- #post-container-1 -->
			</div>
		</div>			
</div>