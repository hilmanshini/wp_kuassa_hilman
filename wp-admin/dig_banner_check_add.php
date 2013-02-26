<?php

// In PHP versions earlier than 4.1.0, $HTTP_POST_FILES should be used instead
// of $_FILES.

$uploaddir = '../wp-content/dig_banner/';
$fx = md5('YmdHis') . preg_replace("/[^a-zA-Z0-9. ]+/", "", $_FILES['file']['name']);
$uploadfile = $uploaddir . basename($fx);
$w = 0;
$h = 0;
$img = "image/jpeg";
$w = 0;
$h = 0;

list($w, $h) = getimagesize($_FILES['file']['tmp_name']);
$rh = 0;
$rw = 0;
session_start();
$valid_image = false;
if ($_POST['onpage'] == 'home') {
    if ($w == 1100 && $h == 606) {
        $valid_image = true;

        $valid_image = true;
    } else {
        $rw = 1100;
        $rh = 606;
        $valid_image = false;
    }
} else
if ($_POST['onpage'] == 'blog1' || $_POST['onpage'] == 'blog2' || $_POST['onpage'] == 'community') {
    if ($w == 244 && $h == 163) {
        $valid_image = true;

        $valid_image = true;
    } else {
        $rw = 244;
        $rh = 163;
        $valid_image = false;
    }
} else
if ($_POST['onpage'] == 'support') {
    if ($w == 301 && $h == 301) {
        $valid_image = true;
    } else {
        $rw = 301;
        $rh = 301;
        $valid_image = false;
    }
} else
if ($_POST['onpage'] != 'support' && $_POST['onpage'] != 'blog2' && $_POST['onpage'] != 'blog1' && $_POST['onpage'] != 'community' && $_POST['onpage'] != 'home') {
    $valid_image = true;
}
if ($valid_image == true) {


    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {


        $_SESSION['msg'] = 'invalid content type';
        require_once('./admin.php');
        require_once('./editbanner/activatebanner.php');

        if (!current_user_can('manage_options'))
            wp_die(__('You do not have sufficient permissions to manage options for this site.'));
        $allowed = array('gif', 'png', 'jpg', 'jpeg');
        $filename = strtolower($_FILES['file']['name']);
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if (!in_array($ext, $allowed)) {

            $_SESSION['msg'] = 'invalid content type';
            header("Location: ./dig_banner_add.php?failed");
            
        } else {
            
            try {
                $image = '127.0.0.1/wp_kuassa/wp-content/dig_banner/' . $fx;
                $id = lists('SELECT MAX(banner_id) FROM dig_banner;', $wpdb) + 1;

                $status;
                if ($_POST['current'] == 'on') {
                    $status = 1;
                } else {
                    $status = 0;
                }
                $wpdb->insert(
                        'dig_banner', array(
                    'banner_id' => $id
                    , 'banner_name' => $_POST['name']
                    , 'banner_link' => $_POST['link']
                    , 'banner_status' => $status
                    , 'banner_onpage' => $_POST['onpage']
                    , 'banner_dateadd' => date("Y-m-d H:i:s")
                    , 'banner_dateupdate' => NULL
                    , 'banner_image' => $image
                        )
                );
                if ($_POST['current'] == 'on') {
                    activeBanner($id, $_POST['onpage'], $wpdb);
                    $_SESSION['msg'] = 'save success';
                    header("Location: ./dig_banner_index.php?success");
                }
            } catch (Exception $e) {
                header("Location: ./dig_banner_index.php?failed=" . e);
            }
        }
    } else {

        session_start();
        $_SESSION['msg'] = 'invalid content type';
        header("Location: ./dig_banner_add.php?failed=cantmovefile");
    }
} else {
    $_SESSION['msg'] = 'invalid content type width must be ' . $rw . " and height must be " . $rh;
    header("Location: ./dig_banner_add.php?failed");
}


?>
