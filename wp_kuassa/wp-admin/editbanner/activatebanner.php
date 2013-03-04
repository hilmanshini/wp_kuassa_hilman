<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
require_once('./admin.php');

if (!current_user_can('manage_options'))
    wp_die(__('You do not have sufficient permissions to manage options for this site.'));

function activeBanner($id,$onpage, $wpdb) {
    makeAllRowInactive($onpage, $wpdb);
    activateCurrentBanner($id,$wpdb);
}

function makeAllRowInactive($onpage, $wpdb) {
    execquery("UPDATE `dig_banner` SET `banner_status`=0 where `banner_onpage` = '$onpage';",$wpdb);
    
}
function activateCurrentBanner($id,$wpdb){
    execquery("UPDATE `dig_banner` SET `banner_status`=1 WHERE  `banner_id`=$id ",$wpdb);
    echo "UPDATE `dig_banner` SET `banner_status`=1 WHERE  `banner_id`=$id ";
}

function lists($query, $wpdb) {
    return $wpdb->get_var($wpdb->prepare($query, $meta_key));
}

function execquery($query, $wpdb) {
    $wpdb->query(
            $query
    );
}

?>
