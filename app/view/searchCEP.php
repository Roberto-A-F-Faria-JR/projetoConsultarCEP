<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search CEP</title>
  <link rel="stylesheet" href="../../assets/css/style.css">
  <link rel="shortcut icon" href="../../assets/img/icon.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.7-beta.14/jquery.inputmask.min.js"></script>
</head>

<body>
  <main>
    <section class="container">
      <div class="row">
        <div class="text-center" id="center">
          <form class="form g-3">

            <div class="col-auto">
              <label for="numberCEP" class="label-control" id="labelNumberCEP">Digite o CEP:</label>
              <input type="number" class="form-control" id="numberCEP" name="numberCEP" placeholder="01001000" oninput="validarNumero(this)">
            </div>

            <div class="col-auto">
              <button type="button" id="submit" class="btn btn-primary mb-3">Consultar</button>
              <a href="../../index.php" class="btn btn-secondary mb-3">Voltar</a>
            </div>

            <div id="divResponse"></div>

          </form>
        </div>
      </div>
    </section>
  </main>

  <script src="../../assets/js/main.js"></script>
</body>

</html>