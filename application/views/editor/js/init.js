$(document).ready( function() {

    $('#container_id').fileTree({ root: '/application/', script: 'usefull/jqueryFileTree/connectors/jqueryFileTree.php' }, function(file) {
        

    
    $("#fima name").text('Edit:')
    $.ajax({
        type: "POST",
        url: "/usefull/file.php",
        data: "name="+file,
        success: function(data){
            $("#fima close").css('visibility', 'visible');
            $("#file").css('display', 'block').val(data)
            

        }
        
        
        
        
        
        
        
        
        
    });

    
    
    $("#fima name").append(' <span>'+file+'</span>')

   
    });

    $("#fima save").click(function(){
        var text = $("#file").val();
        var file = $("#fima name > span").text()
        $.ajax({
        type: "POST",
        url: "/usefull/file.php",
        data: {text: text, file: file}, 
        success: function(data){
            alert(data)
            }
        });
    })
    
    $("#file").live('keydown', function(e) {
        $("#fima save, close").css('visibility', 'visible');

        var keyCode = e.keyCode || e.which; 



        if (keyCode == 9) {
            var myValue = "\t";
            var startPos = this.selectionStart;
            var endPos = this.selectionEnd;
            var scrollTop = this.scrollTop;
            this.value = this.value.substring(0, startPos) + myValue + this.value.substring(endPos,this.value.length);
            this.focus();
            this.selectionStart = startPos + myValue.length;
            this.selectionEnd = startPos + myValue.length;
            this.scrollTop = scrollTop;
            e.preventDefault(); 
        }
    });
    
    
    $("#fima close").click(function(){
        var yes = confirm("Close file?");
        if(yes){
            $("#file").hide()
            $(this).removeAttr('style');
            $("#fima save").removeAttr('style');
            $("#fima name").text('Edit:')
        }
    })


}); 