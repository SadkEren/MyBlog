@extends('layouts.default2')

@section('content')


<div class="row">
    <div class="container-fluid">
        <div class="col-xl-12 col-lg-7">
            <h3>Setting</h3>
            <div class="card shadow mb-4">
                <div class="card-body">

                    <form action="{{url('/admin/addAboutSettingEdit',$gel->id)}}" method="POST">
                        {{ csrf_field() }}
                        <div class="input-group mb-3"> 
                            <input type="text" name="headTitle" required class="form-control" placeholder="Head Title" value="{{$gel->headTitle}}">
                            <input type="text" name="navbarTitle" required class="form-control" placeholder="Navbar Title" value="{{$gel->navbarTitle}}">
                            <input type="text" name="upTitle" required class="form-control" placeholder="Up Title" value="{{$gel->upTitle}}">
                            <input type="text" name="title" required class="form-control" placeholder="Title" value="{{$gel->title}}">
                            <button class="btn btn-primary " type="submit" id="button-addon2">Edit Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<br>

<div class="row">
    <div class="container-fluid">
        <div class="col-xl-12 col-lg-7">
            <h3>About </h3>
            <div class="card shadow mb-4">
                <div class="card-body">

                    <form action="{{url('/admin/addAboutEdit',$gel->id)}}" method="POST">
                        {{ csrf_field() }}
                        
                        <input type="text" name="aboutTitle" required class="form-control" placeholder="About Title" value="{{$gel->aboutTitle}}">
                        <br>
                        <textarea name="aboutContent" class="form-control"  id="about-content2" placeholder="Enter your content here..." style="height: 12rem" >{{$gel->aboutContent}}</textarea>
                        <br>
                        <br>
                        <button class="btn btn-primary " type="submit" id="button-addon2">Edit Save</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<br>

<div class="row">
    <div class="container-fluid">
        <div class="col-xl-12 col-lg-7">
            <h3>About Image </h3>
            <div class="card shadow mb-4">
                <div class="card-body">

    
                    <a href="/images/{{$gel->aboutImage}}" download>
                        <img 
                        src="/images/{{$gel->aboutImage}}" 
                        alt="..." 
                        class="img-fluid img-thumbnail mt-4 mb-2" 
                        style="width: 450px; z-index: 1" >
                    </a>

                    <input type="hidden" name="aboutImage" value="{{$gel->aboutImage}}">
                    
                    @if($gel->aboutImage)
                    <a href="{{url('admin/deleteImage/'.$gel->id)}}" class="btn btn-danger">Delete</a>
                    @endif


                    <form action="{{url('/admin/saveNewImage/'.$gel->id)}}" enctype="multipart/form-data" method="POST">
                    {{ csrf_field() }}
                    @method('PUT')
                        
                        <label>Upload Image</label>
                        <div class="input-group mb-3"> 
                            <input type="file" name="aboutImage" required class="form-control" >
                            <button class="btn btn-primary" type="submit">New Image Save</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('ckeditor2')
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#about-content2' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endsection