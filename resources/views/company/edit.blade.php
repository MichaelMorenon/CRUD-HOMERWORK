<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Editar Compañia</title>
</head>
<body>
<div class="container">
    <row>
        <div class="col-md-4 col-md-offset-4">
            <br>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Editar Compañia
                </div>
                <div class="panel-body">
                    <form action=" {{ url('company', $company->id) }} " method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nombre de compañia</label>
                            <input type="text" class="form-control" name="name" id="name" value=" {{ $company->name }}">
                        </div>
                        <div class="form-group">
                            <label for="">Descripcion</label>
                            <input type="text" class="form-control" name="description" id="description" value=" {{ $company->description }}">
                        </div>
                        <div class="form-group">
                            <label for="">NIT</label>
                            <input type="text" class="form-control" name="nit" id="nit" value=" {{ $company->nit }}">
                        </div>
                        <div class="form-group">
                            <label for="">Telefono</label>
                            <input type="text" class="form-control" name="phone" id="phone" value=" {{ $company->phone }}">
                        </div>
                        <hr>
                        <button class="btn btn-primary" type="submit">Guardar</button>
                        <a href=" {{ url('company') }} ">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </row>
</div>
</body>
</html>
