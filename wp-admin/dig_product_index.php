<?php
/**
 * Module settings administration panel.
 *
 * @package WordPress
 * @subpackage Administration
 */

/** WordPress Administration Bootstrap */
require_once('./admin.php');

if ( ! current_user_can( 'manage_options' ) )
	wp_die( __( 'You do not have sufficient permissions to manage options for this site.' ) );
        
session_start(); 
$title = __('Banner Management');
include('./admin-header.php');



?>
<div class="wrap">
    <div class="icon32" id="icon-options-general"><br></div>
    <h2><?php echo $title; ?></h2>

</div>
 

<?php  require('./admin-footer.php'); ?>