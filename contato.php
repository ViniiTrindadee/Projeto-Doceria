<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <link rel="icon" href="imagens/favicon.ico">
  <title>Doceria Doce de Nuvem</title>

  <!-- Bootstrap core CSS -->
  <link href="/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <div class="container">
    <header class="blog-header py-3">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-12 text-center">
          <a class="blog-header-logo text-dark" href="#"><img src="imagens/logo.gif" alt="Logotipo"></a>
        </div>
      </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
      <nav class="nav d-flex justify-content-between">
        <a class="p-2 text-muted" href="index.php">Início</a>
        <a class="p-2 text-muted" href="historia.php">História</a>
        <a class="p-2 text-muted" href="unidades.php">Unidades</a>
        <a class="p-2 text-muted" href="promocoes.php">Promoções</a>
        <a class="p-2 text-muted" href="encomendas.php">Encomendas</a>
        <a class="p-2 text-muted" href="contato.php">Contato</a>
      </nav>
    </div>
  </div>
  <br>
  <main role="main" class="container">
    <div class="row">
      <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
          Contato
        </h3>
        <div class="blog-post">

          <form class="needs-validation" action="contato-enviado.php">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Nome Completo:</label>
                <input type="text" class="form-control" id="firstName" name="nome" required autofocus>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Telefone:</label>
                <input type="number" class="form-control" id="lastName" name="telefone" required>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="contato@docedenuvem.com" required>
            </div>
            <div class="row">
              <div class="col-md-12 mb-12">
                <label for="cc-name">Sua mensagem</label>
                <textarea class="form-control" id="cc-name" name="mensagem" placeholder="Insira uma mensagem aqui" rows="5" required></textarea>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-success btn-lg btn-block" type="submit">Enviar</button>
          </form>

        </div><!-- /.blog-post -->

      </div><!-- /.blog-main -->

      <aside class="col-md-4 blog-sidebar">
        <div class="p-3 mb-3 bg-light rounded">
          <h4 class="font-italic">Redes Sociais</h4>
          <p class="mb-0">
            <i class="fa-brands fa-square-facebook"></i> Doces de Nuvem
            <br>
            <i class="fa-brands fa-instagram"></i> doces_docedenuvem
            <br>
            <i class="fa-regular fa-envelope"></i> contato@docesdenuvem.com.br
            <br>
            <i class="fa-solid fa-phone"></i> (19) 2911-5570
          </p>
        </div>

        <div class="p-3">
          <h4 class="font-italic">Endereço</h4>
          <p>R. Alves das Garças, 466 • Morumbi • SP</p>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d467692.3957346494!2d-46.92496699850517!3d-23.681434560833374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce448183a461d1%3A0x9ba94b08ff335bae!2zU8OjbyBQYXVsbywgU1A!5e0!3m2!1spt-BR!2sbr!4v1687217807478!5m2!1spt-BR!2sbr"  height="250" style="border:#999 solid 1px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </aside><!-- /.blog-sidebar -->

    </div><!-- /.row -->

  </main><!-- /.container -->

  <footer class="blog-footer">
    <p>Doce de Nuvem &copy; 2023. Todos os direitos reservados.</p>
    <p>
      <a href="#">Voltar ao topo</a>
    </p>
  </footer>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="imagens/assets/js/vendor/jquery-slim.min.js"><\/script>')
  </script>
  <script src="imagens/assets/js/vendor/popper.min.js"></script>
  <script src="/dist/js/bootstrap.min.js"></script>
  <script src="imagens/assets/js/vendor/holder.min.js"></script>
  <script>
    Holder.addTheme('thumb', {
      bg: '#55595c',
      fg: '#eceeef',
      text: 'Thumbnail'
    });
  </script>
</body>

</html>