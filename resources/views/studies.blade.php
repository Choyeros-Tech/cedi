<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Pinyon+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/lab.css">
    <title>Document</title>
    <style>
        .checkboxesL {
            display: flex;
            justify-content: center;
            align-items: center;
            vertical-align: middle;
            word-wrap: break-word;
            float: left;
        }

        .checkboxesR {
            display: flex;
            justify-content: center;
            align-items: center;
            vertical-align: middle;
            word-wrap: break-word;
            float: rigth;
        }

        .card {
            height: 300px;
            margin-bottom: 5%
        }

        .card-title {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="row">
        <div class="col col-md-3 logostu">
            <img src="../assets/images/cedi.png">
        </div>
        <div class="col-9 textHeader">
            <div class="row">
                <div class="col col-md-12 textTitle">
                    <h3 style="font-size: 25px;">MEDICINA FAMILIAR INTEGRAL</h3>
                </div>
            </div>
            <div class="row">
                <div class="col col-md-12 direccionTxt">
                    <p style="font-size: 15px;">CONSTITUCIÓN No. 718 ESQ. V. GÓMEZ FARIAS * COL. CENTRO * TEL. 612 122
                        7682 * LA PAZ, B.C.S</p>
                </div>
            </div>
            <div class="row">
                <div class="col col-md-12">
                    <h3>SOLICITUD DE ESTUDIOS</h3>
                </div>
            </div>
        </div>
    </div>
    <form action="{{route('addEstudios')}}" method="POST" onsubmit="send(event,this)">
        @csrf
        <div class="row">
            <div class="col col-md-12 border">
                <div class="row">
                    <div class="col col-md-12">
                    <p style="float: right"> <span id="fecha"></span></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-12">
                    <p>PACIENTE: <span id="nombre_paciente"></span></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-12">
                    <p>DATOS CLINICOS: <input type="text" id="datos_clinicos" name="datos_clinicos" style="border:none;width:80%;"></p><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-7">
                        <h5 style="text-align: center">ENDOSCOPIAS:</h5>
                        <h4 style="text-align: left">ULTRASONIDOS</h4>
                        <div class="row">
                        
                            <div class="col col-md-5">
                                <table>
                                    <tr>
                                        <td><label style="font-size: 15px;" class="checkboxesL"><input type="checkbox" name="tiroides"> TIROIDES</label></td>
                                    </tr>
                                    <tr>
                                        <td><label style="font-size: 15px;" class="checkboxesL"><input type="checkbox" name="mama"> MAMA</label></td>
                                    </tr>
                                    <tr>
                                        <td><label style="font-size: 15px;" class="checkboxesL"><input type="checkbox" name="renal"> RENAL</label></td>
                                    </tr>
                                    <tr>
                                        <td><label style="font-size: 15px;" class="checkboxesL"><input type="checkbox" name="obsterico"> OBSTETRICO</label></td>
                                    </tr>
                                    <tr>
                                        <td><label style="font-size: 15px;" class="checkboxesL"><input type="checkbox" name="prostata"> PROSTATA</label></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col col-md-7">
                                <table>
                                    <tr>
                                        <td><label style="font-size: 15px;" class="checkboxesL"><input type="checkbox" name="pelvico_utero_anexos"> PELVICO (Útero y Anexos)</label></td>
                                    </tr>
                                    <tr>
                                        <td><label style="font-size: 15px;" class="checkboxesL"><input type="checkbox" name="higado_via_biliar"> HIGADO Y VIA BILIAR</label></td>
                                    </tr>
                                    <tr>
                                        <td><label style="font-size: 15px;" class="checkboxesL"><input type="checkbox" name="escrotal_test_espi"> ESCROTAL (Testículos y Epidemio)</label></td>
                                    </tr>
                                    <tr>
                                        <td><label style="font-size: 15px;" class="checkboxesL"><input type="checkbox" name="pancreas"> PÁNCREAS</label></td>
                                    </tr>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-5">
                        <h5 style="text-align: center">ELECTROCARDIOGRAMA:</h5>
                        <div class="row">
                            <div class="col col-md-5">
                                <table>
                                    <tr>
                                        <td><label style="font-size: 15px;" class="checkboxesL"><input type="checkbox" name="electro_tiroides"> TIROIDES</label></td>
                                    </tr>
                                    <tr>
                                        <td><label style="font-size: 15px;" class="checkboxesL"><input type="checkbox" name="electro_tiroides"> MAMA</label></td>
                                    </tr>
                                    <tr>
                                        <td><label style="font-size: 15px;" class="checkboxesL"><input type="checkbox" name="electro_renal"> RENAL</label></td>
                                    </tr>
                                    <tr>
                                        <td><label style="font-size: 15px;" class="checkboxesL"><input type="checkbox" name="electro_obstetrico"> OBSTETRICO</label></td>
                                    </tr>
                                    <tr>
                                        <td><label style="font-size: 15px;" class="checkboxesL"><input type="checkbox" name="electro_prostata"> PROSTATA</label></td>
                                    </tr>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-12"><br><br>
                        <p>REFERIDO POR DOCTOR: <span id="doctor"></span></p>
                    </div>
                </div>
            </div>
        </div>

        <input type="hidden" id="patient" name="patient">
        <div class="row">
                    <div class="col col-md-12 text-center">
                    <input class="btn btn-primary" type="submit" id="envio" value="Guardar">
                    <button type="button" class="btn btn-success" id="print">Imprimir</button>
                    </div>
                </div>
       
    </form><br><br>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <script src="../assets/js/vendor-all.min.js"></script>
    <script src="../assets/js/plugins/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    
    <script>

        const id = atob("{{$_GET['id']}}");
        fetch(`/dataPatient/${id}`)
        .then(response => response.json()
            .then(resp => {
                console.log(resp);
                document.getElementById("nombre_paciente").innerHTML = resp.paciente.toUpperCase(); 
                document.getElementById("doctor").innerHTML = resp.doctor.toUpperCase();
                // document.getElementById("doc").value = resp.id_doctor;
                document.getElementById("patient").value = resp.id_paciente;

                var fecha = new Date();
                var options = { year: 'numeric', month: 'long', day: 'numeric' }; 
                document.getElementById("fecha").innerHTML = fecha.toLocaleDateString("es-ES", options).toUpperCase();
            })
        );


    
    function send(e,form) {
        e.preventDefault();
        fetch(form.action,{method:'post', body: new FormData(form)}).then(r=>r.json()).then(response=>{
            console.log(response);
            if(response.status=='saved'){
                Swal.fire({
                    title: 'Guardado',
                    text: 'Se ha guardado la información',
                    icon: 'success',  
                    button: "Aceptar",
                })
            }
        });
    }


    $("#print").click(function() {
        $( "#print" ).hide();
        $( "#envio" ).hide();
        window.print();
    });
       
    </script>
</body>