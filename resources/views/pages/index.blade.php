@extends('layouts.app')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
</head>
<body>
@section('content')
<div class="jumbotron text-center">
        <h1> {{$title}} </h1>
</div>
@endsection
</body>
</html>
