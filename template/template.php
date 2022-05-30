<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tsastun</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5d3f0049df.js" crossorigin="anonymous"></script>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="../img/tsastun.jpg">

    <?php include_once "nav.php" ?>
</head>
<body style="background-color: #F7F6F8; ">
    <!-- Carrousel -->
    <?php require_once "carrousel.php"?>

    <!-- Nosotros -->
    <?php  require_once "nosotros.php"?>

    <!-- Mision Vision -->
    <?php require_once "mision.php"?>

    <!-- Valores -->
    <?php require_once "valores.php"?>

    <!-- Servicios -->
    <?php require_once "servicios.php"?>

    <!-- Blog -->
    <?php require_once "blog.php"?>

    <!-- Contacto -->
    <?php require_once "contacto.php"?>
    
    <!-- Cartera clientes -->
    <?php require_once "cartera.php"?>

</body>
    <!-- Angular -->
    <div class="modal" tabindex="-1" id="angular" name="angular">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">¿Qué es Angular?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Angular es un framework Javascript potente, muy adecuado para el desarrollo de aplicaciones frontend
                        modernas, de complejidad media o elevada. El tipo de aplicación Javascript que se desarrolla con
                        Angular es del estilo SPA (Single Page Application) o también las denominadas PWA (Progressive Web
                        App).

                        El framework Angular ofrece una base para el desarrollo de aplicaciones robustas, escalables y
                        optimizadas, que promueve además las mejores prácticas y un estilo de codificación homogéneo y de
                        gran modularidad.

                        Aunque ofrece principalmente una base para el desarrollo de la parte frontal, la programación
                        Javascript del lado del cliente, también aborda técnicas de desarrollo de la parte del backend, para
                        la implementación del Server Side Rendering. A esta parte se le llama Angular Universal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Mongodb -->
    <div class="modal" tabindex="-1" id="mongodb" name="mongodb">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">¿Qué es MongoDB?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Si tuviéramos que resumir a una la principal característica a destacar de MongoDB, sin duda esta
                        sería la velocidad, que alcanza un balance perfecto entre rendimiento y funcionalidad gracias a su
                        sistema de consulta de contenidos. Pero sus características principales no se limitan solo a esto,
                        MongoDB cuenta, además, con otras que lo posicionan como el preferido de muchos desarrolladores.

                        Características principales:

                        Consultas ad hoc. Con MongoDb podemos realizar todo tipo de consultas. Podemos hacer búsqueda por
                        campos, consultas de rangos y expresiones regulares. Además, estas consultas pueden devolver un
                        campo específico del documento, pero también puede ser una función JavaScript definida por el
                        usuario.
                        Indexación. El concepto de índices en MongoDB es similar al empleado en bases de datos relacionales,
                        con la diferencia de que cualquier campo documentado puede ser indexado y añadir múltiples índices
                        secundarios.
                        Replicación. Del mismo modo, la replicación es un proceso básico en la gestión de bases de datos.
                        MongoDB soporta el tipo de replicación primario-secundario. De este modo, mientras podemos realizar
                        consultas con el primario, el secundario actúa como réplica de datos en solo lectura a modo copia de
                        seguridad con la particularidad de que los nodos secundarios tienen la habilidad de poder elegir un
                        nuevo primario en caso de que el primario actual deje de responder.
                        Balanceo de carga. Resulta muy interesante cómo MongoDB puede escalar la carga de trabajo. MongoDB
                        tiene la capacidad de ejecutarse de manera simultánea en múltiples servidores, ofreciendo un
                        balanceo de carga o servicio de replicación de datos, de modo que podemos mantener el sistema
                        funcionando en caso de un fallo del hardware.
                        Almacenamiento de archivos. Aprovechando la capacidad de MongoDB para el balanceo de carga y la
                        replicación de datos, Mongo puede ser utilizado también como un sistema de archivos. Esta
                        funcionalidad, llamada GridFS e incluida en la distribución oficial, permite manipular archivos y
                        contenido.
                        Ejecución de JavaScript del lado del servidor. MongoDB tiene la capacidad de realizar consultas
                        utilizando JavaScript, haciendo que estas sean enviadas directamente a la base de datos para ser
                        ejecutadas.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- NodeJs -->
    <div class="modal" tabindex="-1" id="nodejs" name="nodejs">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">¿Qué es NodeJs?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Node.js es un entorno controlado por eventos diseñado para crear aplicaciones escalables,
                        permitiéndote establecer y gestionar múltiples conexiones al mismo tiempo. Gracias a esta
                        característica, no tienes que preocuparte con el bloqueo de procesos, pues no hay bloqueos.

                        ¿Cómo funciona Node.js?
                        El diseño de Node.js está inspirado en sistemas como el Event Machine de Ruby o el Twisted de
                        Python. Sin embargo, Node.js presenta un bucle de eventos como una construcción en tiempo de
                        ejecución en lugar de una biblioteca. Este bucle de eventos es invisible para el usuario.

                        Otra característica especial de Node.js es que está diseñado para simplificar la comunicación. No
                        tiene subprocesos, pero te permite aprovechar múltiples núcleos en su entorno y compartir sockets
                        entre procesos.

                        Características principales de Node.js
                        Resumiendo, Node.js se ha hecho popular en los últimos años gracias a las siguientes
                        características:

                        Velocidad. Node.js está construido sobre el motor de JavaScript V8 de Google Chrome, por eso su
                        biblioteca es muy rápida en la ejecución de código.
                        Sin búfer. Las aplicaciones de Node.js generan los datos en trozos (chunks), nunca los almacenan en
                        búfer.
                        Asíncrono y controlado por eventos. Como hemos dicho anteriormente, las APIs de la biblioteca de
                        Node.js son asíncronas, sin bloqueo. Un servidor basado en Node.js no espera que una API devuelva
                        datos. El servidor pasa a la siguiente API después de llamarla, y un mecanismo de notificación de
                        eventos ayuda al servidor a obtener una respuesta de la llamada a la API anterior.
                        Un subproceso escalable. Node.js utiliza un modelo de un solo subproceso con bucle de eventos.
                        Gracias al mecanismo de eventos, el servidor responde sin bloqueos, como hemos dicho. Esto hace que
                        el servidor sea altamente escalable comparando con los servidores tradicionales como el Servidor
                        HTTP de Apache.
                        ¿Para qué sirve Node.js?
                        Puedes utilizar Node.js para diferentes tipos de aplicaciones. Los siguientes son algunos de los
                        ejemplos:

                        Aplicaciones de transmisión de datos (streaming)
                        Aplicaciones intensivas de datos en tiempo real
                        Aplicaciones vinculadas a E/S
                        Aplicaciones basadas en JSON:API
                        Aplicaciones de página única
                        ¿Quíen usa Node.js?
                        Cómo debes imaginar, casi todas las marcas más importantes del mercado utilizan Node.js. A
                        continuación tienes algunos ejemplos:

                        GoDaddy
                        Microsoft
                        eBay
                        General Electric
                        PayPal
                        Uber
                        NASA
                        Netflix
                        LinkedIn
                        Medium</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
<!-- Footer -->
<?php require_once "footer.php"?>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
    crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>