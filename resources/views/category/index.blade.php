@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <form action="{{route('category.store')}}" method="post">@csrf
            <div class="card">
                <div class="card-header">All Category</div>

                <div class="card-body">
                    @foreach($categories as $category)
                    <p>
                      {{$category->name}}
                    </p>
                    @endforeach
              </div>

            </div>
          </form>
        </div>
    </div>
</div>
@endsection
