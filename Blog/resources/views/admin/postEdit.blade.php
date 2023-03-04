@extends('layouts.default2')

@section('content')




<div class="row">
    <div class="container-fluid">
        <div class="col-xl-12 col-lg-7">
            <h3>Posts </h3>
            <div class="card shadow mb-4">
                <div class="card-body">

                    <form action="{{url('/admin/postEdit',$gel->id)}}" method="POST">
                        {{ csrf_field() }}
                        
                        <input type="text" name="upTitle" required class="form-control" value="{{$gel->upTitle}}"><br>
                        <input type="text" name="title" required class="form-control" value="{{$gel->title}}"><br>
                        <input type="text" name="userName" required class="form-control" value="{{$gel->userName}}"><br>
                        <textarea name="content" class="form-control"  id="about-content2"  style="height: 12rem" >{{$gel->content}}</textarea><br><br>
                        
                        <button class="btn btn-primary " type="submit">Edit Save</button>

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
            <h3>Posts Image </h3>
            <div class="card shadow mb-4">
                <div class="card-body">

    
                    <a href="/images/{{$gel->postImage}}" download>
                        <img 
                        src="/images/{{$gel->postImage}}" 
                        alt="..." 
                        class="img-fluid img-thumbnail mt-4 mb-2" 
                        style="width: 450px; z-index: 1" >
                    </a>

                    <input type="hidden" name="postImage" value="{{$gel->postImage}}">
                    
                    @if($gel->postImage)
                    <a href="{{url('admin/deletePostImage/'.$gel->id)}}" class="btn btn-danger">Delete</a>
                    @endif


                    <form action="{{url('/admin/saveNewPostImage/'.$gel->id)}}"  method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @method('PUT')
                        
                        <label>Upload Image</label>
                        <div class="input-group mb-3"> 
                            <input type="file" name="postImage" required class="form-control" >
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