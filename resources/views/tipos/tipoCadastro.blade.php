<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>CADASTRO DOS TIPOS</title>
</head>
<body>
<div class="container">
<form method="POST" action="/tipos/cadastroTipos/store">
<input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">NOME DO TIPO</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="NOME DO TIPO" name="nome" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  <button type="submit" class="btn btn-primary">CADASTRAR</button>
  <a class="btn btn-primary" href="/tipos">VOLTAR</a>
</form>
</div>
</body>
</html>
