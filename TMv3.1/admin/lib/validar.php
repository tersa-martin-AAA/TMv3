   <?php
    session_start();
    include_once 'Usuario.php';
    
    //Calse objeto = new Clase()
    //instanciar objetos de la clase Usuario
    
    $usu1 = new Usuario();
    
    $username = $_POST['nombre'];
    $password = $_POST['pass'];
    
    $usuario = $usu1->login_user($username, $password);
    
    if($usuario == TRUE){
        $_SESSION['login']="algo";
        header("Location: ../index.php");
    }else{
        $_SESSION['login']="algo";
        header("Location: ../../login.php");
    }