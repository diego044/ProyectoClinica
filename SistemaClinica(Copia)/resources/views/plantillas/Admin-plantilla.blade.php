<!doctype html>
<html lang="en">
  <head>
    
    <title>Sistema de Gestion Hospitalaria - @yield('title')</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="{!! asset('bootstrap-4.3.1/css/bootstrap.min.css') !!}">      
    
    <!--Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>
    
    <!--CSS Personalizado -->
    <link rel="stylesheet" href="{!! asset('css/Admin-plantilla.css') !!}">      
    
  </head>

  <body>

        <div class="d-flex" id="wrapper">
            <!-- Sidebar -->
            <div class="border-right" id="sidebar-wrapper">
                <div class="sidebar-heading text-right">
                    <button type="button" id="menu-toggle" class="btn btn-info navbar-btn">
                        <span class="fas fa-bars"></span>                    
                    </button> 
                </div>

                <div class="border list-group list-group-flush ">
                    <div class="menucon">
                        <ul >
                            <li class="list-group-item list-group-item-action  ">
                                <a href="#" id="" class="list-group-item-action" >
                                    <i class="fas fa-home"></i>Inicio
                                </a>   
                            </li> 
                        </ul>

                        <ul>
                            <li class="list-group-item list-group-item-action d-flex" data-toggle="collapse" data-target="#items-medicos" >
                                <i class="fas fa-user-md bd-highlight"></i> Medicos 
                                <i class="fas fa-angle-down ml-auto bd-highlight "></i>      
                            </li>                                        
                            
                            <ul class="collapse ul-items " id="items-medicos">                            
                                <li><a href="#" class="list-group-item list-group-item-action border-left">Nuevo Medico</a></li>
                                <li><a href="#" class="list-group-item list-group-item-action border-left">Administrar Medicos</a></li>                            
                            </ul>
                        </ul>

                        <ul>
                            <li class="list-group-item list-group-item-action d-flex" data-toggle="collapse" data-target="#items-especialidades" >
                                    <i class="fas fa-stethoscope"></i>Especialidades 
                                    <i class="fas fa-angle-down ml-auto bd-highlight "></i>      
                            </li>                                        
                            
                            <ul class="collapse ul-items " id="items-especialidades">                            
                                    <li><a href="#" class="list-group-item list-group-item-action border-left">Administrar Especialidades</a></li>                                                          
                            </ul>
                        </ul>              
                            
                        <ul>
                            <li class="list-group-item list-group-item-action d-flex" data-toggle="collapse" data-target="#items-horarios" >
                                <i class="far fa-calendar-alt"></i>Horarios
                                <i class="fas fa-angle-down ml-auto bd-highligh "></i>      
                            </li>                                        
                            
                            <ul class="collapse ul-items "  id="items-horarios">                            
                                <li><a href="#" class="list-group-item list-group-item-action border-left">Programar Horario</a></li>
                                <li><a href="#" class="list-group-item list-group-item-action border-left">Administrar Horarios</a></li>                            
                            </ul>
                        </ul>

                        <ul>
                            <li class="list-group-item list-group-item-action d-flex" data-toggle="collapse" data-target="#items-consultorios" >
                                <i class="far fa-clipboard"></i>
                                Consultorios
                                <i class="fas fa-angle-down ml-auto bd-highligh" ></i>      
                            </li>                                        
                                
                            <ul class="collapse ul-items "  id="items-consultorios">                            
                                <li><a href="#" class="list-group-item list-group-item-action border-left">Nuevo Consultorio</a></li>
                                <li><a href="#" class="list-group-item list-group-item-action border-left">Administrar Consultorios</a></li>                            
                            </ul>
                        </ul>  
                        
                        <ul>
                            <li class="list-group-item list-group-item-action d-flex" data-toggle="collapse" data-target="#items-pacientes" >
                                <i class="fas fa-wheelchair"></i>
                                Pacientes
                                <i class="fas fa-angle-down ml-auto bd-highligh" ></i>      
                            </li>                                       
                                
                            <ul class="collapse ul-items "  id="items-pacientes">                            
                                <li><a href="#" class="list-group-item list-group-item-action border-left">Nuevo Paciente</a></li>
                                <li><a href="#" class="list-group-item list-group-item-action border-left">Administrar Pacientes</a></li>                            
                            </ul>
                        </ul>
                        
                        <ul>
                            <li class="list-group-item list-group-item-action d-flex" data-toggle="collapse" data-target="#items-citas" >
                                <i class="fas fa-notes-medical"></i>
                                Citas</a>
                                <i class="fas fa-angle-down ml-auto bd-highligh" ></i>      
                            </li>                                       
                                
                            <ul class="collapse ul-items "  id="items-citas">                            
                                <li><a href="#" class="list-group-item list-group-item-action border-left">Nueva Cita</a></li>
                                <li><a href="#" class="list-group-item list-group-item-action border-left">Administrar Citas</a></li>                            
                            </ul>
                        </ul>  
                        
                        <ul>
                            <li class="list-group-item list-group-item-action d-flex" data-toggle="collapse" data-target="#items-medicamentos" >
                                <i class="fas fa-pills"></i>
                                Medicamentos
                                <i class="fas fa-angle-down ml-auto bd-highligh" ></i>      
                            </li>                                       
                                
                            <ul class="collapse ul-items "  id="items-medicamentos">                            
                                <li><a href="#" class="list-group-item list-group-item-action border-left">Nuevo Medicamento</a></li>
                                <li><a href="#" class="list-group-item list-group-item-action border-left">Administrar Medicamentos</a></li>                            
                            </ul>
                        </ul>                  
                        
                    </div>              
                </div>
            </div>
            {{-- ---------------------------------------------------------------------------- --}}
            
            <div id="page-content-wrapper">
                <!-- cabecera -->                                
                    <div class="row border-bottom  mr-auto ml-auto">                   
                        <div class="col-auto mr-auto" style="padding-top:14px; ">
                            <button type="button" id="menu-toggle2" class="btn btn-info navbar-btn invisible">
                                <span class="fas fa-bars"></span>             
                            </button> 
                        </div>                  
                        <div class="col-auto mr-auto" style="padding-top:14px;">
                            <h3>Sistema de Gestión Hospitalaria</h3>
                        </div>
                        <div class="col-auto border-left" style="padding-top:3px;">
                            <img src="http://cdn.onlinewebfonts.com/svg/img_568657.png" width="40" class="mr-1" alt=""> 
                            <label>Gonzalo Ramirez Melgarejo</label>  
                            <span class="text-center d-block m-auto" style="width: 50%;">Administrador</span>   
                        </div>
                        
                    </div>                                                   
                {{-- ---------------------------------------------------------------------------- --}}          

                <!-- Contenido -->
                <div class="container"> 
                    <section class="mt-3">
                            @yield('contentbody')  
                    </section>  
                </div>
            </div>
         
        </div>   
          
    <!-- jQuery-->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
        <script type="text/javascript" src="{!! asset('bootstrap-4.3.1/js/jquery-3.3.1.slim.min.js') !!}" ></script>   
    
    <!-- Popper.js-->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
        <script type="text/javascript" src="{!! asset('bootstrap-4.3.1/js/popper.min.js') !!}" ></script>

    <!-- Bootstrap JS -->
        <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
        <script type="text/javascript" src="{!! asset('bootstrap-4.3.1/js/bootstrap.min.js') !!}" ></script>

    <!-- Custom JS -->  
        <script type="text/javascript" src="{!! asset('js/Admin-plantilla.js') !!}" ></script> 
  
  </body>
</html>