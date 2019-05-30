<!doctype html>
<html lang="en">
  <head>
    
    <title>Sistema de Gestion Hospitalaria - @yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="{!! asset('css/simple-sidebar.css') !!}">
    <!--Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>


  </head>

  <body>

      <div class="d-flex" id="wrapper">

          <!-- Sidebar -->
          <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">Start Bootstrap </div>
            <div class="list-group list-group-flush">
              <div class="menucon">
                  <a href="#" id="aimg" class="list-group-item list-group-item-action bg-light"><i class="fas fa-home"></i>Inicio</a>
                  <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fas fa-user-md"></i>Medicos</a>
                  <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fas fa-stethoscope"></i>Especialidades</a>
                  <a href="#" class="list-group-item list-group-item-action bg-light"><i class="far fa-calendar-alt"></i>Horarios</a>
                  <a href="#" class="list-group-item list-group-item-action bg-light"><i class="far fa-clipboard"></i>Consultorios</a>
                  <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fas fa-wheelchair"></i>Pacientes</a>
                  <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fas fa-notes-medical"></i>Citas</a>
                  <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fas fa-pills"></i>Medicamentos</a>
                  
              </div> 
              
            </div>
          </div>
          <!-- /#sidebar-wrapper -->
      
          <!-- Page Content -->
          <div id="page-content-wrapper">
      
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">

                <button type="button" id="menu-toggle" class="btn btn-info navbar-btn">
                    <span class="fas fa-bars"></span>
                    <span>Contraer</span>
                </button>           
                
            </nav>
      
            <div class="container-fluid">              
              @yield('content')            
            </div>

          </div>
          <!-- /#page-content-wrapper -->      
      </div>
      
          
     
	
   
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        $("#menu-toggle").click(function(e) {
          e.preventDefault();
          $("#wrapper").toggleClass("toggled");
        });
    </script>
 
 
  </body>
</html>