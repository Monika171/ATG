
 @extends('layouts.app')
 @section('content')
 <!DOCTYPE html>
 <html>
 <head>
     <title>Welcome to ATG</title>
 </head>
 
 <body>
 <h2>Welcome to ATG {{$user['name']}}</h2>
 <br/>

 Your registered pincode is {{$user['pincode']}}
 </body>
 
 </html>

</div>
@endsection
