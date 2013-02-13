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

$args = array(
	'sort_order' => 'ASC',
	'sort_column' => 'post_date',
	'hierarchical' => 1,
	'exclude' => '',
	'include' => '',
	'meta_key' => '',
	'meta_value' => '',
	'authors' => '',
	'child_of' => 0,
	'parent' => 0,
	'exclude_tree' => '',
	'number' => '',
	'offset' => 0,
	'post_type' => 'page',
	'post_status' => 'publish'
); 
$pages = get_pages($args);
$keyword  = $_GET['keyword']; 
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
                        <select name="onpage">
			    <?php foreach($pages as $row) : ?>
				<option <?php if ($row->post_name == $_GET['onpage']) echo 'selected="selected"'; ?>
					       value="<?php echo $row->post_name; ?>"><?php echo $row->post_name; ?></option>
			    <?php endforeach; ?>
			</select>
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
    
    <!-- message -->
    <?php  if ($_SESSION['msg']!=null) { ?>
        <div class="updated below-h2" id="message"><p><?php echo $_SESSION['msg']; ?> </p></div>
    <?php } if ($_SESSION['msg']!=null) unset($_SESSION['msg']); ?>
    <!-- message -->
    
    <!-- paginate top -->
    <?php if ( $page_links ) { ?>
    <div class="tablenav">
        <div class="tablenav-pages">
            <?php echo $page_links_text; ?>
        </div>
    </div>
    <?php } ?>
    <!-- end paginate top -->
    
    <input type="button" class="button button-highlighted"      onclick="javascript: setOpts( 540,940,'Tambah Banner',
                       '<?php echo get_bloginfo('url').'/wp-admin/dig_banner_add.php'; ?>');"
        value="Tambah Banner" /> 
    
     <div align="center">
      <div id="poststuff" class="metabox-holder">
       <div class="table_over">
           <table class="main_table" cellpading="0" cellspacing="0" style="width:100%;">
              <tr class="grid_1">
                    <th style="width:160px;">Option</th>
                    <th width="200">Banner</th>
		    <th style="width: 70px;">Page</th>
		    <th style="width: 170px;">Banner Image</th>
                    <th>Status</th>
              </tr> 
            </table>
        </div>
      </div>
    </div>
    
</div>
 

<?php  require('./admin-footer.php'); ?>