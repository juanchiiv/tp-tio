<?php
require_once "matematica.php";

function mostrarHeader() {
    $contenido = '<head>
    <meta charset="UTF-8">
    <!-- CSS only -->
    <link href="'.BASE_URL.'css/bootstrap.min.css" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
    <script src="'.BASE_URL.'js/bootstrap.bundle.min.js"></script>
    
    </head>';
    return $contenido;
}

function mostrarNav() {
    $contenido = '<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="home">Calculadora</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pi">Pi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="acerca">Acerca de</a>
        </li>
    </ul>
</nav>';
    return $contenido;
}

function home() {
    $contenido = '<!DOCTYPE html>
    <html>'.mostrarHeader().'
    <body>
        <div class="container">
            '.mostrarNav().'
            <form action="" method="GET" id="formulario">
    
                <label class="form-label"> Ingrese X: </label>
                <input class="form-control" type="text" name="operadorX" required>
    
                <label class="form-label"> Ingrese Y: </label>
                <input type="text" class="form-control" name="operadorY" required>
    
                <label class="form-label"> Operación </label>
                <select name="operacion" class="form-control">
                    <option selected> -- Seleccione --</option>
                    <option value="suma">Sumar</option>
                    <option value="resta">Restar</option>
                    <option value="dividir">Dividir</option>
                    <option value="multiplicar">Multiplicar</option>
                </select>
    
                <input type="submit" value="Calcular">
            </form>
            
            <div id="resultado">
            </div>
        </div>
        <script src="'.BASE_URL.'js/main.js"></script>
    </body>
    
    </html>';


    echo $contenido;

}

function acerca() {
    $contenido = '<!DOCTYPE html>
    <html>'.mostrarHeader().'
    <body>
        <div class="container">
        '.mostrarNav().'
            <h1>Acerca de</h1>
            <p>Alumnos de TUDAI Lobería 2022</p>
        </div>
    </body>
    
    </html>';

    echo $contenido;

}

function mostrarPi() {
    
    $pi = valorPi();

    $contenido = '<!DOCTYPE html>
    <html>'.mostrarHeader().'
    <body>
        <div class="container">
        '.mostrarNav().'
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1>Valor de PI</h1>
                    <p>El valor de Pi es '.$pi.'</p>
                </div>
            </div>
        </div>
    </body>
    
    </html>';

    echo $contenido;
}

function mostrarResultado($resultado) {
    $contenido = '<!DOCTYPE html>
    <html>'.mostrarHeader().'
    <body>
        <div class="container">
            '.mostrarNav().'
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1>Resultado</h1>
                    <p>El resultado es '.$resultado.'</p>
                </div>
            </div>
        </div>
    </body>
    
    </html>';
    echo $contenido;    
}
