$(document).ready(function(){
    $("#article").hide();
    $("#show-article").css('cursor', 'pointer').click(function(){
        $("#article").slideToggle('slow');
    })
    
    $("input[name='link']").focus(function(){
        var text = $("input[name='title']").val().toLowerCase();
        $(this).val(toTranslit(text));
    })
})