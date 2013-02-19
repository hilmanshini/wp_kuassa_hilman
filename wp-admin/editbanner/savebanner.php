
<?php

// In PHP versions earlier than 4.1.0, $HTTP_POST_FILES should be used instead
// of $_FILES.

$uploaddir = '../../wp-content/dig_banner/';
$uploadfile = $uploaddir . basename($_FILES['file']['name']);
echo $uploadfile;
echo '<pre>';
if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}
echo $_SERVER['REMOTE_ADDR'];
echo $_POST['name'];


print "</pre>";
require_once('../admin.php');

if (!current_user_can('manage_options'))
    wp_die(__('You do not have sufficient permissions to manage options for this site.'));
$allowed = array('gif', 'png', 'jpg','jpeg');
$filename = strtolower($_FILES['file']['name']);
$ext = pathinfo($filename, PATHINFO_EXTENSION);
if (!in_array($ext, $allowed)) {
    session_start();
    $_SESSION['msg'] = 'upload failed , upload image only';
    
    header("Location: editbanner.php?id=".$_POST['banner_id']);
} else {
    session_start();
    try {
        $image = $_SERVER['REMOTE_ADDR'] . '/wp_kuassa/wp-content/dig_banner/' . strval($_FILES['file']['name']);
        $wpdb->update(
                'dig_banner', array(
            'banner_id' => $_POST['banner_id']
            , 'banner_name' => $_POST['name']
            , 'banner_link' => $_POST['link']
            , 'banner_status' => 1
            , 'banner_onpage' => $_POST['onpage']
            , 'banner_dateadd' => $_POST['banner_dateadd']
            , 'banner_dateupdate' => date("Y-m-d H:i:s")
            , 'banner_image' => $image
                )
                ,array('banner_id' => $_POST['banner_id'])
        );
        $_SESSION['msg'] = 'edit success';
        header("Location: ../dig_banner_index.php");
    } catch (Exception $e) {
        
    }
}
?>
