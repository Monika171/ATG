<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\AtgMail;
use App\atg;
use App\Country;
use App\State;
use App\City;



class ATGController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return atg::all();
		
        $atgrecord = atg::orderBy('created_at','desc')->get();
        return view('atg.index')->with('atgrecord',$atgrecord);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$countries = Country::all()->pluck('name','id');
		$p_cities = City::where('country_id','101')->pluck('name','id');
        return view('atg.create', compact('countries','p_cities'));
		//return view('atg.create');
		//country_id
         
    }
	
	public function getStates($id)
	{
		$states = State::where('country_id',$id)->pluck('name','id');
		
		//$states = State::where('country_id',$id)->pluck('name','id')->orderBy('name','asc')->get();
		return json_encode($states);
		
		
	}
	
		public function getCities($id)
	{
		$cities = City::where('state_id',$id)->pluck('name','id');
		return json_encode($cities);
		
		
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $request->validate([
	 
		'c_end_date'=>'required_without:end_date',
		
		]);
		
		  $end_date = request('end_date');
		    $c_end_date = request('c_end_date');
		if($end_date)
		{ dd($end_date);
		}
		else
		{dd($c_end_date);}
         //Create Post
              

        /*$request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|string|email|max:255',
            'pincode' => 'required|numeric|digits_between:6,6',
        ]);
        
        $input = $request->all();
        $atg   = atg::firstOrCreate(array('name' => $input['name'], 'email' => $input['email'], 'pincode' => $input['pincode']));
        $email = $input['email'];
        $user = ([
            'name' => $input['name'],
            'email' => $input['email'],
            'pincode' => $input['pincode'],
            ]);
       // Mail::to($email)->send(new AtgMail($user));
        return redirect('/atg')->with('success', 'New Record Successfully Added');

       //return response()->json(["message" => "record created"], 201);*/
    

       }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
