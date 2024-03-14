    $(function(){
          $("#loading").hide();
          
             $("ul#nav a").click(function(){
                pagina = "arquivos/"+$(this).attr('href')
                
                $("#loading").ajaxStart(function(){
                   $(this).show()
                   })
                $("#loading").ajaxStop(function(){
                   $(this).hide();
                   
                })
                
                $(".content").load(pagina);
                return false;
             })
    })
