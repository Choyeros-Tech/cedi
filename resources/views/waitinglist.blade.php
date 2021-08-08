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
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="ChoyerosTech" />
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/plugins/fullcalendar.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">

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
                    <li class="nav-item">
                        <a href="{{route('reception')}}" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-user-plus"></i></span><span
                                class="pcoded-mtext">Registro</span></a>
                    </li>
                    <li class="nav-item active">
                        <a href="{{route('waitingList')}}"  class="nav-link "><span class="pcoded-micon"><i
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
                            <h5>Lista de Espera</h5>
                            <hr>
                           <div class="card-body table-border-style">
                                <div class="table-responsive">
                                    <table class="table table-hover" id="table_id">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Paciente</th>
                                            <th>Peso</th>
                                            <th>TA</th>
                                            <th>Temperatura</th>
                                            <th>Tipo</th>
                                            <th>Otro</th>
                                            <th>Hora Cita</th>
                                            <th>Doctor</th>
                                            <th>Estado</th>
                                            <th>Operaciones</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($consultations as $consultation)
                                            <tr>
                                                <td>{{$consultation->id}}</td>
                                                <td>{{$consultation->name}}</td>
                                                <td>{{$consultation->weight}}</td>
                                                <td>{{$consultation->TA}}</td>
                                                <td>{{$consultation->temperature}} ºC</td>
                                                <td>{{$consultation->type}}</td>
                                                <td>{{$consultation->other}}</td>
                                                @if($consultation->waiting_list == '0')
                                                     <td>{{substr($consultation->updated_at, 10, 6)}} H</td>
                                                @else
                                                    <td>En Lista de Espera</td>
                                                @endif
                                                <td>{{$consultation->doc}}</td>
                                                @if($consultation->status == '0')
                                                     <td><span class="badge badge-pill badge-danger">En Espera</span></td>
                                                @else
                                                    <td><span class="badge badge-pill badge-success">Atendido</span></td>
                                                @endif
                                                <td>
                                                    <div class="btn-group btn-group-sm " role="group" aria-label="Basic example">
                                                        <button type="button" onclick="Editar('{{$consultation->id}}')" class="btn  btn-info"><i class="feather icon-edit"></i></button>
                                                        <a href="{{route('consultation', $consultation->id)}}" class="btn  btn-success"><i class="feather icon-eye"></i></a>
                                                    </div>
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
                </div>

            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Cita Médica</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ route('editConsultation') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 form-group fill">
                                        <label for="paciente" style="color: #E696C0;">Paciente:</label>
                                        <div class="input-group">
                                        <input type="hidden" id="consultationID" name="consultationID">
                                            <select class="form-control" id="paciente" name="paciente" required>
                                                <option>Seleccione o añada un nuevo paciente</option>
                                                @foreach($patients as $patient)
                                                    <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 form-group fill">
                                        <label for="paciente" style="color: #E696C0;">Doctor:</label>
                                        <div class="input-group">
                                            <select class="form-control" id="doctor" name="doctor" required>
                                                <option disabled>Seleccione doctor</option>
                                                @foreach($doctors as $doctor)
                                                    <option value="{{ $doctor->id }}">Dr. {{ $doctor->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group fill">
                                            <label class="floating-label" for="peso">Fecha y hora Cita:</label>
                                            <input type="datetime-local" class="form-control" id="fechahoraconsulta"
                                                name="fechahoraconsulta" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group fill">
                                            <label class="floating-label" for="fecha_nacimiento">Lista de
                                                espera</label><br>
                                            <div class="custom-control">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <input type="hidden" value="0" id="cita" name="cita">
                                                <label class="custom-control-label" id="sincita" for="customCheck1">Sin
                                                    Cita</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group fill">
                                            <label class="floating-label" for="peso">Peso:</label>
                                            <input type="number" step="0.01" class="form-control" id="peso" name="peso"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group fill">
                                            <label class="floating-label" for="edad">Edad:</label>
                                            <input type="number" step="0.01" class="form-control" id="edad" name="edad">
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
                                            <input type="number" class="form-control" id="temperatura"
                                                name="temperatura">
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
                                            <textarea class="form-control" rows="3" id="otro" name="other"></textarea>
                                        </div>
                                    </div>
                                </div>
                           
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/ripple.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <script>
    $(document).ready( function () {
        $('#table_id').DataTable();
        refresh();
    } );

    $.extend( true, $.fn.dataTable.defaults, {
        "language": {
            "decimal": ",",
            "thousands": ".",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoPostFix": "",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "loadingRecords": "Cargando...",
            "lengthMenu": "Mostrar _MENU_ registros",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            },
            "processing": "Procesando...",
            "search": "Buscar:",
            "searchPlaceholder": "Término de búsqueda",
            "zeroRecords": "No se encontraron resultados",
            "emptyTable": "Ningún dato disponible en esta tabla",
            "aria": {
                "sortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sortDescending": ": Activar para ordenar la columna de manera descendente"
            },
            //only works for built-in buttons, not for custom buttons
            "buttons": {
                "create": "Nuevo",
                "edit": "Cambiar",
                "remove": "Borrar",
                "copy": "Copiar",
                "csv": "fichero CSV",
                "excel": "tabla Excel",
                "pdf": "documento PDF",
                "print": "Imprimir",
                "colvis": "Visibilidad columnas",
                "collection": "Colección",
                "upload": "Seleccione fichero...."
            },
            "select": {
                "rows": {
                    _: '%d filas seleccionadas',
                    0: 'clic fila para seleccionar',
                    1: 'una fila seleccionada'
                }
            }
        }            
    });        

    function Editar(idConsulta){
        console.log(idConsulta);
        var formData = {
                _token: "{{ csrf_token() }}",
                id: idConsulta
            };
            $.ajax({
                type: 'POST',
                url: 'getConsultationWL',
                data: formData,
                dataType: 'json',
                success: function (data) {
                    $('#paciente').val(data['patient']);
                    $('#doctor').val(data['doc']);
                    $('#peso').val(data['weight']);
                    $('#talla').val(data['size']);
                    $('#TA').val(data['TA']);
                    $('#temperatura').val(data['temperature']);
                    $('#tipo').val(data['type']);
                    $('#otro').val(data['other']);
                    $('#fechahoraconsulta').val(moment(data['updated_at']).format("YYYY-MM-DDTkk:mm"));
                    $('#consultationID').val(data['id']);
                  
                },
                error: function (data) {
                    console.log('error',  data['updated_at']);
                }
            });
        $('#exampleModal').modal('show');
    }

    function refresh(){
            console.log("actualizaer");
            setTimeout(() => {
                location.reload();
               refresh();
            }, 120000);
            //120000
        }
    
    </script>

    </body>

</html>
