<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form class="form-horizontal" method="POST" action="{{ url('libros/update') }}">
        @csrf
        <input name="Id_libro" type="hidden" value="{{ $libros->Id_libro }}">
        <fieldset>
            <!--Detectar si la variable tiene valor-->
            
        <!-- Form Name -->
    <legend>Editar Categoria</legend>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="nombre">Nombre Libro</label>  
    <div class="col-md-4">
    <input id="nombre" name="nombre" value="{{ $libros->Nombre_libro }}" type="text" placeholder="Ingrese categoria" class="form-control input-md">
    <input id="fecha_ini_lib" name="fecha_ini_lib" value="{{ $libros->Fecha_ini }}" type="date" placeholder="Ingrese categoria" class="form-control input-md">
    <input id="fecha_fin_lib" name="fecha_fin_lib" value="{{ $libros->Fecha_fin }}" type="date" placeholder="Ingrese categoria" class="form-control input-md">
    <input id="estado" name="estado" value="{{ $libros->Estado }}" placeholder="Ingrese categoria" class="form-control input-md">
    
        <label class="col-md-4 control-label" for="filebutton">Archivo de texto:</label>
        
          <input id="filebutton" name="filebutton" class="input-file" type="file">
        
      
        <strong class="text-danger">{{ $errors->first('nombre') }}</strong>
    </div>
    </div>

    <!-- Button -->
    <div class="form-group">
    <label class="col-md-4 control-label" for=""></label>
    <div class="col-md-4">
        <button id="" name="" type="submit" class="btn btn-primary">Enviar</button>
    </div>
    </div>

    </fieldset>
    </form>
</body>
</html>