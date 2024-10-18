<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar</title>
</head>
<body>
     <h1>  Listar usuarios</h1>

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
                <th scope="col">Nome</th>
                <th scope="col">Nacesso</th>
              </tr>
        </thead>
        <tbody>
            @forelse ($users as $usuario )
                <tr>
                    <th>{{ $usuario->id }}</th>
                    <td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->nacesso }}</td>
                  </tr>
            @empty
                <span style="color: #f00;">Nenhum usuario cadastrado!</span><br>
                <a href="{{ route('logout') }}" class="btn btn-warning btn-sm me-1">Contactar administrador</a>
            @endforelse
        </tbody>
    </table>
</div>
</body>
</html>
