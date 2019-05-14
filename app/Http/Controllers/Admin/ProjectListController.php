<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\ProjectList;
use Image;
use DB;
class ProjectListController extends Controller
{
    public function index(){
    	$ProjectLists=ProjectList::all();

       return view('Admin.ProjectList.index')->with('ProjectList',$ProjectLists);
    }
    public function create(){
    	return view('Admin.ProjectList.create');
    }
    public function store(Request $request){
    	$ProjectList =new ProjectList;

    	$ProjectList->category=$request->category;
    	$ProjectList->subcategory=$request->subcategory;
    	$ProjectList->projectTitle=$request->projectTitle;
    	$ProjectList->description=$request->description;

    		if ($request->hasFile('coverImage')) {

            $file=$request->file('coverImage');
            $file_name=time().'.'. $file->getClientOriginalExtension();
            $location=('image/' .$file_name);
            Image::make($file)->resize(1500, 1500)->save($location);
            $ProjectList->coverImage=$file_name;
        }

    		if ($request->hasFile('file')) {

            $file=$request->file('file');
            $file_name=time().'.'. $file->getClientOriginalExtension();
            $location=('image/' .$file_name);
            $file->move($location, $file_name);
            $ProjectList->file=$file_name;
        }
        $ProjectList->save();
       
       $ProjectLists=ProjectList::all();

       return view('Admin.ProjectList.index')->with('ProjectList',$ProjectLists);

    }
    public function show($id){

    	$project= DB::table('project_lists')->find($id);

    	return view('Admin.ProjectList.show')->with('projects', $project);
    }
    public function edit($id){
    	$projects= DB::table('project_lists')->find($id);

    	return view('Admin.ProjectList.edit')->with('project', $projects);
    }
    public function update(Request $request, $id){

    	$updateData=ProjectList::find($id);

    	$updateData->category=$request->input('category');
    	$updateData->subcategory=$request->input('subcategory');
    	$updateData->projectTitle=$request->input('projectTitle');
    	$updateData->description=$request->input('description');


    		if ($request->hasFile('coverImage')) {

            $file=$request->file('coverImage');
            $file_name=time().'.'. $file->getClientOriginalExtension();
            $location=('image/' .$file_name);
            Image::make($file)->resize(1500, 1500)->save($location);
            $updateData->coverImage=$file_name;
        }

    		if ($request->hasFile('file')) {

            $file=$request->file('file');
            $file_name=time().'.'. $file->getClientOriginalExtension();
            $location=('image/' .$file_name);
            $file->move($location, $file_name);
            $updateData->file=$file_name;
        }

        $updateData->save();
         $ProjectLists=ProjectList::all();

       return view('Admin.ProjectList.index')->with('ProjectList',$ProjectLists);
    }
    public function destroy($id)
    {
        $project = ProjectList::find($id);

        $project->delete();

       $ProjectLists=ProjectList::all();

       return view('Admin.ProjectList.index')->with('ProjectList',$ProjectLists);
    }
}
