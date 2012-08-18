$(document).ready( function() {

    $('#container_id').fileTree({ root: '/application/', script: 'usefull/jqueryFileTree/connectors/jqueryFileTree.php' }, function(file) {
    
    console.log(1)
    
    $("#fima name").text('FIMA')
    $.ajax({
        type: "POST",
        url: "file.php",
        data: "name="+file,
        success: function(data){
            $("#file").css('display', 'block').val(data)
        }
    });
    
    $("#fima name").append(' <span>'+file+'</span>')

    $("#fima name").hover(function(){
        $("#fima save, delete").css('visibility', 'visible')
    })


        
    });
    
    $("#fima save").click(function(){
        var text = $("#file").val();
        var file = $("#fima name > span").text()
        $.ajax({
        type: "POST",
        url: "file.php",
        data: {text: text, file: file}, 
        success: function(data){
            console.log(data)
            }
        });
        
        
        
        
        
    })

}); 