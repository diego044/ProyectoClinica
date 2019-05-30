
@section('title', 'Menu')
@extends('layouts.plantilla')

@section('content')

<br/>

<h1>ADMIN   |   MENÚ</h1>

<br/>

<div class="row">
        <div class="col-md-2 offset-md-2 ">
                <a href="">
                        <div class="card text-black" style="max-width: 12rem;">        
                                <div class="card-body text-center">
                                        <img class="" src="https://cdn.icon-icons.com/icons2/1749/PNG/512/17_113699.png" width="100" height="" alt="pacientes logotipo"> 
                                        <h5 class="card-title text-left">Administrador pacientes</h5>                  
                                        <p class="card-text text-left">Pacientes Totales:</p>
                                </div>
                        </div>
                </a>
                                
        </div>

        <div class="col-md-2 offset-md-1">
                        <a href="">
                                <div class="card text-black" style="max-width: 12rem;">        
                                        <div class="card-body text-center">
                                                <img class="" src="http://www.iconarchive.com/download/i84798/dapino/medical-people/doctor-assistant.ico" width="100" height="" alt=" médicos logotipo"> 
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
                                <img class="" src="https://cdn.icon-icons.com/icons2/1749/PNG/512/49_113664.png" width="100" height="" alt=" citas logotipo"> 
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
                                        <img class="" src="https://cdn.icon-icons.com/icons2/1749/PNG/512/25_113671.png" width="60" height="" alt="Especialidades logotipo"> 
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
                                                <img class="" src="https://cdn.icon-icons.com/icons2/1749/PNG/512/48_113667.png" width="60" height="" alt="Consultorios logotipo"> 
                                                <h5 class="card-title">Consultorios</h5>          
                                        </div>
                                </div>
                </a>
        </div>
        <div class="col-md-2 offset-md-2">
                <a href="">
                                <div class="card text-black" style="max-height: 8rem; max-width: 14rem;">        
                                        <div class="card-body text-center">
                                                <img class="" src="https://cdn.icon-icons.com/icons2/1749/PNG/512/50_113701.png" width="60" height="" alt="Medicamentos logotipo"> 
                                                <h5 class="card-title">Medicamentos</h5>          
                                        </div>
                                </div>
                </a>
                                
        </div>
</div>








    
@endsection