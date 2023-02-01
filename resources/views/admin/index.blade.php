@extends('adminlte::page')

@section('title', 'Panel')

@section('content_header')
    <h1>Panel de Control</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <div class="h1">hola</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop