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
                    <li class="nav-item pcoded-menu-caption">
                        <label>Recepción</label>
                    </li>
                    <li class="nav-item ">
                        <a href="{{route('reception')}}" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-user-plus"></i></span><span
                                class="pcoded-mtext">Registro</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('waitingList')}}" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-list"></i></span><span class="pcoded-mtext">En Espera</span></a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Pacientes</label>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('patients')}}" class="nav-link "><span class="pcoded-micon"><i
                                    class="fas fa-user-injured"></i></span><span class="pcoded-mtext">Lista</span></a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Herramientas</label>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('schedules')}}" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-calendar"></i></span><span
                                class="pcoded-mtext">Mi Agenda</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('prescriptions')}}" class="nav-link "><span class="pcoded-micon"><i
                                    class="fas fa-pills"></i></span><span class="pcoded-mtext">Mis Recetas</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('prescriptionsonly')}}" class="nav-link "><span class="pcoded-micon"><i
                                    class="fas fa-pills"></i></span><span class="pcoded-mtext">Recetario</span></a>
                    </li>
                    <li class="nav-item active">
                        <a href="{{route('charts')}}" class="nav-link "><span class="pcoded-micon"><i
                                    class="fas fa-chart-pie"></i></span><span
                                class="pcoded-mtext">general</span></a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Sistema</label>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('users')}}" class="nav-link "><span class="pcoded-micon"><i
                                    class="fas fa-chart-pie"></i></span><span
                                class="pcoded-mtext">Usuarios</span></a>
                    </li>
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
                         <h5>Estadisticas Generales</h5>   
                         <form action="{{route('filterChart')}}" method="POST">
                         @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="paciente" style="color: #E696C0;">Doctor:</label>
                                    <div class="input-group fill">
                                        <select class="form-control" id="doctor" name="doctor" required>
                                            <option selected>Todos</option>
                                            @foreach ($doctors as $doctor)
                                            <option value="{{$doctor->id}}">Dr. {{$doctor->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <br>
                                    <div class="input-group fill">
                                       <button class="btn btn-primary">Enviar</button>
                                    </div>
                                </div>
                            </div>
                            </form>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="chart3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/plugins/moment.js"></script>
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="assets/js/ripple.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <script>
Highcharts.chart('chart3', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Principales Diagnosticos'
    },
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Total'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.0f}'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}</b> of total<br/>'
    },

    series: [
        {
            colorByPoint: true,
            data: @json($diagnostics)
        }
    ],

});

</script>

</body>

</html>
