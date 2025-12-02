<?php

namespace App\Controller;

use App\Interface\ControllerInterface;
use App\Model\UserModel;
use Respect\Validation\Validator as v;
use App\Class\User;

class UserController implements ControllerInterface
{

    function index()
    {
        $usuarios = UserModel::getAllUsers();
        include_once DIRECTORIO_BACKEND_USER."allusers.php";
    }

    function show($id)
    {
        if(isset($_SESSION['username'])){
            //Muestro la vista con los datos del usuario
        }else{
            //Muestro una vista de no se puede acceder a estos datos
        }
        return "Estos son los usuarios del usuario $id";
    }

    function store()
    {
        $resultado = User::validateUserCreation($_POST);

        if(is_array($resultado)){
            //datos erroneos
            include_once DIRECTORIO_VISTAS_BACKEND."/User/createUser.php";
        }else{
            $resultado->setPassword(password_hash($resultado->getPassword(), PASSWORD_DEFAULT));
            UserModel::saveUser($resultado);
        }


        /*$usuario = User::validateUserCreation($_POST);

        //Almacenar en la base de datos

        $_SESSION['username'] = $usuario->getUsername();
        $_SESSION['uuid'] = $usuario->getUuid();
        $_SESSION['password'] = $usuario->getPassword();
        $_SESSION['email'] = $usuario->getEmail();
        $_SESSION['edad'] = $usuario->getEdad();
        $_SESSION['type'] = $usuario->getType()->name;



        if($_SESSION['type']=="ADMIN"){
            include_once "app/Views/backend/userpanel.php";
        }elseif($usuario->getType()->name=="ANUNCIOS"){
            include_once "app/Views/backend/userpanel.php";
        }elseif($usuario->getType()->name=="NORMAL"){
            include_once "app/Views/backend/userpanel.php";
        }else{
            echo "Eres no lo se :(";
        }*/
    }

    function update($id)
    {
        //Leo del fichero input los datos que me han llegado en la petición PUT
        parse_str(file_get_contents("php://input"),$editData);
        //Añado el uuid a los datos que me han llegado a la petición pUT
        $editData['uuid']=$id;
        //Valido los datos que me han llegado en la petición PUT
        $usuario = User::validateUserEdit($editData);

        //TODO guardo el usuario actualizado en la base de datos

        //Muestro los datos del usuario a los errores de la petición si los hay
        var_dump($usuario);

    }

    function destroy($id)
    {
        // TODO: Implement destroy() method.
    }

    function create()
    {
        include_once "app/Views/backend/create.php";
    }

    function edit($id)
    {
        // Recuperar los datos de un usuario del Modelo
        $usuario = UserModel::getUserById($id);

        //Llamar a la vista que me muestre los datos del usuario
        include_once DIRECTORIO_VISTAS_BACKEND."User/editUser.php";

    }

    function verify(){
    var_dump($_SESSION);
        if(isset($_SESSION['usuario']) && isset($_POST['username'], $_POST['password'])) {
            $usuario = $_SESSION['usuario'];
            $hash=password_hash($usuario->getPassword(), PASSWORD_DEFAULT);

            if($usuario->getUsername() === $_POST['username'] && password_verify($_POST['password'], $hash)){
                echo "Login correcto.";
            } else{
                echo "ERROR, no se ha podido iniciar sesión, ha ocurrido con el usuario o la contraseña.";
                /*<a class="logib-btn" href="/login">Volver a iniciar sesión</a>*/

            }


        }else{
            echo "Datos incorrectos. Porfavor, vuelva a intentar.";
        }
    }

    function logout() {
        include_once "app/Views/backend/logout.php";
        session_destroy();
    }

    function show_login(){
        include_once "app/Views/backend/login.php";
    }


}