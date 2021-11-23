<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap"
      rel="stylesheet"
    />
    <title>viatour</title>
    <link rel="shortcut icon" href="./img/aviao.png" type="image/x-icon">
  </head>
  <body>
    <div class="wrapper">
      <header class="header">
        <img src="./img/logo.svg" class="header__logo">
        <nav>
          <ul class="header__menu">
            <li><a class="header__link" href="#planos">Planos</a></li>
            <li><a class="header__link" href="#sobre">Sobre nós</a></li>
            <li><a class="header__link" href="#cadastro">Cadastre-se</a></li>
          </ul>
        </nav>
      </header>
      <main>
        <section class="hero">
          <div>
            <small>Chegou a hora de tirar os sonhos do papel.</small>
          <h2 class="hero__title">
            Viaje com a <span>segurança</span> e a <span>tranquilidade</span> que
            você merece.
          </h2>
          <a href="#cadastro" class="hero__btn">Cadastre-se já</a>
          </div>
          <img src="./img/hero.png"/>
        </section>
        <section id="planos">
          <h2 class="planos__title">Conheça nossos planos</h2>
          <div  class="planos">
          <article class="planos__card">
            <img src="./img/mala.png"/>
            <h4>Viagem para o exterior</h4>
            <p>lorem ipsum dolor sit am.</p>
            <a href="#0" class="planos__btn">Saiba mais.</a>
          </article>
          <article class="planos__card">
            <img src="./img/mala.png"/>
            <h4>Viagem para o exterior</h4>
            <p>lorem ipsum dolor sit am.</p>
            <a href="#0" class="planos__btn">Saiba mais.</a>
          </article>
          <article class="planos__card">
            <img src="./img/mala.png"/>
            <h4>Viagem para o exterior</h4>
            <p>lorem ipsum dolor sit am.</p>
            <a href="#0" class="planos__btn">Saiba mais.</a>
          </article>
          <article class="planos__card">
            <img src="./img/mala.png"/>
            <h4>Viagem para o exterior</h4>
            <p>lorem ipsum dolor sit am.</p>
            <a href="#0" class="planos__btn">Saiba mais.</a>
          </article>
          </div>
          
        </section>
        <section id="sobre" class="container-sobre">
          <h2 class="sobre__title">O que falam de nós</h2>
          <div  class="sobre">
          <article class="sobre__card">
            <img src="./img/avatar.png"/>
            <p>"Com certeza o melhor investimento que fiz, indico supeer ❤"</p>
            <small>Ana Paula</small>
          </article>
          <article class="sobre__card">
            <img src="./img/avatar.png"/>
            <p>"Com certeza o melhor investimento que fiz, indico supeer ❤"</p>
            <small>Ana Paula</small>
          </article>
          <article class="sobre__card">
            <img src="./img/avatar.png"/>
            <p>"Com certeza o melhor investimento que fiz, indico supeer ❤"</p>
            <small>Ana Paula</small>
          </article>
          </div>
          
        </section>
        <section id="cadastro" class="cadastro">
          <form class="cadastro__form" action="./php/cadastro.php" method="POST">
            
          <fieldset class="cadastro__dados">
            <legend>          
              <h2>Cadastre-se grátis</h2>
            </legend>
              <label>
                Nome*
                <input type="text" name="nome" placeholder="" required/>
              </label>
              <label>
                Data de nascimento
                <input type="date" name="dt_nasc" max="<?php echo date('Y-m-d', strtotime('-18 year')); ?>" />
              </label>
              <label>
                Sexo
                <select name="sexo">
                  <option value="masculino">Masculino</option>
                  <option value="feminino">Feminino</option>
                  <option value="outro">Outro</option>
                </select>
              </label>
            </fieldset>
            <fieldset class="cadastro__contato">
              <label>
                Email*
                <input type="email" id="email" name="email" placeholder="" required/>
              </label>
              <label>
                Telefone de contato*
                <input type="tel" id="telefone" name="telefone" placeholder="" required/>
              </label>
            </fieldset>

            <label>
              CEP*
            </label>
            <input type="text" id="cep" name="cep" placeholder="" required/>
            <button id="endereco" class="cadastro__btn">Obter endereço</button>

            <fieldset class="cadastro__endereco">
              <label>
                Rua*
              <input type="text" id="rua" name="rua" placeholder="" required/>
              </label>
              <label>
                Número*
                <input type="text" name="numero" placeholder="" required/>
              </label>
              <label>
                Complemento
                <input type="text" name="complemento" placeholder="" />
               </label>
              <label>
                Cidade*
                <input type="text" id="cidade" name="cidade" placeholder="" required/>
              </label>
              <label>
                Estado*
                <input type="text" id="estado" name="estado" placeholder="" required/>
              </label>
            </fieldset>
              <div class="cadastro__btns">
                <input type="reset" value="Limpar" />
                <input class="submit" type="submit" id="submit" value="Cadastrar" />
              </div>        
          </form>
        </section>
      </main>
     <?php 
      include('./php/footer.php');
     ?>
    </div>
    <script type="module" src="./main.js"></script>
    <script type="text/javascript" src="./modules/vanilla-masker.min.js"></script>
  </body>
</html>
