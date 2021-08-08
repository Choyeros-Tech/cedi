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
                    <li class="nav-item active">
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
                            <h5>Pacientes</h5>
                            <button type="button" class="btn btn-primary float-right"  data-toggle="modal" data-target="#newPrescriptionModal"><i class="feather icon-file-plus mr-2"></i>Nuevo</button>
                            <br><br><hr>
                           <div class="card-body table-border-style">
                                <div class="table-responsive">
                                    <table class="table table-hover" id="table_id">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Medicamento</th>
                                            <th>Preescripción</th>
                                            <th>Grupo</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($prescriptions as $prescription)
                                            <tr>
                                                <td>
                                                    <div class="btn-group btn-group-sm " role="group" aria-label="Basic example">
                                                        <button type="button" onclick="Editar('{{$prescription->id}}', '{{$prescription->disease}}', '{{$prescription->group}}', '{{$prescription->treatment}}')" class="btn  btn-info"><i class="feather icon-edit"></i></button>
                                                        <button type="button" class="btn  btn-danger" onclick="Eliminar('{{$prescription->id}}')"><i class="feather icon-trash-2"></i></button>
                                                    </div>
                                                </td>
                                                <td style="white-space: pre-wrap;">{{$prescription->disease}}</td>
                                                <td style="white-space: pre-wrap;">{{$prescription->treatment}}</td>
                                                <td>{{$prescription->group}}</td>
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
    
    <div id="editPrescriptionModal" class="modal fade" tabindex="-1" role="dialog"
        aria-labelledby="modalNuevoPacienteLabel" aria-hidden="true">
        <form action="{{route('updatepres')}}" method="post">
        @csrf
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Editar Medicamento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group fill">
                                <label class="floating-label" for="eNombre">Medicamento:</label>
                                <input type="hidden" class="form-control" id="eid" name="eid" required>
                                <input type="text" class="form-control" id="eenfermedad" name="eenfermedad" required>
                            </div>
                        </div>
                    </div><br>
                     <div class="row">
                        <div class="col-md-12">
                            <div class="form-group fill">
                                <label class="floating-label" for="pNombre">Grupo:</label>
                                <input type="text" class="form-control" id="egrupo" name="egrupo" required>
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group fill">
                                <label class="floating-label" for="pTelefono">Prescripción:</label>
                                <textarea class="form-control" rows="3" id="eprescripcion" name="eprescripcion"></textarea>
                            </div>
                        </div>

                    </div><br>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn  btn-primary" >Actualizar</button>
                </div>
            </div>
        </div>
        </form>
    </div>

    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
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
        function Editar(idprescription, medicamento, grupo, prescripcion){
        console.log(idprescription);

        $('#eid').val(idprescription);
        $('#eenfermedad').val(medicamento);
        $('#egrupo').val(grupo);
        $('#eprescripcion').val(prescripcion);
        
        $('#editPrescriptionModal').modal('show');
    }

    function Eliminar(idPrescription){
        Swal.fire({
        title: '¿Esta Seguro que desea eliminar la receta?',
        showCancelButton: true,
        confirmButtonText: `Eliminar`,
        cancelButtonText: `Cancelar`,
        }).then((result) => {
        if (result.isConfirmed) {
            var formData = {
                    _token: "{{ csrf_token() }}",
                    idPrescription: idPrescription,
                };
                $.ajax({
                    type: 'POST',
                    url: '/deletePrescription',
                    data: formData,
                    dataType: 'json',
                    success: function (data) {
                        setTimeout(function(){ window.location.href = "prescriptions"; }, 1500);
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
