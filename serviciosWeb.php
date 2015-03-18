<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.10.3.custom.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/redmond/jquery-ui-1.10.3.custom.min.css">

       <script type="text/javascript">

 		/*$(document).on("ready",function(){
           $("select#select_pais").on("blur", function(){
			     var valor = $("#select_pais").val();
			   $.getJSON("ciudades", function(valor){
				   $.each(valor.ciudades, function(key, value){
					   $("select#select_ciudades").append("<option>"+ value.ciudades +"</option>");
             console.log(value.ciudades);
					   });
				   });
			   console.log(valor);
			   });*/
        $(document).on("ready",function ()
        {
            $.getJSON("json", function (data)
            {
                $.each(data.paises, function (key, value)
                {
                    $("select#select_pais").append("<option>"+value.pais+"</option>"); 
                    $("ul").append("<li>"+value.pais+"</li>"); 
                    $("ul").append("<li>"+value.abrev+"</li>"); 
                          
                });
            });
          /* $.getJSON("pedro",function (data) 
            {
                $.each(data.Colombia, function (key,value) 
                {
                    $("select#select_ciudad").append("<option>"+value.nombre+"</option>");
                    
                });
                
            });*/
            $("#select_pais").on("click",function () 
            {
                 var paises = $("#select_pais").val();
                    console.log(paises);
                    var datos="data"+"."+paises;
                $.getJSON("pedro",{datos},function (data)
                {   
                   
                    $.each(datos, function  (key,value)
                    {

                        $("#select_ciudad").append("<option>"+value.nombre+"</option>");
                    });
                });
             });
        });


        
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
   <div id="midiv">
   aca hay algo
   </div>
   paises
   <select id="select_pais" name="listaPaises">
   <option>.......</option>
   </select>
   ciudad
   <select id="select_ciudad" name="listaCiudades">
   <option>.......</option>
   </select>
   <ul>
       
   </ul>
    </body>
</html>