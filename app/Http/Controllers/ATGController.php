<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\AtgMail;
use App\atg;



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
        return view('atg.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
         //Create Post
              

        $request->validate([
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
        Mail::to($email)->send(new AtgMail($user));
        return redirect('/atg')->with('success', 'New Record Successfully Added');
    

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
