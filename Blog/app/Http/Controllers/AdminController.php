<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Post;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\File;


class AdminController extends Controller
{
    //


    public function postShow()
    {
        $gel = Post::all();

        return view('/admin/posts',compact('gel'));
    }


    public function contactAbout()
    {

        $gel = About::all();
        $gel2 = Contact::all();

        return view('/admin/contactAbout',compact('gel','gel2'));
    }



    //About
    public function addAboutnew2(Request $request)
    {

        $request->validate([
            'headTitle'     => 'required|string',
            'navbarTitle'   => 'required|string',
            'upTitle'       => 'required|string',
            'title'         => 'required|string',
            'aboutTitle'    => 'required|string',
            'aboutContent'  => 'required|string',
            'aboutImage'    => 'required|mimes:jpeg,png,jpg,gif|max:5048'
        ]);

        $newImage = time() . '-' . $request->aboutTitle . '.' . $request->aboutImage->extension();
        $request->aboutImage->move(public_path('images'), $newImage);

        $abc = About::create([
            'headTitle'     =>  $request->headTitle,
            'navbarTitle'   =>  $request->navbarTitle,
            'upTitle'       =>  $request->upTitle,
            'title'         =>  $request->title,
            'aboutTitle'    =>  $request->aboutTitle,
            'aboutContent'  =>  $request->aboutContent,
            'aboutImage'    =>  $newImage
        ]);


        return back();
    }




    //Contact
    public function addContactnew(Request $request)
    {

        $request->validate([
            'email'      => 'required|string',
            'phone'      => 'required|string',
            'instagram'  => 'required|string',
            'twitter'    => 'required|string',
            'linkedin'   => 'required|string' 
        ]);

        Contact::create([
            'email'      =>  $request->email,
            'phone'      =>  $request->phone,
            'instagram'  =>  $request->instagram,
            'twitter'    =>  $request->twitter,
            'linkedin'   =>  $request->linkedin
        ]);

        return back();
    }

    public function aboutDelete($id)
    {
        $abc = About::find($id);
        $abc->delete();
        
        return redirect('admin/contactAbout');
    }


    public function aboutEditGet($id)
    {
        $gel = About::find($id);
        return view('admin.aboutEdit',compact('gel'));

    }



    public function addAboutSettingEdit(Request $request, $id)
    {

        $request->validate([
            'headTitle'     => 'required|string',
            'navbarTitle'   => 'required|string',
            'upTitle'       => 'required|string',
            'title'         => 'required|string'
        ]);

        About::find($id)->update([
            'headTitle'     =>  $request->headTitle,
            'navbarTitle'   =>  $request->navbarTitle,
            'upTitle'       =>  $request->upTitle,
            'title'         =>  $request->title,
        ]);


        return redirect('/admin/contactAbout');

    }

    public function addAboutEdit(Request $request, $id)
    {

        $request->validate([
            'aboutTitle'     => 'required|string',
            'aboutContent'   => 'required|string'
        ]);

        About::find($id)->update([
            'aboutTitle'     =>  $request->aboutTitle,
            'aboutContent'   =>  $request->aboutContent
        ]);

        return redirect('/admin/contactAbout');
    }

    public function deleteImage()
    {
       

    }
 
}
