<?php
/*
 Plugin Name: _Custom: USHPA shortcodes
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
<div id="wrap">
	  <iframe id="ushpadisplay" 
	    style = "border: none; max-width: 100%; min-width: 100px;" 
	    src = "<?php echo htmlspecialchars($weburl); ?>" 
	    #src = "https://codex.wordpress.org/Pages"
	    width = "800" 
	    height = "435" 
	    frameborder = "0" 
	    marginwidth = "0" 
	    marginheight = "0"> 
	   #scrolling = "vertical" 
   #allowfullscreen = "allowfullscreen"
	</iframe>
</div>
<?php
//	    echo "<iframe src='$weburl' width='900' height='600' scrolling=\"yes\" style='overflow:hidden; margin-top:-4px; margin-left:-4px; border:none;'>ushpa info</iframe>";
//	    echo "iframe src=\"$weburl\" width=\"900\" height=\"500\" scrolling=\"yes\"";
	    echo "<a href='$weburl'>$weburl</a>";
    }
}
//add_shortcode("display_USHPA","display_USHPA_iframe");
