@extends('')
@section('content')
    
@endsection
<form class="form-horizontal" method="POST" action="{{ url('libros/store') }}" enctype="multipart/form-data">
    @csrf
    <fieldset>
    
    <!-- Form Name -->
    <legend>Upload file</legend>
    
    <!-- File Button --> 
    <div class="form-group">
      <div class="col-md-4">
        <input id="nombre" name="nombre" value="{{ old('nombre') }}" type="text" placeholder="Ingrese nombre" class="form-control input-md">
        <input id="fecha" name="fecha" value="{{ old('fecha') }}" type="date" placeholder="Ingrese fecha" class="form-control input-md">
        <input id="idautor" name="idautor" value="{{ auth()->user()->id }}" type="hidden" placeholder="Id autor" class="form-control input-md">

        <strong class="text-danger">{{ $errors->first('media-types') }}</strong>
       </div>
    </div>
    
    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="singlebutton">Single Button</label>
      <div class="col-md-4">
        <button type="submit" id="" name="" class="btn btn-primary">Subir</button>
      </div>
    </div>
    
    </fieldset>
    <!-- Mensaje de exito -->
    @if (session('exito'))
        <p class="alert-success">{{ session('exito') }}</p>
    @endif
    </form>