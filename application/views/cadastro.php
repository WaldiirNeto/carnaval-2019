<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Carnaval 2019 :: Cadastro</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="https://cdn.rawgit.com/PascaleBeier/bootstrap-validate/v2.1.3/dist/bootstrap-validate.js" ></script>
  <script src="<?= base_url('res/js/cadastro.js') ?>" charset="utf-8"></script>
</head>
<body>
  <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">Sobre</h4>
              <p class="text-muted">
                Informações sobre o projeto
              </p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contato</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">92 00000-0000</a></li>
                <li><a href="#" class="text-white">92 00000-0000</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <strong>Carnaval 2019</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Cadastro de Bloco</h1>
          <p class="lead text-muted">Insira as informações pedidas abaixo</p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
          <form id="form-cadastro" novalidate>

            <div class="form-row">
              <div class="form-group col-md-12 col-sm-12 col-xs-12">
                <label for="nome_bloco">Nome do bloco</label>
                <input type="text" name="nome_bloco" class="form-control">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-4 col-sm-6 col-xs-12">
                <label for="nome_responsavel">Nome do responsável</label>
                <input type="text" name="nome_responsavel" class="form-control">
              </div>

              <div class="form-group col-md-4 col-sm-6 col-xs-12">
                <label for="telefone_responsavel">Telefone do responsável</label>
                <input type="text" name="telefone_responsavel" class="form-control">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-4 col-sm-6 col-xs-12">
                <label for="nome_proprietario">Nome do proprietário</label>
                <input type="text" name="nome_proprietario" class="form-control">
              </div>

              <div class="form-group col-md-4 col-sm-6 col-xs-12">
                <label for="cpf_proprietario">CPF do proprietário</label>
                <input type="text" name="cpf_proprietario" class="form-control">
              </div>

              <div class="form-group col-md-4 col-sm-6 col-xs-12">
                <label for="email_proprietario">Email do proprietário</label>
                <input type="text" name="email_proprietario" class="form-control">
              </div>

              <div class="form-group col-md-4 col-sm-6 col-xs-12">
                <label for="telefone_proprietario">Telefone do proprietário</label>
                <input type="text" name="telefone_proprietario" class="form-control">
              </div>

              <div class="form-group col-md-4 col-sm-6 col-xs-12">
                <label for="endereco_proprietario">Endereço do proprietário</label>
                <input type="text" name="endereco_proprietario" class="form-control">
              </div>

            </div>

            <div class="form-row">
              <div class="form-group col-md-4 col-sm-6 col-xs-12">
                <label for="local">Local do evento</label>
                <input type="text" name="local" class="form-control">
              </div>

              <div class="form-group col-md-4 col-sm-6 col-xs-12">
                <label for="endereco_concentracao">Local da concentração</label>
                <input type="text" name="endereco_concentracao" class="form-control">
              </div>

              <div class="form-group col-md-4 col-sm-6 col-xs-12">
                <label for="endereco_dispersao">Local da concentração</label>
                <input type="text" name="endereco_dispersao" class="form-control">
              </div>

              <div class="form-group col-md-12 col-sm-12 col-xs-12">
                <label for="intinerario">Intinerário</label>
                <input type="text" name="intinerario" class="form-control">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-3 col-sm-3 col-xs-12">
                <label for="publico_qtd">Público Total</label>
                <input type="text" name="publico_qtd" class="form-control" required>
              </div>

              <div class="form-group col-md-3 col-sm-3 col-xs-12">
                <label for="seguranca_qtd">Quantidade de seguranças</label>
                <input type="text" name="seguranca_qtd" class="form-control" required>
              </div>

              <div class="form-group col-md-3 col-sm-3 col-xs-12">
                <label for="banheiro_qtd">Quantidade de banheiros</label>
                <input type="text" name="banheiro_qtd" class="form-control" required>
              </div>

              <div class="form-group col-md-3 col-sm-3 col-xs-12">
                <label for="bombeiro_qtd">Quantidade de bombeiros</label>
                <input type="text" name="bombeiro_qtd" class="form-control" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-3 col-sm-3 col-xs-12">
                <p>Fogos de artifício?</p>
                <div class="form-check form-check-inline">
                  <input type="radio" class="form-check-input" name="fogos" id="fogos-sim" value="1">
                  <label class="form-check-label" for="fogos-sim">SIM</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" class="form-check-input" name="fogos" id="fogos-nao" value="0">
                  <label class="form-check-label" for="fogos-nao">NÃO</label>
                </div>
              </div>

              <div class="form-group col-md-3 col-sm-3 col-xs-12">
                <p>Palco?</p>
                <div class="form-check form-check-inline">
                  <input type="radio" class="form-check-input" name="palco" id="palco-sim" value="1">
                  <label class="form-check-label" for="palco-sim">SIM</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" class="form-check-input" name="palco" id="palco-nao" value="0">
                  <label class="form-check-label" for="palco-nao">NÃO</label>
                </div>
              </div>

              <div class="form-group col-md-3 col-sm-3 col-xs-12">
                <p>Carro de SOM?</p>
                <div class="form-check form-check-inline">
                  <input type="radio" class="form-check-input" name="carro_som" id="carro_som-sim" value="1">
                  <label class="form-check-label" for="carro_som-sim">SIM</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" class="form-check-input" name="carro_som" id="carro_som-nao" value="0">
                  <label class="form-check-label" for="carro_som-nao">NÃO</label>
                </div>
              </div>
            </div>

            <button class="btn btn-primary">
              Enviar Solicitação
            </button>
          </form>
        </div>
      </div>

    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Ir para cima</a>
        </p>
        <p>&copy; SSP-AM</p>
      </div>
    </footer>
</body>
</html>
