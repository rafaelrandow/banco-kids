<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Banco Kids - painel</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">


    <!-- Bootstrap core JavaScript-->
    <script  src="https://code.jquery.com/jquery-3.6.0.min.js"  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" integrity="sha512-0QbL0ph8Tc8g5bLhfVzSqxe9GERORsKhIn1IrpxDAgUsbBGz/V7iSav2zzW325XGd1OMLdL4UiqRJj702IeqnQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script src="js/angular.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/menu.js"></script>
	
	<!-- Onde ficarao os nossos controllers -->
	<script src="controllers/controllers.js"></script>

</head>
<body id="page-top" ng-app="SimpleMarket">
    <style>
.input-group-prepend span, .input-group-append span{
  cursor:pointer;
}
.input-group-prepend+input{
  background:#fff!important;
  width:35px!important;
}
    </style>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Banco Kids <sup>2022</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fa-solid fa-money-bill-1-wave"></i>
                    <span>Painel principal</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
              <!-- Sidebar Toggler (Sidebar) -->
              <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content" ng-controller="PontosCtrl">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    
                    <h1 class="h3 mb-0 text-gray-800">Extrato</h1>
                    <ul class="navbar-nav ml-auto">
                        
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <input type="hidden" name="_method" value="post">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Buscar por..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a ng-click="limparLista();" class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" alt="Atualizar">
                                <i class="fas fa-retweet fa-fw" aria-hidden="true"></i>
                                <!-- Counter - Alerts -->
                                <!-- <span class="badge badge-danger badge-counter">99+</span> -->
                            </a>
                            


                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a href="login.html" class="nav-link dropdown-toggle" id="" role="button"
                                data-toggle="" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">2</span>
                            </a>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Papai</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div id="drp" class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">

                                <form method="POST" action="./data/fp.php" id="fff" >
                                    <input type="hidden" name="pontosEllen" value="{{lista.Ellen}}"/>                                      
                                    <input type="hidden" name="objRafa" value="{{lista.objRafa}}"/>   
                                    <input type="hidden" name="pontosRafa" value="{{lista.Rafa}}"/>     
                                    <input type="hidden" name="objBia" value="{{lista.objBia}}"/>                              
                                    <input type="hidden" name="pontosBia" value="{{lista.Bia}}"/>
                                

                                <div ng-if="lista.senha=='lilili'">

                                    <label class="row justify-content-center"> Éllen </label>
                                    <div class="input-group input-group-md mb-3" style="padding: 0 15%;">
                                        <div class="input-group-prepend">
                                          <span ng-click="menosPonto('Ellen');" class="input-group-text" id="inputGroup-sizing-sm">-</span>
                                        </div>
                                        <input type="text" class="form-control" ng-value="lista.Ellen" disabled>
                                        <div class="input-group-append">
                                            <span ng-click="maisPonto('Ellen');$('#drp').addClass('show');" class="input-group-text" id="inputGroup-sizing-sm">+</span>
                                          </div> 
                                    </div>
                                    <label class="row justify-content-center"> Rafael </label>
                                    <div class="input-group input-group-md mb-3" style="padding: 0 15%;">
                                        <div class="input-group-prepend">
                                          <span ng-click="menosPonto('Rafa');" class="input-group-text" id="inputGroup-sizing-sm">-</span>
                                        </div>
                                        <input type="text" class="form-control" ng-value="lista.Rafa" disabled>
                                        <div class="input-group-append">
                                            <span ng-click="maisPonto('Rafa');" class="input-group-text" id="inputGroup-sizing-sm">+</span>
                                          </div> 
                                    </div>
                                    <label class="row justify-content-center"> Beatriz </label>
                                    <div class="input-group input-group-md mb-3" style="padding: 0 15%;">
                                        <div class="input-group-prepend">
                                          <span ng-click="menosPonto('Bia');" class="input-group-text" id="inputGroup-sizing-sm">-</span>
                                        </div>                                        
                                        <input type="text" class="form-control" ng-value="lista.Bia" disabled>
                                        <div class="input-group-append">
                                            <span ng-click="maisPonto('Bia');"class="input-group-text" id="inputGroup-sizing-sm">+</span>
                                          </div> 
                                    </div>
                                </form>
                                    <a  ng-click="salvar();"class="dropdown-item" href="#" >
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Salvar
                                    </a>
                                <div class="dropdown-divider"></div>


<!-- 
                                <a ng-click="maisPonto('Rafa');" class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Rafael +
                                </a>

                                <a ng-click="maisPonto('Bia');" class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Beatriz +
                                </a>   
                                <div class="dropdown-divider"></div>                             
                                <a ng-click="menosPonto('Rafa');" class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Rafael -
                                </a>
                                
                                <a ng-click="menosPonto('Bia');" class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Beatriz -
                                </a>
                                <div class="dropdown-divider"></div> -->
                               
                                </div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Sair
                                </a>


                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Content Row -->
                    <div class="row">

               
						 <!-- Earnings (Monthly) Card Example -->
						 <div class="col-xl-2 col-md-4 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pontos - Bia</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{lista.Bia}},00</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-2 col-md-4 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Pontos - Rafa</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{lista.Rafa}},00</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-2 col-md-4 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Pontos - Éllen</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{lista.Ellen}},00</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                             <!-- Project Card Example -->
							 <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Objetivos - Bia</h6>
                                </div>
                                <div class="card-body">
                             
                                <h4 class="small font-weight-bold">{{lista.objBia}}<span
                                            class="float-right">{{lista.Bia}}%</span></h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: {{lista.Bia}}%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Objetivos - Rafa</h6>
                                </div>
                                <div class="card-body">
                            
                                    <h4 class="small font-weight-bold">{{lista.objRafa}} <span
                                            class="float-right">{{lista.Rafa}}%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: {{lista.Rafa}}%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>    
                                </div>
                            </div>

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Objetivos - Éllen</h6>
                                </div>
                                <div class="card-body">
                             
                                    <h4 class="small font-weight-bold">Dominar o mundo!!! <span
                                            class="float-right">{{lista.Ellen}}%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: {{lista.Ellen}}%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    
                                </div>
                            </div>                           
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Papai </span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
