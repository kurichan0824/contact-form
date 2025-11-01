<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    { $tel = $request->tel1 . '-' . $request->tel2 . '-' .     $request->tel3;
    $contact = $request->only(['last_name','first_name','gender','email','tel1','tel2','tel3','address','building','category_id','detail']);

    $contact['tel'] =$tel;
    return view('confirm', compact('contact'));
    }

    public function store(Request $request){
      $contact = $request->only(['last_name','first_name','gender','email','tel1','tel2','tel3','address','building','category_id','detail']);
      Contact::create($contact);
      return view('thanks');
    }
}