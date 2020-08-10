@extends('layouts.app')
@section('content')
       <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('ATG Form') }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('atg.store') }}">
                            @csrf
							
						<div class="form-group">
            
                        <label for="">End Date</label>
                    
                        <input type="text" id="date_ed" class="form-control @error('end_date') is-invalid @enderror" name="end_date" value="">
    
                            
                        <h6 style="color:rgb(33, 201, 234); font-weight: bold;">
                        <input type="checkbox" class=" @error('c_end_date') is-invalid @enderror" name="c_end_date" value="Currently working here" />
                        &nbsp;&nbsp; Currently working here
                        </h6>
                        <br />
                       @if ($errors->has('end_date'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('end_date') }}</strong>
                            </span>
                        @elseif ($errors->has('c_end_date'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('c_end_date') }}</strong>
                            </span>
                        
                        @endif
                        
                    </div>


							
							{{--<div class="form-group row">

							<label for="p_cities" class="col-md-4 col-form-label text-md-right">Preferred location</label>
							<div class="col-md-6">
							<select name="p_cities" id="p_cities" class="form-control">
								<option value="">Select City</option>
								@foreach($p_cities as $key => $value)
								<option value="{{$key}}">{{$value}}</option>
								@endforeach
							</select>
							</div>
													
							</div>

							
							<div class="form-group row">

							<label for="country" class="col-md-4 col-form-label text-md-right">Select your country</label>
							<div class="col-md-6">
							<select name="country" id="country" class="form-control">
								<option value="">Select Country</option>
								@foreach($countries as $key => $value)
								<option value="{{$key}}">{{$value}}</option>
								@endforeach
							</select>
							</div>
													
							</div>
							
														
							<div class="form-group row">

							<label for="country" class="col-md-4 col-form-label text-md-right">Select your state</label>
							<div class="col-md-6">
							<select name="state" id="state" class="form-control">
								<option value="">Select state</option>
							
							</select>
							</div>
													
							</div>
							
							<div class="form-group row">

							<label for="country" class="col-md-4 col-form-label text-md-right">Select your city</label>
							<div class="col-md-6">
							<select name="city" id="city" class="form-control">
								<option value="">Select city</option>
							
							</select>
							</div>
													
							</div>
							
							
    
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nme') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="pincode" class="col-md-4 col-form-label text-md-right">{{ __('Pincode') }}</label>
                                <div class="col-md-6">
                                    <input id="pincode" type="text" class="form-control @error('pincode') is-invalid @enderror" name="pincode" required >
                                    @error('pincode')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>Please enter valid 6 digit pincode</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>--}}

    
                             <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Submit') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
@endsection

{{--
<!--<script src="{{asset('js/jquery.js')}}"></script>-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	
	//console.log('it works')
	$('select[name="country"]').on('change', function(){
		
		var country_id = $(this).val();
		if(country_id){
			//console.log(country_id);
			$.ajax({
				
				url: '/getStates/'+country_id,
				type: 'GET',
				dataType: 'json',
				success: function(data){
					console.log(data);
					
					$('select[name="state"]').empty();
					$.each(data, function(key, value){
						
						$('select[name="state"]').append('<option value="'+key+'">'+value+'</option>');
					});
					
				}
				
			});

		}
		
		else{
			
			$('select[name="state"]').empty();
		}
		
	});
		
		$('select[name="state"]').on('change', function(){
		
		var state_id = $(this).val();
		if(state_id){
			//console.log(country_id);
			$.ajax({
				
				url: '/getCities/'+state_id,
				type: 'GET',
				dataType: 'json',
				success: function(data){
					console.log(data);
					
					$('select[name="city"]').empty();
					$.each(data, function(key, value){
						
						$('select[name="city"]').append('<option value="'+key+'">'+value+'</option>');
					});
					
				}
				
			});

		}
		
		else{
			
			$('select[name="city"]').empty();
		}
		
		//console.log('LISTENING')
		
	});
	
});

'<option value="'+key+ '" {{Auth::user()->profile->state=="'+value+'"?\'selected\':\'\'}}>'+ value+' </option>'

{{Auth::user()->profile->experience_years==$i?'selected':''}}

append('<option value="'+key+'">'+value+'</option>')
</script>

--}}



























