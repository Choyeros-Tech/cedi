<!DOCTYPE html>
<html lang="es">

<head>
    <title>Cedi</title>
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="ChoyerosTech" />
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/plugins/fullcalendar.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
</head>
<body>
    <nav class="pcoded-navbar menu-light">
        <div class="navbar-wrapper">
            <div class="navbar-content scroll-div">

                <div>
                    <div class="main-menu-header">
                        <img class="img-radius" src="assets/images/cedi.png" alt="User-Profile-Image">
                        <div class="user-details">
                            <div id="more-details">{{Auth::user()->name}}</div>
                        </div>
                    </div>
                </div>

                <ul class="nav pcoded-inner-navbar ">
                    @if (Auth::user()->type === 'recetario')
                    <li class="nav-item">
                        <a href="{{route('prescriptionsonly')}}" class="nav-link "><span class="pcoded-micon"><i
                                    class="fas fa-pills"></i></span><span class="pcoded-mtext">Recetario</span></a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->
    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">


        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            <a href="#!" class="b-brand">
               CEDI
            </a>
            <a href="#!" class="mob-toggler">
                <i class="feather icon-more-vertical"></i>
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
            </ul>
        </div>


    </header>
    <!-- [ Header ] end -->



    <!-- [ Main Content ] start -->
    <section class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Servicios Médicos Familiares</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ form-element ] start -->
                <div class="col-sm-12">
                    <div class="card">

                        <div class="card-body">
                            <h5>Recetario</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-5 form-group fill">
                                            <label for="paciente" style="color: #E696C0;">Paciente:</label>
                                            <div class="input-group">
                                                <input class="form-control"  id="paciente" name="paciente">
                                            </div>
                                        </div>
                                        <div class="col-md-5 form-group fill">
                                            <label for="paciente" style="color: #E696C0;">Doctor:</label>
                                            <div class="input-group">
                                                <select class="form-control" id="doctor" name="doctor" required>
                                                    <option disabled>Seleccione doctor</option>
                                                    @foreach ($doctors as $doctor)
                                                        <option value="{{$doctor->id}}">Dr. {{$doctor->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2 form-group fill">
                                            <label for="paciente" style="color: #E696C0;">Fecha y Hora:</label>
                                            <div class="input-group">
                                                <input type="datetime-local"  class="form-control" id="fechahoraconsulta" name="fechahoraconsulta" required value="{{date('Y-m-d\TH:i')}}">
                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group fill">
                                                <label for="otro" class="floating-label">Prescripción</label>
                                                <textarea class="form-control" rows="10" id="otro"
                                                    name="other"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-outline-primary float-right" id="generar"><i class="feather icon-save"></i> Generar Receta</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="loginassets/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/plugins/moment.js"></script>
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <script src="assets/js/plugins/fullcalendar.min.js"></script>
    <script src="assets/js/ripple.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <script>
        $("#generar").click(function() {
            var paciente = $('#paciente').val();
            var doctor = $('#doctor').val();
            var fechahoraconsulta = $('#fechahoraconsulta').val();
            var otro = $('#otro').val();
            var url = `/pres`;
            window.open(url, "_blank", "width=1200,height=730");
        });

    </script>

</body>

</html>
