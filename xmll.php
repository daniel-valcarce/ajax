<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    
        <title>Estadísticas SENA-SOFT</title>
    
<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.10.3.custom.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery-ui-1.10.3.custom.min.css" />
        <script type="text/javascript">
        var seleccion;
           $(document).on('ready',function(){
            $("#titulo1").dialog();

            $("#boton_pais, #dias").button();
                corporatedata();
                $("#boton_pais").on("click", function(){
            medallas();
                });

                $("#Select_Pais_Dep").on("change", function(){

                        deporte_pais_anio();
                });
                    $("#dias").on("click", function(){
                            MostrarDias();
                    });

            });
            function medallas(){
            var seleccion= $("#paises option:selected").attr("id");
            console.log(seleccion);
             $("#medallas_juegos_olimpicos").empty();
    $.ajax({
url:"phpxml.php",  
type:"POST",
dataType:"json",
data:{selec:seleccion},
success: function(resp){
    console.log(resp);
    elem= resp.length;
    console.log(elem);

     for(var x=0; x<elem; x=x ){
    var tabla ="<tr>"+"<td>"+resp[x]+"</td>"+"<td>"+resp[x+1]+"</td>"+"<td>"+resp[x+2]+"</td>"+"<td>"+resp[x+1]+"</td>"+"<td>"+resp[x+3]+"</td>"+"<td>"+resp[x+1]+"</td>"+"</tr>";
    $("#medallas_juegos_olimpicos").append(tabla);
    var m =x+4;
    x=m;
    }
    },  
error: function(jqxhr,status,error){
    },  
    timeout:10000
        });
}
            function corporatedata(){
              $.ajax({ url:"Paises.xml", dataType:"xml", success: function(data){
                      $(data).find('pais').each(function(){
                        var idPais='"'+ $(this).find("id").text() + '"';
                        var info= "<option id="+idPais+">"+$(this).find('nombre_pais').text()+"</option>";   
                        $('#paises, #Select_Pais_Dep').append(info);
                        
                      });
                  }
              });  
              
            }
            function deporte_pais_anio(){

             $("#Select_deporte").empty();
             var pais_selec=$("#Select_Pais_Dep option:selected").attr("id");
             console.log(pais_selec);
    $.ajax({
url:"servicioDesem.php",  
type:"POST",
dataType:"json",
data:{pais:pais_selec},
success: function(dep){
    console.log(dep);
    elem= dep.length;
    console.log(elem);
     for(var l=0; l<elem; l=l ){
    var deportess ="<option value="+dep[l+2]+" id="+dep[l]+">"+dep[l+1]+"/ "+dep[l]+"</option>";
    $("#Select_deporte").append(deportess);
    var k=l+3;
    l=k;
    }
    },  
error: function(jqxhr,status,error){
    },  
    timeout:10000
        });

            }

function MostrarDias(){
    $("#datos_desem").empty();
    var pais = $("#Select_Pais_Dep option:selected").attr("id");
    var anio = $("#Select_deporte option:selected").attr("id");
    var deporte =$("#Select_deporte option:selected").attr("value"); 
    console.log(pais);
    console.log(anio);
    console.log(deporte);


$.ajax({
url:"servicioDesem.php",  
type:"POST",
dataType:"json",
data:{deporte_desem:deporte, anio:anio, pais_desem:pais},
success: function(dep){
    console.log(dep);
    var este=((dep[0])/10);
    console.log(este);
    elem= dep.length;
    console.log(elem);
    var deportess="<tr><td>Dia 1</td><td>"+dep[0]+"</td><td>"+dep[0]+"</td><tr><tr><td>Dia 2</td><td>"+dep[1]+"</td><td>"+dep[1]+"</td><tr><tr><td>Dia 3</td><td>"+dep[2]+"</td><td>"+dep[2]+"</td><tr><tr><td>Dia 4</td><td>"+dep[3]+"</td><td>"+dep[3]+"</td><tr>";
    $("#datos_desem").append(deportess);
    
    },  
error: function(jqxhr,status,error){
    },  
    timeout:10000
        });

}

        </script>


    </head>


    <body>
        <h1 id="titulo1">Estadísticas SENA-SOFT</h1>
        <div id="MedalsPerTrade">
            <h2>Medallas en los Juegos Olímpicos</h2>
            <form action="" method="POST" name="medals">
                <select id="paises">
                    <option value="">Seleccione un país</option>
                </select>
                <button type="button" id="boton_pais" name="showMedals">Mostrar</button>
            </form>
            <table border="1" align="left" summary="Seleccione el País con el dropdown o desplegable que se encuentra en la parte superior">
                <caption style="visibility:hidden">
                    Medallas en los juegos Olímpicos
                </caption>
                <thead>
                    <tr bgcolor="#CCCCCC">
                        <th>Año</th>
                        <th>Oro</th>
                        <th>Plata</th>
                        <th>Bronce</th>
                        <th>Medallón de Excelencia</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody id="medallas_juegos_olimpicos">
                    
                </tbody>
            </table>
        </div>

        <br clear="all">

        <div id="PerformancePerDay">
            <h2>Rendimiento sobre los días</h2>
            <form action="" method="get" name="performance">
                <select id="Select_Pais_Dep">
                    <option value="">Seleccione un País</option>
                </select>
                <select id="Select_deporte">
                   <option>Seleccione un deporte</option>
                </select>

                </select>
                <button type="button" id="dias" name="showPerformance">Mostrar</button>
            </form>
            <!--<img src="CompetitorPerformance.png" alt="Diagram shows the performance of the competitors over the four competition days - Select the trade and competition/year with the dropdown above" style="margin-top:10px">-->
            <br>
            <table border="3">
                <thead>
                    <tr bgcolor="#CCCCCC">
                        <th>
                            Día
                        </th>
                        <th>
                            Puntaje
                        </th>
                        <th>
                            Porcentaje
                        </th>
                    </tr>
                </thead>
                <tbody id="datos_desem">
                    
                </tbody>
                <tfoot>
                    <tr bgcolor="#EEEEEE">
                        <td>
                            Total
                        </td>
                        <td>
                            73
                        </td>
                        <td>
                            30%
                        </td>

                    </tr> 
                </tfoot>
            </table> 
        </div>
   
    </body>
</html>

