<?php
/*
* Plugin Name: WordPress ShortCode
* Description: Create your WordPress shortcode.
* Version: 1.0
* Author: InkThemes
* Author URI: https://www.inkthemes.com
*/
// Example 1 : WP Shortcode to display form on any page or post.
function form_creation(){
?>
<form>
First name: <input type="text" name="firstname"><br>
Last name: <input type="text" name="lastname"><br>
Message: <textarea name="message"> Enter text here…</textarea>
</form> <?php
}
add_shortcode("test", "form_creation");

// Example 2 : WP Shortcode to display text on page or post.
function wp_first_shortcode(){
echo('Hello, This is your another shortcode!');
}
add_shortcode("first", "wp_first_shortcode");

?>
