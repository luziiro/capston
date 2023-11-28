<?php
/*
Template Name: navidad
*/
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navidad</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <!-- estilo video de fondo -->
    <style>
        .row {
            max-width: 99%;
        }
        body, html {
            height: 100%;
            margin: 0;
        }

        .bg-video {
            max-width: 100%;
            position: relative;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            z-index: -1;
        }
    </style>

    <!-- seccion video de fondo -->
<!--
    <div class="col-md-12">
        <video autoplay muted loop class="bg-video">
            <source src="https://www.cnc.cl/wp-content/uploads/2023/11/Video-LOOP-slide-principal.mp4" type="video/mp4">
            Tu navegador no soporta videos HTML5.
        </video>
    </div>
-->

    <div class="col-md-12">
        <video autoplay muted loop class="bg-video">
            <source src="https://www.cnc.cl/wp-content/uploads/2023/11/Video-Slide-Principal-Navidad-23.mp4" type="video/mp4">
            Tu navegador no soporta videos HTML5.
        </video>
    </div>

    <!-- estilo texto sobre el video -->
<!--
    <style>
        .texto-sobre-video {
            position: absolute;
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10;
            text-align: center;
            width: 100%;
            color: white;
        }

        .texto-destacado {
            display: inline-block; 
            background-color: #ff8c00; 
            padding: 0 4px;
            border-radius: 2px; 
            transform: rotate(2deg);
            margin: 0 2px; 
        }

        .texto-destacado > span {
            display: inline-block; 
            transform: rotate(-2deg);
        }
    </style>
-->

    <!-- Texto sobre el video -->
<!--
    <div class="texto-sobre-video">
        <h1>¡Feliz <div class="texto-destacado"><span>Compra</span></div></h1>
        <h1><div class="texto-destacado"><span>Formal</span></div> para Todos!</h1>
        <p>UN CUENTO DE NAVIDAD DE LA CNC</p>
    </div>
