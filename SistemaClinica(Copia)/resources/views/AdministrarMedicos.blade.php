@extends('plantillas.Admin-plantilla')

@section('title', 'Menu')

@section('contenthead')
    
@endsection

@section('contentbody')

<br/>

<h1>ADMIN   |  MEDICOS</h1>

<br/>

<div>
		<input type="search">
		<input type="submit" value="Buscar">

</div>
</div>
    	<table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">MÉDICO</th>
                    <th scope="col">CMP</th>
                    <th scope="col">FECHA CREACION</th>
                    <th scope="col">ADIC</th>   
                    <th scope="col">ESTADO</th>
                    <th scope="col">MODIFICAR</th>                 
                  </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>10/12/2000</td>
                    <td><a data-target=".bd-example-modal-lg" data-toggle="modal"> + </td>
                    <td><input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                    <td><a href="">Modificar</td>
                    </tr>
                    <tr>

                    <th scope="row">2</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>10/12/2000</td>
                    <td><a data-target=".bd-example-modal-lg" data-toggle="modal""> + </td>
                    <td><input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                    <td><a href="">Modificar</td>
                    </tr>

                    <tr>
                    <th scope="row">3</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>10/12/2000</td>
                    <td><a data-target=".bd-example-modal-lg" data-toggle="modal"> + </td>
                    <td><input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                    <td><a href="">Modificar</td>
                    </tr>
                </tbody>
              </table>

              <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                            <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Empleado </h5>                    
                            </div>
                            <div class="modal-body">
                                <div class="card bg-light mb-3" style="">
                                    <div class="card-header"><h5>Datos Medicos</h5></div>
                                        <label>
                                    <div class="card-body">                                
                                    </div>
                                </div>

                                <div class="card bg-light mb-3" style="">
                                    <div class="card-header"><h5>Datos Contacto</h5></div>
                                    <div class="card-body">                                
                                    </div>
                                </div>                   
                                  
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>                
                            </div>
                    </div>
                  </div>
                </div>


@endsection