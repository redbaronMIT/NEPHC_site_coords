<?php
/*
 Plugin Name: _Custom: NEPHC shortcodes
 Plugin URI:
 Description:
 Version: 0.1
 Author: Jason Wallace
 Author URI:
 License: GPLv2 or later
 License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */


// used for ushpa number validation
$ushpa_oldapi = "https://www.ushpa.org/ushpa_validation.asp?ushpa=";
$ushpa_number_bad_retval = "1900-1-1";  // returned when number is not in effect, not found, etc.
$ushpa_sitequery = "https://www.ushpa.org/m/";

add_shortcode("display_USHPA","display_USHPA_iframe");
function display_USHPA_iframe() {
    global $ushpa_sitequery;
    if (is_user_logged_in() ) 
    {
    
	    $current_user = wp_get_current_user();
	    $ushpa = $current_user->ushpa_number;    
	    $weburl = $ushpa_sitequery . $ushpa;
//echo '<li><iframe src= $ushpa_sitequery . $ushpa  width="900" height="500" scrolling="yes" style="overflow:hidden; margin-top:-4px; margin-left:-4px; border:none;"></iframe></li>';
//	<iframe src="$ushpa_sitequery . $ushpa"  width="800px" height="500px"></iframe>
    //	<?php
	    //
?>
<embed height="435" width="100%" src="<?php echo htmlspecialchars($weburl); ?>" 

<?php
//	    echo "<iframe src='$weburl' width='900' height='600' scrolling=\"yes\" style='overflow:hidden; margin-top:-4px; margin-left:-4px; border:none;'>ushpa info</iframe>";
//	    echo "iframe src=\"$weburl\" width=\"900\" height=\"500\" scrolling=\"yes\"";
	    echo "<a href='$weburl'>$weburl</a>";
    }
}


/**
 * Shortcode to show content only to visitors
 * Source: http://justintadlock.com/archives/2009/05/09/using-shortcodes-to-show-members-only-content
 */
add_shortcode( 'visitor', 'visitor_check_shortcode' );

function visitor_check_shortcode( $atts, $content = null ) {
	 if ( ( !is_user_logged_in() && !is_null( $content ) ) || is_feed() )
		return $content;
	return '';
}

/**
 * function to add user content to header
 */

add_action('top_message_before_print','add_custom_header_info_basic');

function add_custom_header_info_basic(){
	global $add_custom_top_message;
	$add_custom_top_message = 'bob';
	if ( is_user_logged_in() ) {
		$user = wp_get_current_user();
		$add_custom_top_message = 'Welcome, <strong><a href="http://nephc.org/my-account/">'. $user->display_name.'!</a></strong>';
	} else {
		$add_custom_top_message = '<a href="http://nephc.org/members_only/">Login here</a>';}
}

/**
 * Shortcode to print out message and user name
 */
add_shortcode('return_welcome_message','return_welcome_message');
function return_welcome_message(){
        if ( is_user_logged_in() ) {
                $user = wp_get_current_user();
                $display_message = 'Welcome, <strong><a href="http://nephc.org/my-account/">'. $user->display_name.'!</a></strong>';
        } else {
                $display_message = '<a href="http://nephc.org/members_only/">Login here</a>';}
	return $display_message;
}

/**
 * List child pages
 */
function wpb_list_child_pages() {

global $post;

if ( is_page() && $post->post_parent )

    $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
else
    $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );

if ( $childpages ) {

    $string = '<ul>' . $childpages . '</ul>';
}

return $string;

}

add_shortcode('wpb_childpages', 'wpb_list_child_pages');

/*
 * Custom Password message
 */
function my_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    ' . __( "THIS FUNCTIONALITY TEMPORARILY DOWN FOR MAINTENANCE. To view it, enter the password below:" ) . '
    <label for="' . $label . '">' . __( "Password:" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" /><input type="submit" name="Submit" value="' . esc_attr__( "Submit" ) . '" />
    </form>
    ';
    return $o;
}
add_filter( 'the_password_form', 'my_password_form' );

add_shortcode('dump_POST','dump_post_variable');
/*
 * Dump $_POST
 */
function dump_post_variable(){
	var_dump($_POST);
}

?>
