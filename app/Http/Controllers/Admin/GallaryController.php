<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Gallary;
use Image;

class GallaryController extends Controller
{
    public function index(){

    	$gallary=Gallary::all();

    	return view('Admin.Gallary.index')->with('gallary', $gallary);

    }
    public function create(){
    	return view('Admin.Gallary.create');
    }
    public function store(Request $request){

    	$gallarys= new Gallary;

    	$gallarys->name=$request->name;

    	if ($request->hasFile('image')) {

            $file=$request->file('image');
            $file_name=time().'.'. $file->getClientOriginalExtension();
            $location=('image/' .$file_name);
            Image::make($file)->resize(1500, 1500)->save($location);
            $gallarys->image=$file_name;
        }
   	
			$gallarys->save();

	$gallary=Gallary::all();

    	return view('Admin.Gallary.index')->with('gallary', $gallary);
    }
    
       public function destroy($id)
    {
        $gallary = Gallary::find($id);

        $gallary->delete();

      $gallary=Gallary::all();

    	return view('Admin.Gallary.index')->with('gallary', $gallary);
    }
}
