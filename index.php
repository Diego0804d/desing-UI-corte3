<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DeSigual</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Personalizados -->
    <link href="css/custom.css" rel="stylesheet">
</head>
<body>
    
    <div class="franja-superior">
        <h1 class="titulo-principal">DeSigual</h1>
        <p class="subtitulo">Maracaibo</p>
    </div>
    
    

    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link">|</a></li>
                <li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>
                <li class="nav-item"><a class="nav-link">|</a></li>
                <li class="nav-item"><a class="nav-link" href="company.php">Company</a></li>
                <li class="nav-item"><a class="nav-link">|</a></li>
                <li class="nav-item"><a class="nav-link disabled " href="#">Blog</a></li>
            </ul>
        </div>
    </nav>

    <div class="container text-center mt-3">
        <p class="lead" style="font-family: 'Lato', sans-serif;">Tu estilo, nuestra pasión</p>
    </div>

    <!-- Sección Quiénes somos y DeSigual mcbo -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h3>¿Quiénes somos?</h3>
                <p>DeSigual inició en 2020, ofreciendo ropa y calzado de la mejor calidad. Nuestra tienda se ha ganado la confianza de nuestros clientes por nuestra atención personalizada y la variedad de productos disponibles.</p>
            </div>
            <div class="col-md-6 text-left">
                <h3>Nuestra esquina</h3>
                <img src="assets/img/Tienda_Afuera.png" alt="Tienda" class="img-fluid" width="350" height="350">
            </div>            
        </div>
    </div>

<!-- Rectángulo con dos fotos -->
<div class="container mt-5">
    <div class="row bg-dark text-white p-4 rounded align-items-center">
        <div class="col-md-6 d-flex justify-content-start">
            <img src="assets/img/Foto_A.jpg" alt="Foto A" class="img-fluid" style="width: 400px;">
        </div>
        <div class="col-md-6 d-flex justify-content-end">
            <img src="assets/img/Foto_B.jpg" alt="Foto B" class="img-fluid" style="width: 380px;">
        </div>
    </div>
