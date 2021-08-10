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
                    <li class="nav-item pcoded-menu-caption">
                        <label>Recepción</label>
                    </li>
                    <li class="nav-item active">
                        <a href="{{route('reception')}}" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-user-plus"></i></span><span
                                class="pcoded-mtext">Registro</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('waitingList')}}" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-list"></i></span><span class="pcoded-mtext">En Espera</span></a>
                    </li>
                    @if (Auth::user()->type === 'doctor')
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
                                        class="fas fa-user"></i></span><span
                                    class="pcoded-mtext">Usuarios</span></a>
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
                            <h5>Recepción</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="{{route('addConsultation')}}" method="POST">
                                    @csrf 
                                    <div class="row">
                                        <div class="col-md-12 form-group fill">
                                            <label for="paciente" style="color: #E696C0;">Paciente:</label>
                                            <div class="input-group">
                                                <select class="form-control selectpicker" data-live-search="true" id="paciente" name="paciente" required>
                                                    <option>Seleccione o añada un nuevo paciente</option>
                                                    @foreach ($patients as $patient)
                                                        <option value="{{$patient->id}}" data-tokens="{{$patient->name}}">{{$patient->name}}</option>
                                                    @endforeach
                                                </select>
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary has-ripple" data-toggle="modal"
                                                        data-target="#modalNuevoPaciente"><span class="pcoded-micon"><i
                                                                class="feather icon-user-plus"></i><span
                                                                class="ripple ripple-animate"></span></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 form-group fill">
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
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group fill">
                                                <label class="floating-label" for="peso">Fecha y hora Cita:</label>
                                                <input type="datetime-local"  class="form-control" id="fechahoraconsulta" name="fechahoraconsulta" required value="{{date('Y-m-d\TH:i')}}">
                                            </div>
                                        </div>
                                          <div class="col-md-4">
                                            <div class="form-group fill">
                                                <label class="floating-label" for="fecha_nacimiento">Lista de espera</label><br>
                                                <div class="custom-control">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <input type="hidden" value="0" id="cita" name="cita">
                                                    <label class="custom-control-label" id="sincita" for="customCheck1">Sin Cita</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group fill">
                                                <label class="floating-label" for="peso">Peso:</label>
                                                <input type="number" step="0.01" class="form-control" id="peso" name="peso" required>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group fill">
                                                <label class="floating-label" for="edad">Edad:</label>
                                                <input type="number" step="0.01" class="form-control" id="edad"
                                                    name="edad">
                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group fill">
                                                <label class="floating-label" for="talla">Talla:</label>
                                                <input type="number" class="form-control" id="talla" name="talla">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group fill">
                                                <label class="floating-label" for="TA">T.A:</label>
                                                <input type="text" class="form-control" id="TA" name="TA">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group fill">
                                                <label class="floating-label" for="temperatura">Temperatura:</label>
                                                <select class="form-control" name="temperatura" id="temperatura">
                                                    <option>36</option>
                                                    <option>36.5</option>
                                                    <option>37</option>
                                                    <option>37.5</option>
                                                    <option>38</option>
                                                    <option>38.5</option>
                                                    <option>39</option>
                                                    <option>39.5</option>
                                                    <option>40</option>
                                                    <option>40.5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group fill">
                                               <div class="input-group">
                                                    <label class="floating-label" for="tipo">Tipo:</label><br>
                                                    <select class="form-control" id="tipo" name="tipo" required>
                                                        <option selected>Consulta</option>
                                                        <option>Revisión</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group fill">
                                                <label for="otro" class="floating-label">Otro</label>
                                                <textarea class="form-control" rows="3" id="otro"
                                                    name="other"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-outline-primary float-right"><i class="feather icon-save"></i> Guardar</button>
                                </form>
                                </div>
                                <div class="col-md-6">
                                    <div id="calendar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <div id="modalNuevoPaciente" class="modal fade" tabindex="-1" role="dialog"
        aria-labelledby="modalNuevoPacienteLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalNuevoPacienteLabel">Nuevo Paciente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                <form action="{{route('addPatient')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group fill">
                                <label class="floating-label" for="pNombre">Nombre:</label>
                                <input type="text" class="form-control" id="pNombre" name="pNombre" required>
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group fill">
                                <label class="floating-label" for="pTelefono">Teléfono:</label>
                                <input type="number" maxlength="10" class="form-control" id="pTelefono" name="pTelefono" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group fill">
                                <label class="floating-label" for="pEmergencias">Teléfono Emergencias:</label>
                                <input type="number" maxlength="10" class="form-control" id="pEmergencias" name="pEmergencias">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group fill">
                                <label class="floating-label" for="pFecha">Fecha de Nacimiento:</label>
                                <input type="date" class="form-control" id="pFecha" name="pFecha" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                        <br>
                            <div class="form-group fill">
                                <label class="floating-label" for="pFecha">Sexo:</label>
                                <select class="form-control"  id="pSexo" name="pSexo" required>
                                    <option>Masculino</option>
                                    <option>Femenino</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6"><br>
                            <div class="form-group fill">
                                <label class="floating-label" for="pFecha">Estado Civil:</label>
                                <select class="form-control"  id="pCivil" name="pCivil" required>
                                    <option>Casado</option>
                                    <option>Soltero</option>
                                    <option>Viudo</option>
                                    <option>Divorciado</option>
                                    <option>Union Libre</option>
                                    <option>No Aplica</option>
                                    <option>Se Ignora</option>
                                </select>
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group fill">
                                <label for="otro" class="floating-label">Domicilio</label>
                                <textarea class="form-control" rows="3" id="pDomicilio" name="pDomicilio"></textarea>
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-12 fill">
                            <div class="form-group fill">
                                <label for="otro" class="floating-label">Historia Clinica</label>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="documento">
                                <label class="custom-file-label" for="validatedCustomFile">Seleccione Archivo...</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn  btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn  btn-primary">Guardar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/plugins/moment.js"></script>
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <script src="assets/js/plugins/fullcalendar.min.js"></script>
    <script src="assets/js/ripple.js"></script>
    <script src="assets/js/pcoded.min.js"></script>

