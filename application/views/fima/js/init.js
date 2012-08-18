$(document).ready(function(){
    
    
    
    $.ajax({
        type: 'POST',
        url: 'usefull/fima/home.php',
        data: {dir: '/application/'},
        success: function(data){
            $("#files").html(data)
        }
        
        
        
        
    })
    
    
    
})