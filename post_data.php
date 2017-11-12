<?php
    include "feed.php";

    $post_id = $_GET["id"];
    $current_item;

    for ($i = 0; $i < count($feed); $i++) {
        if ($feed[$i]['id'] == $post_id) {
            $current_item = $i;
            break;
        } 
    }
    
?>
