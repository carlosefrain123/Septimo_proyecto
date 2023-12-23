<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- TODO: Este es el CSS de Dropzone -->
    <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Ejemplo de Drozone JS</h1>
                <form id="producto_form" method="post">
                    <div class="form-group">
                        <label for="nombre_producto" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" placeholder="Ingrese el nombre" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="dropzone">
                            <div class="dz-default dz-message">
                                <button class="dz-button" type="button">
                                    <img src="../../assets/archivo.jpg" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<!-- TODO: Este es el JS de Dropzone -->
<script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>
<!-- TODO: Este es el JS de JSQUERY -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<!-- TODO: Este es el JS de mntproducto -->
<script src="mntproducto.js"></script>

</html>