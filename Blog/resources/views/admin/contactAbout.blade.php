@extends('layouts.default2')

@section('content')


<div class="row">
    <div class="container-fluid">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-body">

                    <div class="table-responsive">
                        <h5>About</h5>
                        <a href="{{url('admin/addAbout')}}"><button class="btn btn-primary" >Add About</button></a><br><br>         
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Head Title</th>
                                    <th>Navbar Title</th>
                                    <th>UpTitle</th>
                                    <th>Title</th>
                                    <th>About Content</th>
                                    <th>About Image</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($gel as $a)                       
                                <tr>
                                    <td>{{$a->headTitle}}</td>
                                    <td>{{$a->navbarTitle}}</td>
                                    <td>{{$a->upTitle}}</td>
                                    <td>{{$a->title}}</td>
                                    <td></td>
                                    <td>{{$a->aboutImage}}</td>
                                    <th>
                                        <a class="btn btn-primary" href="{{url('admin/aboutEditGet',$a->id) }}"> Edit</a>
                                        <a class="btn btn-danger" href="{{url('admin/aboutDelete',$a->id) }}"> Delete</a>
                                    </th>                                  
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <div class="table-responsive">
                        <h5>Contact</h5>
                        <a href="{{url('admin/addContact')}}" ><button class="btn btn-primary">Add Contact</button></a><br><br>
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Instagram</th>
                                    <th>Twitter</th>
                                    <th>Linkedin</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($gel2 as $a)                       
                                <tr>
                                    <td>{{$a->email}}</td>
                                    <td>{{$a->phone}}</td>
                                    <td>{{$a->instagram}}</td>
                                    <td>{{$a->twitter}}</td>
                                    <td>{{$a->linkedin}}</td>
                                    <th>
                                        <button class="btn btn-primary">Edit</button>
                                        <button class="btn btn-danger">Delete</button>    
                                    </th>                                  
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>


@endsection