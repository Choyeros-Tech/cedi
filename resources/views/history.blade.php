<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title>Historial Clinico</title>

    <style>
        .contorno{
            width: 102.15pt;
            border: 1pt solid black;
            padding: 0cm;
            height: 27.7pt;
            vertical-align: top;
        }
       input{
        background: transparent;
        border-width:0px;
        border:none;
        outline:none;
       }
       textarea{
        background: transparent;
        border-width:0px;
        border:none;
        outline:none;
        width: 100%;
       }


       input[type="radio"]{
            width: 20px !important;
            height: 20px !important;
            margin-top: 4px !important;
            margin-left: 4px !important;
            
       }

       table td{
           vertical-align: middle !important;
       }
       .btn-group-fab {
  position: fixed;
  width: 50px;
  height: auto;
  right: 20px; bottom: 20px;
}
.btn-group-fab div {
  position: relative; width: 100%;
  height: auto;
}
.btn-group-fab .btn {
  position: absolute;
  bottom: 0;
  border-radius: 50%;
  display: block;
  margin-bottom: 4px;
  width: 40px; height: 40px;
  margin: 4px auto;
}
.btn-group-fab .btn-main {
  width: 50px; height: 50px;
  right: 50%; margin-right: -25px;
  z-index: 9;
}
.btn-group-fab .btn-sub {
  bottom: 0; z-index: 8;
  right: 50%;
  margin-right: -20px;
  -webkit-transition: all 2s;
  transition: all 0.5s;
}
.btn-group-fab.active .btn-sub:nth-child(2) {
  bottom: 60px;
}
.btn-group-fab.active .btn-sub:nth-child(3) {
  bottom: 110px;
}
.btn-group-fab.active .btn-sub:nth-child(4) {
  bottom: 160px;
}
.btn-group-fab .btn-sub:nth-child(5) {
  bottom: 210px;
}
    </style>

</head>

