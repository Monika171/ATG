@extends('layouts.app')
@section('content')
<div class="text-center">
    <h1>ATG members</h1>
    @if(count($atgrecord) > 0)
        @foreach($atgrecord as $atgr)
            
                <h3>{{$atgr->name}}</h3>
             <small>Joined on {{$atgr->created_at}}</small>
             
        @endforeach
    
    @else
        <p>No record found</p>
    @endif
</div>
@endsection