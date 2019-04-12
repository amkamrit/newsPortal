<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\About;
use Image;

class AboutController extends Controller
{
    public function index(){
    	$abouts=About::all();
    	return view('Admin.About.index')
    	->with('about',$abouts);
    }
    public function create(){
    	return view('Admin.About.create');
    }
    public function store(Request $request){

    	$abouts= new About;
    	$abouts->name=$request->name;
    	$abouts->description=$request->description;

   		if ($request->hasFile('photo')) {

            $file=$request->file('photo');
            $file_name=time().'.'. $file->getClientOriginalExtension();
            $location=('image/' .$file_name);
            Image::make($file)->resize(1500, 1500)->save($location);
            $abouts->photo=$file_name;
        }
        $abouts->save();

    	    	$abouts=About::all();
    	return view('Admin.About.index')
    	->with('about',$abouts)
    	->with('success','You have successfully add about.');
    }
   public function edit($id){

   	$about=About::find($id);
   	return view('Admin.About.edit')->with('about', $about);
   }
   public function update(Request $request, $id){
   	$updateData=About::find($id);
   	$updateData->name=$request->input('name');
   	$updateData->description=$request->input('description');

   	   	if ($request->hasFile('photo')) {

            $file=$request->file('photo');
            $file_name=time().'.'. $file->getClientOriginalExtension();
            $location=('image/' .$file_name);
            Image::make($file)->resize(1500, 1500)->save($location);
            $updateData->photo=$file_name;
        }
     	$updateData->save();

    	    	$abouts=About::all();
    	return view('Admin.About.index')
    	->with('about',$abouts)
    	->with('success','You have successfully add about.');
   }
       public function destroy($id)
    {
        $about = About::find($id);

        $about->delete();

        $abouts=About::all();
    	return view('Admin.About.index')
    	->with('about',$abouts);
    }
}
