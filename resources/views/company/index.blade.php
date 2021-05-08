<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>LISTADO DE COMPAÑIAS</title>
    </head>
    <body>
    <div class="container">
        <div class="row">
            <BR><BR>
            @if('status')
                <div class="alert alert-{{session('type')}}  ">
                    {{ session('status')  }}
                </div>
            @endif
            <div class="col-md-12">
                <br>
                <a href="{{ url('company/create') }} " class="btn btn-primary">Crear nueva compañia</a>
                <a href="{{ url('/') }} " class="btn btn-primary">Inicio</a>
                <a href="{{ url('employee') }} " class="btn btn-primary">Empleados</a>
                <br><br>
            </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>COMPAÑIA</th>
                            <th>DESCRIPCION</th>
                            <th>NIT</th>
                            <th>TELEFONO</th>
                            <th>OPCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($companies as $company)
                        <tr>
                            <td> {{ $company->id }} </td>
                            <td> {{ $company->name }} </td>
                            <td> {{ $company->description }} </td>
                            <td> {{ $company->nit }} </td>
                            <td> {{ $company->phone }} </td>
                            <form action=" {{ url('company', $company->id) }}  " method="POST">
                                @method('DELETE')
                                @csrf
                            <td>
                                <a href=" {{ url('company',$company->id) }} " class="btn btn-info btn-sm">Detalles</a>
                                <a href=" {{ url('company/edit',$company->id) }} " class="btn btn-warning btn-sm">Editar</a>
                                 <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                            </td>
                            </form>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    </body>
</html>
