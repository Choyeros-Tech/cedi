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

</head>

<body>



    <div class="row">
        <div class="col col-md-3 logo">
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
            <div class="row redCol">
                <div class="col col-md-12">
                    <p style="color: white; font-size: 15px;">LABORATORIO DE ANÁLISIS CLÍNICOS, BACTERIOLOGICOS,
                        HORMONALES E INMUNOLOGICOS</p>
                </div>
            </div>
            <div class="row">
                <div class="col col-md-12 text-center mr-5">
                    <p style="font-size: 10px; line-height : 12px;">Responsable: LABORATORIOS NÚÑEZ Q.F.B. RAMÓN A.
                        NUÑEZ FRANCO / CED. PROF. 415046 <br> RECEPCIÓN Y TOMA DE MUESTRAS. Horario: LUNES A SÁBADO de
                        7:30 A 9:30 A.M.</p>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col col-md-9 pl-3 ">
            <p>NOMBRE: <span id="nombre_paciente"></span></p>
            <p>NOMBRE DEL DOCTOR: <span id="doctor"></span></p>
        </div>
        <div class="col col-md-3 pl-3 text-right">
            <p>EDAD: <span id="edad"></span> </p>
            <p>FECHA: <span id="fecha"></span> </p>
        </div>
    </div>
