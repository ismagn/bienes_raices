
$(document).ready(function(){
    $("#boton_menu").click(function() {
        $("#menu").toggle(300);
        });
    
        const prefiereDarkMode = window.matchMedia('(prefers-color-scheme: dark)');
        if(prefiereDarkMode.matches){
            $("body").addClass("dark-mode");
        }
        
        $("#dark").click(function(){
            $("body").toggleClass("dark-mode");
            
        });

});


