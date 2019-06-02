@extends('plantillas.Admin-plantilla')

@section('title', 'Menu')

@section('contenthead')
    
@endsection

@section('contentbody')

<h1>ADMIN | MENÚ</h1>

<article class="mt-4">

        <div class="row">
                <div class="col-md-3 card text-black list-group-item-action">
                        <a href="#" class="list-group-item-action">
                                <div class="card-body text-center">        
                                        <img class="" src="{{ asset('iconos/Administrar-pacientes.png') }}" width="100" height="" alt="pacientes logotipo"> 
                                        <h3 class="card-title">Administrar pacientes</h3>                  
                                        <p class="card-text text-left">Pacientes Totales:</p>                               
                                </div>
                        </a>                                        
                </div>

                <div class="col-md-3 offset-md-1  card text-black list-group-item-action">
                        <a href="#" class="list-group-item-action">
                                <div class="card-body text-center">        
                                        <img class="" src="{{ asset('iconos/Administrar-medicos.png') }}" width="100" height="" alt=" médicos logotipo"> 
                                        <h3 class="card-title">Administrar médicos</h3>                  
                                        <p class="card-text text-left">Médicos Totales:</p>                               
                                </div>
                        </a>                                        
                </div>

                <div class="col-md-3 offset-md-1  card text-black list-group-item-action">
                        <a href="#" class="list-group-item-action">
                                <div class="card-body text-center">        
                                        <img class="" src="{{ asset('iconos/Administrar-citas.png') }}" width="100" height="" alt=" citas logotipo">  
                                        <h3 class="card-title">Administrar citas</h3>                  
                                        <p class="card-text text-left">Citas Totales:</p>                               
                                </div>
                        </a>                                        
                </div>
        </div>
        
        <div class="row mt-4">
                <div class="col-md-3 offset-md-4 card text-black list-group-item-action">
                        <a href="#" class="list-group-item-action">
                                <div class="card-body text-center">        
                                        <img class="" src="{{ asset('iconos/Especialidades.png') }}" width="60" height="" alt="Especialidades logotipo"> 
                                        <h3 class="card-title">Especialidades</h3>                  
                                        <p class="card-text text-left">Pacientes Totales:</p>                               
                                </div>
                        </a>                                        
                </div>        
        </div>
        
        <div class="row mt-2">
                <div class="col-md-3 offset-md-1 card text-black list-group-item-action">
                        <a href="#" class="list-group-item-action">
                                <div class="card-body text-center">        
                                        <img class="" src="{{ asset('iconos/Consultorios.png') }}" width="60" height="" alt="Consultorios logotipo"> 
                                        <h3 class="card-title">Consultorios</h3>                             
                                </div>
                        </a>                                        
                </div>
                <div class="col-md-3 offset-md-3 card text-black list-group-item-action">
                                <a href="#" class="list-group-item-action">
                                        <div class="card-body text-center">        
                                                <img class="" src="{{ asset('iconos/Medicamentos.png') }}" width="60" height="" alt="Medicamentos logotipo"> 
                                                <h3 class="card-title">Medicamentos</h3>                              
                                        </div>
                                </a>                                        
                </div> 
        </div>

</article>

@endsection