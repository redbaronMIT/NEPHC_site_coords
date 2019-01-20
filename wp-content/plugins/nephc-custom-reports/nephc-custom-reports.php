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

$ushpa_url = "https://www.ushpa.org/ushpa_validation.asp?ushpa=";
$ushpa_number_bad_retval = "1900-1-1";  // returned when number is not in effect, not found, etc.

add_shortcode( 'NEPHC-members', 'nephc_member_report');

function get_trimdate( $date_val ) {
    
    $sdate = substr( $date_val, 0, 10 );
    if ( ! $sdate ) {
        return "<No date>";
    }
    return $sdate;
}


function get_ushpa_expiration_date( $ushpa_num ) {

    global $ushpa_url;
    global $ushpa_number_bad_retval;
    
    if ( empty ($ushpa_num )) {
        return 'No USHPA#';
    }
    
    // validate via web service
    $ushpa_request = $ushpa_url . $ushpa_num;
    $retval = file_get_contents($ushpa_request);
    
    // ushpa number not in effect, not found...?
    if ($retval === $ushpa_number_bad_retval) {
        return 'Bad USHPA#';
    }
   
    //$ushpa_expires_date = strtotime("$retval");
    // return $ushpa_expires_date;

    return $retval;
}

function nephc_member_report () {
    
   
    if ( ! current_user_can( 'list_users' ) ) {
        return;
    }
    
    
    global $wpdb;
    
    $qry = 'select  t1.display_name, 
                    t1.ID, 
                    t1.user_email, 
                    t2.status,   
                    t2.expiration_date,
                    MAX(CASE WHEN t3.meta_key = "ushpa_number" THEN meta_value END) AS ushpa_number  
                    from wp_users as t1 left join wp_pms_member_subscriptions as t2 on t1.ID = t2.user_id
                                        left join wp_usermeta as t3 on t1.ID = t3.user_id 
                    group by t1.id, t2.status, t2.expiration_date 
                    order by t1.display_name; ';
    
    
    $rows = $wpdb->get_results( $qry, ARRAY_A );
    
    // Prepare output to be returned to replace shortcodeA
    $output = '';
    $output .= '<div class="NEPHC-member-list"><table>';
    $output .= '<h3>NEPHC Member List</h3><br>';
    
    // Check if any bugs were found
    if ( !empty( $rows ) ) {
        $output .= '<tr>';
        $output .= '<th style="width: 200px">Name</th>';
        // $output .= '<th style="width: 50px">ID</th>';
        $output .= '<th style="width: 220px">Email</th>';
        $output .= '<th style="width: 150px">Status</th>';
        $output .= '<th style="width: 130px">NEPHC Expires</th>';
        $output .= '<th style="width: 110px">USHPA#</th>';
        $output .= '<th style="width: 130px">USHPA Expires</th>';
        $output .= '</tr>';
        
        // Create row in table for each bug
        foreach ( $rows as $row ) {
            $output .= '<tr style="background: #FFF">';

            $output .= '<td>' . $row['display_name'] . '</td>';
            // $output .= '<td>' . $row['ID'] . '</td>';
            $output .= '<td>' . $row['user_email'] . '</td>';
            
            $output .= '<td>' . $row['status'] . '</td>';
            $output .= '<td>' . get_trimdate( $row['expiration_date'] ) . '</td>';
            
            $output .= '<td>' . $row['ushpa_number'] . '</td>';
            $output .= '<td>' . get_ushpa_expiration_date( $row['ushpa_number']) . '</td>';

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
delete from wp_usermeta where user_id not in (select ID from wp_users);
delete from wp_pms_member_subscriptions where user_id not in (select ID from wp_users);
*/


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
    
    

