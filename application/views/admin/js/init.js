$(document).ready(function(){
    $("#article").hide();
    $("#show-article").css('cursor', 'pointer').click(function(){
        $("#article").slideToggle('slow');
    })
    
    $("input[name='link']").focus(function(){
        var text = $("input[name='title']").val().toLowerCase();
        $(this).val(toTranslit(text));
    })
var oFCKeditor = new FCKeditor('text',/*id block*/ '460px'/*width*/, '300px'/*height*/, 'Basic'/*toolbar Set*/, ''/*value*/, 'usefull'/*path to folder with fckedit*/);
oFCKeditor.ReplaceTextarea();
})