</div>



    <!-- Contenedor principal -->
    <div class="container mt-5">
        <div class="row d-flex align-items-center"> <!-- Centrado en el eje Y -->
            <!-- Sección de Ofertas -->
            <div class="col-md-6 d-flex flex-column justify-content-center text-center h-100">  <!-- Centrado en el eje Y -->
                <h3>Ofertas</h3>
                <p>Descubre nuestras ofertas y suscríbete para no perderte de ninguna. Siempre tenemos descuentos especiales para ti.</p>
            </div>

            <!-- Sección de Suscripción con borde personalizado -->
            <div class="col-md-6">
                <div class="custom-border">  <!-- Aplicando la clase CSS -->
                    <div class="text-center mb-4">  <!-- Centrado del título "Suscríbete" -->
                        <h3>Suscríbete</h3>
                    </div>
                    <form id="subscriptionForm" action="registro.php" method="POST">
                        <div class="form-group d-flex align-items-center">
                            <label for="name" class="form-label me-2">Nombre:</label>
                            <input type="text" class="form-control flex-grow-1" id="name" name="name" placeholder="Tu Nombre" required>
                        </div>
                        <div class="form-group d-flex align-items-center mt-3">
                            <label for="email" class="form-label me-2">Email:</label>
                            <input type="email" class="form-control flex-grow-1" id="email" name="email" placeholder="Tu Email" required>
                        </div>
                        <div class="form-group d-flex align-items-center mt-3">
                            <label for="phone" class="form-label me-2">Tlf:</label>
                            <div class="d-flex flex-grow-1">
                                <input type="text" class="form-control me-2" id="prefix" name="prefix" placeholder="Prefijo" maxlength="4" required>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Número" maxlength="7" required>
                            </div>
                        </div>
                        <!-- Contenedor para centrar el botón con margen -->
                        <div class="d-flex justify-content-center mt-4">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div> <!-- Cierra el rectángulo -->
            </div>
        </div>
    </div>



    <!-- Ubicación -->
    <div class="container mt-5">
        <h3 class="text-center">Ubicación</h3>
        <div class="row">
            <div class="col-md-6">
                <a href="https://www.google.com/maps/place/Desigual+Maracaibo/@10.6638637,-71.6272134,19.18z/data=!4m10!1m2!2m1!1sDesigual!3m6!1s0x8e899907c7b7a685:0xd66596d1542b73dc!8m2!3d10.6639257!4d-71.6270076!15sCghEZXNpZ3VhbCIDiAEBWgoiCGRlc2lndWFskgEOY2xvdGhpbmdfc3RvcmXgAQA!16s%2Fg%2F11q29w72mt?entry=ttu&g_ep=EgoyMDI1MDEyNi4wIKXMDSoASAFQAw%3D%3D" target="_blank">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d864.1606060654946!2d-71.62721337651578!3d10.663863694072123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e899907c7b7a685%3A0xd66596d1542b73dc!2sDesigual%20Maracaibo!5e0!3m2!1sen!2sve!4v1738112143924!5m2!1sen!2sve" width="450" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </a>
            </div>
            <div class="col-md-6">
                <p>Dirección: Planta Alta, C.C Montielco, Avenida 5 de julio y, C. 72 Gilberto Correa, Maracaibo, Zulia</p>
                <a href="https://www.google.com/maps/place/Desigual+Maracaibo/@10.6638637,-71.6272134,19.18z/data=!4m10!1m2!2m1!1sDesigual!3m6!1s0x8e899907c7b7a685:0xd66596d1542b73dc!8m2!3d10.6639257!4d-71.6270076!15sCghEZXNpZ3VhbCIDiAEBWgoiCGRlc2lndWFskgEOY2xvdGhpbmdfc3RvcmXgAQA!16s%2Fg%2F11q29w72mt?entry=ttu&g_ep=EgoyMDI1MDEyNi4wIKXMDSoASAFQAw%3D%3D" target="_blank">o el link</a>
            </div>
        </div>
    </div>

    <!-- Pie de página -->
    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container text-center">
            <div class="row">
                <!-- Redes Sociales -->
                <div class="col-md-4">
                    <p>Síguenos en:</p>
                    <a href="https://www.facebook.com/desigualmcbo?mibextid=wwXIfr&rdid=uZEr6DGd93Gny6lM&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F18K9yJ2zd8%2F%3Fmibextid%3DwwXIfr#"class="text-white text-decoration-none d-flex align-items-center mb-2">
                        <i class="bi bi-facebook me-2"></i> Desigual Maracaibo
                    </a>
                    <a href="https://www.instagram.com/desigualmaracaibo/?igsh=MjBwbmZscmxmYzU3&utm_source=qr#" class="text-white text-decoration-none d-flex align-items-center">
                        <i class="bi bi-instagram me-2"></i> @desigualmcbo
                    </a>
                </div>

                <!-- Barra de búsqueda -->
                <div class="col-md-4 d-flex align-items-center justify-content-center">
                    <form class="d-flex w-75">
                        <input type="text" class="form-control me-2" placeholder="Buscar..." aria-label="Buscar">
                    </form>
                </div>

                <!-- Texto de derechos -->
                <div class="col-md-4">
                    <p>&copy; 2025 DeSigual. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </footer>


<!-- Enlace a Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    
    <!-- Script para validación y envío uasndo jquery-->
    <script>
    $(document).ready(function () {
        $('#subscriptionForm').on('submit', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            var nombre = $('#name').val();

            $.ajax({
                url: 'registro.php',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    if (response.includes("Registro exitoso")) {
                        Swal.fire({
                            icon: 'success',
                            title: `¡Bienvenido, ${nombre}!`,
                            text: 'Te damos la bienvenida a la familia DeSigual. Registro exitoso. ¡Gracias por suscribirte!',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Aceptar'
                        });
                        $('#subscriptionForm')[0].reset();
                    } else {
                        Swal.fire({
                            icon: 'warning',
                            title: '¡Atención!',
                            text: response,
                            confirmButtonColor: '#d33'
                        });
                    }
                },
                error: function (xhr, status, error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error de servidor',
                        text: 'No se pudo completar el registro. Inténtalo nuevamente.',
                    });
                }
            });
        });

        $('#prefix').on('input', function () {
            if ($(this).val().length === 4) {
                $('#phone').focus();
            }
        });
    });
    </script>


    <!-- Script para cambio automático de campo -->
    <script>
        document.getElementById("prefix").addEventListener("input", function() {
            if (this.value.length === 4) {
                document.getElementById("phone").focus();
            }
        });
    </script>


</body>
</html>
