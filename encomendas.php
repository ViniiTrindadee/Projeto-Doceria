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
      <div class="col-md-12 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
          Encomendas
        </h3>
        <div class="blog-post">

          <form class="needs-validation" action="encomenda-enviada.php">
            <div class="row">
              <div class="col-md-7 mb-3">
                <label for="nome">Nome Completo:</label>
                <input type="text" class="form-control" id="nome" name="nome" required autofocus>
              </div>
              <div class="col-md-5 mb-3">
                <label for="telefone">Telefone:</label>
                <input type="number" class="form-control" id="telefone" name="telefone" required>
              </div>
            </div>
            <div class="mb-3">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="contato@docedenuvem.com" required>
            </div>
            <div class="row">
              <div class="col-md-8 mb-3">
                <label for="endereco">Endereço:</label>
                <input type="text" class="form-control" id="endereco" name="endereco" required>
              </div>
              <div class="col-md-4 mb-3">
                <label for="cidade">Cidade:</label>
                <input type="text" class="form-control" id="cidade" name="cidade" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 mb-12">
                <label for="encomenda">Encomenda</label>
                <textarea class="form-control" id="encomenda" placeholder="Preencha com os itens a serem encomendados" name="encomenda" rows="5" required></textarea>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-success btn-lg btn-block" type="submit">Enviar</button>
          </form>

        </div><!-- /.blog-post -->

      </div><!-- /.blog-main -->

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