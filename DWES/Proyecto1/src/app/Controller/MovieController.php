<?php

namespace App\Controller;

use App\Interface\ControllerInterface;

class MovieController implements ControllerInterface
{

    function index()
    {
        // TODO: Implement index() method.
    }

    function show($id)
    {
        // TODO: Implement show() method.
    }

    function store()
    {
        // TODO: Implement store() method.
    }

    function update($id)
    {
        // TODO: Implement update() method.
    }

    function destroy($id)
    {
        // TODO: Implement destroy() method.
    }

    function create()
    {
        include_once DIRECTORIO_VISTAS_ADMINISTRACION."add-pelicula.php";
    }

    function edit($id)
    {
        // TODO: Implement edit() method.
    }
}