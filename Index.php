<?php
    include_once 'includes/user.php';
    include_once 'includes/user_session.php';


    $userSession = new UserSession();
    $user = new User();

    if(isset($_SESSION['user'])){
        //echo "hay sesion";
        $user->setUser($userSession->getCurrentUser());
        include_once 'home.php';

    }   else if(isset($_POST['inputUser']) && isset($_POST['inputPassword'])){
        
            $userForm = $_POST['inputUser'];
            $passForm = $_POST['inputPassword'];

            $user = new User();
            if($user->userExists($userForm, $passForm)){
                //echo "Existe el usuario";
                $userSession->setCurrentUser($userForm);
                $user->setUser($userForm);

                include_once 'home.php';
            }else{
                //echo "No existe el usuario";
                $errorLogin = "Nombre de usuario y/o password incorrecto";
                include_once 'login.php';
            }
    }else{
        //echo "login";
        include_once 'login.php';
    }

?>