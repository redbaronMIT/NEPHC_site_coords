<?php
/*
 Plugin Name: _Custom: NEPHC custom reports
 Plugin URI:
 Description:
 Version: 0.1
 Author: Carl Sjoquist
 Author URI:
 License: GPLv2 or later
 License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

add_shortcode( 'NEPHC-members', 'nephc_member_report');

function nephc_member_report () {
    
    global $wpdb;
    
    $qry = 'select  t1.display_name, t1.ID, t1.user_email,   
            t2.start_date, t2.expiration_date,
            MAX(CASE WHEN t3.meta_key = "ushpa_number" THEN meta_value END) AS ushpa    
            from wp_users as t1 inner join wp_pms_member_subscriptions as t2 on t1.ID = t2.id
                        inner join wp_usermeta as t3 on t1.ID = t3.user_id group by t1.id; ';
    
    
    $rows = $wpdb->get_results( $qry, ARRAY_A );
    
    // Prepare output to be returned to replace shortcode
    $output = '';
    $output .= '<div class="NEPHC-member-list"><table>';
    
    // Check if any bugs were found
    if ( !empty( $rows ) ) {
        $output .= '<tr>';
        $output .= '<th style="width: 200px">Name</th>';
        $output .= '<th style="width: 50px">ID</th>';
        $output .= '<th style="width: 200px">Email</th>';
        $output .= '<th style="width: 200px">Start</th>';
        $output .= '<th style="width: 200px">Expire</th>';
        $output .= '<th style="width: 200px">USHPA</th>';
        // $output .= '<th style="width: 200px">USHPA exp</th>';
        $output .= '</tr>';
        
        // Create row in table for each bug
        foreach ( $rows as $row ) {
            $output .= '<tr style="background: #FFF">';

            $output .= '<td>' . $row['display_name'] . '</td>';
            $output .= '<td>' . $row['ID'] . '</td>';
            $output .= '<td>' . $row['user_email'] . '</td>';
            $output .= '<td>' . $row['start_date'] . '</td>';
            $output .= '<td>' . $row['expiration_date'] . '</td>';
            $output .= '<td>' . $row['ushpa_number'] . '</td>';

            $output .= '</tr>';
        }
    } else {
        // Message displayed if no bugs are found
        $output .= '<tr style="background: #FFF">';
        $output .= '<td colspan="3">No Members to display...</td>';
    }
    $output .= '</table></div>';
    
    // Return data prepared to replace shortcode on page/post
    return $output; 
    
}
    
/*
select  t1.display_name, t1.ID, t1.user_email,   
        t2.start_date, t2.expiration_date,
        MAX(CASE WHEN t3.meta_key = 'first_name' THEN meta_value END) AS first_name,
        MAX(CASE WHEN t3.meta_key = 'last_name' THEN meta_value END) AS last_name,
        MAX(CASE WHEN t3.meta_key = 'ushpa_number' THEN meta_value END) AS ushpa    
    from wp_users as t1 inner join wp_pms_member_subscriptions as t2 on t1.ID = t2.id
                        inner join wp_usermeta as t3 on t1.ID = t3.user_id group by t1.id;

;

SELECT   t1.id, t1.user_email,   
        MAX(CASE WHEN t2.meta_key = 'first_name' THEN meta_value END) AS first_name,   
        MAX(CASE WHEN t2.meta_key = 'last_name' THEN meta_value END) AS last_name  
     FROM wp_users AS t1  INNER JOIN wp_usermeta AS t2 ON t1.id = t2.user_id GROUP BY t1.id, t1.user_email;
*/    
    
    