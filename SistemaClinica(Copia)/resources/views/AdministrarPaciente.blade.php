@extends('plantillas.Admin-plantilla')

@section('title', 'Menu')

@section('contenthead')
    
@endsection

@section('contentbody')


<br/>

<h1>ADMIN   |  PACIENTES</h1>

<br/>

<div>
		<input type="search">
		<input type="submit" value="Buscar">

</div>


<div class="card border-light" >
    <div class="card-body">


    	<table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">N°H.C.</th>
                    <th scope="col">DOCUMENTO</th>
                    <th scope="col">N° DOCUMENTOS</th>
                    <th scope="col">PACIENTE</th>
                    <th scope="col">FECHA-CREACION</th>
                    <th scope="col">ESTADO</th>
                    <th scope="col">ADIC.</th>
                    <th scope="col">MODIFICAR</th>                    
                  </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>DNI</td>
                    <td>76485134</td>
                    <td>Estefany Ramires</td>
                    <td>10/12/2001</td>
                    <td><input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                    <td><a href=""> + </td>
                    <td><a href=""> Modificar </td>
                    </tr>
                    <tr>
                    
                    <th scope="row">1</th>
                    <td>DNI</td>
                    <td>76485134</td>
                    <td>Estefany Ramires</td>
                    <td>10/12/2001</td>
                    <td><input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                    <td><a href=""> + </td>
                    <td><a href=""> Modificar </td>
                    </tr>
                  
                    <th scope="row">1</th>
                    <td>DNI</td>
                    <td>76485134</td>
                    <td>Estefany Ramires</td>
                    <td>10/12/2001</td>
                    <td><input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                    <td><a href=""> + </td>
                    <td><a href=""> Modificar </td>
                    </tr>
                </tbody>
              </table>







@endsection