<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
  public function index(){
    $categories = Category::all();
    return view('contact.index',conpact('categories'));
  }

  public function confirm(ContactRequest $request)
  {
    $contact = $request->all();
    $category =Category::find($request->category_id);
    return view('contact.confirm',compact('contact','category'));
  }

  public function store(ContactRequest $request)
  {
    Contact::create($request->all());
    return view('contact.thanks')
  }
}