-->

    <!-- css logos -->
    <style>
        .logo-1 {
            max-width: 6%;
            position: absolute;
            top: 4%;
            left: 42%;
        }
        .logo-2 {
            width: 9%;
            position: absolute;
            top: 4%;
            left: 50%;
        }
    </style>

    <!--logos cnc-->
    <img src="https://www.cnc.cl/wp-content/uploads/2023/11/Logotipo-CNC-blanco.png" class="logo-1" alt="Logo 1">
    <img src="https://www.cnc.cl/wp-content/uploads/2023/11/OCIS_Negativo_RGB.png" class="logo-2" alt="Logo 2">

    <!-- estilo fondo rojo -->
    <style>
        .bg-image-roja {
            position: relative;
            top: -6px;
            background-color: #0c1533;
            height: 115%;
            background-image: url('https://www.cnc.cl/wp-content/uploads/2023/11/Fondo-rojo.png');
            background-size: cover;
            background-position: center;
        }
        .texto-falta-poco > h1 {
            margin-top: 0;
            margin-bottom: 0;
            font-family: 'Abril Fatface';
            color: white;
            position: relative;
            top: 70px;
            left: 35%;
            font-weight: 900;
            font-size: 60px; 
        }
        .texto-falta-poco > p {
            position: relative;
            color: white;
            top: 80px;
            left: 35%;
            width: 67%;
            font-size: 24px;
        }
        .texto-falta-poco {
            position: relative;
            top: 0;
            left: 0;
        }
        .img-falta-poco {
            position: relative;
            top: 18px;
            left: 15%;
            width: 35%;
        }

        .texto-ladron > h1 {
            font-family: 'Abril Fatface';
            margin-bottom: -2%;
            color: white;
            position: relative;
            top: 5%;
            left: -5%;
            font-weight: 900;
            font-size: 60px; 
        }
        .texto-ladron > p {
            color: white;
            position: relative;
            top: 10%;
            left: 40%;
            max-width: 55%;
            font-size: 25px;
        }
        .texto-ladron {
            position: relative;
            text-align: right;
        }
        .img-ladron {
            position: relative;
            width: 35%;
            top: -10px;
        }
    </style>

    <!-- Sección imagen de fondo rojo -->
    <div class="bg-image-roja">
        <div class="row">
            <div class="col-md-6 img-falta-poco">
                <img data-aos="fade-right" src="https://www.cnc.cl/wp-content/uploads/2023/11/Escena-01-Falta-poco-para-la-Navidad.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 texto-falta-poco">
                <h1>Falta poco</h1>
                <h1>para la Navidad</h1>
                <p>Quedaba menos de un mes para el 24 de diciembre y  todos en el Polo Norte estaban listos para el gran día. 
                   El Viejito Pascuero ya había revisado cada una de las tareas necesarias para que esta fecha fuera un éxito. 
                   <strong>¡Solo quedaba pendiente la entrega de los regalos!</strong></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 texto-ladron">
                <h1>El plan del Ladrón</h1>
                <h1>de la Navidad </h1>
                <p>En vísperas de la entrega de los presentes navideños a los niños, el jefe del taller del Polo Norte, Nico el Duende,
                   le contó al Viejito Pascuero que Greg cambió todos los regalos por juguetes defectuosos y peligrosos.  
                   <strong>¡Quería culparlo de comprar en el comercio ilegal!</strong></p>
            </div>
            <div class="col-md-6 img-ladron">
                <img data-aos="fade-left" src="https://www.cnc.cl/wp-content/uploads/2023/11/Escena-02-El-plan-del-Ladron-de-la-Navidad.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>

    <!-- estilo fondo celeste -->
    <style>
        .container-celeste {
            position: relative;
            top: -6px;
            height: 1000px;
            background-color: #0c1533; 
        }

        .texto-recuperar > h1 {
            margin-top: 0;
            margin-bottom: 0;
            font-family: 'Abril Fatface';
            color: white;
            position: relative;
            top: 10px;
            left: 35%;
            font-weight: 900;
            font-size: 60px; 
        }
        .texto-recuperar > p {
            position: relative;
            color: white;
            top: 10px;
            left: 35%;
            width: 60%;
            font-size: 24px;
        }
        .texto-recuperar {
            position: relative;
            top: 0;
            left: 0;
        }
        .img-recuperar {
            position: relative;
            top: -100px;
            left: 15%;
            width: 35%;
        }

        .texto-redada > h1 {
            font-family: 'Abril Fatface';
            margin-bottom: -2%;
            color: white;
            position: relative;
            top: 5%;
            left: -5%;
            font-weight: 900;
            font-size: 60px; 
        }
        .texto-redada > p {
            color: white;
            position: relative;
            top: 10%;
            left: 33%;
            max-width: 62%;
            font-size: 25px;
        }
        .texto-redada {
            position: relative;
            text-align: right;
        }
        .img-redada {
            position: relative;
            width: 35%;
            top: -90px; 
            left: 2%;
        }
    </style>

    <div class="container-celeste">
        <div class="row">
            <div class="col-md-6 img-recuperar">
                <img data-aos="fade-right" src="https://www.cnc.cl/wp-content/uploads/2023/11/Escena-03-Mision_-Recuperar-la-Navidad.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 texto-recuperar">
                <h1>Misión: recuperar</h1>
                <h1>la Navidad</h1>
                <p>El Viejito Pascuero acudió a la <strong>Policía del Comercio</strong> para que lo ayudara a recobrar los regalos robados, detener al Ladrón de la Navidad y salvar las fiestas.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 texto-redada">
                <h1>Redada navideña</h1>
                <p>Braulio el Policía, realizó un operativo y consiguió la ubicación de los regalos robados. 
                   El Viejito Pascuero pidió ayuda a sus asistentes para que lo acompañaran a <strong>detener al Ladrón de la Navidad.</strong></p>
            </div>
            <div class="col-md-6 img-redada">
                <img data-aos="fade-left" src="https://www.cnc.cl/wp-content/uploads/2023/11/Escena-04-Redada-navidena.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>

    <!-- estilo imagen de fondo verde -->
    <style>
        .bg-image-verde {
            position: relative;
            top: -6px;
            background-color: #0c1533;
            height: 135%;
        }

        .bg-image-verde::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url('https://www.cnc.cl/wp-content/uploads/2023/11/Fondo-verde.png');
            background-size: cover;
            background-position: center;
            z-index: 1;
        }

        .espacio-blanco {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100px;
            background-color: #FFFFFF;
            z-index: 0;
        }

        .texto-captura > h1 {
            font-family: 'Abril Fatface';
            color: black;
            position: relative;
            top: 100px;
            left: 35%;
            font-weight: 900;
            font-size: 60px; 
        }
        .texto-captura > p {
            position: relative;
            color: black;
            top: 100px;
            left: 35%;
            width: 60%;
            font-size: 25px;
        }
        .texto-captura {
            position: relative;
            top: 0;
            left: 0;
            z-index: 5;
        }
        .img-captura {
            position: relative;
            top: -40px;
            left: 15%;
            width: 35%;
            z-index: 5;
        }

        .texto-triunfo > h1 {
            font-family: 'Abril Fatface';
            margin-bottom: -2%;
            color: black;
            position: relative;
            top: 5%;
            left: -5%;
            font-weight: 900;
            font-size: 60px; 
        }
        .texto-triunfo > p {
            color: black;
            position: relative;
            top: 10%;
            left: 40%;
            max-width: 55%;
            font-size: 25px;
        }
        .texto-triunfo {
            position: relative;
            text-align: right;
            z-index: 5;
        }
        .img-triunfo {
            position: relative;
            width: 35%;
            top: -50px; 
            z-index: 5;
        }

        .texto-fin {
            position: relative;
            top: 40px;
            z-index: 5;
        }

        .texto-fin > h1 {
            font-family: 'Abril Fatface';
            color: black;
            position: relative;
            text-align: center;
            font-weight: 900;
            font-size: 70px; 
        }
    </style>

    <!-- Sección imagen de fondo verde -->
    <div class="bg-image-verde">
        <div class="espacio-blanco"></div>
        <div class="row">
            <div class="col-md-6 img-captura">
                <img data-aos="fade-right" src="https://www.cnc.cl/wp-content/uploads/2023/11/Escena-05-La-captura.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 texto-captura">
                <h1>La captura</h1>
                <p>Luego de una intensa búsqueda, Braulio el Policía logró atrapar al Ladrón de la Navidad justo antes que destruyera los juguetes y arruinara las fiestas. 
                   El Viejito Pascuero y sus asistentes recuperaron todos los regalos y regresaron a casa.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 texto-triunfo">
                <h1>El triunfo del</h1>
                <h1>comercio formal</h1>
                <p>Gracias al apoyo de la Policía del Comercio, el Viejito Pascuero y sus asistentes lograron salvar la Navidad, entregando regalos seguros y de calidad, 
                   que alegraron a todos los niños del mundo.  </p>
            </div>
            <div class="col-md-6 img-triunfo">
                <img data-aos="fade-left" src="https://www.cnc.cl/wp-content/uploads/2023/11/Escena-06-El-triunfo.-del-comercio-Formal.png" alt="" class="img-fluid">
            </div>
        </div>
        <div class="texto-fin">
            <h1>FIN</h1>
        </div>
    </div>

    <!-- estilo titulo tip -->
    <style>
        .texto-compra {
            position: relative;
            top: 0%;
            left: 0%;
            z-index: 10;
            text-align: center;
            width: 100%;
            color: white;
        }

        .texto-formal-1 {
            display: inline-block; 
            background-color: #0064FE; 
            padding: 0 20px;
            transform: rotate(1deg);
            margin: 0 2px;
            font-weight: 900;
            font-size: 70px; 
            font-family: 'Abril Fatface';
        }

        .texto-formal-1 > span {
            display: inline-block; 
            transform: rotate(-1deg);
        }

        .texto-formal-2 {
            display: inline-block; 
            background-color: #0064FE; 
            padding: 0 15px;
            transform: rotate(-1deg);
            margin: -4px 2px;
            font-weight: 900;
            font-size: 70px;
            font-family: 'Abril Fatface';
        }

        .texto-formal-2 > span {
            display: inline-block; 
            transform: rotate(1deg);
        }
    </style>

    <!-- Texto Tip -->
    <div class="texto-compra">
        <h1><div class="texto-formal-1"><span>Tips para una</span></div></h1>
        <h1><div class="texto-formal-2"><span>Feliz Compra Formal</span></div></h1>
    </div>

    <!-- estilo imagen duende -->
    <style>
        .contenedor-img {
            display: flex;
            justify-content: center;
            align-items: center; 
            height: 300px;
            top: 13%;
            position: relative;
        }

        .imagen-centrada {
            max-width: 90%;
            height: auto;
        }
    </style>

    <!-- imagen duende -->
    <div class="contenedor-img">
        <img src="https://www.cnc.cl/wp-content/uploads/2023/11/Duende-Comprar-un-juguete.png" class="imagen-centrada" alt="">
    </div>

    <!-- estilo texto Tip -->
    <style>
        .texto-revisar {
            position: relative;
            top: 21%;
            left: 0%;
            z-index: 10;
            text-align: center;
            width: 100%;
        }

        .texto-revisar > .texto-1 {
            color: black;
            font-weight: 900;
            font-size: 50px;
            font-family: 'Abril Fatface';
        }

        .texto-revisar > .texto-2 {
            color: #0064FE;
            font-weight: 900;
            font-size: 50px;
            font-family: 'Abril Fatface';
        }
        .texto-2-1 {
            color: black;
            font-weight: 900;
            font-size: 50px;
            font-family: 'Abril Fatface';
        }
        .copito {
            position: relative;
            top: 15px;
            color: black;
            font-weight: 900;
            font-size: 50px;
            font-family: 'Abril Fatface';
        }
    </style>

    <!-- Texto Tip -->
    <div class="texto-revisar">
        <h1 class="texto-1">¿Qué debes revisar al momento de</h1>
        <h1 class="texto-2">comprar un juguete<span class="copito">*</span><span class="texto-2-1">?</span></h1>
    </div>

    <!-- estilo texto-iconos -->
    <style>
        .contenedor-iconos {

            top: 23%;
            position: relative;
            width: 55%;
            margin: auto;
            background-color: #E4ECF9;
            padding: 20px;
            border-radius: 10px;
            font-family: Arial, sans-serif;
        }

        .lista-con-iconos {
            transform: scale(0.95);
            list-style: none;
            padding: 0;
        }

        .lista-con-iconos li {
            font-size: 25px;
            margin-bottom: 20px;
            padding-left: 40px;
            position: relative;
        }

        .lista-con-iconos li img {
            position: absolute;
            left: 0; 
            top: 2%; 
            width: 30px;
            height: 30px;
        }

        .fuente {
            font-size: 20px;
            text-align: center;
            color: #8C939B;
        }

        .lista-con-iconos-2 {
            list-style-type: none; 
        }
    </style>

    <!-- texto-iconos -->
    <div class="contenedor-iconos">
        <ul class="lista-con-iconos">
            <li><img src="https://www.cnc.cl/wp-content/uploads/2023/11/Icono-Check.png" alt="Icono 1">Sus piezas o partes no deben obstruir la respiración de los niños.</li>
            <li><img src="https://www.cnc.cl/wp-content/uploads/2023/11/Icono-Check.png" alt="Icono 1">Deben indicar la edad de uso recomendada, utilizando mensajes como "advertencia, no apropiado para niños menores de 3 años".</li>
            <li><img src="https://www.cnc.cl/wp-content/uploads/2023/11/Icono-Check.png" alt="Icono 1">Los envases no deben contener elementos cortantes ni punzantes.</li>
            <li><img src="https://www.cnc.cl/wp-content/uploads/2023/11/Icono-Check.png" alt="Icono 1">No deben ser inflamables, tóxicos ni falsificados.</li>
            <li><img src="https://www.cnc.cl/wp-content/uploads/2023/11/Icono-Check.png" alt="Icono 1"><strong>El etiquetado debe indicar:</strong></li>
            <ul class="lista-con-iconos-2">
                <li><img src="https://www.cnc.cl/wp-content/uploads/2023/11/Icono-Exclamation.png" alt="Icono 2">El fabricante o importador.</li>
                <li><img src="https://www.cnc.cl/wp-content/uploads/2023/11/Icono-Exclamation.png" alt="Icono 2">El país de origen.</li>
                <li><img src="https://www.cnc.cl/wp-content/uploads/2023/11/Icono-Exclamation.png" alt="Icono 2">Si el juguete contiene partes pequeñas que puedan provocar riesgo de asfixia.</li>
                <li><img src="https://www.cnc.cl/wp-content/uploads/2023/11/Icono-Exclamation.png" alt="Icono 2">Advertencias claras, si es que existe algún riesgo en su uso.</li>
                <li><img src="https://www.cnc.cl/wp-content/uploads/2023/11/Icono-Exclamation.png" alt="Icono 2">La edad recomendada.</li>
                <li><img src="https://www.cnc.cl/wp-content/uploads/2023/11/Icono-Exclamation.png" alt="Icono 2">El rotulado debe estar en castellano.</li>
            </ul>
        </ul>
        <p class="fuente">Fuente: SERNAC</p>
    </div>

    <!-- estilo imagen duende-2 -->
    <style>
        .contenedor-img-2 {
            margin-top: 7%;
            display: flex;
            justify-content: center;
            align-items: center; 
            height: 300px;
            top: 13%;
            position: relative;
        }

        .imagen-centrada {
            max-width: 90%;
            height: auto;
        }
    </style>

    <!-- imagen duende-2 -->
    <div class="contenedor-img-2">
        <img src="https://www.cnc.cl/wp-content/uploads/2023/11/Duende-Usar-tarjetas-de-forma-segura.png" class="imagen-centrada" alt="">
    </div>

    <!-- estilo texto Tip-2 -->
    <style>
        .texto-reomendacion {
            position: relative;
            top: 21%;
            left: 0%;
            z-index: 10;
            text-align: center;
            width: 100%;
        }

        .texto-reomendacion > .texto-1-2 {
            color: black;
            font-weight: 900;
            font-size: 50px;
            font-family: 'Abril Fatface';
        }

        .texto-reomendacion > .texto-2-2 {
            color: #0064FE;
            font-weight: 900;
            font-size: 50px;
            font-family: 'Abril Fatface';
        }
        .texto-2-1 {
            color: black;
            font-weight: 900;
            font-size: 50px;
            font-family: 'Abril Fatface';
        }
        .copito {
            position: relative;
            top: 15px;
            color: black;
            font-weight: 900;
            font-size: 50px;
            font-family: 'Abril Fatface';
        }
    </style>

    <!-- Texto Tip-2 -->
    <div class="texto-reomendacion">
        <h1 class="texto-1-2">Recomendaciones para usar tus</h1>
        <h1 class="texto-2-2">tarjetas <span class="texto-2-1">de</span> forma segura<span class="copito">*</span></h1>
    </div>

    <!-- estilo texto-iconos-2 -->
    <style>
        .contenedor-iconos-2 {

            top: 23%;
            position: relative;
            width: 55%;
            margin: auto;
            background-color: #E4ECF9;
            padding: 20px;
            border-radius: 10px;
            font-family: Arial, sans-serif;
        }

        .lista-con-iconos-2 {
            transform: scale(0.95);
            list-style: none;
            padding: 0;
        }

        .lista-con-iconos-2 li {
            font-size: 25px;
            margin-bottom: 20px;
            padding-left: 40px;
            position: relative;
        }

        .lista-con-iconos-2 li img {
            position: absolute;
            left: 0; 
            top: 2%; 
            width: 30px;
            height: 30px;
        }

        .fuente-2 {
            font-size: 20px;
            text-align: center;
            color: #8C939B;
        }
    </style>

    <!-- texto-iconos-2 -->
    <div class="contenedor-iconos-2">
        <ul class="lista-con-iconos-2">
            <li><img src="https://www.cnc.cl/wp-content/uploads/2023/11/Icono-Check.png" alt="Icono 1">No las pierdas de vista, no las entregues para que hagan la transacción en otro lugar.</li>
            <li><img src="https://www.cnc.cl/wp-content/uploads/2023/11/Icono-Check.png" alt="Icono 1">Cuida la privacidad de tu clave secreta, evita compartirla con terceros y cámbiala con frecuencia.</li>
            <li><img src="https://www.cnc.cl/wp-content/uploads/2023/11/Icono-Check.png" alt="Icono 1">Evita hacer operaciones en el cajero automático con personas desconocidas muy cerca.</li>
            <li><img src="https://www.cnc.cl/wp-content/uploads/2023/11/Icono-Check.png" alt="Icono 1">Revisa frecuentemente los saldos de tus cuentas bancarias.</li>
            <li><img src="https://www.cnc.cl/wp-content/uploads/2023/11/Icono-Check.png" alt="Icono 1">Debes guardar los comprobantes de pago para compararlos con el estado de cuenta que se envía mensualmente.</li>
            <li><img src="https://www.cnc.cl/wp-content/uploads/2023/11/Icono-Check.png" alt="Icono 1">Si vas a pagar en cuotas, debes asegurarte quién otorga ese beneficio: si se trata de un pago del mismo precio al contado dividido en cuotas, o bien si se hace un recargo por cada cuota pagada.</li>
            <li><img src="https://www.cnc.cl/wp-content/uploads/2023/11/Icono-Check.png" alt="Icono 1">Revisa que el cajero se encuentre en buenas condiciones y que en la pantalla muestre mensajes que responden a una operación normal.</li>
        </ul>
        <p class="fuente-2">Fuente: CMF Chile</p>
    </div>

    <!-- estilo imagen duende-3 -->
    <style>
        .contenedor-img-3 {
            margin-top: 7%;
            display: flex;
            justify-content: center;
            align-items: center; 
            height: 300px;
            top: 13%;
            position: relative;
        }

        .imagen-centrada {
            max-width: 90%;
            height: auto;
        }
    </style>

    <!-- imagen duende-3 -->
    <div class="contenedor-img-3">
        <img src="https://www.cnc.cl/wp-content/uploads/2023/11/Duende-Si-vas-a-Comprar-Online.png" class="imagen-centrada" alt="">
    </div>

    <!-- estilo texto Tip-3 -->
    <style>
        .texto-reomendacion {
            position: relative;
            top: 21%;
            left: 0%;
            z-index: 10;
            text-align: center;
            width: 100%;
        }

        .texto-reomendacion > .texto-1-3 {
            color: black;
            font-weight: 900;
            font-size: 50px;
            font-family: 'Abril Fatface';
        }

        .texto-reomendacion > .texto-2-3 {
            color: black;
            font-weight: 900;
            font-size: 50px;
            font-family: 'Abril Fatface';
        }
        .texto-2-1-3 {
            color: #0064FE;
            font-weight: 900;
            font-size: 50px;
            font-family: 'Abril Fatface';
        }
        .copito {
            position: relative;
            top: 15px;
            color: black;
            font-weight: 900;
            font-size: 50px;
            font-family: 'Abril Fatface';
        }
    </style>

    <!-- Texto Tip-3 -->
    <div class="texto-reomendacion">
        <h1 class="texto-1-3">Si vas a <span class="texto-2-1-3">comprar online</span> sigue los</h1>
        <h1 class="texto-2-3">siguientes consejos<span class="copito">*</span></h1>
    </div>

    <!-- estilo texto-iconos-3 -->
    <style>
        .contenedor-iconos-3 {

            top: 23%;
            position: relative;
            width: 55%;
            margin: auto;
            background-color: #E4ECF9;
            padding: 20px;
            border-radius: 10px;
            font-family: Arial, sans-serif;
        }

        .lista-con-iconos-3 {
            transform: scale(0.95);
            list-style: none;
            padding: 0;
        }

        .lista-con-iconos-3 li {
            font-size: 25px;
            margin-bottom: 20px;
            padding-left: 40px;
            position: relative;
        }

        .lista-con-iconos-3 li img {
            position: absolute;
            left: 0; 
            top: 2%; 
            width: 30px;
            height: 30px;
        }

        .fuente-3 {
            font-size: 20px;
            text-align: center;
            color: #8C939B;
        }
    </style>

    <!-- texto-iconos-3 -->
    <div class="contenedor-iconos-3">
        <ul class="lista-con-iconos-3">
            <li><img src="https://www.cnc.cl/wp-content/uploads/2023/11/Icono-Check.png" alt="Icono 1"><strong>Busca información del sitio web:</strong> antes de comprar te recomendamos buscar en Google la web de la empresa que estás visitando, así te aseguras de su legitimidad y podrás encontrar comentarios sobre esta.</li>
            <li><img src="https://www.cnc.cl/wp-content/uploads/2023/11/Icono-Check.png" alt="Icono 1"><strong>Si vas a comprar en un Marketplace:</strong> verifica el nombre de la empresa que está vendiendo esos productos para asegurar tu compra. Recuerda que no le estás comprando directamente al sitio web.</li>
            <li><img src="https://www.cnc.cl/wp-content/uploads/2023/11/Icono-Check.png" alt="Icono 1"><strong>Exige tu boleta:</strong> si vas a comprar en un Marketplace o en otro sitio de ventas online, antes de hacer la compra asegúrate de que entreguen boleta. Esta es tu única garantía como consumidor.</li>
            <li><img src="https://www.cnc.cl/wp-content/uploads/2023/11/Icono-Check.png" alt="Icono 1"><strong>Revisa las políticas de envío y devolución:</strong> antes de comprar asegúrate de revisar las políticas de envío y devolución, de esta manera sabrás qué hacer en caso de tener que regresar los productos.</li>
            <li><img src="https://www.cnc.cl/wp-content/uploads/2023/11/Icono-Check.png" alt="Icono 1"><strong>Pide referencias:</strong> si vas a comprar online, te aconsejamos mirar las fotos de los productos, sus medidas, materialidad, entre otros. Si no estás seguro, pide fotos reales al vendedor. Además, te recomendamos leer los comentarios sobre lo que estás comprando y fijarse en la puntuación.</li>
            <li><img src="https://www.cnc.cl/wp-content/uploads/2023/11/Icono-Check.png" alt="Icono 1"><strong>Atención con los métodos de pago:</strong> revisa que la página web cuente con alianzas de medios de pagos conocidas y oficiales que entreguen garantía de compra segura. Cuida tu información y nunca dejes datos personales en ningún sitio desconocido o no identificado.</li>
            <li><img src="https://www.cnc.cl/wp-content/uploads/2023/11/Icono-Check.png" alt="Icono 1"><strong>Conoce tus derechos:</strong> la Ley del Consumidor Nº 21.398 establece que para las compras por internet los consumidores tienen el derecho al retracto o arrepentirse de una compra realizada online por un período de 10 días desde que se recibió el producto. Además, en el comercio electrónico las empresas deberán informar el costo total y el tiempo que demora el despacho.</li>
        </ul>
        <p class="fuente-3">Fuente: Cámara Nacional de Comercio, Servicios y Turismo de Chile</p>
    </div>

    <!-- estilo texto Tip-2 -->
    <style>
        .titulo-final {
            position: relative;
            top: 27%;
            left: 0%;
            z-index: 10;
            text-align: center;
            width: 100%;
        }

        .titulo-final > .texto-final-1 {
            color: #0064FE;
            font-weight: 900;
            font-size: 50px;
            font-family: 'Abril Fatface';
        }

        .titulo-final > .texto-final-2 {
            color: #0064FE;
            font-weight: 900;
            font-size: 50px;
            font-family: 'Abril Fatface';
        }
    </style>

    <!-- Texto Tip-2 -->
    <div class="titulo-final">
        <h1 class="texto-final-1">¡Feliz Compra</h1>
        <h1 class="texto-final-2">Formal Para Todos!</h1>
    </div>


    
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
 <script>
 AOS.init();
 </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>