@extends('plantillas.Admin-plantilla')

@section('title', 'Menu')

@section('contenthead')
    
@endsection

@section('contentbody')

<br/>

<h1>ADMIN   |  PROGRAMACION DE HORARIOS</h1>

<br/>

<div class="card border-light" >
    <div class="card-header">Programar Horario</div>
    <div class="card-body">
        <form>
            <div class="form-row">          
                <div class="form-group col-md-2">
                    <select class="custom-select">
                        <option selected>Selecione Medico:</option>
                        <option value="1">medico1</option>
                        <option value="2">medico2</option>
                        <option value="3">medico3</option>
                    </select>
                </div>
                <div class="form-group col-md-3">                         
                        <label for="inputSafe">Fecha</label>
                        <div class="input-group">
                                <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">De: </span>
                                </div>
                                <input type="date" class="form-control"> 
                        </div>
                        <br/>
                        <div class="input-group">
                                <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Hasta: </span>
                                </div>
                                <input type="date" class="form-control"> 
                        </div>                        
                </div>
                <div class="form-group col-md-2">
                        <select class="custom-select">
                            <option selected>Selecione Turno:</option>
                            <option value="1">Turno1</option>
                            <option value="2">Turno2</option>                           
                        </select>
                </div>
                <div class="form-group col-md-3">                         
                        <label for="inputSafe">Hora:</label>
                        <div class="input-group">
                                <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">De: </span>
                                </div>
                                <input type="time" class="form-control"> 
                        </div>
                        <br/>
                        <div class="input-group">
                                <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Hasta: </span>
                                </div>
                                <input type="time" class="form-control"> 
                        </div>                        
                </div>
                <div class="form-group col-md-2">
                        <button type="submit" class="btn btn-info">Registrar</button>
                </div>             
                
            </div>            
        </form>

        <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">MÉDICO</th>
                    <th scope="col">ESPECIALIDAD</th>
                    <th scope="col">FECHA FIN</th>
                    <th scope="col">TURNO</th>
                    <th scope="col">HORA INICIO</th>
                    <th scope="col">HORA FIN</th>
                    <th scope="col">ESTADO</th>
                    <th scope="col">MODIFICAR</th>
                    
                  </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td><input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                    <td><a href="#">modificar</a></td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td><input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                    <td><a>modificar</a></td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td><input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                    <td><a>modificar</a></td>
                    </tr>
                </tbody>
              </table>

    </div>

</div>

@endsection