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

wp_enqueue_style('admincontent', get_bloginfo('url').'/wp-admin/css/admin-content.css', __FILE__,
                     array());

wp_head();
?>

<style type="text/css">
form { 
     display: block; 
}
html{
    margin-top: 0px !important;
}
</style>
<script type="text/javascript">
//set no conflict JS
var $ = jQuery.noConflict();

$(function(){
      $("#btn_tampilkan_list").click(function(){
             window.location.href='dig_banner_index.php';    
      });  
 });
</script>


<div class="wrap">
    <div class="icon32" id="icon-options-general"><br></div>
    <h2><?php echo $title; ?></h2>
    <fieldset class="fieldset">
        <legend class="legend">Search</legend>
        <form method="get"  action="dig_banner_index.php" id="frm-search">
            <table class="form-table">
                 <tr valign="top">
                    <th scope="row"><label for="keyword">Keyword  </label></th>
                    <td>
                         <input type="text" class="regular-text"
                                size="60" maxlength="60" name="keyword" value="<?php echo stripslashes  ($keyword); ?>"/> 
                    </td>
                </tr>
		<tr valign="top">
                    <th scope="row"><label for="page">On Page  </label></th>
                    <td>
                        
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row" colspan="2">
                        <input type="submit" class="button button-highlighted"  id="btn_cari"  value="Filter Data" name="cari" />
			<?php if (isset($_GET['cari'])){ ?>
                            <input type="button" class="button button-highlighted"  id="btn_tampilkan_list"  value="Tampilkan Semua" />
                        <?php } ?>
                    </th>
                </tr>
            </table>
        </form>                
    </fieldset>
</div>
 

<?php  require('./admin-footer.php'); ?>