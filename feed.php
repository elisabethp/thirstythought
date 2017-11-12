<?php 
    
    $rss = new DOMDocument();
	$rss->load('http://www.kryzuy.com/feed/');
	$feed = array();
    
    //looks for all the <item> elements in the feed
    foreach ($rss->getElementsByTagName('item') as $node) {
        //pull the images from the feed by extracting the desription        
        //get all the image elements on the page
        $content = $node->getElementsByTagName('encoded')->item(0)->nodeValue;
        $get_content = new DOMDocument();
        $internalErrors = libxml_use_internal_errors(true);
        $get_content->loadHTML($content);
        $img_list = $get_content->getElementsByTagName('img');   
        
        //removing various post text styles
        $content = preg_replace("/<img[^>]+class[^>]+align[^>]+>/", '', $content);
        $content = preg_replace("/class=\"wp-smiley\"[^>]+\>/i", " ", $content);
        $content = preg_replace("/<em>/", " ", $content);
        $content = preg_replace("/<em/", " ", $content);
        $content = preg_replace("/<h5 style=/", '<h5 style="align-left" ', $content);
        
        //put images in array (not emojis)
        $post_images = array();
        for ($i = 0; $i < $img_list->length; $i++) {
            if ($img_list->item($i)->getAttribute('class') != "wp-smiley") {
                array_push($post_images, $img_list->item($i)->getAttribute('src'));
            }
        }
        
        $item = array ( 
			'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
			'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
			'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
			'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
            'imgs' => $post_images,
            'id' => $node->getElementsByTagName('guid')->item(0)->nodeValue,
            'content' => $content
        );
                
        //get rid of the uneccessary info in the date
        $index_colon = strpos($item['date'], ":");
        $item['date'] = substr($item['date'], 0, $index_colon-2);
		
        //remove the "read more" text
        $index_readmore = strpos($item['desc'], "Read More");
        $item['desc'] = substr($item['desc'], 0, $index_readmore);
        
        //extract the unique id
        $index_equals = strpos($item['id'], "=");
        $item['id'] = substr($item['id'], $index_equals+1, strlen($item['id']) - 1);
        
        array_push($feed, $item);
        
	}
   
?>