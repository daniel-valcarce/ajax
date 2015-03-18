<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript">
           $(document).on('ready',function(){
                corporatedata();
            });
            function corporatedata(){
              $.ajax({ url:"Paises.xml", dataType:"xml", success: function(data){
                      $('ul').children().remove();
                      $(data).find('pais').each(function(){
                        var info= "<li>id="+ $(this).find('id').text() + " del pais " + $(this).find('nombre_pais').text()+'</li>';   
                        $('ul').append(info);
                      });
                  }
              });  
                
            }
        </script>
        <title>PAgWEbJavaJs</title>
    </head>
    <body>
        aca hay algo por lo menos
        y otra cosa mas
        
        <ul></ul>
    </body>
</html>
