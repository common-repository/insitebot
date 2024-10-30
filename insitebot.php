<?php
/**
 * Plugin Name: InsiteBot
 * Plugin URI: https://insitebot.com
 * Description: AI chatbot for your website, as easy as editing a spreadsheet.
 * Version: 1.0
 * Author: Emile Ferreira
 * Author URI: https://emileferreira.com
 */

//add InsiteBot js call
function insitebot_add_scripts() {
	wp_register_script('insitebot.js', 'https://insitebot.com/src/insitebot.js', array('jquery'), null, true);
	wp_enqueue_script('insitebot.js');
}
add_action('wp_enqueue_scripts', 'insitebot_add_scripts');

// create entry in settings sidebar
function insitebot_register_options_page() {
	add_menu_page('InsiteBot Settings', 'InsiteBot', 'manage_options', 'insitebot', 'insitebot_options_page');
}
add_action('admin_menu', 'insitebot_register_options_page');

// settings page
function insitebot_options_page() {
	?>
	<div>
	<?php screen_icon(); ?>

    <br>
	<h1 class="section-title mb-3">InsiteBot</h1>
	<p class="mb-5">InsiteBot is successfully installed on your website.<br>You're doing great!</p>
	<span class="section-sub-title d-block">Customize</span>
	<p class="mb-5">
		To customize InsiteBot's appearance, <a href="http://insitebot.com/customize.html" target="_blank">generate</a> your custom styling code.<br>
		Next, in your WordPress dashboard, navigate to <i>Appearance</i> > <i>Customize</i> and click the <i>Additional CSS</i> button.<br>
		Finally, paste your generated code in the space provided and click <i>Publish</i>. 
	</p>
	<span class="section-sub-title d-block">Support</span>
	<p class="mb-5">
		Having technical difficulties? Ask your web developer or send us an <a href="mailto:getinsitebot@gmail.com" target="_blank">email</a>.<br>
		Keep in mind that we provide full technical support to our Pro members. 
	</p>
	<p>&copy; <script>document.write(new Date().getFullYear());</script> <a href="https://emileferreira.com" target="_blank">Emile Ferreira</a>. All Rights Reserved.</p>
	</div>
	<?php
}

//register stylesheets for admin page
function insitebot_add_admin_style() {
	wp_enqueue_style('1', 'https://fonts.googleapis.com/css?family=Muli:300,400,700,900');
	wp_enqueue_style('2', plugins_url('/css/bootstrap.min.css', __FILE__));
	wp_enqueue_style('3', plugins_url('/css/jquery-ui.css', __FILE__));
	wp_enqueue_style('4', plugins_url('/css/owl.carousel.min.css', __FILE__));
	wp_enqueue_style('5', plugins_url('/css/owl.theme.default.min.css', __FILE__));
	wp_enqueue_style('6', plugins_url('/css/jquery.fancybox.min.css', __FILE__));
	wp_enqueue_style('7', plugins_url('/css/bootstrap-datepicker.css', __FILE__));
	wp_enqueue_style('8', plugins_url('/css/aos.css', __FILE__));
	wp_enqueue_style('9', plugins_url('/css/style.css', __FILE__));
}
add_action('admin_print_styles', 'insitebot_add_admin_style');