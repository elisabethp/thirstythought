$(document).ready(function() {
    
    $('#logo-container img').click(function() {
        window.location = './';
    });
    
    $('.recent-card, .post-card').click(function() {
        window.location = '/post.php?id=' + $(this).attr('id');
    });
    
    $('#resp-menu').click(function() {
        $('#resp-menu-options').slideToggle("slow", function() {
            if ($(this).is(':visible')) {
                $('#resp-menu-options').css("display", "flex");
            }
            else {
                $('#resp-menu-options').css("display", "none");
            }
        });
    });
    
    $( "#post-desc hr" ).remove();
    
    /*$('.post-card, .recent-card').hover(function() {
        $('.image-container', this).css('filter', 'blur(1px)');
    }, 
                                        function() {
        $('.image-container', this).css('filter', 'blur(0)');
    });*/
    
    var gallery = $('#image-gallery').masonry({
      // options
      itemSelector: '.gallery-item',
      //columnWidth:  $('#image-gallery').width() / 16
    });
    
    $(gallery).imagesLoaded().progress( function() {
      $(gallery).masonry('layout');
    });
    
    $(window).resize(function() {
        //$('#image-gallery').masonry('option', {
        //columnWidth:  $('#image-gallery').width() / 4 
       //}); 
        $('#resp-menu-options').css('display', 'none');
    });
    
    $('iframe').appendTo($('#video'));
    $('iframe').wrap("<div class='video-wrapper'></div>");

    if ($('#video').children().length > 0) {
        $('#gallery').css('margin-top', "5%");
        $('#image-gallery').css('height', "1px");
    }
    

});