<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Produtos</title>
        <!-- AÑADIR AL LAYOUT -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>-->
        <link rel="stylesheet" type="text/css" href="{{asset('css/estilo.css')}}">

        <script
                src="https://code.jquery.com/jquery-3.4.1.min.js"
                integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
                crossorigin="anonymous"></script>

        <script src="{{ asset('js/listar-productos.js') }}"></script>
        <!--/////////////////////////////////////////////////////////////////////////////// -->
    </head>
    <body>
        <h1>AdministrarProductos</h1>

        <form action="#" method="get">
            <div class="listar-productos">
                <label for="nombre">Nombre</label>
                <input type="text" class="id-listar" id="nombre" aria-describedby="id" placeholder="Ejemplo: bicicleta">
            </div>
        </form>


        <table class="table table-responsive">
            <thead class="cabecera-tabla">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Impuesto</th>
                    <th scope="col">Descuento</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Peso</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Edad Recomendada</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Foto</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td><img src="{{ asset('img/icons/papelera.svg') }}" id="baja" alt="papelera"></td>
                </tr>
                <tr> 
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>@fat</td>
                    <td>@fat</td>
                    <td>@fat</td>
                    <td>@fat</td>
                    <td>@fat</td>
                    <td>@fat</td>
                    <td>@fat</td>
                    <td>@fat</td>
                    <td><img src="{{ asset('img/icons/papelera.svg') }}" id="baja" alt="papelera"></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td><img src="{{ asset('img/icons/papelera.svg') }}" id="baja" alt="papelera"></td>
                </tr>
            </tbody>
        </table>
        <div id="contenedor-anyadir">
            <img src="{{ asset('img/icons/suma.svg') }}" id="anyadir-img" alt="crear-elemento">
        </div>
    </body>
</html>