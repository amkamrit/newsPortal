<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Menu;
use DB;

class MenuController extends Controller
{
    public function index(){
    	$menus=DB::table('menus')->paginate(8);

    	return view('Admin.Menu.index')->with('menu', $menus);
    }
    public function create(){

    	return view('Admin.Menu.create');
    }
    public function store(Request $request){

    	$menu = new Menu;
    	$menu->name=$request->name;
    	$menu->description=$request->description;
    	$menu->status=0;

    	$menu->save();
    	$menus=DB::table('menus')->paginate(8);

    	return view('Admin.Menu.index')->with('menu', $menus);

    }
    public function edit($id){
    	$menus=Menu::find($id);

    	return view('Admin.Menu.edit')->with('menu', $menus);
    }
    public function update(Request $request, $id){
    	$menu=Menu::find($id);

    	$menu->name=$request->input('name');
    	$menu->description=$request->input('description');
    	$menu->status=$request->input('status');

    	$menu->save();

    	$menus=DB::table('menus')->paginate(8);

    	return view('Admin.Menu.index')->with('menu', $menus);
    }
}
