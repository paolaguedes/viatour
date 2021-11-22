<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>viatour</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap"
      rel="stylesheet"
    />
  <link rel="stylesheet" href="../css/pageSucesso.css" />
  <link rel="shortcut icon" href="./img/aviao.png" type="image/x-icon">
</head>
<body>
  <div class="wrapper">
  <header class="header">
        <img src="./img/logo.svg" class="header__logo">
        <nav>
          <ul class="header__menu">
            <li><a class="header__link" href="./index.php">Inicio</a></li>
          </ul>
        </nav>
  </header>

  <main class="main">
    <section class="main__msg">
      <h2 class="main__title">Seja bem vindo(a) a viatour!</h2>
      <h4>Um de nossos colaboradores entrará em contato em breve!</h4>
    </section>

    <section class="trip">
      <p class="trip__title">Que tal conhecer um pouco mais sobre alguns de nossos passeios? Escolha um destino abaixo:</p>
      <div class="trip__imgs">
       <span class="img">
        <img src="./img/1.png"/>
       </span>
       <span class="img">
        <img src="./img/2.png"/>
       </span>
       <span class="img">
        <img src="./img/3.png"/>
       </span>
      </div>
    </section>
  </main>
  
    <?php 
     include('./php/footer.php');
    ?>
  </div>
</body>
</html>