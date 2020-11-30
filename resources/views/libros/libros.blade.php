@extends('layouts.vista_libros')

@section('content')
    

 
    @foreach ($libros as $l)
                    @foreach ($autores as $au)
                        @if ($l->Id_user == $au->id)
                            @if ($l->Estado == "Activo")
                                
                            
                                <article>
                                    <div class="single-book-box">
                                        <header class="entry-header">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h3 class="entry-title">                                                    
                                                        <a href="{{ url('libros/'.$l->Id_libro) }}">{{ $l->Nombre_libro }}</a>

                                                    </h3>
                                                    <ul>
                                                        <li class="list-group-item"><strong>Autor:</strong>{{ $au->name }}</li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6">
                                                    <ul>
                                                        <li class="list-group-item"><strong>Fecha Inicio:</strong>{{ $l->Fecha_ini }}</li>
                                                    
                                                        <li class="list-group-item"><strong>Fecha Fin:</strong>{{ $l->Fecha_fin }}</li>
                                                    

                                                </ul>
                                            </div> 
                                            </div>
                                        </header>
                                        <div class="entry-footer">
                                            <p>{{ $l->Descripción }}</p>
                                        </div>
                                        <footer class="entry-footer">
                                            <a class="btn btn-dark-gray" href="{{ url('libros/'.$l->Id_libro) }}">Ver libro</a>
                                        </footer>
                                    </div>
                                </article>
                            @endif
                            
                        @endif
                    @endforeach
    @endforeach
    

{{ $libros->links()  }}
@endsection