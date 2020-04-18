@extends('layouts.app')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
</head>
<body>
@section('content')
<div class="jumbotron text-center">
        <h1> {{$title}} </h1>
        <li>
                <a href="/atg">Records<span class="sr-only">(current)</span></a>
        </li>
        <li>
                <a href="/atg/create">Register<span class="sr-only">(current)</span></a>
        </li>
</div>
@endsection
</body>
</html>
