<?php
$titulo="Añadir pelicula";
include_once("template/head.php");
include_once("template/hamburger.php");
include_once("template/header.php");
$tituloSeccion = "Añadir pelicula";
?>

<form action='/pelicula' method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="FormControlInputTitulo" class="form-label">Titulo</label>
        <input type="text" class="form-control" name="titulo" id="FormControlInputTitulo" placeholder="Introduce el título">
    </div>
    <div class="mb-3">
        <label for="FormControlInputFecha" class="form-label">Fecha de estreno</label>
        <input type="date" class="form-control" name="fecha_estreno" id="FormControlInputFecha" >
    </div>
    <div class="mb-3">
        <label for="FormControlSelectGenero" class="form-label">Género</label>
        <select class="form-select" name="genero" id="FormControlSelectGenero" aria-label="Default select example">
            <option selected value="accion">Acción</option>
            <option value="drama">Drama</option>
            <option value="comedia">Comedia</option>
            <option value="slasher">Slasher</option>
        </select>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
            Default checkbox
        </label>
    </div>
    <div class="mb-3">
        <fieldset name="idiomas">
            <legend>Lenguajes Disponibles</legend>
            <div class="form-check">
                <input class="form-check-input" name="idiomaEspanyol" type="checkbox" value="espanyol" id="flexCheckChecked" checked>
                <label class="form-check-label" for="CheckEspanyol">
                    Español
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="idiomaIngles" type="checkbox" value="ingles" id="flexCheckChecked" checked>
                <label class="form-check-label" for="CheckIngles">
                    Ingles
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="idiomaFrances" type="checkbox" value="frances" id="flexCheckChecked" checked>
                <label class="form-check-label" for="CheckFrances">
                    Frances
                </label>
            </div>
        </fieldset>
    </div>

    <div class="mb-3">
        <label class="form-label" for="FormControlInputPoster">Poster de la película</label>
        <input type="file" name="poster" id="FormControlInputPoster"
    </div>

    <div class="mb-3">
        <input type="submit" value="Enviar">
    </div>

</form>

<?php
include_once("template/footer.php");