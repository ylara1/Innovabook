@extends('layouts.detalleslibro')
@section('content')
    

<div class="tab-content">
    <form class="form-horizontal" action="{{ url('libros/comentario/save') }}">
        @csrf
        <fieldset>
        
        <!-- Form Name -->
        <legend>Comentarios </legend>
        
        <!-- Textarea -->
        <div class="form-group">
          <label class="col-md-4 control-label text-justify lead" for="">Diego(Lector)</label>
          <div class="col-md-8">                     
            <input class="form-control" type="text" id="" name="comentario">
            <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
            <input type="hidden" name="id_libro" value="{{ $libros->Id_libro }}">
          </div>
        </div>
        
        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label text-justify lead " for="selectbasic">Tipo De Comentario</label>
          <div class="col-md-4">
            <select id="selectbasic" name="id_tipo" class="form-control text-justify lead">
              <option value="1">Positivo</option>
              <option value="2">Negativo</option>
            </select>
          </div>
        </div>
        
        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label " for=""></label>
          <div class="col-md-4">
            <button type="submit" class="btn btn-primary">Enviar Comentario</button>
          </div>
        </div>
        
        </fieldset>
    </form>
</div>
@endsection
