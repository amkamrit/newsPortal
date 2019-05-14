<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Socialmedia;

class ScialMediaController extends Controller
{
    public function index(){

    	$socialMedia=Socialmedia::all();

    	return view('Admin.SocialMedia.index')->with('socialMedia', $socialMedia);
    }
    public function create(){
    	return view('Admin.SocialMedia.create');
    }
    public function store(Request $request){

    	$socialMedia= new Socialmedia;

    	$socialMedia->linkName=$request->linkName;
    	$socialMedia->link=$request->link;

    	$socialMedia->save();

    	$socialMedia=Socialmedia::all();

    	return view('Admin.SocialMedia.index')->with('socialMedia', $socialMedia);
    }
    public function show($id)
    {
    	$socialMedia=Socialmedia::find($id);

    	return view('Admin.SocialMedia.show')->with('socialMedia', $socialMedia);
    }
    public function edit($id){

    	$socialMedia=Socialmedia::find($id);

    	return view('Admin.SocialMedia.edit')->with('socialMedia', $socialMedia);
    }
    public function update(Request $request, $id){

    	$socialMedia=Socialmedia::find($id);
    	$socialMedia->linkName=$request->input('linkName');
    	$socialMedia->link=$request->input('link');

    	$socialMedia->save();

    	$socialMedia=Socialmedia::all();

    	return view('Admin.SocialMedia.index')->with('socialMedia', $socialMedia);
    }
        public function destroy($id)
    {
        $socialMedia = Socialmedia::find($id);

        $socialMedia->delete();

       $socialMedia=Socialmedia::all();

    	return view('Admin.SocialMedia.index')->with('socialMedia', $socialMedia);
    }
}
