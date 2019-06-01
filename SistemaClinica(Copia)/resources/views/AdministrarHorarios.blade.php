@extends('plantillas.Admin-plantilla')

@section('title', 'Menu')

@section('contenthead')
    
@endsection

@section('contentbody')

<br/>

<h1>ADMIN   |  ADMINISTRACION DE HORARIOS</h1>

<br/>

<div>
    <label>Filtros de Busqueda :</label>
    <div class="form-row">          
        <div class="form-group col-md-2">
        <select class="custom-select" style="width: 200px">
              <option selected>Selecione Medico:</option>
              <option value="1">medico1</option>
              <option value="2">medico2</option>
            <option value="3">medico3</option>
          </select>
      
      <div class="form-row">          
                <div class="form-group col-md-2">    
          <select class="custom-select" style="width: 200px">
              <option selected>Selecione Especialidad:</option>
              <option value="1">pediatria</option>
              <option value="2">odonto</option>
            <option value="3">medico3</option>
          </select>
        </div>
    </div>
        <div class="form-group col-md-3">                         
                <input id="date" type="date">                      
        </div>
        <select class="custom-select" style="width: 200px">
              <option selected>Selecione Turno:</option>
              <option value="1">noche</option>
              <option value="2">mañana</option>
        </select>
        <a href="Horarios">Añadir nueva programacion de Horario</a>

     
    <input type="submit" value="Buscar">

</div>



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