<!-- Apex Chart -->
<script src="assets/js/plugins/apexcharts.min.js"></script>


<!-- custom-chart js -->
<script src="assets/js/pages/dashboard-main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>

    <script>
        // Full calendar
        $(window).on('load', function () {
            $('#calendar').fullCalendar({
                 height: 650,
                views: {
                    month: { columnHeaderFormat: 'ddd', displayEventEnd: true, eventLimit: 3 },
                    week: { columnHeaderFormat: 'ddd DD', titleRangeSeparator: ' \u2013 ' },
                    day: { columnHeaderFormat: 'dddd' },
                },
                dayNames: ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'],
                dayNamesShort: ['Dom','Lun','Mar','Mie','Jue','Vie','Sáb'],
                monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                buttonText: {
                    today:    'Hoy',
                    month:    'Mes',
                    week:     'Semana',
                    day:      'Día',
                    list:     'Lista'
                },
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },

                editable: false,
                droppable: false,
                events: JSON.parse(@json($e))
            });
        });
        $("#paciente").change(function() {
            var idPaciente = $("#paciente").val();
            var formData = {
                _token: "{{ csrf_token() }}",
                patient: idPaciente,
            };
            $.ajax({
                type: 'POST',
                url: 'getBirthdate',
                data: formData,
                dataType: 'json',
                success: function (data) {
                    var birthdate = data['birthdate'];
                    $('#fecha_nacimiento').val(birthdate);
                    $('#edad').val(calcularEdad(birthdate));
                },
                error: function (data) {
                    console.log(data);
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
        $("#sincita" ).click(function() {
            var cita = $('#cita').val();
            if(cita == 0){
                $('#cita').val(1);
                $('#fechahoraconsulta').prop('required',false);
            }else{
                $('#cita').val(1);
            }
            
        });

        
    </script>
</body>

</html>
