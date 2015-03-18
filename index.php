<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
    <script type="text/javascript" src="Ajax.js"></script>
    <script type="text/javascript">
         function validar() {
                var usr = document.getElementById('usuario').value;
                var pass = document.getElementById('apodo').value;
 
                var cadena = "usuario=" + usr + "&apodo=" + pass;
        
        var peticion= null;
        peticion = ConstructorXMLHttpRequest();
        if(peticion){
            peticion.open('POST',"validar.php", false);
            peticion.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
           // peticion.setRequestHeader("Content-length", cadena.length);
           // peticion.setRequestHeader("Connection", "close");
            peticion.send(cadena);
            document.getElementById('respuesta').innerHTML = peticion.responseText;
        
        }
    }

    </script>
<body>
<table width="200" height="91" border="2">
<tr>
<td height="39">Email</td>
<td><label for="usuario"></label>
  <input type="text" name="usuario" id="usuario" /></td>
</tr>
<tr>
<td>Apodo</td>
<td><label for="apodo"></label>
  <input type="text" name="apodo" id="apodo" /></td>
</tr>
</table>
    <input name="verificar" value="Verificar" type="button" onclick="validar()" />
<div id="respuesta">
    
</div>
</body>
</html>
