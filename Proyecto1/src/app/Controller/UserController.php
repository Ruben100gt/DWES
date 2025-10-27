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
        //include_once DIRECTORIO_VISTAS_ADMINISTRACION."allusers.php";
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
        $usuario = User::validateUserCreation($_POST);

        //Almacenar en la base de datos

        $_SESSION['usuario'] = $usuario->getUsername();
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
        }
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
        // TODO: Implement edit() method.
    }

    function verify(){
        /*$_POST['username'];
        $_POST['password'];*/

        $hash=password_hash($_POST['password'],PASSWORD_DEFAULT);

        password_verify($_POST['password'], $hash);

        var_dump($_POST);
        $idUsuario="706fd07e-d403-45bb-8a79-aca9886aae1d";

        //Peticion a la base de datos para comprobar si el usuario existe

        //Si es correcto el login
        $_SESSION['username']=$_POST['username'];
        $_SESSION['uuid']=$idUsuario;

        var_dump($_SESSION);
    }

    function logout() {
        session_destroy();
    }

    function show_login(){
        include_once "app/Views/backend/login.php";
    }


}