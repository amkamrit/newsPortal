<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Contact;

class ContactController extends Controller
{
	

    public function index(){

    	$contact=Contact::all();

    	return view('Admin.Contact.index')->with('contact', $contact);
    }
    public function create(){

    	return view('Admin.Contact.create');
    }
    public function store(Request $request){

    	$contacts=new Contact;
    	$contacts->name=$request->name;
    	$contacts->address=$request->address;
    	$contacts->zipcode=$request->zipcode;
    	$contacts->postboxnumber=$request->postboxnumber;
    	$contacts->pannumber=$request->pannumber;
    	$contacts->mobilenumber=$request->mobilenumber;
    	$contacts->officenumber=$request->officenumber;
    	$contacts->website=$request->website;

    	$contacts->save();

    	$contact=Contact::all();

    	return view('Admin.Contact.index')->with('contact', $contact);
    }
    public function edit($id){
    	$concat=Contact::find($id);
    	return view('Admin.Contact.edit')->with('contacts', $concat);
    }
    public function update(Request $request , $id){
    	$contacts=Contact::find($id);

    	$contacts->name=$request->input('name');
    	$contacts->address=$request->input('address');
    	$contacts->zipcode=$request->input('zipcode');
    	$contacts->postboxnumber=$request->input('postboxnumber');
    	$contacts->pannumber=$request->input('pannumber');
    	$contacts->mobilenumber=$request->input('mobilenumber');
    	$contacts->officenumber=$request->input('officenumber');
    	$contacts->website=$request->input('website');

    	$contacts->save();

    	$contact=Contact::all();

    	return view('Admin.Contact.index')->with('contact', $contact);
    }
    public function destroy($id){
    	$contact = Contact::find($id);

        $contact->delete();

       $contact=Contact::all();

    	return view('Admin.Contact.index')->with('contact', $contact);
    }
}
