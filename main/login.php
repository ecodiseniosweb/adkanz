<?php
session_start();

if(isset($_SESSION['admin'])){
    header('Location: intranet.php');
}

$errores = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario = filter_var(strtolower($_POST['user']), FILTER_SANITIZE_STRING);
    $password = $_POST['pass'];
    $password = hash('sha512', $password);
        try{
            $conectar = new PDO('mysql:host=mysql.webcindario.com;dbname=adkanz;', 'adkanz', 'Newuser01');
        } catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }
    
        
    
       $statement = $conectar->prepare(
           'SELECT * FROM admins WHERE user = :usuario AND pass = :password');
       $statement->execute(array(
           ':usuario' => $usuario,
           ':password' => $password
        ));
       $resultado = $statement->fetch();

       if($resultado != false){
           $_SESSION['usuario'] = $usuario;
           
             header('location: intranet.php');
       } else {
           $errores .= '<p class="h6">Datos Incorrectos</p>';

       }
   
}

require '../visual/loginview.php';
?>