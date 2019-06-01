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


<div class="card border-light" >
    <div class="card-header">Programar Horario</div>
    <div class="card-body">


    	<table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">MÉDICO</th>
                    <th scope="col">CMP</th>
                    <th scope="col">FECHA CREACION</th>
                    <th scope="col">ADIC</th>                    
                  </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>10/12/2000</td>
                    <td><a href=""> + </td>
                    </tr>
                    <tr>
                    
                    <th scope="row">2</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>10/12/2000</td>
                    <td><a href=""> + </td>
                    </tr>
                    <tr>
                  
                    <th scope="row">3</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>10/12/2000</td>
                    <td><a href=""> + </td>
                    </tr>
                </tbody>
              </table>


@endsection