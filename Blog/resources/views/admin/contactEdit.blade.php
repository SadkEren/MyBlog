@extends('layouts.default2')

@section('content')



<div class="row">
    <div class="container-fluid">
        <div class="col-xl-12 col-lg-7">
            <h3>Contact </h3>
            <div class="card shadow mb-4">
                <div class="card-body">

                    <form action="{{url('/admin/contactEdit',$gel->id)}}" method="POST">
                        {{ csrf_field() }}
                        
                        <input type="text" name="email" required class="form-control" value="{{$gel->email}}"><br>
                        <input type="text" name="phone" required class="form-control" value="{{$gel->phone}}"><br>
                        <input type="text" name="instagram" required class="form-control" value="{{$gel->instagram}}"><br>
                        <input type="text" name="twitter" required class="form-control" value="{{$gel->twitter}}"><br>
                        <input type="text" name="linkedin" required class="form-control" value="{{$gel->linkedin}}"><br>

                        <button class="btn btn-primary " type="submit" id="button-addon2">Edit Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
