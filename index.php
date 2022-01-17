<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funcionários</title>
  <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
  <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<style>
.mdc-text-field--filled:not(.mdc-text-field--disabled) {
  background-color: white;
}

form {
  text-align: center;
}

h3 {
  text-align: center;
}
</style>

<body>
  <div class="container">
    <h3>Coloque o CPF do funcionário: </h3>
    <form class="" action="funcionario.php" method="POST">
      <label class="mdc-text-field mdc-text-field--filled">
        <span class="mdc-text-field__ripple"></span>
        <!-- <span class="mdc-floating-label" id="my-label-id">Coloque o ID</span> -->
        <input name="cpf" class="mdc-text-field__input" type="text" aria-labelledby="my-label-id" input type="text"
          class="form-control" onkeypress="$(this).mask('000.000.000-00');">
        <span type="number" class="mdc-line-ripple"></span>
      </label>
      </script>
      <div class="mdc-touch-target-wrapper">
        <button class="mdc-button mdc-button--raised">
          <span type="submit" class="mdc-button__label">Procurar</span>
        </button>
      </div>
    </form>
  </div>
</body>

</html>