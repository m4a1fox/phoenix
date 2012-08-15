$(document).ready(function(){
    $("#article").hide();
    $("#show-article").css('cursor', 'pointer').toggle(function(){
        $("#article").slideToggle('slow');
        
    }, function(){
        $("#article").hide('slow');
    })
    
})