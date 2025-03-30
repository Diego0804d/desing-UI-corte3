<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - DeSigual</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Personalizados -->
    <link href="css/custom.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        .footer-icons i {
            font-size: 1.5rem;
            color: white;
        }
    </style>
</head>
<body>
    <!-- Se ve bonito es opcional -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">DeSigual</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="container mt-4 text-center">
        <h2>Productos</h2>
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

    <!-- Contenido principal -->
    <div class="container mt-4 text-center">
        <p>Explora nuestras ofertas exclusivas</p>
        <input type="search" class="form-control w-25 mx-auto" placeholder="Buscar">
    </div>

    <!-- Productos con estructura de tarjetas y modales -->
    <div class="container mt-5">
        <div class="row g-3">
            <div class="col-md-4">
                <div class="card">
                    <img src="assets/img/Productos (1).jpg" class="product-image" alt="Camisa Manga Corta">
                    <div class="card-body text-center">
                        <h5 class="card-title">Camisa Manga Corta</h5>
                        <p class="text-success">Ref 25</p>
                        <button class="btn btn-primary open-modal-btn" 
                                data-name="Camisa Manga Corta" 
                                data-price="Ref 25" 
                                data-description="Camisa Manga Corta de alta calidad" 
                                data-image="assets/img/Productos (1).jpg"
                                data-bs-toggle="modal" 
                                data-bs-target="#productModal">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="assets/img/Productos (2).jpg" class="product-image" alt="Casual Outfit">
                    <div class="card-body text-center">
                        <h5 class="card-title">Casual Outfit</h5>
                        <p class="text-success">Ref 80</p>
                        <button class="btn btn-primary open-modal-btn" 
                                data-name="Casual Outfit" 
                                data-price="Ref 80" 
                                data-description="Conjunto casual para cualquier ocasión" 
                                data-image="assets/img/Productos (2).jpg"
                                data-bs-toggle="modal" 
                                data-bs-target="#productModal">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="assets/img/Productos (3).jpg" class="product-image" alt="Franelas estivaneli">
                    <div class="card-body text-center">
                        <h5 class="card-title">Franelas Estivaneli</h5>
                        <p class="text-success">Ref 30</p>
                        <button class="btn btn-primary open-modal-btn" 
                                data-name="Franelas Estivaneli" 
                                data-price="Ref 30" 
                                data-description="Franelas de alta calidad y confort" 
                                data-image="assets/img/Productos (3).jpg"
                                data-bs-toggle="modal" 
                                data-bs-target="#productModal">
                            Agregar al carrito
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para mostrar detalles del producto -->
    <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img id="modalImage" src="" class="img-fluid mb-3" alt="Product Image">
                    <p id="modalDescription"></p>
                    <p class="text-success" id="modalPrice"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Agregar al carrito</button>
                </div>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    
    <!-- Reemplazo de la logica de los modales con jquery -->
    <script>
    $(document).ready(function () {
        $('.open-modal-btn').on('click', function () {
            let name = $(this).data('name');
            let price = $(this).data('price');
            let description = $(this).data('description');
            let image = $(this).data('image');

            $('#productModalLabel').text(name);
            $('#modalPrice').text(price);
            $('#modalDescription').text(description);
            $('#modalImage').attr('src', image).attr('alt', name);
        });
    });
    </script>

    
</body>
</html>
