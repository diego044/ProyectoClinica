@extends('plantillas.Admin-plantilla')

@section('title', 'Menu')

@section('contenthead')
    
@endsection

@section('contentbody')

<br/>

<h1>ADMIN   |   MENÚ</h1>

<br/>

<div class="row">
        <div class="col-md-2 offset-md-2 ">
                <a href="">
                        <div class="card text-black" style="max-width: 12rem;">        
                                <div class="card-body text-center">
                                        <img class="" src="{{ asset('iconos/Administrar-pacientes.png') }}" width="100" height="" alt="pacientes logotipo"> 
                                        <h5 class="card-title text-left">Administrar pacientes</h5>                  
                                        <p class="card-text text-left">Pacientes Totales:</p>
                                </div>
                        </div>
                </a>
                                
        </div>

        <div class="col-md-2 offset-md-1">
                        <a href="">
                                <div class="card text-black" style="max-width: 12rem;">        
                                        <div class="card-body text-center">
                                                <img class="" src="{{ asset('iconos/Administrar-medicos.png') }}" width="100" height="" alt=" médicos logotipo"> 
                                                <h5 class="card-title text-left">Administrar médicos</h5>
                                                <p class="card-text text-left">Médicos Totales:</p>          
                                        </div>
                                </div>
                        </a>
        </div>

        <div class="col-md-2 offset-md-1">
                <a href="">
                        <div class="card text-black" style="max-width: 12rem;">        
                                <div class="card-body text-center">
                                <img class="" src="{{ asset('iconos/Administrar-citas.png') }}" width="100" height="" alt=" citas logotipo"> 
                                <h5 class="card-title text-left">Administrar citas</h5>
                                <p class="card-text text-left">Citas Totales:</p>
                                </div>
                        </div>  
                </a>
        </div>
        
</div>

<br/>

<div class="row">
        <div class="col-md-2 offset-md-5">
                <a href="">
                                <div class="card text-black" style="max-height: 8rem; max-width: 14rem;">        
                                        <div class="card-body text-center">
                                        <img class="" src="{{ asset('iconos/Especialidades.png') }}" width="60" height="" alt="Especialidades logotipo"> 
                                        <h5 class="card-title">Especialidades</h5>          
                                        </div>
                                </div>
                </a>
        </div>
</div>

<br/>

<div class="row">
        <div class="col-md-2 offset-md-3">
                <a href="">
                                <div class="card text-black" style="max-height: 8rem; max-width: 14rem;">        
                                        <div class="card-body text-center">
                                                <img class="" src="{{ asset('iconos/Consultorios.png') }}" width="60" height="" alt="Consultorios logotipo"> 
                                                <h5 class="card-title">Consultorios</h5>          
                                        </div>
                                </div>
                </a>
        </div>
        <div class="col-md-2 offset-md-2">
                <a href="">
                                <div class="card text-black" style="max-height: 8rem; max-width: 14rem;">        
                                        <div class="card-body text-center">
                                                <img class="" src="{{ asset('iconos/Medicamentos.png') }}" width="60" height="" alt="Medicamentos logotipo"> 
                                                <h5 class="card-title">Medicamentos</h5>          
                                        </div>
                                </div>
                </a>
                                
        </div>
</div>

@endsection