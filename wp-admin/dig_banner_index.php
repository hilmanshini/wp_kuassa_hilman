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

$where = " 1 = 1 ";

$keyword  = $_GET['keyword'];
$onpage = $_GET['onpage'];
if (trim($keyword)!="") { 
    $where .= " and (
	    banner_name LIKE '%$keyword%' 
            )
    ";
}

if (trim($onpage)!="") { 
    $where .= " and (
	     	banner_onpage =  '$onpage' 
            )
    ";
}

$sql = "SELECT * from dig_banner where $where ";
                        
$count  =$wpdb->get_var("SELECT count(*)
  FROM dig_banner  
			WHERE $where 					
	");

	
$per_page = 15;
$start = 0;
try {    $start = (is_numeric($_GET['start'])) ? $_GET['start'] : 1;  } catch (Exception $e) {    $start = 1; }  			  
$from = $start*$per_page - $per_page;

$lists = $wpdb->get_results(" $sql limit $from, $per_page");
$page_links = paginate_links( array(
	'base' => add_query_arg( 'start', '%#%' ),
	'format' => '',
	'prev_text' => __('&laquo;'),
	'next_text' => __('&raquo;'),
	'total' =>  ceil($count / $per_page) ,
	'current' => $start
));
$page_links_text = sprintf( '<span class="displaying-num">' . __( 'Displaying %s&#8211;%s of %s' ) . '</span>%s',
                    number_format_i18n( ( $start - 1 ) * $per_page + 1 ),
                    number_format_i18n( min( $start * $per_page, $count ) ),
                    number_format_i18n( $count ),
                        $page_links
                    );
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

function confirmdelete(banner_id)
{
    var answer = confirm('Anda yakin ?  ');
    if (answer){      
        $.post('<?php echo get_bloginfo('url'); ?>/wp-admin/dig_banner_delete.php',
               {
                    'act' : 'delete' ,
                    'banner_id' : banner_id
               }, function(data){
            window.location.reload(false);            
        });
    }       
}
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
	      
	      <?php    foreach($lists as $key=>$row){ ?>
                <tr class="<?php echo ($key%2==1) ? 'grid_2' : 'grid_3'; ?>">
                   <td>
                    <a href="javascript:void(0);"
                       onclick="javascript: setOpts( 540,940,'Edit Manufacture',
                       '<?php echo get_bloginfo('url').'/wp-admin/crp-editmanufacture.php?manufacture_id='.$row->manufacture_id.'&start='.$start; ?>');">
                            Edit
                        </a> |
                    <a href="javascript:void(0);" onclick="javascript: confirmdelete('<?php echo $row->manufacture_id; ?>');">Delete</a>
                   </td>
                   <td>
                      <?php echo $row->banner_name; ?>
                   </td>
		  
		  <td>
                      <?php echo $row->banner_onpage; ?>
                   </td>
		   
                   <td>
		    <?php  if (is_file(WP_CONTENT_DIR.'/banner/'.$row->banner_image)) :  ?>
                       <img style="width:137.5px;height:68.75px;"	
				src="<?php echo  WP_CONTENT_URL.'/banner/'.$row->banner_image; ?>" />
                    <?php else : ?>
		        <img style="width:137.5px;height:68.75px;"	
				src="<?php echo  WP_CONTENT_URL.'/images_notfound.jpg'; ?>" />
		    <?php endif; ?>
		   </td>
                    <td>
                        <?php echo $row->manufacture_description ; ?>
                   </td>
                </tr>
              <?php } ?>
            </table>
        </div>
      </div>
    </div>
    
</div>
 

<?php  require('./admin-footer.php'); ?>