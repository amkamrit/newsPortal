<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\About;
use App\Model\Admin\Contact;
use App\Model\Admin\Gallary;
use App\Model\Admin\Service;
use App\Model\Admin\Socialmedia;
use App\Model\Admin\Post;
use App\Model\Admin\Menu;
use App\Model\Admin\SubMenu;

class SiteController extends Controller
{
    public function aboutIndex()
    {
    	$abouts=About::all();
    	$contacts=Contact::all();
    	$gallarys=Gallary::all();
    	$Socialmedias=Socialmedia::all();
        $menus=Menu::all();
        $submenu=SubMenu::all();

        $headlines = Post::whereIn('indexing', [1])
            ->limit(8)
            ->orderBy('created_at', 'desc')->get();

        $news=Post::whereIn('indexing', [2])
            ->limit(4)
            ->orderBy('created_at','desc')->get();
        $newsOne=Post::whereIn('indexing', [2])
            ->limit(1)
            ->orderBy('created_at','asc')->get();

        $tecnologys=Post::whereIn('indexing',[3])
        ->limit(4)
        ->orderBy('created_at','desc')->get();


        $tecnologyOnes=Post::whereIn('indexing',[3])
        ->limit(1)
        ->orderBy('created_at','asc')->get();

        $newsLists=Post::whereIn('indexing',[1,2,3,4,5,6])
        ->limit(8)
        ->orderBy('created_at','desc')->get();

        $intreviews=Post::whereIn('indexing',[4])
        ->limit(1)
        ->orderBy('created_at','desc')->get();

        $entertiments=Post::whereIn('indexing', [5])
        ->limit(4)
        ->orderBy('created_at','desc')->get();

        $entertimentOnces=Post::whereIn('indexing', [5])
        ->limit(1)
        ->orderBy('created_at','asc')->get();

        $sports=Post::whereIn('indexing', [6])
        ->limit(4)
        ->orderBy('created_at','desc')->get();

        $sportOnces=Post::whereIn('indexing', [5])
        ->limit(1)
        ->orderBy('created_at','asc')->get();

        $randomNews=Post::whereIn('indexing', [5])
        ->limit(4)
        ->orderBy('created_at','asc')->get();

    	return view('index')
    	->with('about', $abouts)
    	->with('contact', $contacts)
    	->with('gallary', $gallarys)
        ->with('menu', $menus)
        ->with('submenu', $submenu)
        ->with('headline', $headlines)
        ->with('newss', $news)
        ->with('newsOnes', $newsOne)
        ->with('tecnology', $tecnologys)
        ->with('tecnologyOne', $tecnologyOnes)
        ->with('newsList' ,$newsLists)
        ->with('intreview', $intreviews)
        ->with('entertiment', $entertiments)
        ->with('entertimentOnce', $entertimentOnces)
        ->with('sport', $sports)
        ->with('sportOnce', $sportOnces)
        ->with('randomNew', $randomNews)
    	->with('Socialmedia', $Socialmedias);
    }
    public function singlePage(){


        $abouts=About::all();
        $contacts=Contact::all();
        $gallarys=Gallary::all();
        $Socialmedias=Socialmedia::all();
        $menus=Menu::all();
        $submenu=SubMenu::all();

        return view('Frontend.single')
        ->with('about', $abouts)
        ->with('contact', $contacts)
        ->with('gallary', $gallarys)
        ->with('menu', $menus)
        ->with('Socialmedia', $Socialmedias)
        ->with('submenu', $submenu);
    }
    public function categoryPage(){

        $abouts=About::all();
        $contacts=Contact::all();
        $gallarys=Gallary::all();
        $Socialmedias=Socialmedia::all();
        $menus=Menu::all();
        $submenu=SubMenu::all();

      // $headlines = Post::whereIn('indexing', [$id])
      //       ->orderBy('created_at', 'desc')->get();  

    return view('Frontend.categoryPage')
        ->with('about', $abouts)
        ->with('contact', $contacts)
        ->with('gallary', $gallarys)
        ->with('menu', $menus)
        ->with('Socialmedia', $Socialmedias)
        ->with('submenu', $submenu);
    }
}
