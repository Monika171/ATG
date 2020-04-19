
 
 @extends('layouts.app')
 @section('content')
 <div class="text-center">
 <h3>
Hi {{$data['name']}}, welcome to ATG.
Your Account Details are: <br>
</h3>


 <h4>Email:</h4><p>{{$data['email']}}</p>
 <h4>Name: </h4><p>{{$data['name']}}</p>
 <h4>Pincode: </h4><p>{{$data['pincode']}}</p>

</div>
@endsection
