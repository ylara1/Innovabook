<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
@extends('layouts.vista_libros')
@section('search')
    

    <script lang="javascript">
        
        /*let pagina =2
        const cargando = document.getElementById("cargando")
        
        window.onscroll = () =>{
            cargando.removeAttribute('hidden')

            if((window.innerHeight + window.pageYOffset)>= document.body.offsetHeight){
                fetch(`/libros/paginacion?page=${pagina}`,{
                    method:'get'
                })
                .then(response => response.text())
                .then(html => {
                    cargando.setAttribute('hidden')
                    document.getElementById("contenedor").innerHTML += html
                    pagina++;
                })
                .catch(error => console.log(error))
            }
        }
        */
        
        ///Keyup
        window.addEventListener('load',function() {
            document.getElementById("texto").addEventListener("keyup", () =>{
                if ((document.getElementById("texto").value.length)>=1) 
                    fetch(`/libros/buscador?texto=${document.getElementById("texto").value}`,{
                    method:'get'
                    })
                    
                    .then(response=>response.text())
                    
                    .then(html=>{
                        document.getElementById("resultados").innerHTML = html
                    })
                else
                    document.getElementById("resultados").innerHTML=""
                
                
            })
        })
    </script>
    @endsection
    <title>Document</title>
</head>
<body>
    

    <div id="container">
        <div id="col-8">
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="texto" placeholder="Ingrese nombre">
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">Buscar</span>
                  
                </div>
            </div>
            <div id="resultados">
                
            </div>
        </div>
    </div>


    <div class="panel-group">
        <div class="card">
            <div class="card-body" id="contenedor">
                <h3 class="card-title">Libros</h3>
                <ul class="list list-group-flush">
                    @include('libros.libros')
                    
                </ul>
            </div>
            <div id="cargando" hidden>
                <h1>CARGANDO...</h1>
            </div>
        </div>
    </div>
    {{ $libros->links() }}
</body>
</html>