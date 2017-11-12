<?php 
    include "feed.php";
    include "top.php";
    //https://codepen.io/sdthornton/pen/wBZdXq
    $length_postdesc = 150;
    $length_recentdesc = 165;
    $length_title = 25;
?>
            
            <div id="posts">
                <div class="row">
                <!-- make a default card? -->
                <?php 
                    //start for-loop to generate posts
                    for ($i = 0; $i < count($feed); $i++) {
                        
                        //special case to handle the top 2 recent posts
                        if ($i == 0 || $i == 1) {
                            echo "<div class=\"recent-card\" id=\"" . $feed[$i]['id'] . "\">
                                <div class=\"image-container\" style=\"background-image: url('".  $feed[$i]["imgs"]->item(0)->getAttribute('src') . "');\">
                                </div>
                                <div class=\"title-and-date\">
                                    <div class=\"title-container\">
                                        <span>"; 
                                    
                                    //handle the length of the title
                                    echo substr($feed[$i]['title'], 0, $length_title);
                                    //only add elipses if the title was originally too long
                                    if (strlen($feed[$i]['title']) > $length_title) {echo "...";}
                                        
                            echo "</span>
                                    </div>
                                    <div class=\"date-container\">
                                        <span>" . $feed[$i]['date'] . "</span>
                                    </div>
                                </div>
                                <div class=\"desc-container\">";  
                                    //specify the length of the excerpt and truncate appropriately
                                    $space = strpos($feed[$i]['desc'], " ", $length_recentdesc); 
                                    echo substr($feed[$i]['desc'], 0, $space) . "..."; 
                            echo "</div>
                                </div>";
                            
                            if ($i == 1) {
                                echo "</div><div id=\"home-sep\"><div><span>Older Posts</span></div> <div><hr/></div></div>
                                <div class=\"row\">
                                    
                                ";
                            }
                        } //end if
                        else {
                            //create a post card
                            echo "<div class=\"post-card\" id=\"" . $feed[$i]['id'] . "\">
                                <div class=\"date-container\">
                                    <span>" . $feed[$i]['date'] . "</span>
                                </div>
                                <div class=\"image-container\" style=\"background-image: url('".  $feed[$i]["imgs"]->item(0)->getAttribute('src') . "');\">
                                </div>
                                <div class=\"title-container\">
                                    <span>";  
                                    
                                    //handle the length of the title
                                    echo substr($feed[$i]['title'], 0, $length_title);
                                    //add elipses if the title was originally too long
                                    if (strlen($feed[$i]['title']) > $length_title) {echo "...";}
                                        
                            echo "</span>
                                </div> 
                                <div class=\"desc-container\">
                                    ";  
                                    //specify the length of the excerpt and truncate appropriately
                                    $space = strpos($feed[$i]['desc'], " ", $length_postdesc); 
                                    echo substr($feed[$i]['desc'], 0, $space) . "..."; 
                            echo "</div>
                                </div>";

                            if ($i % 4  == 1 ) { //handle the creation of rows
                                if ($i == 9) {
                                    echo "</div>";
                                }
                                else { //in the case that there are more rows to create
                                    echo "</div><div class=\"row\">";
                                }   
                            } //end if statement (61)
                        } //end else statement (45)                            
                    } //end for loop (30)
                ?> 

                </div> <!-- end of row div -->
            </div> <!-- end of posts div -->

<?php 
    include "bottom.php";
?>


<!-- 
    POST CARD HTML CODE
    <div class="post-card" id="num">
        <div class="date-container">
            <span>2.05.17</span>
        </div>
        <div class="image-container" style="background-image: url('imgurlhere');">
        </div>
        <div class="title-container">
            <span>This is an example of a title</span>
        </div>
        <div class="desc-container">
            This is a description of how the rip went. I hope you enjoyed this post as much as I did because blah blah blah blah blah blah blah blah...
        </div>
    </div>

    RECENT CARD HTML CODE
    <div class="recent-card" id="num">
        <div class="image-container" style="background-image: url('imgurlhere');">
        </div>
        <div class="title-and-date">
            <div class="title-container">
                <span>This is an example of a title</span>
            </div>
            <div class="date-container">
                <span>2.05.17</span>
            </div>
        </div>
        <div class="desc-container">
            This is a description of how the rip went. I hope you enjoyed this post as much as I did because blah blah blah blah blah blah blah blah...
        </div>
    </div>
-->