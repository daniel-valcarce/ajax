<?php
class conexion{
    
    public function Conectar(){
        $host="localhost";
        $dbname="sena";
        $user="senasoft";
        $password="senasoft";
        
        return $pdo= new PDO("mysql:host=$host; dbname=$dbname", $user, $password);
    }
    public function conectabase(){
        $conectar= new conexion();
      return $conectabase=$conectar->Conectar();
    }
}
$conectare= new conexion();
$conectar= $conectare->conectabase();
$email=$_POST['usuario'];
$apodo=$_POST['apodo'];
     $sql="SELECT * FROM usuario WHERE email='$email' and apodo='$apodo' ";
     $consulta=$conectar->prepare($sql);
     $consulta->execute();
     $resul=$consulta->rowCount();
     if($resul===1){
       echo "Muy bien ya te registraste";
         
         
       
     }
     else{
        echo "Lamentablemente no estas registrado";
        
        
     }
      
    