<body>

    @if (session('status')) 
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong> {{ (session('status') == 'saved') ? 'Los datos fueron guardados' : 'Los datos fueron actualizados' }}</strong>
        </div>
    @endif
    <form action="{{route('addHistory')}}" method="POST">
        @csrf
        <div style='margin:0cm;font-size:15px;font-family:"Times New Roman",serif;'>
            <ol start="9" style="margin-bottom:0cm;list-style-type: upper-alpha;">
                <li style='margin:0cm;font-size:15px;font-family:"Times New Roman",serif;'><strong><span
                            style="font-size:13px;">IDENTIFICACION.</span></strong></li>
            </ol>
        </div>
        <table style="margin-left: 8.6pt;border-collapse:collapse;border:none; width:98%">
            <tbody>
                <tr>
                    <td
                        style="width: 102.75pt;border-style: double solid solid double;border-color: black;border-width: 1pt;padding: 0cm;height: 19.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:5.95pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:2.95pt;'>
                            <strong><span style='font-size:13px;font-family:"Arial",sans-serif;'>NOMBRE:</span></strong>
                        </p>
                    </td>
                    <td colspan="5"
                        style="width: 326.25pt;border-top: 1pt double black;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 19.75pt;">
                        {{-- <input type="text" name="ident_nombre" id="paciente" style="width:90%;height:90%;margin-top:1px;"> --}}
                        <span id="paciente" style="margin-left: 20px;font-size: larger;"></span>
                    </td>
                    <td
                        style="width: 2cm;border-top: 1pt double black;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 19.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:6.0pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.3pt;line-height:12.75pt;'>
                            <strong><span style='font-size:16px;font-family:"Arial",sans-serif;'>SEXO</span></strong>
                        </p>
                    </td>
                    <td
                        style="width: 71pt;border-top: 1pt double black;border-bottom: 1pt solid black;border-right: 1pt double black;padding: 0cm;height: 19.75pt;vertical-align: top;">
                        <span id="sexo" style="margin-left: 20px;font-size: larger;"></span>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 102.75pt;border-top: none;border-left: 1pt double black;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 19.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:5.95pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:2.95pt;'>
                            <strong><span
                                    style='font-size:13px;font-family:"Arial",sans-serif;'>No.Exp.5672</span></strong>
                        </p>
                    </td>

                    <td
                        style="width: 63.9pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 19.75pt;vertical-align: top;">
                        <input type="text" name="ident_noExp" style="width:90%;height:90%;margin-top:1px;">
                    </td>

                    <td
                        style="width: 42.5pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 19.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:6.0pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.4pt;line-height:12.75pt;'>
                            <strong><span style='font-size:16px;font-family:"Arial",sans-serif;'>EDAD</span></strong>
                        </p>
                    </td>

                    <td
                        style="width: 63.85pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 19.75pt;">
                        {{-- <input type="text" name="ident_edad" id="edad_paciente" style="width:90%;height:90%;margin-top:1px;"> --}}
                        <span id="edad_paciente" style="margin-left: 20px;font-size: larger;"></span>
                    </td>

                    <td
                        style="width: 70.85pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 19.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:6.0pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.35pt;line-height:12.75pt;'>
                            <strong><span style='font-size:16px;font-family:"Arial",sans-serif;'>EDO
                                    CIVIL</span></strong>
                        </p>
                    </td>
                    <td
                        style="width: 85.15pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 19.75pt;vertical-align: top;">
                        <span id="estado_civil" style="margin-left: 20px;font-size: larger;"></span>
                    </td>

                    <td
                        style="width: 2cm;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 19.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:6.0pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.3pt;line-height:12.75pt;'>
                            <strong><span style='font-size:16px;font-family:"Arial",sans-serif;'>FECHA</span></strong>
                        </p>
                    </td>
                    <td
                        style="width: 71pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt double black;padding: 0cm;height: 19.75pt;">
                        {{-- <span id="fecha" style="margin-left: 20px;margin-left:10px;"></span> --}}
                        <input type="date" name="ident_fecha" id="ident_fecha">
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 102.75pt;border-top: none;border-left: 1pt double black;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 26.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:5.95pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:2.95pt;'>
                            <strong><span style='font-size:13px;font-family:"Arial",sans-serif;'>OCUPACION:</span></strong>
                        </p>
                    </td>
                    <td colspan="4"
                        style="width: 241.1pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 26.5pt;vertical-align: top;">
                        <input type="text" name="ident_ocupacion" style="width:98%;height:80%;margin-top:1px;">
                    </td>

                    <td
                        style="width: 85.15pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 26.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:6.0pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.35pt;'>
                            <strong><span style='font-size:16px;font-family:"Arial",sans-serif;'>TEL</span></strong></p>
                    </td>
                    <td colspan="2"
                        style="width: 127.7pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt double black;padding: 0cm;height: 26.5pt;">
                        {{-- <input type="text" name="ident_telefono" id="telefono_paciente" style="width:90%;height:90%;margin-top:1px;"> --}}
                        <span id="telefono_paciente" style="margin-left: 20px;font-size: larger;"></span>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 102.75pt;border-top: none;border-left: 1pt double black;border-bottom: 1pt double black;border-right: 1pt solid black;padding: 0cm;height: 19.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:5.95pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:2.95pt;'>
                            <strong><span
                                    style='font-size:13px;font-family:"Arial",sans-serif;'>DOMICILIO:</span></strong>
                        </p>
                    </td>
                    <td colspan="7"
                        style="width: 453.95pt;border-top: none;border-bottom: 1pt double black;border-right: 1pt double black;padding: 0cm;height: 19.75pt;">
                        {{-- <input type="text" name="ident_domicilio" id="domicilio_paciente" style="width:90%;height:90%;margin-top:1px;"> --}}
                        <span id="domicilio_paciente" style="margin-left: 20px;font-size: larger;"></span>
                    </td>
                </tr>
            </tbody>
        </table>

        <p style='margin:0cm;font-size:19px;font-family:"Times New Roman",serif;font-weight:bold;margin-top:.45pt;'>
            <span style='font-size:13px;font-family:"Arial",sans-serif;'><br></span>
        </p>

        <div style='margin:0cm;font-size:15px;font-family:"Times New Roman",serif;'>
            <ol style="margin-bottom:0cm;list-style-type: undefined;">
                <li style='margin:0cm;font-size:15px;font-family:"Times New Roman",serif;'><strong><span
                            style="font-size:13px;">ANTECEDENTES HEREDO FAMILIARES.</span></strong></li>
            </ol>
        </div>

        <p
            style='margin:0cm;font-size:19px;font-family:"Times New Roman",serif;font-weight:bold;margin-top:.05pt;margin-right:0cm;margin-bottom:.05pt;margin-left:0cm;'>
            <span style='font-size:13px;font-family:"Arial",sans-serif;'><br></span>
        </p>
        <table style="margin-left: 8.2pt;border-collapse:collapse;border:none; width: 98%;">
            <tbody>
                <tr>
                    <td
                        style="width: 82.45pt;border-top: none;border-bottom: none;border-image: initial;border-right: 1pt solid black;padding: 0cm;height: 21pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>
                            <span style='font-size:13px;font-family:"Times New Roman",serif;'><br></span>
                        </p>
                    </td>
                    <td
                        style="width: 20.25pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;padding: 0cm;height: 21pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:5.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.2pt;'>
                            <span style="font-size:11px;">No</span></p>
                    </td>
                    <td
                        style="width: 15.1pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;padding: 0cm;height: 21pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:5.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.35pt;'>
                            <span style="font-size:11px;">Si</span></p>
                    </td>
                    <td
                        style="width: 333.2pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 21pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style='font-size:13px;font-family:"Times New Roman",serif;'><br></span></p>
                    </td>
                    <td
                        style="width: 17.9pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;padding: 0cm;height: 21pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:5.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.25pt;'>
                            <span style="font-size:11px;">Si</span></p>
                    </td>
                    <td
                        style="width: 17.8pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;padding: 0cm;height: 21pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:5.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.25pt;'>
                            <span style="font-size:11px;">No</span></p>
                    </td>
                    <td style="width: 77.8pt;border: none;padding: 0cm;height: 21pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style='font-size:13px;font-family:"Times New Roman",serif;'><br></span></p>
                    </td>
                </tr>

                <tr>
                    <td
                        style="width: 82.45pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 13.85pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:1.15pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.45pt;'>
                            <span style="font-size:13px;color:black;">Diabetes</span>
                        </p>
                    </td>
                    <td
                        style="width: 20.25pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.85pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 58%;margin-top: 6px;/* margin-left:-1px; */"
                            name="antece_fam_diabetes" value="no">
                    </td>
                    <td
                        style="width: 15.1pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.85pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 58%;margin-top: 6px;/* margin-left:-1px; */"
                            name="antece_fam_diabetes" value="si">
                    </td>
                    <td rowspan="2"
                        style="width: 333.2pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.85pt;vertical-align: top;">
                        {{-- <input type="text" style="width:98%;height:90%;margin-top:1px;" name="antece_fam_diabetes_descripcion"> --}}

                        <textarea name="antece_fam_diabetes_descripcion"  style="width:99%;height:90%;margin-top:1px;"></textarea>
                    </td>
                    <td
                        style="width: 17.9pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.85pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 58%;margin-top: 6px;/* margin-left:-1px; */"
                            name="antece_fam_hiv_sida" value="si">
                    </td>
                    <td
                        style="width: 17.8pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;padding: 0cm;height: 13.85pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 58%;margin-top: 6px;/* margin-left:-1px; */"
                            name="antece_fam_hiv_sida" value="no">
                    </td>
                    <td
                        style="width: 77.8pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 13.85pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:1.15pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.55pt;'>
                            <strong><span
                                    style='font-size:13px;font-family:"Arial",sans-serif;color:black;'>HIV/SIDA</span></strong>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 82.45pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:1.05pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.45pt;'>
                            <span style="font-size:13px;color:black;">Obesidad</span></p>
                    </td>
                    <td
                        style="width: 20.25pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 58%;margin-top: 6px;/* margin-left:-1px; */"
                            name="antece_fam_obesidad" value="no">
                    </td>
                    <td
                        style="width: 15.1pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 58%;margin-top: 6px;/* margin-left:-1px; */"
                            name="antece_fam_obesidad" value="si">
                    </td>
                    <td
                        style="width: 17.9pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 60%;margin-top: 7px;/* margin-left:-1px; */"
                            name="antece_fam_asma" value="si">
                    </td>
                    <td
                        style="width: 17.8pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 60%;margin-top: 7px;/* margin-left:-1px; */"
                            name="antece_fam_asma" value="no">
                    </td>
                    <td
                        style="width: 77.8pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:1.05pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.55pt;'>
                            <strong><span
                                    style='font-size:13px;font-family:"Arial",sans-serif;color:black;'>Asma</span></strong>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 82.45pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:1.05pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.45pt;'>
                            <span style="font-size:13px;color:black;">Hipertensi&oacute;n Art.</span></p>
                    </td>
                    <td
                        style="width: 20.25pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height:60%;margin-top:7px;margin-left:-1px;"
                            name="antece_fam_hipertension" value="no">
                    </td>
                    <td
                        style="width: 15.1pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height:60%;margin-top:7px;margin-left:-1px;"
                            name="antece_fam_hipertension" value="si">
                    </td>
                    <td rowspan="2"
                        style="width: 333.2pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        {{-- <input type="text" style="width:98%;height:90%;margin-top:1px;" 
                            name="antece_fam_descripcion_hipertension">--}}
                        <textarea name="antece_fam_descripcion_hipertension" style="width:99%;height:90%;margin-top:1px;"></textarea>
                    </td>
                    <td
                        style="width: 17.9pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height:60%;margin-top:7px;margin-left:-1px;"
                            name="antece_fam_cancer" value="si">
                    </td>
                    <td
                        style="width: 17.8pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height:60%;margin-top:7px;margin-left:-1px;"
                            name="antece_fam_cancer" value="no">
                    </td>
                    <td
                        style="width: 77.8pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:1.05pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.55pt;'>
                            <strong><span
                                    style='font-size:13px;font-family:"Arial",sans-serif;color:black;'>C&aacute;ncer</span></strong>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 82.45pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 20.6pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:4.5pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.45pt;'>
                            <span style="font-size:13px;color:black;">A.V.Cerebral</span></p>
                    </td>
                    <td
                        style="width: 20.25pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 20.6pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 58%;margin-top: 6px;/* margin-left:-1px; */"
                            name="antece_fam_av_cerebral" value="no">
                    </td>
                    <td
                        style="width: 15.1pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 20.6pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 58%;margin-top: 6px;/* margin-left:-1px; */"
                            name="antece_fam_av_cerebral" value="si">
                    </td>
                    <td
                        style="width: 17.9pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 20.6pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 58%;margin-top: 6px;/* margin-left:-1px; */"
                            name="antece_fam_nerviosos" value="si">
                    </td>
                    <td
                        style="width: 17.8pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;padding: 0cm;height: 20.6pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 58%;margin-top: 6px;/* margin-left:-1px; */"
                            name="antece_fam_nerviosos" value="no">
                    </td>
                    <td
                        style="width: 77.8pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 20.6pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:4.5pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.55pt;'>
                            <strong><span
                                    style='font-size:13px;font-family:"Arial",sans-serif;color:black;'>Nerviosos</span></strong>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 82.45pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:1.15pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.45pt;'>
                            <span style="font-size:13px;color:black;">Cardiopat&iacute;as</span></p>
                    </td>
                    <td
                        style="width: 20.25pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 58%;margin-top: 6px;/* margin-left:-1px; */"
                            name="antece_fam_cardiopatias" value="no">
                    </td>
                    <td
                        style="width: 15.1pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 58%;margin-top: 6px;/* margin-left:-1px; */"
                            name="antece_fam_cardiopatias" value="si">
                    </td>
                    <td rowspan="2"
                        style="width: 333.2pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        {{-- <input type="text" style="width:100%;height: 58%;margin-top: 6px;/* margin-left:-1px; */" name="antece_fam_descripcion_cardiopatias"> --}}

                        <textarea name="antece_fam_descripcion_cardiopatias"  style="width:99%;height:172%;margin-top:1px;margin-left:-1px;"></textarea>
                    </td>
                    <td
                        style="width: 17.9pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 58%;margin-top: 6px;/* margin-left:-1px; */"
                            name="antece_fam_toxicomanias" value="si">
                    </td>
                    <td
                        style="width: 17.8pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 58%;margin-top: 6px;/* margin-left:-1px; */"
                            name="antece_fam_toxicomanias" value="no">
                    </td>
                    <td
                        style="width: 77.8pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:1.15pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.55pt;'>
                            <strong><span
                                    style='font-size:13px;font-family:"Arial",sans-serif;color:black;'>Toxicoman&iacute;as</span></strong>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 82.45pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 19.4pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:3.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.45pt;'>
                            <span style="font-size:13px;color:black;">Tuberculosis</span></p>
                    </td>
                    <td
                        style="width: 20.25pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 19.4pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 58%;margin-top: 6px;/* margin-left:-1px; */"
                            name="antece_fam_tuberculosis" value="si">
                    </td>
                    <td
                        style="width: 15.1pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 19.4pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 58%;margin-top: 6px;/* margin-left:-1px; */"
                            name="antece_fam_tuberculosis" value="no">
                    </td>
                    <td
                        style="width: 17.9pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 19.4pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 58%;margin-top: 6px;/* margin-left:-1px; */"
                            name="antece_fam_otros" value="si">
                    </td>
                    <td
                        style="width: 17.8pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;padding: 0cm;height: 19.4pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 58%;margin-top: 6px;/* margin-left:-1px; */"
                            name="antece_fam_otros" value="si">
                    </td>
                    <td
                        style="width: 77.8pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 19.4pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:3.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.55pt;'>
                            <strong><span
                                    style='font-size:13px;font-family:"Arial",sans-serif;color:black;'>Otros</span></strong>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 82.45pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:1.05pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.45pt;'>
                            <span style="font-size:13px;color:black;">S&iacute;filis</span></p>
                    </td>
                    <td
                        style="width: 20.25pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 72%;margin-top: 4px;/* margin-left:-1px; */"
                            name="antece_fam_sifilis" value="si">
                    </td>
                    <td
                        style="width: 15.1pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 72%;margin-top: 4px;/* margin-left:-1px; */"
                            name="antece_fam_sifilis" value="no">
                    </td>
                    <td rowspan="2"
                        style="width: 333.2pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style='font-size:13px;font-family:"Times New Roman",serif;'><br></span></p>
                    </td>
                    <td
                        style="width: 17.9pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style='font-size:13px;font-family:"Times New Roman",serif;'><br></span></p>
                    </td>
                    <td
                        style="width: 17.8pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style='font-size:13px;font-family:"Times New Roman",serif;'><br></span></p>
                    </td>
                    <td
                        style="width: 77.8pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style='font-size:13px;font-family:"Times New Roman",serif;'><br></span></p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 82.45pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style='font-size:13px;font-family:"Times New Roman",serif;'><br></span></p>
                    </td>
                    <td
                        style="width: 20.25pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style='font-size:13px;font-family:"Times New Roman",serif;'><br></span></p>
                    </td>
                    <td
                        style="width: 15.1pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style='font-size:13px;font-family:"Times New Roman",serif;'><br></span></p>
                    </td>
                    <td
                        style="width: 17.9pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style='font-size:13px;font-family:"Times New Roman",serif;'><br></span></p>
                    </td>
                    <td
                        style="width: 17.8pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style='font-size:13px;font-family:"Times New Roman",serif;'><br></span></p>
                    </td>
                    <td
                        style="width: 77.8pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(223, 255, 209);padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style='font-size:13px;font-family:"Times New Roman",serif;'><br></span></p>
                    </td>
                </tr>
            </tbody>
        </table>
        <p style='margin:0cm;font-size:19px;font-family:"Times New Roman",serif;font-weight:bold;'><span
                style='font-size:15px;font-family:"Arial",sans-serif;'><br></span></p>
        <p style='margin:0cm;font-size:19px;font-family:"Times New Roman",serif;font-weight:bold;'><span
                style='font-size:12px;font-family:"Arial",sans-serif;'><br></span></p>
        <div style='margin:0cm;font-size:15px;font-family:"Times New Roman",serif;'>
            <ol style="margin-bottom:0cm;list-style-type: undefined;">
                <li style='margin:0cm;font-size:15px;font-family:"Times New Roman",serif;'><strong><span
                            style="font-size:13px;">ANTECEDENTES PERSONALES PATOLOGICOS.</span></strong></li>
            </ol>
        </div>
        <p style='margin:0cm;font-size:19px;font-family:"Times New Roman",serif;font-weight:bold;margin-top:.05pt;'>
            <span style='font-size:13px;font-family:"Arial",sans-serif;'><br></span></p>

        <table style="margin-left: 8.2pt;border-collapse:collapse;border:none;  width: 98%;">
            <tbody>

                <tr>
                    <td
                        style="width: 74.4pt;border-top: none;border-bottom: none;border-image: initial;border-right: 1pt solid black;padding: 0cm;height: 9.05pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style='font-size:8px;font-family:"Times New Roman",serif;'><br></span></p>
                    </td>
                    <td
                        style="width: 17.6pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;padding: 0cm;height: 9.05pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.2pt;line-height:8.1pt;'>
                            <strong><span style='font-size:11px;font-family:"Arial",sans-serif;'>No</span></strong></p>
                    </td>
                    <td
                        style="width: 17.7pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;padding: 0cm;height: 9.05pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.4pt;line-height:8.1pt;'>
                            <strong><span style='font-size:11px;font-family:"Arial",sans-serif;'>Si</span></strong></p>
                    </td>
                    <td
                        style="width: 319pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 9.05pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style='font-size:8px;font-family:"Times New Roman",serif;'><br></span></p>
                    </td>
                    <td
                        style="width: 21.2pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;padding: 0cm;height: 9.05pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.35pt;line-height:8.1pt;'>
                            <span style="font-size:11px;">Si</span></p>
                    </td>
                    <td
                        style="width: 18.8pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;padding: 0cm;height: 9.05pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.55pt;line-height:8.1pt;'>
                            <span style="font-size:11px;">No</span></p>
                    </td>
                    <td style="width: 87.45pt;border: none;padding: 0cm;height: 9.05pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style='font-size:8px;font-family:"Times New Roman",serif;'><br></span></p>
                    </td>
                </tr>


                <tr>
                    <td
                        style="width: 74.4pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 23pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:0cm;margin-right:3.5pt;margin-bottom:.0001pt;margin-left:3.45pt;line-height:11.5pt;'>
                            <strong><span style='font-size:13px;font-family:"Arial",sans-serif;color:black;'>Inf.
                                    Resp. Agudas</span></strong></p>
                    </td>
                    <td
                        style="width: 17.6pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 23pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 42%;margin-top: 14px;/* margin-left:-1px; */"
                            name="antece_pato_info_resp_agudas" value="no">

                    </td>
                    <td
                        style="width: 17.7pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 23pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 42%;margin-top: 14px;/* margin-left:-1px; */"
                            name="antece_pato_info_resp_agudas" value="si">

                    </td>
                    <td rowspan="2"
                        style="width: 319pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 23pt;vertical-align: top;">
                        {{-- <input type="text" style="width:100%;height:90%;margin-top:5px;margin-left:-1px;" name="antece_pato_info_resp_agudas_descripcion"> --}}

                        <textarea name="antece_pato_info_resp_agudas_descripcion" style="width:99%;height:90%;margin-top:5px;margin-left:-1px;"></textarea>

                    </td>
                    <td
                        style="width: 21.2pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 23pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 42%;margin-top: 14px;/* margin-left:-1px; */"
                            name="antece_pato_hipertension_art" value="no">

                    </td>
                    <td
                        style="width: 18.8pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;padding: 0cm;height: 23pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 42%;margin-top: 14px;/* margin-left:-1px; */"
                            name="antece_pato_hipertension_art" value="si">

                    </td>
                    <td
                        style="width: 87.45pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 23pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.05pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.7pt;'>
                            <strong><span
                                    style='font-size:12px;font-family:"Arial",sans-serif;color:black;'>Hipertensi&oacute;n Art.</span></strong>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 74.4pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:1.15pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.45pt;'>
                            <strong><span
                                    style='font-size:13px;font-family:"Arial",sans-serif;color:black;'>Asma</span></strong>
                        </p>
                    </td>
                    <td
                        style="width: 17.6pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 60%;margin-top: 7px;/* margin-left:-1px; */"
                            name="antece_pato_asma" value="no">
                    </td>
                    <td
                        style="width: 17.7pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 60%;margin-top: 7px;/* margin-left:-1px; */"
                            name="antece_pato_asma" value="si">
                    </td>
                    <td
                        style="width: 21.2pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 58%;margin-top: 6px;/* margin-left:-1px; */"
                            name="antece_pato_diabetes_mellitus" value="no">
                    </td>
                    <td
                        style="width: 18.8pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 58%;margin-top: 6px;/* margin-left:-1px; */"
                            name="antece_pato_diabetes_mellitus" value="si">
                    </td>
                    <td
                        style="width: 87.45pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.7pt;line-height:10.3pt;'>
                            <strong><span
                                    style='font-size:12px;font-family:"Arial",sans-serif;color:black;'>Diabetes Mellitus</span></strong>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 74.4pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 13.9pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:1.15pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.45pt;'>
                            <strong><span
                                    style='font-size:13px;font-family:"Arial",sans-serif;color:black;'>Enf. Diarreica</span></strong>
                        </p>
                    </td>
                    <td
                        style="width: 17.6pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.9pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 42%;margin-top: 14px;/* margin-left:-1px; */"
                            name="antece_pato_enf_diarreica" value="no">
                    </td>
                    <td
                        style="width: 17.7pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.9pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 42%;margin-top: 14px;/* margin-left:-1px; */"
                            name="antece_pato_enf_diarreica" value="si">
                    </td>
                    <td rowspan="2"
                        style="width: 319pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.9pt;vertical-align: top;">
                        {{-- <input type="text" style="width:100%;height:90%;margin-top:5px;margin-left:-1px;" name="antece_pato_enf_diarreica_descripcion"> --}}

                        <textarea name="antece_pato_enf_diarreica_descripcion" style="width:99%;height:84%;margin-top:5px;margin-left:-1px;"></textarea>
                    </td>
                    <td
                        style="width: 21.2pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.9pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 42%;margin-top: 14px;/* margin-left:-1px; */"
                            name="antece_pato_av_cerebral" value="no">
                    </td>
                    <td
                        style="width: 18.8pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;padding: 0cm;height: 13.9pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 42%;margin-top: 14px;/* margin-left:-1px; */"
                            name="antece_pato_av_cerebral" value="si">
                    </td>
                    <td
                        style="width: 87.45pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 13.9pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.05pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.7pt;'>
                            <strong><span
                                    style='font-size:12px;font-family:"Arial",sans-serif;color:black;'>A.V. Cerebral</span></strong>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 74.4pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:1.05pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.45pt;'>
                            <strong><span
                                    style='font-size:13px;font-family:"Arial",sans-serif;color:black;'>Parasitosis</span></strong>
                        </p>
                    </td>
                    <td
                        style="width: 17.6pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 58%;margin-top: 6px;/* margin-left:-1px; */"
                            name="antece_pato_parasitosis" value="no">
                    </td>
                    <td
                        style="width: 17.7pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 58%;margin-top: 6px;/* margin-left:-1px; */"
                            name="antece_pato_parasitosis" value="si">
                    </td>
                    <td
                        style="width: 21.2pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 58%;margin-top: 6px;/* margin-left:-1px; */"
                            name="antece_pato_i_miocardio" value="si">
                    </td>
                    <td
                        style="width: 18.8pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 58%;margin-top: 6px;/* margin-left:-1px; */"
                            name="antece_pato_i_miocardio" value="no">
                    </td>
                    <td
                        style="width: 87.45pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.7pt;line-height:10.3pt;'>
                            <strong><span
                                    style='font-size:12px;font-family:"Arial",sans-serif;color:black;'>I. Miocardio</span></strong>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 74.4pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:1.05pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.45pt;'>
                            <strong><span
                                    style='font-size:13px;font-family:"Arial",sans-serif;color:black;'>Dengue</span></strong>
                        </p>
                    </td>
                    <td
                        style="width: 17.6pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 58%;margin-top: 6px;/* margin-left:-1px; */"
                            name="antece_pato_dengue" value="no">
                    </td>
                    <td
                        style="width: 17.7pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 58%;margin-top: 6px;/* margin-left:-1px; */"
                            name="antece_pato_dengue" value="si">
                    </td>
                    <td rowspan="2"
                        style="width: 319pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        {{-- <input type="text" style="width:100%;height:90%;margin-top:5px;margin-left:-1px;" name="antece_pato_dengue_descripcion"> --}}

                        <textarea name="antece_pato_dengue_descripcion" style="width:99%;height:90%;margin-top:1px;margin-left:-1px;"></textarea>
                    </td>
                    <td
                        style="width: 21.2pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 58%;margin-top: 6px;/* margin-left:-1px; */"
                            name="antece_pato_trombo_flebitiso" value="si">
                    </td>
                    <td
                        style="width: 18.8pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 58%;margin-top: 6px;/* margin-left:-1px; */"
                            name="antece_pato_trombo_flebitis" value="no">
                    </td>
                    <td
                        style="width: 87.45pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.7pt;line-height:10.3pt;'>
                            <strong><span
                                    style='font-size:12px;font-family:"Arial",sans-serif;color:black;'>Trombo flebitis</span></strong>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 74.4pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:1.05pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.45pt;'>
                            <strong><span
                                    style='font-size:13px;font-family:"Arial",sans-serif;color:black;'>Tuberculosis</span></strong>
                        </p>
                    </td>
                    <td
                        style="width: 17.6pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height:90%;margin-top:1px;margin-left:-1px;"
                            name="antece_pato_tuberculosis" value="no">
                    </td>
                    <td
                        style="width: 17.7pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height:90%;margin-top:1px;margin-left:-1px;"
                            name="antece_pato_tuberculosis" value="si">
                    </td>
                    <td
                        style="width: 21.2pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height:90%;margin-top:1px;margin-left:-1px;"
                            name="antece_pato_quirurgicas" value="si">
                    </td>
                    <td
                        style="width: 18.8pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height:90%;margin-top:1px;margin-left:-1px;"
                            name="antece_pato_quirurgicas" value="no">
                    </td>
                    <td
                        style="width: 87.45pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.7pt;line-height:10.3pt;'>
                            <strong><span
                                    style='font-size:12px;font-family:"Arial",sans-serif;color:black;'>Quir&uacute;rgicas</span></strong>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 74.4pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 20.7pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:4.5pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.45pt;'>
                            <strong><span
                                    style='font-size:13px;font-family:"Arial",sans-serif;color:black;'>Artritis</span></strong>
                        </p>
                    </td>
                    <td
                        style="width: 17.6pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 20.7pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 58%;margin-top: 6px;/* margin-left:-1px; */"
                            name="antece_pato_artritis" value="no">
                    </td>
                    <td
                        style="width: 17.7pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 20.7pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 58%;margin-top: 6px;/* margin-left:-1px; */"
                            name="antece_pato_artritis" value="si">
                    </td>
                    <td rowspan="2"
                        style="width: 319pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 20.7pt;vertical-align: top;">
                        {{-- <input type="text" style="width:100%;height:90%;margin-top:1px;margin-left:-1px;" name="antece_pato_artritis_descripcion"> --}}

                        <textarea name="antece_pato_artritis_descripcion" style="width:99%;height:90%;margin-top:1px;margin-left:-1px;"></textarea>
                    </td>
                    <td
                        style="width: 21.2pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 20.7pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 58%;margin-top: 6px;/* margin-left:-1px; */"
                            name="antece_pato_enf_exantemticas" value="si">
                    </td>
                    <td
                        style="width: 18.8pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;padding: 0cm;height: 20.7pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 58%;margin-top: 6px;/* margin-left:-1px; */"
                            name="antece_pato_enf_exantemticas" value="no">
                    </td>
                    <td
                        style="width: 87.45pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 20.7pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:0cm;margin-right:19.7pt;margin-bottom:.0001pt;margin-left:3.7pt;line-height:10.3pt;'>
                            <strong><span
                                    style='font-size:12px;font-family:"Arial",sans-serif;color:black;'>Enf. Exantem&aacute;ticas</span></strong>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 74.4pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:1.05pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.45pt;'>
                            <strong><span
                                    style='font-size:13px;font-family:"Arial",sans-serif;color:black;'>Alergias</span></strong>
                        </p>
                    </td>
                    <td
                        style="width: 17.6pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height:90%;margin-top:1px;margin-left:-1px;"
                            name="antece_pato_alergias" value="no">
                    </td>
                    <td
                        style="width: 17.7pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height:90%;margin-top:1px;margin-left:-1px;"
                            name="antece_pato_alergias" value="si">
                    </td>
                    <td
                        style="width: 21.2pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height:90%;margin-top:1px;margin-left:-1px;"
                            name="antece_pato_otros" value="si">
                    </td>
                    <td
                        style="width: 18.8pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height:90%;margin-top:1px;margin-left:-1px;"
                            name="antece_pato_otros" value="no">
                    </td>
                    <td
                        style="width: 87.45pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.7pt;line-height:10.3pt;'>
                            <strong><span
                                    style='font-size:12px;font-family:"Arial",sans-serif;color:black;'>otros</span></strong>
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>

        <p style='margin:0cm;font-size:19px;font-family:"Times New Roman",serif;font-weight:bold;'><span
                style='font-size:13px;font-family:"Arial",sans-serif;'><br></span></p>
        <div style='margin:0cm;font-size:15px;font-family:"Times New Roman",serif;'>
            <ol style="margin-bottom:0cm;list-style-type: undefined;">
                <li style='margin:0cm;font-size:15px;font-family:"Times New Roman",serif;'><strong><span
                            style="font-size:13px;">ANTECEDENTES PERSONALES NO PATOLOGICOS.</span></strong></li>
            </ol>
        </div>

        <p
            style='margin:0cm;font-size:19px;font-family:"Times New Roman",serif;font-weight:bold;margin-top:.5pt;margin-right:0cm;margin-bottom:.05pt;margin-left:0cm;'>
            <span style='font-size:13px;font-family:"Arial",sans-serif;'><br></span></p>
        <table style="margin-left: 8.2pt;border-collapse:collapse;border:none;  width: 98%;">
            <tbody>
                <tr>
                    <td
                        style="width: 74.4pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 9.2pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style='font-size:8px;font-family:"Times New Roman",serif;'><br></span></p>
                    </td>
                    <td
                        style="width: 17.6pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;padding: 0cm;height: 9.2pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.05pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.45pt;line-height:8.15pt;'>
                            <span style="font-size:11px;">No</span></p>
                    </td>
                    <td
                        style="width: 17.7pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;padding: 0cm;height: 9.2pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.05pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.65pt;line-height:8.15pt;'>
                            <span style="font-size:11px;">Si</span></p>
                    </td>
                    <td colspan="5"
                        style="width: 439.5pt;border-top: none;border-image: initial;border-bottom: 1pt solid black;padding: 0cm;height: 9.2pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style='font-size:8px;font-family:"Times New Roman",serif;'><br></span></p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 74.4pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;background: rgb(204, 255, 204);padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:1.75pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.45pt;'>
                            <strong><span
                                    style='font-size:12px;font-family:"Arial",sans-serif;color:black;'>Tabaco</span></strong>
                        </p>
                    </td>
                    <td
                        style="width: 17.6pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height:90%;margin-top:1px;margin-left:-1px;"
                            name="antece_no_patolog_tabaco" value="no">
                    </td>
                    <td
                        style="width: 17.7pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height:90%;margin-top:1px;margin-left:-1px;"
                            name="antece_no_patolog_tabaco" value="si">
                    </td>
                    <td rowspan="2"
                        style="width: 319pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        {{-- <input type="text" style="width:100%;height: 58%;margin-top: 6px;/* margin-left:-1px; */" name="antece_no_patolog_tabaco_descripcion"> --}}
                        <textarea name="antece_no_patolog_tabaco_descripcion" style="width:99%;height:100%;margin-top:1px;margin-left:-1px;"></textarea>
                    </td>
                    <td colspan="4" rowspan="2"
                        style="width: 120.5pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:0cm;margin-right:7.8pt;margin-bottom:.0001pt;margin-left:8.65pt;text-indent:15.0pt;'>
                            <strong><span style='font-size:12px;font-family:"Arial",sans-serif;'>ANTECEDENTES GINECO-OBSTETRICOS</span></strong>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 74.4pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;background: rgb(204, 255, 204);padding: 0cm;height: 13.85pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:1.75pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.45pt;'>
                            <strong><span
                                    style='font-size:12px;font-family:"Arial",sans-serif;color:black;'>Alcohol</span></strong>
                        </p>
                    </td>
                    <td
                        style="width: 17.6pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.85pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height:90%;margin-top:1px;margin-left:-1px;"
                            name="antece_no_patolog_alcohol" value="no">
                    </td>
                    <td
                        style="width: 17.7pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.85pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height:90%;margin-top:1px;margin-left:-1px;"
                            name="antece_no_patolog_alcohol" value="si">
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 74.4pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;background: rgb(204, 255, 204);padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:1.6pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.45pt;'>
                            <strong><span
                                    style='font-size:12px;font-family:"Arial",sans-serif;color:black;'>Alimentaci&oacute;n</span></strong>
                        </p>
                    </td>
                    <td
                        style="width: 17.6pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height:90%;margin-top:1px;margin-left:-1px;"
                            name="antece_no_patolog_alimentacion" value="no">
                    </td>
                    <td
                        style="width: 17.7pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height:90%;margin-top:1px;margin-left:-1px;"
                            name="antece_no_patolog_alimentacion" value="si">
                    </td>
                    <td rowspan="2"
                        style="width: 319pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        {{-- <input type="text" style="width:100%;height:90%;margin-top:1px;margin-left:-1px;"  name="antece_no_patolog_alimentacion_descripcion"> --}}
                        <textarea name="antece_no_patolog_alimentacion_descripcion" style="width:99%;height:89%;margin-top:1px;margin-left:-1px;"></textarea>
                    </td>
                    <td
                        style="width: 35.5pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:.85pt;text-align:  center;line-height:10.3pt;'>
                            <strong><span style='font-size:12px;font-family:"Arial",sans-serif;'>G</span></strong></p>
                    </td>
                    <td
                        style="width: 28.3pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:.85pt;text-align:  center;line-height:10.3pt;'>
                            <strong><span style='font-size:12px;font-family:"Arial",sans-serif;'>P</span></strong></p>
                    </td>
                    <td
                        style="width: 28.4pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:1.05pt;text-align:  center;line-height:10.3pt;'>
                            <strong><span style='font-size:12px;font-family:"Arial",sans-serif;'>C</span></strong></p>
                    </td>
                    <td
                        style="width: 28.3pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:.95pt;text-align:  center;line-height:10.3pt;'>
                            <strong><span style='font-size:12px;font-family:"Arial",sans-serif;'>A</span></strong></p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 74.4pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;background: rgb(204, 255, 204);padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:1.6pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.45pt;'>
                            <strong><span
                                    style='font-size:12px;font-family:"Arial",sans-serif;color:black;'>Trabajo</span></strong>
                        </p>
                    </td>
                    <td
                        style="width: 17.6pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height:90%;margin-top:1px;margin-left:-1px;"
                            name="antece_no_patolog_trabajo" value="no">
                    </td>
                    <td
                        style="width: 17.7pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height:90%;margin-top:1px;margin-left:-1px;"
                            name="antece_no_patolog_trabajo" value="si">
                    </td>
                    <td
                        style="width: 35.5pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="checkbox" style="width:100%;height: 70%;margin-top: 5px;margin-left:-1px;"
                            name="antece_no_patolog_gine_tipo_G">
                    </td>
                    <td
                        style="width: 28.3pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="checkbox" style="width:100%;height: 70%;margin-top: 5px;margin-left:-1px;"
                            name="antece_no_patolog_gine_tipo_P">
                    </td>
                    <td
                        style="width: 28.4pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="checkbox" style="width:100%;height: 70%;margin-top: 5px;margin-left:-1px;"
                            name="antece_no_patolog_gine_tipo_C">
                    </td>
                    <td
                        style="width: 28.3pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="checkbox" style="width:100%;height: 70%;margin-top: 5px;margin-left:-1px;"
                            name="antece_no_patolog_gine_tipo_A">
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 74.4pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;background: rgb(204, 255, 204);padding: 0cm;height: 25.3pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:7.35pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.45pt;'>
                            <strong><span
                                    style='font-size:12px;font-family:"Arial",sans-serif;color:black;'>Vivienda</span></strong>
                        </p>
                    </td>
                    <td
                        style="width: 17.6pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 25.3pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 80%;margin-top: 4px;/* margin-left:-1px; */"
                            name="antece_no_patolog_vivienda" value="no">
                    </td>
                    <td
                        style="width: 17.7pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 25.3pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height: 80%;margin-top: 4px;/* margin-left:-1px; */"
                            name="antece_no_patolog_vivienda" value="si">
                    </td>
                    <td rowspan="2"
                        style="width: 319pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 25.3pt;vertical-align: top;">
                        {{-- <input type="text" style="width:100%;height: 58%;margin-top: 6px;/* margin-left:-1px; */" name="antece_no_patolog_vivienda_descripcion"> --}}

                        <textarea name="antece_no_patolog_vivienda_descripcion" style="width:99%;height:89%;margin-top:1px;margin-left:-1px;"></textarea>
                    </td>
                    <td
                        style="width: 35.5pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 25.3pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.6pt;line-height:10.3pt;margin-top:8px;'>
                            <strong><span style='font-size:12px;font-family:"Arial",sans-serif;'>FUM</span></strong></p>
                    </td>
                    <td
                        style="width: 28.3pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 25.3pt;vertical-align: top;">
                        <input type="checkbox" style="width:100%;height:60%;margin-top:4px;margin-left:-1px;"
                            name="antece_no_patolog_fuma_P">
                    </td>
                    <td
                        style="width: 28.4pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 25.3pt;vertical-align: top;">
                        <input type="checkbox" style="width:100%;height:60%;margin-top:4px;margin-left:-1px;"
                            name="antece_no_patolog_fuma_C">
                    </td>
                    <td
                        style="width: 28.3pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 25.3pt;vertical-align: top;">
                        <input type="checkbox" style="width:100%;height:60%;margin-top:4px;margin-left:-1px;"
                            name="antece_no_patolog_fuma_A">
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 74.4pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;background: rgb(204, 255, 204);padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:1.6pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.45pt;'>
                            <strong><span
                                    style='font-size:12px;font-family:"Arial",sans-serif;color:black;'>Medicamento</span></strong>
                        </p>
                    </td>
                    <td
                        style="width: 17.6pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height:90%;margin-top:1px;margin-left:-1px;"
                            name="antece_no_patolog_medicamento" value="no">
                    </td>
                    <td
                        style="width: 17.7pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <input type="radio" style="width:100%;height:90%;margin-top:1px;margin-left:-1px;"
                            name="antece_no_patolog_medicamento" value="si">
                    </td>
                    <td colspan="2"
                        style="width: 63.8pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style='font-size:13px;font-family:"Times New Roman",serif;'><br></span></p>
                    </td>
                    <td colspan="2"
                        style="width: 2cm;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style='font-size:13px;font-family:"Times New Roman",serif;'><br></span></p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 74.4pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;background: rgb(204, 255, 204);padding: 0cm;height: 37.9pt;vertical-align: top;">
                        
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.45pt;'>
                            <strong><span
                                    style='font-size:12px;font-family:"Arial",sans-serif;color:black;'>Recreaci&oacute;n</span></strong>
                        </p>
                    </td>
                    <td
                        style="width: 17.6pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 37.9pt;vertical-align: top;">
                        <input type="radio" style="width:100% !important;height:45% !important;margin-top:15px !important;margin-left:-1px !important;"
                            name="antece_no_patolog_recreacion" value="no">
                    </td>
                    <td
                        style="width: 17.7pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 37.9pt;vertical-align: top;">
                        <input type="radio" style="width:100% !important;height:45% !important;margin-top:15px !important;margin-left:-1px !important;"
                            name="antece_no_patolog_recreacion" value="si">
                    </td>
                    <td rowspan="2"
                        style="width: 319pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 37.9pt;vertical-align: top;">
                        {{-- <input type="text" style="width:100%;height: 58%;margin-top: 6px;/* margin-left:-1px; */"    name="antece_no_patolog_recreacion_descripcion"> --}}

                        <textarea name="antece_no_patolog_recreacion_descripcion" style="width:99%;height:89%;margin-top:1px;margin-left:-1px;"></textarea>
                    </td>
                    <td colspan="2"
                        style="width: 63.8pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 37.9pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style='font-size:13px;font-family:"Times New Roman",serif;'><br></span></p>
                    </td>
                    <td colspan="2"
                        style="width: 2cm;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 37.9pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style='font-size:13px;font-family:"Times New Roman",serif;'><br></span></p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 74.4pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;background: rgb(204, 255, 204);padding: 0cm;height: 13.9pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style='font-size:13px;font-family:"Times New Roman",serif;'><br></span></p>
                    </td>
                    <td
                        style="width: 17.6pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.9pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style='font-size:13px;font-family:"Times New Roman",serif;'><br></span></p>
                    </td>
                    <td
                        style="width: 17.7pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.9pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style='font-size:13px;font-family:"Times New Roman",serif;'><br></span></p>
                    </td>
                    <td
                        style="width: 35.5pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.9pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.05pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.6pt;'>
                            <strong><span style='font-size:12px;font-family:"Arial",sans-serif;'>Otras</span></strong>
                        </p>
                    </td>
                    <td colspan="3"
                        style="width: 85pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 13.9pt;vertical-align: top;">
                        {{-- <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                        style='font-size:13px;font-family:"Times New Roman",serif;'><br></span></p> --}}
                        <input type="text" style="width:95%;height:80%;margin-top:1px;margin-left:-1px;"
                            name="antece_no_patolog_otro">
                    </td>
                </tr>
            </tbody>
        </table>
        <p><span style='font-size:13px;font-family:"Times New Roman",serif;'><br><br></span></p>

        <p
            style='margin:0cm;font-size:15px;font-family:"Times New Roman",serif;margin-top:3.2pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:11.3pt;'>
            <strong><span style='font-size:13px;font-family:"Arial",sans-serif;'>PADECIMIENTO ACTUAL.</span></strong>
        </p>
        <p style='margin:0cm;font-size:19px;font-family:"Times New Roman",serif;font-weight:bold;margin-top:.55pt;'>
            <span style='font-size:13px;font-family:"Arial",sans-serif;'><br></span></p>
        <table style="margin-left: 8.6pt;border-collapse:collapse;border:none;  width: 98%;">
            <tbody>
                <tr>
                    <td
                        style="width: 556.8pt;border-width: 1pt;border-style: double double solid;border-color: black;border-image: initial;padding: 0cm;height: 19.75pt;vertical-align: top;">
                        <textarea name="padecimiento_actial_1"></textarea>
                    </td>
                </tr>
               
            </tbody>
        </table>
        <p style='margin:0cm;font-size:19px;font-family:"Times New Roman",serif;font-weight:bold;'><span
                style='font-size:15px;font-family:"Arial",sans-serif;'><br></span></p>
        <p style='margin:0cm;font-size:19px;font-family:"Times New Roman",serif;font-weight:bold;margin-top:.5pt;'><span
                style='font-size:12px;font-family:"Arial",sans-serif;'><br></span></p>
        <div style='margin:0cm;font-size:15px;font-family:"Times New Roman",serif;'>
            <ol start="22" style="margin-bottom:0cm;list-style-type: upper-alpha;">
                <li style='margin:0cm;font-size:15px;font-family:"Times New Roman",serif;'><strong><span
                            style="font-size:13px;">INTERROGATORIO.</span></strong></li>
            </ol>
        </div>
        <p style='margin:0cm;font-size:19px;font-family:"Times New Roman",serif;font-weight:bold;margin-top:.55pt;'>
            <span style='font-size:13px;font-family:"Arial",sans-serif;'><br></span></p>
        <table style="margin-left: 8.6pt;border-collapse:collapse;border:none;  width: 98%;" id="interrogatorio">
            <tbody>
                <tr>
                    <td rowspan="2"
                        style="width: 38.9pt;border-style: double solid solid double;border-color: black;border-width: 1pt;background: rgb(204, 255, 204);padding: 0cm;height: 11.1pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:1.0pt;margin-right:4.25pt;margin-bottom:.0001pt;margin-left:13.15pt;text-indent:-8.05pt;'>
                            <span style="font-size:12px;">CABE-<span style="color:black;"><br></span><span
                                    style="color:black;">ZA</span></span></p>
                    </td>
                    <td
                        style="width: 70.9pt;border-top: 1pt double black;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.1pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.55pt;line-height:10.1pt;'>
                            <span style="font-size:13px;color:black;">Cefalea <input type="checkbox"
                                    name="interro_cabeza_cefalea"></span>
                        </p>
                    </td>
                    <td
                        style="width: 63.85pt;border-top: 1pt double black;border-bottom: 1pt solid black;border-right: 1pt double black;background: rgb(204, 255, 204);padding: 0cm;height: 11.1pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.6pt;line-height:10.1pt;'>
                            <span style="font-size:13px;color:black;">V&eacute;rtigos <input type="checkbox"
                                    name="interro_cabeza_vertigos"></span>
                        </p>
                    </td>
                    <td rowspan="2"
                        style="width: 205.45pt;border-top: 1pt double black;border-bottom: 1pt solid black;border-right: 1pt double black;padding: 0cm;height: 11.1pt;vertical-align: top;">
                        {{-- <input type="text" name="interrogatrio_cabeza_descripcion" style="width:100%;height:100%"> --}}
                        <textarea name="interro_cabeza_descripcion" id="interro_cabeza_descripcion" cols="35" rows="3"  style="height:100%;"></textarea>
                    </td>
                    <td
                        style="width: 63.85pt;border-top: 1pt double black;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.1pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.1pt;line-height:9.9pt;'>
                            <span style="font-size:12px;color:black;">Apetito <input type="checkbox"
                                    name="interro_diges_apetito"></span>
                        </p>
                    </td>
                    <td
                        style="width: 78.8pt;border-top: 1pt double black;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.1pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.65pt;line-height:9.9pt;'>
                            <span style="font-size:12px;color:black;">Eructos <input type="checkbox"
                                    name="interro_diges_eructos"></span></p>
                    </td>
                    <td rowspan="7"
                        style="width: 42.6pt;border-top: 1pt double black;border-bottom: 1pt solid black;border-right: 1pt double black;padding: 0cm;height: 11.1pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><strong><span
                                    style='font-size:12px;font-family:"Arial",sans-serif;'><br></span></strong></p>
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><strong><span
                                    style='font-size:12px;font-family:"Arial",sans-serif;'><br></span></strong></p>
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.55pt;'>
                            <strong><span style='font-size:13px;font-family:"Arial",sans-serif;'><br></span></strong>
                        </p>
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:0cm;margin-right:3.25pt;margin-bottom:.0001pt;margin-left:15.65pt;text-indent:-10.35pt;'>
                            <span style="font-size:11px;">DIGESTI<br>VO</span></p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 70.9pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.55pt;line-height:10.5pt;'>
                            <span style="font-size:13px;color:black;">Mareos <input type="checkbox"
                                    name="interro_cabeza_mareos"></span>
                        </p>
                    </td>
                    <td
                        style="width: 63.85pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt double black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.6pt;line-height:10.5pt;'>
                            <span style="font-size:13px;color:black;">Lipotimias <input type="checkbox"
                                    name="interro_cabeza_lipotimias"></span></p>
                    </td>
                    <td
                        style="width: 63.85pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.1pt;line-height:10.3pt;'>
                            <span style="font-size:12px;color:black;">Masticaci&oacute;n <input type="checkbox"
                                    name="interro_diges_masticacion"></span></p>
                    </td>
                    <td
                        style="width: 78.8pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.65pt;line-height:10.3pt;'>
                            <span style="font-size:12px;color:black;">Pirosis <input type="checkbox"
                                    name="interro_diges_pirosis"></span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td rowspan="2"
                        style="width: 38.9pt;border-top: none;border-left: 1pt double black;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:6.55pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.65pt;'>
                            <span style="font-size:12px;color:black;">OJOS</span></p>
                    </td>
                    <td
                        style="width: 70.9pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.55pt;line-height:10.5pt;'>
                            <span style="font-size:13px;color:black;">Visi&oacute;n <input type="checkbox"
                                    name="interro_ojos_vision"></span></p>
                    </td>
                    <td
                        style="width: 63.85pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt double black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.6pt;line-height:10.5pt;'>
                            <span style="font-size:13px;color:black;">Lentes <input type="checkbox"
                                    name="interro_ojos_lentes"></span></p>
                    </td>
                    <td rowspan="2"
                        style="width: 205.45pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt double black;padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <textarea name="interro_ojos_descripcion" id="interro_ojos_descripcion" cols="35" rows="3" style="height:100%;"></textarea>
                    </td>
                    <td
                        style="width: 63.85pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.1pt;line-height:10.3pt;'>
                            <span style="font-size:12px;color:black;">Disfagia <input type="checkbox"
                                    name="interro_diges_disfagia"></span>
                        </p>
                    </td>
                    <td
                        style="width: 78.8pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.65pt;line-height:10.3pt;'>
                            <span style="font-size:12px;color:black;">N&aacute;usea <input type="checkbox"
                                    name="interro_diges_nausea"></span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 70.9pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.55pt;line-height:10.5pt;'>
                            <span style="font-size:13px;color:black;">Congesti&oacute;n <input type="checkbox"
                                    name="interro_ojos_congestion"></span></p>
                    </td>
                    <td
                        style="width: 63.85pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt double black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.6pt;line-height:10.5pt;'>
                            <span style="font-size:13px;color:black;">Dolor <input type="checkbox"
                                    name="interro_ojos_dolor"></span></p>
                    </td>
                    <td
                        style="width: 63.85pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.1pt;line-height:10.3pt;'>
                            <span style="font-size:12px;color:black;">Meteorismo <input type="checkbox"
                                    name="interro_diges_meteorismo"></span></p>
                    </td>
                    <td
                        style="width: 78.8pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.65pt;line-height:10.3pt;'>
                            <span style="font-size:12px;color:black;">H&aacute;bito<br>Intest <input type="checkbox"
                                    name="interro_diges_habitoIntest"></span></p>
                    </td>
                </tr>
                <tr>
                    <td rowspan="2"
                        style="width: 38.9pt;border-top: none;border-left: 1pt double black;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:6.55pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.35pt;'>
                            <span style="font-size:12px;color:black;">NARIZ</span></p>
                    </td>
                    <td
                        style="width: 70.9pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.55pt;line-height:10.5pt;'>
                            <span style="font-size:13px;color:black;">Secreci&oacute;n <input type="checkbox"
                                    name="interro_nariz_secrecion"></span></p>
                    </td>
                    <td
                        style="width: 63.85pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt double black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.6pt;line-height:10.5pt;'>
                            <span style="font-size:13px;color:black;">Obstrucci&oacute;n <input type="checkbox"
                                    name="interro_nariz_obstruccion"></span></p>
                    </td>
                    <td rowspan="2"
                        style="width: 205.45pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt double black;padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <textarea name="interrogatrio_nariz_descripcion" id="interrogatrio_nariz_descripcion" cols="35" rows="3" style="height:100%;"></textarea>
                    </td>
                    <td
                        style="width: 63.85pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.1pt;line-height:10.3pt;'>
                            <span style="font-size:12px;color:black;">Laxantes <input type="checkbox"
                                    name="interro_diges_laxantes"></span></p>
                    </td>
                    <td
                        style="width: 78.8pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.65pt;line-height:10.3pt;'>
                            <span style="font-size:12px;color:black;">Hemorroides <input type="checkbox"
                                    name="interro_diges_hemorroides"></span></p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 70.9pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.55pt;line-height:10.5pt;'>
                            <span style="font-size:13px;color:black;">Senos <input type="checkbox"
                                    name="interro_nariz_senos"></span></p>
                    </td>
                    <td
                        style="width: 63.85pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt double black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.6pt;line-height:10.5pt;'>
                            <span style="font-size:13px;color:black;">Ep&iacute;tasis <input type="checkbox"
                                    name="interro_nariz_epitasis"></span></p>
                    </td>
                    <td
                        style="width: 63.85pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.1pt;line-height:10.3pt;'>
                            <span style="font-size:12px;color:black;">V&oacute;mitos <input type="checkbox"
                                    name="interro_diges_vomitos"></span></p>
                    </td>
                    <td
                        style="width: 78.8pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.65pt;line-height:10.3pt;'>
                            <span style="font-size:12px;color:black;">Dolor <input type="checkbox"
                                    name="interro_diges_dolor"></span></p>
                    </td>
                </tr>
                <tr>
                    <td rowspan="3"
                        style="width: 38.9pt;border-top: none;border-left: 1pt double black;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.45pt;'>
                            <strong><span style='font-size:14px;font-family:"Arial",sans-serif;'><br></span></strong>
                        </p>
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:6.05pt;'><span
                                style="font-size:12px;color:black;">BOCA</span></p>
                    </td>
                    <td
                        style="width: 70.9pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.55pt;line-height:10.5pt;'>
                            <span style="font-size:13px;color:black;">Dientes <input type="checkbox"
                                    name="interro_boca_dientes"></span></p>
                    </td>
                    <td
                        style="width: 63.85pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt double black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.6pt;line-height:10.5pt;'>
                            <span style="font-size:13px;color:black;">Pr&oacute;tesis <input type="checkbox"
                                    name="interro_boca_protesis"></span></p>
                    </td>
                    <td rowspan="2"
                        style="width: 205.45pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt double black;padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <textarea type="test" cols="35" rows="3" name="interro_boca_1_descripcion" style="height:100%;"></textarea>
                    </td>
                    <td
                        style="width: 63.85pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.1pt;line-height:10.3pt;'>
                            <span style="font-size:12px;color:black;">Ictericia <input type="checkbox"
                                    name="interro_diges_ictericia"></span></p>
                    </td>
                    <td
                        style="width: 78.8pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.65pt;line-height:10.3pt;'>
                            <span style="font-size:12px;color:black;">Evacuaci&oacute;n <input type="checkbox"
                                    name="interro_diges_evacuacion"></span></p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 70.9pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.55pt;line-height:10.5pt;'>
                            <span style="font-size:13px;color:black;">Lengua <input type="checkbox"
                                    name="interro_boca_lengua"></span></p>
                    </td>
                    <td
                        style="width: 63.85pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt double black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.6pt;line-height:10.5pt;'>
                            <span style="font-size:13px;color:black;">Enc&iacute;as <input type="checkbox"
                                    name="interro_boca_encias"></span></p>
                    </td>
                    <td
                        style="width: 63.85pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.1pt;line-height:10.3pt;'>
                            <span style="font-size:12px;color:black;">Micci&oacute;n <input type="checkbox"
                                    name="interro_urinario_miccion"></span></p>
                    </td>
                    <td
                        style="width: 78.8pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.65pt;line-height:10.3pt;'>
                            <span style="font-size:12px;color:black;">Incontinencia <input type="checkbox"
                                    name="interro_urinario_incontinencia"></span></p>
                    </td>
                    <td rowspan="4"
                        style="width: 42.6pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt double black;background: rgb(179, 217, 179);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.15pt;'>
                            <strong><span style='font-size:17px;font-family:"Arial",sans-serif;'><br></span></strong>
                        </p>
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.05pt;margin-right:5.35pt;margin-bottom:.0001pt;margin-left:14.25pt;text-indent:-6.6pt;'>
                            <span style="font-size:11px;color:black;">URINA-<br>RIO</span></p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 70.9pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.55pt;line-height:10.5pt;'>
                            <span style="font-size:13px;color:black;">Sabor <input type="checkbox"
                                    name="interro_boca_sabor" </span> </p> </td> <td
                                    style="width: 63.85pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt double black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                                <p
                                    style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.6pt;line-height:10.5pt;'>
                                    <span style="font-size:13px;color:black;">Halitosis <input type="checkbox"
                                            name="interro_boca_halitosis" </span> </p> </td> <td rowspan="2"
                                            style="width: 205.45pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt double black;padding: 0cm;height: 11.5pt;vertical-align: top;"><textarea
                                            name="interro_boca_2_descripcion" cols="35" rows="3" style="height:100%;"></textarea>
                    </td>
                    <td
                        style="width: 63.85pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.1pt;line-height:10.3pt;'>
                            <span style="font-size:12px;color:black;">Polaquiuria <input type="checkbox"
                                    name="interro_urinario_polaquiuria"></span></p>
                    </td>
                    <td
                        style="width: 78.8pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.65pt;line-height:10.3pt;'>
                            <span style="font-size:12px;color:black;">Nicturia <input type="checkbox"
                                    name="interro_urinario_nicturia"></span></p>
                    </td>
                </tr>
                <tr>
                    <td rowspan="3"
                        style="width: 38.9pt;border-top: none;border-left: 1pt double black;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:7.35pt;margin-right:7.05pt;margin-bottom:.0001pt;margin-left:10.4pt;text-indent:-2.55pt;'>
                            <span style="font-size:12px;color:black;">CUELLO</span></p>
                    </td>
                    <td
                        style="width: 70.9pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.55pt;line-height:10.5pt;'>
                            <span style="font-size:13px;color:black;">Dolor Faringe <input type="checkbox"
                                    name="interro_cuello_dolor_faringe"></span></p>
                    </td>
                    <td
                        style="width: 63.85pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt double black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.6pt;line-height:10.5pt;'>
                            <span style="font-size:13px;color:black;">Movilidad <input type="checkbox"
                                    name="interro_cuello_movilidad"></span></p>
                    </td>
                    <td
                        style="width: 63.85pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.1pt;line-height:10.3pt;'>
                            <span style="font-size:12px;color:black;">Caract.orina <input type="checkbox"
                                    name="interro_urinario_caract_orina"></span></p>
                    </td>
                    <td
                        style="width: 78.8pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.65pt;line-height:10.3pt;'>
                            <span style="font-size:12px;color:black;">Poliuria <input type="checkbox"
                                    name="interro_urinario_poliuria"></span></p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 70.9pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.55pt;line-height:10.5pt;'>
                            <span style="font-size:13px;color:black;">Disfon&iacute;a <input type="checkbox"
                                    name="interro_cuello_disfonia"></span></p>
                    </td>
                    <td
                        style="width: 63.85pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt double black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.6pt;line-height:10.5pt;'>
                            <span style="font-size:13px;color:black;">Adenopat&iacute;a <input type="checkbox"
                                    name="interro_cuello_adenopatia"></span></p>
                    </td>
                    <td rowspan="2"
                        style="width: 205.45pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt double black;padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <textarea name="interro_cuello_descripcion" cols="35" rows="3" style="height:100%;"></textarea>
                    </td>
                    <td
                        style="width: 63.85pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.1pt;line-height:10.3pt;'>
                            <span style="font-size:12px;color:black;">Disuria <input type="checkbox"
                                    name="interro_urinario_disuria"></span></p>
                    </td>
                    <td
                        style="width: 78.8pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.65pt;line-height:10.3pt;'>
                            <span style="font-size:12px;color:black;">Hematuria <input type="checkbox"
                                    name="interro_urinario_hematuria"></span></p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 70.9pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.55pt;line-height:10.5pt;'>
                            <span style="font-size:13px;color:black;">Dolor CERN <input type="checkbox"
                                    name="interro_cuello_dolor_cern"></span></p>
                    </td>
                    <td
                        style="width: 63.85pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt double black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.6pt;line-height:10.5pt;'>
                            <span style="font-size:13px;color:black;">Tiroides <input type="checkbox"
                                    name="interro_cuello_tiroides"></span></p>
                    </td>
                    <td
                        style="width: 63.85pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.1pt;line-height:10.3pt;'>
                            <span style="font-size:12px;color:black;">Menarca <input type="checkbox"
                                    name="interro_genital_fem_menarca"></span></p>
                    </td>
                    <td
                        style="width: 78.8pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.65pt;line-height:10.3pt;'>
                            <span style="font-size:12px;color:black;">Menstruaci&oacute;n <input type="checkbox"
                                    name="interro_genital_fem_menst"></span></p>
                    </td>
                    <td rowspan="5"
                        style="width: 42.6pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt double black;padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.4pt;'>
                            <strong><span style='font-size:13px;font-family:"Arial",sans-serif;'><br></span></strong>
                        </p>
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:0cm;margin-right:3.4pt;margin-bottom:.0001pt;margin-left:5.0pt;text-align:center;text-indent:-.15pt;'>
                            <span style="font-size:11px;">GENITAL FEMENINO</span></p>
                    </td>
                </tr>
                <tr>
                    <td rowspan="6"
                        style="width: 38.9pt;border-top: none;border-left: 1pt double black;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.55pt;'>
                            <strong><span style='font-size:16px;font-family:"Arial",sans-serif;'><br></span></strong>
                        </p>
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:0cm;margin-right:3.25pt;margin-bottom:.0001pt;margin-left:3.05pt;text-align:center;text-indent:.1pt;'>
                            <span style="font-size:12px;color:black;">CARDIO RESPIRATORIO.</span></p>
                    </td>
                    <td
                        style="width: 70.9pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.55pt;line-height:10.5pt;'>
                            <span style="font-size:13px;color:black;">Tos <input type="checkbox"
                                    name="interro_cardioRes_tos"></span></p>
                    </td>
                    <td
                        style="width: 63.85pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt double black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.6pt;line-height:10.5pt;'>
                            <span style="font-size:13px;color:black;">Dolor t&oacute;rax <input type="checkbox"
                                    name="interro_cardioRes_dolorTorax"></span></p>
                    </td>
                    <td rowspan="2"
                        style="width: 205.45pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt double black;padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <textarea name="interro_cardioRes_descripcion_1" cols="35" rows="3" style="height:100%;"></textarea>
                    </td>
                    <td
                        style="width: 63.85pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.1pt;line-height:10.3pt;'>
                            <span style="font-size:12px;color:black;">F.ultima regla <input type="checkbox"
                                    name="interro_genital_fem_fUltimaRegla"></span></p>
                    </td>
                    <td
                        style="width: 78.8pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.65pt;line-height:10.3pt;'>
                            <span style="font-size:12px;color:black;">Secreciones <input type="checkbox"
                                    name="interro_genital_fem_secrecion"></span></p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 70.9pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.55pt;line-height:10.5pt;'>
                            <span style="font-size:13px;color:black;">Expectorar <input type="checkbox"
                                    name="interro_cardioResp_expectorar"></span></p>
                    </td>
                    <td
                        style="width: 63.85pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt double black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.6pt;line-height:10.5pt;'>
                            <span style="font-size:13px;color:black;">Precordial <input type="checkbox"
                                    name="interro_cardResp_precordial"></span></p>
                    </td>
                    <td
                        style="width: 63.85pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.1pt;line-height:10.3pt;'>
                            <span style="font-size:12px;color:black;">Abortos <input type="checkbox"
                                    name="interro_genital_fem_abortos"></span></p>
                    </td>
                    <td
                        style="width: 78.8pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.65pt;line-height:10.3pt;'>
                            <span style="font-size:12px;color:black;">Menopausia <input type="checkbox"
                                    name="interro_genital_fem_menopausia"></span></p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 70.9pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.55pt;line-height:10.5pt;'>
                            <span style="font-size:13px;color:black;">Hemoptisis <input type="checkbox"
                                    name="interro_cardioResp_hemoptisis"></span></p>
                    </td>
                    <td
                        style="width: 63.85pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt double black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.6pt;line-height:10.5pt;'>
                            <span style="font-size:13px;color:black;">Opresi&oacute;n <input type="checkbox"
                                    name="interro_cardioResp_opresion"></span></p>
                    </td>
                    <td rowspan="2"
                        style="width: 205.45pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt double black;padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <textarea name="interro_cardioResp_descripcion_2" cols="35" rows="3" style="height:100%;"></textarea>
                    </td>
                    <td
                        style="width: 63.85pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.1pt;line-height:10.3pt;'>
                            <span style="font-size:12px;color:black;">Hemorragia <input type="checkbox"
                                    name="interro_genital_fem_hemorragia"></span></p>
                    </td>
                    <td
                        style="width: 78.8pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.65pt;line-height:10.3pt;'>
                            <span style="font-size:12px;color:black;">Dismenorrea <input type="checkbox"
                                    name="interro_genital_fem_dismenorrea"></span></p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 70.9pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.55pt;line-height:10.5pt;'>
                            <span style="font-size:13px;color:black;">Palpitaci&oacute;n <input type="checkbox"
                                    name="interro_cardioResp_palpitacion"></span></p>
                    </td>
                    <td
                        style="width: 63.85pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt double black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.6pt;line-height:10.5pt;'>
                            <span style="font-size:13px;color:black;">Disnea <input type="checkbox"
                                    name="interro_cardioResp_disnea"></span></p>
                    </td>
                    <td
                        style="width: 63.85pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.1pt;line-height:10.3pt;'>
                            <span style="font-size:12px;color:black;">S. Climaterio <input type="checkbox"
                                    name="interro_genital_fem_sClimaterio"></span></p>
                    </td>
                    <td
                        style="width: 78.8pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.65pt;line-height:10.3pt;'>
                            <span style="font-size:12px;color:black;">Partos <input type="checkbox"
                                    name="interro_genital_fem_partos"></span></p>
                    </td>
                </tr>
                <tr>
                    <td rowspan="2"
                        style="width: 70.9pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 20.1pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.55pt;line-height:11.45pt;'>
                            <span style="font-size:13px;color:black;">Cianosis <input type="checkbox"
                                    name="interro_cardioResp_cianosis"></span></p>
                    </td>
                    <td rowspan="2"
                        style="width: 63.85pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt double black;background: rgb(204, 255, 204);padding: 0cm;height: 20.1pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.6pt;line-height:11.45pt;'>
                            <span style="font-size:13px;color:black;">Edema <input type="checkbox"
                                    name="interro_cardioResp_edema"></span></p>
                    </td>
                    <td rowspan="2"
                        style="width: 205.45pt;border-top: none;border-bottom: 1pt double black;border-right: 1pt double black;padding: 0cm;height: 20.1pt;vertical-align: top;">
                        <textarea name="interro_cardioResp_descripcion_3" cols="35" rows="3" style="height:94%;"></textarea>
                    </td>
                    <td
                        style="width: 63.85pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 20.1pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.1pt;line-height:10.3pt;'>
                            <span style="font-size:12px;color:black;">Potencia <input type="checkbox"
                                    name="interro_genital_masc_potencia"></span></p>
                    </td>
                    <td
                        style="width: 78.8pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 20.1pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:0cm;margin-right:29.1pt;margin-bottom:.0001pt;margin-left:3.65pt;line-height:10.3pt;'>
                            <span style="font-size:12px;color:black;">Relaciones Sexuales <input type="checkbox"
                                    name="interro_genital_masc_relSexuales"></span></p>
                    </td>
                    <td rowspan="2"
                        style="width: 42.6pt;border-top: none;border-bottom: 1pt double black;border-right: 1pt double black;background: rgb(179, 217, 179);padding: 0cm;height: 20.1pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:2.45pt;margin-right:  7.35pt;margin-bottom:.0001pt;margin-left:8.7pt;text-align:  center;text-indent:.1pt;'>
                            <span style="font-size:11px;color:black;">GENITAL MASC.</span></p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 63.85pt;border-top: none;border-bottom: 1pt double black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 10.45pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.05pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.1pt;line-height:9.45pt;'>
                            <span style="font-size:12px;color:black;">Eyaculaci&oacute;n <input type="checkbox"
                                    name="interro_genital_masc_eyaculacion"></span></p>
                    </td>
                    <td
                        style="width: 78.8pt;border-top: none;border-bottom: 1pt double black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 10.45pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.05pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:3.65pt;line-height:9.45pt;'>
                            <span style="font-size:12px;color:black;">Escurrimiento <input type="checkbox"
                                    name="interro_genital_masc_escurrimiento"></span></p>
                    </td>
                </tr>
            </tbody>
        </table>
        <div style='margin:0cm;font-size:15px;font-family:"Times New Roman",serif;'>
            <ol style="margin-bottom:0cm;list-style-type: undefined;">
                <li style='margin:0cm;font-size:15px;font-family:"Times New Roman",serif;'><strong><span
                            style="font-size:13px;">EXPLORACION FISICA.</span></strong></li>
            </ol>
        </div>
        <p style='margin:0cm;font-size:19px;font-family:"Times New Roman",serif;font-weight:bold;margin-top:.55pt;'>
            <span style='font-size:13px;font-family:"Arial",sans-serif;'><br></span></p>
        <table style="margin-left: 8.7pt;border-collapse:collapse;border:none;  width: 98%;">
            <tbody>
                <tr>
                    <td colspan="2"
                        style="width: 81.55pt;border-top: 1pt double black;border-left: 1pt double black;border-bottom: none;border-right: 1pt solid black;padding: 0cm;height: 11.45pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:2.95pt;line-height:2pt;'>
                            <span style='font-size:11px;font-family:"Times New Roman",serif;'><br> <br> <br>
                                <br></span><strong><span
                                    style='font-size:13px;font-family:"Arial",sans-serif;'>PESO</span></strong></p>
                    </td>
                    <td
                        style="width: 63.75pt;border-top: 1pt double black;border-bottom: none;border-right: 1pt solid black;padding: 0cm;height: 11.45pt;vertical-align: center;">
                        <input type="text" name="exp_peso" style="width: 93%">
                    </td>
                    <td
                        style="width: 85.15pt;border-top: 1pt double black;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 11.45pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.5pt;line-height:2pt;'>
                            <span style='font-size:11px;font-family:"Times New Roman",serif;'><br> <br> <br>
                                <br></span><strong><span
                                    style='font-size:13px;font-family:"Arial",sans-serif;'>ESTATURA</span></strong></p>
                    </td>
                    <td
                        style="width: 63.9pt;border-top: 1pt double black;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 11.45pt;vertical-align: center;">
                        <input type="text" name="exp_estatura" style="width: 93%">
                    </td>
                    <td
                        style="width: 63.75pt;border-top: 1pt double black;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 11.45pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.3pt;line-height:2pt;'>
                            <span style='font-size:11px;font-family:"Times New Roman",serif;'><br> <br> <br>
                                <br></span><strong><span
                                    style='font-size:13px;font-family:"Arial",sans-serif;'>T/A</span></strong></p>
                    </td>
                    <td colspan="2"
                        style="width: 70.95pt;border-top: 1pt double black;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 11.45pt;vertical-align: center;">
                        <input type="text" name="exp_ta" style="width: 93%">
                    </td>
                    <td colspan="2"
                        style="width: 63.7pt;border-top: 1pt double black;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 11.45pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:3.25pt;line-height:2pt;'>
                            <span style='font-size:11px;font-family:"Times New Roman",serif;'><br> <br> <br>
                                <br></span><strong><span
                                    style='font-size:13px;font-family:"Arial",sans-serif;'>PULSO</span></strong></p>
                    </td>
                    <td colspan="2"
                        style="width: 63.8pt;border-top: 1pt double black;border-bottom: 1pt solid black;border-right: 1pt double black;padding: 0cm;height: 11.45pt;vertical-align: center;">
                        <input type="text" name="exp_pulso" style="width: 93%">
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 18.8pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 10.4pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style='font-size:9px;font-family:"Times New Roman",serif;'><br></span></p>
                    </td>
                    <td
                        style="width: 62.75pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 10.4pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.05pt;margin-right:  4.8pt;margin-bottom:.0001pt;margin-left:4.3pt;text-align:  center;line-height:9.35pt;'>
                            <span style="font-size:12px;color:black;">Cara <input type="checkbox" name="expl_fisic_cara"></span></p>
                    </td>
                    <td
                        style="width: 63.75pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 10.4pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.05pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:17.2pt;line-height:9.35pt;'>
                            <span style="font-size:12px;color:black;">Pupilas  <input type="checkbox" name="expl_fisic_pupilas"></span></p>
                    </td>
                    <td colspan="4" rowspan="2"
                        style="width: 255.05pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt double black;padding: 0cm;height: 10.4pt;vertical-align: top;">
                        <textarea name="expl_fisic_cabeza_desc1" id="" ></textarea>
                    </td>
                    <td colspan="2"
                        style="width: 64.1pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 10.4pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.05pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:19.95pt;line-height:9.35pt;'>
                            <span style="font-size:12px;color:black;">forma  <input type="checkbox" name="expl_fisic_forma"></span></p>
                    </td>
                    <td colspan="2"
                        style="width: 63.55pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 10.4pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.05pt;margin-right:  20.15pt;margin-bottom:.0001pt;margin-left:20.8pt;text-align:center;line-height:9.35pt;'>
                            <span style="font-size:12px;color:black;">dolor  <input type="checkbox" name="expl_fisic_dolor"></span></p>
                    </td>
                    <td rowspan="4"
                        style="width: 28.55pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt double black;padding: 0cm;height: 10.4pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.1pt;'>
                            <strong><span style='font-size:17px;font-family:"Arial",sans-serif;'><br></span></strong>
                        </p>
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.05pt;margin-right:2.2pt;margin-bottom:.0001pt;margin-left:3.9pt;text-indent:1.65pt;'>
                            <span style="font-size:13px;">TORAX</span></p>
                    </td>
                </tr>
                <tr>
                    <td rowspan="5"
                        style="width: 18.8pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 10.25pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:4.45pt;margin-right:6.75pt;margin-bottom:.0001pt;margin-left:6.1pt;text-align:justify;'>
                            <strong><span
                                    style='font-size:11px;font-family:"Arial",sans-serif;color:black;'>C<br>A<br>B<br>E<br>Z<br>A</span></strong>
                        </p>
                    </td>
                    <td
                        style="width: 62.75pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 10.25pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:0cm;margin-right:4.8pt;margin-bottom:.0001pt;margin-left:4.3pt;text-align:center;line-height:9.3pt;'>
                            <span style="font-size:12px;color:black;">Exoftalmos  <input type="checkbox" name="expl_fisic_exoftalmo"></span></p>
                    </td>
                    <td
                        style="width: 63.75pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 10.25pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:15.75pt;line-height:9.3pt;'>
                            <span style="font-size:12px;color:black;">Pr&oacute;tesis  <input type="checkbox" name="expl_fisic_protesis"></span></p>
                    </td>
                    <td colspan="2"
                        style="width: 64.1pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 10.25pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:11.15pt;line-height:9.3pt;'>
                            <span style="font-size:12px;color:black;">M&oacute;v. Res.  <input type="checkbox" name="expl_fisic_movRes"></span></p>
                    </td>
                    <td colspan="2"
                        style="width: 63.55pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 10.25pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:0cm;margin-right:20.15pt;margin-bottom:.0001pt;margin-left:20.75pt;text-align:center;line-height:9.3pt;'>
                            <span style="font-size:12px;color:black;">&aacute;pex  <input type="checkbox" name="expl_fisic_apex"></span></p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 62.75pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 10.4pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:0cm;margin-right:4.8pt;margin-bottom:.0001pt;margin-left:4.25pt;text-align:center;line-height:9.4pt;'>
                            <span style="font-size:12px;color:black;">Cornea  <input type="checkbox" name="expl_fisic_cornea"></span></p>
                    </td>
                    <td
                        style="width: 63.75pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 10.4pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:10.75pt;line-height:9.4pt;'>
                            <span style="font-size:12px;color:black;">Am&iacute;gdalas  <input type="checkbox" name="expl_fisic_amigdalas"></span></p>
                    </td>
                    <td colspan="4" rowspan="2"
                        style="width: 255.05pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt double black;padding: 0cm;height: 10.4pt;vertical-align: top;">
                        <textarea name="expl_fisic_cabeza_desc2" ></textarea>
                    </td>
                    <td colspan="2"
                        style="width: 64.1pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 10.4pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:11.75pt;line-height:9.4pt;'>
                            <span style="font-size:12px;color:black;">sonoridad <input type="checkbox" name="expl_fisic_sonoridad"></span></p>
                    </td>
                    <td colspan="2"
                        style="width: 63.55pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 10.4pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:19.2pt;line-height:9.4pt;'>
                            <span style="font-size:12px;color:black;">&aacute;rea c <input type="checkbox" name="expl_fisic_areac"></span></p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 62.75pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 20.65pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:5.1pt;margin-right:  4.8pt;margin-bottom:.0001pt;margin-left:4.2pt;text-align:  center;'>
                            <span style="font-size:12px;color:black;">Dientes <input type="checkbox" name="expl_fisic_dientes"></span></p>
                    </td>
                    <td
                        style="width: 63.75pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 20.65pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:5.1pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:12.75pt;'>
                            <span style="font-size:12px;color:black;">P&aacute;rpados <input type="checkbox" name="expl_fisic_parpados"></span></p>
                    </td>
                    <td colspan="2"
                        style="width: 64.1pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 20.65pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:0cm;margin-right:13.1pt;margin-bottom:.0001pt;margin-left:13.95pt;text-indent:6.45pt;line-height:  10.3pt;'>
                            <span style="font-size:12px;color:black;">gland mamaria <input type="checkbox" name="expl_fisic_gland_mamaria"></span></p>
                    </td>
                    <td colspan="2"
                        style="width: 63.55pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 20.65pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:5.1pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:10.7pt;'>
                            <span style="font-size:12px;color:black;">tonos card <input type="checkbox" name="expl_fisic_tonos_card"></span></p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 62.75pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 10.4pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:0cm;margin-right:4.8pt;margin-bottom:.0001pt;margin-left:4.25pt;text-align:center;line-height:9.4pt;'>
                            <span style="font-size:12px;color:black;">Lengua <input type="checkbox" name="expl_fisic_lengua"></span></p>
                    </td>
                    <td
                        style="width: 63.75pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 10.4pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:8.45pt;line-height:9.4pt;'>
                            <span style="font-size:12px;color:black;">Conjuntivas <input type="checkbox" name="expl_fisic_conjuntivas"></span></p>
                    </td>
                    <td colspan="4" rowspan="2"
                        style="width: 255.05pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt double black;padding: 0cm;height: 10.4pt;vertical-align: top;">
                        <textarea name="expl_fisic_cabeza_desc3"></textarea>
                    </td>
                    <td colspan="2"
                        style="width: 64.1pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 10.4pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:6.25pt;line-height:9.4pt;'>
                            <span style="font-size:12px;color:black;">Ruidos resp <input type="checkbox" name="expl_fisic_ruidos_resp"></span></p>
                    </td>
                    <td colspan="2"
                        style="width: 63.55pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 10.4pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:4.2pt;line-height:9.4pt;'>
                            <span style="font-size:12px;color:black;">ruidos agrega <input type="checkbox" name="expl_fisic_ruidos_agrega"></span></p>
                    </td>
                    <td rowspan="8"
                        style="width: 28.55pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt double black;background: rgb(179, 217, 179);padding: 0cm;height: 10.4pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><strong><span
                                    style='font-family:"Arial",sans-serif;'><br></span></strong></p>
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.55pt;'>
                            <strong><span style='font-size:14px;font-family:"Arial",sans-serif;'><br></span></strong>
                        </p>
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:5.85pt;'><span
                                style="font-size:13px;color:black;">ABDOMEN</span></p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 62.75pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 10.25pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:0cm;margin-right:4.8pt;margin-bottom:.0001pt;margin-left:4.25pt;text-align:center;line-height:9.3pt;'>
                            <span style="font-size:12px;color:black;">Ictericia <input type="checkbox" name="expl_fisic_ictericia"></span></p>
                    </td>
                    <td
                        style="width: 63.75pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 10.25pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:15.75pt;line-height:9.3pt;'>
                            <span style="font-size:12px;color:black;">Reflejos <input type="checkbox" name="expl_fisic_reflejos"></span></p>
                    </td>
                    <td colspan="2"
                        style="width: 64.1pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 10.25pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:19.95pt;line-height:9.3pt;'>
                            <span style="font-size:12px;color:black;">forma <input type="checkbox" name="expl_fisic_forma4"></span></p>
                    </td>
                    <td colspan="2"
                        style="width: 63.55pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 10.25pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:0cm;margin-right:20.15pt;margin-bottom:.0001pt;margin-left:20.7pt;text-align:center;line-height:9.3pt;'>
                            <span style="font-size:12px;color:black;">baso <input type="checkbox" name="expl_fisic_baso"></span></p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 18.8pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 10.25pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style='font-size:9px;font-family:"Times New Roman",serif;'><br></span></p>
                    </td>
                    <td
                        style="width: 62.75pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 10.25pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:0cm;margin-right:4.8pt;margin-bottom:.0001pt;margin-left:4.25pt;text-align:center;line-height:9.3pt;'>
                            <span style="font-size:12px;color:black;">Movilidad <input type="checkbox" name="expl_fisic_movilidad"></span></p>
                    </td>
                    <td
                        style="width: 63.75pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 10.25pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:18.3pt;line-height:9.3pt;'>
                            <span style="font-size:12px;color:black;">Enc&iacute;as <input type="checkbox" name="expl_fisic_encias"></span></p>
                    </td>
                    <td colspan="4" rowspan="2"
                        style="width: 255.05pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt double black;padding: 0cm;height: 10.25pt;vertical-align: top;">
                        <textarea name="expl_fisic_cabeza_desc4"></textarea>
                    </td>
                    <td colspan="2"
                        style="width: 64.1pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 10.25pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:7.4pt;line-height:9.3pt;'>
                            <span style="font-size:12px;color:black;">Circ. colater <input type="checkbox" name="expl_fisic_circ_colater"></span></p>
                    </td>
                    <td colspan="2"
                        style="width: 63.55pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 10.25pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:16.95pt;line-height:9.3pt;'>
                            <span style="font-size:12px;color:black;">ri&ntilde;ones <input type="checkbox" name="expl_fisic_rinones"></span></p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 18.8pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 10.4pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style='font-size:9px;font-family:"Times New Roman",serif;'><br></span></p>
                    </td>
                    <td
                        style="width: 62.75pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 10.4pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.05pt;margin-right:  4.8pt;margin-bottom:.0001pt;margin-left:4.35pt;text-align:  center;line-height:9.35pt;'>
                            <span style="font-size:12px;color:black;">Forma <input type="checkbox" name="expl_fisic_forma2"></span></p>
                    </td>
                    <td
                        style="width: 63.75pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 10.4pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.05pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:16.0pt;line-height:9.35pt;'>
                            <span style="font-size:12px;color:black;">Tiroides <input type="checkbox" name="expl_fisic_tiroides"></span></p>
                    </td>
                    <td colspan="2"
                        style="width: 64.1pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 10.4pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.05pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:19.95pt;line-height:9.35pt;'>
                            <span style="font-size:12px;color:black;">pared <input type="checkbox" name="expl_fisic_pared"></span></p>
                    </td>
                    <td colspan="2"
                        style="width: 63.55pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 10.4pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.05pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:11.2pt;line-height:9.35pt;'>
                            <span style="font-size:12px;color:black;">Vello P&uacute;b <input type="checkbox" name="expl_fisic_velloPub"></span></p>
                    </td>
                </tr>
                <tr>
                    <td rowspan="3"
                        style="width: 18.8pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 20.7pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:6.1pt;line-height:7.4pt;'>
                            <strong><span
                                    style='font-size:11px;font-family:"Arial",sans-serif;color:black;'>C</span></strong>
                        </p>
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:0cm;margin-right:3.95pt;margin-bottom:.0001pt;margin-left:4.05pt;text-indent:2.0pt;'>
                            <strong><span
                                    style='font-size:11px;font-family:"Arial",sans-serif;color:black;'>U<br>E</span></strong>
                        </p>
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:0cm;margin-right:3.95pt;margin-bottom:.0001pt;margin-left:5.85pt;text-indent:-1.8pt;line-height:  9.1pt;'>
                            <strong><span
                                    style='font-size:11px;font-family:"Arial",sans-serif;color:black;'>LL<br>O</span></strong>
                        </p>
                    </td>
                    <td
                        style="width: 62.75pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 20.7pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:5.1pt;margin-right:  4.8pt;margin-bottom:.0001pt;margin-left:4.35pt;text-align:  center;'>
                            <span style="font-size:12px;color:black;">Car&oacute;tidas <input type="checkbox" name="expl_fisic_carotidas"></span></p>
                    </td>
                    <td
                        style="width: 63.75pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 20.7pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:0cm;margin-right:12.45pt;margin-bottom:.0001pt;margin-left:13.75pt;text-indent:7.9pt;line-height:10.3pt;'>
                            <span style="font-size:12px;color:black;">Tono Muscular <input type="checkbox" name="expl_fisic_tonoMusc"></span></p>
                    </td>
                    <td colspan="4" rowspan="2"
                        style="width: 255.05pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt double black;padding: 0cm;height: 20.7pt;vertical-align: top;">
                         <textarea name="expl_fisic_cuello_desc1"></textarea>
                    </td>
                    <td colspan="2"
                        style="width: 64.1pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 20.7pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:5.1pt;margin-right:  20.45pt;margin-bottom:.0001pt;margin-left:20.4pt;text-align:center;'>
                            <span style="font-size:12px;color:black;">tono <input type="checkbox" name="expl_fisic_tono"></span></p>
                    </td>
                    <td colspan="2"
                        style="width: 63.55pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 20.7pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:5.1pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:4.7pt;'>
                            <span style="font-size:12px;color:black;">tumoraciones <input type="checkbox" name="expl_fisic_tumoraciones"></span></p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 62.75pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 10.3pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:0cm;margin-right:4.8pt;margin-bottom:.0001pt;margin-left:4.2pt;text-align:center;line-height:9.3pt;'>
                            <span style="font-size:12px;color:black;">Yugulares <input type="checkbox" name="expl_fisic_yogulares"></span></p>
                    </td>
                    <td
                        style="width: 63.75pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 10.3pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:21.3pt;line-height:9.3pt;'>
                            <span style="font-size:12px;color:black;">Dolor <input type="checkbox" name="expl_fisic_dolor2"></span></p>
                    </td>
                    <td colspan="2"
                        style="width: 64.1pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 10.3pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:16.7pt;line-height:9.3pt;'>
                            <span style="font-size:12px;color:black;">hernias <input type="checkbox" name="expl_fisic_hernias"></span></p>
                    </td>
                    <td colspan="2"
                        style="width: 63.55pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 10.3pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:8.2pt;line-height:9.3pt;'>
                            <span style="font-size:12px;color:black;">meteorismo <input type="checkbox" name="expl_fisic_meteorismo"></span></p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 62.75pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 10.25pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:0cm;margin-right:4.8pt;margin-bottom:.0001pt;margin-left:4.2pt;text-align:center;line-height:9.3pt;'>
                            <span style="font-size:12px;color:black;">Ganglios <input type="checkbox" name="expl_fisic_ganglios"></span></p>
                    </td>
                    <td
                        style="width: 63.75pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 10.25pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style='font-size:9px;font-family:"Times New Roman",serif;'><br></span></p>
                    </td>
                    <td colspan="4" rowspan="2"
                        style="width: 255.05pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt double black;padding: 0cm;height: 10.25pt;vertical-align: top;">
                        <textarea name="expl_fisic_cuello_desc2"></textarea>
                    </td>
                    <td colspan="2"
                        style="width: 64.1pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 10.25pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:0cm;margin-right:20.45pt;margin-bottom:.0001pt;margin-left:20.55pt;text-align:center;line-height:9.3pt;'>
                            <span style="font-size:12px;color:black;">dolor <input type="checkbox" name="expl_fisic_dolor4"></span></p>
                    </td>
                    <td colspan="2"
                        style="width: 63.55pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 10.25pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:19.2pt;line-height:9.3pt;'>
                            <span style="font-size:12px;color:black;">ascitis <input type="checkbox" name="expl_fisic_ascitis"></span></p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 18.8pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 8.75pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style='font-size:7px;font-family:"Times New Roman",serif;'><br></span></p>
                    </td>
                    <td
                        style="width: 62.75pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 8.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:0cm;margin-right:4.8pt;margin-bottom:.0001pt;margin-left:4.25pt;text-align:center;line-height:7.75pt;'>
                            <span style="font-size:12px;color:black;">Movilidad <input type="checkbox" name="expl_fisic_movilidad4"></span></p>
                    </td>
                    <td
                        style="width: 63.75pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 8.75pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style='font-size:7px;font-family:"Times New Roman",serif;'><br></span></p>
                    </td>
                    <td colspan="2"
                        style="width: 64.1pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 8.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:17.8pt;line-height:7.75pt;'>
                            <span style="font-size:12px;color:black;">h&iacute;gado <input type="checkbox" name="expl_fisic_higado"></span></p>
                    </td>
                    <td colspan="2"
                        style="width: 63.55pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 8.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:7.0pt;line-height:7.75pt;'>
                            <span style="font-size:12px;color:black;">adenopat&iacute;as <input type="checkbox" name="expl_fisic_adenopatias"></span></p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 18.8pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 20.1pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style='font-size:12px;font-family:"Times New Roman",serif;'><br></span></p>
                    </td>
                    <td
                        style="width: 62.75pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 20.1pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:0cm;margin-right:14.7pt;margin-bottom:.0001pt;margin-left:15.0pt;text-indent:2.85pt;line-height:  10.3pt;'>
                            <span style="font-size:12px;color:black;">Forma Hombro <input type="checkbox" name="expl_fisic_formaHombro"></span></p>
                    </td>
                    <td
                        style="width: 63.75pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 20.1pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:5.1pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:13.0pt;'>
                            <span style="font-size:12px;color:black;">Movilidad <input type="checkbox" name="expl_fisic_movilidad2"></span></p>
                    </td>
                    <td colspan="4" rowspan="2"
                        style="width: 255.05pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt double black;padding: 0cm;height: 20.1pt;vertical-align: top;">
                        <textarea name="expl_fisic_cuello_desc3"></textarea>
                    </td>
                    <td colspan="2"
                        style="width: 64.1pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 20.1pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:5.1pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:10.2pt;'>
                            <span style="font-size:12px;color:black;">desviaci&oacute;n <input type="checkbox" name="expl_fisic_desviaciones"></span></p>
                    </td>
                    <td colspan="2"
                        style="width: 63.55pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 20.1pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:5.1pt;margin-right:  20.15pt;margin-bottom:.0001pt;margin-left:20.8pt;text-align:center;'>
                            <span style="font-size:12px;color:black;">dolor <input type="checkbox" name="expl_fisic_dolor3"></span></p>
                    </td>
                    <td rowspan="5"
                        style="width: 28.55pt;border-top: none;border-bottom: 1pt double black;border-right: 1pt double black;padding: 0cm;height: 20.1pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:0cm;margin-right:3.2pt;margin-bottom:.0001pt;margin-left:4.0pt;text-align:center;line-height:11.45pt;'>
                            <span style="font-size:13px;">CO-</span></p>
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:0cm;margin-right:3.15pt;margin-bottom:.0001pt;margin-left:3.9pt;text-align:center;text-indent:.25pt;'>
                            <span style="font-size:13px;">LU-<br>MN<br>A<br>VER</span></p>
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:0cm;margin-right:3.05pt;margin-bottom:.0001pt;margin-left:3.9pt;text-align:center;text-indent:.15pt;line-height:11.5pt;'>
                            <span style="font-size:13px;">-TE-<br>BRA<br>L</span></p>
                    </td>
                </tr>
                <tr>
                    <td rowspan="4"
                        style="width: 18.8pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 9.85pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:5.55pt;margin-right:5.2pt;margin-bottom:.0001pt;margin-left:6.1pt;text-align:justify;text-indent:-1.6pt;'>
                            <strong><span
                                    style='font-size:11px;font-family:"Arial",sans-serif;color:black;'>M.<br>S<br>U<br>P</span></strong>
                        </p>
                    </td>
                    <td
                        style="width: 62.75pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 9.85pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.05pt;margin-right:  4.8pt;margin-bottom:.0001pt;margin-left:4.2pt;text-align:  center;line-height:8.85pt;'>
                            <span style="font-size:12px;color:black;">Axilas <input type="checkbox" name="expl_fisic_axilas"></span></p>
                    </td>
                    <td
                        style="width: 63.75pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 9.85pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.05pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:4.0pt;line-height:8.85pt;'>
                            <span style="font-size:12px;color:black;">Articulaciones <input type="checkbox" name="expl_fisic_articulaciones"></span></p>
                    </td>
                    <td colspan="2" rowspan="4"
                        style="width: 64.1pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 9.85pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><strong><span
                                    style='font-size:13px;font-family:"Arial",sans-serif;'><br></span></strong></p>
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><strong><span
                                    style='font-size:13px;font-family:"Arial",sans-serif;'><br></span></strong></p>
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:6.8pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:12.45pt;'>
                            <span style="font-size:12px;color:black;">movilidad <input type="checkbox" name="expl_fisic_movilidad3"></span></p>
                    </td>
                    <td colspan="2" rowspan="4"
                        style="width: 63.55pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt solid black;background: rgb(204, 255, 204);padding: 0cm;height: 9.85pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><strong><span
                                    style='font-size:13px;font-family:"Arial",sans-serif;'><br></span></strong></p>
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><strong><span
                                    style='font-size:13px;font-family:"Arial",sans-serif;'><br></span></strong></p>
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:6.8pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:10.45pt;'>
                            <span style="font-size:12px;color:black;">Tono M&uacute;s <input type="checkbox" name="expl_fisic_tonoMus"></span></p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 62.75pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 10.95pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.5pt;margin-right:  4.75pt;margin-bottom:.0001pt;margin-left:4.35pt;text-align:  center;line-height:9.45pt;'>
                            <span style="font-size:12px;color:black;">Vello <input type="checkbox" name="expl_fisic_vello"></span></p>
                    </td>
                    <td
                        style="width: 63.75pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 10.95pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.5pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:16.5pt;line-height:9.45pt;'>
                            <span style="font-size:12px;color:black;">Arterias <input type="checkbox" name="expl_fisic_arterias"></span></p>
                    </td>
                    <td colspan="4" rowspan="2"
                        style="width: 255.05pt;border-top: none;border-bottom: 1pt solid black;border-right: 1pt double black;padding: 0cm;height: 10.95pt;vertical-align: top;">
                         <textarea name="expl_fisc_musup_desc1"></textarea>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 62.75pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 9.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:0cm;margin-right:4.8pt;margin-bottom:.0001pt;margin-left:4.2pt;text-align:center;line-height:8.8pt;'>
                            <span style="font-size:12px;color:black;">Ganglios <input type="checkbox" name="expl_fisic_ganglios2"></span></p>
                    </td>
                    <td
                        style="width: 63.75pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 9.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:18.5pt;line-height:8.8pt;'>
                            <span style="font-size:12px;color:black;">Manos <input type="checkbox" name="expl_fisic_manos"></span></p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 62.75pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 34.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.4pt;margin-right:  4.8pt;margin-bottom:.0001pt;margin-left:4.35pt;text-align:  center;'>
                            <span style="font-size:12px;color:black;">Temperatura <input type="checkbox" name="expl_fisic_temperatura"></span></p>
                    </td>
                    <td
                        style="width: 63.75pt;border: none;background: rgb(204, 255, 204);padding: 0cm;height: 34.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.4pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:9.3pt;'>
                            <span style="font-size:12px;color:black;">Sudoraci&oacute;n <input type="checkbox" name="expl_fisic_sudoracion"></span></p>
                    </td>
                    <td colspan="4"
                        style="width: 255.05pt;border-top: none;border-bottom: 1pt double black;border-right: 1pt double black;padding: 0cm;height: 34.75pt;vertical-align: top;">
                        <textarea name="expl_fisic_msup_desc2"></textarea>
                    </td>
                </tr>
                <tr>
                    <td style="border:none;"><br></td>
                    <td style="border:none;"><br></td>
                    <td style="border:none;"><br></td>
                    <td style="border:none;"><br></td>
                    <td style="border:none;"><br></td>
                    <td style="border:none;"><br></td>
                    <td style="border:none;"><br></td>
                    <td style="border:none;"><br></td>
                    <td style="border:none;"><br></td>
                    <td style="border:none;"><br></td>
                    <td style="border:none;"><br></td>
                    <td style="border:none;"><br></td>
                </tr>
            </tbody>
        </table> 

        <p><span style='font-size:1px;font-family:"Times New Roman",serif;'><br><br></span></p>
        <h1
            style='margin-top:3.25pt;margin-right:0cm;margin-bottom:0cm;margin-left:11.3pt;font-size:27px;font-family:"Times New Roman",serif;'>
            <span style='font-family:"Arial",sans-serif;' id="labbn">
                Laboratorio 
                <input type="button" class="btn btn-primary" id="addLab" value="+" onclick="crear()" disabled/> 
                <input type="button" class="btn btn-primary" style="display:none;" id="saveLab" value="Guardar" onclick="add_laboratorio()" /> 
                <input type="button" class="btn btn-danger" style="display:none;" value="Cancelar" id="borarCeldas" onclick="borrarCeldas()" />  
            </span>
        </h1>
        <p style='margin:0cm;font-size:19px;font-family:"Times New Roman",serif;font-weight:bold;'><span
                style='font-size:13px;font-family:"Arial",sans-serif;'><br></span></p> 
        
        <table id="addLaboratorio" style="margin-left: 6.15pt;border-collapse:collapse;border:none; ">
            <tbody>
                <tr>
                    <td
                        style="width: 102.15pt;border: 1pt solid black;padding: 0cm;height: 27.7pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.05pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:22.15pt;'>
                            <strong><span
                                    style='font-size:19px;font-family:"Arial",sans-serif;color:red;'>FECHAS</span></strong>
                        </p>
                    </td>
                    
                
                </tr>
                <tr class="rm">
                    <td colspan="2" style="width: 193.85pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 21.8pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:5.35pt;line-height:10.3pt;'>
                            <strong>
                                <u>
                                    <span style='font-size: 17px;font-family:"Arial",sans-serif;color:#339966;line-height: 28px;/* text-decoration: none; */'>BIOMETRIA
                                        HEMATICA
                                    </span>
                                </u>
                            </strong>
                        </p>
                    </td>
                    
                </tr>
    
                <tr>
                    <td
                        style="width: 102.15pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:5.35pt;line-height:12.75pt;'>
                            <strong><span
                                    style='font-size:16px;font-family:"Arial",sans-serif;'>HEMOGLOBINA</span></strong>
                        </p>
                    </td>
                    
                
                </tr>
                <tr>
                    <td
                        style="width: 102.15pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:5.35pt;line-height:12.75pt;'>
                            <strong><span
                                    style='font-size:16px;font-family:"Arial",sans-serif;'>HEMATOCRITO</span></strong>
                        </p>
                    </td>
    
                    
                    
                </tr>
                <tr>
                    <td
                        style="width: 102.15pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:5.35pt;line-height:12.75pt;'>
                            <strong><span
                                    style='font-size:16px;font-family:"Arial",sans-serif;'>LEUCOCITO</span></strong>
                        </p>
                    </td>
    
                    
                    
                </tr>
                <tr>
                    <td
                        style="width: 102.15pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:5.35pt;line-height:12.75pt;'>
                            <strong><span
                                    style='font-size:16px;font-family:"Arial",sans-serif;'>PLAQUETAS</span></strong>
                        </p>
                    </td>
                    
                
                </tr>
    
                <tr class="rm">
                    <td colspan="2" style="width: 193.85pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 13.85pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.1pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.35pt;line-height:12.75pt;'>
                            <span style='font-size: 17px;font-family:"Arial",sans-serif;color:#339966;line-height: 28px;'>QUIMICA SANGUINEA</span>
                        </p>
                    </td>
                    
                </tr>
    
                <tr>
                    <td
                        style="width: 102.15pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:5.35pt;line-height:12.75pt;'>
                            <span style="font-size:16px;">Glucosa Serica</span></p>
                    </td>
                    
                </tr>
                <tr>
                    <td
                        style="width: 102.15pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:5.35pt;line-height:12.75pt;'>
                            <span style="font-size:16px;">Urea Serica</span></p>
                    </td>
                    
    
                </tr>
                <tr>
                    <td
                        style="width: 102.15pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:5.35pt;line-height:12.75pt;'>
                            <span style="font-size:16px;">Creatinina</span></p>
                    </td>
                    
    
                </tr>
                <tr>
                    <td
                        style="width: 102.15pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 13.8pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.05pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.35pt;line-height:12.75pt;'>
                            <span style="font-size:16px;">Acido Urico Serico</span></p>
                    </td>
                    
    
                </tr>
                <tr>
                    <td
                        style="width: 102.15pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:5.35pt;line-height:12.75pt;'>
                            <span style="font-size:16px;">Colesterol total</span></p>
                    </td>
                
                </tr>
                <tr>
                    <td
                        style="width: 102.15pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:5.35pt;line-height:12.75pt;'>
                            <span style="font-size:16px;">Trigliceridos</span></p>
                    </td> 
    
                </tr>
                <tr>
                    <td
                        style="width: 102.15pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 13.85pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:5.35pt;line-height:11.45pt;'>
                            <strong><span style='font-size:13px;font-family:"Arial",sans-serif;'>HDL</span></strong></p>
                    </td> 
                    
                </tr>
                <tr>
                    <td
                        style="width: 102.15pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:5.35pt;line-height:11.45pt;'>
                            <strong><span style='font-size:13px;font-family:"Arial",sans-serif;'>LDL</span></strong></p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 102.15pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:5.35pt;line-height:11.45pt;'>
                            <strong><span style='font-size:13px;font-family:"Arial",sans-serif;'>VLDL</span></strong>
                        </p>
                    </td>
                </tr>
    
                <tr class="rm">
                    <td colspan="2" style="width: 193.85pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 11.5pt;vertical-align: top;">
                        <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:5.35pt;line-height:10.5pt;'>
                            <span style='font-size: 17px;font-family:"Arial",sans-serif;color:#339966;line-height: 28px;''>EXAMEN GENERAL DE ORINA</span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 102.15pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:5.35pt;line-height:12.75pt;'>
                            <span style="font-size:16px;">Color</span></p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 102.15pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:5.35pt;line-height:12.75pt;'>
                            <span style="font-size:16px;">Aspecto</span></p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 102.15pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 13.9pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:.1pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.35pt;line-height:12.75pt;'>
                            <span style="font-size:16px;">Densidad</span></p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 102.15pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:5.35pt;line-height:12.75pt;'>
                            <span style="font-size:16px;">Ph</span></p>
                    </td> 
                </tr>
                <tr>
                    <td
                        style="width: 102.15pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:5.35pt;line-height:12.75pt;'>
                            <span style="font-size:16px;">Glucosa</span></p>
                    </td> 
                </tr>
                <tr>
                    <td
                        style="width: 102.15pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:5.35pt;line-height:12.75pt;'>
                            <span style="font-size:16px;">Proteinas</span></p>
                    </td> 
                </tr>
                <tr>
                    <td
                        style="width: 102.15pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:5.35pt;line-height:12.75pt;'>
                            <span style="font-size:16px;">Sangre</span></p>
                    </td> 
                </tr>
                <tr>
                    <td
                        style="width: 102.15pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:5.35pt;line-height:12.75pt;'>
                            <span style="font-size:16px;">Cuerpos cetonicos</span></p>
                    </td> 
                </tr>
                <tr>
                    <td
                        style="width: 102.15pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:5.35pt;line-height:12.75pt;'>
                            <span style="font-size:16px;">Urobilinogeno</span></p>
                    </td> 
                </tr>
                <tr>
                    <td
                        style="width: 102.15pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 13.75pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:5.35pt;line-height:12.75pt;'>
                            <span style="font-size:16px;">Nitritos</span></p>
                    </td> 
                </tr>
                <tr>
                    <td
                        style="width: 102.15pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 27.65pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:0cm;margin-right:30.55pt;margin-bottom:.0001pt;margin-left:5.35pt;line-height:13.5pt;'>
                            <span style="font-size:16px;">Esterasa Leucocitaria</span></p>
                    </td> 
                </tr>
            </tbody>
        </table>

        


        <p style='margin:0cm;font-size:19px;font-family:"Times New Roman",serif;font-weight:bold;'><span
                style='font-size:13px;font-family:"Arial",sans-serif;'><br></span></p>
        <p style='margin:0cm;font-size:19px;font-family:"Times New Roman",serif;font-weight:bold;'><span
                style='font-size:13px;font-family:"Arial",sans-serif;'><br></span></p>
                <ol style="margin-bottom:0cm;list-style-type: undefined;margin-left:10.3px;">
                <li style='margin:0cm;font-size:15px;font-family:"Times New Roman",serif;'><strong><span
                            style="font-size:13px;">NOTAS DE EVOLUCIÓN</span></strong></li>
            </ol>
            <div id="notas" style="padding: 2%;"></div>
        <p style='margin:0cm;font-size:19px;font-family:"Times New Roman",serif;font-weight:bold;margin-top:.4pt;'><span
                style='font-size:13px;font-family:"Arial",sans-serif;'><br></span></p>
        <table style="margin-left: 8.6pt;border-collapse:collapse;border:none;  width: 98%;">
            <tbody>
                <tr>
                    <td
                        style="width: 556.8pt;border-width: 1pt;border-style: double double solid;border-color: black;border-image: initial;padding: 0cm;height: 19.9pt;vertical-align: top;">
                        <p
                            style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:6.15pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.3pt;line-height:12.75pt;'>
                            <strong><span style='font-size:16px;font-family:"Arial",sans-serif;'>DX:</span></strong></p>
                    </td>
                </tr>
                <tr>
                    <td
                        style="width: 556.8pt;border-top: none;border-left: 1pt double black;border-bottom: 1pt solid black;border-right: 1pt double black;padding: 0cm;height: 19.75pt;vertical-align: top;">
                        {{-- <input type="text" name="tx_1" style="width:99%;"> --}}
                        <textarea name="tx_1" id="tx_1" cols="30" rows="10"></textarea>
                    </td>
                </tr> 
            </tbody>
        </table>
        <p style='margin:0cm;font-size:19px;font-family:"Times New Roman",serif;font-weight:bold;margin-top:.3pt;'><span
                style='font-size:8px;font-family:"Arial",sans-serif;'><br></span></p>
        <div style='margin:0cm;font-size:15px;font-family:"Times New Roman",serif;'>
            <ol style="margin-bottom:0cm;list-style-type: undefined;margin-left:37.3px;">
                <li style='margin:0cm;font-size:15px;font-family:"Times New Roman",serif;'><strong><span
                            style="font-size:13px;">TRATAMIENTO</span></strong></li>
            </ol>
        </div>
        <table style="margin-left: 8.6pt;border-collapse:collapse;border:none;  width: 98%;">
            <tbody>
                <tr>
                    <td
                        style="width: 556.8pt;border: 1pt double black;padding: 0cm;height: 19.85pt;vertical-align: top;">
                        <textarea name="tratamiento" id="tratamiento" cols="100" rows="10"></textarea>
                    </td>
                </tr>
            </tbody>
        </table><br><br>
        
        <input type="hidden" name="patient" id="id_paciente" />
        {{-- <input type="hidden" name="ident_fecha" value="{{date("YY-mm-dd")}}"> --}}
        <input type="submit" id="save" style="margin-top:20px; margin-left:12px;" class="btn btn-primary" value="Guardar"><br><br>
        <button type="button" class="btn btn-success" id="print">Imprimir</button>                   
    </form>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
