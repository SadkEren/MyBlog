@extends('layouts.default')
@section('header')

<header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Clean Blog</h1>
                    <span class="subheading">A Blog Theme by Start Bootstrap</span>
                </div>
            </div>
        </div>
    </div>
</header>

@endsection

@section('content')

<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <p>Damlaya damlaya göl olur</p>
                <div class="my-5">
                
                    <form method="POST" action="{{url('addPostSend')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-floating">
                            <input name="upTitle" class="form-control" type="text" placeholder="Enter your name..."  />
                            <label for="name">Up Title</label>
                        </div>
                        <div class="form-floating">
                            <input name="title" class="form-control" required type="text" placeholder="Enter your title..."  />
                            <label for="email">Title</label>
                        </div>
                        <div class="form-floating">
                            <p>Content</p>                           
                            <textarea name="content" class="form-control"  id="post-content" placeholder="Enter your content here..." style="height: 12rem" ></textarea>
                        </div>
                        <div class="form-floating">
                            <input name="postImage"  class="form-control" required  type="file" />
                            <label for="image">Image</label>
                        </div>
                        <input name="userName" type="hidden" value="{{Auth::user()->name}}" >

                        <br/>
                       

                        
                        <input class="btn btn-primary text-uppercase" type="submit" value="send" >
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection


@section('ckeditor')
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#post-content' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endsection