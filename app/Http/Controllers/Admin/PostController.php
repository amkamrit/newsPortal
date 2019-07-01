<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Post;
use App\Model\Admin\Menu;
use App\Model\Admin\SubMenu;
use DB;
use Image;
use Redirect;

class PostController extends Controller
{
    public function index(){

    	$posts=DB::table('posts')->paginate(8);

    	return view('Admin.Post.index')->with('post', $posts);
    }
    public function create(){
    	$menu=Menu::all();
    	$submenu=SubMenu::all();

    	return view('Admin.Post.create')
    	->with('menu', $menu)
    	->with('submenu', $submenu);
    }
    public function store(Request $request){

        $post = new Post;

        $post->name=$request->name;
        $post->description=$request->description;
        $post->status=0;
        $post->cid=$request->cid;
        $post->scid=$request->scid;
        $post->publicdate=$request->publicdate;
        
        if ($request->hasFile('image')) {

            $file=$request->file('image');
            $file_name=time().'.'. $file->getClientOriginalExtension();
            $location=('image/' .$file_name);
            Image::make($file)->resize(800, 500)->save($location);
            $post->image=$file_name;
        }
        $post->save();

        $posts=DB::table('posts')->paginate(8);

        return view('Admin.Post.index')->with('post', $posts);
    }
    public function show($id){

        $post=Post::find($id);

        return view('Admin.Post.show')->with('posts', $post);
    }
    public function edit($id){
        $post=Post::find($id);
        $menu=Menu::all();
        $submenu=SubMenu::all();

        return view('Admin.Post.edit')
        ->with('post', $post)
        ->with('menu', $menu)
        ->with('submenu', $submenu);
    }
    public function update(Request $request ,$id){

        $post=Post::find($id);
        $post->name=$request->input('name');
        $post->description=$request->input('description');
        $post->status=$request->input('status');
        $post->cid=$request->input('cid');
        $post->scid=$request->input('scid');

          if ($request->hasFile('image')) {

            $file=$request->file('image');
            $file_name=time().'.'. $file->getClientOriginalExtension();
            $location=('image/' .$file_name);
            Image::make($file)->resize(800, 500)->save($location);
            $post->image=$file_name;
        }
        $post->save();

        $posts=DB::table('posts')->paginate(8);

        return view('Admin.Post.index')->with('post', $posts);
    }
    public function indexNews(){

        $headlines = Post::whereIn('indexing', [1])
            ->limit(100)
            ->orderBy('created_at', 'desc')->get();

        $news = Post::whereIn('indexing', [2])
            ->limit(100)
            ->orderBy('created_at', 'desc')->get();

        $technologys = Post::whereIn('indexing', [3])
            ->limit(100)
            ->orderBy('created_at', 'desc')->get();

        $intreviews = Post::whereIn('indexing', [4])
            ->limit(100)
            ->orderBy('created_at', 'desc')->get();
        $enteredments = Post::whereIn('indexing', [5])
            ->limit(100)
            ->orderBy('created_at', 'desc')->get();

        $sports = Post::whereIn('indexing', [6])
            ->limit(100)
            ->orderBy('created_at', 'desc')->get();


        return view('Admin.indexNews.index')
        ->with('headline' ,$headlines)
        ->with('new' ,$news)
        ->with('technology' ,$technologys)
        ->with('intreview' ,$intreviews)
        ->with('enteredment' ,$enteredments)
        ->with('sport' ,$sports);
    }
    public function add($id){

        $posts=DB::table('posts')->paginate(8);

        return view('Admin.indexNews.add')
        ->with('id', $id)
        ->with('post', $posts);
    }
    public function indexingUpload( Request $request ,$id){

        $post=Post::find($id);

        $post->indexing=$request->input('indexing');

        $post->save();
        return Redirect::back()->with('Message', 'Succefully Add');

    }
        public function indexingRemove( Request $request ,$id){

        $post=Post::find($id);

        $post->indexing=0;

        $post->save();
        return Redirect::back()->with('Message', 'Succefully Add');

    }
}
