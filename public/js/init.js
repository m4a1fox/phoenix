$(document).ready(function(){
    var currentMenu = $('#menu a[href="' + currentUrl + '"]');
    var search_text = $("#search-form input[type=text]");
    var search_btn = $("#searchBtn");
    
    $("#chat-bubble").infoBar();
    
    
    $(currentMenu).addClass('selected-menu');


    	$(search_text).keyup(function(){
            if($(this).val().length > 0){
                $(search_btn).css({'visibility': 'visible', 'cursor': 'pointer'});	
            }else{
                $(search_btn).css({'visibility': 'hidden'});
            }
        })


    $(search_btn).click(function(){
        $(this).val();
        $(search_btn).css({'visibility': 'hidden', 'cursor': 'pointer'});
    })
    
    
    $('code > span > span').css({'color': 'white'});
    $("#code > code").css({'margin': '10px 40px'});
      
    var codeWidth = $("#code").width()
    var codeHeight = $("#code").height()
    
    $("code").css({'width': codeWidth, 'height': codeHeight, 'position': 'absolute'});
    $('#footer a[href="'+ currentUrl +'"]').css({'background': 'wheat', 'color': 'black'})
    
});

(function($){

    
    $.fn.infoBar = function(option) {
        
        
        var speed = option != undefined && option.slideDownSpeed != undefined ? option.slideDownSpeed : 100;
        var showTimeout = option != undefined && option.showTimeout != undefined ? option.showTimeout : 100;
        
       
        
        var id = $(this).attr('id')
        var title = $(this).attr('title');
        var block = $('body').find('.'+id)
        var w = $(this).offset();
 
        var arrow = '<div class="chat-bubble-arrow-border-bottom"></div>';
        var arrowBg = '<div class="chat-bubble-arrow-bottom"></div>';

        
        
        $(this).hover(function(){
            setTimeout(function(){
                block.css({'left': w.left, 'top': w.top-25})
                block.slideDown(speed);
                block.html(title+arrow+arrowBg);
            }, showTimeout)
        }, function(){
            block.slideUp(100);
            $(this).attr('title', block.text());
        });
 
  };



    
})(jQuery)