@extends('layouts.default2')

@section('content')

<div class="row">
    <div class="container-fluid">
        <div class="col-xl-12 col-lg-7">
            <h3>About / Settings Page</h3>
            <div class="card shadow mb-4">
                <div class="card-body">

                    <form action="{{url('/admin/addAboutnew2')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <label>Setting Part</label>
                        <div class="input-group mb-3"> 
                            <input type="text" name="headTitle" required class="form-control" placeholder="Head Title">
                            <input type="text" name="navbarTitle" required class="form-control" placeholder="Navbar Title">
                            <input type="text" name="upTitle" required class="form-control" placeholder="Up Title">
                            <input type="text" name="title" required class="form-control" placeholder="Title">
                        </div>
                        <br>
                        <label>About Part</label>
                            <input type="text" name="aboutTitle" required class="form-control" placeholder="About Title"><br>
                            <textarea name="aboutContent"  class="form-control"  id="about-content" placeholder="Enter your content here..." style="height: 12rem" ></textarea><br> 
                            <input type="file" name="aboutImage" required class="form-control" ><br>                  
                            <button class="btn btn-primary " type="submit" id="button-addon2">Save</button>
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
        .create( document.querySelector( '#about-content' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endsection