<?php
$palestrantes = [
    ["nome" => "CEO  de Startup Carlos Oliveira", "confirmado" => true],
    ["nome" => "Gerente de Produto Maria Flavia Bastos", "confirmado" => true],
    ["nome" => "Líder de Inovação Ricardo Amorim", "corfirmado" => false],
    ["nome" => "Engenheira de IA Leila Navarro", "confirmado" => false],
    ["nome" => "Consultor em Cibersegurança Rafael Couto", "confirmado" => true],
    ["nome" => "Criadora de conteúdo Denise Fraga", "confirmado" => true]
];


$evento = [
    "nome" => "Start Inatel",
    "data" => "14 a 19 de Abril de 2025",
    "local" => "Status Eventos-Varginha",
    "descrição" => "Evento focado para mostrar como funciona a Inatel e os nossos conteudos"
]
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start Inatel 2025</title>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome para ícones -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        /* Estilos personalizados */
        .hero-section {
            background: linear-gradient(rgba(47, 47, 47, 0.7), rgba(0, 0, 0, 0.7)), url(imagem\ fundo.jpg);
            background-size: cover;
            background-position: center;
            color: white;
            padding-top: 120px;
            padding-bottom: 120px;
        }

        .service-card {
            transition: transform 0.3s;
            height: 100%;
        }

        .service-card:hover {
            transform: translateY(-10px);
        }

        .feature-icon {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
        }

        .team-member img {
            border-radius: 50%;

            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-bottom: 1rem;
        }

        footer {
            background-color: #212529;
            color: white;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand fw-bold" href="#">Start Inatel - 2025</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#sobre">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#palestrantes">Palestrantes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#informacoes">Informações</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contato">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Hero Section -->
    <section class="hero-section text-center">
        <div class="container">
            <h1 class="display-3 fw-bold mb-4"></h1>

            <div class="d-grid gap-2 d-md-flex justify-content-md-center">

                <button class="btn btn-primary btn-lg px-4 me-md-2">Conheça Nossas Palestras</button>
                <button class="btn btn-outline-light btn-lg px-4">Entre Em Contato</button>
            </div>
        </div>
    </section>


    <section id="servicos" class="py-5">
        <div class="container">

            
            
            <h2 class="text-center mb-5">PALESTRANTES</h2>
            <div class="row g-4">
                <!-- palestrante 1 Carlos Oliveira -->
                <div class="col-md-4">
                    <div class="card shadow service-card">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon bg-primary text-white mx-auto">
                                <i class="fas fa-chart-line fa-2x"></i>
                            </div>
                            <img src="carlos oliveira.jpg" alt="">
                            <h3 class=>Carlos Oliveira</h3>
                            <p class="card-text">Desenvolvendo estratégias personalizadas para impulsionar o crescimento
                                e a rentabilidade da sua empresa.</p>
                            <a href="#" class="btn btn-outline-primary mt-3">Quem Sou</a>
                        </div>
                    </div>
                </div>
                <!-- palestrante 2 Rafael Couto-->
                <div class="col-md-4">
                    <div class="card shadow service-card">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon bg-success text-white mx-auto">
                                <i class="fas fa-users fa-2x"></i>
                            </div>
                            <img src="ricardo amorim 2.jfif" alt="">
                            <h3 class="card-title h5 mb-3">Rafael Couto</h3>
                            <p class="card-text">Otimizamos o potencial da sua equipe com programas de desenvolvimento,
                                treinamento e cultura organizacional.</p>
                            <a href="#" class="btn btn-outline-success mt-3">Quem Sou</a>
                        </div>
                    </div>
                </div>
                <!-- Palestrante 3  -->
                <div class="col-md-4">
                    <div class="card shadow service-card">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon bg-info text-white mx-auto">
                                <i class="fas fa-laptop-code fa-2x"></i>
                            </div>
                            <img src="rafeal couto.jpg" alt="">
                            <h3 class="card-title h5 mb-3">Rafael Couto</h3>
                            <p class="card-text">Guiamos sua empresa na jornada de transformação digital com soluções
                                tecnológicas inovadoras.</p>
                            <a href="#" class="btn btn-outline-info mt-3">Quem Sou</a>
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

    <section id="servicos" class="py-5">
        <div class="container">

            
            
            <h2 class="text-center mb-5"></h2>
            <div class="row g-4">
                <!-- palestrante 4 Leila Navarro -->
                <div class="col-md-4">
                    <div class="card shadow service-card">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon bg-primary text-white mx-auto">
                                <i class="fas fa-chart-line fa-2x"></i>
                            </div>
                            <img src="navarro.jfif" alt="">
                            <h3 class=>Leila Navarro</h3>
                            <p class="card-text">Ajudo sua empresa a conquistar seus objetivos.</p>
                            <a href="#" class="btn btn-outline-primary mt-3">Quem Sou</a>
                        </div>
                    </div>
                </div>
                <!-- palestrante 5 Denise Fraga-->
                <div class="col-md-4">
                    <div class="card shadow service-card">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon bg-success text-white mx-auto">
                                <i class="fas fa-users fa-2x"></i>
                            </div>
                            <img src="denise fraga.jfif" alt="">
                            <h3 class="card-title h5 mb-3">Denise Fraga</h3>
                            <p class="card-text">Elevamos sua empresa ao um nivel superior.</p>
                            <a href="#" class="btn btn-outline-success mt-3">Quem Sou</a>
                        </div>
                    </div>
                </div>
                <!-- Palestrante 6 Maria Flavia Bastos  -->
                <div class="col-md-4">
                    <div class="card shadow service-card">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon bg-info text-white mx-auto">
                                <i class="fas fa-laptop-code fa-2x"></i>
                            </div>
                            <img src="maria flavia bastos.jfif" alt="">
                            <h3 class="card-title h5 mb-3">Maria Flávia Bastos</h3>
                            <p class="card-text">Ampliando seus conhecimentos e suas habilidades.</p>
                            <a href="#" class="btn btn-outline-info mt-3">Quem Sou</a>
                        </div>


    

                        
                    </div>
                </div>

        





    </section>
    <section id="equipe" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Informações sobre o evento.</h2>
            <div class="row text-center">
               
                    </div>
                </div>
            </div>
        </div>

                        
                </div>
            </div>
        </div>
    </section>
    
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <div class="container">
        <div class="row gy-4">
            <div class="col-md-4">
                <h5 class="text-white mb-3">ConsultTech</h5>
                <p class="text-muted mb-3">nome:<br>
    Data: 14 a 19 de Abril de 2025 <br>
    "local" => "Status Eventos-Varginha",
    "descrição" => "Evento focado para mostrar como funciona a Inatel e os nossos conteudos".</p>
                <div class="social-icons">
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-md-2">
                <h5 class="text-white mb-3">Links</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Home</a></li>
                    <li class="mb-2"><a href="#servicos" class="text-muted text-decoration-none">Serviços</a></li>
                    <li class="mb-2"><a href="#sobre" class="text-muted text-decoration-none">Sobre</a></li>
                    <li class="mb-2"><a href="#equipe" class="text-muted text-decoration-none">Equipe</a></li>
                    <li><a href="#contato" class="text-muted text-decoration-none">Contato</a></li>
                </ul>
            </div>

            Análise do Código do Site
            Nosso site profissional utiliza os seguintes elementos e recursos do Bootstrap:

            <div class="col-md-3">
                <h5 class="text-white mb-3">Serviços</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Estratégia de Negócios</a>
                    </li>
                    <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Gestão de Pessoas</a></li>
                    <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Transformação Digital</a>
                    </li>
                    <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Consultoria Financeira</a>
                    </li>
                    <li><a href="#" class="text-muted text-decoration-none">Marketing Estratégico</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5 class="text-white mb-3">Contato</h5>
                <ul class="list-unstyled text-muted">
                    <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i> Av. Paulista, 1000 - São Paulo</li>
                    <li class="mb-2"><i class="fas fa-phone me-2"></i> (11) 5555-5555</li>
                    <li class="mb-2"><i class="fas fa-envelope me-2"></i> contato@consulttech.com.br</li>
                </ul>
            </div>
        </div>
        <hr class="my-4 bg-secondary">
        <div class="text-center text-muted">
            <small>&copy; 2025 ConsultTech. Todos os direitos reservados.</small>
        </div>
    </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
