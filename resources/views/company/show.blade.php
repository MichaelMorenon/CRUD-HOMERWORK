<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>Detalles de compañias</title>
    </head>
    <body>
    <div class="container">
        <div class="col-md-4 col-md-offset-4">
            <br>
            <table class="table table-striped table-bordered">
                <tr>
                    <td class="text-center" colspan="2"><strong>Datos personales</strong></td>
                </tr>
                <tr>

                <tr>
                    <td><strong>Compañia</strong></td>
                    <td> {{ $company->name }} </td>
                    </tr>
                <tr>
                    <td><strong>Descripcion</strong></td>
                    <td> {{ $company->description }} </td>
                </tr>
                    <td><strong>NIT</strong></td>
                    <td> {{ $company->nit }} </td>
                <tr>
                    <td><strong>Telefono</strong></td>
                    <td> {{ $company->phone }} </td>
                </tr>
            </table>
            <a href=" {{ url('company') }} ">Volver</a>
        </div>
    </div>
    </body>
</html>
