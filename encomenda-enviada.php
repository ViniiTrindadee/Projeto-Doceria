<?php
$inputNome = ($_GET['nome']);
$inputTelefone = ($_GET['telefone']);
$inputEmail = ($_GET['email']);
$inputEndereco = ($_GET['endereco']);
$inputCidade = ($_GET['cidade']);
$inputEncomenda = ($_GET['encomenda']);
?>
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

  </div>
  <br>
  <main role="main" class="container">
    <div class="row">
      <div class="col-md-10 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
          Encomenda recebida!
        </h3>
        <div class="blog-post">
          <h4>Sua encomenda foi recebida com sucesso.<br>Nossa equipe de atendimento irá analisá-la em até 24 horas.</h4><br>
          <p><b>Nome:</b> <?php echo $inputNome ?></p>
          <p><b>E-mail:</b> <?php echo $inputEmail ?></p>
          <p><b>Telefone:</b> <?php echo $inputTelefone ?></p>
          <p><b>Endereço:</b> <?php echo $inputEndereco ?> - <?php echo $inputCidade ?></p>
          <p><b>Encomenda:</b> <?php echo $inputEncomenda ?></p>

        </div>

      </div>

    </div><!-- /.row -->

  </main><!-- /.container -->

  <footer class="blog-footer">
    <p>Doce de Nuvem &copy; 2023. Todos os direitos reservados.</p>
    <p>
      <a href="index.php">Voltar ao site</a>
    </p>
  </footer>
  <script src="/dist/js/bootstrap.min.js"></script>
</body>

</html>