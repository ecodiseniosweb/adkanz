<?php
session_start();
$usuario = $_SESSION['usuario'];
if(isset($_SESSION['usuario'])) {
    require '../visual/include/header.php';
    require '../visual/include/menu.php';
    require '../visual/include/aside.php';
?>
<?php 
try{
    $conectar = new PDO('mysql:host=mysql.webcindario.com;dbname=adkanz;', 'adkanz', 'Newuser01');
} catch(PDOExeption $e){
    echo 'Error:'. $e->getmessage();
}
$statement = $conectar->prepare(
    'SELECT * FROM admins WHERE user = :usuario' 
);
$statement->execute(array(
    ':usuario' => $usuario
));
$resultado = $statement->fetch();
switch ($resultado['aut'])
{

case 1:
?>
    <section class="main">
	
        <h1>Menu de Instructores</h1>

        <article>
        
            <h2>Selecciona del menu</h2>
            <div class="col-md-6 offset-4 intranet">
        
                <ul>
                    <li><a href="#">Registrar Contratos en Linea</a></li>
                    <li><a href="#">Consultar Calendario de Actividades</a></li>
                </ul>
                <br><br><br>
            </div>
            <h2> En Caso de Falla de Contratos en linea</h2>
            <div class="col-md-6 offset-4">
                <ul>
                    <li><a href="#" target="_blank">Imprimir Contrato ADKANZ</a></li>
                    <li><a href="#" target="_blank">Imprimir Contrato Criadero Azteca</a></li>
                    <li><a href="#" target="_blank">Consejos</a></li>
                </ul>
            </div>
        
    </article>

	</section>

<?php 
break;

case 9:
?>

   <section class="main">
	<div class="usuario">
        <p class="h4 offset-9 text-light" style="padding: 15px 0;"> Bienvenido: <?php echo strtoupper($usuario); ?></p>
        <a class="offset-9 text-light" href="logout.php">Cerrar Sesion</a></p>
    </div>
    <h1>Menu de Administradores</h1>

    <article>
        
        <h2>Selecciona del menu</h2>
        <div class="col-md-6 offset-4 intranet">
        
            <ul>
                <li><a href="#">Registrar Contratos en Linea</a></li>
                <li><a href="#">Consultar Calendario de Actividades</a></li>
            </ul>
            <br><br><br>
        </div>
        <h2> En Caso de Falla de Contratos en linea</h2>
        <div class="col-md-6 offset-4 intranet">
            <ul>
                <li><a href="#" target="_blank">Imprimir Contrato ADKANZ</a></li>
                <li><a href="#" target="_blank">Imprimir Contrato Criadero Azteca</a></li>
                <li><a href="#" target="_blank">Consejos</a></li>
            </ul>
        </div>
        
    </article>

	</section>

<?php 
break;
case 2:
?>

<h1>Hola Mundo 2</h1>
<?php 
break;
}
?>
<?php    
    require '../visual/include/footer.php';
} else {
    header('location: login.php');
}

?>