<form action="{{route('addLaboratory')}}" method="POST"  onsubmit="send(event,this)">
    @csrf 
    <div class="row">
        <div class="col col-md-4">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title">Química Sanguínea</h5>
                    <table style="width: 100%">
                        <tr>
                            <td><label style="font-size: 10px;" class="checkboxesL"><input type="checkbox" name="glucosa">
                                    GLUCOSA</label></td>
                            <td style="float: left"><label style="font-size: 10px;" class="checkboxesR"><input type="checkbox" name="albumina">
                                    ALBUMINA</label></td>
                        </tr>
                        <tr>
                            <td><label style="font-size: 10px;" class="checkboxesL"><input type="checkbox" name="urea"> UREA</label>
                            </td>
                            <td style="float: left"><label style="font-size: 10px;" class="checkboxesR"><input type="checkbox" name="proteinas_totales"> PROTEINAS
                                    TOTALES</label></td>
                        </tr>
                        <tr>
                            <td><label style="font-size: 10px;" class="checkboxesL"><input type="checkbox" name="creatinina">
                                    CREATININA</label></td>
                            <td style="float: left"><label style="font-size: 10px;" class="checkboxesR"><input type="checkbox" name="relacion_ag"> RELACION
                                    A/G</label></td>
                        </tr>
                        <tr>
                            <td><label style="font-size: 10px;" class="checkboxesL"><input type="checkbox" name="acido_urico"> ACIDO
                                    URICO</label></td>
                            <td style="float: left"><label style="font-size: 10px;" class="checkboxesR"><input type="checkbox" name="hemoglobina">
                                    HEMOGLOBINA</label></td>
                        </tr>
                        <tr>
                            <td><label style="font-size: 10px;" class="checkboxesL"><input type="checkbox" name="colesterol_total"> COLESTEROL
                                    TOTAL</label></td>
                            <td style="float: left"><label style="font-size: 10px;" class="checkboxesR"><input type="checkbox" name="glucosilada">
                                    GLUCOSILADA</label></td>
                        </tr>
                        <tr>
                            <td><label style="font-size: 10px;" class="checkboxesL"><input type="checkbox" name="trigliceridos">
                                    TRIGLICERIDOS</label></td>
                            <td style="float: left"><label style="font-size: 10px;" class="checkboxesR"><input type="checkbox" name="bilirrubinas">
                                    BILIRRUBINAS</label></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
        <div class="col col-md-4">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title">Inmunología</h5>
                    <table style="width: 100%">
                        <tr>
                            <td><label style="font-size: 10px;" class="checkboxesL"><input type="checkbox" name="rpdvdrl">
                                    R.P.R (V.D.R.L)</label></td>
                            <td style="float: left"><label style="font-size: 10px;" class="checkboxesR"><input type="checkbox" name="det_gonadotropina">
                                    DET DE GONADOTRO-<BR>PINA BETA CARDIONICA<BR> EN SANGRE</label></td>
                        </tr>
                        <tr>
                            <td><label style="font-size: 10px;" class="checkboxesL"><input type="checkbox" name="reacciones_febriles"> REACCIONES FEBRILES</label>
                            </td>
                            <td style="float: left"><label style="font-size: 10px;" class="checkboxesR"><input type="checkbox" name="perfil_tiroideo"> PERFIL TIROIDEO</label></td>
                        </tr>
                        <tr>
                            <td><label style="font-size: 10px;" class="checkboxesL"><input type="checkbox" name="antiestreptolisinas">
                                    ANTIESTREPTOLISINAS "0"</label></td>
                            <td style="float: left"><label style="font-size: 10px;" class="checkboxesR"><input type="checkbox" name="perfil_ginecologico"> PERFIL GINECOLOGICO</label></td>
                        </tr>
                        <tr>
                            <td><label style="font-size: 10px;" class="checkboxesL"><input type="checkbox" name="proteina_c_reactiva"> PROTEINA "C" REACTIVA</label></td>
                            <td style="float: left"><label style="font-size: 10px;" class="checkboxesR"><input type="checkbox" name="ppc">
                                    PPC</label></td>
                        </tr>
                        <tr>
                            <td><label style="font-size: 10px;" class="checkboxesL"><input type="checkbox" name="factor_reumatoide"> FACTOR REUMATOIDE</label></td>
                            <td style="float: left"><label style="font-size: 10px;" class="checkboxesR" ></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col col-md-4">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title">Hematología</h5>
                    <table style="width: 100%">
                        <tr>
                            <td><label style="font-size: 10px;" class="checkboxesL"><input type="checkbox" name="biometria_hematica">BIOMETRIA HEMATICA COMPLETA</label></td>
                        </tr>
                        <tr>
                            <td><label style="font-size: 10px;" class="checkboxesL"><input type="checkbox" name="sedimentacion_globular">SEDIMENTACION GLOBULAR</label></td>
                        </tr>
                        <tr>
                            <td><label style="font-size: 10px;" class="checkboxesL"><input type="checkbox" name="recuento_reticulosis">RECUENTO DE RETICULOSIS</label></td>
                        </tr>
                        <tr>
                            <td><label style="font-size: 10px;" class="checkboxesL"><input type="checkbox" name="recuento_plaquetas">RECUENTO DE PLAQUETAS</label></td>
                        </tr>
                        <tr>
                            <td><label style="font-size: 10px;" class="checkboxesL"><input type="checkbox" name="tiempo_protombina">TIEMPO DE PROTOMBINA</label></td>
                        </tr>
                        <tr>
                            <td><label style="font-size: 10px;" class="checkboxesL"><input type="checkbox" name="tiempo_protombina">TIEMPO DE P. TROMBOPLASTIA</label></td>
                        </tr>
                        <tr>
                            <td><label style="font-size: 10px;" class="checkboxesL"><input type="checkbox" name="tiempo_sangrado">TIEMPO DE SANGRADO Y COAGULACION</label></td>
                        </tr>
                        <tr>
                            <td><label style="font-size: 10px;" class="checkboxesL"><input type="checkbox" name="grupo_sanguineo">GRUPO SANGUINEO Y FACTOR RH</label></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col col-md-3">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title">Bateriología</h5>
                    <table style="width: 100%">
                        <tr>
                            <td><label style="font-size: 10px;" class="checkboxesL"><input type="checkbox" name="coprocultivo"> COPROCULTIVO</label></td>
                        </tr>
                        <tr>
                            <td><label style="font-size: 10px;" class="checkboxesL"><input type="checkbox" name="urocultivo"> UROCULTIVO</label></td>
                        </tr>
                        <tr>
                            <td><label style="font-size: 10px;" class="checkboxesL"><input type="checkbox" name="espermocultivo"> ESPERMOCULTIVO</label></td>
                        </tr>
                        <tr>
                            <td><label style="font-size: 10px;" class="checkboxesL"><input type="checkbox" name="cultivo_exudado"> CULTIVO DE EXUDADO FARINGEO</label></td>
                        </tr>
                        <tr>
                            <td><label style="font-size: 10px;" class="checkboxesL"><input type="checkbox" name="cultivo_secrecion"> CULTIVO DE SECRECIÓN</label></td>
                        </tr>
                        <tr>
                            <td><label style="font-size: 10px;" class="checkboxesL"><input type="checkbox" name="frotis"> FROTIS</label></td>
                        </tr>
                        <tr>
                            <td><label style="font-size: 10px;" class="checkboxesL"><input type="checkbox" name="antibiograma"> ANTIBIOGRAMA</label></td>
                        </tr>                        
                    </table>
                </div>
            </div>
        </div>
        <div class="col col-md-3">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title">Enzimas</h5>
                    <table style="width: 100%">
                        <tr>
                            <td><label style="font-size: 10px;" class="checkboxesL"><input type="checkbox" name="transamina_tgo"> TRANSAMINASA (TGO)</label></td>
                        </tr>
                        <tr>
                            <td><label style="font-size: 10px;" class="checkboxesL"><input type="checkbox" name="transamina_tgp"> TRANSAMINASA (TGP)</label></td>
                        </tr>
                        <tr>
                            <td><label style="font-size: 10px;" class="checkboxesL"><input type="checkbox" name="fostasa_alcalina"> FOSFATASA ALCALINA</label></td>
                        </tr>
                        <tr>
                            <td><label style="font-size: 10px;" class="checkboxesL"><input type="checkbox" name="fostasa_acida"> FOSFATASA ACIDA</label></td>
                        </tr>
                        <tr>
                            <td><label style="font-size: 10px;" class="checkboxesL"><input type="checkbox" name="fraccion_prostatica"> FRACCIÓN PROSTATICA</label></td>
                        </tr>
                        <tr>
                            <td><label style="font-size: 10px;" class="checkboxesL"><input type="checkbox" name="amilasa"> AMILASA</label></td>
                        </tr>                       
                    </table>
                </div>
            </div>
        </div>
        <div class="col col-md-3">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title">Coroanálisis</h5>
                    <table style="width: 100%">
                        <tr>
                            <td><label style="font-size: 10px;" class="checkboxesL"><input type="checkbox" name="coproparasitoscopico"> COPROPARASITOSCOPICO EN SERIE</label></td>
                        </tr>
                        <tr>
                            <td><label style="font-size: 10px;" class="checkboxesL"><input type="checkbox" name="corologico"> COROLOGICO GENERAL</label></td>
                        </tr>
                        <tr>
                            <td><label style="font-size: 10px;" class="checkboxesL"><input type="checkbox" name="sangre_oculta"> SANGRE OCULTA</label></td>
                        </tr>
                        <tr>
                            <td><label style="font-size: 10px;" class="checkboxesL"><input type="checkbox" name="ameba_fresco"> AMEBA EN FRESCO</label></td>
                        </tr>
                        <tr>
                            <td><label style="font-size: 10px;" class="checkboxesL"><input type="checkbox" name="raspado_perianal"> RASPADO PERIANAL (GRAHAM)</label></td>
                        </tr>
                        <tr>
                            <td><label style="font-size: 10px;" class="checkboxesL"><input type="checkbox" name="azucares_reductores"> AZUCARES REDUCORES</label></td>
                        </tr>                       
                    </table>
                </div>
            </div>
        </div>
        <div class="col col-md-3">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title">Uroanalísis</h5>
                    <table style="width: 100%">
                        <tr>
                            <td><label style="font-size: 10px;" class="checkboxesL"><input type="checkbox" name="examegn_general_orina"> EXAMEN GENERAL DE ORINA</label></td>
                        </tr>
                        <tr>
                            <td><label style="font-size: 10px;" class="checkboxesL"><input type="checkbox" name="cuantificacion_glucosa"> CUANTIFICACIÓN DE GLUCOSA</label></td>
                        </tr>
                        <tr>
                            <td><label style="font-size: 10px;" class="checkboxesL"><input type="checkbox" name="depuracion_creatinina"> DEPURACIÓN DE CREATININA</label></td>
                        </tr>                 
                    </table>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col col-md-9 pl-3 ">
            <textarea name="otros" cols="110" rows="3" name="otros" placeholder="OTROS"></textarea>
            <textarea name="prediagnostico" cols="110" rows="3" name="prediagnostico" placeholder="PRE-DIAGNOSTICO"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col col-md-12 text-center">
            <input type="hidden" name="patient" id="patient">
            <input type="hidden" name="doctor" id="doc">
            <input type="submit"  class="btn btn-primary" id="envio" value="Guardar">
            <button type="button" class="btn btn-success" id="print">Imprimir</button>
        </div>
    </div>
</form>

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
            console.log("aqui", resp);
            document.getElementById("nombre_paciente").innerHTML = resp.paciente;
            document.getElementById("edad").innerHTML = `${resp.edad_paciente} años`;
            document.getElementById("doctor").innerHTML = resp.doctor;
            document.getElementById("doc").value = resp.id_doctor;
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