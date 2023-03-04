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

    public function deleteImage(Request $request, $id)
    {

        $sil = About::find($id);
        $resimYol = public_path().'/images/'.$sil->aboutImage;
        unlink($resimYol);

        About::find($id)->update([
            'aboutImage' => null
        ]);

        return redirect('/admin/contactAbout');
    }


    public function saveNewImage(Request $request, $id){

        $request->validate([
            'aboutImage'    => 'required|mimes:jpeg,png,jpg,gif|max:5048'
        ]);

        $gelen = About::find($id);
        $destination = public_path('images', $gelen->aboutImage);

        if(File::exists($destination))
        {
            File::delete($destination);
        }

        $newImage2 = time(). '-' . $gelen->aboutTitle. '.' . $request->aboutImage->extension();
        $request->aboutImage->move(public_path('images'), $newImage2);

        $a = About::find($id)->update([
           'aboutImage' => $newImage2
        ]);
 
        return redirect('/admin/contactAbout');
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

    public function contactEditGet($id)
    {
        $gel = Contact::find($id);
        return view('/admin/contactEdit',compact('gel'));
    }
 
    public function contactEdit(Request $request, $id)
    {

        $request->validate([
            'email'      => 'required|string',
            'phone'      => 'required|string',
            'instagram'  => 'required|string',
            'twitter'    => 'required|string',
            'linkedin'   => 'required|string'
        ]);

        Contact::find($id)->update([
            'email'     =>  $request->email,
            'phone'     =>  $request->phone,
            'instagram' =>  $request->instagram,
            'twitter'   =>  $request->twitter,
            'linkedin'  =>  $request->linkedin
        ]);

        return redirect('/admin/contactAbout');
    }

    public function contactDelete($id)
    {
        Contact::find($id)->delete();
        return redirect('/admin/contactAbout');
    }
//__________________________________________________
//Posts


    public function postEditGet($id)
    {
        $gel = Post::find($id);
        return view('/admin/postEdit',compact('gel'));
    }


    public function postEdit(Request $request, $id)
    {

        $request->validate([
            'upTitle'  => 'required|string',
            'title'    => 'required|string',
            'content'  => 'required|string',
            'userName' => 'required|string'
        ]);

        Post::find($id)->update([
            'upTitle'  =>  $request->upTitle,
            'title'    =>  $request->title,
            'content'  =>  $request->content,
            'userName' =>  $request->userName
        ]);

        return redirect('/admin/posts');

    }

    public function deletePostImage(Request $request, $id)
    {

        $sil = Post::find($id);
        $resimYol = public_path().'/images/'.$sil->postImage;
        unlink($resimYol);

        Post::find($id)->update([
            'postImage' => null
        ]);

        return redirect('/admin/posts');
    }


    public function saveNewPostImage(Request $request, $id){

        $request->validate([
            'postImage'    => 'required|mimes:jpeg,png,jpg,gif|max:5048'
        ]);

        $gelen = Post::find($id);
        $destination = public_path('images', $gelen->postImage);

        if(File::exists($destination))
        {
            File::delete($destination);
        }

        $newImage2 = time(). '-' . $gelen->upTitle. '.' . $request->postImage->extension();
        $request->postImage->move(public_path('images'), $newImage2);

        $a = Post::find($id)->update([
           'postImage' => $newImage2
        ]);
 
        return redirect('/admin/posts');
    }

    public function postDelete($id)
    {
        Post::find($id)->delete();
        return redirect('/admin/posts');
    }

}
