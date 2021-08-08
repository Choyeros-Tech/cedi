<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">    <link href="https://fonts.googleapis.com/css2?family=Pinyon+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/recetas.css">
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
                    <h3 style="font-size: 65px; font-weight: bold !important;">Dr. {{Auth::user()->name}}</h3>
                </div>
            </div>
            <div class="row">
                <div class="col col-md-4">
                    <p>CED. PROF: {{Auth::user()->ced}}</p>
                </div>
                <div class="col col-md-4">
                    <p>{{Auth::user()->school}}</p>
                </div>
                <div class="col col-md-4">
                    <p>REG. S.S.A {{Auth::user()->regssa}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col col-md-12 direccionTxt">
                    <p>CONSTITUCIÓN No. 718 ESQ. V. GÓMEZ FARIAS * COL. CENTRO * TEL. 612 122 7682 * LA PAZ, B.C.S</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col col-md-12 text-right mr-5">
                    <p>LA PAZ, BAJA CALIFORNIA SUR, A {{$day}} DE {{strtoupper($mes)}} DE {{$year}}</p>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <p class="rotate">DX: {{$consultations[0]->diagnostic}}</p>
        <div class="col col-md-12 ml-5 pl-3 recetaBody">
            <h1 class="textTitle mt-1">Rx:</h1>
            <div class="textprescription mitexto">{!! nl2br($consultations[0]->prescription) !!}</div><br><br><br><br><br><br><br><br><br><br>
            <p>NOMBRE: {{$consultations[0]->name}}</p>
            <div class="row">
                <div class="col-md-4">
                    <p class="smalltext"><small>Presente esta recenta en su proxima consulta</small></p>
                </div>
                <div class="col-md-4 offset-md-4">
                    <p class="text-center">___________________________________</p>
                    <p class="smalltext text-center">Firma</p>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col col-md-12 ml-5 mt-3 pl-3 text-center"  id="toolbarprint">
            <div class="btn-toolbar justify-content-center" role="toolbar" aria-label="Botones">
                <button type="button" class="disminuir btn btn-dark mr-1">Disminuir</button>
                <button type="button" class="aumentar btn btn-dark mr-1">Aumentar</button>
                <button type="button" class="restablecer btn btn-danger">Restablecer</button>
                <button class="btn btn-primary" id="print"> <i class="feather icon-printer f-36 text-c-purple"></i> Imprimir</button>
            </div>
        </div>

    </div>

    
</body>
<script src="loginassets/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
<script src="../assets/js/vendor-all.min.js"></script>
    <script src="../assets/js/plugins/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        $("#print").click(function () {
            $("#toolbarprint").hide();
            window.print();
             $("#toolbarprint").show();
        });

        function tamañoLetra() {
  size = $(".mitexto" ).css("font-size");
  size = parseInt(size, 10);
  $( ".tamaño-actual" ).text(size);
} 
 
// Obtengo el tamaño de letra inicial de 16px 
tamañoLetra();

    $(".disminuir").on("click", function () {
        if ((size - 2) >= 13) {
            $(".mitexto").css("font-size", "-=2");
            $(".tamaño-actual").text(size -= 1);
        }
    });

    // Función para aumentar el tamaño del texto (fuente) 
    $(".aumentar").on("click", function () {
        if ((size + 2) <= 47) {
            $(".mitexto").css("font-size", "+=2");
            $(".tamaño-actual").text(size += 1);
        }
    });

    // Función para restablecer el tamaño del texto (fuente) al tamaño inicial 
    $(".restablecer").on("click", function () {
        $(".mitexto").css("font-size", "initial");
        size = $(".mitexto").css("font-size");
        size = parseInt(size, 10);
        $(".tamaño-actual").text(size);
    });


    </script>
</html>