$(document).ready(function(){
    
    
    
    $.ajax({
        type: 'POST',
        url: 'usefull/fima/home.php',
        data: {dir: '/application/'},
        success: function(data){
            $("#files").html(data)
            
            $("#files ul li").each(function(){
                $(this).click(function(){
                    var folder = $(this).children('a').text()
                    $.ajax({
                        type: "POST",
                        url: "usefull/fima/home.php",
                        data: {dir: '/application/'+folder+'/'},
                        success: function(data){
                            console.log(data)
                        }
                        
                        
                        
                    })
                })
            })
        }
        
        
        
        
    })
    
    
    
    
    
    
    
    
})