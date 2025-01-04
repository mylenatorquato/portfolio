<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IF=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://cdn.lineicons.com/5.0/lineicons.css">

    <!-- SWIPER CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper-bundle.min.css">

    <title>MYLENA TORQUATO - PORTFOLIO</title>
</head>

<body>
    <!-- HEADER -->
    <header class="header" id="header">
        <nav class="nav navcontainer padd-15">
            <a href="#" class="nav-logo">
                <h2>Portfolio</h2>
            </a>
            <div class="nav-menu" id="nav-menu">
                <ul class="nav-list">
                    <li class="nav-item"><a href="#home" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
                </ul>
                <div class="nav-btns">
                    <i class="lni lni-pallet change-theme" id="theme-button"></i>
                    <div class="nav-toggle" id="nav-toggle">
                        <i class="lni lni-grid-alt"></i>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- MAIN -->
    <main class="main-content">
        <section class="home" id="home">
            <div class="container">
                <div class="intro">
                    <img src="assets\img\foto perfil.jpg" alt="Foto de Perfil">
                    <h1>Mylena Torquato</h1>
                    <span>DevOps</span>
                    <ul class="social-icons">
                        <li><a href="https://www.linkedin.com/in/mylena-torquato/" target="_blank"><i class="lni lni-linkedin"></i></a></li>
                        <li><a href="https://github.com/mylenatorquato" target="_blank"><i class="lni lni-github"></i></a></li>
                    </ul>
                    <div>
                        <a href="#" class="btn btn-default">Hire me!</a>
                    </div>
                    <div class="scroll-down">
                        <a href="#about" class="mouse-wrapper">
                            <span>Scroll Down</span>
                            <span class="mouse">
                                <span class="wheel"></span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

<!-- ABOUT -->
<section class="about section" id="about">
    <div class="container">
        <h2 class="section-title padd-15">About Me</h2>
        <div class="row">
            <div class="about-img padd-15">
                <!-- AVATAR IMG -->
                <img src="assets/img/k8s.png" alt="Kubernetes">
            </div>
            <div class="about-content padd-15">
                <div class="rounded">
                    <div class="row">
                        <div class="about-text padd-15">
                            <!-- texto -->
                            <p>
                                I am an enthusiastic and driven professional with a passion for cloud computing, Kubernetes, and DevOps. My journey in IT began at SENAI Jandira, where I developed a strong foundation in systems administration, programming, and IT monitoring. Since then, I have been dedicated to exploring innovative solutions and continuously enhancing my skill set. 
                            </p>
                            <a href="assets\cv\CV_MYLENA_TORQUATO (1).pdf" class="btn btn-default " download>Download CV</a>
                        </div>
                        <div class="skills padd-15">
                            <div class="skill-item">
                                <h4>Linux</h4>
                                <div class="progress">
                                    <div class="progress-in" style="width: 100%; background-color: red;">

                                    </div>
                                </div>
                            </div>
                            <div class="skill-item">
                                <h4>Container</h4>
                                <div class="progress">
                                    <div class="progress-in" style="width: 100%; background-color: red;">

                                    </div>
                                </div>
                            </div>
                            <div class="skill-item">
                                <h4>AWS</h4>
                                <div class="progress">
                                    <div class="progress-in" style="width: 100%; background-color: red;">
                                    </div>
                                </div>
                            </div>
                            <div class="skill-item">
                                <h4>Python</h4>
                                <div class="progress">
                                    <div class="progress-in" style="width: 100%; background-color: red;">

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

    <!-- PHP SECTION -->
    <section class="php-section">
        <div class="container">
            <?php
            ini_set("display_errors", 1);
            error_reporting(E_ALL);

            // Configurações do banco de dados
            $servername = "localhost";
            $username = "root";
            $password = "Senha123";
            $database = "meubanco";

            // Conexão com o banco de dados
            $link = new mysqli($servername, $username, $password, $database);

            // Verificar conexão
            if ($link->connect_error) {
                die("<p>Erro na conexão: " . $link->connect_error . "</p>");
            }
            echo "<p>Conexão bem-sucedida ao banco de dados!</p>";

            // Gerar dados aleatórios
            $valor_rand1 = rand(1, 999);
            $valor_rand2 = strtoupper(substr(bin2hex(random_bytes(4)), 1));
            $host_name = gethostname();
            $host_ip = $_SERVER['REMOTE_ADDR'];

            // Inserir dados no banco de dados
            $query = "INSERT INTO dados (id, data1, data2, hostname, ip) VALUES ('$valor_rand1', '$valor_rand2', '$valor_rand2', '$host_name', '$host_ip')";

            if ($link->query($query) === TRUE) {
                echo "<p>Novo registro criado com sucesso!</p>";
            } else {
                echo "<p>Erro ao criar registro: " . $link->error . "</p>";
            }

            // Fechar conexão
            $link->close();
            ?>
        </div>
    </section>
    </main>

    <!-- SWIPER JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

    <!-- JS -->
    <script src="assets/js/main.js"></script>
</body>
</html>
