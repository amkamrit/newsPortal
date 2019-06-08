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
    	return view('index');
    }
}
