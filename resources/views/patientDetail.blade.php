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
            <form action="{{route('updatePatient')}}" method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="row">
                <!-- Paciente -->
                <div class="col-sm-12 col-xl-3 col-md-3">
                    <div class="card" style="height: 100vh;">
                        <div class="card-body">
                            <div class="row align-items-center m-l-0">
                                <div class="col-auto">
                                    <i class="fas fa-user-injured f-36 text-c-purple"></i>
                                </div>
                                <div class="col-auto">
                                    <h6 class="text-muted m-b-10">Paciente:</h6>
                                </div>
                                    <input type="hidden" name="id" id="id" class="form-control" value="{{$patient->id}}">
                                    <input type="text" name="name" class="form-control" value="{{$patient->name}}">
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12 col-xs-12 col-sm-12">
                                    <div class="col-auto">
                                        <h6 class="text-muted m-b-10">Telefono:</h6>
                                        <input class="form-control" name="phone" value="{{$patient->phone}}">
                                    </div><br>
                                    <div class="col-auto">
                                        <h6 class="text-muted m-b-10">Telefono Emergencias:</h6>
                                        <input class="form-control" name="emergencyPhone" value="{{$patient->emergencyPhone}}">
                                    </div>
                                </div>
                                <div class="col-md-12 col-xs-12 col-sm-12">
                                    <div class="col-auto"><br>
                                        <h6 class="text-muted m-b-10">Fecha de Nacimiento:</h6>
                                         <input type=date" name="birthdate" class="form-control" value="{{$patient->birthdate}}">
                                    </div>
                                </div>
                                <div class="col-md-12 col-xs-12 col-sm-12">
                                    <div class="col-auto"><br>
                                        <h6 class="text-muted m-b-10">Dirección:</h6>
                                        <input type=date" name="address" class="form-control" value="{{$patient->address}}">
                                    </div>
                                </div>
                                <div class="col-md-12 col-xs-12 col-sm-12">
                                    <div class="col-auto"><br>
                                        <h6 class="text-muted m-b-10">Sexo:</h6>
                                        <select class="form-control"  id="sexo" name="sexo" required>
                                            <option>{{$patient->sex}}</option>
                                            <option>Masculino</option>
                                            <option>Femenino</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xs-12 col-sm-12">
                                    <div class="col-auto"><br>
                                        <h6 class="text-muted m-b-10">Estado Civil:</h6>
                                        <select class="form-control"  id="civil" name="civil" required>
                                            <option>{{$patient->civil}}</option>
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
                                <div class="col-md-12 col-xs-12 col-sm-12">
                                    <div class="col-auto"><br>
                                        <h6 class="text-muted m-b-10">Cargar Historia Clinica</h6>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="documento">
                                            <label class="custom-file-label" for="validatedCustomFile">Seleccione Archivo...</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xs-12 col-sm-12">
                                    <div class="col-auto"><br>
                                        <button class="btn btn-danger" id="eliminar">Eliminar Paciente</button>
                                        <input type="submit"  class="btn btn-primary float-right" id="envio" value="Actualizar">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- Fin Paciente -->
                 <!-- Historial -->
                <div class="col-sm-12 col-xl-9 col-md-9">
                    <div class="card" style="height: 100vh;">
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
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row align-items-center m-l-0 p-2 float-right">
                            <button id="openHistory" class="btn btn-primary float-right">Nueva Historia Clinica</button>
                        </div>
                    </div>
                </div>
                <!-- Fin Historial -->
            </div>
            </form>
            <div class="row">
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
                                    <embed id="historiaPDF" src="../docs/{{$patient->history}}" type="application/pdf" width="100%" height="600px">
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
    <script src="../assets/js/ripple.js"></script>
    <script src="../assets/js/pcoded.min.js"></script>
    @if($counterCons > 0)
        <script>
            $("#openHistory").click(function() {
                const param = "{{ $consultation[0]->id }}";
                var url = `/history?id=${btoa(param)}`;
                window.open(url, "_blank", "width=1200,height=730");
            });
        </script>
    @endif

    <script>
    $( "#eliminar" ).click(function(e) {
        e.preventDefault();
        Swal.fire({
        title: '¿Esta Seguro que desea eliminar el paciente?',
        showCancelButton: true,
        confirmButtonText: `Eliminar`,
        cancelButtonText: `Cancelar`,
        }).then((result) => {
        if (result.isConfirmed) {
            var id_patient = $('#id').val();
            var formData = {
                    _token: "{{ csrf_token() }}",
                    id_patient: id_patient,
                };
                $.ajax({
                    type: 'POST',
                    url: '/deletePatient',
                    data: formData,
                    dataType: 'json',
                    success: function (data) {
                        setTimeout(function(){ window.location.href = "../patients"; }, 1500);
                        console.log("consulta", data);
                    },
                    error: function (data) {
                        console.log('error', data);
                    }
                });
                
            Swal.fire('Eliminado', '', 'success')
        } else if (result.isDenied) {
            Swal.fire('Cancelo', '', 'info')
        }
        })
    });
    
    
</script>
    
  
</body>

</html>
