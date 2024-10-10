<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar</title>
</head>
<body>
     <h1>  Listar   veiculos</h1>

      {{-- Verificar se existe a sessão success e imprimir o valor --}}
    @if (session('success'))
      <div class="alert alert-success m-3" role="alert">
          {{ session('success') }}
      </div>
    @endif

    <div class="card-body">
      <table class="table">
          <thead>
              <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Placa</th>
                  <th scope="col">Status</th>
                  <th scope="col">alocado_em</th>
                  <th scope="col">liberado_em</th>
              </tr>
          </thead>
          <tbody>
              @forelse ($veiculos as $veiculo )
                  <tr>
                      <th>{{ $veiculo->id }}</th>
                      <td>{{ $veiculo->placa }}</td>
                      <td>{{ $veiculo->status }}</td>
                      <td>{{ $veiculo->alocado_em }}</td>
                      <td>{{ $veiculo->liberado_em }}</td>
                 </tr>
              @empty
                  <span style="color: #f00;">Nenhum veiculo cadastrado!</span><br>
                  <a href="{{ route('logout') }}" class="btn btn-warning btn-sm me-1">Contactar administrador</a>
              @endforelse
          </tbody>
      </table>
  </div>
</div>

</body>
</html>
