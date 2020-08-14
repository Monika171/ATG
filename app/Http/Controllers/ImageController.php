<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Album;

class ImageController extends Controller
{
    public function index(){
		
		$images = Image::get();
		return view('photogallery.index',compact('images'));
		
	}
	 public function album(){
		
		 //return $albums;
        $albums = Album::with('images')->get();
        return view('photogallery.albums',compact('albums'));
    }
	    public function show($id){
        $albums = Album::findOrFail($id);
        return view('photogallery.gallery',compact('albums'));
		//return $albums;
    }
	
	  public function store(Request $request){
		
    $this->validate($request,[
            'album'=>'required|min:3|max:50',
            'image'=>'required'
        ]);

    	$album = Album::create(['name'=>$request->get('album')]);
    	if($request->hasFile('image')){
    		foreach($request->file('image') as $image){
    			$path = $image->store('uploads','public');
    			Image::create([
    				'name'=> $path,
    				'album_id'=>$album->id
    			]);
    		}
    	}
        



       return "<div class='alert alert-success'>Album created successfully!</div>";
	
	}
	
	    public function destroy()
    {
        $id = request('id');
		//dd($id);
        $image = Image::findOrFail($id);
        $filename = $image->name;
        $image->delete();
        \Storage::delete('public/'.$filename);
        return redirect()->back()->with('message','Image deleted successfully!');

    }
	
	    public function addImage(Request $request){
        $this->validate($request,[
            'image'=>'required'
        ]);
        $albumId= request('id');
        if($request->hasFile('image')){
            foreach($request->file('image') as $image){
                $path = $image->store('uploads','public');
                Image::create([
                    'name'=> $path,
                    'album_id'=>$albumId
                ]);
            }
        }
        return redirect()->back()->with('message','Images added successfully!');

    }
	
}