</body>

<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>


<script>
    const id = atob("{{$_GET['id']}}");
    var patient = null;

    //Get de datos de paciente
    fetch(`/dataPatient/${id}`)
    .then(response => response.json()
        .then(resp => {
            console.log("his", resp['consultations']);
            Object.entries(resp['consultations']).forEach(([key, value]) =>{ 
                    console.log("simp", value);
                    if(value['symptom'] == null){
                        $("#notas").append('<li>'+ value['created_at'].substring(0,10) + ' -  Sin Sintomas </li>');
                    }else{
                        $("#notas").append('<li>'+ value['created_at'].substring(0,10) + ' - ' + value['symptom']+'</li>');
                    }
                    //document.getElementById("notas").append = value['symptom'] + '\n';
                });
            var diagnos = '';
            Object.entries(resp['consultations']).forEach(([key, value]) =>{ 
                console.log("diag", value['diagnostic']);
                if(value['diagnostic'] == null){
                    diagnos = diagnos + value['created_at'].substring(0,10) + ' - Sin Diagnostico \n';
                }
                else{
                    diagnos = diagnos + value['created_at'].substring(0,10) + ' - ' + value['diagnostic'] + '\n';
                }
                //$("#tx_1").append('<li>'+ value['created_at'].substring(0,10) + ' - ' + value['symptom']+'</li>');
            });

            var prescript = '';
            Object.entries(resp['consultations']).forEach(([key, value]) =>{ 
                console.log("diag", value['prescription']);
                if(value['prescription'] == null){
                    prescript = prescript + value['created_at'].substring(0,10) + ' -  sin receta \n';
                }else{
                    prescript = prescript + value['created_at'].substring(0,10) + ' - ' + value['prescription'] + '\n';
                }
               
                //$("#tx_1").append('<li>'+ value['created_at'].substring(0,10) + ' - ' + value['symptom']+'</li>');
            });

            
            
            document.getElementById("paciente").innerHTML = resp.paciente;
            document.getElementById("edad_paciente").innerHTML = `${resp.edad_paciente}`;
            document.getElementById("domicilio_paciente").innerHTML = resp.domicilio_paciente;
            document.getElementById("telefono_paciente").innerHTML = resp.telefono_paciente;
            document.getElementById("id_paciente").value = resp.id_paciente;
            document.getElementById("sexo").innerHTML = resp.sexo;
            document.getElementById("estado_civil").innerHTML = resp.civil;

            
            patient = resp.id_paciente;
            dataHistory(resp.id_paciente);
            dataLaboratory(resp.id_paciente);
            // const date = new Date();
            // const dateString = new Date(date.getTime() - (date.getTimezoneOffset() * 60000 )).toISOString().split("T")[0]; 
            // document.getElementById("fecha").innerHTML = dateString;
            setTimeout(() => {
                $('#tx_1').val(diagnos);
                $('#tratamiento').val(prescript);
                
            }, 1500);

            
           
        })
    );
    
    //Get de datos de historia clinica
    function dataHistory(id){
        fetch(`/dataHistory/${id}`)
            .then(response => response.json()
            .then(resp => {
               
                Object.entries(resp[0]).forEach(([key, value]) =>{ 
                    if(document.querySelector(`input[type='radio'][name='${key}']`) && value != null){ 
                        document.querySelector(`input[name='${key}'][value='${value}']`).checked = true;
                    }else if(document.querySelector(`input[type='checkbox'][name='${key}']`) && value != null){
                        document.querySelector(`input[name='${key}']`).checked = true;
                    }else if(document.querySelector(`input[type='text'][name='${key}']`)){
                        document.querySelector(`input[name='${key}']`).value = value;
                    }else if(document.querySelector(`textarea[name='${key}']`) && (value != null || value!='null') ){
                        document.querySelector(`textarea[name='${key}']`).value=value
                    }else if(key=='ident_fecha'){
                        document.getElementById("ident_fecha").value=value;
                    }
                });
            })
        );
    }

    // Get de datos de laboratorio
    function dataLaboratory(id){
        fetch(`/dataResultLab/${id}`)
            .then(response => response.json()
            .then( resp => { 
                insDataLaboratory(...resp);
            })
        );
    }


    // Crea los inputs
    const names = [];
    document.querySelectorAll("#addLaboratorio tr:not(.rm) td:first-child > p")
        .forEach(r =>(r.textContent!='') ? names.push(r.textContent.trim().split(' ').join('_').toLowerCase()) : '' );

    function crear() {
        document.querySelector('#save').disabled =true;
        document.querySelector('#saveLab').style.display="block";

       

        document.querySelectorAll("#addLaboratorio tr:not(.rm)").forEach((el,idx) => {
            const td = document.createElement('td');
           
                if(idx==0){
                    td.innerHTML = `<td><input type="date" id="${names[idx]}" name="${names[idx]}"></td>`;
                }else{
                    td.innerHTML = `<td><input type="text" id="${names[idx]}" name="${names[idx]}"></td>`;
                } 

                el.appendChild(td).classList.add("eliminarInput");
            
        }) 

        document.querySelector('#addLab').style.display="none";
        document.querySelector("#borarCeldas").style.display="block";
    }

    //Cancelar la creacion de los inputs
    function borrarCeldas(){
        document.querySelectorAll("#addLaboratorio tr .eliminarInput").forEach(r => r.remove());
        document.querySelector('#addLab').style.display="block";
        document.querySelector("#borarCeldas").style.display="none";
        document.querySelector("#saveLab").style.display="none";
        document.querySelector('#save').disabled =false;

    }

    //Insercion de datos a celdas 
    insDataLaboratory = (...data) => { 
        data.forEach((obj,ind) => {  
            document.querySelectorAll("#addLaboratorio tr:not(.rm)").forEach((el,idx) => { 
                const td = document.createElement('td');
                td.innerHTML = `<td>${obj[names[idx]] || ''}</td>`;
                el.appendChild(td).classList.add('labData','contorno');
                el.style.textAlign = "center"  
            })  
        })
        document.querySelector('#addLab').disabled =false; 
    }

    // Guardar informacion a la bd
    const  lab_dataInp = {}
    function add_laboratorio(){
        lab_dataInp['patient'] = patient;
        document.querySelectorAll("#addLaboratorio tr .eliminarInput").forEach((r,i) =>{
            lab_dataInp[names[i]] = document.getElementById(`${names[i]}`).value;
        });

        let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        fetch(`/saveResulLab`,{
            method: 'POST',
            headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
            "X-CSRF-Token": token
            },
            body: JSON.stringify(lab_dataInp)
        })
        .then(response => response.json()
            .then(resp => {
                if(resp.seRegistro){
                    document.querySelector('#saveLab').style.display="none";  
                    document.querySelector('#save').disabled =false;  
                    borrarCeldas();
                    document.querySelectorAll("#addLaboratorio tr .labData").forEach(r => r.remove());
                    dataLaboratory(patient);
                }
            })
        );
    }
    $("#print").click(function() {
        $( "#print" ).hide();
        $( "#save" ).hide();
        $( "#labbn" ).hide();
        
        window.print();
    });

</script>
</html>
