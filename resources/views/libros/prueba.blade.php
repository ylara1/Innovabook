
    
    @if (count($libros))
    @foreach ($libros as $l)
                    @foreach ($autor as $au)
                        @if ($l->Id_user == $au->id)

                            <a href="{{ url('libros/'.$l->Id_libro) }}"><li class="list-group-item"><strong>{{ $l->Nombre_libro }}</strong></li></a>

                            <li class="list-group-item"><strong>Autor: </strong>{{ $au->name }}</li>
                            <li></li>
                                                    
                                                        
                                            
                            
                            
                        @endif
                    @endforeach
    @endforeach
@endif



