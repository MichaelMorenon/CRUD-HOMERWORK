<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Listado de empleados</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br>
            <a href="{{ url('employee/create') }} " class="btn btn-primary">Crear Nuevo Empleado</a>
            <a href="{{ url('/') }} " class="btn btn-primary">Inicio</a>
            <a href="{{ url('company') }} " class="btn btn-primary">Compañias</a>
            <br><br>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>APELLIDO</th>
                            <th>EMAIL</th>
                            <th>DOCUMENTO</th>
                            <th>GENERO</th>
                            <th>COMPAÑIA</th>
                            <th>OPCIONES</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($employees as $employee)
                            <tr>
                                <td> {{ $employee->id }} </td>
                                <td> {{ $employee->name }} </td>
                                <td> {{ $employee->lastname }} </td>
                                <td> {{ $employee->email }} </td>
                                <td> {{ $employee->document }} </td>
                                <td> {{ $employee->gender }} </td>
                                <td> {{ $employee->companies_id }} </td>
                                <form action=" {{ url('employee', $employee->id) }}  " method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <td>
                                        <a href=" {{ url('employee',$employee->id) }} " class="btn btn-info btn-sm">Detalles</a>
                                        <a href=" {{ url('employee/edit',$employee->id) }} " class="btn btn-warning btn-sm">Editar</a>
                                        <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                    </td>
                                </form>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                    {{ $employees->links() }}
                </div>
            </div>
        </div>
</body>
</html>
