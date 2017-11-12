 <?php 
    include "top.php"; 
    include "feed.php";
    include "post_data.php";
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
                    <div id="post-image-container">
                         <div id="arrows">
                            <div id="left-arrow"><i class="fa fa-arrow-left" aria-hidden="true"></i></div> <!-- for the left arrow -->
                            <div id="right-arrow"><i class="fa fa-arrow-right" aria-hidden="true"></i></div> <!-- for the right arrow -->
                        </div>
                        <img id="current-image" src=" <?php echo $feed[$current_item]['imgs'][0] ?> "/>
                        <div id="img-dots"> <?php 
                        for($i = 0; $i < count($feed[$current_item]['imgs']); $i++) {
                                 echo "<i id=\"" . $i ."\" class=\"fa fa-dot-circle-o\" aria-hidden=\"true\"></i>";
                            }
                        ?>
                        </div> <!-- generates the image dots -->
                    </div>
                </div>
            </div> <!-- end right side -->
        </div> <!-- end post content -->
    </div> <!-- end of post container -->

<?php include "bottom.php"; ?>