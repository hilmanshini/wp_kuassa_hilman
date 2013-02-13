<head>
    <script type="text/javascript">
        alert('hallo semuanya !!!');
    </script>
    <?php
        wp_enqueue_style('config-themes', get_stylesheet_directory_uri().'../css/config.css', false, false);
        wp_enqueue_style('visual-media-queries', get_stylesheet_directory_uri().'../css/visual-media-queries.css', false, false);
        wp_enqueue_script('visual_browser', get_template_directory_uri() . '/js/visual-browser-size.js', array('jquery'), false , true);
        wp_enqueue_script('visual_media_queries', get_template_directory_uri() . '/js/visual-media-queries.js', array('jquery'), false , true);
        
    ?>
</head>
<div class="">
    <?php
        echo '<img src="'.get_template_directory_uri().'/images/kuassa_logo.png" />';
    ?>
    ini dihalaman header_special
    harusnya ada
</div>
