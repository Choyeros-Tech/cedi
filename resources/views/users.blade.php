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
                    <li class="nav-item">
                        <a href="{{route('waitingList')}}"  class="nav-link "><span class="pcoded-micon"><i
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
                    <li class="nav-item active">
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
                            <h5>Usuarios</h5>
                            <button type="button" class="btn btn-primary float-right"  data-toggle="modal" data-target="#modalNuevoPaciente">Nuevo</button><br><br>
                            <hr>
                           <div class="card-body table-border-style">
                                <div class="table-responsive">
                                    <table class="table table-hover" id="table_id">
                                        <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Usuario</th>
                                            <th>Tipo</th>
                                            <th>Cedula</th>
                                            <th>Escuela</th>
                                            <th>RegSSA</th>
                                            <th>Operaciones</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->user}}</td>
                                                <td>{{$user->type}}</td>
                                                <td>{{$user->ced}}</td>
                                                <td>{{$user->school}}</td>
                                                <td>{{$user->regssa}}</td>
                                                <td>
                                                    <div class="btn-group btn-group-sm " role="group" aria-label="Basic example">
                                                        <button type="button" class="btn  btn-danger" onclick="Eliminar('{{$user->id}}')"><i class="feather icon-trash-2"></i></button>
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
    <div id="modalNuevoPaciente" class="modal fade" tabindex="-1" role="dialog"
        aria-labelledby="modalNuevoPacienteLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalNuevoPacienteLabel">Nuevo Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                <form action="{{route('signup')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group fill">
                                <label class="floating-label" for="pNombre">Nombre:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group fill">
                                <label class="floating-label" for="pNombre">Usuario:</label>
                                <input type="text" class="form-control" id="user" name="user" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group fill">
                                <label class="floating-label" for="pNombre">Contraseña:</label>
                                <input type="text" class="form-control" id="password" name="password" required>
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group fill">
                                <label class="floating-label" for="pTelefono">Tipo:</label>
                                <select class="form-control"  id="type" name="type" required>
                                    <option value="doctor">Doctor</option>
                                    <option value="receptionist">Enfermera</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4"><br>
                            <div class="form-group fill">
                                <label class="floating-label" for="pEmergencias">Cedula:</label>
                                <input type="text"  class="form-control" id="ced" name="ced">
                            </div>
                        </div>
                        <div class="col-md-4"><br>
                            <div class="form-group fill">
                                <label class="floating-label" for="pFecha">Escuela:</label>
                                <input type="text" class="form-control" id="school" name="school" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                        <br>
                            <div class="form-group fill">
                                <label class="floating-label" for="pFecha">Registro SSA:</label>
                                <input type="text"  class="form-control" id="regssa" name="regssa">
                            </div>
                        </div>
                    </div><br>
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
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="assets/js/ripple.js"></script>
    <script src="assets/js/pcoded.min.js"></script>

    <script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    });
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

    function Eliminar(idPrescription){
        Swal.fire({
        title: '¿Esta Seguro que desea eliminar al usuario?',
        showCancelButton: true,
        confirmButtonText: `Eliminar`,
        cancelButtonText: `Cancelar`,
        }).then((result) => {
        if (result.isConfirmed) {
            var formData = {
                    _token: "{{ csrf_token() }}",
                    id: idPrescription,
                };
                $.ajax({
                    type: 'POST',
                    url: '/deleteUser',
                    data: formData,
                    dataType: 'json',
                    success: function (data) {
                        setTimeout(function(){ window.location.href = "users"; }, 1500);
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
    }
</script>
</body>

</html>
