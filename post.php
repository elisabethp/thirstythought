 <?php
    include "feed.php";
    include "post_data.php";
    include "top.php"; 
    //<?php echo $feed[$current_item]['title']; 
?>

    <div id="post-container">
        <!-- <hr > ??? Should there be a break here -->
        <div id="post-content">
            <div id="left-side">
                <div id="post-info">
                    <div id="main-info">
                        <div id="post-title"> <?php echo $feed[$current_item]['title']; ?></div>
                        <div id=post-date> <?php echo $feed[$current_item]['date']; ?> </div>
                        <hr class="post-sep"/>
                    </div>
                    <div id="post-desc">
                    <?php 
                        echo $feed[$current_item]['content'];
                    ?>
                    </div>
                </div>
                 
                <div id="post-comments"></div>
             </div>
            <div id="right-side">
                <div id="image-wrapper">
                    <div id="video"></div>
                    <div id="gallery">
                        <div id="gallery-title">Image Gallery</div>
                        <div id="image-gallery">
                            <?php 
                                for ($i = 0; $i < count($feed[$current_item]['imgs']); $i++) {
                                    echo "<div data-featherlight=\"" . $feed[$current_item]['imgs'][$i] . "\" class=\"gallery-item\"><img src=\"" . $feed[$current_item]['imgs'][$i] . "\"/></div>";
                                }
                            ?> 
                        </div>
                </div>
                </div> <!-- end of image wrapper -->
            </div> <!-- end right side -->
        </div> <!-- end post content -->
    </div> <!-- end of post container -->

<?php include "bottom.php"; ?>