<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Post;

use DB;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index()
    {
       $gel3  =   Post::all()->sortByDesc('created_at');
       $gel2 =  About::all()->first();
       $gel =  Contact::all();

        return view('welcome',compact('gel','gel2','gel3'));
    }


    
    public function about()
    {
       $gel  = Contact::all();
       $gel2 = About::all()->first();

        return view('/pages/about',compact('gel','gel2'));
    }

    public function contact()
    {
       $gel  = Contact::all();
       $gel2 = About::all()->first();

        return view('/pages/contact',compact('gel','gel2'));
    }

    public function showPost($id)
    {
        $gel   = Contact::all();
        $gel2  = About::all()->first();
        $gel3  = Post::where('id',$id)->first();
        return view('pages.showPost',compact('gel','gel2','gel3'));
    }

    public function addPost()
    {
        $gel   = Contact::all();
        $gel2  = About::all()->first();
        return view('pages.addPost',compact('gel','gel2'));
    }


    public function addPostSend(Request $request)
    {
        $request->validate([
            'upTitle'   => 'required|string',
            'title'     => 'required|string',
            'content'   => 'required|string',
            'postImage' => 'required|mimes:jpeg,png,jpg,gif|max:5048'
        ]);


        $newImage = time(). '-' . $request->title . '.' . $request->postImage->extension();
        $request->postImage->move(public_path('images'), $newImage);

        $yarat = Post::create([

            'upTitle'   =>  $request->upTitle,
            'title'     =>  $request->title,
            'content'   =>  $request->content,
            'postImage' =>  $newImage,
            'userName'  =>  $request->userName
        ]);


        return back();
    }

}
