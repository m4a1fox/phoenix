$(document).ready( function() {

    $('#container_id').fileTree({ root: '/', script: 'usefull/jqueryFileTree/connectors/jqueryFileTree.php' }, function(file) {
        


    $.ajax({
      type: "POST",
      url: "file.php",
      data: "name="+file,
      success: function(data){
        $("#file").text(data)
      }
    });
        
        

        
    });

}); 