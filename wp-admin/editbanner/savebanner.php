<?php

// In PHP versions earlier than 4.1.0, $HTTP_POST_FILES should be used instead
// of $_FILES.

$uploaddir = '../../wp-content/dig_banner/';
$uploadfile = $uploaddir . basename($_FILES['file']['name']);
require_once('../admin.php');
session_start();
$w = 0;
$h = 0;
list($w, $h) = getimagesize($_FILES['file']['tmp_name']);
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
}
if ($_POST['onpage'] == 'blog1' || $_POST['onpage'] == 'blog2' || $_POST['onpage'] == 'community') {
    if ($w == 244 && $h == 163) {
        $valid_image = true;

        $valid_image = true;
    } else {
        $rw = 244;
        $rh = 163;
        $valid_image = false;
    }
}
if ($_POST['onpage'] == 'support') {
    if ($w == 301 && $h == 301) {
        $valid_image = true;
    } else {
        $rw = 301;
        $rh = 301;
        $valid_image = false;
    }
}
if ($_POST['onpage'] != 'support' && $_POST['onpage'] != 'blog2' && $_POST['onpage'] != 'blog1' && $_POST['onpage'] != 'community' && $_POST['onpage'] != 'home') {
    $valid_image = true;
}
if (!current_user_can('manage_options'))
    wp_die(__('You do not have sufficient permissions to manage options for this site.'));

function activeBanner($id, $onpage, $wpdb) {
    makeAllRowInactive($onpage, $wpdb);
    activateCurrentBanner($id, $wpdb);
}

function makeAllRowInactive($onpage, $wpdb) {
    execquery("UPDATE `dig_banner` SET `banner_status`=0 where `banner_onpage` = '$onpage';", $wpdb);
}

function activateCurrentBanner($id, $wpdb) {
    execquery("UPDATE `dig_banner` SET `banner_status`=1 WHERE  `banner_id`=$id ", $wpdb);
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

if (!current_user_can('manage_options'))
    wp_die(__('You do not have sufficient permissions to manage options for this site.'));
if ($valid_image) {
    if ($_POST['keep'] == 'on') {
        $wpdb->update(
                'dig_banner', array(
            'banner_id' => $_POST['banner_id']
            , 'banner_name' => $_POST['name']
            , 'banner_link' => $_POST['link']
            , 'banner_onpage' => $_POST['onpage']
            , 'banner_dateadd' => $_POST['banner_dateadd']
            , 'banner_dateupdate' => date("Y-m-d H:i:s")
                )
                , array('banner_id' => $_POST['banner_id'])
        );
        $_SESSION['msg'] = 'edit success';
        activeBanner($_POST['banner_id'], $_POST['onpage'], $wpdb);
        header("Location: ../dig_banner_index.php");
    } else {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {

            $allowed = array('gif', 'png', 'jpg', 'jpeg');
            $filename = strtolower($_FILES['file']['name']);
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            if (!in_array($ext, $allowed)) {
                session_start();
                $_SESSION['msg'] = 'upload failed , upload image only';

                header("Location: editbanner.php?id=" . $_POST['banner_id']);
            } else {
                session_start();
                try {
                    $image = '127.0.0.1/wp_kuassa/wp-content/dig_banner/' . strval($_FILES['file']['name']);
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
                            , array('banner_id' => $_POST['banner_id'])
                    );
                    $_SESSION['msg'] = 'edit success';
                    header("Location: ../dig_banner_index.php");
                } catch (Exception $e) {
                    
                }
            }
            activeBanner($_POST['banner_id'], $_POST['onpage'], $wpdb);
        } else {
            $_SESSION['msg'] = 'error file cant be moved';
            header("Location: editbanner.php?id=" . $_POST['banner_id']);
        }
    }
} else {
    $_SESSION['msg'] = 'file to be edited resolution must have width ' . $rw . ' and height ' . $rh;
    header("Location: editbanner.php?id=" . $_POST['banner_id']);
}
?>
