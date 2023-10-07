<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= url("./assets/web/styles.css");?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <header>
        
    <h1>Você pode ajudar</h1>


<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= url("./assets/web/img/slide1.jpeg");?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Compartilhe amor, alivie a dor. Sua ajuda é a esperança que muitos necessitam.</h5>
        <p>Nunca subestime o poder da sua doação. É um ato de solidariedade que aquece corações."</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= url("./assets/web/img/slide2.jpeg");?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Sua doação faz a diferença! Ajude as vítimas das enchentes a reconstruírem suas vidas.</h5>
        <p>Cada contribuição conta. Juntos, podemos aliviar o sofrimento das famílias afetadas pelas enchentes.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= url("./assets/web/img/carregandoGeladeira.jpg");?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>A generosidade é um raio de sol em meio à tempestade. Doe e faça parte da mudança.</h5>
        <p>As enchentes não escolhem vítimas. Hoje você pode ser a diferença na vida de alguém. Ajude!</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="<?= url ("/"); ?>">Página Inicial</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= url ("/ajudas"); ?>"> Doar </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= url ("/cadastro"); ?>"> Cadastre-se</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= url ("/login"); ?>"> Login </a>
  </li>
</ul>
    </header>
    
    <main>
        <?php 
            echo $this->section("content");
        ?>
    </main>

    <footer class="bg-dark text-white text-center p-3">
    <div class="container">
      <p>&copy; 2023 Doações para Enchentes</p>
    </div>
  </footer>


  <!-- Inicio dos Links do Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <!-- Fim dos Links do Bootstrap -->
</body>
</html>