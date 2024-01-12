<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;
use App\Http\Requests\ContactRequest;
use App\Middleware\Authenticate;

class FashionablyController extends Controller
{
    public function index()
    {
        $contents= Contact::with('category')->get();
        $categories=Category::all();
        return view('index',compact('contents','categories'));
    }

    public function confirm(ContactRequest $request)
    {
        $content=$request->only([
            'category_id'
        ]);
        $tell=$request->only([
            'tell1','tell2','tell3'
        ]);
        $contact=$request->only([
            'last_name','first_name','gender','email','address','building','detail'
        ]);
        return view('confirm',compact('content','tell','contact'));
    }

    public function store(Request $request)
    {

        $contact=$request->only([
            'category_id','last_name','first_name','gender','tell','email','address','building','detail'
        ]);
        Contact::create($contact);
        if($request->input('back')=='back'){
            return redirect('/')->withInput();
        }
        return view('thanks');
    }
    public function admin()
    {
        return view('admin');
    }
}