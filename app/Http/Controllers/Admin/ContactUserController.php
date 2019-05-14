<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\ContactUser;

class ContactUserController extends Controller
{
    public function index(){

    	$mycline=ContactUser::all();

    	return view('Admin.MyCline.index')->with('myclines', $mycline);
    }
    public function show($id){

    	 $cline=ContactUser::find($id);

    	 return view('Admin.MyCline.show')->with('cline', $cline);
    }
     public function destroy($id)
    {
        $cline = ContactUser::find($id);

        $cline->delete();

		$mycline=ContactUser::all();

    	return view('Admin.MyCline.index')->with('myclines', $mycline);
    }
}
