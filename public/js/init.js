$(document).ready(function(){
    var currentMenu = $('#menu a[href="' + currentUrl + '"]');
    var search_text = $("#search-form input[type=text]");
    var search_btn = $("#searchBtn");

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
    
    $("code").css({'width': codeWidth, 'height': codeHeight, 'position': 'absolute'})
      
      

    
    
    
    
})