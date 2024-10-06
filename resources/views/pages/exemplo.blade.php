@extends ('layouts.template')

<h1>  Programa que vai receber o template</h1>
@csrf
@section ('content')
<h2>  Programa que recebeu o template</h2>
<br>
    {{ 'este corpo' }} <br>
    {{ date('d/m/y') }} <br>
@endsection

