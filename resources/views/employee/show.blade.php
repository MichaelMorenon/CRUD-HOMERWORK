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
                <td><strong>Nombre</strong></td>
                <td> {{ $employee->name }} </td>
            </tr>
            <tr>
                <td><strong>Apellido</strong></td>
                <td> {{ $employee->lastname }} </td>
            </tr>
            <td><strong>email</strong></td>
            <td> {{ $employee->email }} </td>
            <tr>
                <td><strong>documento</strong></td>
                <td> {{ $employee->document }} </td>
            </tr>
            <tr>
                <td><strong>genero</strong></td>
                <td> {{ $employee->gender }} </td>
            </tr>
            <tr>
                <td><strong>compañia</strong></td>
                <td> {{ $employee->companies_id }} </td>
            </tr>
        </table>
        <a href=" {{ url('employee') }} ">Volver</a>
    </div>
</div>
</body>
</html>
