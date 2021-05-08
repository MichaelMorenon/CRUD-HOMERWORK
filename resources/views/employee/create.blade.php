<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>Crear empleado</title>
    </head>
    <body>
    <div class="container">
        <row>
            <div class="col-md-4 col-md-offset-4">
                <br>
                <div class="panel panel-primary">
                    <div class="panel-heading">
Registrar nuevo empleado
</div>
                    <div class="panel-body">
                        <form action=" {{ url( 'employee') }}  " method="post">
@csrf
                                <div class="form-group">
                                    <label for="">Nombre</label>
                                    <input type="text" class="form-control" name="name" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="">Apellido</label>
                                    <input type="text" class="form-control" name="lastname" id="lastname">
                                </div>
                                <div class="form-group">
                                    <label for="">email</label>
                                    <input type="text" class="form-control" name="email" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="">Documento</label>
                                    <input type="text" class="form-control" name="document" id="document">
                                </div>
                                <div class="form-group">
                                    <label for="">Genero</label>
                                    <input type="text" class="form-control" name="gender" id="gender">
                                </div>
                                <div class="form-group">
                                    <label for="">Compañia</label>
                                    <select name="companies_id" id="companies_id" class="form-control"> Compañia
                                        @foreach($companies as $company)
                                            <option value=" {{ $company-> id }} "> {{ $company-> name }} </option>
                                        @endforeach
                                    </select>
                                </div>
<hr>
<button class="btn btn-primary" type="submit">Guardar</button>
<a href=" {{ url('employee') }} ">Cancelar</a>
</form>
</div>
</div>
</div>
</row>
</div>
</body>
</html>
