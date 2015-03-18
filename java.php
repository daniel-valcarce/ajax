<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.10.3.custom.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/redmond/jquery-ui-1.10.3.custom.min.css">
        <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
       <script type="text/javascript">
       console.log($.support);
       var midiv;
 		$(document).on("ready",function(){
 			 $("#draggable p").draggable();
             $("#draggable li").button();
             $("#pinchar").button();
             $("#pinchar").delay(2000).slideUp().delay(2000).slideDown();
             $(".midiv").on({
                "mouseover":function(){
                    midiv= $(this).css("background");
                    $(this).css("background","blue");
                },
                "mouseout":function(){
                    $(this).css("background",midiv);
                }
             });
             
             $("#element").on("click",function(e){
                
                e.preventDefault();
                var link =$(this).attr("href");
                alert("esta saliendo  de la pagina");
               location.href=link; 

             });  

            var calendario= $("#draggable").datepicker();
            calendario.draggable();

        $("#pinchar").on("click",ordenar);
     	 });
        function ordenar(){
            $("ul#miul li").each(function(index,elemento){
                console.log($.data(elemento,"posicion", index));
             // console.log("Este elemento del index  "+ index + "  tiene  " + $(elemento).text());  
            })
            var element = $("#uno").siblings().text();
                var nuevo_e=$("<p>Hola Mundo</p>");
                console.log(element);
            $("#draggable").before(nuevo_e);
           $("#draggable ul li:first").appendTo("ul:first");  
        }
       </script>
       <style type="text/css">
       .midiv{
        width:200px;
        height:200px;
        background:red;

       }
       </style>
    
        <title>PAgWEbJavaJs</title>
    </head>
    <body>
    <div class="midiv"> </div>
    <p id="element"><a href="index.php">REdireccionar</a></p>
    <div id="draggable" class="ui-widget-content">
    <p>¡Arrástrame!</p>
    <p id="pinchar">Pinchame</p>
    <ul id="miul">
        <li id="uno">uno</li>
        <li id="dos">dos</li>
        <li id="tres">tres</li>
        <li id="cuatro">cuatro</li>
    </ul>
    <ul id="otroul">Soy el siguiente</ul>
</div>
    </body>
</html>