<?php

require_once('../admin.php');

if (!current_user_can('manage_options'))
    wp_die(__('You do not have sufficient permissions to manage options for this site.'));

if (!is_numeric($_GET['id'])) {
    
} else {
    $wpdb->query(
            $wpdb->prepare(
                    "
                DELETE FROM dig_banner
		 WHERE banner_id = ".$_GET['id']
            )
    );
}
header('Location: ../dig_banner_index.php');
?>
