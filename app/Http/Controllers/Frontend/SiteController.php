<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\About;
use App\Model\Admin\Contact;
use App\Model\Admin\Gallary;
use App\Model\Admin\ProjectList;
use App\Model\Admin\Service;
use App\Model\Admin\Socialmedia;

class SiteController extends Controller
{
    public function aboutIndex()
    {
    	$abouts=About::all();
    	$contacts=Contact::all();
    	$gallarys=Gallary::all();
    	$projectLists=ProjectList::all();
    	$services=ProjectList::all();
    	$Socialmedias=Socialmedia::all();
    	return view('index')
    	->with('about', $abouts)
    	->with('contact', $contacts)
    	->with('gallary', $gallarys)
    	->with('projectList', $projectLists)
    	->with('service', $services)
    	->with('Socialmedia', $Socialmedias);
    }
}
