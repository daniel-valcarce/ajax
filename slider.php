<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    
        <title>Estadísticas SENA-SOFT</title>
    
<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>

<script type="text/javascript" src="http://malsup.github.io/jquery.cycle.all.js"></script>
        <script type="text/javascript">
           $(document).on('ready',function(){
            $("#sliderr").cycle();
             //   $("#sliderr div:gt(0)").hide();
               // setInterval(function(){
                 //   $("#sliderr div:first-child").next().fadeToggle(1500).fadeIn().end().appendTo("#sliderr");},5000);
                
            });
        </script>
<style>
body
        {
              background: #2d2d2d;
        }
    body section{
                    width: 960px;
                  position: relative;;

                    margin-left: auto;
                    margin-right: auto;
                    }
    header 
            {
            width: 960px;
               margin-top: 10px;
            position: relative;
            height: 170px;
            margin-right: auto;
            margin-left: auto;
            background: #ffffff;
            text-align: left;
            }
            header section p{
                font-size: 80px;
                margin: 0;
            }
            
          .contenido{
                    -webkit-border-radius: 10px;
                    -moz-border-radius: 5px;
                    -o-border-radius: 5px;
                    background: #000;

                    padding-right: 15px;
                    padding-bottom: 15px;
                    padding-left: 15px;
                    padding-top: 15px;
                    width: 650px;
                    height: 400px;
                    margin-right:auto;
                    margin-left:auto;
                    margin-top: 10px; 
                    }
       #sliderr{
                width: auto;
                height:100%;
                background: #ffffff;
                    overflow: hidden;           }

</style>

    </head>


    <body>

            <header>
            <section><p>Mi Nuevo Slider</p></section>
            </header>
            <section class="contenido">
            <div id="sliderr">
            <div><a><img src="/ajax/imagenes/1.jpg"></a></div>
            <div><a><img src="/ajax/imagenes/2.jpg"></a></div>
            <div></a><img src="/ajax/imagenes/3.jpg"></a></div>
            <div></a><img src="/ajax/imagenes/4.jpg"></a></div>
            <div></a><img src="/ajax/imagenes/5.jpg"></a></div>
            </div>

        </section>
    </body>
</html>
