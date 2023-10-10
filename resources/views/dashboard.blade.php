<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SENAC</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{url('assets2/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{url('assets2/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{url('assets2/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{url('assets2/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{url('assets2/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('assets2/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{url('assets2/css/style.css')}}">
    <!-- End layout styles -->
        <link rel="shortcut icon" href="{{url('assets2/images/favicon.ico')}}" />
  </head>
  <body>
    <div class="container-scroller">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="{{('dashboard')}}"><img src="{{url('assets2/images/logo.png')}}" alt="logo" style="width: 150px ; height: 20px;"/></a>
          <a class="sidebar-brand brand-logo-mini" href="{{('dashboard')}}"><img src="{{url('assets2/images/logo-mini.png')}}" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="{{url('assets2/images/faces/perfil.png')}}" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">          
                  <h5 class="mb-0 font-weight-normal">User</h5>
                  <span>Admin</span>
                </div>
              </div> 
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link"></span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{('dashboard')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          
          
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{('lista')}}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Lista</span>
            </a>
            
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">Formulários</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href=""> Pedidos de Livros </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{('formulario/dash')}}"> Agendamentos </a></li>
              </ul>
            </div>
          </li>
          
          
          
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="{{('dashboard')}}"><img src="{{url('assets2/images/logo-mini.png')}}" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-1 mt-md-0 d-none d-lg-flex search">
                  <input type="submite"  class="form-control" placeholder="Buscar">
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
             
              <li class="nav-item nav-settings d-none d-lg-block">
                <a class="nav-link" href="#">
                  <i class="mdi mdi-view-grid"></i>
                </a>
              </li>
              
              
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="{{url('assets2/images/faces/perfil.png')}}" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">User</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="{{('/')}}">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          
          <div class="content-wrapper">

            <div class="row">
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Pedidos de Livros</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">??</h2>
                        </div>
                        <h6 class="text-muted font-weight-normal"> inserir texto </h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-book-open-variant text-primary ms-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Em Análise</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">??</h2>
                        </div>
                        <h6 class="text-muted font-weight-normal"> inserir texto </h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-alert-circle-outline text-warning ms-auto"></i>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Solicitações de Agendamento</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">??</h2>
                        </div>
                        <h6 class="text-muted font-weight-normal"> inserir texto </h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-monitor text-success ms-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Situação de Solicitações</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            
                            <th> Nome </th>
                            <th> Email </th>
                            <th> CPF </th>
                            <th> Tipo</th>
                            <th> Data </th>
                            <th> Horário </th>
                            <th> Status </th>
                            <th> Deletar </th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($registro as $registros)
                          <tr>
                            <td>
                              <img src="{{url('assets2/images/faces/perfil.png')}}" alt="image" style="scale: 140%;"/>
                              <span class="ps-2">{{$registros->nome}}</span>
                            </td>
                            <td> {{$registros->email}} </td>
                            <td> {{$registros->cpf}} </td>
                            <td> {{$registros->tipo}} </td>
                            <td> {{$registros->data}} </td>
                            <td> {{$registros->horario}} </td>
                            <td>
                              <a href=""><div class="btn btn-inverse-warning">Pendente</div></a>
                            </td>
                            <td><form method="POST" action="{{route('view.deletar',$registros->id)}}">@method('delete') @csrf
                                <button type="submit" class="btn btn-inverse-danger" style="scale:100%;">DELETAR</button>
                              </form>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          


          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © gab.lider.com 2023</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{url('assets2/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{url('assets2/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{url('assets2/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{url('assets2/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{url('assets2/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{url('assets2/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
    <script src="{{url('assets2/js/jquery.cookie.js')}}" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{url('assets2/js/off-canvas.js')}}"></script>
    <script src="{{url('assets2/js/hoverable-collapse.js')}}"></script>
    <script src="{{url('assets2/js/misc.js')}}"></script>
    <script src="{{url('assets2/js/settings.js')}}"></script>
    <script src="{{url('assets2/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{url('assets2/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
  </body>
</html>