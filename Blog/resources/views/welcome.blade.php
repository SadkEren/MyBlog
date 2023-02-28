@extends('layouts.default')


@section('header')

<header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    @isset($gel2)
                    <h1>{{$gel2->upTitle}}</h1>                   
                    <span class="subheading">{{$gel2->title}}</span>
                    @endisset
                </div>
            </div>
        </div>
    </div>
</header>

@endsection

@section('content')



 <!-- Main Content-->
 <div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <!-- Post preview-->

            @foreach ($gel3 as $a)
                
            <div class="post-preview">
                <a href="{{url('/showPost',[$a->id])}}">
                    <h2 class="post-title">{{$a->upTitle}}</h2>
                    <h3 class="post-subtitle">{{$a->title}}</h3>
                </a>
                <p class="post-meta">
                    Posted by
                    <a href="#">{{$a->userName}}</a>
                    {{$a->created_at}}
                </p>
            </div>
            <hr class="my-4" />

            @endforeach
            
          
        </div>
    </div>
</div>

@endsection