@extends('layouts.default2')

@section('content')


<div class="row">
    <div class="container-fluid">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-body">


                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Up Title</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Post Image</th>
                                    <th>User Name</th>
                                    <th></th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                @foreach ($gel as $a)                       
                                <tr>
                                    <td>{{$a->upTitle}}</td>
                                    <td>{{$a->title}}</td>
                                    <td>content</td>
                                    <td>
                                        <img 
                                        src="/images/{{$a->postImage}}" 
                                        alt="..." 
                                        class="img-fluid img-thumbnail  mb-2" 
                                        style="width: 150px; z-index: 1" >
                                    </td>
                                    <td>{{$a->userName}}</td>
                                    <th>
                                        <a class="btn btn-primary" href="{{url('admin/postEditGet',$a->id) }}"> Edit</a>
                                        <a class="btn btn-danger" href="{{url('admin/postDelete',$a->id) }}"> Delete</a>     
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