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
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/plugins/fullcalendar.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/timer.css">
    <style>
    #tags {
        margin-top:2em;
        height:75px;
        width:90%;
        border:1px solid #000;
        font:"serif";
    }
 </style>
</head>
<body>
    <nav class="pcoded-navbar menu-light">
        <div class="navbar-wrapper">
            <div class="navbar-content scroll-div">

                <div>
                    <div class="main-menu-header">
                        <img class="img-radius" src="../assets/images/cedi.png" alt="User-Profile-Image">
                        <div class="user-details">
                            <div id="more-details">{{Auth::user()->name}}</div>
                        </div>
                    </div>
                </div>

                <ul class="nav pcoded-inner-navbar ">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Recepción</label>
                    </li>
                    <li class="nav-item">
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
                    <li class="nav-item pcoded-menu-caption">
                        <label>Estadtisticas</label>
                    </li>
                    <li class="nav-item">
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
                                <div id="app" class="col-md-12 col-sm-12 text-right"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Paciente -->
                <div class="col-sm-12 col-xl-3 col-md-3">
                    <div class="card" style="height: 50vh;">
                        <div class="card-body">
                            <div class="row align-items-center m-l-0">
                                <div class="col-auto">
                                    <i class="fas fa-user-injured f-36 text-c-purple"></i>
                                </div>
                                <div class="col-auto">
                                    <h6 class="text-muted m-b-10">Paciente:</h6>
                                    <p class="m-b-0">{{$patient[0]->name}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6 col-xs-6 col-sm-12">
                                    <div class="col-auto">
                                        <h6 class="text-muted m-b-10">Edad:</h6>
                                        <p class="m-b-0" id="edad">{{$edad}} Años</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="col-auto">
                                        <h6 class="text-muted m-b-10">Talla:</h6>
                                        <p class="m-b-0">{{$consultation[0]->size}}</p>
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="col-auto">
                                        <h6 class="text-muted m-b-10">Peso:</h6>
                                        <p class="m-b-0">{{$consultation[0]->weight}} Kg</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="col-auto">
                                        <h6 class="text-muted m-b-10">T.A:</h6>
                                        <p class="m-b-0">{{$consultation[0]->TA}}</p>
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="col-auto">
                                        <h6 class="text-muted m-b-10">Temperatura:</h6>
                                        <p class="m-b-0">{{$consultation[0]->temperature}}º</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="col-auto">
                                        <h6 class="text-muted m-b-10">Tipo:</h6>
                                        <p class="m-b-0">{{$consultation[0]->type}}</p>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="col-auto">
                                        <h6 class="text-muted m-b-10">Otro:</h6>
                                        <p class="m-b-0">{{$consultation[0]->other}}</p>
                                    </div>
                                </div>
                            </div>
                             
                        </div>
                    </div>
                </div>
                <!-- Fin Paciente -->
                 <!-- Historial -->
                <div class="col-sm-12 col-xl-9 col-md-9">
                    <div class="card" style="height: 50vh;">
                        <div class="card-body">
                            <div class="row align-items-center m-l-0">
                                <div class="col-auto">
                                    <i class="fas fa-book-open f-36 text-c-purple"></i>
                                </div>
                                <div class="col-auto">
                                    <h6 class="text-muted m-b-10">Historial de Consultas</h6>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 text-center">
                                  <div class="form-group fill">
                                        <label class="floating-label" for="Email">Búscar en historial del paciente</label>
                                        <input type="email" class="form-control" id="searchHistorial" placeholder="Escriba para filtrar">
                                    </div>
                                    <div class="table-responsive" style="max-height: 30vh;">
                                        <table id="historial-table" class="table table-bordered table-striped mb-0 table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Fecha</th>
                                                    <th>Peso</th>
                                                    <th>Talla</th>
                                                    <th>TA</th>
                                                    <th>Temperatura</th>
                                                    <th>Diagnostico</th>
                                                    <th>Tratamiento</th>
                                                </tr>
                                            </thead>
                                            <tbody id="myHistorial">
                                            @foreach ($historials as $historial)
                                                <tr>
                                                    <td>{{$historial->updated_at}}</td>
                                                    <td>{{$historial->weight}}</td>
                                                    <td>{{$historial->size}}</td>
                                                    <td>{{$historial->TA}}</td>
                                                    <td>{{$historial->temperature}}</td>
                                                    <td style="white-space: pre-wrap;">{{$historial->diagnostic}}</td>
                                                    <td style="white-space: pre-wrap;">{{$historial->prescription}}</td>
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
                <!-- Fin Historial -->
            </div>
            <div class="row">
            <!-- Entrevista -->
                <div class="col-sm-12 col-xl-6 col-md-6">
                    <div class="card" style="height: 50vh;">
                        <div class="card-body">
                            <div class="row align-items-center m-l-0">
                                <div class="col-auto">
                                    <i class="feather icon-corner-right-up f-36 text-c-purple"></i>
                                </div>
                                <div class="col-auto">
                                    <h6 class="text-muted m-b-10">Notas de Evolución</h6>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="col-auto">
                                        <textarea class="form-control" placeholder="Escriba los sintomas que el paciente le indica" rows="10" id="sintomas"></textarea> <br>
                                        <!--<button class="btn btn-primary float-right">Guardar</button>-->
                                    </div>
                                </div>
                            </div><br>
                        </div>
                    </div>
                </div>
            <!-- Fin Entrevista -->
             <!-- Diagnostico -->
                <div class="col-sm-12 col-xl-6 col-md-6">
                    <div class="card" style="height: 50vh;">
                        <div class="card-body">
                            <div class="row align-items-center m-l-0">
                                <div class="col-auto">
                                    <i class="fas fa-stethoscope f-36 text-c-purple"></i>
                                </div>
                                <div class="col-auto">
                                    <h6 class="text-muted m-b-10">Diagnostico</h6>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="col-auto">
                                        <label for="diagnostico">Tags:</label>
                                        <textarea class="form-control" placeholder="Escriba su diagnostico" rows="10" id="diagnostico"></textarea> <br>
                                        <!--<button class="btn btn-primary float-right">Guardar</button>-->
                                    </div>
                                </div>
                            </div><br>
                        </div>
                    </div>
                </div>
            <!-- Fin Diagnostico -->

             <!-- Medicamentos -->
                <div class="col-xl-6 col-md-6">
                    <div class="card" style="height: 50vh;">
                        <div class="card-body">
                            <div class="row align-items-center m-l-0">
                                <div class="col-auto">
                                    <i class="fas fa-list f-36 text-c-purple"></i>
                                </div>
                                <div class="col-auto">
                                    <h6 class="text-muted m-b-10">Medicamento Guardado:</h6>
                                    <button type="button" class="btn btn-sm btn-outline-primary"  data-toggle="modal" data-target="#newPrescriptionModal"><i class="feather icon-file-plus mr-2"></i>Nuevo</button>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group fill">
                                        <label class="floating-label" for="Email">Búscar Medicamento</label>
                                        <input type="text" class="form-control" id="searchprescription" placeholder="Escriba para filtrar">
                                    </div>
                                   <div class="table-responsive" style="max-height: 30vh;">
                                        <table id="report-table" class="table table-bordered table-striped mb-0 table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Medicamento</th>
                                                    <th>Prescripción</th>
                                                    <th>Grupo</th>
                                                </tr>
                                            </thead>
                                            <tbody id="myPrescription">
                                            @foreach ($prescriptions as $prescription)
                                                <tr onclick="setPrescription('{{$prescription->disease}}', '{{$prescription->treatment}}')">
                                                    <td>{{$prescription->disease}}</td>
                                                    <td>{!! $prescription->treatment !!}</td>
                                                    <td>{{$prescription->group}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                    </div>
                </div>
                <!-- Fin Medicamentos -->
                
                <!-- Receta -->
                <div class="col-xl-6 col-md-6">
                    <div class="card" style="height: 50vh;">
                        <div class="card-body">
                            <div class="row align-items-center m-l-0">
                                <div class="col-auto">
                                    <i class="fas fa-pills f-36 text-c-purple"></i>
                                </div>
                                <div class="col-auto">
                                    <h6 class="text-muted m-b-10">Se recetará:</h6>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="col-auto">
                                        <textarea class="form-control" rows="9" id="prescription"></textarea> <br>
                                        
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="row">
                                        <button id="openHistory" class="btn btn-success float-right">Historia Clinica</button>
                                        <button id="openLab" class="btn btn-warning float-right">Solicitud de Laboratorio</button>
                                        <button id="openStudies" class="btn btn-danger float-right">Solicitud de Estudios</button>
                                        <button id="printTreatment" class="btn btn-primary float-right">Finalizar Consulta</button>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                    </div>
                </div>
                <!-- Fin Receta -->
                <div class="col-xl-12 col-md-12">
                    <div class="card" style="height: 80vh;">
                        <div class="card-body">
                            <div class="row align-items-center m-l-0">
                                <div class="col-auto">
                                    <i class="fas fa-list f-36 text-c-purple"></i>
                                </div>
                                <div class="col-auto">
                                    <h6 class="text-muted m-b-10">Historia Clinica:</h6>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <embed id="historiaPDF" src="../docs/{{$patient[0]->history}}" type="application/pdf" width="100%" height="600px">
                                </div>
                            </div><br>
                        </div>
                    </div>
                </div>
            </div>           
        </div>
    </section>
    <div id="newPrescriptionModal" class="modal fade" tabindex="-1" role="dialog"
        aria-labelledby="modalNuevoPacienteLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalNuevoPacienteLabel">Nuevo Medicamento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group fill">
                                <label class="floating-label" for="pNombre">Medicamento:</label>
                                <input type="text" class="form-control" id="enfermedad" name="enfermedad" required>
                            </div>
                        </div>
                    </div><br>
                     <div class="row">
                        <div class="col-md-12">
                            <div class="form-group fill">
                                <label class="floating-label" for="pNombre">Grupo:</label>
                                <input type="text" class="form-control" id="grupo" name="grupo" required>
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group fill">
                                <label class="floating-label" for="pTelefono">Prescripción:</label>
                                <textarea class="form-control" rows="3" id="prescripcion" name="prescripcion"></textarea>
                            </div>
                        </div>

                    </div><br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn  btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button id="savePrescriptionbtn" class="btn  btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <audio id="audio" controls style="display: none">
        <source type="audio/wav" src="../assets/sounds/alarm.wav">
    </audio>

    
    <script src="../assets/js/vendor-all.min.js"></script>
    <script src="../assets/js/plugins/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="../assets/js/jquery-ui.min.js"></script>
    <script src="../assets/js/textarea-helper.js"></script>
    <script src="assets/js/ripple.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
  
    <script>
        $(document).ready(function(){
            $("#searchprescription").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myPrescription tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
            $("#searchServices").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myServices tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
            $("#searchHistorial").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myHistorial tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
            $("#searchAnalysis").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myAnalysis tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
            var birthdate = '{{$patient[0]->name}}';
            $('#edad').append(calcularEdad(birthdate));

             startTimer(); 
        });

        function setPrescription(medical, treatment){
           $("#prescription").append(medical + ' - '+treatment.replace("<br>", "\n") + "\n");
        }

        $("#openHistory").click(function() {
            const param = "{{ $consultation[0]->id }}";
            var url = `/history?id=${btoa(param)}`;
            window.open(url, "_blank", "width=1200,height=730");
        });
         
        $("#printTreatment").click(function() {
            //actualizar sintomas y añadir la receta

            var alergias = $('input:radio[name=alergia]:checked').val()
            var id_consulta = {{$id}};
            var sintomas = $("#sintomas").val();
            var prescription = $("#prescription").val();
            var diagnostico = $("#diagnostico").val();
            var formData = {
                _token: "{{ csrf_token() }}",
                prescription: prescription,
                symptom: sintomas,
                id_consulta: id_consulta,
                diagnostico: diagnostico
            };
            $.ajax({
                type: 'POST',
                url: '../finalizeConsultation',
                data: formData,
                dataType: 'json',
                success: function (data) {
                  console.log("consulta", data);
                  
                },
                error: function (data) {
                    console.log('error', data);
                }
            });
            
           var url = '/savePrescription/' + id_consulta;
           window.open(url, "_blank", "width=1200,height=730");
        });

        $('#openLab').click(() => {
            const param = "{{ $consultation[0]->id }}";
            var url = `/lab?id=${btoa(param)}`;
            window.open(url, "_blank", "width=1200,height=730");
        });
        $('#openStudies').click(()=>{
            const param = "{{ $consultation[0]->id }}";
            var url = `/stu?id=${btoa(param)}`;
            window.open(url, "_blank", "width=1200,height=730");
        });

        $("#savePrescriptionbtn").click(function() {
            var enfermedad = $('#enfermedad').val();
            var prescripcion = $('#prescripcion').val();
            var grupo = $('#grupo').val();

            var formData = {
                _token: "{{ csrf_token() }}",
                enfermedad: enfermedad,
                prescripcion: prescripcion,
                grupo: grupo
            };
            $.ajax({
                type: 'POST',
                url: '../addPrescription',
                data: formData,
                dataType: 'json',
                success: function (data) {
                  console.log("data", data);
                  location.reload();
                },
                error: function (data) {
                    console.log('error', data);
                }
            });
            
        });


        function calcularEdad(fecha) {
            var hoy = new Date();
            var cumpleanos = new Date(fecha);
            var edad = hoy.getFullYear() - cumpleanos.getFullYear();
            var m = hoy.getMonth() - cumpleanos.getMonth();
            if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
                edad--;
            }
            return edad;
        }


const FULL_DASH_ARRAY = 283;
const WARNING_THRESHOLD = 10;
const ALERT_THRESHOLD = 5;

const COLOR_CODES = {
  info: {
    color: "green"
  },
  warning: {
    color: "orange",
    threshold: WARNING_THRESHOLD
  },
  alert: {
    color: "red",
    threshold: ALERT_THRESHOLD
  }
};

const TIME_LIMIT = 1200;
let timePassed = 0;
let timeLeft = TIME_LIMIT;
let timerInterval = null;
let remainingPathColor = COLOR_CODES.info.color;

document.getElementById("app").innerHTML = `
<div class="base-timer">
  <svg class="base-timer__svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
    <g class="base-timer__circle">
      <circle class="base-timer__path-elapsed" cx="50" cy="50" r="45"></circle>
      <path
        id="base-timer-path-remaining"
        stroke-dasharray="283"
        class="base-timer__path-remaining ${remainingPathColor}"
        d="
          M 50, 50
          m -45, 0
          a 45,45 0 1,0 90,0
          a 45,45 0 1,0 -90,0
        "
      ></path>
    </g>
  </svg>
  <span id="base-timer-label" class="base-timer__label">${formatTime(
    timeLeft
  )}</span>
</div>
`;

      

    function onTimesUp() {
        clearInterval(timerInterval);
    }

    function startTimer() {
        timerInterval = setInterval(() => {
            timePassed = timePassed += 1;
            timeLeft = TIME_LIMIT - timePassed;
            document.getElementById("base-timer-label").innerHTML = formatTime(
            timeLeft
            );
            setCircleDasharray();
            setRemainingPathColor(timeLeft);

            if (timeLeft === 0) {
                var audio = document.getElementById("audio");
                audio.play();
                Swal.fire({
                    title: 'Tiempo',
                    text: 'Se ha terminado el contador de 20 minutos',
                    icon: 'info',
                    confirmButtonText: 'Aceptar'
                })
            onTimesUp();
            }
        }, 1000);
    }

    function formatTime(time) {
    const minutes = Math.floor(time / 60);
    let seconds = time % 60;

    if (seconds < 10) {
        seconds = `0${seconds}`;
    }

    return `${minutes}:${seconds}`;
    }

    function setRemainingPathColor(timeLeft) {
    const { alert, warning, info } = COLOR_CODES;
    if (timeLeft <= alert.threshold) {
        document
        .getElementById("base-timer-path-remaining")
        .classList.remove(warning.color);
        document
        .getElementById("base-timer-path-remaining")
        .classList.add(alert.color);
    } else if (timeLeft <= warning.threshold) {
        document
        .getElementById("base-timer-path-remaining")
        .classList.remove(info.color);
        document
        .getElementById("base-timer-path-remaining")
        .classList.add(warning.color);
    }
    }

    function calculateTimeFraction() {
    const rawTimeFraction = timeLeft / TIME_LIMIT;
    return rawTimeFraction - (1 / TIME_LIMIT) * (1 - rawTimeFraction);
    }

    function setCircleDasharray() {
    const circleDasharray = `${(
        calculateTimeFraction() * FULL_DASH_ARRAY
    ).toFixed(0)} 283`;
    document
        .getElementById("base-timer-path-remaining")
        .setAttribute("stroke-dasharray", circleDasharray);
    }

    $("document").ready(function() {
		// The tags we will be looking for
		var categoryTags = ["interest", "research", "personal", "social", "inventory"];
		var interestTags = ["company", "ticker", "sector", "currency", "region"];
		var researchTags = ["report", "analyst", "notes", "ideas"];
		var personalTags = ["spouse", "wife", "husband", "son", "daughter", "birthday", "anniversary", "school", "college", "university"];
		var inventoryTags = ["software", "hardware", "OMS", "EMS", "SOR", "algos", "network", "routing network"];

		// State variable to keep track of which category we are in
		tagState = categoryTags;

		// Helper functions
		function split(val) {
			return val.split( /,\s*/ );
		}

		function extractLast(term) {
			return split(term).pop();
		}


		$("#diagnostico").autocomplete({
			minLength : 0,
			autoFocus : true,
            source : function(request, response) {
                // Use only the last entry from the textarea (exclude previous matches)
                lastEntry = extractLast(request.term);

				var filteredArray = $.map(tagState, function(item) {
					if (item.indexOf(lastEntry) === 0) {
						return item;
					} else {
						return null;
					}
				});
               
				// delegate back to autocomplete, but extract the last term
				response($.ui.autocomplete.filter(filteredArray, lastEntry));
			},
			focus : function() {
				// prevent value inserted on focus
				return false;
			},
			select : function(event, ui) {
				var terms = split(this.value);
				// remove the current input
				terms.pop();
				// add the selected item
				terms.push(ui.item.value);
				// add placeholder to get the comma-and-space at the end
				terms.push("");
				this.value = terms.join(", ");
				return false;
			}
		}).on("keydown", function(event) {
			// don't navigate away from the field on tab when selecting an item
			if (event.keyCode === $.ui.keyCode.TAB /** && $(this).data("ui-autocomplete").menu.active **/) {
				event.preventDefault();
				return;
			}

			// Code to position and move the selection box as the user types
			var newY = $(this).textareaHelper('caretPos').top + (parseInt($(this).css('font-size'), 10) * 1.5);
			var newX = $(this).textareaHelper('caretPos').left;
			var posString = "left+" + newX + "px top+" + newY + "px";
			$(this).autocomplete("option", "position", {
				my : "left top",
				at : posString
			});
		});
	});
    </script>
</body>

</html>
