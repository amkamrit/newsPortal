<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Service;
use Image;
use DB;

class ServicesController extends Controller
{
        public function index(){
    	$Services=Service::all();

       return view('Admin.Services.index')->with('Service',$Services);
    }
    public function create(){
    	return view('Admin.Services.create');
    }
    public function store(Request $request){
    	$Service =new Service;


    	$Service->category=$request->category;
    	$Service->subcategory=$request->subcategory;
    	$Service->title=$request->title;
    	$Service->description=$request->description;



    		if ($request->hasFile('photo')) {

            $file=$request->file('photo');
            $file_name=time().'.'. $file->getClientOriginalExtension();
            $location=('image/' .$file_name);
            Image::make($file)->resize(1500, 1500)->save($location);
            $Service->photo=$file_name;
        }

    		if ($request->hasFile('file')) {

            $file=$request->file('file');
            $file_name=time().'.'. $file->getClientOriginalExtension();
            $location=('image/' .$file_name);
            $file->move($location, $file_name);
            $Service->file=$file_name;
        }


        $Service->save();
       
       $Services=Service::all();

       return view('Admin.Services.index')->with('Service',$Services);

    }
    public function show($id){

    	$service= DB::table('services')->find($id);

    	return view('Admin.Services.show')->with('services', $service);
    }
    public function edit($id){
    	$service= DB::table('services')->find($id);

    	return view('Admin.Services.edit')->with('services', $service);
    }
    public function update(Request $request, $id){

    	$updateData=Service::find($id);

    	$updateData->category=$request->input('category');
    	$updateData->subcategory=$request->input('subcategory');
    	$updateData->title=$request->input('title');
    	$updateData->description=$request->input('description');


    		if ($request->hasFile('photo')) {

            $file=$request->file('photo');
            $file_name=time().'.'. $file->getClientOriginalExtension();
            $location=('image/' .$file_name);
            Image::make($file)->resize(1500, 1500)->save($location);
            $updateData->photo=$file_name;
        }

    		if ($request->hasFile('file')) {

            $file=$request->file('file');
            $file_name=time().'.'. $file->getClientOriginalExtension();
            $location=('image/' .$file_name);
            $file->move($location, $file_name);
            $updateData->file=$file_name;
        }

        $updateData->save();
         $Services=Service::all();

       return view('Admin.Services.index')->with('Service',$Services);
    }
    public function destroy($id)
    {
        $Services = Service::find($id);

        $Services->delete();

       $Services=Service::all();

       return view('Admin.Services.index')->with('Service',$Services);
    }
}
