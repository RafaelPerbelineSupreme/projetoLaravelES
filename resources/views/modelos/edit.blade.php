<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>ATUALIZAÇÃO DE MODELOS</title>
</head>
<body>
<div class="container">
<form method="POST" action="{{"/modelos/editarModelo/{$modelo->id}/update"}}">
<input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">NOME</label>
    <input type="text" class="form-control" id="validationCustom01" placeholder="NOME DO MODELO" name="nome" required value="{{$modelo->nome}}">
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputState">MARCA</label>
      <select id="inputState" class="form-control" name="marca_id">
        <option selected>ESCOLHA A MARCA...</option>
        @foreach ($marcas as $marca)
        @if ($modelo->marca_id === $marca->id)
        <option selected label="Registrada: {{$marca->nome}}">{{$marca->id}}</option>
        @else
        <option label="{{$marca->nome}}">{{$marca->id}}</option>
        @endif
        @endforeach
      </select>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">ATUALIZAR</button>
  <a class="btn btn-primary" href="/modelos">VOLTAR</a>
</form>
</div>
</body>
</html>
