<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\SubMenu;
use DB;
use App\Model\Admin\Menu;

class SubMenuController extends Controller
{
    public function index(){
    	$submenus=DB::table('sub_menus')->paginate(8);

    	return view('Admin.SubMenu.index')->with('submenu', $submenus);
    }
    public function create(){
    	$menus=Menu::all();

    	return view('Admin.SubMenu.create')->with('menu', $menus);
    }
    public function store(Request $request){
    	$submenu= new SubMenu;
    	$submenu->name=$request->name;
    	$submenu->description=$request->description;
    	$submenu->mainMenu=$request->mainMenu;
    	$submenu->status=0;

    	$submenu->save();
    	
    	$submenus=DB::table('sub_menus')->paginate(8);

    	return view('Admin.SubMenu.index')->with('submenu', $submenus);
    }
    public function edit($id){
        $subMenus=SubMenu::find($id);
        $menus=Menu::all();

        return view('Admin.SubMenu.edit')
        ->with('submenu', $subMenus)
        ->with('menu', $menus);
    }
    public function update(Request $request ,$id){
        $submenu=SubMenu::find($id);

        $submenu->name=$request->input('name');
        $submenu->description=$request->input('description');
        $submenu->mainMenu=$request->input('mainMenu');
        $submenu->status=$request->input('status');

        $submenu->save();
        
        $submenus=DB::table('sub_menus')->paginate(8);

        return view('Admin.SubMenu.index')->with('submenu', $submenus);
    }
}
